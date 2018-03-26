<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=L, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuarios</title>
</head>
<body>
    <h1><?= $title ?></h1>
    <ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo e($user) ?></li>
    <?php endforeach;  ?>
    </ul>
</body>
</html>