<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi">
    <meta name="author" content="Rahma Azizah Lubis">
    <meta name="keyword" content="sistem, informasi, musik, artis">
    <title>Ujian Tenah Semester</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
        <header>
            <h2>WEB ALBUM</h2>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="index.php" class="active">Home</a>
                </li>
                <li>
                    <a href="index.php?page=login_form">Login</a>
                </li>
                
            
            </ul>
        </nav>
        <section>
            <?php
                if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                } else {
                    include "main_index.php";
                }
            ?>
        </section>
        
        <footer>
            Rahma AL &copy;2021
        </footer>
    </main>
</body>
</html>