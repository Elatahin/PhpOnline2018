<!DOCTYPE html>

<html>
    <head>
        <title>Zadatak 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div> 
            <form method="POST" action="#"> <!-- An action of # indicates that the form stays on the same page-->
                <?php
                if (isset($_REQUEST)) {
                    echo 'Unesite broj: ';
                    ?>
                    <input type="number" name="broj" value="<?php echo $_POST['broj']; ?>">   

                <?php } ?>
                <input type="submit" value="Send"><br>

            <?php
            if (isset($_POST['broj'])) {
                for ($i = 0; $i < $_POST['broj']; $i++) {
                    ?>
                        <label for="ime">Ime</label><br>
                        <input type="text" name="ime[]" required><br>

                        <?php
                    }
                    echo '<input type="submit" name="next"><br>';
                }
                ?>
            

        </form>

    </div>
</body>
</html>

<?php
if (isset($_POST['next'])) {
    for ($i = 0; $i < count($_POST['ime']); $i++) {
        echo '<br>Ime: ' . $_POST['ime'][$i].'<br>';
    }
}
?>   