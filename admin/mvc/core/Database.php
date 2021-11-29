<?php
class Database
{
    public $conn;
    protected $hostname = "localhost";
<<<<<<< HEAD
    protected $username = "sManager";
    protected $password = "admin";
=======
    protected $username = "root";
    protected $password = "123456";
>>>>>>> c5664357f1491fdfa1587a40323733909c6d71ce
    protected $dbname = 'ass2';
    function __construct()
    {
        $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname) or die('Can\'t connect to database');
        mysqli_set_charset($this->conn, 'utf8');
    }
    function __destruct()
    {
        if ($this->conn) {
            mysqli_close($this->conn);
        }
    }
    function query($sql = '')
    {
        return mysqli_query($this->conn, $sql);
    }
    function get_list($sql = '')
    {
        $data = [];
        $result = $this->query($sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    function get_one($sql = '')
    {
        $result = $this->query($sql);
        $data = '';
        if ($result) {
            $data = mysqli_fetch_assoc($result);
        }
        return $data;
    }
}
