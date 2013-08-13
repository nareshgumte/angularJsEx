'use strict';

/* Controllers */

angular.module('myApp.controllers', ['ngResource']).
        controller('MyCtrl1', function($scope, $http, $resource) {
    $scope.names = 'testing';
    $scope.users = [];
    $http.defaults.useXDomain = true;
    delete $http.defaults.headers.common['X-Requested-With'];
    //$scope.users = $resource("http://localhost/angular-ex/usersList.php").get();
    $http({method: 'get', url: 'http://localhost/angular-ex/usersList.php', cache: false}).
            //        $http({method: 'get', url: 'http://202.65.136.24/intropost/api/user/feeds.xml?userId=85', cache: true}).
            success(function(data, status) {
        $scope.users = data;
    }).
            error(function(data, status) {
        console.log('Error Code:' + status);
    });
   

})
        .controller('MyCtrl2', [function() {

    }]);