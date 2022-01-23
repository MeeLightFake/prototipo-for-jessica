<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View</title>
        <link rel="shortcut icon" type="image/png" href="./../../assets/img/logo.png">
 
        <!-- CSS -->

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="./../../assets/css/style.css">
        <link rel="stylesheet" href="./../../assets/css/view-data.css">
    </head>
 
 
    <body>

        <!-- Header -->
        <header>
            <nav>
                <!-- Logo -->
                <a href="./../../index.php" class="ref-logo">
                    <img src="./../../assets/img/logo.png" class="logo" alt="Logo">
                </a>
                <!-- List of elements -->
                <ul>
                    <li class="element">
                        <a href="./../../index.php">
                            Home
                        </a>
                    </li>
                    <li class="element">
                        <a href="./create-form.php">
                            Create
                        </a>
                    </li>
                    <li class="element">
                        <a href="./view-data.php"
                        class="selected">
                            Read
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
 
        <!-- Main -->
        <main role="main">
            <div class="container">
                <h1>Courses</h1>

                <br>
                <br>

                <!-- Section -->
                <section>
                    <!-- Article -->
                    <article>
                        <div class="content">

                        <?php
                        include_once('./../models/Database.php');

                        # Creando la conexión
                        $connection = Database::connect();
                                    
                        # query
                        $query  = "SELECT * FROM `cursos`;";
                        $result = mysqli_query($connection, $query);

                        $rows = mysqli_num_rows($result);

                        if ($rows == 0)
                        {
                            echo '<h2 style="color: darkred;">
                            No has registrado algún curso</h2>';

                        } else
                        {
                            echo '<h4>Total de registros: '
                            . $rows
                            . '</h4>
                            <br>';

                            ?>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Tipo-Imagen</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    # Creando la conexión
                                    $connection = Database::connect();

                                    # query
                                    $query = "SELECT * FROM `cursos`;";
                                    $result = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_assoc(
                                            $result
                                        )
                                    )
                                    {
                                        # imagen
                                        echo '<tr>'
                                        . '<td>'
                                            . '<img class="imagen"'
                                            . 'src="data:image/'
                                            . $row['tipo']
                                            . ';base64,'
                                            . base64_encode($row['imagen'])
                                            . '">'
                                        . '</td>';
                                        
                                        echo '<td>'
                                            . $row['id']
                                        . '</td>';

                                        echo '<td>'
                                            . $row['nombre']
                                        . '</td>';

                                        echo '<td>'
                                            . $row['descripcion']
                                        . '</td>';

                                        echo '<td>'
                                            . $row['precio']
                                        . '</td>';

                                        echo '<td>'
                                            . $row['tipo']
                                        . '</td>';

                                        echo '<td>'
                                            . $row['status']
                                        . '</td>';
                                        
                                        # Botón de editar
                                        echo '<td>'
                                            . '<a href="./update-form.php?id='
                                            . $row['id']
                                            . '">'
                                                . '<button type="button"'
                                                . 'class="btn btn-primary d-inline">'
                                                    . 'Editar'
                                                . '</button>'
                                            . '</a>';

                                        # Botón de activar
                                        echo ''
                                            . '<a href="./../crud/activate.php?id='
                                            . $row['id']
                                            . '">'
                                                . '<button type="button"'
                                                . 'class="btn btn-success d-inline ms-4">'
                                                    . 'Activar'
                                                . '</button>'
                                            . '</a>';


                                        # Botón de inhabilitar
                                        echo ''
                                            . '<a href="./../crud/delete.php?id='
                                            . $row['id']
                                            . '">'
                                                . '<button type="button"'
                                                . 'class="btn btn-danger d-inline ms-4">'
                                                    . 'Inhabilitar'
                                                . '</button>'
                                            . '</a>'
                                        . '</td>';

                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                <?php   } ?>
                        </div>
                    </article>
                </section>
            </div>
        </main>
        <!-- Main -->
 
        <!-- Footer -->
        <footer>
            <h5>Copyright 2022 - ASK Programming</h5>
        </footer>
 
        <!-- JS Scripts -->

        <!-- Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

        <script src="#"></script>
 
    </body>
</html>
