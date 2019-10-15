<?php
namespace core;
defined('CORE') or die('Accès Interdit');

//require_once 'Configuration.php'; // because Autoloading

/**
 * Singleton Class
 * Access to the database
 */
class Database {
    private static $_pdo = null; // $instance

    /**
     * Private constructor to be not accessible from outside
     */
    private function __construct() {
        // Configuration for the database
        $conf = Configuration::createInstance();
        //echo $conf->db_host;

        // Driver verification
        if(!isset($conf->db_driver)){
            die('Database : driver is not entered');
        }

        // Choose what kind of database is used
        switch ($conf->db_driver) {
            case 'pdo_mysql':
                $this->makePDOMySQL($conf);
                break;
            case 'pdo_sqlite':
                $this->makePDOSQLite($conf);
                break;
            default:
                die('Database : driver not used');
        }
            self::$_pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
			self::$_pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
    }
    
    /**
     * Create the instance
     * @return $_pdo
     */
    public static function createInstance() {
         // If $_pdo is null
        if(is_null(self::$_pdo)) {
            new Database(); // create the instance
        }
        return self::$_pdo;
    }

    /**
     * Create the PDO object
     * @return $_pdo
     */
    private function makePDOMySQL(Configuration $conf) {
        // database properties
        $expectedKeys = ['db_host', 'db_login', 'db_password', 'db_base'];

        // Keys verifications
        foreach($expectedKeys as $key) {
            if(!isset($conf->$key)) {
                die("Database : missing $key in the .ini file");
            }
        }

        // Connect to Database
        try {
            self::$_pdo = new \PDO(
                "mysql:host={$conf->db_host};dbname={$conf->db_base};charset=utf8", 
                $conf->db_login, 
                $conf->db_password
            );
        } catch (\PDOException   $exception) {
            die("Database : error mySQL $exception->getMessage()");
        }
    }
       
    /**
     * Create the SQLite Object
     * @return $_pdo
     */
    public function makePDOSQLite(Configuration $conf){
        
        $expected = ['db_host','db_login','db_password','db_base'];
        if(!isset($conf->db_file)){
            die("Database : missing SQLITE file");
        }
        try{
            self::$_pdo = new \PDO('sqlite:'.$conf->db_file);
        } catch(\PDOException $exception) {
            die('Database: Ouverture SQLITE file '.$exception->getMessage());
        }
    }

}