<?php
    $conn = new mysqli("localhost", "root", "", "terminarz");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl6.css">
    <title>Zadania na lipiec</title>
</head>
<body>
    <header id="lewy-baner">
        <img src="logo1.png" alt="lipiec">
    </header>
    
    <header id="prawy-baner">
        <h1>TERMINARZ</h1>
        <?php
            $sql = "SELECT DISTINCT wpis FROM zadania WHERE dataZadania >= '2020-07-01' AND dataZadania <= '2020-07-07' AND wpis <> '';";

            $result = $conn -> query($sql);

            echo "<p>najbliższe zadania: ";

            while($row = $result -> fetch_array()) {
                echo "$row[0]; ";
            }

            echo "</p>";
        ?>
    </header>

    <main id="glowny">
        <?php
            $sql = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";

            $result = $conn -> query($sql);

            while($row = $result -> fetch_array()) {
                echo "<div>";
                    echo "<h6>$row[0]</h6>";
                    echo "<p>$row[1]</p>";
                echo "</div>";
            }
        ?>
    </main>

    <footer id="stopka">
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: <a href="https://github.com/ferl19" target="_blank">ferl</a></p>
    </footer>
</body>
</html>

<?php
    $conn -> close();
?>