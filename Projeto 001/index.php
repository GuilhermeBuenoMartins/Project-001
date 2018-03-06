<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-default"><div><input type="button" class="btn btn-danger" value="Sair"></div></nav>
        
        
        <div class="container">
            <h1> Employee Manager</h1><br>
            <form class="col-sm-3 col-sm-offset-1">
                <input class="form-control" type="text" id="formNameText" placeholder="Nome"/>
                <br>
                <label class="radio-inline">Sexo: </label>
                <label class="radio-inline">
                    <input type="radio" name="optionsRadios" id="inlineRadios1" value="option1" checked>
                    Feminino
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optionsRadios" id="inlineRadios2" value="option2" checked>
                    Masculino
                </label>
                <br><br>
                <input class="form-control" type="email" id="formEmailText" placeholder="Email"/>
                <br>
                <input class="form-control" type="password" id="formPasswordText" placeholder="Senha"/>
                <br>
                <select class="form-control">
                    <option></option>
                    <option>Presidente</option>
                    <option>Vice-Presidente</option>
                    <option>Diretor(a) Financeiro</option>
                    <option>Diretor(a) de Recursos Humanos</option>
                    <option>Diretor(a) Serviços</option>
                    <option>Psicologo(a)</option>
                    <option>Secretario(a)</option>
                    <option>Técnico em T.I.</option>
                  </select>
                <br>
                <button type="submit" class="btn btn-warning">Modificar</button>
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
            </form>
 
            <form class="col-sm-3 col-offset-6">
                <input type="number" class="form-control" placeholder="Id"/><br>
                <input class="form-control" type="text" id="GetNameText" placeholder="Nome"/>
                <br>
                <input class="form-control" type="text" id="GetNameText" placeholder="Sexo">
                <br><br>
                <input class="form-control" type="email" id="GetEmailText" placeholder="Email"/>
                <br>
                <input class="form-control" type="password" id="GetPasswordText" placeholder="Senha"/>
                <br>
                <select class="form-control">
                    <option></option>
                    <option>Presidente</option>
                    <option>Vice-Presidente</option>
                    <option>Diretor(a) Financeiro</option>
                    <option>Diretor(a) de Recursos Humanos</option>
                    <option>Diretor(a) Serviços</option>
                    <option>Psicologo(a)</option>
                    <option>Secretario(a)</option>
                    <option>Técnico em T.I.</option>
                  </select>
                <br>
                <button type="submit" class="btn btn-info">Pesquisar por ID</button>
                <button type="submit" class="btn btn-danger">Deletar por ID</button>
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
