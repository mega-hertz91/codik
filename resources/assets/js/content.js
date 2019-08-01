window.download(function (xhr) {
  if (xhr.status === serverStatuses.success ) {
    div.innerHTML = responses.success;
    console.log(xhr.response);
  } else if (xhr.status === serverStatuses.notFound) {
    div.innerHTML = responses.error + ' ' + xhr.response.status;
  }

  main.appendChild(div);
}, url, 'GET');
