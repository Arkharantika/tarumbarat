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
                        aria-controls="tab1" aria-selected="false">Informasi</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaretable/'.$chance)}}" role="tab"
                        aria-controls="tab2" aria-selected="false">Data Telemetry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="" href="{{url('/hardwaregraph/'.$chance)}}" role="tab"
                        aria-controls="tab3" aria-selected="false">Grafik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="" href="#tab4" role="tab" aria-controls="tab4"
                        aria-selected="true">CCTV</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <div class="container mt-3">
                        <div>
                            <!-- SEARCH FORM -->
                            <div class="">
                                <form action="{{url('/hardwarecctvrange/'.$chance)}}" method="post">
                                    @method('POST')
                                    @csrf
                                    <!-- <input type="text"> -->
                                    <div class="row">

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
                            <!-- BATAS AKHIR SEARCH FORM -->

                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body d-flex justify-content-center text-center">
                                    <div class="container">
                                        @if($recorddetail->cctv == null)
                                        <h3>
                                            Tidak ada CCTV pada pos ini
                                        </h3>
                                        <br>
                                        <!-- c:\Users\M S I\Downloads\no-internet.png -->
                                        <img src="{{ asset('images/no-internet.png') }}" alt=""
                                            class="rounded border border-dark" style="width:400px;">
                                        @else
                                        @foreach($arrayimg as $kentang => $hi)
                                        <img onclick="tutungopen(this.src)"
                                            style="max-width: 20%;height: auto;cursor:pointer;"
                                            class="tutung img-fluid rounded border border-dark mt-1"
                                            src="{{ url('../../contoh_pindahan/'.$arrayimg[$kentang]->img_name) }}" alt="">
                                        @endforeach
                                        @endif
                                        <!-- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <div class="text-center">
                                        @foreach($arrayimg as $row => $hi)
                                        <button onclick="lightboxopen(this.innerHTML)" style="width:200px;">{{$arrayimg[$row]->img_name}}</button><br>
                                        @endforeach
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                            <div style="display:none;" class="card-bar" id="uhuy">
                                <span class="close-button" onclick="tutungclose()"> X </span>
                                <img id="imgbox" src="{{ url('../../ftp_logger/totalcamera/'.$recordcctv->img_name) }}"
                                    alt="">
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

    function tutungopen(content) {
        console.log(content)
        var tutungan = document.getElementById("uhuy")
        tutungan.style.display = "flex";

        var gambar = document.getElementById("imgbox")
        var imageUrl = content;
        gambar.src = imageUrl;

    }

    function tutungclose() {
        var tutungan = document.getElementById("uhuy")
        tutungan.style.display = "none";
    }

    function lightboxopen(content) {
        var tutungan = document.getElementById("uhuy")
        tutungan.style.display = "flex";

        console.log(content)

        var gambar = document.getElementById("imgbox")
        var imageUrl = "../../../contoh_pindahan/" + content;
        gambar.src = imageUrl;
        console.log(gambar.src);
    }
</script>
@endsection