
if (from_php.do === 'Edit'){
  cf().form('#form-data').show(from_php.selected_menu, from_php.data_id);
  $('#btn-submit').click(()=> cf().form('#form-data').update(from_php.selected_menu, from_php.data_id))
  $('#btn-delete').click(()=> cf().destroy(from_php.selected_menu, from_php.data_id))

  const filterField = $('#filter')
  changeTableGaji(filterField)
  changeSalarySummary()
  filterField.change(()=>{
      changeTableGaji(filterField)
      changeSalarySummary()
  })

} else if (from_php.do === 'Tambah') {
  $('#btn-submit').click(()=> cf().form('#form-data').store(from_php.selected_menu))
}

function changeTableGaji(filterField) {
  let filterObj = {}
  const nameofField = filterField.attr('name')
  filterObj[nameofField] = filterField.val()
  cf().list(`employee/${from_php.data_id}/salary`, filterObj)
}

function changeSalarySummary() {
  const thisMonthSalary = $('#this-month-salary')
  const salaryStatus = $('#salary-status')

  let data = {
    'e_id' : from_php.data_id,
    'month' : $("[name='month']").val()
  }

  const queryString = data !== null ? Object.keys(data).map(key => key + '=' + data[key]).join('&') : ''
  const realUrl = `${base_url}/api/salary?${queryString}`
  fetch(realUrl, {
    method : 'GET'
  })
  .then(raw => raw.json())
  .then(res => {
    const result = res.data[0]
    thisMonthSalary.val(result.salary)
    salaryStatus.val(result.status)
  })
}