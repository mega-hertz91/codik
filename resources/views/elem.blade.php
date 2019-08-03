<main>
    <h3>{{ $elem['title'] }}</h3>
    <p>{{ $elem['id'] }}</p>
    <p style="color: crimson;">{{ $elem['year']}}</p>
    <a href="/element/{{ $elem['id'] }}">link to film</a>
    @if (isset($elem['kinopoisk_id']))
        <img src="https://st.kp.yandex.net/images/film_iphone/iphone360_{{ $elem["kinopoisk_id"] }}.jpg"
             alt="{{ $elem['title'] }}">
    @else
        <img src="https://image.freepik.com/free-icon/_318-1546.jpg" alt="{{ $elem['title'] }}">
    @endif
    <iframe id="kodik-player" src="{{ $elem['link'] }}" width="450" height="320" frameborder="0" allowfullscreen></iframe>
    <script src="/js/backend.js"></script>
    <script src="/js/content.js"></script>
</main>