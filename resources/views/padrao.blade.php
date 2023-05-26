<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/sicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plyr.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cinema Adm</title>
</head>
<body>

     <!-- Header Section Begin -->
     <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="img/logo-cinemark.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">Filme <span
                                            class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                    <li><a class="dropdown-item" href="{{url('/cadastro-filme')}}">Cadastrar</a></li>
                                    <li><a class="dropdown-item" href="{{'/gerenciar-filme'}}">Gerenciar</a></li>
                                    </ul>
                                </li>
                                <li><a href="./categories.html">Funcionario <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                    <li><a class="dropdown-item" href="{{url('/cadastro-funcionario')}}">Cadastrar</a></li>
                                    <li><a class="dropdown-item" href="{{'/gerenciar-funcionario'}}">Gerenciar</a></li>
                                    </ul>
                                </li>
                                <li><a href="./categories.html">Poltrona<span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                    <li><a class="dropdown-item" href="{{url('/cadastro-poltrona')}}">Cadastrar</a></li>
                                    <li><a class="dropdown-item" href="{{'/gerenciar-poltrona'}}">Gerenciar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Fidelidade</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->



</div>

    </header>
    @yield('content')

    
    <footer>
   

</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>   
    <script src="{{asset('js/script.js') }}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/player.js') }}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{asset('js/mixitup.min.js') }}"></script>
    <script src="{{asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{asset('js/owl.carousel.min.js') }}"></script>

</body>
</html>