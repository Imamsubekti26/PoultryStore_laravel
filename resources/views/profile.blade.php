@extends('layout.main')

@section('content')
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Identitas</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama-ktp">Nama sesuai KTP</label>
            <div class="col-sm-10">
              <p>: Imam Subekti</p>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nik">NIK</label>
            <div class="col-sm-10">
              <p>: 3401010202010002</p>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama-panggilan">Nama Panggilan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama-panggilan" placeholder="bagaimana orang-orang memanggil anda">
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
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Edit</button>
              <a href="{{ url('employee') }}" type="button" class="btn btn-outline-secondary">kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Aplikasi</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama-pengguna">Nama Pengguna</label>
            <div class="col-sm-10">
              <p>: imams</p>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="password">Sandi Baru</label>
            <div class="col-sm-8 form-password-toggle">
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
            <div class="col-sm-2 text-end">
              <button class="btn btn-primary w-100">Perbarui Sandi</button>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="jabatan">Jabatan</label>
            <div class="col-sm-10">
              <p>: Junior Worker</p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5>Gaji</h5>
        <div class="d-flex gap-3 align-items-center">
          <div class="input-group">
            <span class="input-group-text">bulan:</span>
            <input type="month" class="form-control">
          </div>
        </div>
      </div>
      <div class="mx-4">
        <p>Total Pendapatan: <b>2.000.000</b></p>
        <p>Status: <b>Delayed</b></p>
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
@endsection