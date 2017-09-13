<!Doctype html>
<html lang="en" ng-app="angular_app">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-Frame-Options" content="deny">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/style.css">

</head>
<body ng-controller="angular_controller">
<div>
	<div class="navigation">
		<a href="#/dashboard">Home</a>
		<a href="#/reports">Reports</a>
	</div>
	<div class="logout">
		<a href="#" ng-click="logout()"><i class="glyphicon-log-out"></i> Logout</a>
		
	</div>
</div>
<script type="text/javascript" src="scripts/angular.min.js"></script>
<script type="text/javascript" src="scripts/angular-route.min.js"></script>
<script type="text/javascript" src="scripts/app.js"></script>
<script type="text/javascript" src="scripts/config.js"></script>	
</body>
</html>