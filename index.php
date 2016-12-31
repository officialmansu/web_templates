<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hello, World!</title>
	</head>
	<link rel="stylesheet" href="/css/color.css">
	<style media="screen">
		body {
			margin: 0;
			min-height: 100vh;
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

		.title-image-container {
			float: left;
			/*position: fixed;*/
			/*overflow: hidden;*/
		}

		.title-text-container {
			/*margin-left: 2rem;*/
			/*padding: 2em;*/
			height: 6em;

		}

		.title {
			/*padding-top: .5rem;*/
			/*position: relative;*/
			font-size: 3.5em;

		}

		.image {
			width: 5em;
			height: 5em;
			padding: .5rem;
		}

		.article-container {
			text-align: center;
			top: 50%;
			position: fixed;
			transform: translateY(-50%);
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
