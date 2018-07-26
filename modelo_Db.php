<!-- 1-Crie um arquivo chamado Db.php em /src/classes
2-Cole e edite o codigo abaixo com as opções do seu DB ou use o padrão
3-Abra um CMD na pasta do index.php (Segure shift + botão direito do mouse -> Abrir Janela de comando/powershell aqui)
e use o comando 'composer dump-autoload' (https://getcomposer.org/download/)
PS: Toda vez que for criada uma classe é necessário dar um 'composer dump-autoload' -->

<?php
class Db 
{
    private function __contruct() {
    }
    public static function conectar()
    {
        //Pra usar no xampp
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "ejr";
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            
            return $conn; 
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
