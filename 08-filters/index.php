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

        <select ng-model="ordenarPor">
            <option value="nome">Nome</option>
            <option value="pais">País</option>
        </select><hr>

        <table border="0" width="500px">
            <tr>
                <th align="left">Nome</th>
                <th align="left">País</th>
            </tr>
            <tr ng-repeat="x in nomes | orderBy:ordenarPor">
                <td>{{x.nome}}</td>
                <td>{{x.pais}}</td>
            </tr>
        </table>



        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope){
                $scope.ordenarPor = 'pais';
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
