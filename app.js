'use strict';

'use strict';
var webApp = angular.module('webApp',['datatables','datatables.bootstrap']);
webApp.controller('ctrl',function($http,$scope,DTOptionsBuilder, DTColumnBuilder,DTColumnDefBuilder){
	$scope.dT = {};
	$scope.dT.dtOptions = DTOptionsBuilder.newOptions().withPaginationType('simple_numbers').withBootstrap();

	$scope.dT.dtColumnDefs = [

	        // DTColumnDefBuilder.newColumnDef(2).notSortable(),
	        // DTColumnDefBuilder.newColumnDef(3).notSortable()
	    ];

	 $http.get('timetable.json').then(function(res){
	 	$scope.schedules = res.data;
	 	console.log('fetched');
	 },function(err){
	 	alert(err.responseText);
	 });

	 console.log('You know what time it is');

});