<?php
//nome da pasta
$dirnome= $_POST["codigo"];
//dirt
$dirt = "/";
//nome do arquivo
$filenome = $_POST["arquivo"];
//pega oque esta escrito no textarea
$text= $_POST["textarea"];
//verifica se o dirt existe
if (is_dir("$dirnome")){
    echo "Pasta existe";
    echo "<br>";
    //verifica se o arquivo existe
    if (file_exists("$dirnome"."$dirt"."$filenome.txt")){
        echo "Arquivo existe";
        echo "<br>";
        //deleta arquivo
        if (unlink("$dirnome"."$dirt"."$filenome.txt"))
        {
            echo ("Deletado $filenome.txt com sucesso!");
            echo "<br>";
        }
        else
        {
            echo ("Erro ao deletar $filenome.txt");
            echo "<br>";
        }
    }
    else{
        echo "Arquivo nao existe";
        echo "<br>";
    }
}
else{
    echo "Pasta não existe";
    echo "<br>";
}
echo "<br>";
echo "<a href=\"formulario.php\">Voltar</a>";