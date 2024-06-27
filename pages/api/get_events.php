<?php
require_once '../../config.php'; // Assumi che questo file contenga la configurazione del database

try {
    // Connessione al database
    

    // Query per recuperare gli appuntamenti con informazioni sui clienti e servizi associati
    $stmt = $pdo->query('SELECT a.id, c.name as client_name, s.name as service_name, a.appointment_datetime 
                         FROM appointments a
                         LEFT JOIN clients c ON a.client_id = c.id
                         LEFT JOIN services s ON a.service_id = s.id');
    $appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Costruire un array di eventi nel formato richiesto da FullCalendar
    $events = [];
    foreach ($appointments as $appointment) {
        $events[] = [
            'id' => $appointment['id'],
            'title' => 'Appuntamento con ' . htmlspecialchars($appointment['client_name']) . ' - ' . htmlspecialchars($appointment['service_name']),
            'start' => $appointment['appointment_datetime'],
            'end' => $appointment['appointment_datetime'], // Puoi modificare se l'orario di fine è diverso
        ];
    }

    // Convertire gli eventi in formato JSON e stamparli
    echo json_encode($events);
} catch (PDOException $e) {
    die("Errore nel recupero degli appuntamenti: " . $e->getMessage());
}
?>
