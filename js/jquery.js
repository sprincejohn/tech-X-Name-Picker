$(document).ready(function(){
  $('#btn').click(function(){
    if (confirm('Are you sure you want to reset the list?')) {
       window.location = './reset.php';
} else {
              // nothing!
}
});

});
