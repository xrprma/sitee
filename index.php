<? session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>SakhaHostel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<82e9bb65-f8a1-4a9f-9bb1-645133a0022c>" type="text/javascript"></script>
    <!-- <script src="mapbasics.js" type="text/javascript"></script> -->
	<style>
        body, html {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
        }
        #map {
            width: 100%;
            height: 90%;
        }
        .login {
        	position: absolute;
        	height: 500px;
        	background: red;
        	top: 10%;
        	left: calc((100% - 50% )/ 2);
        }
    </style>
</head>
<?
	$connect = mysqli_connect('localhost', 'u2043899_default', '8sWp54lWL8aGh8Pz', 'u2043899_default');
?>
<body style="background-color: #F3F3F4;">
	<div class="row">
		<div class="col-4" style="background: #FFFFFF; height: 90px;">
			<div class="mx-auto" style="height: 100%; width: 50%;">
				<div>
					<img src="img/logo.png" style="vertical-align: middle;">
				</div>
			</div>
		</div>
		<div class="col-4" style="background: #FFFFFF; height: 90px;">
			
		</div>
		<div class="col-4" style="background: #FFFFFF; height: 90px;">
			<div style="margin-left: 65%;">
				<a href="#" style="text-decoration: none;" class="loginbtn">Вход</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col" style="background: #E3E0F3; height: 500px;">
			
		</div>
		<div class="col-5" style="background: #E3E0F3; height: 500px;">
			<div style="display: flex; height: 40px; margin-top: 26%;">
				<input type="text" class="form-control" placeholder="Поиск">
  				<button class="btn btn-outline-secondary" type="button" style="background: #3D5CFF;">Поиск</button>
  			</div>
		</div>
		<div class="col" style="background: #E3E0F3; height: 500px;">
			
		</div>
	</div>
	<div class="row" style="background-color: #F3F3F4;">
		<div class="col" style="background: #F3F3F4; height: 500px;">
			
		</div>
		<div class="col-10" style="height: 500px;">
			<div style="margin-top: 40px;" class="ms-2"><h5>Популярное</h5></div>
			<div style="margin-top: 40px;" class="row">
				<div class="col ms-2">
					<div style="background: #D9D9D9; height: 270px;" class="rounded-top"></div>
					<div style="background: white; height: 110px;" class="rounded-bottom">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
				<div class="col ms-2">
					<div style="background: #D9D9D9; height: 270px;" class="rounded-top"></div>
					<div style="background: white; height: 110px;" class="rounded-bottom">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
				<div class="col ms-2">
					<div style="background: #D9D9D9; height: 270px;" class="rounded-top"></div>
					<div style="background: white; height: 110px;" class="rounded-bottom">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col" style="background: #F3F3F4; height: 500px;">
			
		</div>
	</div>
	<div class="row" style="background-color: #F3F3F4; margin-top: 200px;">
		<div class="col" style="background: #F3F3F4; height: 300px;">
			
		</div>
		<div class="col-10" style="height: 300px;">
			<div style="width: 250px;" class="mx-auto"><h5>Отзывы наших клиентов</h5></div>
			<div style="margin-top: 40px;" class="row">
				<div class="col ms-2">
					<div style="background: white; height: 200px;" class="rounded">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
				<div class="col ms-2">
					<div style="background: white; height: 200px;" class="rounded">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
				<div class="col ms-2">
					<div style="background: white; height: 200px;" class="rounded">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col" style="background: #F3F3F4; height: 300px;">
			
		</div>
	</div>
	<div class="row" style="background-color: #F3F3F4; margin-top: 200px;">
	</div>
	<div class="row" style="height:500px;" style="background-color: #F3F3F4;">
		<div class="col-2" style="background: #F3F3F4; height: 500px;">
			
		</div>
		<div class="col-8" style="background: #F3F3F4; height: 500px;">
			<div id="map"></div>
		</div>
		<div class="col-2" style="background: #F3F3F4; height: 500px;">
			
		</div>
	</div>
	<div class="row">
		<div class="col-4" style="background: #E3E0F3; height: 500px;">
			
		</div>
		<div class="col-4" style="background: #E3E0F3; height: 500px;">
			
		</div>
		<div class="col-4" style="background: #E3E0F3; height: 500px;">
			
		</div>
	</div>
	<div class="row">
		<div class="col-4" style="background: #FFFFFF; height: 350px;">
			
		</div>
		<div class="col-4" style="background: #FFFFFF; height: 350px;">
			
		</div>
		<div class="col-4" style="background: #FFFFFF; height: 350px;">
			
		</div>
	</div>

	<div class="loginblc col-6" style="display: none;">
		<form method="POST" action="logincheck.php">
			<h1 style="margin-left:auto; margin-right:auto;">Log-In</h1>
			<input style="margin-top: 10px;" placeholder="Логин" name="user">
			<input style="margin-top: 10px;" placeholder="Пароль" name="pass">
			<button style="margin-top: 10px; position: relative; left: 50%; transform: translate(-50%, 0);">Войти</button>
		</form>
	</div>
	<script>
		//вход
		let btn1 = document.querySelector(.loginbtn);
		let blc1 = document.querySelector(.loginblc);
		btn1.onclick = function () {
			blc1.style.display = "block";
		}

		//регистрация



		var myMap;

		// Дождёмся загрузки API и готовности DOM.
		ymaps.ready(init);

		function init () {
		    // Создание экземпляра карты и его привязка к контейнеру с
		    // заданным id ("map").
		    myMap = new ymaps.Map('map', {
		        // При инициализации карты обязательно нужно указать
		        // её центр и коэффициент масштабирования.
		        center: [62.03, 129.73], // Москва
		        zoom: 12
		    }, {
		        searchControlProvider: 'yandex#search'
		    });

		    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
		            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
		        ),

		    <?
				$connect = mysqli_connect('localhost', 'u2043899_default', '8sWp54lWL8aGh8Pz', 'u2043899_default');
				$query = mysqli_query($connect, "SELECT * FROM places");
				$number_rows = mysqli_num_rows($query);
			?>

			<? for($i=0; $i<$number_rows; $i++) {$result = mysqli_fetch_assoc($query); ?> 

			
		    myPlacemarkWithContent = new ymaps.Placemark([<? echo $result["lat"]?>, <? echo $result["lon"]?>], {
		            
		        }, {
		            // Опции.
		            // Необходимо указать данный тип макета.
		            iconLayout: 'default#imageWithContent',
		            // Своё изображение иконки метки.
		            iconImageHref: 'img/logo.png',
		            // Размеры метки.
		            iconImageSize: [110, 33],
		            // Смещение левого верхнего угла иконки относительно
		            // её "ножки" (точки привязки).
		            iconImageOffset: [-24, -24],
		            // Смещение слоя с содержимым относительно слоя с картинкой.
		            iconContentOffset: [15, 15],
		            // Макет содержимого.
		            iconContentLayout: MyIconContentLayout
		        });
		    myMap.geoObjects.add(myPlacemarkWithContent);
		    <? } ?>
			}
	</script>
</body>
</html>
