
/* ====== Document ready ======= */
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-left",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "2000",
    "extendedTimeOut": "2000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid",
    errorPlacement: function (error, element) {
      return true;
    },
  });

  $(".search-btn").on("click", function () {
    $(".header-search").toggleClass("open");
  });
  
  $('.page-previous').click(function(){
        current_page--;
        if(current_page < 1)
        {
        current_page = 1
        }
        $('#paginate-number').text('Page ' + current_page + ' of ' + total_pages);
        app.load('#item-list', module_link + '?page=' + current_page)
    });

    $('.page-next').click(function(){
        current_page++;
        if(current_page > total_pages)
        {
            current_page = total_pages
        }
        $('#paginate-number').text('Page ' + current_page + ' of ' + total_pages);
        app.load('#item-list', module_link + '?page=' + current_page)
    });

  $(".html-editor-mini").summernote({
    height: "200px",
    toolbar: [
      ["style", ["bold", "italic", "underline"]],
      ["fontsize", ["fontsize"]],
      ["color", ["color"]],
      ["para", ["ul", "ol", "paragraph"]],
      ['view', ['fullscreen', 'codeview']],
    ],
  });

  $(".html-editor").summernote({
    height: "200px",
    onImageUpload: function (files, editor, welEditable) {
      app.sendFile(files[0], editor, welEditable);
    },
  });

  $("body").on("click", "[data-action]", function (e) {
    e.preventDefault();
    e.stopPropagation();
    var tag = $(this);

    console.log(e);

    if (tag.data("action") == "SHOW")
      return app.load(tag.data("load-to"), tag.data("url"));

    if (tag.data("action") == "CREATE")
      return app.load(tag.data("load-to"), tag.data("url"));

    if (tag.data("action") == "STORE")
      return app.store(tag);

    if (tag.data("action") == "EDIT")
      return app.load(tag.data("load-to"), tag.data("url"));

    if (tag.data("action") == "UPDATE")
      return app.update(tag);

    if (tag.data("action") == "DELETE") {
      return app.delete(tag);
    }

    if (tag.data("action") == "REQUEST")
      return app.makeRequest(tag.data("method"), tag.data("href"));

    app.load(tag.data("load-to"), tag.data("href"));
  });


  $('.dropdown .has-child').on('click', 'a[data-toggle="collapse"]', function (event) {
      event.preventDefault();
      event.stopPropagation();
      $($(this).attr('href')).collapse('toggle');
  });

  if($(".main-nav-wrap").length){
    var ps = new PerfectScrollbar(".main-nav-wrap", {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 5
    });
  }

  if($(".perfect-scroll").length){
    var ps = new PerfectScrollbar(".perfect-scroll", {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 5
    });
  }

  var dropdownMenu;
  $(window).on('show.bs.dropdown', function (e) {
      dropdownMenu = $(e.target).find('.main-nav-dropdown');
      $('body').append(dropdownMenu.detach());
      var eOffset = $(e.target).offset();
      dropdownMenu.css({
          'display': 'block',
          'top': eOffset.top,
          'left': eOffset.left + 63
      });
  });
  $(window).on('hide.bs.dropdown', function (e) {
      $(e.target).append(dropdownMenu.detach());
      dropdownMenu.hide();
  });
});


/* ====== Ajax complete ======= */
$(document).ajaxComplete(function () {
  $("body")
    .off()
    .on("click", "[data-action]", function (e) {
      e.preventDefault();
      e.stopPropagation();
      var tag = $(this);

      if (tag.data("action") == "SHOW")
        return app.load(tag.data("load-to"), tag.data("url"));

      if (tag.data("action") == "CREATE")
        return app.load(tag.data("load-to"), tag.data("url"));

      if (tag.data("action") == "STORE") {
        return app.store(tag);
      }

      if (tag.data("action") == "EDIT") {
        return app.load(tag.data("load-to"), tag.data("url"));
      }

      if (tag.data("action") == "UPDATE") {
        return app.update(tag);
      }

      if (tag.data("action") == "DELETE") {
        return app.delete(tag);
      }

      if (tag.data("action") == "REQUEST")
        return app.makeRequest(tag.data("method"), tag.data("href"));

      app.load(tag.data("load-to"), tag.data("href"));
    });

  $("form[id$='-show'] :input").prop("disabled", true);

  $(".html-editor-mini").summernote({
    height: "200px",
    toolbar: [
      ["style", ["bold", "italic", "underline", "clear"]],
      ["fontsize", ["fontsize"]],
      ["color", ["color"]],
      ["para", ["ul", "ol", "paragraph"]],
    ],
  });

  $(".html-editor").summernote({
    height: "200px",
    onImageUpload: function (files, editor, welEditable) {
      app.sendFile(files[0], editor, welEditable);
    },
  });
});

/* ====== Ajax error ======= */
$(document).ajaxError(function (event, jqxhr, settings, thrownError) {
  app.message(jqxhr);
});


/* ====== Ajax success ======= */
$(document).ajaxSuccess(function (event, xhr, settings) {
  app.message(xhr);
});


/* ====== Application Object ======= */
class myApp {
  constructor() {}
  async sendmail(forms) {
    var form = $(forms);

    if (form.valid() == false) {
      toastr.error("Please enter valid information.", "Error");
      return false;
    }

    var formData = new FormData($(forms));
    params = form.serializeArray();

    $.each(params, function (i, val) {
      formData.append(val.name, val.value);
    });

    var url = form.attr("action");

    $.ajax({
      url: url,
      type: "POST",
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "json",
      success: function (data, textStatus, jqXHR) {
        app.load(tag, data.redirect);
      },
    });
  }

  async index(id) {
    var tag = $(id);
    console.log(tag);
    await app.load(id, tag.data("url"));
  }

  async store(tag) {
    var form = $(tag.data("form"));
    var forms = tag.data("form");

    if (form.valid() == false) {
      toastr.error("Please enter valid information.", "Error");
      return false;
    }

    var formData = new FormData();
    var params = form.serializeArray();

    $.each(params, function (i, val) {
      formData.append(val.name, val.value);
    });

    $.each($(forms + " .html-editor"), function (i, val) {
      formData.append(val.name, $("#" + val.id).code());
    });

    var url = form.attr("action");

    $.ajax({
      url: url,
      type: "POST",
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "json",
      success: function (result) {
        app.load(tag.data("load-to"), result.url);
        app.index(tag.data("list"));
      },
    });
  }

  async update(tag) {
    var params;
    var form = $(tag.data("form"));
    var forms = tag.data("form");

    if (form.valid() == false) {
      toastr.error("Please enter valid information.", "Error");
      return false;
    }

    var formData = new FormData();
    params = form.serializeArray();

    $.each(params, function (i, val) {
      formData.append(val.name, val.value);
    });

    $.each($(forms + " .html-editor"), function (i, val) {
      formData.append(val.name, $("#" + val.id).code());
    });

    var url = form.attr("action");

    $.ajax({
      url: url,
      type: "POST",
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "json",
      success: function (result) {
        app.load(tag.data("load-to"), result.url);
        app.index(tag.data("list"));
      },
    });
  }

  async delete(tag) {
    var target = tag.data("url");
    return new Promise((resolve) => {
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false,
      }).then((willDelete) => {
        if (willDelete) {
          $.ajax({
            url: target,
            type: "DELETE",
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (result) {
              app.load(tag.data("load-to"), result.url);
              app.index(tag.data("list"));
            },
          });
        }
      });
    });
  }

  async load(tag, target) {
    console.log(tag);
    console.log(target);
    $(tag).load(target);
  }

  async sendFile(file, url, editor) {
    var data = new FormData();
    formData.append("file", file);
    $.ajax({
      data: data,
      type: "POST",
      url: url,
      cache: false,
      contentType: false,
      processData: false,
      success: function (objFile) {
        editor.summernote("insertImage", objFile.folder + objFile.file);
      },
      error: function (jqXHR, textStatus, errorThrown) {},
    });
  }

  makeRequest(method, target) {
    $.ajax({
      url: target,
      type: method,
    });
  }

  message(info) {
    if (info.status == 200) {
      return true;
    }

    var msgType;
    var msgTitle;
    var msgText = "";
    var response = "";

    if (info.status == 201) {
      msgTitle = "Success";
      msgType = "success";
      response = jQuery.parseJSON(info.responseText);
      msgText = response.message;
    } else if (info.status == 422) {
      msgType = "warning";
      msgTitle = info.statusText;
      response = jQuery.parseJSON(info.responseText);
      $.each(response.errors, function (key, val) {
        msgText += val + "<br>";
      });
    } else if (info.status >= 100 && info.status <= 199) {
      msgTitle = "Info";
      msgType = "info";
      msgText = info.statusText;
    } else if (info.status >= 202 && info.status <= 299) {
      msgTitle = "Success";
      msgType = "success";
      msgText = info.statusText;
    } else if (info.status >= 400 && info.status <= 499) {
      msgTitle = "Warning";
      msgType = "warning";
      msgText = info.statusText;
    } else if (info.status >= 500 && info.status <= 599) {
      msgType = "error";
      msgTitle = "Error";
      msgText = info.statusText;
    }

    if (msgType != undefined) toastr[msgType](msgText, msgTitle);

    return true;
  }
}

var app = new myApp();

/* ====== Window Scroll ======= */
$(window)
  .scroll(function () {
    var scrollDistance = $(window).scrollTop();
    $(".app-entry-form-section").each(function (i) {
      if ($(this).position().top <= scrollDistance) {
        $("#steps_nav a.step-item.active").removeClass("active");
        $("#steps_nav a.step-item").eq(i).addClass("active");
      }
    });
  })
  .scroll();
