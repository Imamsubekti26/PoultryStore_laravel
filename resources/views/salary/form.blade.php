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
            <label class="col-sm-2 col-form-label" for="nama-ktp">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama-ktp" placeholder="nama">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="alasan">Alasan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alasan" placeholder="kenapa bonus/penalty diberikan">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="jabatan">Jenis Aksi</label>
            <div class="col-sm-10">
              <select id="jabatan" class="form-select">
                <option value="1">Bonus</option>
                <option value="2">Penalty</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="gaji">Jumlah</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="gaji" placeholder="dalam rupiah">
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">{{ $do }}</button>
              <button type="button" class="btn btn-outline-secondary" onclick="window.history.go(-1);">kembali</button>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection