<html>
<head>
    <title><?= $this->e($title) ?></title>

</head>
<body>

    <?= $this->insert('templates::header') ?>

    <?= $this->section('content') ?>

    <?= $this->insert('templates::footer') ?>

</body>
</html>
