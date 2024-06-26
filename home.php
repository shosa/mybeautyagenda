<?php require_once 'components/header.php'; ?>

<div class="text-center p-4">
    <h1 class="text-4xl font-bold mb-6">Benvenuto su MyBeautyAgenda</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card per i Clienti -->
        <div
            class="bg-gradient-to-br from-purple-500 to-indigo-600 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transform hover:scale-105 transition duration-300">
            <div class="p-6">
            <div class="absolute left-0 top-0 transform -translate-x-1/3">
                    <i class="fas fa-users text-9xl text-white opacity-20"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2 text-white">Clienti</h2>
                <p class="text-gray-200 mb-4">Gestisci i tuoi clienti.</p>
                <a href="clientsList.php"
                    class="bg-white text-indigo-600 py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-300 inline-flex items-center justify-center w-full font-semibold hover:bg-indigo-500 hover:text-white transition duration-300">
                    <i class="fas fa-users mr-2"></i> Vai ai Clienti
                </a>
            </div>
        </div>

        <!-- Card per i Servizi -->
        <div
            class="bg-gradient-to-br from-pink-500 to-red-600 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transform hover:scale-105 transition duration-300 relative">
            <div class="p-6">
                <div class="absolute left-0 top-0 transform -translate-x-1/3">
                    <i class="fas fa-spa text-9xl text-white opacity-20"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2 text-white">Servizi</h2>
                <p class="text-gray-200 mb-4">Gestisci i servizi offerti.</p>
                <a href="services.php"
                    class="bg-white text-red-600 py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-red-300 inline-flex items-center justify-center w-full font-semibold hover:bg-red-500 hover:text-white transition duration-300">
                    <i class="fas fa-spa mr-2"></i> Vai ai Servizi
                </a>
            </div>
        </div>

        <!-- Card per gli Appuntamenti -->
        <div
            class="bg-gradient-to-br from-green-500 to-blue-600 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transform hover:scale-105 transition duration-300">
            <div class="p-6">
                <div class="absolute left-0 top-0 transform -translate-x-1/3">
                    <i class="fas fa-calendar text-9xl text-white opacity-20"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2 text-white">Appuntamenti</h2>
                <p class="text-gray-200 mb-4">Gestisci gli appuntamenti.</p>
                <a href="appointments.php"
                    class="bg-white text-blue-600 py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300 inline-flex items-center justify-center w-full font-semibold hover:bg-blue-500 hover:text-white transition duration-300">
                    <i class="fas fa-calendar-alt mr-2"></i> Vai agli Appuntamenti
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'components/navbar.php'; ?>
</div> <!-- Chiusura del container -->
</body>

</html>