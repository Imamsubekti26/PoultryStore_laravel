@extends('layout.main')
@section('content')
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">{{ $do.' '.$title }}</h5>
        @if ($do == 'Edit')
          <button class="btn btn-sm btn-outline-danger">Hapus Data Ini</button>
        @endif
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama-ktp">Nama sesuai KTP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama-ktp" placeholder="nama sesuai KTP">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nik">NIK</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="nik" placeholder="16 digit nomor KTP">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" placeholder="alamat lengkap">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nomor-telpon">Nomor Telpon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nomor-telpon" placeholder="ex: 08123...">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="jabatan">Jabatan</label>
            <div class="col-sm-10">
              <select id="jabatan" class="form-select">
                <option value="1">Junior Worker</option>
                <option value="2">Senior Worker</option>
                <option value="3">Officer</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="gaji">Gaji Pokok</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="gaji" placeholder="gaji pokok / bulan dalam rupiah">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama-panggilan">Nama Panggilan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama-panggilan" placeholder="bagaimana orang-orang memanggil anda">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama-pengguna">Nama Pengguna</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama-pengguna" placeholder="username untuk masuk ke aplikasi">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="password">Sandi (untuk login)</label>
            <div class="col-sm-10 form-password-toggle">
              <div class="input-group input-group-merge">
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password"
                />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">{{ $do }}</button>
              <a href="{{ url('employee') }}" type="button" class="btn btn-outline-secondary">kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    @if ($do == 'Edit')
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5>Gaji</h5>
        <div class="d-flex gap-3 align-items-center">
          <div class="input-group">
            <span class="input-group-text">bulan:</span>
            <input type="month" class="form-control">
          </div>
          <button class="btn btn-primary" onclick="href('salary/tambah')">Tambah</button>
        </div>
      </div>
      <div class="mx-4">
        <p>Total Pendapatan: <b>2.000.000</b></p>
        <hr>
        <p><b>Rincian: </b></p>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="30%">Pekerjaan</th>
              <th width="10%">Upah</th>
              <th width="10%">Tanggal</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>Gaji Bulanan</td>
              <td>1.000.000</td>
              <td>27/04/2024</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    @endif
@endsection