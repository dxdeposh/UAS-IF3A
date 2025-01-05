<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori Berita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Tambahan Styles (jika diperlukan) -->
    <style>
        /* Tambahkan CSS khusus di sini jika diperlukan */
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Kategori Berita</h1>

        <!-- Form Edit Kategori Berita -->
        <div class="card shadow-sm p-4">
            <form action="{{ route('kategori-berita.update', $kategoriBerita->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Input Nama Kategori -->
                <div class="form-group mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori"
                        class="form-control @error('nama_kategori') is-invalid @enderror"
                        value="{{ old('nama_kategori', $kategoriBerita->nama_kategori) }}" required>
                    @error('nama_kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Button Update -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg px-4 py-2">
                        <i class="fas fa-save"></i> Update Kategori
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Custom Script untuk Animasi dan UI -->
    <script>
        // Menambahkan animasi fokus pada input form
        document.getElementById('nama_kategori').addEventListener('focus', function() {
            this.style.boxShadow = '0 0 8px rgba(0, 123, 255, 0.5)';
        });

        document.getElementById('nama_kategori').addEventListener('blur', function() {
            this.style.boxShadow = 'none';
        });
    </script>

    <!-- Bootstrap JS dan dependensi (jika diperlukan) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXlY3/6jEW1ZK3q3SPucB7K1Cd5jeV5Hf5L6sHg8FD3hHPo+AbQ47h3bZ0vF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9bInhL+9SOgO2F0Ld09Q38CqY1ZZVJ59Rh5i0hP59H3PEN6R+e4I5II" crossorigin="anonymous">
    </script>
</body>

</html>
