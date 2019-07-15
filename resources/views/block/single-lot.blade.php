<div class="lot-item__left">
    <div class="lot-item__image">
        <img src="/{{ $lot->image }}" width="730" height="548" alt="{{ $lot->name }}">
    </div>
    <p class="lot-item__category">Категория: <span>{{ $lot->cat_name }}</span></p>
    <p class="lot-item__description">{{ $lot->description }}</p>
</div>
