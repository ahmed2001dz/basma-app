<?php

namespace App\Filament\Resources\Users\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;

class StatsOverview extends StatsOverviewWidget
{

    protected int | string | array $columnSpan = 1;
    protected function getStats(): array
    {
         return [
              Stat::make('Total Users', User::count())
            ->description('users increase')
            ->translateLabel()
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7, 2, 10, 3, 15, 4, 17]),
              Stat::make('Active Users', User::where('is_active', true)->count())
            ->description('active users')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('info')
            ->chart([7, 2, 10, 3, 15, 4, 17]),
                Stat::make('Inactive Users', User::where('is_active', false)->count())
            ->description('inactive users')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger')
            ->chart([7, 2, 10, 3, 15, 4, 17])



        ];
    }
}
