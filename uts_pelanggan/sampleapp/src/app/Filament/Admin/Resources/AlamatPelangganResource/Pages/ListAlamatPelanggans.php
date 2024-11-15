<?php

namespace App\Filament\Admin\Resources\AlamatPelangganResource\Pages;

use App\Filament\Admin\Resources\AlamatPelangganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlamatPelanggans extends ListRecords
{
    protected static string $resource = AlamatPelangganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
