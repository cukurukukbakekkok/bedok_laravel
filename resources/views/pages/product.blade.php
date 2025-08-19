@extends('layouts.master')

@section('konten')
<h1>Daftar Produk Kami..</h1>
<hr>  
<a href="/produk/tambah" type="button" class="btn btn-primary mb-4">Tambah Data</a>
<div class="card">
      <b>Nama Toko : </b> {{$nama_toko}}
      <br>
      <b>Alamat : </b> {{$alamat}}
      <br>
      <b>Tipe Toko : </b> {{$type}}
    <div class="card-header">
        Daftar Produk
    </div>
    <div class="card-body">

      <table class="table table-striped table-bordered">
  <thead>


      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Minum</th>
      <th scope="col">Harga</th>
       <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mie Ayam</td>
      <td>esteh</td>
      <td>10.000</td>
      <td>
      <button type="button" class="btn btn-danger">Hapus</button>
      <button type="button" class="btn btn-warning">Edit</button>
      </td>    
    </tr>
   <tr>
      <th scope="row">1</th>
      <td>Bakso</td>
      <td>esteh</td>
      <td>10.000</td>
      <td>
      <button type="button" class="btn btn-danger">Hapus</button>
      <button type="button" class="btn btn-warning">Edit</button>
      </td>    
    </tr>
     <tr>
      <th scope="row">1</th>
      <td>Pecel</td>
      <td>esteh</td>
      <td>10.000</td>
      <td>
      <button type="button" class="btn btn-danger">Hapus</button>
      <button type="button" class="btn btn-warning">Edit</button>
      </td>    
    </tr>
  </tbody>
</table>
  <div class="card-body">   
  </div>
</div>
 
@endsection