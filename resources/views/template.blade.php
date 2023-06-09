<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    @vite('resources/css/app.css')
    <title><?php echo $pageName . " | Monster drink" ?></title>
</head>
<body class="bg-gray-100">
    @yield('content')
</body>
</html>