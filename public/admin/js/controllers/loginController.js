admin.controller("LoginCntrl",function TodoCntrl($scope,$http)	
{
	var j;
	$http.get('/book').success(function(response){
		$scope.j=response;
	});
	console.log(j);
	
});

