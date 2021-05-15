<!DOCTYPE html>
<html>
<head>
	<title>E Comm Title</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
{{ View::make('header') }}
@yield('content')
{{ View::make('footer') }}
</body>
<style type="text/css">
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}
	img.slider-img{
		height: 400px !important
	}
	.slider-text{
		background-color: #35443585 ! important
	}.trending-image{
		height: 100px;
	}.trending-item{
		float: left;
		width: 20%;
	}.trendig-wrapper{
		margin: 30px;
	}.detail-img{
		height: 200px;
	}.searchbox{
		width: 500px;
	}
</style>
<script type="text/javascript">
</script>
</html>