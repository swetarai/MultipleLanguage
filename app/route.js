var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);

app.config(['$routeProvider',

    function($routeProvider) {

        $routeProvider.

            when('/', {

                templateUrl: 'actor/index.php',

                controller: 'AdminController'

            });
}]);