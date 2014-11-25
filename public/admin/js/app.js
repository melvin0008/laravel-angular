var admin = angular.module('admin', ['ngRoute']);


admin.config(function ($routeProvider) {
		'use strict';
		
		$routeProvider.when('/', {
			controller: 'LoginCntrl',
			templateUrl: 'admin/partials/login.html'
		})
		// .when('/books',{
		// 	templateUrl: 'admin/partials/books.html',
  //   		controller: 'LoginCntrl',
  //   		resolve: {
  //     				books : function(BookService) {
  //       			return BookService.get();
		//       }
  //   		}

		// })
		.otherwise({
			redirectTo: '/'
		});
	});

// admin.factory("BookService", function($http) {
//   return {
//     get: function() {
//       return $http.get('/books');
//     }
//   };
//});