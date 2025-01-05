<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Melihat Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="{{ route('berita.destroy', $data->id) }}" method="POST">
            @csrf
            @method ('DELETE')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul" readonly
                    value="{{ $data->judul_berita }}" placeholder="Ketik Judul">
            </div>
            <div class="mb-3">
                <label for="isi_berita" class="form-label">Isi Berita</label>
                <textarea name="isi_berita" readonly id="isi_berita" cols="30" rows="10" class="form-control"
                    placeholder="Isi berita" {{ $data->isi_berita }}></textarea>
            </div>
            <div class="mb-3">
                Apakah anda yakin ingin menghapus berita ini?
                <button type="submit" value="hapus" class="btn btn-danger">Ya, Hapus</button>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Tidak</a>
            </div>
        </form>
    </div>
</body>

</html>
