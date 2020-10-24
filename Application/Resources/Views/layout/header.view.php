<html>
<head>
    <title><?= $application->getApplicationName() ?></title>
    <link href="<?= $application->getFontUrl() ?>" rel="stylesheet">
    <link href="<?= $application->getStyleUrl() ?>" rel="stylesheet">
    <link href="/css/bulma-dark.min.css" rel="stylesheet">
    <style>
        body {
            font-family: '<?= $application->getFontName() ?>', cursive;
        }
    </style>
</head>
<body>
<section class="hero is-medium is-dark is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                <?= $application->getApplicationName() ?>
            </h1>
            <h2 class="subtitle">
                ADP - HAN
            </h2>
        </div>
    </div>
</section>