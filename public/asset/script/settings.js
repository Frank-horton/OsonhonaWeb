$(document).ready(function () {
    $(".sideBarli").removeClass("activeLi");
    $(".settingSideA").addClass("activeLi");

    $("#settingsForm").on("submit", function (event) {
        event.preventDefault();

        if (user_type == 1) {
            var formdata = new FormData($("#settingsForm")[0]);
            console.log(formdata);

            $.ajax({
                url: `${domainUrl}saveSettings`,
                type: "POST",
                data: formdata,
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    $(".loader").hide();

                    if (response.status == false) {
                        iziToast.show({
                            title: "Error",
                            message: "Setting not found",
                            color: "red",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/copy.svg`,
                        });
                    } else {
                        iziToast.show({
                            title: "Success",
                            message: "Setting Updated Successfully",
                            color: "green",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                        });
                        $("#reloadContent").load(
                            location.href + " #reloadContent>*",
                            ""
                        );
                    }
                },
                error: function (err) {
                    console.log(err);
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
    $("#storageSettingForm").on("submit", function (event) {
        event.preventDefault();

        if (user_type == 1) {
            var formdata = new FormData($("#storageSettingForm")[0]);

            $.ajax({
                url: `${domainUrl}saveSettings`,
                type: "POST",
                data: formdata,
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    if (response.status == false) {
                        iziToast.show({
                            title: "Error",
                            message: "Setting not found",
                            color: "red",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/copy.svg`,
                        });
                    } else {
                        iziToast.show({
                            title: "Success",
                            message: "Setting Updated Successfully",
                            color: "green",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                        });
                        $("#reloadContent").load(
                            location.href + " #reloadContent>*",
                            ""
                        );
                    }
                },
                error: function (err) {
                    console.log(err);
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

    $("#supportSubjectTable").dataTable({
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [0, 1],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}supportSubjectList`,
            data: function (data) {},
            error: (error) => {
                console.log(error);
            },
        },
    });

    $(document).on("submit", "#addSupportSubjectForm", function (e) {
        e.preventDefault();
        if (user_type == 1) {
            let formData = new FormData($("#addSupportSubjectForm")[0]);
            $.ajax({
                type: "POST",
                url: `${domainUrl}addSupportSubject`,
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status == false) {
                        console.log(response.message);
                        iziToast.show({
                            title: "Dublicate Entry",
                            message: "Support Subject Dublicate Entry",
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
                            message: "Support Subject Added Successfully",
                            color: "green",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                        });
                        $("#supportSubjectTable")
                            .DataTable()
                            .ajax.reload(null, false);
                        $("#supportSubjectModal").modal("hide");
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

    $("#supportSubjectTable").on("click", ".edit", function (e) {
        e.preventDefault();

        var id = $(this).attr("rel");
        var title = $(this).data("title");
        $("#supportSubjectId").val(id);
        $("#editSupportSubject").val(title);

        $("#editSupportSubjectModal").modal("show");
    });

    $(document).on("submit", "#editSupportSubjectForm", function (e) {
        e.preventDefault();
        if (user_type == 1) {
            var id = $("#supportSubjectId").val();
            let EditformData = new FormData($("#editSupportSubjectForm")[0]);
            $.ajax({
                type: "POST",
                url: `${domainUrl}updateSupportSubject/` + id,
                data: EditformData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status == false) {
                        console.log(response.message);
                        iziToast.show({
                            title: "Same as Previous",
                            message: "Support Subject Dublicate Entry",
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
                            title: "Updated",
                            message: "Support Subject Update Successfully",
                            color: "green",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                        });
                        $("#supportSubjectTable")
                            .DataTable()
                            .ajax.reload(null, false);
                        $("#editSupportSubjectModal").modal("hide");
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

    $("#supportSubjectTable").on("click", ".delete", function (e) {
        e.preventDefault();
        if (user_type == 1) {
            var id = $(this).attr("rel");
            console.log(id);

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
                        url: `${domainUrl}deleteSupportSubject/` + id,
                        dataType: "json",
                        success: function (response) {
                            if (response.status == true) {
                                iziToast.show({
                                    title: "Deleted",
                                    message:
                                        "Support Subject Delete Successfully",
                                    color: "green",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: true,
                                    iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                });
                                $("#supportSubjectTable")
                                    .DataTable()
                                    .ajax.reload(null, false);
                                console.log(response.message);
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

    $("#propertyTypeForm").on("submit", function (event) {
        event.preventDefault();

        if (user_type == 1) {
            var formdata = new FormData($("#propertyTypeForm")[0]);
            console.log(formdata);

            $.ajax({
                url: `${domainUrl}addPropertyType`,
                type: "POST",
                data: formdata,
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    if (response.status == true) {
                        iziToast.show({
                            title: "Success",
                            message: "Property type Updated Successfully",
                            color: "green",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                        });
                        $("#propertyTypeTable")
                            .DataTable()
                            .ajax.reload(null, false);
                        $("#propertyTypeModal").modal("hide");
                    }
                },
                error: function (err) {
                    console.log(err);
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

    $("#propertyTypeTable").dataTable({
        process: true,
        serverSide: true,
        serverMethod: "post",
        aaSorting: [[0, "desc"]],
        columnDefs: [
            {
                targets: [0, 1],
                orderable: false,
            },
        ],
        ajax: {
            url: `${domainUrl}propertyTypeList`,
            data: function (data) {},
            error: (error) => {
                console.log(error);
            },
        },
    });

    $("#propertyTypeTable").on("click", ".edit", function (e) {
        e.preventDefault();

        var id = $(this).attr("rel");
        var title = $(this).data("title");
        var category = $(this).data("category");
        $("#propertyTypeId").val(id);
        $("#editPropertyType").val(title);
        $("#editPropertyCategory").val(category);

        $("#editPropertyTypeModal").modal("show");
    });

    $(document).on("submit", "#editPropertyTypeForm", function (e) {
        e.preventDefault();
        if (user_type == 1) {
            var id = $("#propertyTypeId").val();
            let EditformData = new FormData($("#editPropertyTypeForm")[0]);
            EditformData.append("property_type_id", id);
            $.ajax({
                type: "POST",
                url: `${domainUrl}updatePropertyType`,
                data: EditformData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status == false) {
                        console.log(response.message);
                        iziToast.show({
                            title: "Error",
                            message: "Property Type Not Found",
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
                            title: "Updated",
                            message: "Property Type Update Successfully",
                            color: "green",
                            position: toastPosition,
                            transitionIn: "fadeInUp",
                            transitionOut: "fadeOutDown",
                            timeout: 3000,
                            animateInside: true,
                            iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                        });
                        $("#propertyTypeTable")
                            .DataTable()
                            .ajax.reload(null, false);
                        $("#editPropertyTypeModal").modal("hide");
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

    $("#propertyTypeTable").on("click", ".delete", function (e) {
        e.preventDefault();
        if (user_type == 1) {
            var id = $(this).attr("rel");
            console.log(id);

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
                        url: `${domainUrl}deletePropertyType`,
                        data: {
                            property_type_id: id,
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == true) {
                                iziToast.show({
                                    title: "Deleted",
                                    message:
                                        "Property Type Delete Successfully",
                                    color: "green",
                                    position: toastPosition,
                                    transitionIn: "fadeInUp",
                                    transitionOut: "fadeOutDown",
                                    timeout: 3000,
                                    animateInside: true,
                                    iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                                });
                                $("#propertyTypeTable")
                                    .DataTable()
                                    .ajax.reload(null, false);
                                console.log(response.message);
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

    
    $(document).on("submit", "#admobForm", function (e) {
      e.preventDefault();

      if (user_type == 1) {
          var formdata = new FormData($("#admobForm")[0]);
          console.log(formdata);

          $.ajax({
              url: `${domainUrl}saveSettings`,
              type: "POST",
              data: formdata,
              dataType: "json",
              contentType: false,
              cache: false,
              processData: false,
              success: function (response) {
                  if (response.status == true) {
                      iziToast.show({
                          title: "Success",
                          message: "Admob Updated Successfully",
                          color: "green",
                          position: toastPosition,
                          transitionIn: "fadeInUp",
                          transitionOut: "fadeOutDown",
                          timeout: 3000,
                          animateInside: true,
                          iconUrl: `${domainUrl}asset/img/check-circle.svg`,
                      });
                  }
              },
              error: function (err) {
                  console.log(err);
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
});
