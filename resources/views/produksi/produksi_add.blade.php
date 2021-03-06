@extends('layouts.master')

@section('content')
<div class="row align-items-center py-4">
    <div class="col-lg-6 col-7">
      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
          <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="fas fa-home"></i></a></li>
          <li class="breadcrumb-item"><a href="{{ url('produksi') }}">data produksi</a></li>
          <li class="breadcrumb-item active" aria-current="page">tambah produksi</li>
        </ol>
      </nav>
    </div>

  </div>
<form action="{{ url('produksi/add') }}" method="POST">
    @csrf
    <div class="row">
      <div class="col">

        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlTextarea2">Nama produksi</label>
          <input type="text" name="produksi" class="form-control" id="exampleFormControlInput1" placeholder="produksi...">
          @error('produksi')
          <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlTextarea2">Pengeluaran</label>
          <input  type="number" value="" name="pengeluaran" class="form-control" id="exampleFormControlInput1" placeholder="masukkan angka">
          @error('pengeluaran')
          <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlTextarea2">Jumlah</label>
          <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1" placeholder="masukkan angka">
          @error('jumlah')
          <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">Tanggal</label>
          <input name="tanggal" type="text" class="form-control datepicker" autocomplete="off" >

        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-info" value="simpan" >

        </div>
      </div>


    </div>

  </form>

@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
    $(".datepicker").datepicker();
})
</script>

@endsection
