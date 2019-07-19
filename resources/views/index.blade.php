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
   @include('block.header')
    <main class="container">
        <section class="promo">
            <h2 class="promo__title">Нужен стафф для катки?</h2>
            <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
            <ul class="promo__list">
                @foreach ($cats as $key)
                <li class="promo__item {{ $key->class }}">
                    <a class="promo__link" href="categories/{{ $key->id }}">{{ $key->name }}</a>
                </li>
                @endforeach
            </ul>
        </section>
        <section class="lots">
            <div class="lots__header">
                @if (count($lots) > 0)
                    <h2>Открытые лоты</h2>
                @else
                    <h2>Открытых лотов пока нет <br>
                    {{ count($lots) }}
                    </h2>
                @endif
            </div>
            <ul class="lots__list">
                @foreach($lots as $key)
                    @include('block.lot-item', ['key' => $key])
                @endforeach
            </ul>
        </section>
    </main>
</div>

@include('block.footer', ['cats' => $cats])

</body>
</html>
