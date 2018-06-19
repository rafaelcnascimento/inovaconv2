<?php 

require '../vendor/autoload.php';

session_start();

usuario::controle(2);

if (isset($_POST['email']))
{
    $email = $_POST['email'];

    try {
        $conn = db::conectar(2);

        $stmt = $conn->prepare("SELECT * FROM sis_cliente WHERE email = :email");
        
        $stmt->bindParam(':email', $email);

        $stmt->execute();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    if (!$stmt->rowCount() > 0) 
    {
        include('../views/colaboradorView.php');

        echo ' <div class="erro">
                <center>
                    Email inexistente ou não cadastrado pelo aluno
                </center>
            </div>';
        
        die();
        
    }
    else
    {
        try {
            $conn = db::conectar(1);

            $stmt = $conn->prepare("INSERT INTO inovacon.colaboradores (nome, email, senha)
                                    SELECT nome, email, senha
                                    FROM wifitable.sis_cliente
                                    WHERE email = :email");
            
            $stmt->bindParam(':email', $email);

            $stmt->execute();

            include('../views/colaboradorView.php');

            echo ' <div class="erro">
                    <center>
                        Colaborador cadastrado com sucesso
                    </center>
                </div>';
            
            die();
            
        }  catch(PDOException $e) {

            echo $e->getMessage();
        }

    }

    
}
