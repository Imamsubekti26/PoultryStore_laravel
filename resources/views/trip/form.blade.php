@extends('layout.main')
@section('content')
<div class="row">
  <div class="col-sm-12 col-md-5">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">{{ $do.' '.$title }}</h5>
        @if ($do == 'Edit')
          <button class="btn btn-sm btn-outline-danger">Hapus Data Ini</button>
        @endif
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label class="form-label" for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal">
          </div>
          <div class="mb-3">
            <label class="form-label" for="area">Area</label>
            <input type="text" class="form-control" id="area" placeholder="kecamatan, kabupaten">
          </div>
          <div class="mb-3">
            <label class="form-label" for="estimasi">Estimasi (jam)</label>
            <input type="number" class="form-control" id="estimasi" placeholder="perkiraan lama pekerjaan dalam jam">
          </div>
          <div class="mb-3">
            <label class="form-label" for="petugas-1">Petugas 1</label>
            <select id="petugas-1" class="form-select">
              <option>Default select</option>
              <option value="1">Free</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="petugas-2">Petugas 2</label>
            <select id="petugas-2" class="form-select">
              <option>Default select</option>
              <option value="1">Free</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="mobil">Mobil</label>
            <select id="mobil" class="form-select">
              <option>Default select</option>
              <option value="1">Free</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="status">Status</label>
            <select id="status" class="form-select">
              <option>Default select</option>
              <option value="1">Dijadwalkan</option>
              <option value="1">Dikerjakan</option>
              <option value="1">Selesai</option>
              <option value="1">Dibatalkan</option>
            </select>
          </div>
          <div>
            <button type="submit" class="btn btn-primary">{{ $do }}</button>
            <a href="{{ url('trip') }}" type="button" class="btn btn-outline-secondary">kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-7">
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <h5>Pilih Aktifitas</h5>
          <div class="d-flex gap-3 align-items-center">
            <div class="input-group">
              <span class="input-group-text">tanggal:</span>
              <input type="date" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="50%">Rincian Pekerjaan</th>
              <th width="35%">Tujuan</th>
              <th width="15%">Pilih</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <small><b>Mengantar Pakan 10 sak</b></small><br>
                <small>27/04/24</small><br>
              </td>
              <td>
                <small><b>Pak Hendri</b></small><br>
                <small>Lendah, Kulon Progo</small><br>
              </td>
              <td>
                <input class="form-check-input" type="checkbox" id="defaultCheck3">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection