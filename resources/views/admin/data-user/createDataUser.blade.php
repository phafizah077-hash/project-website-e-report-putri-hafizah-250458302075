@extends('layouts.dashboard')
@section('title', 'Form Tambah Data User')
@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Data User</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="{{ route('create.dataUser') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Masukkan Nama">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" class="form-control"
                                            placeholder="Masukkan Username" name="username">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" class="form-control" placeholder="Masukkan Email"
                                            name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" id="password" class="form-control"
                                            name="password" placeholder="Masukkan Password">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                            <option>Pilih Jenis Kelamin</option>
                                            <option value="P">Perempuan</option>
                                            <option value="L">Laki-Laki</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="telp">No Telp</label>
                                        <input type="text" id="telp" class="form-control"
                                            name="telp" placeholder="Masukkan No Telp">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection