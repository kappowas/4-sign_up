<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./img/favico.png" type="image/x-icon">
</head>
<body>

       <?php
         $posttags = get_the_tags();
            if ($posttags) {
                foreach($posttags as $tag) {
                    echo $tag->name . ' '; 
                }
            }
        ?>
        <p>or</p><a class="signIn" href="#">Sign in</a>
        






</body>
</html>