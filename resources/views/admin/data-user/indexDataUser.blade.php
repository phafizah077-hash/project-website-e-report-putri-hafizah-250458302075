@extends('layouts.dashboard')
@section('title', 'Data User')
@section('content')
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Data User</h4>
                </div>
                <div class="card-content p-5">
                    <div class="buttons">
                        <a href="{{ route('form.data-user') }}" class="btn icon icon-left btn-primary"><i data-feather="edit"></i> Tambah Data User</a>
                    </div>
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>NO TELP</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $row)
                                <tr class="table-active">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->jenis_kelamin }}</td>
                                    <td>{{ $row->telp }}</td>
                                    <td>
                                        <a href="{{ route('edit.dataUser', $row->id) }}" class="btn btn-info" title="Edit Data"><i class="fa-solid fa-pencil"></i></a>
                                        <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}" title="Hapus Data"><i class="fa-solid fa-trash"></i></a>
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
</section>
@endsection


<div class="modal fade text-left" id="delete{{ $row->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel120" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title white" id="myModalLabel120">Danger Modal
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('delete.dataUser', $row->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <h3>Apakah Anda Yakin ingin menghapus?</h3>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-danger ms-1"
                        data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>