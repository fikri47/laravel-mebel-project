@extends('layout.main')

@section('title', 'Halaman Tambah Pemesanan')
@section('content')


@section('content')
<form action="/pemesanan" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Pemesanan</h3>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama_pemesan">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" placeholder="Masukkan nama Pelanggan">
                            @error('nama_pemesan')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="telp">No. Telp</label>
                            <input type="number" min="0"class="form-control" name="telp" id="telp" placeholder="Masukkan Nomor telp">
                            @error('telp')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="produk">Produk</label>                    
                    <select class="form-control" name="produk">
                        @foreach ($produk as $value)                        
                      <option value="{{$value->id}}">{{$value->nama}}</option>
                      @endforeach
                    </select>
                  </div>                
                <div class="form-group">
                    <label for="alamat_pemesan" class="form-label">Masukan alamat</label>
                    <textarea class="form-control" name="alamat_pemesan" id="alamat_pemesan" rows="3" placeholder="Masukan alamat"></textarea>      
                    @error('alamat_pemesan')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>    
                <div class="form-group">
                    <label for="deskripsi" class="form-label">Masukan deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukan deskripsi"></textarea>      
                    @error('deskripsi')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>    
                <div class="form-group">
                    <label for="total" class="form-label">Masukan total biaya</label>
                    <input type="number" class="form-control" name="total" id="total" placeholder="Masukkan total biaya">
                    @error('total')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>    
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

@endsection
