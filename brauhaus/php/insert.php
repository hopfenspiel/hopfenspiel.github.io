
<html>
    <body>
        <?php
            $mysql_host     = "localhost";
            $mysql_username = "root";
            $mysql_password = "";
            $mysql_database = "brewhouse_db";

            $mysqli  = new Mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
            $prepare = $mysqli->prepare("INSERT INTO `hops_data'('variety','alpha_acid','beta_acid','oil_content','harvest','type') VALUES (?,?,?,?,?,?)");
            $prepare->bind_param("ssssss", $_POST['variety'], $_POST['alpha_acid'], $_POST['beta_acid'], $_POST['oil_content'], $_POST['harvest_date'], $_POST['type']);
            $prepare->execute();
            $mysqli->close();
        ?>
    </body>
</html>
