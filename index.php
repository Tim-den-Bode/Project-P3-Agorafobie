<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agoraphobia Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <div id="bg-container">
        <img src="img/ditism.jpg" alt="">
        <img src="img/schoolp123.jpg" alt="">
        <img src="img/martjiachte1.jpg" alt="">
    </div>
    <header>
        <h1>Home</h1>
    </header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Symptomen.php">Information</a></li>
                <li><a href="user.php">user page</a></li>
            </ul>
        </nav>
        <div class="hometext">
            <h2>Welcome to the Agoraphobia Homepage</h2>
            <p>Agoraphobia is a specific phobia, which is an intense and irrational fear, related to open spaces, public
                places, or situations where escape might be difficult or help unavailable. People with agoraphobia may
                experience panic attacks or severe anxiety in these environments, leading them to avoid them altogether.
                It's important to understand that this fear is exaggerated and not based on a real threat.</p>
            <button onclick="takeTest()" id="button">Take the Test</button>
            <P><strong>Warning: </strong>Always speak with a real doctor before taking any action.</P>
            <footer>
                <p>&copy; 2023 PhobiaHelp</p>
            </footer>
        </div>
    </div>
    <script src="JS/index.js"></script>
    <script type="module" src="JS/bg-fade.js"></script>
</body>

</html>