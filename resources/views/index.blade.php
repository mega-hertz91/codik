@extends('layout.index')

@section('content')
    <section>
        <div class="search">
            <form>
                <input type="text" value="Search..." onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                <input type="submit" value="">
            </form>
        </div>
        <div class="clearfix"> </div>
        <ul class="film-list">

        </ul>
        <h2 class="recent">Новинки</h2>
        <ul class="main-carousel" id="flexiselDemo1">
            @foreach($new_film as $film)
                <li class="film-item-slide">
                    <a href="/element/{{ $film->film_id }}">
                        <img src="{{ $film->poster_url }}" class="img-responsive film-item-slide__img" alt="{{ $film->title }}" width="250" height="240">
                        <div class="grid-flex">
                            <p class="film-item-slide__link">{{ $film->title }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
@stop
