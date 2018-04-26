<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body ng-app="meuApp" ng-controller="meuCtrl">

        <p>{{texto}}</p>

        <p>{{texto2}}</p>

        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope){
                $scope.texto = 1;
                $scope.texto2 = '';
                if (angular.isString($scope.texto)) { // isNumber
                    $scope.texto2 = "Sim, é uma string!";
                } else {
                    $scope.texto2 = "Não é uma string!";
                }
            });
        </script>
    </body>
</html>
