<!DOCTYPE html>
<html>

<head>
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Detail Barang</h2>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary mb-3">Kembali</a>
        <div class="card">
            <div class="card-header">
                {{ $barang->nama_barang }}
            </div>
            <div class="card-body">
                <p><strong>Kode Barang:</strong> {{ $barang->kode_barang }}</p>
                <p><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</p>
                <p><strong>Qty:</strong> {{ $barang->qty }}</p>
                <p><strong>Harga:</strong> {{ $barang->harga }}</p>
                <p><strong>Created At:</strong> {{ $barang->created_at }}</p>
                <p><strong>Updated At:</strong> {{ $barang->updated_at }}</p>
            </div>
        </div>
    </div>
</body>

</html>
