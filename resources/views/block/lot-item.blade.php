<?php $date_result = new \App\Helper\UserFunction() ?>
<li class="lots__item lot">
    <div class="lot__image">
        <img src="/{{ $key->image }}" width="350" height="260" alt="{{ $key->name }}">
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
            @if ($date_result->get_date_finish($key->finish_date) == 0)
            <div class="lot__timer timer" style="background-color: crimson">
                Лот закрыт
            </div>
            @else
                <?php if($date_result->get_date_finish($key->finish_date) > 24):?>
                    <div class="lot__timer timer">
                        <?=round(($date_result->get_date_finish($key->finish_date)/24))?> дня
                    </div>
                <?php else:?>
                    <div class="lot__timer timer">
                        <?=$date_result->get_date_finish($key->finish_date)?> часов
                    </div>
                <?php endif;?>
            @endif
        </div>
    </div>
</li>
