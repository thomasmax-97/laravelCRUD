<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function myFunction(){
    var form = document.getElementById("the-form");
    var action = form.getAttribute("action");
    var data = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", action);
    xhr.send(data);
}

</script>