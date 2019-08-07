'use strict';

const template = document.querySelector('#film-item');
const item = template.content.querySelector('.film__item');
const itemSlide = template.content.querySelector('.film-item-slide');

const renderItem = (content) => {
    const elem = item.cloneNode(true);

    elem.querySelector('.film__title').textContent = content.title;
    elem.querySelector('.film__id').textContent = content.id;
    elem.querySelector('.film__year').textContent = content.year;
    elem.querySelector('.film__link').setAttribute('href',`/element/${content.id}`);
    elem.querySelector('.film__img').setAttribute('src',
        `https://st.kp.yandex.net/images/film/${content.img}.jpg`);

    return elem;
};

const renderItemSlide = (content) => {
    const elem = itemSlide.cloneNode(true);

    elem.querySelector('.film-item-slide__link').setAttribute('href',`/element/${content.id}`);
    elem.querySelector('.film-item-slide__link').textContent = content.title;
    elem.querySelector('.film-item-slide__img').setAttribute('src',
        `https://st.kp.yandex.net/images/film_iphone/iphone360_${content.img}.jpg`);

    return elem;
};

export {renderItem};
export {renderItemSlide};