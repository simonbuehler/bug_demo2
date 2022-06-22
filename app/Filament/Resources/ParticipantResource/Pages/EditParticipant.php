<?php

namespace App\Filament\Resources\ParticipantResource\Pages;

use App\Filament\Resources\ParticipantResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParticipant extends EditRecord
{
    protected static string $resource = ParticipantResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
