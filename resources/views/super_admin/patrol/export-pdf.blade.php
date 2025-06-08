<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
</head>
<style>
    .text-center{
        text-align: center;
    }
    .table{
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;

    }

    .table table,
    .table th,
    .table td{
        border: 1px solid black;
        padding: 10px 4px;
        word-wrap: break-word;      
        white-space: normal;      
        vertical-align: top;
    }
    img {
        max-width: 100px;
        max-height: 80px;
        object-fit: contain;
        display: block;
        margin: 0 auto;
    }

</style>
<body>
    <h1 class="text-center">Data Patroli</h1>
     <table class="table ">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Shift</th>
                <th>Tempat</th>
                <th>lokasi patroli</th>
                <th>Foto</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if ($patrols->isEmpty())
                <tr>
                    <td colspan="10" class="text-center">Tidak ada data</td>
                </tr>
            @endif
            @foreach($patrols as $patrol)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{ $patrol->employee->name }}</td>
                    <td >{{$patrol->shift->name}}</td>
                    <td >{{$patrol->place->name}}</td>
                    <td>{{$patrol->patrol_location}}</td>
                    <td><img src="{{ $patrol->photo_base64 }}" alt="foto" ></td>
                    <td>{{ $patrol->latitude }}</td>
                    <td>{{ $patrol->longitude }}</td>
                    <td>{{$patrol->status}}</td>
                </tr>
            @endforeach
        </tbody>
     </table>
</body>
</html>
