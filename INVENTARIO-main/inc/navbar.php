<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .navbar {
        background-color: black;

    }

    body {
        background-image: url('inc/fondo.jpg');
        /* Reemplaza 'ruta-de-tu-imagen.jpg' con la ruta de tu imagen */
        background-size: cover;
        /* Esto ajustará la imagen para que cubra todo el fondo */
        background-repeat: no-repeat;
        /* Evita la repetición de la imagen en el fondo */
    }
</style>

<body>


    <nav class="navbar" role="navigation" aria-label="main navigation">

        <div class="navbar-brand">
            <a class="navbar-item" href="index.php?vista=home">
                <img src="./img/logo.png" width="150" height="100">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Usuarios</a>

                    <div class="navbar-dropdown">
                        <a href="index.php?vista=user_new" class="navbar-item" ;">Nuevo</a>
                        <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                        <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Categorías</a>

                    <div class="navbar-dropdown">
                        <a href="index.php?vista=category_new" class="navbar-item">Nueva</a>
                        <a href="index.php?vista=category_list" class="navbar-item">Lista</a>
                        <a href="index.php?vista=category_search" class="navbar-item">Buscar</a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Productos</a>

                    <div class="navbar-dropdown">
                        <a href="index.php?vista=product_new" class="navbar-item">Nuevo</a>
                        <a href="index.php?vista=product_list" class="navbar-item">Lista</a>
                        <a href="index.php?vista=product_category" class="navbar-item">Por categoría</a>
                        <a href="index.php?vista=product_search" class="navbar-item">Buscar</a>
                    </div>
                </div>

            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary is-rounded">
                            Mi cuenta
                        </a>

                        <a href="index.php?vista=logout" class="button is-link is-rounded">
                            Salir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>