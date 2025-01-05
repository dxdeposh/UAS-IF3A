<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori Berita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome CSS (Jika digunakan) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Tambahan Styles (jika diperlukan) -->
    <style>
        /* Tambahkan CSS khusus di sini jika diperlukan */
    </style>
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Daftar Kategori Berita</h1>

        <div class="mb-3 text-end">
            <a href="{{ route('kategori-berita.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Kategori
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">#</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col" class="text-center" style="width: 20%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kategoriBerita as $kategori)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kategori->nama_kategori }}</td>
                            <td class="text-center">
                                <a href="{{ route('kategori-berita.edit', $kategori->id) }}"
                                    class="btn btn-warning btn-sm me-2">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                <form action="{{ route('kategori-berita.destroy', $kategori->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada kategori berita tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS dan Dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXlY3/6jEW1ZK3q3SPucB7K1Cd5jeV5Hf5L6sHg8FD3hHPo+AbQ47h3bZ0vF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9bInhL+9SOgO2F0Ld09Q38CqY1ZZVJ59Rh5i0hP59H3PEN6R+e4I5II" crossorigin="anonymous">
    </script>

    <!-- Tambahan Script (jika diperlukan) -->
    <script>
        // Tambahkan JavaScript khusus di sini jika diperlukan
    </script>
</body>

</html>
