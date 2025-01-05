<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

    <!-- Memasukkan Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container my-4">
        <h1 class="mb-4 text-center">Daftar Buku</h1>

        <!-- Tombol Tambah Buku -->
        <div class="text-end mb-4">
            <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
        </div>

        <!-- Tabel Daftar Buku -->
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->judul_buku }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Formulir Hapus -->
                            <form action="{{ route('buku.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Memasukkan Bootstrap JS dan dependensinya (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybIi0nEr8t6ywMntRihfak6T4h7z7DU3tXdkqLhs8g6f4VlgL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0XwS0P0k6h+Xl/sXfX5HSoUoc7xT+g/fY+rHc7p1p1NTB4jF" crossorigin="anonymous">
    </script>
</body>

</html>
