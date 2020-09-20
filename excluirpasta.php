<?php
//nome da pasta
$dirnome = $_POST["codigo"];
//dirt
$dirt = '/';
//pega oque esta escrito no textarea
$text= $_POST["textarea"];
//verifica se o dirt existe
if (is_dir("$dirnome")){
    echo "Pasta existe";
    echo "<br>";
    //verifica se o arquivo existe
    if (rmdir("$dirnome"))
    {
        echo ("<strong>".strtoupper($dirnome)."</strong> deletado com sucesso!");
        echo "<br>";
        
    }
    else
    {
        echo ("Erro ao deletar $dirnome");
        echo "<br>";
    }
}
else{
    echo "Pasta não existe";
    echo "<br>";
}
echo "<br>";
echo "<a href=\"formulario.php\">Voltar</a>";