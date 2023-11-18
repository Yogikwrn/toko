<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Daftar Barang</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Barang - <a href="www." target="_blank">PT.Surya Raharja</a>
                </div>
                <div class="card-body">
                    <a href="/barang/tambah" class="btn btn-primary">Input Barang Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->harga }}</td>
                                <td>{{ $p->stok }}</td>
                                <td>
                                    <a href="/barang/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/barang/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>