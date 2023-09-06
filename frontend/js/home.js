$(document).ready(function(){
    //Edit Data
    $(".btnedit").click(function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var name = $(this).data('name');
        var email = $(this).data('email');
        $("#formedit").trigger('reset');
        $("#txtname").val(name);
        $("#txtemail").val(email);
        $("#formedit").submit(function(e){
            e.preventDefault();
            var params = {
                id: id,
                name: $("#txtname").val(),
                email: $("#txtemail").val(),
                type: 'edit'
            }
            $.ajax({
                url: "include/api.php",
                method: "POST",
                data: params,
                dataType: "JSON",
                timeout: "0",
                success: (response) =>{
                    if (response.message == 'success'){
                        Swal.fire({
                            title: 'Change record successfully?',
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: 'OK'
                          }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'index.php?menu=home';
                            } else if (result.isDenied) {
                              Swal.fire('Changes are not saved', '', 'info')
                            }
                        })
                    }
                },
                error: (err) => {
                    console.log(err);
                }
            });
        });
    });
    //Delete
    $(".btndelete").on('click', function(){
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to delete this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
                var params = {
                    id: id,
                    type: 'delete'
                }
                $.ajax({
                    url: "include/api.php",
                    method: "POST",
                    dataType: "JSON",
                    data: params,
                    success: (response) => {
                        if (response.message == 'success'){
                            window.location.href = 'index.php?menu=home';
                        }else{
                            console.log(response.message);
                        }
                    }
                });
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
            }else{
                return false;
            }
          });
    });
});