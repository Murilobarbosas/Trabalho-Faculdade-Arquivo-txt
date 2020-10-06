<?php
//nome da pasta
$dirnome = $_POST["codigo"];
//barra
$barra = "/";
//nome do arquivo
$filenome = $_POST["arquivo"];
//pega oque esta escrito no textarea
$dis = dir("$dirnome/");
echo "<div align=\"center\">";
if(is_dir($dirnome)){
    echo "Pasta existe";
    if (file_exists("$dirnome"."$barra"."$filenome.txt")){
        
        echo "<table border=\"1\">";
        echo "<thead><tr><th colspan=\"1\">Lista de Arquivos do diretório <strong>".$dirnome."</strong></th></tr></thead><br />";
        while(($arq = $dis->read()) !== false){
            echo "<tbody>";
            echo "<tr><td><a href='".$dirnome.$barra.$arq."'>".$arq."</a></td><br />";
            echo "</tr></tbody>";
        }
        $dis -> close();
    }
    else{
        echo "Nao tem arquivo"."</br>";
    }
}
else{
    echo "Pasta não existe";
}
echo "</div>";
echo "<a href=\"formulario.php\">Voltar</a>";