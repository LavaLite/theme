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

    $('body').on('click', '[data-action]', function(e) {

        var $tag = $(this);

        if ($tag.data('action') == 'CREATE'){
            e.preventDefault();
            return app.create($tag);
        }

        if ($tag.data('action') == 'STORE'){
            e.preventDefault();
            return app.store($tag);
        }

        if ($tag.data('action') == 'EDIT'){
            e.preventDefault();
            return app.edit($tag);
        }

        if ($tag.data('action') == 'UPDATE'){
            e.preventDefault();
            return app.update($tag);
        }

        if ($tag.data('action') == 'DELETE'){
            e.preventDefault();
            return app.delete($tag);
        }

        if ($tag.data('action') == 'REQUEST'){
            e.preventDefault();
            return app.makeRequest($tag);
        }

        if ($tag.data('action') == 'LOAD'){
            e.preventDefault();
            return app.load($tag);
        }

        
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

    'store' : function(tag) {
        var form = tag.data('form');

        if($(form).valid() == false) {
            toastr.error('Please enter valid information.', 'Error');
            return false;
        }

        var formData = new FormData();
        params   = $(form).serializeArray();

        $.each(params, function(i, val) {
            formData.append(val.name, val.value);
        });

        $.each($(form + ' .html-editor'), function(i, val) {
            formData.append(val.name, $('#'+val.id).code());
        });

        var url  = $(form).attr('action');

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
                $('#modal-entry').modal('hide');
                $table.bootstrapTable('refresh');
            }
        });    
    },

    'create' : function(tag) {
        $('#modal-entry').html(modalHtml);
        $('#modal-entry').load(tag.attr('href'));
        $('#modal-entry').modal('show');
    },

    'edit' : function(tag) {
        $('#modal-entry').html(modalHtml);
        $('#modal-entry').load(tag.attr('href'));
        $('#modal-entry').modal('show');
    },

    'update' : function(tag) {
        var form = tag.data('form');

        if($(form).valid() == false) {
            toastr.error('Please enter valid information.', 'Error');
            return false;
        }

        var formData = new FormData();
        params   = $(form).serializeArray();

        $.each(params, function(i, val) {
            formData.append(val.name, val.value);
        });

        $.each($(form + ' .html-editor'), function(i, val) {
            formData.append(val.name, $('#'+val.id).code());
        });

        var url  = $(form).attr('action');

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
                $('#modal-entry').modal('hide');
                $table.bootstrapTable('refresh');
            }
        });
    },

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
            var target = tag.attr("href");
            var remove = tag.data("remove");
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
                    $table.bootstrapTable('refresh');
                },
            });
        });
    },

    'load' : function(tag, target) {
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

var modalHtml = '<div class="modal-dialog  modal-lg">\
                        <div class="modal-content">\
                            <div class="modal-header">\
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\
                                <h4 class="modal-title"></h4>\
                            </div>\
                            <div class="modal-body">\
                                <p>Loading &hellip;</p>\
                            </div>\
                            <div class="modal-footer"> \
                                \
                            </div>\
                        </div>\
                    </div>';
