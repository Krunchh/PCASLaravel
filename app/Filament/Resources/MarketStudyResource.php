<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MarketStudyResource\Pages;
use App\Filament\Resources\MarketStudyResource\RelationManagers;
use App\Models\MarketStudy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MarketStudyResource extends Resource
{
    protected static ?string $model = MarketStudy::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?string $navigationGroup = 'EXTERNAL LINKS';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMarketStudies::route('/'),
            'create' => Pages\CreateMarketStudy::route('/create'),
            'edit' => Pages\EditMarketStudy::route('/{record}/edit'),
        ];
    }
}
