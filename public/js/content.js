const urlContainer = document.querySelector('div[aria-label=next_page');
let url = urlContainer.getAttribute('data-link');

const template = document.querySelector('.item');
const filmList = document.querySelector('.film-list');
const buttonAdd  = document.querySelector('.add');

const renderElement = (elem) => {
  const item = template.cloneNode(true);
  item.querySelector('.title').textContent = elem.title;
  item.querySelector('.id').textContent = elem.id;
  item.querySelector('.year').textContent = elem.year;

  return item;
};


window.download(function (xhr) {
  if (xhr.status === serverStatuses.success ) {
    const data = xhr.response['results'];
    const nextPage = xhr.response.next_page;

    const addElements = () => {
      const fragment = document.createDocumentFragment();

      for (let i = 0; i < data.length; i++) {
        const param = {
          title: data[i].title,
          id: data[i].id,
          kinopoisk_id: data[i].kinopoisk_id,
          year: data[i].year
        };

        fragment.appendChild(renderElement(param));
      }

      filmList.append(fragment);

      if (nextPage) {
        url = urlContainer.setAttribute('data-link', nextPage);
      } else {
        buttonAdd.removeEventListener('click', addElements);
        buttonAdd.setAttribute('disabled', 'disabled');
      }
    };

    buttonAdd.addEventListener('click', addElements);

  } else if (xhr.status === serverStatuses.notFound) {
    div.innerHTML = responses.error + ' ' + xhr.response.status;
  }

  main.appendChild(div);
}, url, 'GET');
