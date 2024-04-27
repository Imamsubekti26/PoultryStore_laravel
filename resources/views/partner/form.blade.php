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
            <label class="col-sm-2 col-form-label" for="nama-mitra">Nama Mitra</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama-mitra" placeholder="ex: pak ard...">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="alamat">Alamat Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" placeholder="alamat lengkap">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="area">Area</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="area" placeholder="kecamatan, kabupaten">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nomor-telpon">Nomor Telpon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nomor-telpon" placeholder="ex: 08123...">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="jenis-kemitraan">Jenis Kemitraan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jenis-kemitraan" placeholder="ex: pembesaran puyuh, petelur puyuh...">
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">{{ $do }}</button>
              <a href="{{ url('partner') }}" type="button" class="btn btn-outline-secondary">kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection