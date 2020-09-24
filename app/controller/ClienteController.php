<?php

namespace controller;

include_once "Conexao.php";

use model\Cliente;

class ClienteController{

    private static $instance;
    private $conexao;

    private function __construct(){
        $this->conexao = Conexao::getInstance();
    }

    public static function getInstance(){
        if (self::$instance == null){
            self::$instance = new ClienteController();
        }
        return self::$instance;
    }

    public function inserir(Cliente $cliente){
        $sql = "INSERT INTO cliente (nome, telefone, email) VALUES 
                (:nome, :telefone, :email)";

        $p_sql = $this->conexao->prepare($sql);
        $p_sql->bindValue(":nome", $cliente->getNome());
        $p_sql->bindValue(":telefone", $cliente->getTelefone());
        $p_sql->bindValue(":email", $cliente->getEmail());

        return $p_sql->execute();
    }

    public function retornaTodos(){
        $lstCliente = array();
        $sql = "SELECT * FROM cliente ORDER BY nome";
        $p_sql = $this->conexao->query($sql, \PDO::FETCH_ASSOC);
        foreach ($p_sql as $row){
            $cliente = $this->preencherDadosCliente($row);
            $lstCliente[] = $cliente;
        }
        return $lstCliente;
    }

    private function preencherDadosCliente($row){
        $cliente = new Cliente();
        $cliente->setId($row['id']);
        $cliente->setNome($row['nome']);
        $cliente->setTelefone($row['telefone']);
        $cliente->setEmail($row['email']);
        return $cliente;
    }

    public function excluir($id){
        $sql = "DELETE FROM cliente WHERE id = :id";
        $p_sql = $this->conexao->prepare($sql);
        $p_sql->bindValue(":id", $id);
        return $p_sql->execute();
    }

}
