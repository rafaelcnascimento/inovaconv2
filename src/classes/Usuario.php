<?php 

require 'Db.php';

class Usuario 
{
    public function controle($tipo_usuario)
    {
        switch ($tipo_usuario) {
            case 1:
                if (!isset($_SESSION['usuario']))
                {
                    header("location:loginPainel");
                } 

                if (!$_SESSION['usuario']->is_admin)
                {
                    echo ' <div>
                               <center>
                                   Acesso negado
                               </center>
                           </div>';
                       
                    die();
                }
                break;

            case 2:
                if (!isset($_SESSION['usuario']))
                {
                    header("location:loginPainel");
                } 

                if ($_SESSION['usuario']->is_admin)
                {
                    echo ' <div>
                               <center>
                                   Acesso negado
                               </center>
                           </div>';
                       
                    die();
                }
                break;
        }
    }

    public static function login($email,$senha)
    {
        $conn = Db::conectar();

        $stmt = $conn->prepare("SELECT * FROM colaboradores WHERE email = :email");
        
        $stmt->bindParam(':email', $email);

        $stmt->execute();

        $dados = $stmt->fetch();

        if (!$dados) 
        {
            echo '<div class="erro">
                    <center>
                        Dados incorretos
                    </center>
                </div>';
            
            die();
        } else 
        {
            if ($dados->senha != $senha)
            {
                echo ' <div class="erro">
                        <center>
                            Dados incorretos
                        </center>
                    </div>';
                
                die();
            }  else 
            {

                    session_start();

                    $_SESSION['usuario'] = $dados;

                    header("location:admin/colaboradores");
            }
        }           
    }

    public function deletarColab($id)
    {
        $conn = Db::conectar();

        $stmt = $conn->prepare("DELETE FROM colaboradores WHERE id = :id");
        
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $mensagem = '<br><div class="alert alert-success">
                        <center>
                            <strong>Colaborador removido com sucesso</strong>
                        <center>    
                    </div>';
        
        return $mensagem;
    }

    public function promoverColab($id)
    {
        $conn = Db::conectar();

        $stmt = $conn->prepare("UPDATE colaboradores SET is_admin = 1 WHERE id = :id");
        
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $mensagem = '<br><div class="alert alert-success">
                        <center>
                            <strong>Colaborador promovido com sucesso</strong>
                        <center>    
                    </div>';
        
        return $mensagem;
    }

    public function getCursos($conn)
    {
        $sql="SELECT * FROM graduacoes";
                
        $resultado = mysqli_query($conn, $sql);

        $dados = $resultado->fetch_all();

        return $dados;
    }

    
 
}
