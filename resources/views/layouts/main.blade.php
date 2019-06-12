<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shorten Your Urls</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>

    <style>
    	
    </style>

</head>
<body>

	<header>
		<div class="logo"><a href="/">EngZ</a></div>
		<nav class="nav">
			<ul class="navbar">
				<li><a href="#">About</a></li>
				<li><a href="https://github.com/m7moudm7mmed/EngZ">Github</a></li>
			<ul>
		</nav>
	</header>

    <section>
    	@yield("content")
    </section>
	
	<footer id="footer"> All copyrights © reserved 2018-2019 </footer>
    
</body>
</html>