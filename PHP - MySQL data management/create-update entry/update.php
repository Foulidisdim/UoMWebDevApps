<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Δημήτρης Φουλίδης iis22026</title>
    </head>

    <body>
        <?php

            $nameErr = $idErr ="";
            $name = $id = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                if (empty($_POST["id"])) {
                    $idErr = "ID is required";
                } else {
                    $id = test_input($_POST["id"]);
                    // Check if ID is an integer number
                    if (!is_numeric($id) || !is_int((int) $id)) {
                        $idErr = "Invalid ID. Please enter a valid integer number.";
                    }
                }

                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed"; }
                } 
            }

            if (isset($_POST['Submit'])) {
                if (empty($idErr) && empty($nameErr)) { //MONO AN DEN YPARXEI KAPOIO ERROR!!!!!
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "test";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }


                    $sql = "UPDATE iis22026 SET name='$name' WHERE id=".$id;


                    if ($conn->query($sql) === TRUE) {
                        $affRows = $conn->affected_rows;
                        echo $affRows . " record(s) updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
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
            ID: <input type="text" name="id" value="<?php echo $id; ?>">
            <span class="error">* <?php echo $idErr; ?> </span> <br>

            Name: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr; ?> </span> <br>


            <input type="submit" name="Submit">
        </form>
        <a href="index.php">index</a> <br>
        <a href="insert.php">Καταχώριση</a> <br>
       
        <br><br><br>
        <footer>
            <p style="color: red;">Δημήτρης Φουλίδης iis22026</p>
        </footer>
    </body>
</html>