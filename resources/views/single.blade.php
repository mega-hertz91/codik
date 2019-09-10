@extends('layout.index-page')

@section('content')
    <div class="content">
        <div class="movie_top">
            <div class="col-md-9 movie_box">
                <div class="grid images_3_of_2">
                    <div class="movie_image">

                        @if (isset($element->kinopoisk_rating))
                            <span class="movie_rating">
                                {{ $element->kinopoisk_rating }}
                            </span>
                        @endif
                            <img src="{{ $element->poster_url }}" class="img-responsive" alt="{{ $element->title }}"/>
                    </div>
                </div>
                <div class="desc1 span_3_of_2">
                    <p class="movie_option"><strong>Название: </strong>{{ $element->title }}</p>
                    <p class="movie_option"><strong>Страна: </strong>
                        {{ $element->countries }}
                    </p>
                    <p class="movie_option"><strong>Год: </strong>{{ $element->year}}</p>
                    <p class="movie_option"><strong>Категория: </strong><a href="#">Adventure</a>, <a href="#">Fantazy</a></p>
                    <p class="movie_option"><strong>Дата релиза: </strong>December 12, 2014</p>
                    <p class="movie_option"><strong>Режиссер: </strong>

                    <p class="movie_option"><strong>Актеры: </strong>
                        {{ $element->actors }}
                    </p>
                </div>
                <div class="clearfix"> </div>
                <p class="m_4">   {{ $element->description }}</p>
                <div class="col-12">
                    <iframe id="kodik-player" src="{{ $element->link }}" width="100%" height="370" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-3">
                <div class="movie_img"><div class="grid_2">
                        <img src="/images/pic6.jpg" class="img-responsive" alt="">
                        <div class="caption1">
                            <ul class="list_5 list_7">
                                <li><i class="icon5"> </i><p>3,548</p></li>
                            </ul>
                            <i class="icon4 icon6 icon7"> </i>
                            <p class="m_3">Guardians of the Galaxy</p>
                        </div>
                    </div>
                </div>
                <div class="grid_2 col_1">
                    <img src="/images/pic2.jpg" class="img-responsive" alt="">
                    <div class="caption1">
                        <ul class="list_3 list_7">
                            <li><i class="icon5"> </i><p>3,548</p></li>
                        </ul>
                        <i class="icon4 icon7"> </i>
                        <p class="m_3">Guardians of the Galaxy</p>
                    </div>
                </div>
                <div class="grid_2 col_1">
                    <img src="/images/pic9.jpg" class="img-responsive" alt="">
                    <div class="caption1">
                        <ul class="list_3 list_7">
                            <li><i class="icon5"> </i><p>3,548</p></li>
                        </ul>
                        <i class="icon4 icon7"> </i>
                        <p class="m_3">Guardians of the Galaxy</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@stop
