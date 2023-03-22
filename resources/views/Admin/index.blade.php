<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ зона</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

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
                    <strong>ForumCode «Админка»</strong>
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
                <h1 class="jumbotron-heading">Страница для администратора</h1>
                <p class="lead text-muted">Что-то короткое и важное о коллекции ниже — ее содержании, создатели и т. д. Сделайте это кратким и приятным, но не слишком коротким, чтобы люди просто не пропустили его полностью.</p>
                <a href="{{route('home')}}" class="btn btn-primary my-2">На главную</a>
                </p>
            </div>
        </section>
        <div class="container">
{{--            Таблица: пользователи--}}
            <div class="table-users">
                <h3 class="jumbotron-heading">Пользователи</h3>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Почта</th>
                        <th scope="col">Пароль</th>
                        <th scope="col">Админка</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    @foreach($user as $users)
                        <tbody>
                        <tr>
                            <th scope="row">{{$users->id}}</th>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->password}}</td>
                            <td>{{$users->is_admin}}</td>
                            <td><img src="{{asset('Images/delete.png')}}" width="20px" height="20px" style="cursor: pointer"></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
{{--            Таблица: посты--}}
            <div class="table-posts">
                <h3 class="jumbotron-heading">Посты</h3>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Дата создания</th>
                        <th scope="col">Автор</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    @foreach($post as $posts)
                        <tbody>
                        <tr>
                            <th scope="row">{{$posts->id}}</th>
                            <td>{{$posts->title}}</td>
                            <td>{{$posts->content}}</td>
                            <td>{{$posts->created_at}}</td>
                            <td>{{$posts->avtor}}</td>
                            <td><img src="{{asset('Images/delete.png')}}" width="20px" height="20px" style="cursor: pointer"></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
{{--Таблица: отзывы--}}
            <div class="table-reviews">
                <h3 class="jumbotron-heading">Отзывы</h3>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Почта</th>
                        <th scope="col">Имя(кто оставил отзыв)</th>
                        <th scope="col">Отзыв</th>
                        <th scope="col">Дата опубликования</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    @foreach($review as $reviews)
                        <tbody>
                        <tr>
                            <th scope="row">{{$reviews->id}}</th>
                            <td>{{$reviews->email}}</td>
                            <td>{{$reviews->name}}</td>
                            <td>{{$reviews->reviews}}</td>
                            <td>{{$reviews->created_at}}</td>
                            <td><img src="{{asset('Images/delete.png')}}" width="20px" height="20px" style="cursor: pointer"></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
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
