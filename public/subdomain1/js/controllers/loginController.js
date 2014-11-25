subdomain1.controller("LoginCntrl",function TodoCntrl($scope,$http)
{
	//Another way to talk to the laravel route directly
	var trialvar;
	$http.get('/trial').success(function(response){
		$scope.trialvar=response;
	});
	console.log(trialvar);
	
});

