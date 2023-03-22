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
        </div>
    </header>
    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Отзывы</h1>
                <p class="lead text-muted">Что-то короткое и важное о коллекции ниже — ее содержании, создатели и т. д. Сделайте это кратким и приятным, но не слишком коротким, чтобы люди просто не пропустили его полностью.</p>
                <a href="{{route('home')}}" class="btn btn-secondary my-2">Вернуться на главную</a>
                <a href="{{route('reviews')}}"  class="btn btn-sm btn-outline-secondary">Оставить отзыв</a>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="row">
                        @foreach($review as $reviews)
                            <div class="col-md-6">
                                <div class="card mb-5 box-shadow">
                                    <br>
                                    <div class="card-body">
                                        <p class="card-text">{{$reviews->reviews}}</p>
                                        <hr>
                                        <p class="card-text">Оставил отзыв: {{$reviews->name}}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">{{$reviews->created_at}}</small>
                                        </div>
                                        <br>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="alert('Вы оценили отзыв!')">Нравится</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h1 class="jumbotron-heading">Для просмотра отзывов, нужно зарегистрироваться!</h1>
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
