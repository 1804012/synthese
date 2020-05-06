<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="00_DivisionDesModules/00_BoilerplateSASS/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&family=Permanent+Marker&family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <title>Accueil</title>
</head>
<body>
    @include('layers.nav')
    <header>
    <div class="reseau">
            <span>réseau sociaux:</span>
            <div class="plateforme">
                <a href="">facebook</a>
                <a href="">instagram</a>
                <a href="">twitter</a>
            </div>            
        </div>
        <img src="" alt="logo">
        <p>Nulla elit erat, porta eu tincidunt in, rhoncus volutpat enim. Nam vitae imperdiet urna. Vestibulum dolor lectus, ultrices eu est eget, efficitur ornare quam. Nunc felis nisl, tincidunt vitae rhoncus a, consectetur vitae leo. Suspendisse quis ligula at metus euismod posuere ac vel nulla. Nullam eros ante, bibendum quis facilisis eu, aliquam sed elit. Donec vel ante a purus ullamcorper dapibus. Integer vel sem enim.</p>
    </header>
    @include('layers.carousel')
    @include('layers.ouverture')
    @include('layers.promotion')
    @include('layers.commande')
    @include('layers.APropos')
    @include('layers.footer')
</body>
</html>