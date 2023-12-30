@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="table-responsive p-2"></div>
                    <div class='m-2'>
                        <a href='/makanan/create' class='btn btn-danger'>Kembali</a>
                    </div>
                    <table class='table table-dark table'></table>
                    <tr>
                        <th>Nama Makanan</th>
                        <td>{{$makanan->nama_makanan}}</td>

                    </tr>
                    <tr>
                        <th>Asal Makanan</th>
                        <td>{{$makanan->asal_makanan}}</td>

                    </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
