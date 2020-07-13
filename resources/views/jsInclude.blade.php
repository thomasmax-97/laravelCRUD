<script
  src="https://code.jquery.com/jquery-3.5.1.slim.js"
  integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
  crossorigin="anonymous"></script>

<script>
$('#id-selection').on('change', function() {
  var url = document.location.href;
  
  //remove all get parameter 
  url = url.substring(0, url.indexOf('?'));
  if(url.indexOf('?') == -1){
      url += "?id=" + this.value;
  }
  
  document.location = url;

});
/*
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
*/
function myFunction(){
   // document.getElementById("the-form").submit();
}


</script>