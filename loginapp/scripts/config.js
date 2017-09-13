application =angular.module('angular_app',[]);

application.config(function($routeProvider){
	
	$routeProvider.when('/',{
		templateUrl:'partials/login.html',
		controller:'angular_controller',
	});
	
});