<html>
<head>
<link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
</head>
<body>

<form action="<?= $_SERVER['SCRIPT_NAME']?>" method="POST">
  <label for="word">Введіть слово</label>
  <input type="text" name="word" id="word">
  <button type="submit" name="submit" value="submit">Поліндром ?</button>
</form>

<?php
   if(isset($_POST['submit'])) {
       $word = $_POST['word'];
       $wordNew = strtolower($word);
       if ($wordNew == strrev($wordNew)) {
           echo "<br>The word '$word' is a palindrome";
       } else echo "<br>The word '$word' is not a palindrome";
   }
   ?>

</body>
</html>