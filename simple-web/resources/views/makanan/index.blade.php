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
                        <a href="/makanan/create" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-dark table-striped">
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
                                
                                <form action="{{route('makanan.destroy',$row->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm ('Apakah Kamu mau Hapus?')">hapus</button>
                                    <a href="{{route('makanan.edit',$row->id)}}" class="btn btn-warning">ubah</a>
                                    <a href="{{route('makanan.show',$row->id)}}" class="btn btn-info">detail</a>
                                      </form>
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
