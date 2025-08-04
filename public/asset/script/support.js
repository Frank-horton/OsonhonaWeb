
$(document).ready(function () {
    $(".sideBarli").removeClass("activeLi");
    $(".supportSideA").addClass("activeLi");

    $("#supportTable").dataTable({
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [
            [0, "desc"]
        ],
        columnDefs: [{
            targets: [0, 1, 2, 3, 4],
            orderable: false,
        }],
        ajax: {
            url: `${domainUrl}supportList`,
            data: function (data) {},
            error: (error) => {
                console.log(error);
            }
        },
    });

    $("#supportTable").on('click', '.deleteSupport', function (e) {
        e.preventDefault();
        if (user_type == 1) {
            var id = $(this).attr('rel');
            swal({
                title: "Are you sure?",
                icon: "error",
                buttons: true,
                dangerMode: true,
                buttons: ['Cancel', 'Yes'],
            })
            .then((deleteValue) => {
                if (deleteValue) {
                    if (deleteValue == true) {
                        $.ajax({
                            type: "POST",
                            url: `${domainUrl}deleteSupport`,
                            dataType: "json",
                            data:  {
                                support_id : id
                            },
                            success: function (response) {
                                if (response.status == false) {
                                    console.log(response.message);
                                }  else if (response.status == true) {
                                    console.log(response.data);
                                    iziToast.show({
                                        title: "Deleted",
                                        message: "Support Delete Successfully",
                                        color: "green",
                                        position: toastPosition,
                                        transitionIn: "fadeInUp",
                                        transitionOut: "fadeOutDown",
                                        timeout: 3000,
                                        animateInside: true,
                                        iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                    });
                                    $("#supportTable").DataTable().ajax.reload(null, false);
                                    console.log(response.message);
                                }
                            }
                        });
                    }
                }
            });
        } else {
            iziToast.error({
                title: "Oops",
                message: "You are tester",
                color: "red",
                position: toastPosition,
                transitionIn: "fadeInUp",
                transitionOut: "fadeOutDown",
                timeout: 3000,
            });
        }
    });
      
   
});
