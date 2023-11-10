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
                    <li class="breadcrumb-item active" aria-current="page">List Data Pos Hidrologi</li>
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
    <p class="mb-0 text-uppercase display-6 text-center">Manajemen Data Pos Hidrologi</p>
    <hr />
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <a href="{{url('tambahpos')}}" class="btn btn-success"> Tambah Pos Manual</a>
            <br>
            <br>
            <table id="example2" class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Hardware</th>
                        <th>Pos Name </th>
                        <th>Latitude </th>
                        <th>Longitude </th>
                        <th>Location </th>
                        <th>No GSM </th>
                        <th>Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($ars as $kentang => $row)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->kd_hardware}}</td>
                        <td>{{$row->pos_name}}</td>
                        <td>{{$row->latitude}}</td>
                        <td>{{$row->longitude}}</td>
                        <td>{{$row->location}}</td>
                        <td>{{$row->no_gsm}}</td>
                        <td width="15%"><a href="{{url('/editpos/'.$row->kd_hardware)}}"
                                class="btn btn-sm btn-warning">edit</a>
                            <a href="{{url('/deletepos/'.$row->kd_hardware)}}"
                                onclick="return confirm('Yakin untuk menghapus data ini?')"
                                class="btn btn-sm btn-danger">hapus</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <span>
                RUMUS RATING CURVE DEBIT AIR
            </span>
            <hr>
            <form method="post" action="{{url('/editrating/')}}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="row align-items-start">
                    <div class="col">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">K1</span>
                            <input type="number" step=".0001" class="form-control" name="k1" placeholder="{{$rumus->k1}}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">K2</span>
                            <input type="number" step=".0001" class="form-control" name="k2" placeholder="{{$rumus->k2}}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">K3</span>
                            <input type="number" step=".0001" class="form-control" name="k1" placeholder="{{$rumus->k1}}" required>
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-sm btn-outline-primary">simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection