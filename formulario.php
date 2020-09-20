<!DOCTYPE html>
<html>
    <head>
        <title>
            Formulario
        </title>
        <script>
            function Teste1(){
                document.form1.action = "arquivo.php";
            }
            function Teste2(){
                document.form1.action = "listar.php";
            }
            function Teste3(){
                if(confirm("Tem certeza")){
                    document.form1.action = "excluir.php";
                }
            }
            function Teste4(){
                if(confirm("Tem certeza")){
                    document.form1.action = "excluirpasta.php";
                }
            }
        </script>
    </head>
    <body>
        <div align="center">
            <form name="form1" method="POST">
                Codigos do Cliente: <br><input type="number" name="codigo"><br>
                Nome do arquivo: <br><input type="text" required name="arquivo"><br>
                Texto: <br><Textarea name="textarea" rows="10" cols="90" maxlength="500"></Textarea>
                <br>
                <input type="submit" name="Submit" value="Arquivo" OnClick="Teste1()">
                <input type="submit" name="Submit2" value="Listar" OnClick="Teste2()">
                <input type="submit" name="Submit3" value="Deletar Arquivo" OnClick="Teste3()">
                <input type="submit" name="Submit4" value="Deletar Pasta" OnClick="Teste4()">
            </form>
        </div>
    </body>
</html>