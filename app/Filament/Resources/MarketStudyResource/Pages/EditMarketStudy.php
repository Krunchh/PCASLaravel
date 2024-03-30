<?php

namespace App\Filament\Resources\MarketStudyResource\Pages;

use App\Filament\Resources\MarketStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMarketStudy extends EditRecord
{
    protected static string $resource = MarketStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
