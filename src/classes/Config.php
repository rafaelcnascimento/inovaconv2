<?php 

class Config 
{

    public static function getServicos ()
    {
        $conn = Db::conectar();

        $stmt = $conn->prepare("SELECT * FROM servicos");

        $stmt->execute();

        $servicos = $stmt->fetchAll();

        return $servicos;
    }

}
