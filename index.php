<!-- I will be posting my code-along from a from an online tutorial on 'php' to keep my fingers moist 😉, thanks. let's go!! -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>php -zero</title>
    <style>
        body {
            place-items: center;
            display: grid;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $food = "Jollof Rice and Plantain";
    $hungry = true;

    if($hungry){
        $order = "I want to eat $food";
    }else{
        $order = "I am not hungry";
    }



    ?>

    <h1>
        <?= $order ?>
        
    </h1>
</body>

</html>