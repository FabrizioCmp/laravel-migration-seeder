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
        <h3>tabella treni di oggi:</h3>

        <table>
            <tr>
                <th>Codice Treno</th>
                <th>Orario partenza</th>
                <th>Orario arrivo</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
            </tr>
            @foreach ($trains as $train)
                @php
                    //variabili per formattazione orari
                    $partenza = new Datetime($train->orario_di_partenza);
                    $arrivo = new Datetime($train->orario_di_arrivo);  
                @endphp
                    <tr>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $partenza->format('g:i A') }}</td>
                        <td>{{ $arrivo->format('g:i A') }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                    </tr>
            @endforeach
        </table>
        
    </div>
</body>

</html>
