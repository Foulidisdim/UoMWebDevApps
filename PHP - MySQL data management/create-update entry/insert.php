<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Δημήτρης Φουλίδης iis22026</title>
    </head>

    <body>
        <?php
            $nameErr = "";
            $name = "";

            //elegxos egkyrothtas name
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
                if (empty($nameErr)) { //MONO AN DEN YPARXEI KAPOIO ERROR!!!!!
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "test";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "INSERT INTO iis22026 (name)
                            VALUES ('$name')"; //TO ID EINAI AUTO INCREMENT. THA TO BALEI AUTOMATA. PERNAO MONO name.

                    if ($conn->query($sql) === TRUE) {
                        $last_id = $conn->insert_id; /*SOSS! PAIRNO TO ID TOY TELEYTAIOY STOIXEIOU TOU PINAKA KAI EPEIDH TO ID EINAI AUTO INCREMENT
                        OUSIASTIKA PAIRNO TO PLHTHOS TON EGGRAFON! */
                        echo "Η εγγραφή προστέθηκε επιτυχώς. Σύνολο εγγραφών στη βάση: " . $last_id;
                    } else {
                        echo "Error: Απέτυχε η εισαγωγή δεδομένων" . $sql . "<br>" . $conn->error;
                    }
                    
                    /*SOSSSSS TIP: an eixa kai delete kai eprepe na deikso poses eggrafes exei o pinakas, THA EPREPE NA DOYLEPSO ME SESSION METABLHTES.
                    Etsi an px pao sth selida gia delete kai diagrapso 2 apo tis 5 px eggrafes, tha enhmerono kai th session count metablhth 
                    gia to plhthos pou exei meinei.*/

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

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        
            Name: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span> <br>

            <input type="submit" name="Submit">
        </form>

        <a href="index.php">Index</a> <br>
        <a href="update.php">Διόρθωση</a> <br>

        <br><br><br>
        <footer>
            <p style="color: red;">Δημήτρης Φουλίδης iis22026</p>
        </footer>
    </body>
</html>