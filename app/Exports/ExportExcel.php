<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ExportExcel implements FromArray,WithStyles,WithHeadings,ShouldAutoSize
{

    protected $invoices;
    protected $nama_pos;
    protected $lokasi;
    protected $latitude;
    protected $longitude;
    protected $provinsi;

    public function __construct(array $invoices,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa)
    {
        $this->invoices = $invoices;
        $this->nama_pos = $nama_pos;
        $this->lokasi = $lokasi;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->provinsi = $provinsi;
        $this->kabupaten = $kabupaten;
        $this->kecamatan = $kecamatan;
        $this->desa = $desa;

    }

    public function styles(Worksheet $sheet)
    {
        $borderStyle = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];
        
        // $sheet->getStyle('B2')->getFont()->setBold(true);
        $sheet->getStyle('A10')->applyFromArray($borderStyle);
        $sheet->getStyle('B10')->applyFromArray($borderStyle);
        $sheet->getStyle('C10')->applyFromArray($borderStyle);
        // $worksheet->getStyle('B2:G8')->applyFromArray($styleArray);
        // $sheet->setBorder('A1', 'thin');
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
        ],[
            'Provinsi',
            $this->provinsi,
        ],[
            'Kabupaten',
            $this->kabupaten,
        ],[
            'Kecamatan',
            $this->kecamatan,
        ],[
            'Desa',
            $this->desa,
        ],['',''],['No','Waktu','Nilai']
    ];
    }

    public function array(): array
    {
        return $this->invoices;
    }
}
