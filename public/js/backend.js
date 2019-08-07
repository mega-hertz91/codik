'use strict';

const responseTimeout = 3000;

const download = (onLoad, url, method) => {
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

export {download};
