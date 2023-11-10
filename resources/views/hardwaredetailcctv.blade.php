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
                    <div></div>
                    <!-- <div>kampret :</div>
                    <div>yuhu</div> -->
                    <div style="width:250px;text-align: right;">
                    <a href="#" class="btn btn-primary btn-sm">Edit Data</a>
                    </div>
                    <!-- <div></div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!-- <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardware/'.$chance)}}" role="tab"
                        aria-controls="tab1" aria-selected="false">Informasi</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaretable/'.$chance)}}" role="tab"
                        aria-controls="tab2" aria-selected="false">Data Telemetry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaregraph/'.$chance)}}" role="tab"
                        aria-controls="tab3" aria-selected="false">Grafik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="" href="#tab4" role="tab"
                        aria-controls="tab4" aria-selected="true">CCTV</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <div class="container mt-3">
                        <div>
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body text-center">
                                    @if($recorddetail->cctv == null)
                                    <h3>
                                        Tidak ada CCTV pada pos ini 
                                    </h3>
                                    <br>
                                    <!-- c:\Users\M S I\Downloads\no-internet.png -->
                                    <img src="{{ asset('images/no-internet.png') }}" alt="" class="rounded border border-dark" style="width:400px;">
                                    @else
                                    <img src="{{ url('../../contoh_pindahan/'.$recordcctv->img_name) }}" alt="">
                                    @endif
                                </div>
                            </div>
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