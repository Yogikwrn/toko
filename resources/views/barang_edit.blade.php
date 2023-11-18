<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Barang</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Barang - <strong>EDIT DATA</strong> - </a>
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/barang/update/{{ $barang->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama.." value=" {{ $barang->nama }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Harga</label>
                            <textarea name="harga" class="form-control" placeholder="Harga .."> {{ $barang->harga }} </textarea>
 
                             @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Stok</label>
                            <textarea name="stok" class="form-control" placeholder="Stok .."> {{ $barang->stok }} </textarea>
 
                             @if($errors->has('stok'))
                                <div class="text-danger">
                                    {{ $errors->first('stok')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/barang" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>