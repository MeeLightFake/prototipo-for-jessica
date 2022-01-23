<?php

include_once('./../models/Database.php');

if (isset($_GET['id'])) {

    $id         = $_GET['id'];
    $connection = Database::connect();

    $query = "SELECT * FROM `cursos` WHERE `id` = $id;";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) === 1) {
        $row         = mysqli_fetch_assoc($result);
        $name        = $row['nombre'];
        $description = $row['descripcion'];
        $image       = base64_encode($row['imagen']);
        $price       = $row['precio'];
        $status      = $row['status'];
    }
} else {
    header('Location: ./view-data.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
        <link rel="shortcut icon" type="image/png" href="./assets/img/mysql-logo.png">
 
        <!-- CSS -->
        <link rel="stylesheet" href="./../../assets/css/style.css">
        <link rel="stylesheet" href="./../../assets/css/form.css">
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
                        <a href="./view-data.php">
                            Read
                        </a>
                    </li>
                    <li class="element">
                        <a href="<?php $_SERVER['PHP_SELF']; ?>"
                        class="selected">
                            Update
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
 
        <!-- Main -->
        <main role="main">
            <div class="container">
                <h1>Update course</h1>
                <!-- Section -->
                <section>
                    <!-- Article -->
                    <article>
                        <div class="content">

                            <!-- Form -->
                            <form
                            action="./../crud/update.php?id=<?php echo $_GET['id']; ?>" 
                            autocomplete="ON" method="POST"
                            enctype="multipart/form-data">

                                <!-- Nombre -->
                                <label for="name">Name</label>
                                <br>
                                <input type="text" name="name"
                                id="name" value="<?php echo $name; ?>"
                                required>

                                <br>
                                <br>

                                <!-- Description -->
                                <label for="description">Description</label>
                                <br>
                                <input type="text" name="description" 
                                id="description" value="<?php echo $description; ?>" 
                                required>

                                <br>
                                <br>

                                <!-- Price -->
                                <label for="price">Price</label>
                                <br>
                                <input type="text" name="price" id="price"
                                placeholder="Example: 9.99"
                                value="<?php echo $price; ?>" required>

                                <br>
                                <br>

                                <p>Imagen actual</p>

                                <br>
                                <img src="data:image/<?php echo $typeImage;?>
                                ;base64,<?php echo $image;?>"
                                style="height: 100px; width: 100px;">

                                <br>
                                <br>

                                <!-- Image -->
                                <label>Image</label>
                                <br>
                                <input type="file" name="image" required>

                                <br>
                                <br>

                                <!-- Status -->
                                <label for="status">Status</label>
                                <br>
                                <select name="status" required>
                                    <option value="">
                                        Choose a option
                                    </option>

                                    <?php if ($status == 1) { ?>
                                        <option value="1" selected>
                                            Active
                                        </option>

                                        <option value="0">Inactive</option>
                                    <?php } else { ?>
                                        <option value="1">
                                            Active
                                        </option>

                                        <option value="0" selected>
                                            Inactive
                                        </option>
                                    <?php } ?>
                                </select>

                                <br>
                                <br>

                                <!-- Submit button -->
                                <button type="submit" class="submit-button"
                                name="update-button">
                                    Update
                                </button>

                            </form>

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
        <script src="#"></script>
 
    </body>
</html>
