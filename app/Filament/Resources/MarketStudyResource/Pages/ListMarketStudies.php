<?php

namespace App\Filament\Resources\MarketStudyResource\Pages;

use App\Filament\Resources\MarketStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarketStudies extends ListRecords
{
    protected static string $resource = MarketStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
