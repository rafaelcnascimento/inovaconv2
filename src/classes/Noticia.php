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

    public static function todas()
    {
        $conn = Db::conectar();

        $stmt = $conn->prepare("SELECT n.*,c.nome as colaborador  FROM noticias n INNER JOIN colaboradores c on c.id = n.colaborador_id");

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

    public static function editar($id,$titulo,$corpo,$url_capa)
    {
        $conn = Db::conectar();

        $stmt = $conn->prepare("UPDATE noticias SET titulo = :titulo, corpo = :corpo, capa = :capa WHERE id = :id");

        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':corpo', $corpo);
        $stmt->bindParam(':capa', $url_capa);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $mensagem = ' <br><div class="alert alert-success">
                        <center>
                            Notícia editada com sucesso
                        </center>
                    </div>';    

        return $mensagem;
    }

    public static function deletar($id,$capa)
    {
        $conn = Db::conectar();

        $stmt = $conn->prepare("DELETE FROM noticias WHERE id = :id");
        
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        unlink($capa);

        $mensagem = '<br><div class="alert alert-success">
                        <center>
                            <strong>Noticia removida com sucesso</strong>
                        <center>    
                    </div>';
        
        return $mensagem;
    }
}
