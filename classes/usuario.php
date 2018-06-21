<?php 

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

class usuario
{
    public function controle($tipo_usuario)
    {
        switch ($tipo_usuario) {
            case 1:
                if (!isset($_SESSION['usuario']))
                {
                    header("location:loginPainel.php");
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
                    header("location:loginPainel.php");
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
        $conn = db::conectar();

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

                    header("location:painel.php");
            }
        }           
    }

    public function getCursos($conn)
    {
        $sql="SELECT * FROM cursos";
                
        $resultado = mysqli_query($conn, $sql);

        $dados = $resultado->fetch_all();

        return $dados;
    }

    public function loginEmpresa($email,$senha,$conn)
    {
        $sql="SELECT * FROM empresas WHERE email = '$email'";
        
        $resultado = mysqli_query($conn, $sql);

        $dados = $resultado->fetch_object();

        if (!$dados) 
        {
            echo "Dados incorretos ou cadastro inativo";
            die();
        } 
        else
        {
            if ($dados->senha != $senha || $dados->aprovado == null)
            {
                echo "Dados incorretos ou cadastro inativo";
                die();
            }
        }

        $_SESSION['empresa'] = $dados;

        $_SESSION['empresa']->logado = true;
    }

    public function loginAluno($email,$senha,$conn)
    {
        $sql="SELECT * FROM usuarios WHERE email = '$email'";
        
        $resultado = mysqli_query($conn, $sql);

        $dados = $resultado->fetch_object();

        if (!$dados) 
        {
            echo "Dados incorretos";
            die();
        } 
        else
        {
            if ($dados->senha != $senha)
            {
                echo "Dados incorretos";
                die();
            }
        }

        $_SESSION['aluno'] = $dados;

        $_SESSION['aluno']->logado = true;
    }

    public function logout()
    {
        session_destroy();

        header("location:home.php");
    }

}
