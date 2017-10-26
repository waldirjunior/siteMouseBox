var app = angular.module('playApp', ['ui.router']);

app.config(['$stateProvider', '$urlRouterProvider', '$locationProvider', function($stateProvider, $urlRouterProvider, $locationProvider) {
  $locationProvider.hashPrefix(''); // by default '!'
  $locationProvider.html5Mode(true);

  $stateProvider
    .state('home', {
        url: '/',
        controller: 'playCtrl',
        templateUrl:"/play/app/views/home.html"
    })
    .state('listas', {
        url: '/listas',
        controller: 'listasCtrl',
        templateUrl:"/play/app/views/listas.html"
    })
    .state('genero', {
        url: '/genero',
        controller: 'generoCtrl',
        templateUrl:"/play/app/views/genero.html"
    })
    .state('eventos', {
        url: '/eventos',
        controller: 'eventosCtrl',
        templateUrl:"/play/app/views/eventos.html"
    })
    .state('video', {
        url: '/video',
        controller: 'videoCtrl',
        templateUrl:"/play/app/views/video.html"
    })
    .state('videodetalhes', {
        url: '/video/detalhes',
        controller: 'videoDCtrl',
        templateUrl:"/play/app/views/video-detalhes.html"
    });

  $urlRouterProvider.otherwise('/');

}]);


app.controller('playCtrl', function($scope, $http,$location, $stateParams) {
    $scope.cssside = "scrollable padder-lg w-f-md";
});

app.controller('listasCtrl', function($scope, $http,$location, $stateParams) {
    $scope.cssside = "w-f-md";

});
app.controller('generoCtrl', function($scope, $http,$location, $stateParams) {
    $scope.cssside = "w-f-md";

});
app.controller('eventosCtrl', function($scope, $http,$location, $stateParams) {
    $scope.cssside = "scrollable";

});
app.controller('videoCtrl', function($scope, $http,$location, $stateParams) {
    $scope.cssside = "scrollable padder-lg";

});
app.controller('videoDCtrl', function($scope, $http,$location, $stateParams) {
    $scope.cssside = "scrollable wrapper-lg";

});