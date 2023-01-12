<?php

namespace App\Exports;

use App\Models\GamePlayer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportGameplayers implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GamePlayer::select("id", "email", "result", "created_at", "code")->get();
    }

    // public function query()
    // {
    //     return GamePlayer::query();
    // }

    public function headings(): array
    {
        return ['ID', 'Email', 'Result', 'Created At', 'Code'];
    }
}
