<?php require_once 'config.php'; ?>

<?php
// Esempio di query per ottenere tutti i clienti
$stmt = $pdo->query('SELECT * FROM clients');
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'components/header.php'; ?>

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-semibold">Elenco Clienti</h1>
    <a href="addClient.php"
        class="bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300">
        <i class="fas fa-plus "></i>
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="mb-4">
        <input type="text" id="searchInput" placeholder="Cerca per nome o telefono..."
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ($clients as $client): ?>
            <div class="client-card bg-white shadow-md rounded p-4 flex justify-between items-center">
                <!-- Sezione Dati Cliente -->
                <div>
                    <p class="font-semibold client-name"><?php echo htmlspecialchars($client['name']); ?></p>
                    <p class="text-gray-600 client-phone"><?php echo htmlspecialchars($client['phone']); ?></p>
                </div>

                <!-- Sezione Pulsanti -->
                <div class="flex space-x-2">
                    <a href="tel:<?php echo $client['phone']; ?>"
                        class="border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300 inline-flex items-center justify-center w-10 h-10">
                        <i class="fas fa-phone-alt"></i>
                    </a>
                    <a href="https://wa.me/<?php echo preg_replace('/\D/', '', $client['phone']); ?>"
                        class="border-2 border-green-500 text-green-500 hover:bg-green-500 hover:text-white rounded-full focus:outline-none focus:ring-2 focus:ring-green-300 inline-flex items-center justify-center w-10 h-10">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once 'components/navbar.php'; ?>

</body>

<script>
    // Funzione JavaScript per filtrare la lista dei clienti
    document.getElementById('searchInput').addEventListener('input', function () {
        var filter = this.value.toLowerCase();
        var cards = document.getElementsByClassName('client-card');

        Array.from(cards).forEach(function (card) {
            var name = card.querySelector('.client-name').innerText.toLowerCase();
            var phone = card.querySelector('.client-phone').innerText.toLowerCase();
            if (name.includes(filter) || phone.includes(filter)) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>

</html>