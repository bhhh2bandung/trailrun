<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BHHH2 TRAIL RUN 2018</title>
</head>
<body>
    <table>
    @foreach($status as $data)    
    <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->upload->peserta->user->name }}</td>
     </tr>
    @endforeach
    </table>
</body>
</html>