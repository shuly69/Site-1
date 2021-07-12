<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
	<link href="{{ asset('assets/front/css/front.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/front/css/all.min.css') }}" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body>

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/front/img/simple-house-01.jpg') }}">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="{{ asset('assets/front/img/simple-house-logo.png') }}" alt="Logo" class="tm-site-logo" />
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Simple House</h1>
								<h6 class="tm-site-description">new restaurant in your city</h6>
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="{{ route('home') }}" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="{{ route('about') }}" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="{{ route('contacts') }}" class="tm-nav-link">Contact</a></li>
                                @if (Auth::check())
                                <li class="tm-nav-li"><a href="{{ route('logout') }}" class="tm-nav-link">Logout</a></li>
                                @else
                                <li class="tm-nav-li"><a href="{{ route('login.form') }}" class="tm-nav-link">Login</a></li>
                                @endif
								@if (Auth::check() && Auth::user()->is_admin)
                                <li class="tm-nav-li"><a href="{{ route('admin.main') }}" class="tm-nav-link">Admin</a></li>
                                @endif
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

        <main>
        @yield('content')
        </main>


		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Simple House

            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="{{ asset('assets/front/js/front.js') }}"></script>

	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();

				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>

<script>
    $(document).ready(function(){
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            }
          });
        }
    });
</script>
</body>
</html>
