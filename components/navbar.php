<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style>
    /* Stili aggiuntivi per la navbar */
    .navbar-container {
        position: relative;
        background-color: #ffffff; /* Colore di sfondo della navbar */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Ombra leggera */
        overflow: visible; /* Permette al cerchio di "Home" di uscire dalla navbar */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px; /* Arrotondamento dei bordi della navbar */
        box-shadow: 0px -16px 33px -3px rgba(0,0,0,0.1);
    }

    .home-circle {
        position: absolute;
        top: -25px; /* Altezza dal bordo superiore della navbar */
        left: 50%; /* Centrato orizzontalmente */
        transform: translateX(-50%);
        background-color: #8b5cf6; /* Colore di sfondo del cerchio */
        color: #ffffff; /* Colore del testo */
        width: 50px; /* Dimensioni del cerchio */
        height: 50px;
        border-radius: 50%; /* Per fare un cerchio */
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 1px 12px 0px #8b5cf691;
    }
</style>

<nav class="fixed bottom-0 left-0 right-0">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-around navbar-container">
        
        <!-- Link per i Clienti -->
        <a href="clientsList.php"
            class="text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 text-xl <?php echo $current_page == 'clientsList.php' ? 'text-blue-600' : ''; ?>">
            <i class="fas fa-users"></i>
            <span class="sr-only">Clienti</span>
        </a>

        <!-- Link per i Servizi -->
        <a href="services.php"
            class="text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 text-xl <?php echo $current_page == 'services.php' ? 'text-blue-600' : ''; ?>">
            <i class="fas fa-spa"></i>
            <span class="sr-only">Servizi</span>
        </a>

        <!-- Link per gli Appuntamenti -->
        <a href="calendar"
            class="text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 text-xl <?php echo $current_page == 'calendar.php' ? 'text-blue-600' : ''; ?>">
            <i class="fas fa-calendar-alt"></i>
            <span class="sr-only">Appuntamenti</span>
        </a>

        <!-- Quinto Elemento della Navbar -->
        <a href="anotherPage.php"
            class="text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 text-xl <?php echo $current_page == 'anotherPage.php' ? 'text-blue-600' : ''; ?>">
            <i class="fas fa-info-circle"></i>
            <span class="sr-only">Altro</span>
        </a>

        <!-- Cerchio di Home fuori dalla navbar -->
        <div class="home-circle">
            <a href="home.php" class="text-xl">
                <i class="fas fa-home"></i>
            </a>
        </div>
    </div>
</nav>
