<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hello, World!</title>
	</head>
	<!--<link rel="stylesheet" href="/css/color.css">-->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
	<style media="screen">
		body {
			margin: 0;
			min-height: 100vh;
			background-image: url(https://source.unsplash.com/random/1600x900);
			background-size: cover;
			background-repeat: no-repeat;

			font-family: 'Source Sans Pro', sans-serif;
		}

		.container {
			/*height: 100vh;*/
			position: fixed;
		  top: 0;
		  left: 0;
		  bottom: 0;
		  right: 0;
		  overflow: auto;
		  /*background: lime;*/
		}

		.title-container {
			padding: 1em;

			background: -moz-linear-gradient(top,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
			color: rgb(204, 204, 204);

		}

		.title-image-container {
			float: left;
			/*position: fixed;*/
			/*overflow: hidden;*/
		}

		.title-text-container {
			margin-left: 3.5rem;
			padding-top: .5em;
			height: 6em;

		}

		.title {
			/*padding-top: .5rem;*/
			/*position: relative;*/
			font-size: 3.5em;
			margin-left: .3em;

		}

		.image {
			width: 5em;
			height: 5em;
			padding: .5rem;
		}

		.article-container {
			padding-top: .7em;
			padding-bottom: .9em;
			text-align: center;
			top: 50%;
			position: fixed;
			transform: translateY(-50%);
			padding-left: 2em;
			background-color: rgba(255, 255, 255, 0.75);
			-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
		}

		.article-title-text {
			/*display: inline-block;*/
			text-align: left;
			/*position: fixed;*/
			/*top: 39%;*/
			/*transform: translateY(-50%);*/
			font-size: 2rem;
			margin: 0;
		}

		.article {
			/*position: fixed;*/
			text-align: left;
			/*top: 50%;*/
			/*transform: translateY(-50%);*/
			max-width: 50rem;
			margin: 0;

		}

	</style>
	<body>
		<div class="container">
			<div class="title-container">
				<div class="title-image-container">
					<img src="img/fb.png" alt="Facebook" class="image">
				</div>
				<div class="title-text-container">
					<a class="title">Lorem ipsum</a>
				</div>
			</div>
				<article class="article-container">
					<p class="article-title-text">lorem</p>
					<p class="article">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>
			</div>
		</div>
	</body>
</html>
