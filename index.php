<!-- I will be posting my code-along from a from an online tutorial on 'php' to keep my fingers moist 😉, thanks. let's go!! -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>php -zero</title>
    <style>
        /* body {
            place-items: center;
            display: grid;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        } */
    </style>
</head>

<body>
    <h1>
        Her Cars Collection
    </h1>
    <?php
    $cars = [
        'Honda',
        'Elantra ',
        'Rolls-Royce',
        'Mustang',
        'Escalade',
        'Sienna ',
    ];

    ?>
    <ul>
        <?php foreach ($cars as $car) : ?>
            <li><?= "{$car}™" ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>