<?php

namespace App\Filament\Widgets;

use App\Models\Admin\DonationTransaction;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Log;

class DonationsChart extends ChartWidget
{
    protected static ?int $sort = 10;
    protected int | string | array $columnSpan = 2;


    public function getHeading(): string | Htmlable | null
    {
        return 'Donations received in ' . ($this->filter ?: date('Y'));
    }


    protected function getData(): array
    {
        $activeFilter = $this->filter;

        Log::info('Active filter', [$activeFilter]);

        $data = Trend::query(
            DonationTransaction::query()
                ->successful()
                ->whereYear('created_at', $activeFilter ?: date('Y'))
        )
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->sum('amount');


        return [
            'datasets' => [
                [
                    'label' => 'Donations received',
                    // 'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'data' => $data->map(fn(TrendValue $value) => round($value->aggregate / 100, 2)),
                    // 'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getFilters(): ?array
    {
        return [
            date('Y') => 'This year',
            date('Y') - 1 => date('Y') - 1,
            date('Y') - 2 => date('Y') - 2,
            date('Y') - 3 => date('Y') - 3,
            date('Y') - 4 => date('Y') - 4,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
