<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>

<body>
    <h1 class="homepage_title">DB Trains</h1>
    <div class="container">
        <h3>tabella treni:</h3>
        <table>
            <tr>
                <th>Codice Treno</th>
                <th>Orario partenza</th>
                <th>Orario arrivo</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
            </tr>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->codice_treno }}</td>
                    <td>
                        @php
                            $partenza = new Datetime($train->orario_di_partenza); 
                        @endphp
                        {{ $partenza->format('g:i A') }}
                    </td>
                    <td>{{ $train->orario_di_arrivo }}</td>
                    <td>{{ $train->stazione_di_partenza }}</td>
                    <td>{{ $train->stazione_di_arrivo }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
