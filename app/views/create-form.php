<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create</title>
        <link rel="shortcut icon" type="image/png" href="./../../assets/img/logo.png">
 
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
                        <a href="<?php $_SERVER['PHP_SELF']; ?>"
                        class="selected">
                            Create
                        </a>
                    </li>
                    <li class="element">
                        <a href="./view-data.php">
                            Read
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
 
        <!-- Main -->
        <main role="main">
            <div class="container">
                <h1>Create a new course</h1>
                <!-- Section -->
                <section>
                    <!-- Article -->
                    <article>
                        <div class="content">

                            <!-- Form -->
                            <form action="./../crud/create.php" 
                            autocomplete="ON" method="POST"
                            enctype="multipart/form-data">

                                <!-- Nombre -->
                                <label for="name">Name</label>
                                <br>
                                <input type="text" name="name"
                                id="name" required>

                                <br>
                                <br>

                                <!-- Description -->
                                <label for="description">Description</label>
                                <br>
                                <input type="text" name="description" 
                                id="description" required>

                                <br>
                                <br>

                                <!-- Price -->
                                <label for="price">Price</label>
                                <br>
                                <input type="text" name="price" id="price"
                                placeholder="Example: 9.99" required>

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
                                    <option value="" selected>
                                        Choose a option
                                    </option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>

                                <br>
                                <br>

                                <!-- Submit button -->
                                <button type="submit" class="submit-button"
                                name="create-button">
                                    Create
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
