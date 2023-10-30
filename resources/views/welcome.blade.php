<!-- Halaman Ini Sudah Sesuai Tata Penulisan -->

@extends('layouts.layoutdashboard')

@section('content')
<!--Container-->
<div class="container">

    @if(session()->get('message'))
    <div class="alert alert-info alert-dismissable mt-20" role="alert">
        <h4>{{ session()->get('message') }} </h4>
    </div>
    @endif

    <!-- Peta Google MAP -->
    <!-- <hr /> -->
    
    <!-- <div class="card mt-3">
        <div class="card-body bg-light">
        </div>
    </div> -->

    <!-- Informasi Tinggi Muka Air -->

    <!-- Informasi Sistem -->
    <!-- <div>
        <i class='bx bx-chevron-right'></i>Informasi Platform Sistem
    </div>
    <hr>
    <div class="card shadow">
        <div class="card-body" style="text-align: justify;font-size:15px;">
            <b> <img src="{{asset('images/water.png')}}" alt=""> &nbsp Sistem Informasi Saluran Irigasi Tarum Barat</b><br><br>
            Pemenuhan Kualitas dan kuantitas pasokan air baku menjadi kendala yang dihadapi dalam pengelolaan Saluran Irigasi Tarum Barat, Dengan adanya perkembangan teknologi saat ini dibidang sistem informasi Internet of think (IoT) diharapkan dapat memberikan solusi dari permasalahan tersebut
            Sistem Informasi Saluran Irigasi Tarum Barat merupakan sistem informasi pengamatan muka air pada 22 titik yang dukungan perangkat IoT untuk mengukur kedalaman air yang akurat dan handal dengan sensor ultrasonic dan dilengkapi data pengukuran debit untuk mendapatkan rating curve pada setiap titik. Dashboard yang responsive dan desain yang baik dan modern menampilkan visualisasi data serta sinkronisasi ke website di PUPR maupun PJT II
        </div>
    </div> -->

    <!-- Fitur Platform -->
    <!-- <div>
        <i class='bx bx-chevron-right'></i>Fitur Platform
    </div>
    <hr>
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4"
        style="">
        <a href="dataposhidrologi" class="col">
            <div class="card radius-10 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{asset('images/picture1.png')}}" alt="" style="border-radius:2.5%;;width:225px;height:75px;">
                            <br><br>
                            <div class="text-dark" style="text-align: justify;font-size:18px;">
                                <b>Data Pos Hidrologi</b>
                            </div>
                            <div class="text-dark" style="text-align: justify;font-size:13px;">
                                Menampilkan data dalam bentuk tabel maupun grafik untuk Pos Water Level, Pos Curah Hujan, dan Data Debit yang disaluran Irigasi Tarum
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="neracaair" class="col">
            <div class="card radius-10 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{asset('images/picture2.png')}}" alt="" style="border-radius:2.5%;;width:225px;height:75px;">
                            <br><br>
                            <div class="text-dark" style="text-align: justify;font-size:18px;">
                                <b>Neraca Air</b>
                            </div>
                            <div class="text-dark" style="text-align: justify;font-size:13px;">
                                Menampilkan Pemodelan untuk mendapatkan neraca air dari Hulu sampai hilir Saluran Irigasi Tarum Barat
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="#" class="col">
            <div class="card radius-10 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{asset('images/picture3.png')}}" alt="" style="border-radius:2.5%;;width:225px;height:75px;">
                            <br><br>
                            <div class="text-dark" style="text-align: justify;font-size:18px;">
                                <b>Data Kendali Mutu</b>
                            </div>
                            <div class="text-dark" style="text-align: justify;font-size:13px;">
                                Menampilkan data penilaian kondisi alat, Kondisi Pos dan Lingkungan Pos yang kemudian
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="cctv" class="col">
            <div class="card radius-10 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{asset('images/picture4.png')}}" alt="" style="border-radius:2.5%;;width:225px;height:75px;">
                            <br><br>
                            <div class="text-dark" style="text-align: justify;font-size:18px;">
                                <b>CCTV</b>
                            </div>
                            <div class="text-dark" style="text-align: justify;font-size:13px;">
                            Menampilkan tampilan video Streaming CCTV dan capture CCTV
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div> -->

</div>

@section('CustomScripts')
<script src="{{asset('sungai.js')}}"></script>
<script src="{{asset('wilayah.js')}}"></script>
<script>
    // var redPin = L.icon({
    //     iconUrl: "{{asset('images/redpin.png')}}",
    //     iconSize: [40, 40], 
    // });

    var redIcon = L.divIcon({className: 'leaflet-div-ser',iconSize:[20,20]});

    const cities = L.layerGroup();
    const mLittleton = L.marker([-6.483933471250634, 107.38204782273243],{icon: redIcon}).bindPopup('BM 1, Jembatan Merah').addTo(cities);
    const mDenver = L.marker([-6.354706, 107.304859],{icon: redIcon}).bindPopup('BM 3, BTB 12').addTo(cities);
    const mAurora = L.marker([-6.34177, 107.274299],{icon: redIcon}).bindPopup('BM 4, BTB 18').addTo(cities);
    const mGolden = L.marker([-6.345818, 107.214708],{icon: redIcon}).bindPopup('BM 8, BTB 23').addTo(cities);
    const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 15,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });

    const valmax = @json($ars_max);
    const valmin = @json($ars_min);

    var data_example = [
        { lat: -10.2500114, lng: 123.9895103, name: 'Marker 1',vmax:20,vmin:20,daterecord:20, intivalue:30,kentang:4150 }
        // Add more data here...
    ];
    @foreach($ars as $kentang => $record)
        var ref_id = "{{ $kentang }}"; 
        var jujukan_id = {{ $record->kd_hardware }}; 
        var lats = {{$record->latitude}}
        var longs = {{$record->longitude}}
        var valuenya = "{{$record->value}}"
        var valuemax = valmax[ref_id];
        var valuemin = valmin[ref_id];
        // console.log(lats);
        var newData = { lat: lats, lng: longs, name: '{{$record->pos_name}}',vmax:valuemax,vmin:valuemin,daterecord:'{{$record->tlocal}}', intivalue:valuenya, kentang:jujukan_id }
        console.log(newData)
        data_example.push(newData);
    @endforeach

    console.log("kampret >>>")
    //console.log(data_example[0]["name"]);

    // <==== BAGIAN DEMO ===>
    // var examplename = data_example[3]["name"];
    // var exampledate = data_example[3]["daterecord"];
    // var examplevalue = data_example[3]["intivalue"];
    // document.getElementById("demoname").innerHTML = examplename;
    // document.getElementById("demodate").innerHTML = exampledate;
    // document.getElementById("demovalue").innerHTML = examplevalue;
    // var examplename2 = data_example[4]["name"];
    // var exampledate2 = data_example[4]["daterecord"];
    // var examplevalue2 = data_example[4]["intivalue"];
    // document.getElementById("demoname2").innerHTML = examplename2;
    // document.getElementById("demodate2").innerHTML = exampledate2;
    // document.getElementById("demovalue2").innerHTML = examplevalue2;
    // var examplename3 = data_example[5]["name"];
    // var exampledate3 = data_example[5]["daterecord"];
    // var examplevalue3 = data_example[5]["intivalue"];
    // document.getElementById("demoname3").innerHTML = examplename3;
    // document.getElementById("demodate3").innerHTML = exampledate3;
    // document.getElementById("demovalue3").innerHTML = examplevalue3;
    // var examplename4 = data_example[6]["name"];
    // var exampledate4 = data_example[6]["daterecord"];
    // var examplevalue4 = data_example[6]["intivalue"];
    // document.getElementById("demoname4").innerHTML = examplename4;
    // document.getElementById("demodate4").innerHTML = exampledate4;
    // document.getElementById("demovalue4").innerHTML = examplevalue4;
    //  <==== END OF DEMO ===>
    
    const contoh = L.layerGroup();
    for (var i = 0; i < data_example.length; i++) {
        var marker = L.marker([data_example[i]["lat"], data_example[i]["lng"]],{icon:redIcon}).bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Pos Name :<b>"+data_example[i]["name"]+"</b></div><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Coordinate : "+data_example[i].lat+", "+data_example[i].lng+"</div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th scope=col'>Sensor</th><th scope='col'>Value</th><th scope='col'>Max</th><th scope='col'>Min</th></tr></thead><tbody><tr><td>Water Level</td><td>"+data_example[i].intivalue+" cm</td><td class='text-white' style='background:#a31919' >"+data_example[i].vmax+" cm</td><td class='text-white' style='background:#ff8c40;'>"+data_example[i].vmin+" cm</td></tr></tbody></table><div class='mt-1'><div class='text-danger' style='margin-bottom:15px;font-style:italic;font-size:12px;'>Last Update : "+data_example[i].daterecord+" &nbsp <i class='bx bxs-calendar'></i></div><a class='btn btn-sm btn-secondary text-light' href='{{ url('/hardware/') }}/"+data_example[i].kentang+"'>> check detail </div>",{closeButton: false}).on('mouseover', function () {
                this.openPopup();
            }).openPopup();
        marker.addTo(contoh);
    }

    const kentangGoreng = L.layerGroup();


    const map = L.map('map', {
        center: [-6.2500114, 106.9895103],
        zoom: 10,
        layers: [osm,contoh,kentangGoreng]
    });

    /*==============================================
                GEOJSON
    ================================================*/
    // var pointData = L.geoJSON(pointJson).addTo(map)
    var lineData = L.geoJSON(kentang,{
        onEachFeature: function (feature, layer) {
            if (layer instanceof L.Polyline) {
            layer.setStyle({
                'color': feature.style.fill,
                'stroke-width': feature.style.width,
            });
            }
        }
    });
    var polygonData = L.geoJSON(wilayah, {
        onEachFeature: function (feature, layer) {
            layer.bindPopup("<hr style='margin-bottom:5px;margin-top:5px;color:black;'><div class='text-primary' style='margin-bottom:5px;font-style:italic;font-size:12px;'>Wilayah :<b> " +feature.properties.Nama_Das+" </b></div><table class='table table-bordered' style='margin-bottom:5px;'><thead class='colorthead thead-dark'><tr><th></th><th></th></tr></thead><tbody><tr><td style='font-size:10px;background:white;height:15px'>Xodex </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.XODEX+"</td></tr><tr><td style='font-size:10px;background:white;height:15px'>Kode Das </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.Kode_Das+"</td></tr><tr><td style='font-size:10px;background:white;height:15px'>Nama WS </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.Nama_WS+"</td></tr><tr><td style='font-size:10px;background:white;height:15px'>Kode WS </td><td style='font-size:10px;background:white;height:15px'> "+feature.properties.Kode_WS+"</td></tr></tbody></table>",{closeButton: false}).on('mouseover', function () {
                layer.setStyle({
                    fillOpacity: 0.4,
                    fillColor:'yellow'
                })
                this.openPopup();
            }).on('mouseout', function (e) {
                layer.setStyle({
                fillOpacity: 0.2,
                fillColor:'#7FFFD4'
                });
            });
        },
        style: {
            fillColor: '#7FFFD4',
            color:'#20B2AA'
        }
    }).addTo(kentangGoreng);
    // console.log("jungul woy"+kentang)
    const overlays = {
        'POS Tatonas':contoh,
        'POS PJT II': cities,
        'Area Kerja': polygonData,
        'Area Saluran': lineData,
    };

    // const layerControl = L.control.layers(null, overlays).addTo(map);
    const layerControl = L.control.layers(null, overlays,{ collapsed: false }).addTo(map);

    const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
    });

    // layerControl.addOverlay(contoh, 'POS Tatonas Mfg');
    
    
</script>

<script>
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("nowdate").innerHTML = m + "/" + d + "/" + y;

</script>
@endsection


@endsection