$(function () {

    jQuery.validator.setDefaults({
        debug: true,
        success: "valid",
        errorPlacement: function(error,element) {
            return true;
        }
    });
    $('[data-toggle="tooltip"]').tooltip()
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

    $("#datepicker").datepicker({todayHighlight: true}); 
    $('#datepicker-pastdisabled').datepicker({ todayHighlight: true, startDate: "-3d", endDate: "+3d" });
    

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
/*
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
*/
    $('body').on('click', '[data-action]', function(e) {
        var $tag = $(this);
        if ($tag.data('action') == 'DELETE'){
            e.preventDefault();
            return app.delete($tag);
        }
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

/*
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
*/
});


$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
    app.message(jqxhr);
});

$( document ).ajaxSuccess(function( event, xhr, settings ) {
    app.message(xhr);
});
/*
function sendFile(file, url, editor) {
    var data = new FormData();
    data.append("file", file);
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
}
*/

var app = {

    'delete' : function(tag) {

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
                url: tag.attr('href'),
                type: 'DELETE',
                processData: false,
                contentType: false,
                dataType: 'json',
                success:function(data, textStatus, jqXHR)
                {
                    swal("Deleted!", data.message, "success");
                    $("#"+tag.data('remove')).hide();
                },
            });
        });
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

