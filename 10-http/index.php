<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body ng-app="meuApp" ng-controller="meuCtrl">
        <h2>Lista de nomes</h2>
        <ul>
            <li ng-repeat="x in nomes">{{x.nome}} tem {{x.idade}} anos de idade</li>
        </ul>

        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope, $http){
                $scope.nomes = [];
                $http.get('http://phpdozeroaoprofissional.com.br/testeangularjs.php').then(function(response){
                    $scope.nomes = response.data.resultado;
                });
            });
        </script>
    </body>
</html>
