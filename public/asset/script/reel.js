$(document).ready(function () {
    $(".sideBarli").removeClass("activeLi");
    $(".reelSideA").addClass("activeLi");

    $("#reelsTable").dataTable({
        processing: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [0, 1, 2, 3, 4, 5, 6],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}reelList`,
            data: function (data) {},
            error: (error) => {
                console.log(error);
            },
        },
    });



});
