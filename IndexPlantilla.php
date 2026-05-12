<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicWave</title>

    <?php include 'Modulos/Encabezados.php'; ?>
    
</head>
<body>

    <!-- HEADER -->
    <header>
        <nav>
            <h1>MusicWave</h1>

            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Artistas</a></li>
                <li><a href="#">Álbumes</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <h2>Vive la Música</h2>
            <p>Descubre nuevos artistas, álbumes y experiencias musicales.</p>

            <a href="#" class="btn">Explorar</a>
        </div>
    </section>

    <?php include 'Modulos/Artitstas.php'; ?>

    <?php include 'Modulos/Pies.php'; ?>

</body>
</html>

