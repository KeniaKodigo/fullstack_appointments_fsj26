<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Lista General de Pacientes</title>
</head>
<body>
    <style>
        h1{
            text-align: center;
            color: #5f9ea0;
            margin: 1rem 0;
        }
    </style>
    <main>
        <h1>Listado General de Pacientes</h1>

        <p><strong>Fecha:</strong> {{$date}}</p>

        <table>
            <thead>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Fecha de Nacimiento</th>
                <th>Direccion</th>
                <th>Telefono</th>
            </thead>
            <tbody>
                @foreach ($patients as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->birthdate }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>