$(function () {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid",
        errorPlacement: function(error,element) {
            return true;
        }
    });

    $('input[type="datetime"], .pickdatetime').datetimepicker({
        format:'Y-m-d H:i',
    }).prop('type','text');

    $('input[type="date"], .pickdate').datetimepicker({
        timepicker:false,
        format:'Y-m-d',
    }).prop('type','text');

    $('input[type="time"], .picktime').datetimepicker({
        datepicker:false,
        format:'H:i',
    }).prop('type','text');

    $('input[type="period"], .pickperiod').datetimepicker({
        format:'Y-m-d H:i',
    }).prop('type','text');


    $('body').on('click', '[data-action]', function(e) {
        e.preventDefault();

        var $tag = $(this);

        if ($tag.data('action') == 'CREATE')
            return app.create($tag.data('form'), $tag.data('load-to'), $tag.data('datatable'));

        if ($tag.data('action') == 'UPDATE')
            return app.update($tag.data('form'), $tag.data('load-to'), $tag.data('datatable'));

        if ($tag.data('action') == 'DELETE'){
            return app.delete($tag.data('href'), $tag.data('load-to'), $tag.data('datatable'), $tag.data('remove'));
        }
        if ($tag.data('action') == 'REQUEST')
            return app.makeRequest($tag.data('method'), $tag.data('href'));

        app.load($tag.data('load-to'), $tag.data('href'));
    });

    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
    });
});

$( document ).ajaxComplete(function() {
    $("form[id$='-show'] :input").prop("disabled", true);

    $('.html-editor-mini').summernote({
        height: "200px",
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
          ]
    });

    $('.html-editor').summernote({
        height: "200px",
        onImageUpload: function(files, editor, welEditable) {
            app.sendFile(files[0], editor, welEditable);
        }
    });

    $('input[type="datetime"], .pickdatetime').datetimepicker({
        format:'Y-m-d H:i',
    }).prop('type','text');

    $('input[type="date"], .pickdate').datetimepicker({
        timepicker:false,
        format:'Y-m-d',
    }).prop('type','text');

    $('input[type="time"], .picktime').datetimepicker({
        datepicker:false,
        format:'H:i',
    }).prop('type','text');

    $('input[type="period"], .pickperiod').datetimepicker({
        format:'Y-m-d H:i',
    }).prop('type','text');


});


$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
    app.message(jqxhr);
});

$( document ).ajaxSuccess(function( event, xhr, settings ) {
    app.message(xhr);
});

var app = {


    'sendmail' : function(forms) {
        var form = $(forms);

        if(form.valid() == false) {
            toastr.error('Please enter valid information.', 'Error');
            return false;
        }

        var formData = new FormData($(forms));
        params   = form.serializeArray();

        $.each(params, function(i, val) {
            formData.append(val.name, val.value);
        });

        var url  = form.attr('action');

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success:function(data, textStatus, jqXHR)
            {
                app.load(tag, data.redirect);
            }
        });
    },
    
    'create' : function(forms, tag, datatable) {
        var form = $(forms);

        if(form.valid() == false) {
            toastr.error('Please enter valid information.', 'Error');
            return false;
        }

        var formData = new FormData($(forms));
        params   = form.serializeArray();

        $.each(params, function(i, val) {
            formData.append(val.name, val.value);
        });

        $.each($(forms + ' .html-editor'), function(i, val) {
            formData.append(val.name, $('#'+val.id).code());
        });

        var url  = form.attr('action');

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success:function(data, textStatus, jqXHR)
            {
                app.message(jqXHR);
            }
        });
    },

    'update' : function(forms, tag, datatable) {
        var form = $(forms);

        if(form.valid() == false) {
            toastr.error('Please enter valid information.', 'Error');
            return false;
        }

        var formData = new FormData($(forms));
        params   = form.serializeArray();

        $.each(params, function(i, val) {
            formData.append(val.name, val.value);
        });

        $.each($(forms + ' .html-editor'), function(i, val) {
            formData.append(val.name, $('#'+val.id).code());
        });

        var url  = form.attr('action');

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success:function(data, textStatus, jqXHR)
            {
                app.load(tag, data.redirect);
                /*$(datatable).DataTable().ajax.reload( null, false );*/
            }
        });
    },

    'delete' : function(target, tag, datatable, remove) {

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(){
            var data = new FormData();
            $.ajax({
                url: target,
                type: 'DELETE',
                processData: false,
                contentType: false,
                dataType: 'json',
                success:function(data, textStatus, jqXHR)
                {
                    swal("Deleted!", data.message, "success");
                    app.load(tag, data.redirect);
                    /*$(datatable).DataTable().ajax.reload( null, false );*/
                    location.reload();
                    $("#"+remove).hide();
                },
            });
        });
    },

    'load' : function(tag, target) {
        console.log(tag + ' ' + target);
        $(tag).load(target);
    },

    'sendFile' : function(file, url, editor) {
        var data = new FormData();
        formData.append("file", file);
        $.ajax({
            data: data,
            type: "POST",
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            success: function(objFile) {
                editor.summernote('insertImage', objFile.folder+objFile.file);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
            }
        });
    },

    'makeRequest' : function(method, target) {
        $.ajax({
            url: target,
            type: method,
            success:function(data, textStatus, jqXHR)
            {
                app.message(jqXHR);
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                app.message(jqXHR);
            }
        });
    },

    'message' : function(info){

        if (info.status == 200) {
            return true;
        }

        var msgTyp;
        var msgTitle;
        var msgText = '';

        if (info.status == 201) {
            msgTitle   = 'Success';
            msgType    = 'success';
            response   = jQuery.parseJSON(info.responseText);
            msgText    = response.message;
        }else if (info.status == 422) {
            msgType    = 'warning';
            msgTitle   = info.statusText;
            response   = jQuery.parseJSON(info.responseText);
            $.each(response, function(key, val){
                msgText    += val + "<br>";
            });
        }else if (info.status >= 100 && info.status <= 199){
            msgTitle   = 'Info';
            msgType    = 'info';
            msgText    = info.statusText;
        }else if (info.status >= 202 && info.status <= 299){
            msgTitle   = 'Success';
            msgType    = 'success';
            msgText    = info.statusText;
        }else if (info.status >= 400 && info.status <= 499){
            msgTitle   = 'Warning';
            msgType    = 'warning';
            msgText    = info.statusText;
        }else if (info.status >= 500 && info.status <= 599){
            msgType    = 'error';
            msgTitle   = 'Error';
            msgText    = info.statusText;
        }

        if (msgType != undefined)
            toastr[msgType](msgText, msgTitle);

        return true;
    }
}

$('contact#submit').click(function() {
    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var subject = $("input#subject").val();
            var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "contact/send",
                type: "POST",
                dataType: 'json',
                data: {
                    name: name,
                    email: email,
                    subject: subject,
                    message: message
                },
                cache: false,
                success: function(data) {
                    console.log(data)
                    if (data.message=="error") {
                        // Fail message
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                        $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", Something is not right. Please try again.");
                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    } else {
                        // Success message
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                        $('#success > .alert-success').append("<strong>Your message has been sent. </strong>");
                        $('#success > .alert-success').append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    }
                }
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });
});

