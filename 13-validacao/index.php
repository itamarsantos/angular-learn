<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body ng-app="meuApp" ng-controller="meuCtrl">

        <form name="meuForm">
            <input type="email" name="email" ng-model="meuEmail" required>
            <span ng-show="meuForm.email.$dirty && meuForm.email.$invalid">(!)</span><br><br>
            <input type="submit" value="Enviar">
        </form>

        <script type="text/javascript">
            var app = angular.module('meuApp', []);
            app.controller('meuCtrl', function($scope){

            });
        </script>
    </body>
</html>
