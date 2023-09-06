$(document).ready(function(){
    $("#btnsave").on('click', function(e){
        e.preventDefault();
        if ($("#txtname").length == 0){
            alert("Insert Name");
            return false;
        }
        if ($("#txtemail").length == 0){
            alert("Insert Email");
            return false;
        }
        var params = {
            name: $("#txtname").val(),
            email: $("#txtemail").val(),
            type: 'add'
        }
        $.ajax({
            url: "include/api.php",
            dataType: "JSON",
            data: params,
            method: "POST",
            success: function(response){
                if (response.message == 'success'){
                    $("#txtname").val("");
                    $("#txtemail").val("");
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        });
    });
});