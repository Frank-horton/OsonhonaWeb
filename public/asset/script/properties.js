$(document).ready(function () {
    $(".sideBarli").removeClass("activeLi");
    $(".propertiesSideA").addClass("activeLi");
 

    $("#allPropertiesTable").dataTable({
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
            url: `${domainUrl}allPropertiesList`,
            data: function (data) {},
            error: (error) => {
                console.log(error);
            }
        },
    });


        
    $("#allPropertiesTable").on("change", ".featured", function (event) {
        event.preventDefault();

        swal({
            title: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
               
                if (user_type == "1") {
                    $id = $(this).attr("rel");

                    if ($(this).prop("checked") == true) {
                        $value = 1;
                        console.log("Checkbox is Checked.");
                        console.log("1 == true");
                        iziToast.show({
                            title: 'Updated',
                            message: 'Property Added in Featured Item',
                            color: 'green',
                            position: toastPosition,
                            transitionIn: 'fadeInUp',
                            transitionOut: 'fadeOutDown',
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                        });
                    } else {
                        $value = 0;
                        console.log("Checkbox is unchecked.");
                        console.log("0 == false");
                        iziToast.show({
                            title: 'Removed',
                            message: 'Property Removed From Featured Item',
                            color: 'green',
                            position: toastPosition,
                            transitionIn: 'fadeInUp',
                            transitionOut: 'fadeOutDown',
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                        });
                    }

                    $.post( 
                        `${domainUrl}updateFeatured/` + $id,
                        {
                            id: $id,
                            is_featured: $value,
                        },

                        function (returnedData) {
                            console.log(returnedData);

                            $("#allPropertiesTable").DataTable().ajax.reload(null, false); 
                        }
                    ).fail(function (error) {
                        console.log(error);
                    });
                } else {
                    iziToast.error({
                        title: "Error!",
                        message: " you are Tester ",
                        position: toastPosition,
                    });
                }
            } else {
                $("#allPropertiesTable").DataTable().ajax.reload(null, false);
            } 
        });
    });

    
    
    
});
