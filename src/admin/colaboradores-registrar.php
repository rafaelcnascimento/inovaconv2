<?php 

session_start();

$usuario = $_SESSION['usuario'];

Usuario::controle(1);

if (isset($_POST['email']))
{
    $email = $_POST['email'];

    try {
        $conn = Db::conectar();

        $stmt = $conn->prepare("SELECT * FROM wifitable.sis_cliente WHERE email = :email");
        
        $stmt->bindParam(':email', $email);

        $stmt->execute();

    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }

    if (!$stmt->rowCount() > 0) 
    {
        $mensagem = ' <br><div class="alert alert-danger">
                        <center>
                            Email inexistente ou não cadastrado pelo aluno
                        </center>
                    </div>';

        include('src/views/admin/colaboradores-registrarView.php');
        
        die();
    }
    else
    {
        try {
            $conn = Db::conectar();

            $stmt = $conn->prepare("INSERT INTO ejr.colaboradores (nome, email, senha,telefone)
                                    SELECT nome, email, senha, celular
                                    FROM wifitable.sis_cliente
                                    WHERE email = :email");
            
            $stmt->bindParam(':email', $email);

            $stmt->execute();

            $mensagem = '<br><div class="alert alert-success">
                            <center>
                                <strong>Colaborador cadastrado com sucesso</strong>
                            <center>    
                        </div>';
            
            include('src/views/admin/colaboradores-registrarView.php');
            
        }  catch(PDOException $e) {
            if ($e->errorInfo[1] == 1062) 
            {
            
            $mensagem = '<br><div class="alert alert-danger">
                            <center>
                                Email já cadastrado
                            </center>
                        </div>';
        
            include('src/views/admin/colaboradores-registrarView.php');    

            die();

            } else {
                echo $e->getMessage();
                die();
            }
        }
    }
}

include('src/views/admin/colaboradores-registrarView.php');
