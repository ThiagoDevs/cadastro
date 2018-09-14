 
                    
<?php

require_once '../controller/Db.php';

abstract class CrudUser extends DB {
    
    protected $tabela;
    public $nome;
    public $dividas;
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    
    public function setDividas($dividas) {
        $this->dividas = $dividas;
    }
    public function getDividas() {
        return $this->dividas;
    }
    
}
