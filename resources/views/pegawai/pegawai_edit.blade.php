@extends('layouts.master')

@section('content')
<div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
      <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
          <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
          <li class="breadcrumb-item"><a href="{{ url('pegawai') }}">data pegawai</a></li>
          <li class="breadcrumb-item active" aria-current="page">edit data pegawai</li>
        </ol>
      </nav>
    </div>

  </div>
<form action="{{ url('pegawai/'.$data->pegawai_id) }}" method="POST">
    @csrf
    @method('put')
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input value="{{ $data->nama }}" type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="pemasukan ..">
          @error('nama')
          <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <input value="{{ $data->nohp }}" type="text" name="nohp" class="form-control" id="exampleFormControlInput1" placeholder="nohp ..">
          @error('nohp')
          <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <input value="{{ $data->jabatan }}" type="text" name="jabatan" class="form-control" id="exampleFormControlInput1" placeholder="jabatan ..">
          @error('jabatan')
          <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlTextarea2">alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea2" rows="3" resize="none">{{ $data->alamat }}</textarea>
            @error('alamat')
            <div class="alert-danger">{{ $message }}</div>
            @enderror
          </div>
        <div class="form-group">
          <input type="submit" class="btn btn-info" value="simpan" >
        </div>
      </div>

    </div>

  </form>

@endsection
