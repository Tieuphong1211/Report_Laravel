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
    <h1>Xin chào - xin chào</h1>

    <h1>Xin chào - <?php echo $english; ?></h1>

    <h1>Xin chào - <?php echo $japanies; ?></h1>


    <h1>Facebook with link: <?php echo Config::get('homeConfig.facebook.link') ?></h1>
    <h1>Facebook with link: <?php echo Config::get('homeConfig.facebook.title') ?></h1>
    <h1>Facebook with link: <?php echo Config::get('homeConfig.facebook.number') ?></h1>

    <h1>Youtube with link: <?php echo Config::get('homeConfig.youtube.link') ?></h1>
    <h1>Youtube with link: <?php echo Config::get('homeConfig.youtube.title') ?></h1>
    <h1>Youtube with link: <?php echo Config::get('homeConfig.youtube.number') ?></h1>


</body>
</html>
