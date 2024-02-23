<!-- resources/views/pdf/adoption.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Adoption</title>
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
    <h1>Data Adoption</h1>
    <table border="1" class="w-full">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama penyedia hewan</th>
                <th>Nama pengadopsi</th>
                <th>Nama hewan</th>
                <th>Tanggal adopsi</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adoptions as $adoption)
            <tr>
                <td>{{ $adoption->id }}</td>
                <td>{{ $adoption->petcontributor->nama }}</td>
                <td> {{ $adoption->user->nama }}</td>
                <td> {{ $adoption->pet->nama }}</td>
                <td> {{ $adoption->tanggal }}</td>
                <td> Rp{{ number_format($adoption->total_nominal, 0, ',', '.') }}</td>
                <td>{{ $adoption->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>