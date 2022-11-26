<!DOCTYPE html>
<html>
<head>
    <title>Buchsammlung</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Buchsammlung</h1>
    <br>

    <table class="Table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Autor</th>
            <th>Rezension</th>
            <th>Bewertung</th>
            <th>Gattung</th>
            <th>Status</th>
            <th>Aktionen</th>
        </tr>

        <tbody>
            <div class="container">
            <button><a href="form.html">Buch hinzufügen</button>
            </div>

            <?php
            $host = "db";
            $dbname = "PHPBuch";
            $username = "root";
            $password = "rootpassword";


            $connection = new mysqli(
                    hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
            $sql ="SELECT * FROM buchtabelle";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }
            while($row = $result->fetch_assoc()){
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["autor"] . "</td>
                    <td>" . $row["rezension"] . "</td>
                    <td>" . $row["starrating"] . "</td>
                    <td>" . $row["gattung"] . "</td>
                    <td>" . $row["status"] . "</td>
                    <td>
                        <a href='update.php'>Bearbeiten</a>
                        <a href='delete.php'>Löschen</a>
                    </td>


                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>