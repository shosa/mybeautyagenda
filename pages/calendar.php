<?php require_once '../components/header.php'; ?>

</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<body>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold my-8">Agenda Appuntamenti</h1>
        <div id="calendar"></div>
    </div>
    <?php require_once '../components/navbar.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Recupera i dati degli eventi tramite AJAX o fetch API
        fetch('api/get_events.php')
            .then(response => response.json())
            .then(events => {
                const calendarEl = document.getElementById('calendar');

                // Costruisci il calendario utilizzando gli eventi recuperati
                events.forEach(event => {
                    const eventEl = document.createElement('div');
                    eventEl.classList.add('card', 'p-2', 'mb-2');
                    eventEl.innerHTML = `
                    <div class="card-body">
                        <h5 class="card-title">${event.title}</h5>
                        <p class="card-text">${event.start}</p>
                    </div>
                `;
                    calendarEl.appendChild(eventEl);
                });
            })
            .catch(error => console.error('Errore nel recupero degli eventi:', error));
    });
</script>

</html>