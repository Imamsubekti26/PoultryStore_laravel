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
            <label class="col-sm-2 col-form-label" for="name">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="nama">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="reason">Alasan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="reason" placeholder="kenapa bonus/penalty diberikan" name="reason">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="date">Tanggal</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="date" name="date">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="action">Jenis Aksi</label>
            <div class="col-sm-10">
              <select id="action" class="form-select">
                <option value="1">Bonus</option>
                <option value="2">Penalty</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="amount">Jumlah</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="amount" placeholder="dalam rupiah" name="amount">
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary" id="btn-submit">{{ $do }}</button>
              <button type="button" class="btn btn-outline-secondary" onclick="window.history.go(-1);">kembali</button>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection