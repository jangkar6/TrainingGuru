@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="table-responsive p-2"></div>
                    <table class="table table-hover">
                    <thead>
                        <th>Nama Makanan</th>
                        <th>Asal Daerah</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($makanan as $row)
                        <tr>
                            <td>{{$row->nama_makanan}}</td>
                            <td>{{$row->asal_makanan}}</td>
                            <td>
                                <a href="#" class="btn btn-warning">ubah</a>
                                <a href="#" class="btn btn-danger">hapus</a>
                                <a href="" class="btn btn-detail">detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
