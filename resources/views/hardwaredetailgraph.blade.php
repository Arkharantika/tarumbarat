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
        <div class="card-body">
            <div class="row">
                <div class="col-6 col-md-2">
                    <div class=" card shadow mt-4" style=" height:250px;">
                        <div class="card-header" style="background:silver;">
                            <p class="card-text"></p>
                        </div>
                        <img src="{{asset('images/'.$recorddetail->foto_pos)}}" class="card-img-top" alt="..."
                            style="width: 100%;height: 100%;object-fit:cover;">
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-10">
                    <div class="container mt-1">
                        <div>
                            <hr>INFORMASI POS
                        </div>
                        <div style="">
                            <div>
                                <h1>POS {{$recorddetail->pos_name}}</h1>
                            </div>
                        </div>
                        <div></div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Nomor Pos</b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->nomor_pos}}</div>
                            <div class="col-6 col-sm-3"><b>ID Hardware </b></div>
                            <div class="col-6 col-sm-3">: {{$chance}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Desa </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->kd_desa}}</div>
                            <div class="col-6 col-sm-3"><b>Tahun Dibangun</b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->thn_dibangun}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Kecamatan </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->kd_kecamatan}}</div>
                            <div class="col-6 col-sm-3"><b>Didirikan Oleh </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->pendiri}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Kabupaten </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->kd_kabupaten}}</div>
                            <div class="col-6 col-sm-3"><b>Wilayah Sungai </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->wilayah_sungai}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Provinsi </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->kd_provinsi}}</div>
                            <div class="col-6 col-sm-3"><b>Elevasi </b></div>
                            <div class="col-6 col-sm-3">: {{$recorddetail->elevasi}}</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"><b>Koordinat </b></div>
                            <div class="col-6 col-sm-3">: LU {{$recorddetail->latitude}}</div>
                            <div class="col-6 col-sm-3"></div>
                            <div class="col-6 col-sm-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-3"></div>
                            <div class="col-6 col-sm-3">: LS {{$recorddetail->longitude}}</div>
                            <div class="col-6 col-sm-3"></div>
                            <div class="col-6 col-sm-3">
                                <a href="{{url('/editpos/'.$chance)}}" class="btn btn-primary btn-sm">Edit Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!--<li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardware/'.$chance)}}" role="tab"
                        aria-controls="tab1">Informasi</a>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaretable/'.$chance)}}" role="tab"
                        aria-controls="tab2" aria-selected="false">Data Telemetry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab"
                        aria-controls="tab3" aria-selected="true">Grafik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwarecctv/'.$chance)}}" role=""
                        aria-controls="" aria-selected="false">CCTV</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="container mt-3">

                        <div class="">
                            <form action="{{url('/hardwaregraphrange/'.$chance)}}" method="post">
                                @method('POST')
                                @csrf
                                <!-- <input type="text"> -->
                                <div class="row">
                                    <div class="col-6 col-sm-3 mb-1">
                                        <!-- <div class="col-sm-3"> -->
                                        <div class="form-group">
                                            <select class="form-select" aria-label="" name="pilihan" id="option"
                                                value="" required>
                                                <option value="interval kirim">interval kirim</option>
                                                <option value="interval 10">interval 10 menit</option>
                                                <option value="interval 30mnt">interval 30 menit</option>
                                                <option value="interval jam">interval jam</option>
                                                <option value="harian">interval harian</option>
                                                <option value="bulanan">interval bulanan</option>
                                                @if ($pilihannya==null)
                                                <option value="interval kirim" selected>interval kirim</option>
                                                @else
                                                <option value="{{$pilihannya}}" selected>{{$pilihannya}}</option>
                                                @endif
                                            </select>
                                            <!-- </div> -->
                                        </div>
                                    </div>

                                    <div class="btn-group col-6 col-sm-3 mb-1" role="group" style="height:40px">
                                        <button type="button" class="btn btn-secondary btn-sm sm-3" disabled>
                                            Mulai</button>
                                        <input type="date" class="form-control sm-3" id="fixedWidthInput"
                                            value="{{$awal}}" name="startdate" style="width: auto;" required>
                                    </div>

                                    <div class="btn-group col-6 col-sm-3 mb-1" role="group" style="height:40px">
                                        <button type="button" class="btn btn-secondary btn-sm sm-3"
                                            disabled>Berhenti</button>
                                        <input type="date" class="form-control sm-3" id="fixedWidthInput"
                                            value="{{$akhir}}" name="enddate" style="width: auto;" required>
                                    </div>

                                    <div class="btn-group col-6 col-sm-3 mb-1" role="group" style="height:40px">
                                        <button type="submit" class="btn btn-primary btn-sm"><i
                                                class='bx bx-search'></i> Cari</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <button id="downloadChartButton" class="btn btn-sm btn-outline-success mb-3"> <i
                                class='bx bxs-download'></i>Download Chart 1 </button>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-header text-center">
                                    Tinggi Muka Air (m)
                                </div>
                                <div class="card-body" style="height: 400px;">
                                    <canvas id="chart2"></canvas>
                                </div>
                            </div>
                        </div>

                        <button id="downloadChartButton2" class="btn btn-sm btn-outline-success mb-3"> <i
                                class='bx bxs-download'></i>Download Chart 2 </button>
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card-header text-center">
                                    Debit Air (m<sup>3</sup>/s)
                                </div>
                                <div class="card-body" style="height: 400px;">
                                    <canvas id="chart3"></canvas>
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
    </div>
</div>
@endsection

@section('CustomScripts')
<script>
    var nilaivalue = [];
    var nilaihari = [];
    var nilaikosong = [];
    var exoteric = [];
    @foreach($records as $row => $kentang)
        var nilainya = "{{$kentang->nilai}}";
	var exodus = {{$Q=($recorddetail->k1)*pow(($kentang->nilai)+($recorddetail->k2),($recorddetail->k3));}};
        if (nilainya == null)
        {
            nilainya === 0;
        }
        var harinya = "{{$kentang->hari}}"
        var kosong = 0;
        nilaivalue.push(nilainya)
        nilaihari.push(harinya)
        nilaikosong.push(kosong)
	exoteric.push(exodus)
    @endforeach
    // console.log(nilaivalue);
    console.log(nilaihari)

    var ctx2 = document.getElementById('chart2').getContext('2d');
    var chart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: nilaihari,
            datasets: [{
                label: '2023',
                data: nilaivalue,
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                pointRadius: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            scales: {
                y: {
                    beginAtZero: false
                }
            }
        }
    });

    var ctx3 = document.getElementById('chart3').getContext('2d');
    var chart3 = new Chart(ctx3, {
        type: 'line',
        data: {
            labels: nilaihari,
            datasets: [{
                label: '2023',
                data: exoteric,
                borderColor: 'rgba(100, 0, 120, 0.5)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(100, 0, 120, 0.5)',
                pointRadius: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            scales: {
                y: {
                    beginAtZero: false
                }
            }
        }
    });

    var downloadButton = document.getElementById('downloadChartButton');
    downloadButton.addEventListener('click', function () {
        // Convert the chart to a base64 image and create a download link
        var chartBase64 = chart2.toBase64Image();
        var downloadLink = document.createElement('a');
        downloadLink.href = chartBase64;
        downloadLink.download = 'chart1.png';
        downloadLink.click();
    });

    var downloadButton2 = document.getElementById('downloadChartButton2');
    downloadButton2.addEventListener('click', function () {
        // Convert the chart to a base64 image and create a download link
        var chartBase64 = chart3.toBase64Image();
        var downloadLink = document.createElement('a');
        downloadLink.href = chartBase64;
        downloadLink.download = 'chart2.png';
        downloadLink.click();
    });
</script>
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