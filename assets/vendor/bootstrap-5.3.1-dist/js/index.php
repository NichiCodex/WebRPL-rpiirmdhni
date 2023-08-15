<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Rafie Restu Ramadhani a.k.a NichiCodex">
		<meta name="description" content="Welcome to our Website! On this website you will find the latest information about the Department of Rekayasa Perangkat Lunak (RPL).">
		<link rel="icon" href="/WebRPL/assets/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/WebRPL/assets/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/WebRPL/assets/img/favicon.png" type="image/png">
		<link rel="shortcut icon" href="/WebRPL/assets/img/favicon.png" type="image/png">
		<title>404 Not Found - Rekayasa Perangkat Lunak (RPL)</title>
		<link rel="stylesheet" href="/WebRPL/assets/vendor/bootstrap-5.3.1-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="/WebRPL/assets/css/style.css">
		<link rel="stylesheet" href="/WebRPL/assets/vendor/font-awesome-pro-5.15.4/css/all.css">
		<script src="/WebRPL/assets/js/nichinav.js"></script>
	</head>
	<body class="bg-body-secondary">
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg sticky-top bg-white shadow border-bottom border-4 border-primary">
			<div class="container">
				<a class="navbar-brand" href="/WebRPL/">
				<img class="nichilogo" src="/WebRPL/assets/img/Logo-RPL.png" alt="Logo RPL">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" id="menuBtn" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i id="menuIcon" class="text-primary h3 mb-0 fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse pb-2 pb-lg-0 px-4" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="/WebRPL/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/WebRPL/news/">News</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="nichiLearning">
							Learning Focus
							</a>
							<ul class="dropdown-menu shadow shadow-sm" id="dropdown-learning">
								<li>
									<a href="/WebRPL/learning/web-programming.php" class="dropdown-item">
										<i class="fad fa-browser text-primary"></i>&nbsp;Web Programming
                                    </a>
								</li>
								<li>
									<a href="/WebRPL/learning/desktop-programming.php"  class="dropdown-item">
										<i class="fad fa-desktop text-primary"></i>&nbsp;Desktop Programming
                                    </a>
								</li>
								<li>
									<a href="/WebRPL/learning/mobile-programming.php" class="dropdown-item">
										<i class="fad fa-mobile-android text-primary"></i>&nbsp;Mobile Programming
                                    </a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="d-flex ml-auto nichisearch">
						<div class="position-relative w-100">
							<div class="input-group">
								<input class="form-control" type="search" placeholder="Search" aria-label="Search" id="article-search" autocomplete="off">
								<button class="btn btn-outline-primary" type="button"><i class="fad fa-search"></i></button>
							</div>
							<div id="article-dropdown" class="dropdown-menu mt-2 shadow shadow-sm" style="display: none; width: 100%;"></div>
						</div>
					</form>
				</div>
			</div>
		</nav>
		<!--First Section-->
		<div id="first-section" class="min-vh-100">
            <div class="container py-5 mb-5 text-center">
                <img src="/WebRPL/assets/img/vector-12.svg" class="nichisvg mb-4">
                <h3 class="fw-bold mb-4">404 Not Found</h3>
                <a class="btn btn-outline-primary" href="/WebRPL/">Back To Homepage&nbsp;<i class="fad fa-home"></i></a>
            </div>
		</div>
		<!--Ini Footer-->
		<footer class="bg-footer">
			<div class="container py-4">
				<div class="row">
					<div class="col-xl-6 col-md-6 col-6 text-start">
						<small>&copy; 2023 Rekayasa Perangkat Lunak (RPL).</small>
					</div>
					<div class="col-xl-6 col-md-6 col-6 text-end">
						<small>Made with <i class="fad fa-heart text-danger"></i> by <a href="https://instagram.com/rpiirmdhni" class="text-white text-decoration-none fw-bold">Rafie Restu Ramadhani</a>.</small>
					</div>
				</div>
			</div>
		</footer>
		<script src="/WebRPL/assets/vendor/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
		<script src="/WebRPL/assets/js/nichiscript.js"></script>
		<script src="/WebRPL/assets/js/nichisearch.js"></script>
		<script>
			let footer = document.querySelector(".bg-footer");
			
			window.addEventListener("scroll", function() {
				const isAtBottom = (window.innerHeight + window.scrollY) >= document.body.scrollHeight;
			
				if (isAtBottom) {
					footer.classList.add("sticky-bottom");
				} else {
					footer.classList.remove("sticky-bottom");
				}
			});
		</script>			
	</body>
</html>