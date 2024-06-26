<?php require_once 'components/header.php'; ?>

<!-- Caricamento dei file non moduli di FullCalendar -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/fullcalendar/main.css" rel="stylesheet">
<style>
    /* Stili personalizzati per migliorare la visualizzazione su dispositivi mobili e desktop */
    body {
        background-color: #ffffff; /* Sfondo bianco */
    }

    #calendar {
        font-size: 14px;
        width: 100%; /* Occupa l'intera larghezza del container */
        margin: 20px 0; /* Margine sopra e sotto il calendario */
    }

    .fc-daygrid-event {
        background-color: #3182ce;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        padding: 5px 10px;
        cursor: pointer;
    }

    .fc-daygrid-event:hover {
        background-color: #2c5282;
    }
</style>
</head>

<body>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold my-8">Calendario Appuntamenti</h1>

        <div id="calendar"></div>

        <!-- Script per inizializzare FullCalendar e recuperare gli eventi dal backend -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'timeGridWeek', // Imposta la vista settimanale come iniziale
                    headerToolbar: {
                        left: 'prev,next today',
                        center: '',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: {
                        url: 'get_events.php', // URL per recuperare gli eventi dal backend PHP
                        method: 'GET', // Metodo HTTP per la richiesta (GET, POST, ecc.)
                        failure: function () {
                            alert('Impossibile caricare gli eventi dal server.');
                        },
                        color: '#3182ce', // Colore predefinito degli eventi nel calendario
                    },
                    eventClick: function (info) {
                        // Mostra dettagli dell'evento quando viene cliccato
                        alert('Evento: ' + info.event.title + '\nOrario: ' + info.event.startStr);
                    }
                });

                calendar.render();
            });
        </script>
    </div>

    <?php require_once 'components/navbar.php'; ?>
</body>

</html>
