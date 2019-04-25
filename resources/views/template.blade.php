{{-- <!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    @yield('contenu')
</body>
</html> --}}

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Mon joli site</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <style>
            textarea { resize: none; }
            .card { width: 25em; }
        </style>
    </head>
    <body>
        @yield('contenu')
    </body>
</html>