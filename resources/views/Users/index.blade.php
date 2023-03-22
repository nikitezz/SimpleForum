<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Профиль</title>
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
                <a href="{{route('home')}}" class="text-white">На главную</a>
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
        </div>
    </header>
    <main role="main">
        <section class="jumbotron text-center">
            <img src="{{asset('Images/user.png')}}" alt="..." class="rounded-circle" style="width: 80px; height:80px; border: 1px solid darkmagenta">
            <div class="mt-3">
                <h6 class="text-black">Имя: {{auth()->user()->name}}</h6>
                <h6 class="text-black">Фамилия: {{auth()->user()->surname}}</h6>
                <h6 class="text-black">Email: {{auth()->user()->email}}</h6>
                <button type="submit" class="btn btn-sm btn-outline-secondary">Редактиваровать данные</button>
                <div class="mt-1">
                    <a href="{{route('logout')}}"  class="btn btn-sm btn-outline-secondary">Выйти с аккаунта</a>
                </div>
                <h6 class="text-black">_____</h6>
            </div>
        </section>
        <section class=" text-center">
            <div class="container">
                <a href="{{route('create')}}" class="btn btn-primary ">Опубликовать пост</a>
            </div>
        </section>
    </main>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
