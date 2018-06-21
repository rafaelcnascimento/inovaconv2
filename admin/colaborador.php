<?php 

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

session_start();

$usuario = $_SESSION['usuario'];

usuario::controle(1);

if (isset($_POST['email']))
{
    $email = $_POST['email'];

    try {
        $conn = db::conectar();

        $stmt = $conn->prepare("SELECT * FROM wifitable.sis_cliente WHERE email = :email");
        
        $stmt->bindParam(':email', $email);

        $stmt->execute();

    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }

    if (!$stmt->rowCount() > 0) 
    {
        include('../views/colaboradorView.php');

        echo ' <br><div class="alert alert-danger">
                <center>
                    Email inexistente ou não cadastrado pelo aluno
                </center>
            </div>';
        
        die();
    }
    else
    {
        try {
            $conn = db::conectar();

            $stmt = $conn->prepare("INSERT INTO inovacon.colaboradores (nome, email, senha,telefone)
                                    SELECT nome, email, senha, celular
                                    FROM wifitable.sis_cliente
                                    WHERE email = :email");
            
            $stmt->bindParam(':email', $email);

            $stmt->execute();

            include('../views/colaboradorView.php');

            echo ' <br><div class="alert alert-success">
                        <center>
                            <strong>Colaborador cadastrado com sucesso</strong>
                        <center>    
                    </div>';
            
            die();
            
        }  catch(PDOException $e) {
            if ($e->errorInfo[1] == 1062) 
            {
            include('../views/colaboradorView.php');    
            
            echo '<br><div class="alert alert-danger">
                    <center>
                        Email já cadastrado
                    </center>
                </div>';
            die();   
            } else {
                echo $e->getMessage();
                die();
            }
        }
    }
}

include('../views/colaboradorView.php');
