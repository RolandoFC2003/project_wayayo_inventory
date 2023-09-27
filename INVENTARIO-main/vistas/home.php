<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.box {
			background-image: url('logo.png');
			background-size: 100% 100%;
			background-repeat: no-repeat;
			margin-top: 100px;
			margin-left: 750px;
			position: relative;
			width: 200px;
			height: 200px;
			transform-style: preserve-3d;
			animation: animate 20s linear infinite;
		}

		@keyframes animate {
			0% {
				transform: perspective(1000px) rotateY(0deg);
			}

			100% {
				transform: perspective(1000px) rotateY(360deg);
			}
		}

		.box span {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			transform-origin: center;
			transform-style: preserve-3d;
			transform: rotateY(calc(var(--i)* 45deg)) translateZ(400px);
			-webkit-box-reflect: below 0px linear-gradient(transparent, transparent, #0004);
		}

		.box span img {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		@media (max-width: 768px) {
			.box {
				width: 150px;
				height: 150px;
				background-size: 100%;
				background-repeat: no-repeat;
				margin-top: 75px;
				margin-left: 100px;
				position: relative;
				width: 200px;
				height: 200px;
				transform-style: preserve-3d;
				animation: animate 20s linear infinite;

			}

			.box span {
				transform: rotateY(calc(var(--i)* 45deg)) translateZ(100px);
			}

			.box span img {
				width: 100%;
				/* Hace que las imágenes ocupen el 100% del contenedor */
				height: 100%;
				/* Hace que las imágenes ocupen el 100% del contenedor */
			}

		}
	</style>

</head>

<body class="body">


	<div class="container is-fluid">
		<h1 class="title">Home</h1>
		<h2 class="subtitle">¡Bienvenido <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?>!</h2>
	</div>

	<div class="box">
		<span style="--i:1;"><img src="img/image1.jpg" alt=""></span>
		<span style="--i:2;"><img src="img/image2.jpg" alt=""></span>
		<span style="--i:3;"><img src="img/image3.jpg" alt=""></span>
		<span style="--i:4;"><img src="img/image4.jpg" alt=""></span>
		<span style="--i:5;"><img src="img/image5.jpg" alt=""></span>
		<span style="--i:6;"><img src="img/image6.jpg" alt=""></span>
		<span style="--i:7;"><img src="img/image7.jpg" alt=""></span>
		<span style="--i:8;"><img src="img/image8.jpg" alt=""></span>
	</div>

</body>


</html>