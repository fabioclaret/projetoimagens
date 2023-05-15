<?php
    class Produto {
        private $pdo;

        function __construct()
        {
            $dbname = "mysql:dbname=produtoetim;host=localhost";
            $user = "root";
            $pass = "";
            try {
                $this->pdo = new PDO($dbname, $user, $pass);
            } catch (Exception $e) {
                echo "Erro" . $e;
            }
        }
    }
?>