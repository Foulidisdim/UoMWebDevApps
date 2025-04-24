<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Δημήτρης Φουλίδης iis22026</title>
    </head>

    <body>
        <?php
            session_start();

            $nameErr ="";
            $name = $id = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["id"])) {
                    $id = "";
                } else {
                    $id = test_input($_POST["id"]);
                }
            }


            if (isset($_POST['Submit'])) {
                if (!empty($id)) {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "test";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    // sql to delete a record
                    $sql = "DELETE FROM iis22026 WHERE id=" . $id;

                    if ($conn->query($sql) === TRUE) {
                        $affRows = $conn->affected_rows;
                        echo $affRows . " record(s) deleted successfully";
                    } else {
                        echo "Error deleting record: " . $conn->error;
                    }

                    $conn->close();
                }
            }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <p> <span class="error">* required field </span> </p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            ID: <input type="text" name="id" > <br>

            <input type="submit" name="Submit">
        </form>
        <br><br><br>

        <a href="index.php">index</a> <br>
        <a href="insert.php">Νέα Δεδομένα</a> <br>
      

        <footer>
            <p style="color: red;">Δημήτρης Φουλίδης iis22026</p>
        </footer>
    </body>
</html>