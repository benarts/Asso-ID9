<?php
    class MySQL
    {
        private $database;
        
        public function __construct($request)
        {
            $this->request = $request;
        }

        private function getPDO()
        {
            if ($database == null)
            {
                try
                {
                    $database = new PDO('mysql:host=mysql-artsgame.alwaysdata.net;dbname=artsgame_id9', 'artsgame','azerT13015');
                    $database->exec('SET NAMES utf8');

                    return $database;
                }
                catch (PDOException $error)
                {
                    print $error->getMessage();
                    die();
                }
            }
        }

        public function execute()
        {
            return $this->getPDO()->prepare($this->request)->execute();
        }

        public function requestValueFromSQL()
        {
            $value;

            $sql = $this->getPDO()->prepare($this->request);
            $sql->execute();

            $data = $sql->fetch();

            foreach ($data as $key => $value)
            { }

            return $value;
        }

        public function createList($count, $Callback)
        {
            $sql = $this->getPDO()->prepare($this->request);
            $sql->execute();

            for ($i = 0; $i < $count; $i++)
            {
                $rows = $sql->fetch();
                
                $Callback($rows);
            }
        }

        public function decodeArray($response, $key, $Callback)
        {
            $json = json_decode($response);

            $array_decoded = $json->{$key};

            $Callback($array_decoded);
        }
    }
?>