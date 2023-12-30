@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Pesanan</div>

                <div class="card-body">
                    <form action="{{route('pesanan.store')}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label>Nama Makanan</label>
                            <select name="id_makanan" required class="form-control">
                            <option value="{{$pesanan->id_makanan}}">{{$pesanan->makanan->nama_makanan}}</option>    
                            @foreach($makanan as $row)
                            <option value="{{$row->id}}">{{$row->nama_makanan}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Pemesan</label>
                            <input type="text" class="form-control mt-2" value="{{pesanan->nama_pemesan}}" name="nama_pemesan">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Pemesan</label>
                            <input type="number" class="form-control mt-2" value="{{pesanan->jumlah}}" name="jumlah">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection