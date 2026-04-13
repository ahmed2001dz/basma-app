<?php

namespace App\Filament\Pages;

use App\Models\Schedule;
use Filament\Pages\Page;
use UnitEnum;

class ViewTimetable extends Page
{
    protected string $view = 'filament.pages.view-timetable';

    protected static ?string $title = 'جدول الحصص';




    public function getViewData(): array
    {
        return [
            'schedules' => Schedule::with(['subject', 'teacher'])->get(),
            'days' => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday',  'Saturday'],
            'timeSlots' => [
                '08:00' => '08:00 - 10:00', // الفترة الصباحية 1
                '10:00' => '10:00 - 12:00', // الفترة الصباحية 2
                '13:00' => '13:00 - 14:30', // الفترة المسائية 1
                '14:30' => '14:30 - 16:00', // الفترة المسائية 2
            ],
        ];
    }

    public static function getNavigationGroup(): string|UnitEnum|null
    {
        return __('Content');
    }

}
