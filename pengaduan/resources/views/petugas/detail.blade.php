@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Petugas</div>

                <div class="card-body">
                    <div class="row m-1">
                        <div class="col-md-4">
                            <form action="{{route('petugas.store')}}" method="post">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" name="nik" value="{{$user->nik}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text" name="telp" value="{{$user->telp}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" maxlength="16" class="form-control">
                                </div>

                                <input type="hidden" name="role" value="petugas">

                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>:</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>:</td>
                                        <td>{{$user->Username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Telepon</th>
                                        <td>:</td>
                                        <td>{{$user->username}}</td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
