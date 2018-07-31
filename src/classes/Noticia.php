<?php
class Noticia
{
    public static function publicar($titulo,$corpo,$url_capa,$colaborador_id)
    {          
        $conn = Db::conectar();

        $stmt = $conn->prepare("INSERT INTO noticias (titulo,corpo,capa,colaborador_id) VALUES (:titulo, :corpo, :capa, :colaborador_id)");

        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':corpo', $corpo);
        $stmt->bindParam(':capa', $url_capa);
        $stmt->bindParam('colaborador_id', $colaborador_id);

        $stmt->execute();
    } 
    
    public static function ultimas()
    {
        $conn = Db::conectar();

        $stmt = $conn->prepare("SELECT * FROM noticias ORDER BY id DESC LIMIT 5");

        $stmt->execute();

        $noticias = $stmt->fetchAll();

        return $noticias;
    }

    public static function get($id)
    {
        $conn = Db::conectar();

        $stmt = $conn->prepare("SELECT * FROM noticias WHERE id = :id");

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $noticia = $stmt->fetch();

        return $noticia;
    }
}
