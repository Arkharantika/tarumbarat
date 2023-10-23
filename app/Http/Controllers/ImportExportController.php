<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ImportExcel;
use App\Exports\ExportExcel;
use App\Models\Hardware;
use DB;
use Carbon\Carbon;
// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    public function import() 
    {
        Excel::import(new ImportExcel,request()->file('file'));
             
        return back()->with('message','Data berhasil di import ! ');
    }

    public function export(Request $request,$id)
    {
        $chance = strval($id);
        $awal = $request->startdate;
        $akhir = $request->enddate;
        $recorddetail = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
        $startDate = Carbon::parse($request->startdate)->startOfDay(); // Convert to datetime object and set to start of the day
        $endDate = Carbon::parse($request->enddate)->endOfDay();

        if($request->pilihan == 'harian'){

            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                    ->select(DB::raw('DATE(trs_raw_d_gpa.tlocal) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                    ->groupBy('hari')
                    ->get();
            // return $records;

            $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->hari),strval($jungul->nilai)];
            }
            // $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $provinsi = $recorddetail->kd_provinsi;
            $kabupaten = $recorddetail->kd_kabupaten;
            $kecamatan = $recorddetail->kd_kecamatan;
            $desa = $recorddetail->kd_desa;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa);
        
            return Excel::download($export, 'Donwload.xlsx');
        }
        if($request->pilihan == 'interval kirim')
        {
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                    ->select(DB::raw('(trs_raw_d_gpa.tlocal) as hari'), DB::raw('(trs_raw_d_gpa.value) as nilai'))
                    // ->groupBy('hari')
                    // ->get();
                    // ->groupBy('hari')
                    ->get();
    
                    $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->hari),strval($jungul->nilai)];
            }
            // $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $provinsi = $recorddetail->kd_provinsi;
            $kabupaten = $recorddetail->kd_kabupaten;
            $kecamatan = $recorddetail->kd_kecamatan;
            $desa = $recorddetail->kd_desa;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa);
        
            return Excel::download($export, 'Donwload.xlsx');
        }
        if($request->pilihan == 'bulanan')
        {
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(
                    DB::raw('DATE_FORMAT(trs_raw_d_gpa.tlocal, "%Y-%m") as hari'),
                    DB::raw('AVG(trs_raw_d_gpa.value) as nilai')
                )
                ->groupBy('hari')
                ->get();

            $data = [];
            $count = 0;
            foreach($records as $kampret => $jungul)
            {
                $count++;
                $data[$count]= [strval($count),strval($jungul->hari),strval($jungul->nilai)];
            }
            // $recorddetail = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
            $nama_pos = $recorddetail->pos_name;
            $lokasi = $recorddetail->location;
            $latitude = $recorddetail->latitude;
            $longitude = $recorddetail->longitude;
            $provinsi = $recorddetail->kd_provinsi;
            $kabupaten = $recorddetail->kd_kabupaten;
            $kecamatan = $recorddetail->kd_kecamatan;
            $desa = $recorddetail->kd_desa;
            $export = new ExportExcel($data,$nama_pos,$lokasi,$latitude,$longitude,$provinsi,$kabupaten,$kecamatan,$desa);
        
            return Excel::download($export, 'Donwload.xlsx');
        }
    }
}
