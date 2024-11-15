<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Supermercado Seguro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Perfil</h1>
        <img class="header-img" src="assets/img/profile-view.png" alt="profile-view">
        <button class="menu-button" onclick="toggleMenu()">☰ Menú</button>
        <nav>
            <ul class="menu">
                <li><a href="products.php">Productos</a></li>
                <li><a href="cart.php">Carrito</a></li>
                <li><a href="index.php">Cerrar Sesión</a></li>
                <li><a href="edit-catalog.php">Editar Catálogo</a></li>
                <li><a href="edit-users.php">Editar Usuarios</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="profile">
            <h2 class="page-title">Tu Perfil</h2>
            <img src="assets/img/profile.png" alt="Foto de Perfil">
            <p>Nombre Completo: Juan Pérez</p>
            <p>Nombre de Usuario: jperez</p>
            <p>Correo Electrónico: jperez@example.com</p>
            <p>Teléfono: 1234567890</p>
            <p>Fecha de Nacimiento: 01/01/2000</p>
            <button onclick="window.location.href='edit-profile.php'">Editar Perfil</button>
        </section>
    </main>
    
    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
