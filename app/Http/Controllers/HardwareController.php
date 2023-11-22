<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

use App\Models\Hardware;
use App\Models\RawData;
use App\Models\RumusRatingCurve;

class HardwareController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    public function HardwareDetailData($id)
    {
        
        $chance = strval($id);
        // return $chance;

        // $users = DB::table('trs_raw_d_gpa')->where('kd_hardware',$id)->get();
        $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)
                ->where('trs_raw_d_gpa.kd_sensor','waterlevel')
                ->get();
        $recorddetail = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)
                ->where('trs_raw_d_gpa.kd_sensor','waterlevel')
                ->get()
                ->last();

        // return $records;
        return view('hardwaredetail',compact('records','chance','recorddetail'));
    }

    public function HardwareDetailTable($id)
    {
	$rumus = RumusRatingCurve::all()->last();
        $chance = strval($id);
        $awal=null;
        $akhir=null;
        $pilihannya=null;
        // $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get();
        $recorddetail = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
        $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor','waterlevel')
                    ->select(DB::raw('(trs_raw_d_gpa.tlocal) as hari'), DB::raw('(trs_raw_d_gpa.value) as nilai'))
		            ->orderBy('hari', 'desc')
                    ->get();
	
        $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
            ->where('mst_hardware.kd_hardware', $id)
            ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
            ->select(
                DB::raw('(trs_raw_d_gpa.tlocal) as hari'),
                DB::raw('(trs_raw_d_gpa.value) as nilai'),
                DB::raw('(trs_raw_d_gpa.kd_hardware) as hwname')
            )
            ->groupBy('hwname', 'hari','nilai')
            ->orderBy('hari', 'desc')
            ->get();

        // return $records;
        return view('hardwaredetailtable',compact('records','chance','recorddetail','awal','akhir','pilihannya','rumus'));
        //return view('hardwaredetailtablenew',compact('records','chance','recorddetail','awal','akhir','pilihannya','rumus'));
    }

    public function HardwareDetailGraph($id)
    {
        $chance = strval($id);
        $awal=null;
        $akhir=null;
        $pilihannya=null;
        // $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get();
        $recorddetail = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
        $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor','waterlevel')
                    ->select(DB::raw('(trs_raw_d_gpa.tlocal) as hari'), DB::raw('(trs_raw_d_gpa.value) as nilai'))
                    ->get();
        // return $records;
        return view('hardwaredetailgraph',compact('records','chance','recorddetail','awal','akhir','pilihannya'));
    }

    public function HardwareDetailCCTV($id)
    {
        $chance = strval($id);
        $awal=null;
        $akhir=null;
        $pilihannya=null;
        // $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get();
        $recorddetail = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
        $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor','waterlevel')
                    ->select(DB::raw('(trs_raw_d_gpa.tlocal) as hari'), DB::raw('(trs_raw_d_gpa.value) as nilai'))
                    ->get();
        // return $records;
        $recordcctv = Hardware::join('image_ftp','image_ftp.img_num','=','mst_hardware.cctv')->where('mst_hardware.kd_hardware', $id)->get()->last();
        $arrayimg = Hardware::join('image_ftp','image_ftp.img_num','=','mst_hardware.cctv')->where('mst_hardware.kd_hardware', $id)->get()->slice(-3);
        if (!isset($recordcctv)){
            $recordcctv= ["img_name"=>"volvo"];
        }
        // $kentang = Hardware::where("kd_hardware",$id)->get();
        // $kentang = Hardware::all();
        // return $kentang;
        return view('hardwaredetailcctv',compact('records','chance','recorddetail','awal','akhir','pilihannya','recordcctv','arrayimg'));
    }

    public function SelectCCTVFromDateRange(Request $request,$id)
    {
        $chance = strval($id);
        // return $request;
        $awal = $request->startdate;
        $akhir = $request->enddate;
        $pilihannya=null;
        $startDate = Carbon::parse($request->startdate)->startOfDay(); // Convert to datetime object and set to start of the day
        $endDate = Carbon::parse($request->enddate)->endOfDay();
        // $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get();
        $recorddetail = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
        $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor','waterlevel')
                    ->select(DB::raw('(trs_raw_d_gpa.tlocal) as hari'), DB::raw('(trs_raw_d_gpa.value) as nilai'))
                    ->get();
        // return $records;
        $recordcctv = Hardware::join('image_ftp','image_ftp.img_num','=','mst_hardware.cctv')->where('mst_hardware.kd_hardware', $id)->get()->last();
        $arrayimg = Hardware::join('image_ftp','image_ftp.img_num','=','mst_hardware.cctv')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->whereBetween('image_ftp.created_at', [$startDate, $endDate])
                    ->get();
        // return $arrayimg; 
        return view('hardwaredetailcctv',compact('records','chance','recorddetail','awal','akhir','pilihannya','recordcctv','arrayimg'));
    }

    public function SelectGraphFromDateRange(Request $request,$id)
    {
        $chance = strval($id);
        // return $request;
        $awal = $request->startdate;
        $akhir = $request->enddate;
        $pilihannya = $request->pilihan;
	    if($pilihannya == null){
            return redirect()->back()->with('success', 'isi pilihan waktu'); 
        }
        $recorddetail = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();
        // return $request;
        if($request->pilihan == 'interval kirim'){
            $startDate = Carbon::parse($request->startdate)->startOfDay(); // Convert to datetime object and set to start of the day
            $endDate = Carbon::parse($request->enddate)->endOfDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                    ->select(DB::raw('(trs_raw_d_gpa.tlocal) as hari'), DB::raw('(trs_raw_d_gpa.value) as nilai'))
                    // ->groupBy('hari')
                    // ->get();
                    // ->groupBy('hari')
                    ->get();
    
            return view('hardwaredetailgraph',compact('records','chance','recorddetail','awal','akhir','pilihannya'));
        }
        if($request->pilihan == 'harian'){
            $startDate = Carbon::parse($request->startdate)->startOfDay(); // Convert to datetime object and set to start of the day
            $endDate = Carbon::parse($request->enddate)->endOfDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                    ->select(DB::raw('DATE(trs_raw_d_gpa.tlocal) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                    ->groupBy('hari')
                    ->get();

            return view('hardwaredetailgraph',compact('records','chance','recorddetail','awal','akhir','pilihannya'));
        }

	if ($request->pilihan == 'interval 10') {
            $startDate = Carbon::parse($request->startdate)->startOfMinute();
            $endDate = Carbon::parse($request->enddate)->endOfMinute()->addDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(DB::raw('FROM_UNIXTIME(CEIL(UNIX_TIMESTAMP(trs_raw_d_gpa.tlocal) / (60*10)) * 60 * 10) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                ->groupBy('hari')
                ->get();

                // return $records;
        
            return view('hardwaredetailgraph', compact('records', 'chance', 'recorddetail', 'awal', 'akhir', 'pilihannya'));
        }

        if ($request->pilihan == 'interval 30mnt') {
            $startDate = Carbon::parse($request->startdate)->startOfMinute();
            $endDate = Carbon::parse($request->enddate)->endOfMinute()->addDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(DB::raw('FROM_UNIXTIME(CEIL(UNIX_TIMESTAMP(trs_raw_d_gpa.tlocal) / (60*30)) * 60 * 30) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                ->groupBy('hari')
                ->get();

                // return $records;
        
            return view('hardwaredetailgraph', compact('records', 'chance', 'recorddetail', 'awal', 'akhir', 'pilihannya'));
        }

        if ($request->pilihan == 'interval jam') {
            $startDate = Carbon::parse($request->startdate)->startOfHour(); // Convert to datetime object and set to start of the hour
            $endDate = Carbon::parse($request->enddate)->endOfHour()->addDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(DB::raw('DATE_FORMAT(trs_raw_d_gpa.tlocal, "%Y-%m-%d %H:00:00") as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                ->groupBy('hari')
                ->get();
            // return $records;

            return view('hardwaredetailgraph', compact('records', 'chance', 'recorddetail', 'awal', 'akhir', 'pilihannya'));
        }

        if($request->pilihan == 'bulanan'){
            $startDate = Carbon::parse($request->startdate)->startOfDay(); // Convert to datetime object and set to start of the day
            $endDate = Carbon::parse($request->enddate)->endOfDay();
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
            // return $records;
            return view('hardwaredetailgraph',compact('records','chance','recorddetail','awal','akhir','pilihannya'));
        }
    }

    public function SelectDataFromDateRange(Request $request,$id)
    {
        $rumus = RumusRatingCurve::all()->last();
        $chance = strval($id);
        $awal = $request->startdate;
        $akhir = $request->enddate;
        $pilihannya = $request->pilihan;
	    if($pilihannya == null){
            return redirect()->back()->with('success', 'isi pilihan waktu'); 
        }
        $recorddetail = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('mst_hardware.kd_hardware',$id)->get()->last();

        if($request->pilihan == 'harian'){

            $startDate = Carbon::parse($request->startdate)->startOfDay(); // Convert to datetime object and set to start of the day
            $endDate = Carbon::parse($request->enddate)->endOfDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                    ->select(DB::raw('DATE(trs_raw_d_gpa.tlocal) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                    ->groupBy('hari')
                    ->orderBy('hari', 'desc')
                    ->get();

            return view('hardwaredetailtable',compact('records','chance','recorddetail','awal','akhir','pilihannya','rumus'));
            // return $records;
        }

	    if ($request->pilihan == 'interval jam') {
            $startDate = Carbon::parse($request->startdate)->startOfHour(); // Convert to datetime object and set to start of the hour
            $endDate = Carbon::parse($request->enddate)->endOfHour()->addDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(DB::raw('DATE_FORMAT(trs_raw_d_gpa.tlocal, "%Y-%m-%d %H:00:00") as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                ->groupBy('hari')
		        ->orderBy('hari', 'desc')
                ->get();
            // return $records;

            return view('hardwaredetailtable', compact('records', 'chance', 'recorddetail', 'awal', 'akhir', 'pilihannya','rumus'));
        }

        if ($request->pilihan == 'interval 10') {
            $startDate = Carbon::parse($request->startdate)->startOfMinute();
            $endDate = Carbon::parse($request->enddate)->endOfMinute()->addDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(DB::raw('FROM_UNIXTIME(CEIL(UNIX_TIMESTAMP(trs_raw_d_gpa.tlocal) / (60*10)) * 60 * 10) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                ->groupBy('hari')
                ->orderBy('hari', 'desc')
                ->get();

                // return $records;
        
            return view('hardwaredetailtable', compact('records', 'chance', 'recorddetail', 'awal', 'akhir', 'pilihannya','rumus'));
        }

        if ($request->pilihan == 'interval 30mnt') {
            $startDate = Carbon::parse($request->startdate)->startOfMinute();
            $endDate = Carbon::parse($request->enddate)->endOfMinute()->addDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                ->where('mst_hardware.kd_hardware', $id)
                ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(DB::raw('FROM_UNIXTIME(CEIL(UNIX_TIMESTAMP(trs_raw_d_gpa.tlocal) / (60*30)) * 60 * 30) as hari'), DB::raw('AVG(trs_raw_d_gpa.value) as nilai'))
                ->groupBy('hari')
                ->orderBy('hari', 'desc')
                ->get();

                // return $records;
        
            return view('hardwaredetailtable', compact('records', 'chance', 'recorddetail', 'awal', 'akhir', 'pilihannya','rumus'));
        }

        if($request->pilihan == 'interval kirim')
        {
            $startDate = Carbon::parse($request->startdate)->startOfDay(); // Convert to datetime object and set to start of the day
            $endDate = Carbon::parse($request->enddate)->endOfDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                    ->select(DB::raw('(trs_raw_d_gpa.tlocal) as hari'), DB::raw('(trs_raw_d_gpa.value) as nilai'))
                    //->groupBy('hari')
                    ->orderBy('hari', 'desc')
                    ->get();

            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                    ->select(
                        DB::raw('(trs_raw_d_gpa.tlocal) as hari'),
                        DB::raw('(trs_raw_d_gpa.value) as nilai'),
                        DB::raw('(trs_raw_d_gpa.kd_hardware) as hwname')
                    )
                    ->groupBy('hwname', 'hari','nilai')
                    ->orderBy('hari', 'desc')
                    ->get();
    
                    return view('hardwaredetailtable',compact('records','chance','recorddetail','awal','akhir','pilihannya','rumus'));
        }
        if($request->pilihan == 'bulanan')
        {
            $startDate = Carbon::parse($request->startdate)->startOfDay(); // Convert to datetime object and set to start of the day
            $endDate = Carbon::parse($request->enddate)->endOfDay();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')
                    ->where('mst_hardware.kd_hardware', $id)
                    ->where('trs_raw_d_gpa.kd_sensor', 'waterlevel')
                    ->whereBetween('trs_raw_d_gpa.tlocal', [$startDate, $endDate])
                ->select(
                    DB::raw('DATE_FORMAT(trs_raw_d_gpa.tlocal, "%Y-%m") as hari'),
                    DB::raw('AVG(trs_raw_d_gpa.value) as nilai')
                )
                ->groupBy('hari')
                ->orderBy('hari', 'desc')
                ->get();
            // return $records;
            return view('hardwaredetailtable',compact('records','chance','recorddetail','awal','akhir','pilihannya','rumus'));
        }

    }
}
