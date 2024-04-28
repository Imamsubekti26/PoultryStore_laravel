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
            <label class="col-sm-2 col-form-label" for="plat">Nomor Plat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plat" placeholder="ex: AB 1234 LL">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="merk">merk dan tipe</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="merk" placeholder="ex: Mitsubishi Colt L300">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="kondisi">Kondisi</label>
            <div class="col-sm-10">
              <select id="kondisi" class="form-select">
                <option>Default select</option>
                <option value="1">Free</option>
                <option value="2">Busy</option>
                <option value="3">Broken</option>
              </select>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">{{ $do }}</button>
              <a href="{{ url('car') }}" type="button" class="btn btn-outline-secondary">kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection