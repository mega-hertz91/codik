'use strict';

import {download} from "./backend.js";
import {renderItemSlide} from "./render-content.js";
const listFilms = document.querySelector('#flexiselDemo3');
const listMults = document.querySelector('#flexiselDemo2');

const renderFilms = () => {
    let url = 'https://kodikapi.com/list?token=955bbb6ff3892fa7b9e5412c7b5fc54a&limit=8&with_material_data=true&types=foreign-movie,russian-movie&sort=year&camrip=false&kinopoisk_rating=6.5-8.2&translation_id=794';

    download(function (xhr) {
        const data = xhr.response.results;
        const fragment = document.createDocumentFragment();

        for (let i = 0; i < data.length; i++) {
            let content = {
                title: data[i].title,
                id: data[i].id,
                year: data[i].year,
                img: data[i].kinopoisk_id,
            };

            fragment.appendChild(renderItemSlide(content));
        }

        listFilms.appendChild(fragment);

        $("#flexiselDemo3").flexisel({
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
        });


    }, url, 'GET');
};

const renderMults = () => {
    let url = 'https://kodikapi.com/list?token=955bbb6ff3892fa7b9e5412c7b5fc54a&limit=8&with_material_data=true&types=soviet-cartoon,foreign-cartoon,russian-cartoon&sort=year&camrip=false&kinopoisk_rating=6.5-8.2&translation_id=794';

    download(function (xhr) {
        const data = xhr.response.results;
        const fragment = document.createDocumentFragment();

        for (let i = 0; i < data.length; i++) {
            let content = {
                title: data[i].title,
                id: data[i].id,
                year: data[i].year,
                img: data[i].kinopoisk_id,
            };

            fragment.appendChild(renderItemSlide(content));
        }

        listMults.appendChild(fragment);

        $("#flexiselDemo2").flexisel({
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
        });


    }, url, 'GET');
};

renderFilms();
renderMults();