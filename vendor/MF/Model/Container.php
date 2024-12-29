<?php
    namespace MF\Model;
    use App\Connection;
    //evita a repetição da lógica de instanciar o modelo e a conexão
    class Container {
        public static function getModel($model) {
            $class = "\\App\\Models\\".ucFirst($model);
            $conn = Connection::getDb();
            return new $class($conn);
        }
    }
?>