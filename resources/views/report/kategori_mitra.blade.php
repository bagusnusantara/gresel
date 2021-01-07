<!DOCTYPE html>

<head>
    <style>
        .table {
            border: 1 solid #000000;
            padding: 8px;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1 solid #000000;
            padding: 8px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <h1>Report Daftar Kategori Mitra</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Subtotal</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $i = 0;
            ?>
            @foreach ($data as $d)
            <tr>
                <td style="text-align: center;">{{$d->id_kategori_mitra}}</td>
                <td>{{$d->nama}}</td>
                <td>1</td>
            </tr>
            <?php $i++; ?>
            @endforeach
            <tr>
                <td colspan="2">Total</td>
                <td>{{ $i}}</td>
            </tr>
        </tbody>
    </table>
</body>