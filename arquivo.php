<?php
//nome da pasta
$dirnome = $_POST["codigo"];
//diretorio
$barra = "/";
//nome do arquivo
$filenome = $_POST["arquivo"];
//pega oque esta escrito no textarea
$text= $_POST["textarea"];
//verifica se o diretorio existe
if (is_dir("$dirnome")){
    echo "Diretorio existe"."</br>";
    //verifica se o arquivo existe
    if (file_exists("$dirnome"."$barra"."$filenome.txt")){
        echo "Arquivo existe"."</br>";
        //cria um arquivo, sendo que ele coloca o ponteiro no final
        $myfile = fopen("$dirnome"."$barra"."$filenome.txt","a+");
        //escreve no arquivo .txt
        fwrite($myfile,$text."\r\n");
        //fecha o arquivo
        fclose($myfile);
        echo "Arquivo sobrescrito";
    }
    else{
        echo "Arquivo não existe"."</br>";
        //cria um arquivo
        $myfile = fopen("$filenome.txt",'w+');
        //escreve no arquivo .txt
        fwrite($myfile,$text);
        //fecha o arquivo
        fclose($myfile);
        echo "Arquivo Criado";
    }
}
else{
    echo "Diretorio Não existe" . "<br>";
    if(mkdir($dirnome)){
        echo "Diretorio criado!"."<br>";
        //cria um arquivo, sendo que ele coloca o ponteiro no final
        $filenome = fopen("$dirnome.$barra"."$filenome.txt","w+");
        //escreve no arquivo .txt
        fwrite($filenome,$text);
        //fecha o arquivo
        fclose($filenome);
        echo "Arquivo criado"."</br>";
    }
}
echo "<br>";
echo "<a href=\"formulario.php\">Voltar</a>";
?>