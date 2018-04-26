<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body ng-app="meuApp" ng-controller="meuCtrl">

        <!-- focar::ng-focus desfocar::ng-blur -->
        <button ng-click="acao()">{{texto}}</button>

        <div ng-show="mostrar">
            <h2>Menu:</h2>
            <div>Pizza</div>
            <div>Feijão</div>
            <div>Arroz</div>
        </div>

        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope){
                $scope.mostrar = 0;
                $scope.texto = "Mostrar";
                $scope.acao = function() {
                    if ($scope.mostrar == 0) {
                        $scope.mostrar = 1;
                        $scope.texto = "Não mostrar";
                    } else {
                        $scope.mostrar = 0;
                        $scope.texto = "Mostrar";
                    }
                }
            });
        </script>
    </body>
</html>
