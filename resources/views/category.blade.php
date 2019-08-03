<main>
    @foreach($content as $elem)
        <ul>
            <li class="item">
                <h3 class="title">{{ $elem['title'] }}</h3>
                <p class="id">{{ $elem['id'] }}</p>
                <p class="year" style="color: crimson;">{{ $elem['year']}}</p>
                <a class="link" href="/element/{{ $elem['id'] }}" target="_blank">link to film</a>
                @if (isset($elem['kinopoisk_id']))
                    <img src="https://st.kp.yandex.net/images/film_iphone/iphone360_{{ $elem["kinopoisk_id"] }}.jpg" alt="{{ $elem['title'] }}">
                @else
                    <img src="https://image.freepik.com/free-icon/_318-1546.jpg" alt="{{ $elem['title'] }}">
                @endif
            </li>
        </ul>
    @endforeach
        <ul class="film-list">

        </ul>
    <div aria-label="next_page" data-link="{{ $next_page }}"></div>
        <button class="add">Загрузить еще</button>
    <script src="/js/backend.js"></script>
    <script src="/js/content.js"></script>
</main>