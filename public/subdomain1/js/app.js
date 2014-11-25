var subdomain1 = angular.module('subdomain1', ['ngRoute']);


subdomain1.config(function ($routeProvider,TrialService) {
		'use strict';
		
		$routeProvider.when('/', {
			controller: 'LoginCntrl',
			templateUrl: 'subdomain1/partials/login.html'
		})
		.when('/trial',{
			templateUrl: 'subdomain1/partials/trial.html',
			controller: 'LoginCntrl',
			resolve: {
				books : function(TrialService) {
					return TrialService.get();
				}
			}
		})
		.otherwise({
			redirectTo: '/'
		});
	});

