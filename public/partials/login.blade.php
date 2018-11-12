
		<script type="text/javascript">
		var login_url = '';
		var register_url = '';
		</script>
		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                <div class="social">
																	<a class="circle facebook" href="{!!guard_url('login/facebook')!!}"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
											            <a class="circle twitter" href="{!!guard_url('login/twitter')!!}"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
											            <a class="circle google" href="{!!guard_url('login/google')!!}"><i class="fab fa-google-plus-square" aria-hidden="true"></i></a>
											            <a class="circle linkedin" href="{!!guard_url('login/linkedin')!!}"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="POST" action="{{guard_url('login')}}" data-redirect-to="{{guard_url('/')}}" accept-charset="UTF-8" id='form_login'>
                                    <input id="login_email" class="form-control mb-10" type="text" placeholder="Email / Username" name="email">
                                    <input id="login_password" class="form-control mb-10" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login mb-10" type="submit" value="Login">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="POST" data-remote="true" action="{{guard_url('register')}}" data-redirect-to="{{guard_url('/')}}" accept-charset="UTF-8" id='form_register'>
																<input id="register_name" class="form-control mb-10" type="text" placeholder="Name" name="Name">
																<input id="register_email" class="form-control mb-10" type="text" placeholder="Email" name="email">
																<input id="register_password" class="form-control mb-10" type="password" placeholder="Password" name="password">
																<input id="register_password_confirmation" class="form-control mb-10" type="password" placeholder="Password" name="password_confirmation">
                                <input class="btn btn-default btn-register mb-10" type="submit" value="Create account">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
    		      </div>
		      </div>
		  </div>
