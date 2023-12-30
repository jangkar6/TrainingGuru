@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Makanan</div>

                <div class="card-body">
                    <form action="{{route('makanan.store')}}" method = "post">
                        @csrf
                        <div class="form group">
                            <label> nama makanan</label>
                            <input type="text" class='form-control m-2' name="nama_makanan">
                        </div>
                        <div class="form group">
                            <label> asal makanan</label>
                            <input type='text' class='form-control m-2' name="asal_makanan">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-succes">Tambah</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
