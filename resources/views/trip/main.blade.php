@extends('layout.main')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <h5>Daftar {{ $title }}</h5>
          <div class="d-flex gap-3 align-items-center">
            <div class="input-group">
              <span class="input-group-text">tanggal:</span>
              <input type="date" class="form-control">
            </div>
            <button class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="20%">ID & Lokasi</th>
              <th width="20%">Penerima Tugas</th>
              <th width="40%">Rincian Tugas</th>
              <th width="10%">Status</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <b>270424.01</b><br>
                <small>Lendah, Kulon Progo</small><br>
                <small>Estimasi: 3 Jam</small><br>
              </td>
              <td>
                <small>Pak bee | Handayani</small><br>
                <small>AB 2312 LL</small><br>
              </td>
              <td>
                <ul class="my-0">
                  <li>Mengantar pakan | Pak Kahir</li>
                  <li>Mengantar pakan | Pak Kahir</li>
                  <li>Mengantar pakan | Pak Kahir</li>
                  <li>Mengantar pakan | Pak Kahir</li>
                  <li>Mengantar pakan | Pak Kahir</li>
                </ul>
              </td>
              <td><span class="badge bg-label-primary me-1">On Road</span></td>
              <td>
                <a href="#" class="text-black badge">
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