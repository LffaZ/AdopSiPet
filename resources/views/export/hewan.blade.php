<!-- resources/views/pdf/adoption.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hewan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Data Hewan</h1>
    <table border="1" class="w-full">
        <thead>
            <tr>
                <th>Kd</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Status Kepemilikan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
            <tr>
                <td>{{ $pet->kd }}</td>
                <td>{{ $pet->nama }}</td>
                <td> {{ $pet->category }}</td>
                <td> {{ $pet->stts_kepemilikan }}</td>
                <td> Rp{{ number_format($pet->harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>