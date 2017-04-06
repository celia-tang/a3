<!DOCTYPE html>
<html>
<head>
	<title>
        Scrabble Points Generator
    </title>

	<meta charset='utf-8'>
    <link href="/css/style.css" type='text/css' rel='stylesheet'>

    @stack('head')

</head>
<body>

	<header>
		<h1>Scrabble Points Generator</h1>
		<img src="images/scrabble.jpg" alt-"scrabble">
	</header>

	<section>
		@yield('content')
	</section>

    @stack('body')

</body>
</html>