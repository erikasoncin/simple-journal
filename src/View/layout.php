<html>
<head>
    <title><?= $this->e($title) ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=".../css/footer.css">
</head>
<body>

    <?= $this->insert('header') ?>

    <?= $this->section('content') ?>

    <?= $this->insert('footer') ?>

</body>
</html>


