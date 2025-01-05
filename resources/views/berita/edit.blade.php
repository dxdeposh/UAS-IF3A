<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f3f4f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            margin-top: 50px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 8px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 50px;
            padding: 10px 30px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .btn-custom:focus {
            outline: none;
            box-shadow: 0 0 0 0.25rem rgba(38, 143, 255, 0.5);
        }

        .mb-3 {
            margin-bottom: 1.5rem;
        }

        .select2-container--default .select2-selection--single {
            height: calc(2.25rem + 2px);
            border-radius: 8px;
            border: 1px solid #ced4da;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .select2-container--default .select2-selection--single:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center mb-4">Edit Berita</h2>

        <form action="{{ route('berita.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Judul Berita -->
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul"
                    value="{{ $data->judul_berita }}" placeholder="Ketik Judul" required>
            </div>

            <!-- Isi Berita -->
            <div class="mb-3">
                <label for="isi_berita" class="form-label">Isi Berita</label>
                <textarea name="isi_berita" id="isi_berita" cols="30" rows="10" class="form-control" placeholder="Isi berita"
                    required>{{ $data->isi_berita }}</textarea>
            </div>

            <!-- Edit Kategori Berita -->
            <div class="mb-3">
                <label for="kategori_berita_id" class="form-label">Kategori Berita</label>
                <select name="kategori_berita_id" id="kategori_berita_id" class="form-control" required>
                    <option value="" disabled>Pilih Kategori</option>
                    @foreach ($kategoriBerita as $kategori)
                        <option value="{{ $kategori->id }}"
                            {{ $data->kategori_berita_id == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" value="simpan" class="btn btn-custom">Simpan</button>
            </div>
        </form>
    </div>

</body>

</html>
