<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Produto {
    
    private $_nome;
    private $_preco;
    //Outras vari�veis
    
    function __construct($nome, $preco) {
        $this->_nome = $nome;
        $this->_preco = $preco;
        //Outras vari�veis
    }
            
    function calculaLucro() {
        //Implementa��o
    }
    
    function calculaDepreciacao($periodo) {
        //Implementa��o
    }
    
    public function get_nome() {
        return $this->_nome;
    }
    public function get_preco() {
        return $this->_preco;
    }
    public function set_nome($_nome) {
        $this->_nome = $_nome;
        return $this;
    }
    public function set_preco($_preco) {
        $this->_preco = $_preco;
        return $this;
    }
}
class Testa {
    
    function exemplo() {
        $p = new Produto('Carro', 36700);
        
        $lucro = $p->calculaLucro();
        
        $nome = $p->set_nome('Mesa Escritorio');
        $preco = $p->set_preco(589.90);
        
        $depreciacao = $p->calculaDepreciacao(365);
        
        $valor = $lucro - $depreciacao;
		
		//Praticamente a mesma coisa que fazer isso: 
		//$p->_nome = 'Sof�'; 
		//se a vari�vel fosse p�blica
    }
    
}
