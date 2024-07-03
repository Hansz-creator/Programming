@extends('dashboard/index')

@section('judul_halaman', 'Tambah Beranda')

@section('konten')
<div class="card card-primary card-outline">
    <div class="card-header">
      <h5 class="m-0">Data beranda</h5>
    </div>
    <form action="/dashboard/beranda/edit" method="post" enctype="multipart/form-data">
        @csrf
        @foreach ($beranda as $beranda)
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type="text" name="txt_judul_beranda" class="form-control" id="exampleInputEmail1" placeholder="Masukan judul untuk beranda" value="{{$beranda->judul_beranda}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi judul</label>
            <input type="text" name="txt_deskripsi_judul" class="form-control" id="exampleInputPassword1" placeholder="Masukan deskripsi judul untuk beranda" value="{{$beranda->deskripsi_judul_beranda}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
            <textarea name="txt_deskripsi_beranda" class="form-control" rows="3" placeholder="Enter ...">{{$beranda->deskripsi_beranda}}</textarea>
          </div>

          <div class="form-group">
            <label>Status tampil beranda</label>
            <select class="form-control" name="txt_status tampil_beranda" value="{{$beranda->status_tampil_beranda}}">
              <option value="0">Tidak</option>
              <option value="1">Tampil</option>
            </select>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Edit</button>
        </div>
        @endforeach
      </form>

    </div>
  </div>

@endsection
