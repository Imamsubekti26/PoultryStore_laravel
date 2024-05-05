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
            <label class="col-sm-2 col-form-label" for="name">Nama Mitra</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="ex: pak ard..." name="name">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="address">Alamat Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="address" placeholder="alamat lengkap" name="address">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="area">Area</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="area" placeholder="kecamatan, kabupaten" name="area">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="phone">Nomor Telpon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="phone" placeholder="ex: 08123..." name="phone">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="partnership_type">Jenis Kemitraan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="partnership_type" placeholder="ex: pembesaran puyuh, petelur puyuh..." name="partnership_type">
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary" id="btn-submit">{{ $do }}</button>
              <a href="{{ url('partner') }}" type="button" class="btn btn-outline-secondary">kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection