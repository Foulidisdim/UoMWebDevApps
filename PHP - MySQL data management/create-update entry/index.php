<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Δημήτρης Φουλίδης iis22026</title>
    </head>

    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $tableName ="iis22026";

            $sql = "CREATE TABLE $tableName (
                id INT AUTO_INCREMENT PRIMARY KEY, /*KALO NA BALO TO AUTO INCREMENT GIA ID! */
                name VARCHAR(35) NOT NULL /*profanos na prosekso to eidos ths metablhths analoga ti thelei. */
                )";

            if ($conn->query($sql) === TRUE) {
                echo "Ο πίνακας δημιουργήθηκε με επιτυχία." . "<br>";
            } else echo "Error: ΔΕΝ δημιουργήθηκε πίνακας " . $sql . "<br>" . $conn->error . "<br>";

            $conn->close();
        ?>

        <a href="insert.php">Καταχώρηση</a> <br>
        <a href="update.php">Διόρθωση</a> <br>
       
        <footer>
            <p style="color: red;">Δημήτρης Φουλίδης iis22026</p>
        </footer>
    </body>

</footer>
</html>