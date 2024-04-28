@extends('layout.main')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <h5>Daftar {{ $title }}</h5>
          <div class="d-flex gap-3 align-items-center">
            <button class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="15%">Nama</th>
              <th width="20%">Area</th>
              <th width="15%">Telp</th>
              <th width="40%">Jenis Kemitraan</th>
              <th width="10%">Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>Pak Kahir</td>
              <td>Lendah, Kulon Progo</td>
              <td>
                <a href="#">088237234829</a>
              </td>
              <td>Petelur Puyuh, Pembesaran Puyuh</td>
              <td>
                <a href="#" class="text-black">
                  <i class="bx bx-edit-alt me-1"></i>
                  Edit
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection