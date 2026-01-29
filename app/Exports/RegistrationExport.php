<?php

namespace App\Exports;

use App\Models\registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegistrationExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return registration::all();
    }

    // to get the column name in exporting time then first import the WithHeadings and then exten it adn then writ below function 
    // only then and then you will get the column names on exportin time
    public function headings(): array
    {
        return [
            'Id',
            'User_id',
            'Event_id',
            'Name',
            'Email',
            'Phone',
            'Created At',
            'Updated At'
        ];
    }
}
