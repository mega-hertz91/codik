<main>
  @foreach($content as $elem)
    <ul>
      <li>
        <h3>{{ $elem['title'] }}</h3>
        <p>{{ $elem['id'] }}</p>
        <a href="/element/{{ $elem['id'] }}">link to film</a>
      </li>
    </ul>
  @endforeach
  <script src="/js/backend.js"></script>
  <script src="/js/content.js"></script>
</main>
