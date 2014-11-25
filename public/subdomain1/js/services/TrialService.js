subdomain1.factory("TrialService", function($http) {
  return {
    get: function() {
      return $http.get('/trial');    //This will call the laravel route trial
    }
  };
});