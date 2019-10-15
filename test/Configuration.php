<?php
namespace core;
defined('CORE') or die('Accès Interdit');

/**
 * Singleton Class
 * Load the configuration file
 */
class Configuration {
    private static $_instance = null;// Instance
    private static $_iniFile = null;// .ini file
    
    private $data = null;// data loaded in the .ini file

    /**
     * Private constructor to be not accessible from outside
     * Verify the .ini file
     */
    private function __construct() {
        // If $_iniFile is null
        if(is_null(self::$_iniFile)) {
            die('Ini file is not entered');
        }

        // If $_iniFile is not readable
        if(!is_readable(self::$_iniFile)) {
            die('Ini file is not lisible');
        }
        
        // parse the .ini file
        $this->data = parse_ini_file(self::$_iniFile);
         
        // If data are not entered
        if(!$this->data) {
            die('Error while reading Ini file');
        }
    }

    /**
     * Setup the .ini file
     */
    public static function setConfigurationFile($_iniFile) {
        self::$_iniFile = $_iniFile;
    }

    /**
     * Create the instance
     * @return $_instance
     */
    public static function createInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new Configuration(); // create the instance
        }
        return self::$_instance;
    }

    /**
     * Access the datas at the instanciation
     * @return the datas
     */
    public function __get($item) {
        if(!isset($this->data[$item])) {
            die("Configuration Error : $item doesn't exist");
        }
        return $this->data[$item];
    }

    /**
     * Verify the datas at the instanciation
     */
    public function __isset($item) {
        return isset($this->data[$item]);
    }
}
