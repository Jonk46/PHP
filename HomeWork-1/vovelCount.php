<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="string">Put on the lowercase string</label>
        <input id="string" type="text" name="string"/>
        <input type="submit" name="submit" value="Count vowels"/>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $string = $_POST['string'];
        $vowels = array('a','e','i','o','u');
        $count = 0;
        foreach (str_split($string) as $letter) {
            if (in_array($letter, $vowels)) {
                $count++;
            }
        }
        if ($count==0) {
            echo "<br>In the string '$string' there are not vowels.";
        } else echo "<br>In the string '$string' there are $count vowels.";
    }
    ?>
</body>
</html>