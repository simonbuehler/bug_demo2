<?php

namespace App\Filament\Resources\ParticipantResource\Pages;

use App\Filament\Resources\ParticipantResource;
use App\Models\Participant;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ListParticipants extends ListRecords
{
    protected static string $resource = ParticipantResource::class;

    public function getTableRecordKey(Model $record): string
    {
        return 'id';
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [ 10,20];
    }

    protected function getActions(): array
    {
        return [
        ];
    }

    protected function getTableQuery(): Builder
    {
        return Participant::select(DB::raw('DATE(registered_at) as date'),
            DB::raw('count(*) as total'))->orderBy('date', 'DESC')->groupBy('date');
    }
}
