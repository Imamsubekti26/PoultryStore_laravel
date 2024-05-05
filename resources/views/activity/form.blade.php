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
            <label class="col-sm-2 col-form-label" for="detail">Rincian Kegiatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="detail" placeholder="Apa yang mau dilakukan" name="detail">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="date">Tanggal</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="date" name="date">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="partner">Mitra</label>
            <div class="col-sm-10">
              <select id="partner" class="form-select" name="partner">
                <option>Default select</option>
                <option value="1">One</option>
              </select>
            </div>
          </div>
          @if ($do == 'Edit')
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="status">Status</label>
            <div class="col-sm-10">
              <select id="status" class="form-select" name="status">
                <option value="scheduled">Scheduled</option>
                <option value="delivered">Delivered</option>
                <option value="canceled">Canceled</option>
                <option value="done">Done</option>
              </select>
            </div>
          </div>
          @endif
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary" id="btn-submit">{{ $do }}</button>
              <a href="{{ url('activity') }}" type="button" class="btn btn-outline-secondary">kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection