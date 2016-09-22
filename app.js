'use strict';

'use strict';
var webApp = angular.module('webApp',['datatables','datatables.bootstrap','ngCookies']);

webApp.controller('ctrl',function($http,$scope,DTOptionsBuilder, DTColumnBuilder,DTColumnDefBuilder,$filter,$cookies){
	$scope.dT = {};
	$scope.dT.dtOptions = DTOptionsBuilder.newOptions().withPaginationType('simple_numbers').withBootstrap();

	$scope.dT.dtColumnDefs = [

	        // DTColumnDefBuilder.newColumnDef(2).notSortable(),
	        // DTColumnDefBuilder.newColumnDef(3).notSortable()
	    ];

	 $http.get('timetable.json').then(function(res){
	 	$scope.original = res.data;
	 	$scope.schedules = res.data;

	 	//set search to stored params in csCookies
	 	if(typeof $cookies.get('csCookies') == 'string'){
		 	$scope.search_courses($cookies.get('csCookies'));
	 		$scope.search_string = $cookies.get('csCookies');
	 	}

	 	console.log('fetched');
	 },function(err){
	 	alert(err.responseText);
	 });


	 $scope.search_courses = function(pSearch){

	 	if(typeof pSearch == 'undefined' || !(pSearch.length  > 0)){
	 		alert('No search paramters specified,Please try again');
	 		return;
		 }
	 	var search_string = pSearch.split(',');
	 	$cookies.put('csCookies',pSearch);

	 	this.schedules = Array();
	 	$(search_string).each(function(i,val){

	 		var temp = $filter('filter')($scope.original,{$:val});
	 		$(temp).each(function(k,ptemp){
	 			if($scope.schedules.indexOf(ptemp)==-1){
	 				$scope.schedules.push(ptemp);
	 			}
	 		})
	 	})
	 	console.log(this.search_string);
	 };

	 $scope.clear = function(){
	 	$scope.schedules = $scope.original;
	 	$scope.search_string = null;
	 	$cookies.remove('csCookies');

	 }

	 // function filter(val,index,arr){
	 // 	if(arr){
	 // 		for (var i = 0; i < this.search_string.length; i++) {
	 // 			if(val.lecture)
	 // 		}
	 // 	}
	 // }



	 console.log('You know what time it is');

});