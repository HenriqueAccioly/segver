    <?php
    class Conexao {
        
        var $pdo;

        function __construct() {
            $this->pdo = new PDO('mysql:host=localhost;dbname=segver', 'root', '');
        }

        public function select($login, $senha) {
            
            $stmt = $this->pdo->prepare("select * from login where login = :plogin and senha = :psenha");
            $stmt->bindValue(':plogin', $login);
            $stmt->bindValue(':psenha', $senha);
            $run = $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
    }