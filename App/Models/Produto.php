<?php

    namespace App\Models;

    class Produto {
        protected $db;

        public function __construct(\PDO $db) {
            $this->db = $db;
        }

        public function getProdutos(){
            $query = "Select id, descricao, preco from tb_produtos";
            return $this->db->query($query)->fetchAll();
        }
    }