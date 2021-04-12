<?php 
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Дизайн мебель </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



	<!-- <script type="text/javascript" src=	"script.js"></script> -->
</head>
<body>
	<div class="header">
		
	
	<div class="container">
		<div class="navbar">
			<div class="logo">
				<a href="index.html"><img src="{{ URL::to('/img/logo.png') }}" width="200px" style="padding-top: 30px;" ></a>
			</div>
			<nav>
				<ul id="MenuItems">
					<li><a href="index.html">Главная</a></li>
					<li><a href="products.html">Товары</a></li>
					<li><a href="">О нас</a></li>
					<li><a href="">Контакты</a></li>
					<li><a href="">Аккаунт</a></li>
					<li class="cart">
						<a href="cart.html">
							<ion-icon name="basket"></ion-icon>Корзина <span>0 </span>
						</a>
					</li>
					<!-- <li>
						<div class="lan_container">
							<span class="en"><b>Rus</b></span>
							<input type="checkbox" class="check"></input>
							<span class="en"><b>Kaz</b></span>
						</div>
					</li> -->
				</ul>
			</nav>
			<!-- <img src="images/cart.png" width="30px" height="30px;"> -->
			<img src="{{ URL::to('/img/images/menu.png') }}" width="30px" height="30px;" class="menu-icon" onclick="menutoggle()">
		</div>
		<div class="row">
			<div class="col-2">
				<h1><b>Мебель от Производителя</b></h1>
				<p>Предлагает вам ленейку новинок корпусной, мягкой мебели, столов, стульев и штор для создания уюта в доме</p>
				<a href="" class="btn">Перейти сейчас &#8594;</a>
			</div>
			<div class="col-2">
				<img src="{{ URL::to('/img/image1.png') }}">
			</div>
		</div>
	</div>
	</div>

	<div>
		<form action="upload" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="file" name="file">
			<button type="submit">Upload</button>
		</form>
	</div>

	<div class="categories">
		<div class="small-container">
			<div class="row">
			<div class="col-3">
				<img src="{{ URL::to('/img/category-1.jpg') }}">
			</div>
			<div class="col-3">
				<img src="{{ URL::to('/img/category-2.jpg') }}">
			</div>	
			<div class="col-3">
				<img src="{{ URL::to('/img/category-3.jpg') }}">
			</div>		
			</div>
		</div>
	</div>

	<div class="small-container">
		<h2 class="tittle">Рекомендуем Вам</h2>
		<div class="row">
			<div class="col-4">
				<a href="products details.html"><img src="{{ URL::to('/img/images/productt-1.jpg') }}"></a>
				<h4>Қыз-Жібек</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-o"></i>
				</div>

				<p>KZT 135 000.0</p>
			</div>	
			
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-2.jpg') }}">
				<h4>РозаБэлла</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o" ></i>
					<i class="fa fa-star-o"></i>
				</div>

				<p>KZT 490 000.0</p>
			</div>	
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-3.jpg') }}">
				<h4>Сакура </h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o"></i>
				</div>

				<p>KZT 359 990.0</p>
			</div>	
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-4.jpg') }}">
				<h4>Версаче 2</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-o"></i>
				</div>

				<p>KZT 159 990.0</p>
			</div>	

		</div>
		<h2 class="tittle">Новое Поступление</h2>
				<div class="row">
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-5.jpg') }}">
				<h4>Оптима 2</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-o"></i>
				</div>

				<p>KZT 354 990.0</p>
			</div>	
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-6.jpg') }}">
				<h4>Фэдерика</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o" ></i>
					<i class="fa fa-star-o"></i>
				</div>

				<p>KZT 1 127 000.0</p>
			</div>	
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-7.jpg') }}">
				<h4>Корона 2</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o"></i>
				</div>

				<p>KZT 553 990.0</p>
			</div>	
			<div class="col-4">
				<a href="products details.html"><img src="{{ URL::to('/img/images/productt-8.jpg') }}"></a>
				<h4>РозаБэлла 3</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-o"></i>
				</div>

				<p>KZT 556 990.0</p>
			</div>	
					<div class="row">
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-9.jpg') }}">
				<h4>РозаБэлла 3</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-o"></i>
				</div>

				<p>KZT 2000.0</p>
			</div>	
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-10.jpg') }}">
				<h4>РозаБэлла 3</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o" ></i>
					<i class="fa fa-star-o"></i>
				</div>

				<p>KZT 2000.0</p>
			</div>	
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-11.jpg') }}">
				<h4>РозаБэлла 3</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o"></i>
				</div>

				<p>KZT 2000.0</p>
			</div>	
			<div class="col-4">
				<img src="{{ URL::to('/img/images/productt-12.jpg') }}">
				<h4>РозаБэлла 3</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-o"></i>
				</div>

				<p>KZT 2000.0</p>
			</div>	

		</div>

		</div>
	</div>


	<!-- Offer -->
	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<div>
					  <canvas id="myChart" width="400" height="200"></canvas>
					</div>
				</div>
				<div class="col-2">
					<p>Эксклюзивно Доступно в Дизайн Мебель</p>
					<h1>ТОП ПРОДАЖИ</h1>
					<small>Предлагает вам ленейку новинок корпусной, мягкой мебели, столов, стульев и штор для создания уюта в доме<br> </small>
					<a href="" class="btn">Заказывай Прямо Сейчас &#8594;</a>
				</div>
			</div>
		</div>
	</div>

	<div class="" style="padding-top: 20px;">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<h3>Статистика Покупок клиентов</h3>
					<div>
					  <canvas id="myChart2" width="100" height="100"></canvas>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3>История Продаж за год</h3>
					  <canvas id="myChart3" width="100" height="100"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left" ></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<div class="rating">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="{{ URL::to('/img/images/user-7.jpg') }}">
					<h3>Deadpool</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left" ></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<div class="rating">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<img src="{{ URL::to('/img/images/user-8.png') }}">
					<h3>Nursultan Nazarbaev</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left" ></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<div class="rating">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star"></i>
					</div>
					<img src="{{ URL::to('/img/images/user-6.jpg') }}">
					<h3>Cristiano Ronaldo</h3>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/logo-oppo.png">
				</div>
				<div class="col-5">
					<img src="images/logo-coca-cola.png">
				</div>
				<div class="col-5">
					<img src="images/logo-oppo.png">
				</div>
				<div class="col-5">
					<img src="images/logo-paypal.png">
				</div>
				<div class="col-5">
					<img src="images/logo-philips.png">
				</div>
			</div>
		</div>
	</div> -->


	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Скачавайте Наше Приложения</h3>
					<p>Скачивайте приложения на IOS и Android</p>
					<div class="app-logo">
						<img src="{{ URL::to('/img/images/play-store.png') }}">
						<img src="{{ URL::to('/img/images/app-store.png') }}">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="{{ URL::to('/img/logo-white.png') }}">
					<p>Мебель от Производителя <br>Предлагает вам ленейку новинок корпусной, мягкой мебели, столов, стульев и штор для создания уюта в доме</p>
				</div>
				<div class="footer-col-3">
					<h3>Партнёры</h3>
					<ul>
						<li>Kaspi Bank</li>
						<li>AlfaBank</li>
						<li>ATF Bank</li>
						<li>Престиж Мебель</li>
					</ul>
				</div>
				<div class="footer-col-3">
					<h3>Follow us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>Rember</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyrigth">Copyrigth 2021 - Arsen Ulykbekov</p>
		</div>
	</div>




	<script >
		var MenuItems = document.getElementById("MenuItems");
		MenuItems.style.maxHeight = "0px";

		function menutoggle() {
			if (MenuItems.style.maxHeight == "0px") {
				MenuItems.style.maxHeight = "220px";
			}
			else{
				MenuItems.style.maxHeight = "0px";
			}
		}




		function onloadCartsNumbers(){
			let productNumber = localStorage.getItem('cartNumbers');
			if (productNumber) {
				document.querySelector('.cart span').textContent =productNumber;
			}
		}
		onloadCartsNumbers();

	</script>
	<script type="text/javascript">
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx,{
			type:'bar',
					data:{
						labels:["Қыз-Жібек","РозаБэлла","Сакура","Версаче 2","РозаБэлла 3"],
					datasets:[{
						label:'Популярые заказы',
						data:[93,88,72,66,65],
						backgroundColor:[
						'rgba(255,206,36,1)',
						'rgba(255,129,102,1)',
						'rgba(234,162,235,1)',
						'rgba(75,192,192,1)',
						'rgba(153,102,255,1)',
						'rgba(75,192,192,1)',

						],
					}
				]
			},
			options:{
				scales:{
					yAxes:[{
						ticls:{
							beginAtZero:true
						}
					}]
				}
			}

		});
	</script>

	<script type="text/javascript">
		var ctx = document.getElementById("myChart2");
		var myChart = new Chart(ctx,{
			type:'pie',
					data:{
						labels:["Куханный Гарнитур","Стулья","Спальный Гарнитур","Шкафы","Кровати"],
					datasets:[{
						label:'Популярые заказы',
						data:[22,15,35,13,15],
						backgroundColor:[
						'rgba(255,206,36,1)',
						'rgba(255,129,102,1)',
						'rgba(234,162,235,1)',
						'rgba(75,192,192,1)',
						'rgba(153,102,255,1)',
						'rgba(75,192,192,1)',

						],
					}
				]
			},
			options:{
				scales:{
					yAxes:[{
						ticls:{
							beginAtZero:true
						}
					}]
				}
			}

		});
	</script>

	<script type="text/javascript">
		var ctx = document.getElementById("myChart3");
		var myChart = new Chart(ctx,{
			type:'line',
					data:{
						labels:["2017","2018","2019","2020"],
					datasets:[{
						label:'Статистика продаж',
						data:[150,176,180,130],
						backgroundColor:[
						'rgba(255,206,36,1)',
						'rgba(255,129,102,1)',
						'rgba(234,162,235,1)',
						'rgba(75,192,192,1)',
						'rgba(153,102,255,1)',
						],
					}
				]
			},
			options:{
				scales:{
					yAxes:[{
						ticls:{
							beginAtZero:true
						}
					}]
				}
			}

		});
	</script>
</body>
</html>
 