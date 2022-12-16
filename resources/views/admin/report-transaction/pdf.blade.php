<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
    <table style="height: 36px; width: 100%; border-collapse: collapse;" border="0">
        <tbody>
            <tr style="height: 18px;">
                <td style="width: 50%; height: 36px;" rowspan="2"><img
                        style="display: block; margin-left: auto; margin-right: auto;"
                        src="{{ public_path('images/logo.jpeg') }}" alt="" width="275" height="54" /></td>
                <td style="width: 50%; height: 18px;">
                    <h1>Laporan Rata-Rata Jumlah Snack Dibeli</h1>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 50%; height: 18px;">
                    <div>
                        <h3>03081200044 - Vinny Jovita</h3>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <table style="border-collapse: collapse; width: 100%;" border="1">
        <thead>
            <tr>
                <th>#</th><th>Transaction Number</th><th>Product Name</th><th>Average Qty</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->ProductName }}</td>
                    <td>{{ $item->Kategori }}</td>
                    <td>{{ $item->Qty }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
