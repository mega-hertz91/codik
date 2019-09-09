'use strict';

import {download} from "./backend.js";
import {renderItemSlide} from "./render-content.js";
const lists = {
    film: document.querySelector('#flexiselDemo3'),
    cartoon: document.querySelector('#flexiselDemo2'),
    serial:  document.querySelector('#flexiselDemo1')
};

const demoParam = {
    visibleItems: 4,
    animationSpeed: 1000,
    autoPlay: true,
    autoPlaySpeed: 3000,
    pauseOnHover: true,
    enableResponsiveBreakpoints: true,
    responsiveBreakpoints: {
        portrait: {
            changePoint: 480,
            visibleItems: 1
        },
        landscape: {
            changePoint: 640,
            visibleItems: 2
        },
        tablet: {
            changePoint: 1024,
            visibleItems: 3
        }
    }
};

const getContent = (title, id, year, img) => {
    return new Object(
        {
            title: title,
            id: id,
            year: year,
            img: img
        }
    );
};

const urls = {
    film: 'https://kodikapi.com/list?token=955bbb6ff3892fa7b9e5412c7b5fc54a&limit=8&types=foreign-movie,russian-movie&sort=year&camrip=false&kinopoisk_rating=5.5-9&translation_id=794&sort=year',
    cartoons: 'https://kodikapi.com/list?token=955bbb6ff3892fa7b9e5412c7b5fc54a&limit=8&with_material_data=true&types=soviet-cartoon,foreign-cartoon,russian-cartoon&sort=year&camrip=false&kinopoisk_rating=5.5-9&translation_id=794&sort=year',
    serials: 'https://kodikapi.com/list?token=955bbb6ff3892fa7b9e5412c7b5fc54a&limit=8&with_material_data=true&types=russian-serial,foreign-serial&sort=year&camrip=false&kinopoisk_rating=5-9&translation_id=794&sort=year'
};

const renderSlider = (url, list, slider) => {
    download(function (xhr) {
        const data = xhr.response.results;
        const fragment = document.createDocumentFragment();

        for (let i = 0; i < data.length; i++) {
            const content = getContent(data[i].title, data[i].id, data[i].year, data[i].kinopoisk_id);
            fragment.appendChild(renderItemSlide(content));
        }

        list.appendChild(fragment);
        slider.flexisel(demoParam);


    }, url, 'GET');
};

renderSlider(urls.film, lists.film, $('#flexiselDemo3'));
renderSlider(urls.cartoons, lists.cartoon, $('#flexiselDemo2'));
renderSlider(urls.serials, lists.serial, $('#flexiselDemo1'));
