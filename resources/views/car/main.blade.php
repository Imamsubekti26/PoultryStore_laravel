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
              <th>Nomor Plat</th>
              <th>Merk</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>AB 2312 LL</td>
              <td>Daihatsu</td>
              <td><a href="#" class="badge bg-label-primary me-1">Trip 270424.01</a></td>
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