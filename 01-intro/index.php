<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body>
        <div ng-app="">
            Meu nome é: <input type="text" ng-model="nome"><br><br><!-- Variável ng-model mostra em ng-bind -->
            <p ng-bind="nome"></p>
        </div>
    </body>
</html>
