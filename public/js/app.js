var app = angular.module('designz', ['duScroll']);


app.config(function($interpolateProvider) { $interpolateProvider.startSymbol('(('); $interpolateProvider.endSymbol('))'); });

