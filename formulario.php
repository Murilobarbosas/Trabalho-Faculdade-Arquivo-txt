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
        </script>
    </head>
    <body>
        <div align="center">
            <form name="form1" method="POST">
                Codigos do Cliente: <br><input type="text" name="codigo"><br>
                Nome do arquivo: <br><input type="text" name="arquivo"><br>
                Texto: <br><Textarea name="textarea" rows="10" cols="90" maxlength="500"></Textarea>
                <br>
                <input type="submit" name="Submit" value="Arquivo" OnClick="Teste1()">
                <input type="submit" name="Submit2" value="Listar" OnClick="Teste2()">
            </form>
        </div>
    </body>
</html>