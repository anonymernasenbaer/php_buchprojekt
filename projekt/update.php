<?php 
include "database.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buch</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>

    <h1>Buch bearbeiten</h1>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM 'buchtabelle' WHERE id= $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row =mysqli_fetch_assoc($result);
    ?>
    <form method="post">
        <input type="hidden" value="<?php echo $row ['id']?>">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $row ['name']?>">


        <label for="autor">Autor</label>
        <input type="text" id="autor" name="autor" value="<?php echo $row ['autor']?>">
        
        <label for="rezension">Rezension</label>
        <textarea id="rezension" name="rezension" value="<?php echo $row ['rezension']?>"></textarea>

        <label for="starrating">Sterne</label>
        <select id="starrating" name="starrating" >
            <option value="0" selected <?php echo ($row['starrating']=='0')? "checked":""; ?>>Nicht bewertet</option>
            <option value="1"  <?php echo ($row['starrating']=='1')? "checked":""; ?>>1</option>
            <option value="2"  <?php echo ($row['starrating']=='2')? "checked":""; ?>>2</option>
            <option value="3"  <?php echo ($row['starrating']=='3')? "checked":""; ?>>3</option>
            <option value="4"  <?php echo ($row['starrating']=='4')? "checked":""; ?>>4</option>
            <option value="5"  <?php echo ($row['starrating']=='5')? "checked":""; ?>>5</option>
        </select>

        <fieldset>
            <legend>Gattung</legend>

            <label>
                <input type="radio" name="gattung" value="1" checked value="<?php echo $row ['gattung']?>">>
                Roman
            </label>

            <br>

            <label>
                <input type="radio" name="gattung" value="2" >
                Sachbuch
            </label>

            <br>

            <label>
                <input type="radio" name="gattung" value="3">
                Fachbuch
            </label>

            <br>

            <label>
                <input type="radio" name="gattung" value="4">
                Biografie
            </label>

        </fieldset>

        <br>

        <fieldset>
            <legend>Status</legend>

            <label>
                <input type="radio" name="status" value="1" checked>
                Gelesen
            </label>

            <br>

            <label>
                <input type="radio" name="status" value="2">
                Want-To-Read
            </label>

        </fieldset>

        

        <br>

        <button>Speichern</button>

    </form>

</body>
</html>