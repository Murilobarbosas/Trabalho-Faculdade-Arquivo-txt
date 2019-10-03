<?php
//nome da pasta
$dirname = $_POST["codigo"];
//diretorio
$diretorio = '/';
//nome do arquivo
$filename = $_POST["arquivo"];
//pega oque esta escrito no textarea
$text= $_POST["textarea"];
//verifica se o diretorio existe
if (is_dir("$dirname")){
    echo "Diretorio existe"."</BR>";
    //verifica se o arquivo existe
    if (file_exists("$dirname.$diretorio.$filename.txt")){
        echo "Arquivo existe"."</BR>";
        //cria um arquivo, sendo que ele coloca o ponteiro no final
        $myfile = fopen("$dirname.$diretorio.$filename.txt","a+");
        //escreve no arquivo .txt
        fwrite($myfile,$text."\r\n");
        //fecha o arquivo
        fclose($myfile);
    }
    else{
        echo "Arquivo nao existe"."</BR>";
        //cria um arquivo
        $myfile = fopen("$filename.txt",'w+');
        fwrite($myfile,$text);
        fclose($myfile);
    }
}
else{
    echo "Diretorio Não existe" . "<br>";
    if(mkdir($dirname)){
        echo "Diretorio criado!"."<br>";
        $filename = fopen("$dirname.$diretorio.$filename.txt","w+");
        fwrite($filename,$text);
        fclose($filename);
        echo "Arquivo criado"."</BR>";
    }
}
?>