<?php
    class DB
    {
        public $dbh;

        function __construct()
        {
            $host = '127.0.0.1';
            $db   = 'lab3puskin';
            $user = 'root';
            $pass = '';
            $charset = 'utf8';
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt =
                [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];

            try
            {
                $this->dbh = new PDO($dsn, $user, $pass, $opt);
            }
            catch (PDOException $e)
            {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

    function getPage($id)
    {
        $db = new DB();
        $request = $db->dbh->prepare("SELECT * from articles WHERE `id_articles` = ?");
        $request->execute(array($id));
        $data = $request->fetch();
        return $data;
    }

    function getNav()
    {
        $db = new DB();
        $request = $db->dbh->prepare("SELECT id_articles, title_articles from articles");
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

    function find($findstr)
    {
        $findstr = trim($findstr);
        $findstr = str_replace(' ', '%', $findstr);
        $findstr = '%' . $findstr . '%';
        $db = new DB();
        $request = $db->dbh->prepare("SELECT id_articles, title_articles from articles WHERE `title_articles` LIKE ? OR `text_articles` LIKE ?");
        $request->execute(array($findstr, $findstr));
        $data = $request->fetchAll();
        return $data;
    }
?>