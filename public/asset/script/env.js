var domainUrl = $("#appUrl").val();

// add class on responsive

$(window).on("resize", function () {
    if ($(window).width() >= 1600) {
        $("table").removeClass("table-responsive");
        $(".tab-pane table").removeClass("table-responsive");
        $("#NotificationTable").removeClass("table-responsive");
        $("#supportTable").removeClass("table-responsive");
        $("#reportTable").removeClass("table-responsive");
        $("#supportSubjectTable").removeClass("table-responsive");
        $("#propertyTypeTable").removeClass("table-responsive");
    }

    if ($(window).width() <= 1600) {
        $("table").addClass("table-responsive");
        $(".tab-pane table").removeClass("table-responsive");
        $("#NotificationTable").removeClass("table-responsive");
        $("#supportTable").removeClass("table-responsive");
        $("#reportTable").removeClass("table-responsive");
        $("#supportSubjectTable").removeClass("table-responsive");
        $("#propertyTypeTable").removeClass("table-responsive");
    }

    if ($(window).width() <= 767) {
        $("table").addClass("table-responsive");
        $(".tab-pane table").addClass("table-responsive");
        $("#NotificationTable").addClass("table-responsive");
        $("#supportTable").addClass("table-responsive");
        $("#reportTable").addClass("table-responsive");
        $("#supportSubjectTable").addClass("table-responsive");
        $("#propertyTypeTable").addClass("table-responsive");
    }
});

$(window).on("load", function () {
    if ($(window).width() >= 1600) {
        $("table").removeClass("table-responsive");
        $(".tab-pane table").removeClass("table-responsive");
        $("#NotificationTable").removeClass("table-responsive");
        $("#supportTable").removeClass("table-responsive");
        $("#reportTable").removeClass("table-responsive");
        $("#supportSubjectTable").removeClass("table-responsive");
        $("#propertyTypeTable").removeClass("table-responsive");
    }

    if ($(window).width() <= 1600) {
        $("table").addClass("table-responsive");
        $(".tab-pane table").removeClass("table-responsive");
        $("#NotificationTable").removeClass("table-responsive");
        $("#supportTable").removeClass("table-responsive");
        $("#reportTable").removeClass("table-responsive");
        $("#supportSubjectTable").removeClass("table-responsive");
        $("#propertyTypeTable").removeClass("table-responsive");
    }

    if ($(window).width() <= 767) {
        $("table").addClass("table-responsive");
        $(".tab-pane table").addClass("table-responsive");
        $("#NotificationTable").addClass("table-responsive");
        $("#supportTable").addClass("table-responsive");
        $("#reportTable").addClass("table-responsive");
        $("#supportSubjectTable").addClass("table-responsive");
        $("#propertyTypeTable").addClass("table-responsive");
    }

    $(".logo-name-small").each(function (index) {
        var characters = $(this).text().split("");
        $this = $(this);
        $this.empty();
        $.each(characters, function (i, el) {
            $this.append('<span class="letter-' + i + '">' + el + "</span>");
        });
    });
});
