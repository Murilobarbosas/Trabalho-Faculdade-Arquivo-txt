<!DOCTYPE html>
<html>
    <head>
        <title>
            Formulario
        </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script>
            function Teste1(){
                document.form1.action = "form.php";
                document.form1.action = "arquivo.php";
            }
            function Teste2(){
                document.form1.action = "form.php";
                document.form1.action = "listar.php";
            }
            function Teste3(){
                document.form1.action = "form.php";
                if(confirm("Tem certeza")){
                    
                    document.form1.action = "excluir.php";
                }
            }
            function Teste4(){
                document.form1.action = "form.php";
                if(confirm("Tem certeza")){
                    document.form1.action = "excluirpasta.php";
                }
            }
        </script>
    </head>
    <body>
        <div align="center">
            <form name="form1" method="POST" >
                Codigos do Cliente: <br><input class="form-control" type="number" name="codigo"><br>
                Nome do arquivo: <br><input class="form-control" type="text" required name="arquivo"><br>
                Texto: <br><Textarea class="form-control" name="textarea" rows="10" cols="90" maxlength="500"></Textarea>
                <br>
                <input type="submit" class="btn" name="Submit" value="Salvar Arquivo" OnClick="Teste1()">
                <input type="submit" class="btn btn-primary" name="Submit2" value="Listar Arquivos" OnClick="Teste2()">
                <input type="submit" class="btn btn-warning" name="Submit3" value="Deletar Arquivo" OnClick="Teste3()">
                <input type="submit" class="btn btn-danger" name="Submit4" value="Deletar Pasta" OnClick="Teste4()">
            </form>
        </div>
    </body>
</html>