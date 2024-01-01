@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Data Laporan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                    </div>
                    <thead>
                        <th>Nama Pelapor</th>
                        <th>Tanggal Laporan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($pengaduan as $row)
                        <tr>
                            <td>{{$row->user->name}}</td>
                            <td>{{$row->tanggal_pengaduan}}</td>
                            <td>
                                @if($row->status=='diajukan')
                                <span class="text-secondary">sedang diajukan</span>
                                @elseif($row->status=='diproses')
                                <span class="text-secondary">sedang diproses</span>
                                @elseif($row->status=='selesai')
                                <span class="text-secondary">Berhasil</span>
                                @else
                                <span class="text-secondary">Ditolak</span>
                                @endif


                            </td>
                            <td>
                                <a href="{{route('tanggapan.show',$row->id)}}" class="btn btn-info">Tanggapi</a>
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

