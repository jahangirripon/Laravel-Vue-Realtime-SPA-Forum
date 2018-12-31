<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forum</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
		<v-app dark>
			<app-home></app-home>	
		</v-app>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>