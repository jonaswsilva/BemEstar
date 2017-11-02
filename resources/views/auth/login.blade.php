
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login - Clínica Bem Esstar</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />


		<!-- text fonts -->
		<link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" />

		<link rel="stylesheet" href="{{ asset('assets/css/aplication.css') }}" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<!-- <i class="ace-icon fa fa-heartbeat purple"></i> -->
									<img height="168px" width="198px" src="/assets/images/logo1.png" />
									<!-- <span class="light-grey">Clínica</span> -->
									<!-- <span class="green">Bem</span> -->
									<!-- <span class="green" id="id-text2">Estar</span> -->
								</h1>
								<h4 class="purple" id="id-company-text">Clínica multidisciplinar</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header purple lighter bigger">
												<i class="ace-icon fa fa-user-md green"></i>
												Entre com suas informações
											</h4>

											<div class="space-6"></div>
												@if($errors->any())
												<p>Alguns erros ocorreram:</p>

												<ul>
													@foreach($errors->all() as $message)
													<li>{{$message}}</li>
													@endforeach
												</ul>
												@endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
												<fieldset>
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="E-mail" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
													</label>
                        </div>

													<label class="block clearfix">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          	<span class="block input-icon input-icon-right">
															<input type="password" id="password" name="password" class="form-control" placeholder="Senha" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
														@if ($errors->has('password'))
																<span class="help-block">
																		<strong>{{ $errors->first('password') }}</strong>
																</span>
														@endif


                            </div>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Lembrar-me</span>
														</label>

														<button type="submit" class="width-35 pull-right btn btn-sm btn-purple">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Entrar</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110"></span>
											</div>

											<div class="space-6"></div>


										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="white">
													<i class="ace-icon fa fa-arrow-left"></i>
												    Esqueci minha senha
												</a>
											</div>

											<!-- <div>
												<a href="#" data-target="#signup-box" class="white">
													Registrar
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div> -->
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<!-- Recuperar senha -->
								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Recuperar senha
											</h4>

											<div class="space-6"></div>
											<p>
												E-mail para recuperação
											</p>

                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                          {{ csrf_field() }}
												<fieldset>
													<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
														@if ($errors->has('email'))
																<span class="help-block">
																		<strong>{{ $errors->first('email') }}</strong>
																</span>
														@endif
													</label>
												</div>

													<div class="clearfix">
														<button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Enviar!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="{{ URL::previous() }}" data-target="#login-box" class="back-to-login-link white">
												Voltar para login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<!-- cadastro de novo usuario -->
								<!-- <div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												Cadastro de novo usuário
											</h4>

											<div class="space-6"></div>
											<p> Entre com seus dados: </p>

                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                          {{ csrf_field() }}

												<fieldset>
													<label class="block clearfix">
														<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
														@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
														</div>
													</label>

													<label class="block clearfix">
														<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
														<span class="block input-icon input-icon-right">
															<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Usuário" />
															<i class="ace-icon fa fa-user"></i>
														</span>
														@if ($errors->has('name'))
																<span class="help-block">
																		<strong>{{ $errors->first('name') }}</strong>
																</span>
														@endif
													</div>
													</label>

													<label class="block clearfix">
														<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password"  value="{{ old('password') }}" class="form-control" placeholder="Senha" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
														@if ($errors->has('password'))
																<span class="help-block">
																		<strong>{{ $errors->first('password') }}</strong>
																</span>
														@endif
													</div>
													</label>

													<label class="block clearfix">
														<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password_confirmation" class="form-control" placeholder="Repetir senha" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
														@if ($errors->has('password_confirmation'))
																<span class="help-block">
																		<strong>{{ $errors->first('password_confirmation') }}</strong>
																</span>
														@endif
													</div>
													</label>

                          <label class="block clearfix">
														<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                              <span class="block input-icon input-icon-right">
                                  <select id="role" type="role" class="form-control" value="{{ old('role') }}" name="role">
                                    <option value="1">Administrador</option>
                                    <option value="2">Secretária</option>
                                    <option value="3">Fisioterapeuta</option>
                                  </select>
                              </span>
														</div>
                          </label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<button type="submit" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Registrar</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link white">
												<i class="ace-icon fa fa-arrow-left"></i>
												voltar para login
											</a>
										</div>
									</div> /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<!-- <div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div> -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});



			//you don't need this, just used for changing background
			jQuery(function($) {
        $('#btn-login-blur').on('click', function(e) {
 				$('body').attr('class', 'login-layout blur-login');
 				$('#id-text2').attr('class', 'white');
 				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
        $('#btn-login-dark').on('click', function(e) {
 				$('body').attr('class', 'login-layout');
 				$('#id-text2').attr('class', 'white');
 				$('#id-company-text').attr('class', 'blue');
				e.preventDefault();
			 });

			});
		</script>
	</body>
</html>
