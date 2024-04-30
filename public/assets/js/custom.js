function href(target) {
  window.location.href = `${base_url}/${target}` 
}

function deleteEntity(id, url) {
  if(!confirm("Apakah anda yakin untuk menghapus data ini?")){
    return
  }

  fetch(`${base_url}/api/${url}/delete/${id}`, {
    method : 'DELETE',
    headers : {}
  })
  .then(raw => raw.json)
  .then(res => {
    if(res.isSuccess === true && res.error === null){
      window.location.href = `${base_url}/${url}`
    } else {
      showError(res.error)
    }
  })
}

function showError(msg){
  console.error(msg)
}