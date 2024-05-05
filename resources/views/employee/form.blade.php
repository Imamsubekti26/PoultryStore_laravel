@extends('layout.main')
@section('content')
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">{{ $do.' '.$title }}</h5>
        @if ($do == 'Edit')
          <button class="btn btn-sm btn-outline-danger" id="btn-delete">Hapus Data Ini</button>
        @endif
      </div>
      <div class="card-body">
        <form id="form-data">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="surename">Nama sesuai KTP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="surename" placeholder="nama sesuai KTP" name="surename">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nik">NIK</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="nik" placeholder="16 digit nomor KTP" name="nik">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="address">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="address" placeholder="alamat lengkap" name="address">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="phone">Nomor Telpon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="phone" placeholder="ex: 08123..." name="phone">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="position">Jabatan</label>
            <div class="col-sm-10">
              <select id="position" class="form-select" name="position">
                <option value="junior worker">Junior Worker</option>
                <option value="senior worker">Senior Worker</option>
                <option value="officer">Officer</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="base_salary">Gaji Pokok</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="base_salary" placeholder="gaji pokok / bulan dalam rupiah" name="base_salary">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nickname">Nama Panggilan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nickname" placeholder="bagaimana orang-orang memanggil anda" name="nickname">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="username">Nama Pengguna</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" placeholder="username untuk masuk ke aplikasi" name="username">
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
              <button type="submit" class="btn btn-primary" id="btn-submit">{{ $do }}</button>
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
            <input type="month" class="form-control" id="filter" value="{{ $today['month'] }}" name="month">
          </div>
          <button class="btn btn-primary" onclick="href('salary/tambah/{{ $data_id }}')">Tambah</button>
        </div>
      </div>
      <div class="mx-4">
        <p>Total Pendapatan: <b id="this-month-salary">...</b></p>
        <p>Status: <b id="salary-status">...</b></p>
        <hr>
        <p><b>Rincian: </b></p>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped" id="table-data">
          <thead>
            <tr>
              <th width="30%">Pekerjaan</th>
              <th width="10%">Upah</th>
              <th width="10%">Tanggal</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0"></tbody>
        </table>
      </div>
    </div>
    @endif
@endsection

@if ($do == 'Edit')
@section('custom-script')
  <script src="{{ url('/assets/js/employee_edit.js') }}"></script>  
@endsection
@endif