<!doctype html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>grillkylling.nu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <style>
         <?php // @see https://codepen.io/P1N2O/pen/pyBNzX ?>
         body {
             background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
             background-size: 400% 400%;
             animation: gradient 15s ease infinite;
             height: 100vh;
         }

         @keyframes gradient {
             0% {
                 background-position: 0% 50%;
             }
             50% {
                 background-position: 100% 50%;
             }
             100% {
                 background-position: 0% 50%;
             }
         }
        </style>
    </head>
    <body>
        <main class="px-4 py-5 my-5 text-center">
            <h1 class="display-1 fw-light text-white">grillkylling.nu</h1>
        </main>
    </body>
</html>
