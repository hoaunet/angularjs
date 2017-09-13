var application =angular.module('angular_app',[]);

application.controller('angular_controller',function($scope){
	$scope.form ={
		email : '',
		password: '',
		keepmein: false,
	}
	$scope.login = function(){

	}
	$scope.logout = function(){

	}
});