<?php

namespace App\Filament\Widgets;

use App\Models\Admin\ContactForm;
use App\Models\Admin\DonationTransaction;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Number;

class StatsOverview extends StatsOverviewWidget
{
    protected ?string $pollingInterval = '10s';

    protected ?string $heading = 'Analytics';

    protected ?string $description = 'An overview of some analytics.';

    protected function getStats(): array
    {


        $contactFormEntries = Cache::remember(ContactForm::COUNT_CACHE_KEY, 60, function () {
            $count = ContactForm::query()->count();
            return Number::abbreviate($count);
        });

        $successfulDonates = Cache::remember(DonationTransaction::COUNT_CACHE_KEY, 60, function () {
            $count = DonationTransaction::query()->successful()->count();
            return Number::abbreviate($count);
        });

        return [
            Stat::make('Donations', $successfulDonates)
                // ->description('32k increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Contact Form Entries', $contactFormEntries)
                // ->description('7% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('info'),

            Stat::make('News Subscription', 0)
                // ->description('3% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
        ];
    }
}
