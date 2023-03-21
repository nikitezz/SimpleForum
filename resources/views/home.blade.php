<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .block-post{
            border: 1px solid gray;
            padding: 5px;
        }
        a{
            text-decoration: none;
        }
        .card{
            border: 1px solid gray;
        }
    </style>
</head>
<body>
<div class="wrapper">
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">О нас</h4>
                    <p class="text-muted">Добавьте информацию об альбоме ниже, авторе или любом другом фоновом контексте. Сократите его до нескольких предложений, чтобы люди могли уловить какую-нибудь информативную информацию. Затем свяжите их с некоторыми сайтами социальных сетей или контактной информацией.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Контакты</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Следите за новостями на GitHub</a></li>
                        <li><a href="https://instagram.com/nikitezzz?igshid=YmMyMTA2M2Y=" class="text-white">Мы в Instagram</a></li>
                        <li><a href="" class="text-white">Напишите нам</a></li>
                        <li><a href="{{route('mail')}}" class="text-white">Оставьте свой отзыв</a></li>
                        <hr style="background-color: white;">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li><a href="{{route('logout')}}" class="text-white">Выйти с аккаунта</a></li>
                            <li><a href="{{route('profile')}}" class="text-white">Профиль</a></li>
                        @else
                            <li><a href="{{route('register.create')}}" class="text-white">Регистрация</a>
                            <li><a href="{{route('login')}}" class="text-white">Авторизация</a></li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::check() && auth()->user()->is_admin == 1)
                            <li>
                                <a href="{{route('admin')}}" class="text-white">Админ панель</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>ForumCode</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="mt-2">
            @if(\Illuminate\Support\Facades\Auth::check())

                <a href="{{route('profile')}}"><p style="color: white;" >{{auth()->user()->name}}</p></a>
            @else
                <p style="color: white;">Гость</p>
            @endif
        </div>
    </div>
</header>
    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">ForumCode</h1>
                <p class="lead text-muted">Что-то короткое и важное о коллекции ниже — ее содержании, создатели и т. д. Сделайте это кратким и приятным, но не слишком коротким, чтобы люди просто не пропустили его полностью.</p>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{route('create')}}" class="btn btn-primary my-2">Поделиться постом</a>
                @endif
                    <a href="{{route('reviews')}}" class="btn btn-secondary my-2">Отзывы</a>
                </p>
            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container">
                @if(\Illuminate\Support\Facades\Auth::check())
                    @foreach($post as $posts)
                        <div class="card mt-4">
                            <h6 class="card-header">ForumCode</h6>
                            <div class="card-body">
                                <h5 class="card-title">{{$posts->title}}</h5>
                                <p class="card-text">{{$posts->content}}</p>
                                <p class="card-text">Автор: {{$posts->avtor}}</p>
                                <a href="#" class="btn btn-primary" onclick="alert('Благодарим, что оценили!')">Нравится</a><br>
                                <small class="text-muted">{{$posts->getPostDate()}}</small>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="jumbotron-heading">Для просмотра постов, нужно зарегистрироваться!</h3>
                @endif
            </div>
        </div>

    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Вверх</a>
            </p>
            <p>ForumCode © 2023. Все права защищены. </p>
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
