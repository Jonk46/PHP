<?php include_once "send.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name" value="<?=$_SESSION['name']?>"/>
        <span class="error">* <?=$nameError?></span><br/>

        <label for="from">Enter your email address:</label><br>
        <input type="text" id="from" name="from" value="<?=$_SESSION['from']?>"/>
        <span class="error">* <?=$fromError?></span><br/>
        
        <label for="subject">Enter the subject of your message:</label><br>
        <input type="subject" id="subject" name="subject" value="<?=$_SESSION['subject']?>"/>
        <span class="error">* <?=$subjectError?></span><br/>
        
        <label for="message">Enter your message:</label><br>
        <textarea name="message" id="message" cols="30" rows="10"><?=$_SESSION['message']?></textarea>
        <span class="error">* <?=$messageError?></span><br/>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>