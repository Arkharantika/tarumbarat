@extends('layouts.layoutadmin')

@section('content')
<div class="container">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tabel</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-list-ul"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Tambah Pos</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-md ">settings</button>
                <button type="button"
                    class="btn btn-secondary split-bg-outline-secondary dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

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

    <hr />
    <p class="mb-0 text-uppercase display-6 text-center">Tambah Pos</p>
    <hr />

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{url('/addnewpos')}}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">kd_logger</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="number" class="form-control" value="" name="kd_logger" id="kd_logger" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">kd_hardware</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="kd_hardware" id="kd_hardware"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">uid</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="uid" id="uid"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">tlocal</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="date" class="form-control" value="" name="tlocal" id="tlocal"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">tzone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="number" class="form-control" value="" name="tzone" id="tzone"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">latitude</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="latitude" id="latitude"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">longitude</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="longitude" id="longitude"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">location</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="location" id="location"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">pos_name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="pos_name" id="pos_name"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">send interval</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="number" class="form-control" value="" name="send_interval" id="send_interval"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Provinsi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="kd_provinsi" id="kd_provinsi"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Kabupaten</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="kd_kabupaten" id="kd_kabupaten"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Kecamatan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="kd_kecamatan" id="kd_kecamatan"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Desa</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="kd_desa" id="kd_desa"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">no_gsm</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" name="no_gsm" id="no_gsm"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">file excel</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="file" class="form-control" value="" name="file" id="file"
                            required>
                    </div>
                </div>
                <!-- <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Divisi Kerja</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example"
                            name="jobdesk" id="option" value="">
                            <option value="Tata Usaha">Tata Usaha</option>
                            <option value="Petugas Kebersihan">Petugas Kebersihan</option>
                            <option value="Laboran">Laboran</option>
                            <option value="Pustakawan">Pustakawan</option>
                            <option value="Satpam">Satpam</option>
                            <option value="Serabutan">Serabutan</option>
                            <option value="" selected disabled hidden></option>
                        </select>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="submit" class="btn btn-primary px-4" value="Buat Pos Baru" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection