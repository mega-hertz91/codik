<main>
  @foreach($content as $elem)
    <ul>
      <li>
        <h3>{{ $elem['title'] }}</h3>
        <p>{{ $elem['id'] }}</p>
        <a href="/element/{{ $elem['id'] }}">link to film</a>
          <img src="https://st.kp.yandex.net/images/film_iphone/iphone360_{{ $elem["kinopoisk_id"] }}.jpg">
      </li>
    </ul>
  @endforeach
  <script src="/js/backend.js"></script>
  <script src="/js/content.js"></script>
</main>
