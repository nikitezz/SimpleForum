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
        .border-green{
            border: 1px solid greenyellow;
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
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li><a href="{{route('mail')}}" class="text-white">Оставьте свой отзыв</a></li>
                        @endif
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
                <strong>&lt;/&gt;ForumCode</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="mt-1">
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{route('profile')}}"><img src="{{asset('Images/users.png')}}" style="width:40px; height: 35px;cursor: pointer"></a>
                <h6 class="text-white">{{auth()->user()->name}}</h6>
            @else
                <img src="{{asset('Images/users.png')}}" style="width: 35px; height: 35px;cursor: pointer">
                <h6 class="text-white">Гость</h6>
            @endif
        </div>
    </div>
</header>
    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">ForumCode</h1>
                <p class="lead text-muted">Что-то короткое и важное о коллекции ниже — ее содержании, создатели и т. д. Сделайте это кратким и приятным, но не слишком коротким, чтобы люди просто не пропустили его полностью.</p>
                <a href="#" class="btn btn-primary my-2 ">Инструкция</a>
                <a href="{{route('reviews')}}" class="btn btn-secondary my-2">Отзывы</a>
                </p>
            </div>
        </section>
        <div class="album py-2 bg-light">
            <div class="container">
                <h4 class="jumbotron-heading">Новости</h4>
                @foreach($post as $posts)
                    <div class="card mt-4">
                       <h6 class="card-header">ForumCode</h6>
                            <div class="card-body">
                                <h5 class="card-title">{{$posts->title}}</h5>
                                <p class="card-text">{{$posts->content}}</p>
                                <p class="card-text">Автор: {{$posts->avtor}}</p>
                                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="alert('Вы оценили отзыв!')">Нравится</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="alert('Комментарии пока оставить нельзя!')">Комментарии</button>
                                <br>
                                <small class="text-muted">{{$posts->getPostDate()}}</small>
                            </div>
                    </div>
                @endforeach
                <div class="col-md-12 mt-4">
                    {{$post->links()}}
                </div>
            </div>
        </div>

    </main>
    <footer class="text-muted mt-5">
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
