
// cf(crud with form) : menangani proses crud
function cf(){
  return {
    _form : null,

    form : function(idForm){
      $(idForm).submit( function(event){event.preventDefault()})
      this._form = dataForm(idForm)
      return this
    },

    store : function(targetApi) {
      const data = this._form.GetData()
      fetch(`${base_url}/api/${targetApi}`, {
        method : 'POST',
        headers : {
          'Content-Type': 'application/json',
        },
        body : JSON.stringify(data)
      })
      .then(raw => raw.json())
      .then(res => nextAction(`${targetApi}`, res))
    },

    update : function(targetApi, id) {
      const data = this._form.GetData()
      fetch(`${base_url}/api/${targetApi}/${id}`, {
        method : 'PUT',
        headers : {
          'Content-Type': 'application/json',
        },
        body : JSON.stringify(data)
      })
      .then(raw => raw.json())
      .then(res => nextAction(`${targetApi}`, res))
    },

    list : function(targetApi, data = null) {
      const queryString = data !== null ? Object.keys(data).map(key => key + '=' + data[key]).join('&') : ''
      const realUrl = `${base_url}/api/${targetApi}?${queryString}`
      fetch(realUrl, {
        method : 'GET'
      })
      .then(raw => raw.json())
      .then(res => {
        const tbody = $("#table-data tbody")
        tbody.empty().append(res.view)
      })
    },

    show : function(targetApi, id) {
      fetch(`${base_url}/api/${targetApi}/${id}`, {
        method : 'GET',
      })
      .then(raw => raw.json())
      .then(res => this._form.Fill(res.data))
    },

    destroy : function(targetApi, id) {
      if(!confirm("Hapus data ini?")) {
        return
      }

      fetch(`${base_url}/api/${targetApi}/${id}`, {
        method : 'DELETE'
      })
      .then(raw => raw.json())
      .then(res => nextAction(`${targetApi}`, res))
    }
  }
}

// memanipulasi form
function dataForm(idForm) {
  return {
    GetData: function() {
      var inputValues = {};
      $(`${idForm} [name]`).each(function() {
        var name = $(this).attr("name");
        var value = $(this).val();
        inputValues[name] = value;
      });
      return inputValues;
    },

    Clear: function() {
      $(`${idForm} [name]`).each(function() {
        $(this).val('');
      });
    },

    Fill: function(data) {
      $(`${idForm} [name]`).each(function() {
        var name = $(this).attr("name");
        $(this).val(data[name]);
      })
    }

  }
}

// redirect saat success, show alert saat gagal
function nextAction(path, response) {
  if(response.isSuccess === true && response.error === null){
      window.location.href = `${base_url}/${path}`
    } else {
      alert(response.error)
    }
}

// berpindah halaman
function href(path) {
  window.location.href = `${base_url}/${path}` 
}