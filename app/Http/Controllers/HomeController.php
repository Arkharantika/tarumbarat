<?php

namespace App\Http\Controllers;

use App\Models\Hardware;
use App\Models\RawData;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // return 'ini halaman administrasi data';
        return view('home');
    }

    // public function dataposhidrologi()
    // {
    //     $ars=[];
    //     $ars_max=[];
    //     $ars_min=[];
    //     $a=0;
    //     $hardware = Hardware::all();
    //     foreach($hardware as $now => $value)
    //     {
    //         $sink = $value->kd_hardware;
    //         $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('trs_raw_d_gpa.kd_sensor','waterlevel')->get()->last();
    //         $valuemax = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('trs_raw_d_gpa.kd_sensor','waterlevel')->max('value');;
    //         $valuemin = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('trs_raw_d_gpa.kd_sensor','waterlevel')->min('value');;
    //         // $b = $value->kd_hardware;
    //         if (isset($records)) {
    //             $ars[$now] = $records; 
    //             $ars_max[$now] = $valuemax; 
    //             $ars_min[$now] = $valuemin; 
    //         }
    //     }
    //     // return $ars;
    //     return view('dataposhidrologi',compact('ars','ars_max','ars_min'));
    // }
    public function dataposhidrologi()
    {
        $ars=[];
        $ars_max=[];
        $ars_min=[];
        $a=0;
        $hardware = Hardware::all();
        $ars = Hardware::all();
        // foreach($hardware as $now => $value)
        // {
        //     $sink = $value->kd_hardware;
        //     $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('trs_raw_d_gpa.kd_sensor','waterlevel')->get()->last();
        //     $valuemax = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('trs_raw_d_gpa.kd_sensor','waterlevel')->max('value');;
        //     $valuemin = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('trs_raw_d_gpa.kd_sensor','waterlevel')->min('value');;
        //     // $b = $value->kd_hardware;
        //     if (isset($records)) {
        //         $ars[$now] = $records; 
        //         $ars_max[$now] = $valuemax; 
        //         $ars_min[$now] = $valuemin; 
        //     }
        // }
        // return $ars;
        return view('dataposhidrologi',compact('ars'));
    }
    
    public function neracaair()
    {
        return view('neracaair');
    }

    public function editpos($id)
    {
        // return $id;
        $check = Hardware::where('kd_hardware',$id)->get()->last();
        // return $check;
        return view('editposhardware',compact('check'));
    }
    
    public function changePos(Request $request,$id)
    {
        // return $request;
        $check = Hardware::where('kd_hardware',$id)->get()->last();
        $ganti = Hardware::where('kd_hardware',$id)->update([
            "pos_name" => $request->pos_name,
            "location" => $request->location,
            "latitude" => $request->latitude,
            "longitude" => $request->longitude,
            "no_gsm" => $request->no_gsm,
            "kd_provinsi" => $request->kd_provinsi,
            "kd_kabupaten" => $request->kd_kabupaten,
            "kd_kecamatan" => $request->kd_kecamatan,
            "kd_desa" => $request->kd_desa,
        ]);

        return redirect('/dataposhidrologi')->with('message','Data berhasil di update !');
    }

    public function deletepos($kd)
    {
        // return 0;
        // return $kd;
        $check = Hardware::where('kd_hardware',$kd)->delete();
        // return $check;
        // $check->delete();
        return redirect('/dataposhidrologi')->with('warning','Data Berhasil Di Delete !');
    }
}
