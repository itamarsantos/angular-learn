<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body ng-app="meuApp" ng-controller="meuCtrl">
        <input type="text" ng-model="primeiroNome"><br>
        <input type="text" ng-model="segundoNome"><br><br>
        {{primeiroNome+" "+segundoNome}}

        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope){
                $scope.primeiroNome = "Itamar";
                $scope.segundoNome = "Jr";
            });
        </script>
    </body>
</html>
