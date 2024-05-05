
if (from_php.do === 'Edit'){
  cf().form('#form-data').show(from_php.selected_menu, from_php.data_id);
  $('#btn-submit').click(()=> cf().form('#form-data').update(from_php.selected_menu, from_php.data_id))
  $('#btn-delete').click(()=> cf().destroy(from_php.selected_menu, from_php.data_id))
} else if (from_php.do === 'Tambah') {
  $('#btn-submit').click(()=> cf().form('#form-data').store(from_php.selected_menu))
} else {
  const filterField = $('#filter')
  
  if(filterField.length){
    let filterObj = {}
    const nameofField = filterField.attr('name')
    filterObj[nameofField] = filterField.val();
    cf().list(from_php.selected_menu, filterObj);

    filterField.change(()=>{
        filterObj[nameofField] = filterField.val();
        cf().list(from_php.selected_menu, filterObj);
    })
  } else {
    cf().list(from_php.selected_menu)
  }
}