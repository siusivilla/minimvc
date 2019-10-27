<?php


namespace App\DB;

/**
 * Description of DBPDO
 *
 * @author Hidran
 */
class DBPDO {
    protected  $conn ;
    protected static $instance;
    public static function  getInstance(array $options)
    {
         if(!self::$instance){
             self::$instance = new static($options);
         }
         return self::$instance;
        
    }
    protected function __construct(array $options) {
         $this->conn = new \PDO($options['dsn'],$options['user'],$options['password'],$options['pdooptions'] );
    }
    public function getConn(){
        return $this->conn;
    }
}
