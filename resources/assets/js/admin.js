require('./partials/assets.js');


// Confirm Delete on Click
$('.delete').on('click', function(){
  return confirm('Do You Want to Delete This?');
});
