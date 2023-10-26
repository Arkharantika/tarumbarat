@extends('layouts.layouthardwaredetail')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body text-center">
            <h3>DATA POS HARDWARE</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body" style="display:flex;">
            <!-- <img src="{{asset('images/telemetry_copy.jpg')}}" alt=""> -->

            <div class="card shadow mt-4" style="width: 18rem;">
                <div class="card-header" style="background:silver;">
                    <p class="card-text"></p>
                </div>
                <img src="{{asset('images/telemetry_copy.jpg')}}" class="card-img-top" alt="..."
                    style="max-width: 100%;height: auto;">
            </div>

            <div class="container mt-1 " style="">
                <div>
                    <hr>HARDWARE POS DETAIL
                </div>
                <div style="">
                    <div>
                        <h1>{{$recorddetail->pos_name}}</h1>
                        <h3>ID: {{$chance}}</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    @if(session()->get('message'))
    <div class="alert alert-info alert-dismissable mt-20 text-center" role="alert">
        <h4>{{ session()->get('message') }} </h4>
    </div>
    @endif

    @if(session()->get('warning'))
    <div class="alert alert-danger alert-dismissable mt-20 text-center" role="alert">
        <h4>{{ session()->get('warning') }} </h4>
    </div>
    @endif

    <div class="card">
        <div class="card-body">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardware/'.$chance)}}" role="tab"
                        aria-controls="tab1">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"
                        aria-controls="tab2" aria-selected="true">Data Telemetry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaregraph/'.$chance)}}" role="tab"
                        aria-controls="tab3" aria-selected="false">Grafik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwarecctv/'.$chance)}}" role="" aria-controls=""
                        aria-selected="false">CCTV</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="container mt-3">
                        <!-- Content for Tab 2 -->
                        <div style="display:flex; justify-content:space-between;">
                            <!-- <a href="#" class="btn btn-success mb-3">Import Data</a> -->
                            <div style="display:flex;">
                                <button type="button" class="btn btn-secondary mb-3" data-toggle="modal"
                                    data-target="#importData">
                                    Import Data
                                </button>&nbsp
                                <!-- <button type="button" class="btn btn-success mb-3" data-toggle=""
                                    data-target="">
                                    Import Data
                                </button> -->
                            </div>
                            <form action="{{url('/hardwaredaterange/'.$chance)}}" method="post">
                                @method('POST')
                                @csrf
                                <!-- <input type="text"> -->
                                <div style="display:flex;">
                                    <div class="row">
                                        <!-- <div class="col-sm-3"> -->
                                        <div class="form-group">
                                            <select class="form-select" aria-label="" name="pilihan" id="option"
                                                value="" required>
                                                <option value="interval kirim">interval kirim</option>
                                                <option value="harian">harian</option>
                                                <option value="bulanan">bulanan</option>
                                                @if ($pilihannya==null)
                                                <option value="interval kirim" selected >interval kirim</option>
                                                @else
                                                <option value="{{$pilihannya}}" selected >{{$pilihannya}}</option>
                                                @endif
                                            </select>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                    &nbsp&nbsp
                                    <button class="btn btn-secondary mb-3" disabled>start date</button>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="fixedWidthInput"
                                                    value="{{$awal}}" name="startdate" style="width: 200px;" required>
                                            </div>
                                        </div>
                                    </div>
                                    &nbsp&nbsp
                                    <button class="btn btn-secondary mb-3" disabled>End date</button>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <!-- <label for="fixedWidthInput">Fixed Width Input:</label> -->
                                                <input type="date" class="form-control" id="fixedWidthInput"
                                                    value="{{$akhir}}" name="enddate" style="width: 200px;" required>
                                            </div>
                                        </div>
                                    </div>
                                    &nbsp&nbsp
                                    <!-- <button></button> -->
                                    <button type="submit" class="btn btn-primary mb-3"> Cari <i
                                            class='bx bx-search'></i></button> &nbsp
                                    <button class="btn btn-success mb-3" formaction="{{url('/exportdata/'.$chance)}}">Download Excel</button>

                                </div>
                            </form>
                        </div>
                        <table id="example2" class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Record </th>
                                    <th>Tinggi Air (m)</th>
                                    <th>debit (m<sup>3</sup>/s) </th>
                                    <th>Status Alarm </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach ($records as $row)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$row->hari}}</td>
                                    @if($row->nilai == null)
                                    <td> 0 </td>
                                    @else
                                    <td>{{($row->nilai)/100}}</td>
                                    @endif
                                    <td></td>
                                    <td>normal</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="container mt-3">
                        <hr>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-header text-center">
                                    Debit Air (m3/s)
                                </div>
                                <div class="card-body">
                                    <canvas id="chart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <div class="container mt-3">
                        CCTV
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Import Excel -->
    <div class="modal fade" id="importData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" action="{{url('/importdata')}}" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Data Excel</h5>
                    </div>
                    <div class="modal-body">

                        {{ csrf_field() }}

                        <label>Pilih file excel</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="file" required="required">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@section('CustomScripts')
<script>
    n = new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("nowdate").innerHTML = m + "/" + d + "/" + y;

    window.onload = function () {
        // Calculate the vertical position that is 75% lower than the top
        const position = (document.documentElement.scrollHeight - window.innerHeight) * 0.55;

        // Scroll to the calculated position
        window.scrollTo(0, position);
    };
</script>
@endsection