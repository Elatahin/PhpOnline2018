<?php
include_once './dbconn_proc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>4. zadatak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query = "SELECT imeStud, prezStud FROM stud WHERE pbrRod=10000 ORDER BY prezStud ASC";

            $result = mysqli_query($link, $query);

            echo 'Studenti koji su rođeni u Zagrebu: <br><br>';
            while ($row = mysqli_fetch_row($result)) {
                echo $row[0] . " " . $row[1] . "<br>";
            }
            ?>
        </div>
    </body>
</html>
<?php mysqli_close($link); ?>