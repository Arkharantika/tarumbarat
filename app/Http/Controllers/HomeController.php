<?php

namespace App\Http\Controllers;

use App\Models\Hardware;
use App\Models\RumusRatingCurve;
use App\Models\RawData;
use App\Imports\ImportExcel;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $rumus = RumusRatingCurve::all()->last();
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
        return view('dataposhidrologi',compact('ars','rumus'));
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

    public function Testing()
    {
        return view('layouts.layoutnewlandingpage');
    }

    public function tambahpos()
    {
        return view('tambahpos');
        // return 3344;
    }

    public function addnewpos(Request $request)
    {
        // return $request;
        $check = Hardware::where('kd_hardware',$request->kd_hardware)->get()->count();
        // $checkist = $check->no_gsm;
        if($check > 0)
        {
            // return $check;
            $masuk = Hardware::where('kd_hardware',$request->kd_hardware)->update([
                //Add unique field combo to match here
                //For example, perhaps you only want one entry per user:
                'kd_hardware'   => $request->kd_hardware,
                'kd_logger'     => $request->kd_logger,
                'uid' => $request->uid,
                'tlocal'    => $request->tlocal,
                'tzone'   => $request->tzone,
                'latitude'       => $request->latitude,
                'longitude'   => $request->longitude,
                'location'    => $request->location,
                'pos_name'    => $request->pos_name,
                'send_interval'    => $request->send_interval,
                'kd_provinsi'    => $request->kd_provinsi,
                'kd_kabupaten'    => $request->kd_kabupaten,
                'kd_kecamatan'    => $request->kd_kecamatan,
                'kd_desa'    => $request->kd_desa,
                'no_gsm'    => $request->no_gsm,
                'type'    => 'manual',
    
            ]);
    
            Excel::import(new ImportExcel,request()->file('file'));

            return redirect('/dataposhidrologi')->with('message','Pos berhasil di Tambah !');
        }
        else{
            // return $check;
            $masuk = Hardware::create([
                //Add unique field combo to match here
                //For example, perhaps you only want one entry per user:
                'kd_hardware'   => $request->kd_hardware,
                'kd_logger'     => $request->kd_logger,
                'uid' => $request->uid,
                'tlocal'    => $request->tlocal,
                'tzone'   => $request->tzone,
                'latitude'       => $request->latitude,
                'longitude'   => $request->longitude,
                'location'    => $request->location,
                'pos_name'    => $request->pos_name,
                'send_interval'    => $request->send_interval,
                'kd_provinsi'    => $request->kd_provinsi,
                'kd_kabupaten'    => $request->kd_kabupaten,
                'kd_kecamatan'    => $request->kd_kecamatan,
                'kd_desa'    => $request->kd_desa,
                'no_gsm'    => $request->no_gsm,
                'type'    => 'manual',
    
            ]);
    
            Excel::import(new ImportExcel,request()->file('file'));

            return redirect('/dataposhidrologi')->with('message','Pos berhasil di Tambah !');
        }
    }

    public function editrating(Request $request)
    {
        $rumus = RumusRatingCurve::updateOrCreate([
            'id'=>1
        ],[
            'k1'=>$request->k1,
            'k2'=>$request->k2,
            'k3'=>$request->k3,
        ]);

        return redirect('/dataposhidrologi')->with('message','Rumus K berhasil di Update !');
    }
}
