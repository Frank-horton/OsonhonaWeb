
$(document).ready(function () {
    $(".sideBarli").removeClass("activeLi");
    $(".reportSideA").addClass("activeLi");

    $("#userReportsTable").dataTable({
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
            url: `${domainUrl}userReportsList`,
            data: function (data) {},
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#userReportsTable").on("click", ".rejectReportBtn", function (e) {
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
                if (deleteValue == true) {
                    $.ajax({
                        type: "POST",
                        url: `${domainUrl}rejectUserReport`,
                        data: {
                            report_id: id,
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == false) {
                                console.log(response.message);
                            } else if (response.status == true) {
                                iziToast.show({
                                    title: "Rejected",
                                    message: "Report rejected successfully",
                                    color: "green",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: false,
                                    iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                });
                                $("#userReportsTable")
                                    .DataTable()
                                    .ajax.reload(null, false);
                            }
                        },
                    });
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
    
    $("#userReportsTable").on("click", ".blockUserBtn", function (e) {
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
                if (deleteValue == true) {
                    $.ajax({
                        type: "POST",
                        url: `${domainUrl}blockUserFromReport`,
                        data: {
                            report_id: id,
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == false) {
                                console.log(response.message);
                            } else if (response.status == true) {
                                iziToast.show({
                                    title: "Block",
                                    message: "User is in block list",
                                    color: "green",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: false,
                                    iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                });
                                $("#userReportsTable")
                                    .DataTable()
                                    .ajax.reload(null, false);
                            }
                        },
                    });
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

    $("#propertyReportsTable").dataTable({
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
            url: `${domainUrl}propertyReportsList`,
            data: function (data) {},
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyReportsTable").on("click", ".rejectReportBtn", function (e) {
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
                if (deleteValue == true) {
                    $.ajax({
                        type: "POST",
                        url: `${domainUrl}rejectPropertyReport`,
                        data: {
                            report_id: id,
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == false) {
                                console.log(response.message);
                            } else if (response.status == true) {
                                iziToast.show({
                                    title: "Rejected",
                                    message: "Report rejected successfully",
                                    color: "green",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: false,
                                    iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                });
                                $("#propertyReportsTable")
                                    .DataTable()
                                    .ajax.reload(null, false);
                            }
                        },
                    });
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

    $("#propertyReportsTable").on("click", ".deletePropertyFromReport", function (e) {
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
                if (deleteValue == true) {
                    $.ajax({
                        type: "POST",
                        url: `${domainUrl}deletePropertyFromReport`,
                        data: {
                            report_id: id,
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == false) {
                                console.log(response.message);
                            } else if (response.status == true) {
                                iziToast.show({
                                    title: "Success",
                                    message: "Property Delete Successfully",
                                    color: "green",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: false,
                                    iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                });
                                $("#propertyReportsTable")
                                    .DataTable()
                                    .ajax.reload(null, false);
                            }
                        },
                    });
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

    $("#reelReportsTable").dataTable({
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
            url: `${domainUrl}reelReportsList`,
            data: function (data) {},
            error: (error) => {
                console.log(error);
            },
        },
    });

    $(document).on("click", ".reelVideoBtn", function (e) {
        e.preventDefault();

        var reel = $(this).data("reel_video_url");
        var description = $(this).data("description");

        $("#reelVideoUrl").attr("src", `${reel}`);
        $("#modalBottomDescription").html(description);

        $("#reelPreviewModal").modal("show");
    });

    $("#reelPreviewModal").on("hide.bs.modal", function () {
        $("#reelVideoUrl").attr("src", ``);
    });

    $("#reelReportsTable").on("click", ".rejectReportBtn", function (e) {
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
                    if (deleteValue == true) {
                        $.ajax({
                            type: "POST",
                            url: `${domainUrl}rejectReelReport`,
                            data: {
                                report_id: id,
                            },
                            dataType: "json",
                            success: function (response) {
                                if (response.status == false) {
                                    console.log(response.message);
                                } else if (response.status == true) {
                                    iziToast.show({
                                        title: "Rejected",
                                        message:
                                            "Report rejected successfully",
                                        color: "green",
                                        position: toastPosition,
                                        transitionIn: "fadeInUp",
                                        transitionOut: "fadeOutDown",
                                        timeout: 3000,
                                        animateInside: false,
                                        iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                    });
                                    $("#reelReportsTable")
                                        .DataTable()
                                        .ajax.reload(null, false);
                                }
                            },
                        });
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
        }
    );

    $("#reelReportsTable").on("click", ".deletePropertyFromReport", function (e) {
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
                if (deleteValue == true) {
                    $.ajax({
                        type: "POST",
                        url: `${domainUrl}deleteReelFromReport`,
                        data: {
                            report_id: id,
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == false) {
                                console.log(response.message);
                            } else if (response.status == true) {
                                iziToast.show({
                                    title: "Success",
                                    message: "Reel Delete Successfully",
                                    color: "green",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: false,
                                    iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                });
                                $("#reelReportsTable")
                                    .DataTable()
                                    .ajax.reload(null, false);
                            }
                        },
                    });
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


});
