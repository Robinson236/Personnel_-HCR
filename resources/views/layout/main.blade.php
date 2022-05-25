<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_HCR</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="background-color: red ;">
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"
                                style=" margin-right: 35px; margin-left: 50px; text-align: center;">
                                <a class="nav-link" style="color: red; font-size: 20px;width: 200px;"
                                    href="{{ url('/') }}">
                                    <button type="button" class="btn btn-outline-light"
                                        style="width: 100%; height: 40px; ">ACCUEIL</button>
                                </a>
                            <li class="nav-item"
                                style=" margin-right: 35px; margin-left: 50px; text-align: center;">
                                <a class="nav-link" style="color: red; font-size: 20px;width: 200px;"
                                    href="{{ route('gestion_personnel.create') }}">
                                    <button type="button" class="btn btn-outline-light"
                                        style="width: 100%; height: 40px; ">FORMULAIRE</button>
                                </a>
                            </li>
                            <li class="nav-item"
                                style=" height: 60px; margin-right: 35px;margin-left: 30px; text-align: center;">
                                <a class="nav-link" style="color: black; font-size: 20px; width: 200px;"
                                    href="{{ route('gestion_personnel.index') }}">
                                    <button type="button" class="btn btn-outline-light"
                                        style="width: 100%; height: 40px; ">LISTE</button>
                                </a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2 text-light" type="search" placeholder="Recherche"
                                aria-label="Search">
                            <button class="btn btn-outline-light" id="myInput" onkeyup="myFunction()"
                                type="submit">Recherche</button>
                        </form>
                    </div>
            </div>
    </nav>
  
    @yield('contenu')

</body>

</html>
