<!DOCTYPE html>
<html lang="pt">
<head>

	@include('includes.head')


</head>

<body class="no-skin">

	@include('includes.header')

	@include('includes.sidebar')


	<div class="main-content">
		<div class="main-content-inner">

			@include('includes.breadcumbs')

			<div class="page-content">



				<div class="row">
					<div class="col-xs-12">

						@yield('content')

						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->

	<div class="footer">
		<div class="footer-inner">
			<div class="behind_container pull-right">
				<div class="behind"><img src="{{ asset('assets/images/logo1.png') }}" width="304" height="236"></div>
			</div>
			<div class="footer-content">
				@include('includes.footer')
			</div>
		</div>
	</div>
	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->


	@include('_partial.scripts')

	@stack('page-script')
</body>
</html>
