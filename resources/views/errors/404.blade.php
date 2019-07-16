<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $status_code }}</title>
    <link href="../css/normalize.min.css" rel="stylesheet">
    <!--<link href="../css/style.css" rel="stylesheet">-->
</head>
<body>

<div class="page-wrapper">

    @include('block.header')

    <main>
        <ul class="nav__list container">
            @foreach ($cats as $key)
                <li class="nav__item">
                    <a href="/categories/{{ $key->id }}">{{ $key->name }}</a>
                </li>
            @endforeach
        </ul>
        <section class="lot-item container">
            <h2>{{ $status_code }} Страница не найдена</h2>
            <p>Данной страницы не существует на сайте.</p>
        </section>
    </main>

</div>

@include('block.footer', ['cats' => $cats])

</body>
</html>
