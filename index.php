<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <link rel="shortcut icon" type="image/png" href="./assets/img/logo.png">
 
        <!-- CSS -->
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
 
 
    <body>

        <!-- Header -->
        <header>
            <nav>
                <!-- Logo -->
                <a href="<?php $_SERVER['PHP_SELF']; ?>" class="ref-logo">
                    <img src="./assets/img/logo.png" class="logo" alt="Logo">
                </a>
                <!-- List of elements -->
                <ul>
                    <li class="element">
                        <a href="<?php $_SERVER['PHP_SELF']; ?>"
                        class="selected">
                            Home
                        </a>
                    </li>
                    <li class="element">
                        <a href="./app/views/create-form.php">
                            Create
                        </a>
                    </li>
                    <li class="element">
                        <a href="./app/views/view-data.php">
                            Read
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
 
        <!-- Main -->
        <main role="main">
            <div class="container">
                <h1>Prototype</h1>
                <!-- Section -->
                <section>
                    <!-- Article -->
                    <article>
                        <!-- <img src="./assets/images/magic-forest.png" alt="" class="magic-forest"> -->
                        <p class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sint<br>
                            provident corporis sapiente quas ut? Omnis nemo distinctio quidem inventore<br>
                            possimus asperiores aliquam temporibus, assumenda similique eum impedit<br>
                            necessitatibus itaque!
                        </p>
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
