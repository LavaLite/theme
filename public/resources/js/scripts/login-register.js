/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 *
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    });
    $('.error').removeClass('alert alert-danger').html('');

}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('Login with');
    });
     $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);

}

function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);

}

$( "#form_login" ).submit(function( event ) {

  // Stop form from submitting normally
  event.preventDefault();

  // Get some values from elements on the page:
  var $form = $( this ),
    url = $form.attr( "action" ),
    redirectTo = $form.data( "redirect-to" );

    window.axios.post(url, {
       email: $form.find( "#login_email" ).val(),
       password: $form.find( "#login_password" ).val()
     })
    .then(function (response) {
        console.log(response);
        window.location.replace(redirectTo);
    })
    .catch(function (error) {
        console.log(error.response);
        obj = error.response.data.errors;
        error = obj[Object.keys(obj)[0]];
        shakeModal(error);
    });
});

$( "#form_register" ).submit(function( event ) {

  // Stop form from submitting normally
  event.preventDefault();

  // Get some values from elements on the page:
  var $form = $( this ),
    email = $form.find( "#login_email" ).val(),
    password = $form.find( "#login_password" ).val(),
    url = $form.attr( "action" ),
    redirectTo = $form.data( "redirect-to" );

    window.axios.post(url, {
      name: $form.find("#register_name").val(),
      email: $form.find("#register_email").val(),
      password: $form.find("#register_password").val(),
      password_confirmation: $form.find( "#register_password_confirmation" ).val(),
    })
    .then(function (response) {
          console.log(response);
          window.location.replace(redirectTo);
    })
    .catch(function (error) {
        shakeModal(error.message);
        console.log(error);
    });
});


function shakeModal(message){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html(message);
             $('input[type="password"]').val('');
             setTimeout( function(){
                $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000 );
}
