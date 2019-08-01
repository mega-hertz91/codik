const responses = {
  success: '<p style="color: darkblue">Данные успешно загружены</p>',
  error: '<p style="color: crimson">Произошла ошибка сервера, код ошибки</p>'
};

const serverStatuses = {
  success: 200,
  notFound: 400,
  serverError: 500
};

const responseTimeout = 3000;

const main = document.querySelector('main');
const div = document.createElement('div');
let url ='https://kodikapi.com/list?token=955bbb6ff3892fa7b9e5412c7b5fc54a&limit=10&with_material_data=true&types=foreign-movie';

window.download = function (onLoad, url, method) {
  const functions = {
    loadStart: function () {
      startDate = new Date().getTime();
      console.log('Запрос начат ');
    },
    load: function () {
      onLoad(xhr);
    },
    error: function () {
      onLoad('error');
    },
    loadEnd: function () {
      finishDate = new Date().getTime();
      finishDate = finishDate - startDate;
      console.log(`Запрос завершился со статусом: ${xhr.status}\n время ответа ${((finishDate) / 3600).toFixed(2)} секунд`);
    },
    badTimeout: function () {
      onLoad('timeout');
    }
  };

  const xhr = new XMLHttpRequest();
  let startDate;
  let finishDate;

  xhr.responseType = 'json';

  xhr.addEventListener('loadstart', functions.loadStart);
  xhr.addEventListener('load', functions.load);
  xhr.addEventListener('error', functions.error);
  xhr.addEventListener('loadend', functions.loadEnd);
  xhr.addEventListener('timeout', functions.badTimeout);

  xhr.timeout = responseTimeout;

  xhr.open(method, url);
  xhr.send();
};
