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

$diretor = dir($dirname);
 
echo "Lista de Arquivos do diretório '<strong>".$dirname."</strong>':<br />";
while($arquivo = $diretor -> read()){
echo "<a href='".$dirname.$diretorio.$arquivo."'>".$arquivo."</a><br />";

echo "<input type='submit' value = 'Editar' OnClick='Editar()'>";
echo "<input type='submit' value = 'Excluir' OnClick='window.alert()'>";
echo "<input type='submit' value = 'Excluir Tudo' OnClick='window.confirm()'>";
}
$diretor -> close();


function Editar(){
    header(Editar.php);
}
function Excluir(){
    header(formulario.php);
}
function Excluirtudo(){
    header(formulario.php);
}