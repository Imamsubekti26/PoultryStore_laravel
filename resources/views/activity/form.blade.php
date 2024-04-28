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
            <label class="col-sm-2 col-form-label" for="rincian-kegiatan">Rincian Kegiatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="rincian-kegiatan" placeholder="Apa yang mau dilakukan">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="tanggal">Tanggal</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="tanggal">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="mitra">Mitra</label>
            <div class="col-sm-10">
              <select id="mitra" class="form-select">
                <option>Default select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
              </select>
            </div>
          </div>
          @if ($do == 'Edit')
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="status">Status</label>
            <div class="col-sm-10">
              <select id="status" class="form-select">
                <option>Default select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
              </select>
            </div>
          </div>
          @endif
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">{{ $do }}</button>
              <a href="{{ url('activity') }}" type="button" class="btn btn-outline-secondary">kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection