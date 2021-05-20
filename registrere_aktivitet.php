<?php 
$tilkobling = mysqli_connect("localhost","root","","trening"); 
$tilkobling->set_charset("utf8");

if (isset($_POST["submit"])) {
    $sql = sprintf("INSERT INTO aktivitet(trening, dato)VALUES('%s', '%s')", 
    $tilkobling->real_escape_string($_POST["txtTrening"]),
    $tilkobling->real_escape_string($_POST["txtDato"]));
    $tilkobling->query($sql);
}
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
                <br />
                <h2>Registrer dages økt</h2>
                <br />
                <br />
                <form method="POST">
                    <label for="txtTrening">Beskriv treningen:</label>
                    <input type="text" name="txtTrening" id="txtTrening" />
                    <br />
                    <label for="txtDato">Treningsdato:</label>
                    <input type="date" value="<?php echo date("Y-m-d")?>" name="txtDato" id="txtDato" />
                    <br />
                    <button type="submit" name="submit">Registrere dagens økt</button>
                </form>
            </main>
        </div>
    </body>
</html>