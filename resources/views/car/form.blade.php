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
        <form id="form-car">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="plat">Nomor Plat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="plat" placeholder="ex: AB 1234 LL" name="plat">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="merk">merk dan tipe</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="merk" placeholder="ex: Mitsubishi Colt L300" name="merk">
            </div>
          </div>
          @if ($do == "Edit")
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="kondisi">Kondisi</label>
            <div class="col-sm-10">
              <select id="kondisi" class="form-select" name="status">
                <option value="free">Free</option>
                <option value="busy">Busy</option>
                <option value="broken">Broken</option>
              </select>
            </div>
          </div>
          @endif
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button 
                type="submit" 
                class="btn btn-primary" 
                id="btn-submit"
              >{{ $do }}</button>
              
              <a href="{{ url('car') }}" type="button" class="btn btn-outline-secondary">kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection