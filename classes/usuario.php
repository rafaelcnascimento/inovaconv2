<?php 

require '../vendor/autoload.php';

class usuario
{
    public function controle($tipo_usuario)
    {
        switch ($tipo_usuario) {
            case 1:
                if (!isset($_SESSION['admin']) && !isset($_SESSION['colab']))
                {
                    header("location:loginPainel.php");
                }
                break;

            case 2:
                if (isset($_SESSION['colab'])) 
                {
                    echo ' <div class="erro">
                               <center>
                                   Acesso negado
                               </center>
                           </div>';
                       
                       die();
                } else 
                {
                    if (!isset($_SESSION['admin']))
                    {
                        header("location:loginPainel.php");
                    }
                }
                break;
            case 3:
                if (isset($_SESSION['admin'])) 
                {
                    echo ' <div class="erro">
                               <center>
                                   Acesso negado
                               </center>
                           </div>';
                       
                       die();
                } else 
                {
                    if (!isset($_SESSION['colab']))
                    {
                        header("location:loginPainel.php");
                    }
                }
                break;
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

    public static function login($email,$senha)
    {
       $conn = db::conectar(1);

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
}
