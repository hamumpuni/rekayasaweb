<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; }
        h2 { text-align: center; color: #0f1d31; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #0f1d31; color: #fff; }
    </style>
</head>
<body>
    <h2>Laporan Data Berita KSO TIMAS-PRATIWI</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($berita as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->tanggal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>