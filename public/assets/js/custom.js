
if (from_php.do === 'Edit'){
  cf().form('#form-car').show(from_php.selected_menu, from_php.data_id);
  $('#btn-submit').click(()=> cf().form('#form-car').update(from_php.selected_menu, from_php.data_id))
  $('#btn-delete').click(()=> cf().destroy(from_php.selected_menu, from_php.data_id))
} else if (from_php.do === 'Tambah') {
  $('#btn-submit').click(()=> cf().form('#form-car').store(from_php.selected_menu))
} else {
  cf().list(from_php.selected_menu)
}