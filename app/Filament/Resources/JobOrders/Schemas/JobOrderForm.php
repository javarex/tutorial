<?php

namespace App\Filament\Resources\JobOrders\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class JobOrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('job_order_number')
                    ->required(),
                TextInput::make('service_type')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                DatePicker::make('date_requested'),
                DatePicker::make('date_started'),
                DatePicker::make('date_target'),
                DatePicker::make('date_finished'),
                TextInput::make('re_job_order_id')
                    ->required()
                    ->numeric(),
                TextInput::make('customer_id')
                    ->required()
                    ->numeric(),
                TextInput::make('employee_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
