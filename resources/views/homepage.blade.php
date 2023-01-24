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

            {{-- Per ogni treno controlla se la data corrisponde a quella
                odierna e in caso positivo ne stampa i dati in tabella --}}
            @foreach ($trains as $train)
                @php
                    //variabili per formattazion orari
                    $partenza = new Datetime($train->orario_di_partenza);
                    $arrivo = new Datetime($train->orario_di_arrivo);
                    
                    //variabile per filtrare i treni in base alla data corrente
                    $currentDay = new Datetime(null, new DateTimeZone('	Europe/Rome'));
                @endphp
                @if ($partenza->format('y-m-d') === $currentDay->format('y-m-d'))
                    <tr>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $partenza->format('g:i A') }}</td>
                        <td>{{ $arrivo->format('g:i A') }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
</body>

</html>
