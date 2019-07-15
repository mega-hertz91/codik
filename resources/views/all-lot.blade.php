<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link href="css/normalize.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="page-wrapper">
    @include ('block.header')
    <main>
        <nav class="nav">
            <ul class="nav__list container">
                @foreach ($cats as $key)
                    <li class="nav__item">
                        <a href="/categories/{{ $key->id }}">{{ $key->name }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="container">
            <section class="lots">
                <h2>Все лоты</h2>
                <ul class="lots__list">
                    @foreach($lots as $key)
                        @include('block.lot-item')
                    @endforeach
                </ul>
            </section>
            <ul class="pagination-list">
                <li class="pagination-item pagination-item-prev"><a>Назад</a></li>
                <li class="pagination-item pagination-item-active"><a>1</a></li>
                <li class="pagination-item"><a href="#">2</a></li>
                <li class="pagination-item"><a href="#">3</a></li>
                <li class="pagination-item"><a href="#">4</a></li>
                <li class="pagination-item pagination-item-next"><a href="#">Вперед</a></li>
            </ul>
        </div>
    </main>

</div>

@include('block.footer', ['cats' => $cats])

</body>
</html>
