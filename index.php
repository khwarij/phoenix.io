<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: sans-serif;
		} 
		body{
		  padding-top: 160px;
		  background-color: #000;

		} 
		h1{
		text-align:center;
		 color: white;
		}
		#searchbox{
			width: 50%;
			margin: auto;
		}
		
		#searchbox{
			width:48%;
			margin: auto;
		} 
		#searchbox input,button{
			width: 75%;
			border:2px solid white;
			border-right: 0px;
			font-size: 18px;
			padding: 13px;
			background: transparent;
			color: white;
		} 
		#searchbox button{
			width:25%;
			background: #eee;
			color:black;
			float: right;
			border-left: 0px;
			color: black;
		}
	</style>
</head>

<body>
	<div id="searchbox">
		<h1>Phoenix</h1>
	<form action=="index.php" method="post">
		<input placeholder="Search" type="text">
		<button>SEARCH</button>
	</div>
	</form>

	
</body>
</html>
