@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Makanan</div>

                <div class="card-body">
                    <form action="{{route('makanan.update', $makanan->id)}}" method = "post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form group">
                            <label> nama makanan</label>
                            <input type="text" class='form-control m-2' value="{{$makanan->nama_makanan}}" name="nama_makanan">
                        </div>
                        <div class="form group">
                            <label> asal makanan</label>
                            <input type='text' class='form-control m-2' value="{{$makanan->asal_makanan}}" name="asal_makanan">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-succes">Tambah</button>
                            <a href="/makanan" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
