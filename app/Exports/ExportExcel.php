<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportExcel implements FromArray,WithStyles,WithHeadings
{

    protected $invoices;
    protected $nama_pos;
    protected $lokasi;
    protected $latitude;
    protected $longitude;

    public function __construct(array $invoices,$nama_pos,$lokasi,$latitude,$longitude)
    {
        $this->invoices = $invoices;
        $this->nama_pos = $nama_pos;
        $this->lokasi = $lokasi;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('B2')->getFont()->setBold(true);
    }

    public function headings(): array
    {
        return [[
            'Nama POS',
            $this->nama_pos,
            // $this->additionalVariable,
        ],[
            'Lokasi',
            $this->lokasi,
        ],[
            'Latitude',
            $this->latitude,
        ],[
            'Longitude',
            $this->longitude,
        ],['',''],['No','Nilai','Waktu']
    ];
    }

    public function array(): array
    {
        return $this->invoices;
    }
}
