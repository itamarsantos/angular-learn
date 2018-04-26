<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="angular.min.js"></script>
        <title>Curso Angular</title>
    </head>
    <body>
        <div ng-app="" ng-init="dolar=3.15">
            <input type="text" ng-model="real">
            <p>{{real}} reais = {{real/dolar}} dólares</p>
        </div>

        <!-- <div ng-app="" style="background-color: {{cor}}">
            A cor do fundo é: <input type="text" ng-model="cor">
            Nome: <input type="text" ng-model="nome"><br>
            Sobrenome: <input type="text" ng-model="sobrenome"><br><br>
            <p>{{nome + " " + sobrenome}}</p>
        </div> -->
    </body>
</html>
