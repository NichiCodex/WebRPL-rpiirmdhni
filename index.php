<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Rafie Restu Ramadhani a.k.a NichiCodex">
		<meta name="description" content="Welcome to our Website! On this website you will find the latest information about the Department of Rekayasa Perangkat Lunak (RPL).">
		<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="./assets/img/favicon.png" type="image/png">
		<link rel="shortcut icon" href="./assets/img/favicon.png" type="image/png">
		<title>Rekayasa Perangkat Lunak (RPL)</title>
		<link rel="stylesheet" href="./assets/vendor/bootstrap-5.3.1-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/style.css">
		<link rel="stylesheet" href="./assets/vendor/font-awesome-pro-5.15.4/css/all.css">
		<script src="./assets/js/nichinav.js"></script>
	</head>
	<body class="bg-body-secondary">
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg sticky-top bg-white shadow border-bottom border-4 border-primary">
			<div class="container">
				<a class="navbar-brand" href="./">
				<img class="nichilogo" src="./assets/img/Logo-RPL.png" alt="Logo RPL">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" id="menuBtn" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i id="menuIcon" class="text-primary h3 mb-0 fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse pb-2 pb-lg-0 px-4" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="./">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./news/">News</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="nichiLearning">
							Learning Focus
							</a>
							<ul class="dropdown-menu shadow shadow-sm" id="dropdown-learning">
								<li>
									<a href="./learning/web-programming.php" class="dropdown-item">
										<i class="fad fa-browser text-primary"></i>&nbsp;Web Programming
                                    </a>
								</li>
								<li>
									<a href="./learning/desktop-programming.php"  class="dropdown-item">
										<i class="fad fa-desktop text-primary"></i>&nbsp;Desktop Programming
                                    </a>
								</li>
								<li>
									<a href="./learning/mobile-programming.php" class="dropdown-item">
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
		<div id="first-section" class="container my-5">
			<div class="row">
				<!--Banner-->
				<div class="col-md-12 col-xl-8 mb-4 mb-xl-0">
					<div id="carouselExample" class="carousel slide rounded">
						<div class="carousel-inner rounded">
							<div class="carousel-item rounded active">
								<img src="./assets/img/foto-lapangan.jpg" class="d-block w-100 nichibanner rounded" alt="News of RPL">
								<div class="carousel-caption d-none d-md-block">
									<h5>Welcome to our Website</h5>
									<p>On this website you will find the latest information about the Department of Rekayasa Perangkat Lunak (RPL).</p>
								</div>
							</div>
							<div class="carousel-item rounded">
								<img src="./assets/img/foto-lapangan-2.jpg" class="d-block w-100 nichibanner rounded" alt="News of RPL">
								<div class="carousel-caption d-none d-md-block">
									<h5>What is Rekayasa Perangkat Lunak?</h5>
									<p>Rekayasa Perangkat Lunak (RPL) or Software Engineering refers to the process of designing, developing, and maintaining software applications and systems.</p>
								</div>
							</div>
							<div class="carousel-item rounded">
								<img src="./assets/img/foto-depan.jpeg" class="d-block w-100 nichibanner rounded" alt="News of RPL">
								<div class="carousel-caption d-none d-md-block">
									<h5>What to Study in a Rekayasa Perangkat Lunak Course?</h5>
									<p>In Rekayasa Perangkat Lunak (RPL) or Software Engineering, students learn about designing, coding, and testing software applications for various industries and user needs.</p>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
				<!--Recent News-->
				<div class="col-md-12 col-xl-4">
					<h4 class="fw-bolder mb-2">What's new in <span class="text-under">RPL</span>?</h4>
					<div class="card border-0 shadow shadow-sm">
						<ul class="list-group list-group-flush border-0">
							<li class="list-group-item p-3">
								<div class="row align-items-center">
									<div class="col-4">
										<img src="./assets/img/post-prestasi-1.jfif" class="nichipost rounded" width="100" height="100" alt="News of RPL">
									</div>
									<div class="col">
										<p class="fw-bold">
											1st Place in Web Design Competition at the University of Muhammadiyah Tangerang (UMT).
										</p>
										<a class="btn btn-primary" href="./news/news-31efq2.php">
										<small>Read More&nbsp;<i class="fad fa-chevron-double-right"></i></small>
										</a>
									</div>
								</div>
							</li>
							<li class="list-group-item p-3">
								<div class="row align-items-center">
									<div class="col-4">
										<img src="./assets/img/post-prestasi-3.jpeg" class="nichipost rounded" width="100" height="100" alt="News of RPL">
									</div>
									<div class="col">
										<p class="fw-bold">
											1st place in the Student Competency Competition (LKS) in the SMK Level Web Design section.
										</p>
										<a class="btn btn-primary" href="./news/news-612ytp.php">
										<small>Read More&nbsp;<i class="fad fa-chevron-double-right"></i></small>
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--MainFirst-->
		<div id="main-first-section" class="container px-4">
			<img src="./assets/img/rekayasa-perangkat-lunak-banner.jpg" class="w-100 rounded shadow shadow-sm mb-4">
			<div class="px-4 py-5">
				<div class="row">
					<div class="col-md-12 col-xl-6 mb-4 mb-xl-0 text-center">
						<img src="./assets/img/vector-1.svg" class="nichisvg">
					</div>
					<div class="col-md-12 col-xl-6">
						<h4 class="fw-bolder mb-3">Rekayasa Perangkat Lunak (RPL) or Software Engineering Skills Competency Objectives</h4>
						<p>
							The purpose of the Rekayasa Perangkat Lunak (RPL) or Software Engineering Skills Competency in general refers to the contents of the National Education System Law (UU SPN) article 3 concerning National Education Goals and the elucidation of article 15 which states that vocational education is secondary education that prepares students especially to work in certain fields.
							<br><br>
							RPL stands for Rekayasa Perangkat Lunak or Software Engineering and is a major in Vocational High Schools (SMK). RPL is a major that studies and explores all ways of software development including creation, maintenance, management of software development organizations and quality management.
							<br><br>
							Not only that, Rekayasa Perangkat Lunak (RPL) or Software Engineering is also related to computer software, starting from making websites, applications, games and everything related to programming by mastering the programming language. The point is RPL will not be far from three things, namely Coding, Design and Algorithm which will be the key to the success of software engineering.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--Main Second Section-->
		<div id="main-second-section" class="bg-primary text-white">
			<div class="container">
				<div class="px-4">
					<div class="px-4 py-5">
						<div class="row">
							<div class="col-md-12 col-xl-6 order-md-2 order-sm-2 order-xl-1">
								<h4 class="fw-bolder mb-3">The Excellence of the RPL Department</h4>
								<ol type="1" class="mb-0">
									<li>
										Able to work in various fields because they are equipped with various knowledge and skills.
									</li>
									<li>
										Doing fieldwork will be easier because when learning, you often do practical work.
									</li>
									<li>
										The work is relatively easy and relaxed, it can be done anywhere and anytime using a connection, of course.
									</li>
									<li>
										More advanced than other majors and ordinary people out there because the RPL major understands and explores various technologies more.
									</li>
									<li>
										Able to set up a PC.
									</li>
									<li>
										Understand the function of computer components.
									</li>
								</ol>
							</div>
							<div class="col-md-12 col-xl-6 order-md-1 order-sm-0 order-xl-2 mb-4 mb-xl-0 text-center">
								<img src="./assets/img/vector-2.svg" class="nichisvg">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Main Third Section-->
		<div id="main-third-section" class="container px-4">
			<div class="px-4 py-5">
				<div class="row">
					<div class="col-md-12 col-xl-6 mb-4 mb-xl-0 text-center">
						<img src="./assets/img/vector-3.svg" class="nichisvg">
					</div>
					<div class="col-md-12 col-xl-6">
						<h4 class="fw-bolder mb-3">Rekayasa Perangkat Lunak (RPL) or Software Engineering Expertise Competency</h4>
						<ol>
							<li>C++ Language Programming</li>
							<li>Java Language Programming</li>
							<li>PHP & Mysql programming</li>
							<li>JavaScript programming</li>
							<li>AJAX Programming (*)</li>
							<li>Web Server Programming</li>
							<li>HTML programming</li>
							<li>CSS programming</li>
							<li>WebDesign</li>
							<li>Basic Algorithm</li>
							<li>Advanced Algorithm</li>
							<li>Logic gates</li>
							<li>Database</li>
							<li>DFD (Data Flow Diagrams)</li>
						</ol>
					</div>
				</div>
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
		<script src="./assets/vendor/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
		<script src="./assets/js/nichiscript.js"></script>
		<script src="./assets/js/nichisearch.js"></script>
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