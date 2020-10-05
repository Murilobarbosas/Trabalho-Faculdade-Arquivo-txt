<?php

class form{
    private $pasta;
    private $arquivo;
    private $textarea;

    public function __construct($pasta,$arquivo, $textarea)
    {
        if(is_numeric($pasta)){
            $this->pasta = $pasta;
        }
        if(is_String($arquivo)){
            $this->arquivo = $arquivo;
        }
        if(is_String($arquivo)){
            $this->textarea = $textarea;
        }
    }

    public function setPasta($pasta){
        if(is_numeric($pasta))
            $this->pasta = $pasta;
    }

    public function getPasta(){
        return $this->pasta;
    }
    public function setArquivo($arquivo){
        if(is_string($arquivo))
            $this->arquivo = $arquivo;
    }

    public function getArquivo(){
        return $this->arquivo;
    }

    public function setTextarea($textarea){
        if(is_string($textarea))
            $this->textarea = $textarea;
    }

    public function getTextarea(){
        return $this->textarea;
    }

    public function pastaExist(){
        if(is_dir($this->pasta)){
            echo "Pasta existe";
            return true;
        }else{
            echo "Pasta não existe";
        }
    }

    public function arquivoExist(){
        if(file_exists("$this->getPasta"."/"."$this->getArquivo")){
            echo "Arquivo existe";
            return true;
        }else{
            echo "Arquivo não existe";
        }
    }

    public function deletarArquivo(){
        if(unlink("$this->getPasta"."/"."$this->getArquivo".".txt")){
            echo "Removido com sucesso";
            return true;
        }else{
            echo "Erro ao remover";
        }
    }
}
?>