<?php
class fizzbuzz
{
    var $nilai;

    function cal()
    {
        $nilai = $this->nilai;
        for ($i = 1; $i <= $nilai; $i++) {
            if ($i % 3 == 0 & $i % 5 == 0) {
                echo "Fizz Buzz <br \>";
            } elseif ($i % 3 == 0) {
                echo "Fizz <br \>";
            } elseif ($i % 5 == 0) {
                echo "Buzz <br \>";
            } else {
                echo "$i <br \>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizz Buzz</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="nilai" id="nilai">
        <input type="submit" name="sub" value="Tampilkan">
    </form>

    <?php
    if (isset($_POST['sub'])) {
        $fizzbuzz = new fizzbuzz();
        $fizzbuzz->nilai = $_POST['nilai'];
        $fizzbuzz->cal();
    }
    ?>
</body>

</html>