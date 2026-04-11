<?php

namespace App\Filament\Resources\Schedules\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;
use App\Models\Subject;
use App\Models\Teacher;

class ScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('subject_id')
                    ->label('المادة')
                    ->relationship('subject', 'name')
                    ->required(),

                Select::make('teacher_id')
                    ->label('الأستاذ')
                    ->relationship('teacher', 'name')
                    ->required(),

                Select::make('day')
                    ->label('اليوم')
                    ->options([
                        'Sunday' => 'الاحد',
                        'Monday' => 'الاثنين',
                        'Tuesday' => 'الثلاثاء',
                        'Wednesday' => 'الأربعاء',
                        'Thursday' => 'الخميس',
                        
                        'Saturday' => 'السبت',
                    ])
                    ->required(),

                TimePicker::make('start_time')
                    ->label('وقت البداية')
                    ->format('H:i')
                    ->required()
                    ->default('08:00'),

                TimePicker::make('end_time')
                    ->label('وقت النهاية')
                    ->format('H:i')
                    ->required()
                    ->default('12:00'),

            ]);
    }
}
