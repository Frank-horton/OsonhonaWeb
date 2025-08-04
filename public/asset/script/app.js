$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});


var toastPosition = "bottomCenter";

var user_type = $("#user_type").val();

$(document).on("click", ".reelVideoBtn", function (e) {
    e.preventDefault();

    var reel = $(this).data("reel_video_url");
    var description = $(this).data("description");

    $("#reelVideoUrl").attr("src", `${reel}`);
    $("#modalBottomDescription").html(description);

    $("#reelPreviewModal").modal("show");
});

$(document).on("click", ".propertyMediaVideoBtn", function (e) {
    e.preventDefault();

    var reel = $(this).data("media_video_url"); 

    $("#mediaVideoUrl").attr("src", `${reel}`); 

    $("#mediaPreviewModal").modal("show");
});

$("#reelPreviewModal").on("hide.bs.modal", function () {
    $("#reelVideoUrl").attr("src", ``);
});

$(document).on("click", ".deleteReel", function (e) {
    e.preventDefault();
    var id = $(this).attr("rel");
    if (user_type == 1) {
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
                        url: `${domainUrl}deleteReelFromWeb`,
                        data: {
                            reel_id: id,
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == false) {
                                console.log(response.message);
                            } else if (response.status == true) {
                                iziToast.show({
                                    title: "Deleted",
                                    message: "Reel Delete Succesfully",
                                    color: "green",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: false,
                                    iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                });
                                $("#reelsTable").DataTable().ajax.reload(null, false);
                                $("#userReelsTable").DataTable().ajax.reload(null, false);
                                $("#propertyReelsTable").DataTable().ajax.reload(null, false);
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

$(document).on("hidden.bs.modal", function () {
    $("form").trigger("reset");
    $(this).data("bs.modal", null);
    $(".saveButton").removeClass("spinning");
    $(".saveButton").removeClass("disabled");

    $(".saveButton1").removeClass("spinning");
    $(".saveButton1").removeClass("disabled");
});

$("form").on("submit", function () {
    $(".saveButton").addClass("spinning");
    $(".saveButton").addClass("disabled");

    $(".saveButton1").addClass("spinning");
    $(".saveButton1").addClass("disabled");
});
