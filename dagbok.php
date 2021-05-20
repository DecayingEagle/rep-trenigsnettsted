<?php 
$tilkobling = mysqli_connect("localhost","root","","trening"); 
$tilkobling->set_charset("utf8");
$sql = "SELECT * FROM aktivitet;";
$datasett = $tilkobling->query($sql);
?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Trening med mening</title>
        <link rel="stylesheet" type="text/css" href="treningsstil.css" />
    </head>

    <body>
        <div id="wrapper">
            <nav>
                <ul>
                    <li><a href="index.html">Om meg</a></li>
                    <li><a href="stryke.html">Styrke</a></li>
                    <li><a href="utholdenhet.html">Utholdenhet</a></li>
                    <li><a href="kosthold.html">Kosthold</a></li>
                    <li><a href="dagbok.php">Dagbok</a></li>
                    <li><a href="registrere_aktivitet.php">Registrere Aktivitet</a></li>
                </ul>
            </nav>
            <header>
                <h1>Trening for alle</h1>
            </header>
            <main>
                <table>
                    <tr>
                        <th>Aktivitetstid</th>
                        <th>Trening</th>
                        <th>Dato</th>
                    </tr>
                    <?php while($rad = mysqli_fetch_array($datasett)) {
                        echo "<tr>";
                            echo "<th>".$rad["aktivitetsid"]."</th>";
                            echo "<th>".$rad["trening"]."</th>";
                            echo "<th>".$rad["dato"]."</th>";
                        echo "<tr>";
                    }
                    ?> 
                </table>
            </main>
        </div>
    </body>
</html>