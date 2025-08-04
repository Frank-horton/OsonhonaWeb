$(document).ready(function () {
    $(".sideBarli").removeClass("activeLi");
    $(".userSideA").addClass("activeLi");

    var id = $('#userId').val();
    var property_id = $("#property_id").val();

    $("#userTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [0, 1, 2, 3, 4],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}userListWeb`,
            data: function (data) {},
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#userPropertyTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}userPropertyList`,
            data: {
                userId: id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });
    
    $(document).on('click', '.deleteThisProperty', function (e) {
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
                            url: `${domainUrl}deleteThisProperty`,
                            dataType: "json",
                            data:  {
                                property_id : id
                            },
                            success: function (response) {
                                if (response.status == false) {
                                    console.log(response.message);
                                }  else if (response.status == true) {
                                    window.location.replace("../properties");
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
                animateInside: true,
                // iconUrl: `${domainUrl}asset/img/x.svg`,
            });
        }
    });
    
    $("#userPropertyTable").on("change", ".featured", function (event) {
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

                            $("#userPropertyTable").DataTable().ajax.reload(null, false); 
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
                $("#userPropertyTable").DataTable().ajax.reload(null, false); 
      
            }
        });
    });
    
    $(document).on("click", ".blockUserBtn", function (e) {
        e.preventDefault();
        if (user_type == 1) {
            var id = $(this).attr("rel"); 
            swal({
                title: "Are you sure?",
                icon: "error",
                buttons: true,
                dangerMode: true,
                buttons: ["Cancel", "Yes"],
            }).then((deleteValue) => {
                if (deleteValue) {
                    if (deleteValue == true) {
                        $.ajax({
                            type: "POST",
                            url: `${domainUrl}blockUserByAdmin`,
                            data: {
                                user_id: id,
                            },
                            dataType: "json",
                            success: function (response) {
                                if (response.status == false) {
                                    console.log(response.message);
                                } else if (response.status == true) {
                                    iziToast.show({
                                        title: "Blocked",
                                        message: "User is in block list",
                                        color: "green",
                                        position: toastPosition,
                                        transitionIn: "fadeInUp",
                                        transitionOut: "fadeOutDown",
                                        timeout: 3000,
                                        animateInside: false,
                                        iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                    }); 
                                    $("#userTable").DataTable().ajax.reload(null, false);
                                    $("#reloadContentForBlockStatus").load(location.href +" #reloadContentForBlockStatus>*","");
                                }
                            },
                        });
                    }
                }
            });
        } else {
            iziToast.show({
                title: "Oops",
                message: "You are tester",
                color: "red",
                position: toastPosition,
                transitionIn: "fadeInUp",
                transitionOut: "fadeOutDown",
                timeout: 3000,
                animateInside: false,
                iconUrl: `${domainUrl}asset/img/x.svg`,
            });
        }
    });

    $(document).on("click", ".unblockUserBtn", function (e) {
        e.preventDefault();
        if (user_type == 1) {
            var id = $(this).attr("rel"); 
            swal({
                title: "Are you sure?",
                icon: "success",
                buttons: ["Cancel", "Yes"],
            }).then((deleteValue) => {
                if (deleteValue) {
                    if (deleteValue == true) {
                        $.ajax({
                            type: "POST",
                            url: `${domainUrl}unblockUserByAdmin`,
                            data: {
                                user_id: id,
                            },
                            dataType: "json",
                            success: function (response) {
                                if (response.status == false) {
                                    console.log(response.message);
                                } else if (response.status == true) {
                                    iziToast.show({
                                        title: "Unblock",
                                        message: "User is Unblock",
                                        color: "green",
                                        position: toastPosition,
                                        transitionIn: "fadeInUp",
                                        transitionOut: "fadeOutDown",
                                        timeout: 3000,
                                        animateInside: false,
                                        iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                    });
                                    $("#userTable").DataTable().ajax.reload(null, false); 
                                    $("#reloadContentForBlockStatus").load(location.href +" #reloadContentForBlockStatus>*","");
                                }
                            },
                        });
                    }
                }
            });
        } else {
            iziToast.show({
                title: "oops",
                message: "You are tester",
                color: "red",
                position: toastPosition,
                transitionIn: "fadeInUp",
                transitionOut: "fadeOutDown",
                timeout: 3000,
                animateInside: false,
                iconUrl: `${domainUrl}asset/img/x.svg`,
            });
        }
    });

    $(document).on("click", ".editThisProperty", function (e) {
        e.preventDefault();

        var id = $(this).attr("rel");
        var property_category = $(this).data("property_category");
        var furniture = $(this).data("furniture"); 


        $("#property_id").val(id);
        $("#property_category").val(property_category);
        $("#editFurniture").val(furniture);
        $("#editFurniture").val(furniture);


        $("#editPropertyModal").modal("show");
    });

    $(document).on("submit", "#editPropertyForm", function (e) {
        e.preventDefault();
        if (user_type == 1) {
            var id = $("#property_id").val();
            let formData = new FormData($("#editPropertyForm")[0]);
            var availableFor = $(
                "input[type='radio'][name='property_available_for']:checked"
            ).val();
            console.log(availableFor);
            formData.append("property_id", id);
            formData.append("availableFor", availableFor);
            $.ajax({
                type: "POST",
                url: `${domainUrl}updatePropertyDetailsWeb`,
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status == false) {
                        console.log(response.message);
                        iziToast.show({
                            title: "Error",
                            message: "Property Not Found",
                            color: "red",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/copy.svg`,
                        });
                    } else if (response.status == true) {
                        iziToast.show({
                            title: "Success",
                            message: "Property Updated Successfully",
                            color: "green",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                        }); 
                        $("#updatedReload").load(
                            location.href + " #updatedReload>*",
                            ""
                        );
                        $("#editPropertyModal").modal("hide");
                        $("#editPropertyForm").load(
                            location.href + " #editPropertyForm>*",
                            ""
                         );
                    }
                },
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
                animateInside: true,
                // iconUrl: `${domainUrl}asset/img/x.svg`,
            });
        }
    });

    $("#userPropertyMediaTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}userPropertyMediaList`,
            data: {
                userId: id,
                property_id: property_id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyMediaOverviewTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}propertyMediaOverviewList`,
            data: {
                userId: id,
                property_id: property_id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyMediaBedroomTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}propertyMediaBedroomList`,
            data: {
                userId: id,
                property_id: property_id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyMediaBathroomTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}propertyMediaBathroomList`,
            data: {
                userId: id,
                property_id: property_id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyMediaOtherImageTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}propertyMediaOtherImageList`,
            data: {
                userId: id,
                property_id: property_id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyMediaFloorPlanTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}propertyMediaFloorPlanList`,
            data: {
                userId: id,
                property_id: property_id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyMediaPropertyVideoTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}propertyMediaPropertyVideoList`,
            data: {
                userId: id,
                property_id: property_id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyMediaThreeSixtyTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}propertyMediaThreeSixtyList`,
            data: {
                userId: id,
                property_id: property_id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });

    $(document).on("click", ".deleteMediaBtn", function (e) {
        e.preventDefault();
        if (user_type == 1) {
            var id = $(this).attr("rel");
            // console.log(id);
            swal({
                title: "Are you sure?",
                icon: "error",
                buttons: true,
                dangerMode: true,
                buttons: ["Cancel", "Yes"],
            }).then((deleteValue) => {
                if (deleteValue) {
                    $.ajax({
                        type: "POST",
                        url: `${domainUrl}deletePropertyMedia`,
                        data: {
                            property_media_id: id,
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == true) {
                                iziToast.show({
                                    title: "Deleted",
                                    message:
                                        "Property Media Delete Successfully",
                                    color: "green",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: true,
                                    iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                });
                                console.log(response.message);
                                $("#userPropertyMediaTable").DataTable().ajax.reload(null, false);
                                $("#propertyMediaOverviewTable").DataTable().ajax.reload(null, false);
                                $("#propertyMediaBedroomTable").DataTable().ajax.reload(null, false);
                                $("#propertyMediaBathroomTable").DataTable().ajax.reload(null, false);
                                $("#propertyMediaFloorPlanTable").DataTable().ajax.reload(null, false);
                                $("#propertyMediaOtherImageTable").DataTable().ajax.reload(null, false);
                                $("#propertyMediaPropertyVideoTable").DataTable().ajax.reload(null, false);
                                $("#propertyMediaThreeSixtyTable").DataTable().ajax.reload(null, false);

                            } else if (response.status == false) {
                                iziToast.show({
                                    title: "Opps",
                                    message:
                                        "You Can't delete all overview image",
                                    color: "red",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: true,
                                    iconUrl: `${domainUrl}asset/img/x.svg`,
                                });
                            }
                        },
                    });
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
                animateInside: true,
                // iconUrl: `${domainUrl}asset/img/x.svg`,
            });
        }
    });   
    
    $("#userReelsTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}userReelList`,
            data: {
                userId: id,
            },
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyReelsTable").dataTable({
        autoWidth: false,
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: "_all",
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}propertyReelList`,
            data: { property_id: property_id },
            error: (error) => {
                console.log(error);
            },
        },
    });

});
