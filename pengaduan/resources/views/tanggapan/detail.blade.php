@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tanggapan Laporan Saudara/i <b>{{$pengaduan->user->name}}</b>
                </div>

                <div class="card-body">
                    <div class="row-p2">
                        <div class="col-md12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Nama Pelapor</th>
                                        <td>{{$pengaduan->user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Laporan</th>
                                        <td>{{$pengaduan->tanggal_pengaduan}}</td>
                                    </tr>
                                    <tr>
                                        <th>Dokumentasi Laporan</th>
                                        <td>
                                            <img src="{{asset('/storage/images/dokumentasi/'.$pengaduan->foto)}}"
                                                alt="Dokumentasi" width="100px" class="img-thumbnail">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Isi Laporan</th>
                                        <td>
                                            {{$pengaduan->isi_pengaduan}}
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                        <hr>
                        <div class='col-mt12'>
                            <form action="{{route('tanggapan.store')}}" method="post">
                                @csrf
                                <div class="form-group m-2">
                                    <label>Petugas yang menanggapi</label>
                                    <input type="text" class='form-control' value='{{Auth::user()->name}}'>
                                    <input type="text" name='id_pengaduan' value='{{$pengaduan->id}}' hidden>
                                    <input type="text" name='id_user' value='{{Auth::user()->id}}' hidden>

                                </div>
                                <div class="form-group m-2">
                                    <label>Status Laporan</label>
                                    <select name="status" class="form-control">
                                        <option value="{{$pengaduan->status}}">{{$pengaduan->status}}</option>
                                    <option value="diajukan">Diajukan</option>
                                    <option value="diproses">Diproses</option>
                                    <option value="selesai">Selesai</option>
                                    <option value="ditolak">Ditolak</option>
                                    </select>
                                </div>
                                <div class="form-group m-2">
                                    <textarea name="tanggapan" rows="5" class="form-control"></textarea>
                               </div>
                               <div class="form-group m-2">
                                <button type="submit" class="btn btn-success">Tanggapi</button>

                               </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
