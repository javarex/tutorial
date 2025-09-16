<?php

namespace App\Filament\Resources\JobOrders\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class JobOrderInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('job_order_number'),
                TextEntry::make('service_type'),
                TextEntry::make('date_requested')
                    ->date(),
                TextEntry::make('date_started')
                    ->date(),
                TextEntry::make('date_target')
                    ->date(),
                TextEntry::make('date_finished')
                    ->date(),
                TextEntry::make('service_status'),
                TextEntry::make('re_job_order_id')
                    ->numeric(),
                TextEntry::make('customer_id')
                    ->numeric(),
                TextEntry::make('employee_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
