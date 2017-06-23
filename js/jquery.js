$(document).ready(function(){
  $('#btn').click(function(){
    if (confirm('Are you sure you want to rest the list?')) {
       window.location = 'http://localhost/rand/reset.php';
} else {
              // nothing!
}
});

});
