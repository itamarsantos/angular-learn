<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body ng-app="meuApp" ng-controller="meuCtrl">
        <!-- Filter :: Coloca-se a barra | [filtro] -->
        <h2>Lista de nomes</h2>

        <select ng-model="ordenarPor" ng-options="x.nome for x in opcoes">
        </select>

        <hr>

        <table border="0" width="500px">
            <tr>
                <th align="left" ng-repeat="op in opcoes">{{op.nome | uppercase}}</th>
            </tr>
            <tr ng-repeat="x in nomes | orderBy:ordenarPor.valor">
                <td>{{x.nome}}</td>
                <td>{{x.pais}}</td>
            </tr>
        </table>



        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope){
                $scope.opcoes = [{nome:'Nome do sujeito', valor:'nome'}, {nome:'País de origem', valor:'pais'}];
                $scope.nomes = [
                    {nome:'Itamar', pais:'Brasil'},
                    {nome:'João', pais:'Japão'},
                    {nome:'José', pais:'China'},
                    {nome:'Rafael', pais:'França'},
                    {nome:'Domenico', pais:'Estados Unidos'},
                    {nome:'Felipe', pais:'Canadá'},
                    {nome:'Bento', pais:'Rússia'},
                ];
            });
        </script>
    </body>
</html>
