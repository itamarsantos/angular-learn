<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body ng-app="meuApp" ng-controller="meuCtrl">
        <h2>Receita de bolo</h2>
        <ul>
            <li ng-repeat="ing in ingredientes">
                {{ing.qt}} de {{ing.nome}}
            </li>
        </ul>

        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope){
                //$scope.ingredientes = ["farinha", "ovo", "açúcar", "manteiga", "fermento"];
                $scope.ingredientes = [
                    {'nome':'Farinha', 'qt':'200g'},
                    {'nome':'Ovo', 'qt':'3 und'},
                    {'nome':'Açúcar', 'qt':'500g'}
                ];
            });
        </script>
    </body>
</html>
