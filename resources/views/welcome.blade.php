<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
            <div class="ticket">
                <div class="ticket-header">
                    <h3>Biglietto Treno</h3>
                </div>
        
                <div class="ticket-body">
                    <div class="info-row">
                        <span class="info-label">Azienda:</span>
                        <span>{{ $train->azienda }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Codice Treno:</span>
                        <span>{{ $train->codice_treno }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Giorno della partenza:</span>
                        <span>{{ $train->giorno_partenza }}</span>
                    </div>
                    <div class="divider"></div>
                    <div class="info-row">
                        <span class="info-label">Stazione di Partenza:</span>
                        <span>{{ $train->stazione_partenza }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Stazione di Arrivo:</span>
                        <span>{{ $train->stazione_arrivo }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Orario di Partenza:</span>
                        <span>{{ $train->orario_partenza }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Orario di Arrivo:</span>
                        <span>{{ $train->orario_arrivo }}</span>
                    </div>
                    <div class="divider"></div>
                    <div class="info-row">
                        <span class="info-label">Numero Carrozze:</span>
                        <span>{{ $train->numero_carrozze }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Stato:</span>
                        @if ($train->cancellato)
                            <span class="status cancelled">Cancellato</span>
                        @elseif (!$train->in_orario)
                            <span class="status late">In Ritardo</span>
                        @else
                            <span class="status on-time">In Orario</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>