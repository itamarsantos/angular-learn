<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body ng-app="meuApp" ng-controller="meuCtrl">

        <div ng-include="'topo.html'"></div>
        <hr>
        <div ng-include="'pagina1.html'"></div>

        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope){
                $scope.nomes = ["Itamar", "Daenerys", "João"];
            });
        </script>
    </body>
</html>
