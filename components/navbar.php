<?php
$current_page = basename($_SERVER['PHP_SELF']);

?>

<style>
    /* Stili aggiuntivi per la navbar */
    /* Stili aggiuntivi per la navbar */
    .navbar-container {
        position: relative;
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: visible;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        box-shadow: 0px -16px 33px -3px rgba(0, 0, 0, 0.1);
    }

    /* Cerchio centrale */
    .home-circle {
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #8b5cf6;
        color: #ffffff;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 1px 12px 0px #8b5cf691;
    }

    /* Margine tra le icone e il cerchio di Home */
    .nav-item {
        margin: 0 20px;
        /* Aggiunge margini laterali */
    }

    /* Stile per l'icona della pagina corrente */
    .nav-item.active {
        color: #ffffff !important;
        background-color: #8b5cf6 !important;
        /* Background per l'icona attiva */
        border-radius: 10px;
        /* Arrotondamento */
        padding: 10px;
        transition: background-color 0.3s ease;
    }
</style>

<nav class="fixed bottom-0 left-0 right-0">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-around navbar-container">

        <!-- Link per i Clienti -->
        <a href="../pages/clientsList.php"
            class="text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 text-xl <?php echo $current_page == 'clientsList.php' ? 'text-blue-600' : ''; ?>">
            <i class="fas fa-users"></i>
            <span class="sr-only">Clienti</span>
        </a>

        <!-- Link per i Servizi -->
        <a href="#"
            class="text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 text-xl <?php echo $current_page == 'services.php' ? 'text-blue-600' : ''; ?>">
            <i class="fas fa-spa"></i>
            <span class="sr-only">Servizi</span>
        </a>

        <!-- Link per gli Appuntamenti -->
        <a href="../pages/calendar"
            class="text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 text-xl <?php echo $current_page == 'calendar.php' ? 'text-blue-600' : ''; ?>">
            <i class="fas fa-calendar-alt"></i>
            <span class="sr-only">Appuntamenti</span>
        </a>

        <!-- Quinto Elemento della Navbar -->
        <a href="#"
            class="text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 text-xl <?php echo $current_page == 'anotherPage.php' ? 'text-blue-600' : ''; ?>">
            <i class="fas fa-info-circle"></i>
            <span class="sr-only">Altro</span>
        </a>

        <!-- Cerchio di Home fuori dalla navbar -->
        <div class="home-circle">
            <a href="../home.php" class="text-xl">
                <i class="fas fa-home"></i>
            </a>
        </div>
    </div>
</nav>