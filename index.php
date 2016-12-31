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
			position: fixed;
		  top: 0;
		  left: 0;
		  bottom: 0;
		  right: 0;
		  overflow: auto;
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
		}

		.title-text-container {
			margin-left: 3.5rem;
			padding-top: .5em;
			height: 6em;
		}

		.title {
			font-size: 3.5em;
			margin-left: .3em;
		}

		.image {
			width: 5em;
			height: 5em;
			padding: .5rem;
		}

		.article-container {
			padding-right: 1em;
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
			text-align: left;
			font-size: 2rem;
			margin: 0;
		}

		.article {
			text-align: left;
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
					<a class="title">단순한</a>
				</div>
			</div>
				<article class="article-container">
					<p class="article-title-text">예제에요!</p>
					<p class="article">
						흠.. 이것은 단순한 예제인 것 같군요.. 아마 당신은 이 예제를 보고 아주 많은 영감을 받았을 것 같지만 알게 뭐야. 내 이름은 만수인데. 무려 가득 찰 만(滿)에 물 수(水) 자에요! 정말 놀랍지 않나요? 뭐 이름에 물 수 자가 들어간다는 것 하나만으로도 알 수 있죠. 아무튼, 이 예제는 오픈소스는 아니지만 사용하실 때 제 이름을 꼭 언급해 주세요! 아 참, 그리고 이건 수익 창출을 목적으로 하는 프로젝트에는 사용할 수 없어요. 그리고 제가 한 말을 같이 써주셔야 해요. 알았죠? <br/><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">(CC BY-NC-SA 4.0)</a>
					</p>
				</article>
			</div>
		</div>
	</body>
</html>
