<?php

namespace App\Filament\Widgets;

use App\Models\Admin\DonationTransaction;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Facades\Log;

class DonationsChart extends ChartWidget
{
    protected static ?int $sort = 10;
    protected int | string | array $columnSpan = 2;

    protected ?string $heading = 'Donations Chart';

    // protected string $color = 'danger';


    protected function getData(): array
    {
        $activeFilter = $this->filter;

        Log::info('Active filter', [$activeFilter]);

        $data = Trend::model(DonationTransaction::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();


        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'backgroundColor' => '#f56600',
                    // 'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Today',
            'week' => 'Last week',
            'month' => 'Last month',
            'year' => 'This year',
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
