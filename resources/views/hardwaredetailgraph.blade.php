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
                    <hr>INFORMASI POS
                </div>
                <div style="">
                    <div>
                        <h1>POS {{$recorddetail->pos_name}}</h1>
                        <!-- <h3>ID: {{$chance}}</h3> -->
                    </div>
                </div>
                <br>
                <div class="row row-cols-6">
                    <div><b>> Nomor Pos</b></div>
                    <div style="width:250px;">: 06.14.02060010089</div>
                    <!-- <div></div> -->
                    <div style="width:200px;"><b>> ID Hardware </b></div>
                    <div style="width:200px;">: {{$chance}}</div>
                    <div></div>
                </div>
                <div class="row row-cols-6">
                    <div><b>> Desa </b></div>
                    <div style="width:250px;">: {{$recorddetail->kd_desa}}</div>
                    <!-- <div></div> -->
                    <div style="width:200px;"><b>> Tahun Dibangun</b></div>
                    <div style="width:200px;">: 2023</div>
                    <div></div>
                </div>
                <div class="row row-cols-6">
                    <div><b>> Kecamatan </b></div>
                    <div style="width:250px;">: {{$recorddetail->kd_kecamatan}}</div>
                    <!-- <div></div> -->
                    <div style="width:200px;"><b>> Didirikan Oleh </b></div>
                    <div style="width:200px;">: BINTEK SDA</div>
                    <div></div>
                </div>
                <div class="row row-cols-6">
                    <div><b>> Kabupaten </b></div>
                    <div style="width:250px;">: {{$recorddetail->kd_kabupaten}}</div>
                    <!-- <div></div> -->
                    <div style="width:200px;"><b>> Wilayah Sungai </b></div>
                    <div style="width:200px;">: Ciliwung - Cisadane</div>
                    <div></div>
                </div>
                <div class="row row-cols-6">
                    <div><b>> Provinsi </b></div>
                    <div style="width:250px;">: {{$recorddetail->kd_provinsi}}</div>
                    <!-- <div></div> -->
                    <div style="width:200px;"><b>> Elevasi </b></div>
                    <div style="width:200px;">: </div>
                    <div></div>
                </div>
                <div class="row row-cols-6">
                    <div><b>> Koordinat </b></div>
                    <div style="width:250px;">: LU {{$recorddetail->latitude}}</div>
                    <!-- <div></div> -->
                    <!-- <div>kampret :</div>
                    <div>yuhu</div> -->
                    <div></div>
                </div>
                <div class="row row-cols-6">
                    <div></div>
                    <div style="width:250px;">: LS {{$recorddetail->longitude}}</div>
                    <!-- <div></div> -->
                    <!-- <div>kampret :</div>
                    <div>yuhu</div> -->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!-- <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardware/'.$chance)}}" role="tab"
                        aria-controls="tab1">Informasi</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaretable/'.$chance)}}" role="tab"
                        aria-controls="tab2" aria-selected="false">Data Telemetry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab"
                        aria-controls="tab3" aria-selected="true">Grafik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwarecctv/'.$chance)}}" role="" aria-controls=""
                        aria-selected="false">CCTV</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="container mt-3">

                    <div style="display:flex; justify-content:space-between;">
                            <button id="downloadChartButton" class="btn btn-outline-secondary mb-3"> Download Chart</button>
                            <form action="{{url('/hardwaregraphrange/'.$chance)}}" method="post">
                                @method('POST')
                                @csrf
                                <!-- <input type="text"> -->
                                <div style="display:flex;">
                                    <div class="row">
                                        <!-- <div class="col-sm-3"> -->
                                            <div class="form-group">
                                                <select class="form-select"
                                                    aria-label="" name="pilihan" id="option"
                                                    value="" required>   
                                                    <option value="interval kirim">interval kirim</option>
                                                    <option value="interval 10">interval 10 menit</option>
                                                    <option value="interval 30mnt">interval 30 menit</option>
                                                    <option value="interval jam">interval jam</option>
                                                    <option value="harian">interval harian</option>
                                                    <option value="bulanan">interval bulanan</option>
                                                    @if ($pilihannya==null)
                                                    <option value="" selected >interval kirim</option>
                                                    @else
                                                    <option value="" selected >{{$pilihannya}}</option>
                                                    @endif
                                                </select>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                    &nbsp&nbsp
                                    <button class="btn btn-secondary mb-3" disabled>Tanggal awal</button>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="fixedWidthInput" value="{{$awal}}"
                                                    name="startdate" style="width: 200px;" required>
                                            </div>
                                        </div>
                                    </div>
                                    &nbsp&nbsp
                                    <button class="btn btn-secondary mb-3" disabled>Tanggal akhir</button>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <!-- <label for="fixedWidthInput">Fixed Width Input:</label> -->
                                                <input type="date" class="form-control" id="fixedWidthInput" value="{{$akhir}}"
                                                    name="enddate" style="width: 200px;" required>
                                            </div>
                                        </div>
                                    </div>
                                    &nbsp&nbsp
                                    <!-- <button></button> -->
                                    <button type="submit" class="btn btn-primary mb-3"> Cari <i class='bx bx-search'></i></button>

                                </div>
                            </form>
                        </div>
                        
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
    @foreach($records as $row => $kentang)
        var nilainya = "{{($kentang->nilai)/100}}"
        if (nilainya == null)
        {
            nilainya === 0;
        }
        var harinya = "{{$kentang->hari}}"
        var kosong = 0;
        nilaivalue.push(nilainya)
        nilaihari.push(harinya)
        nilaikosong.push(kosong)
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
                pointRadius: 5
            }]
        },
        options: {
            maintainAspectRatio: false,
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
                data: nilaikosong,
                borderColor: 'rgba(100, 0, 120, 0.5)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(100, 0, 120, 0.5)',
                pointRadius: 5
            }]
        },
        options: {
            maintainAspectRatio: false,
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
            downloadLink.download = 'chart.png';
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