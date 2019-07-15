<li class="lots__item lot">
    <div class="lot__image">
        <img src="{{ $key->image }}" width="350" height="260" alt="{{ $key->name }}">
    </div>
    <div class="lot__info">
        <span class="lot__category">{{ $key->cat_name }}</span>
        <h3 class="lot__title">
            <a class="text-link" href="/lot/{{ $key->id }}">{{ $key->name }}</a></h3>
        <div class="lot__state">
            <div class="lot__rate">
                <span class="lot__amount">Стартовая цена</span>
                <span class="lot__cost">{{ $key->start_price }}<b class="rub">р</b></span>
            </div>
            <div class="lot__timer timer">
                {{ $key->start_date }}
            </div>
        </div>
    </div>
</li>
