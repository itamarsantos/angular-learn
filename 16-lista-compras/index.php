<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body ng-app="meuApp" ng-controller="meuCtrl">

        <h2>Lista de compras</h2>

        <input type="text" ng-model="addTexto">
        <button ng-click="addItem()">+</button><br>
        <span>{{aviso}}</span>

        <ul>
            <li ng-repeat="p in lista">
                {{p}} <button ng-click="removeItem($index)">-</button><!-- $index manda como param o num atual -->
            </li>
        </ul>

        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope){

                $scope.lista = ["Leite", "Pão"];

                $scope.addItem = function() {
                    $scope.aviso = '';
                    if ($scope.addTexto != '') {
                        if ($scope.lista.indexOf($scope.addTexto) == -1) {
                            $scope.lista.push($scope.addTexto);
                        } else {
                            $scope.aviso = "Ops, o item já foi adicionado!";
                        }
                    }
                    $scope.addTexto = '';
                }

                $scope.removeItem = function(value) {
                    $scope.aviso = '';
                    $scope.lista.splice(value, 1);
                }
            });
        </script>
    </body>
</html>
