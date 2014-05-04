<?php
/**
 *
 * Slim
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/04
 *
 */

namespace Slim;


use Slim\Database\Medoo;

class Model extends Medoo
{

    /**
     * DB type
     *
     * @var string
     */
    protected $database_type = 'mysql';

    /**
     * DB server address
     *
     * @var string
     */
    protected $server = 'localhost';

    /**
     * DB username
     *
     * @var string
     */
    protected $username = 'username';

    /**
     * DB password
     *
     * @var string
     */
    protected $password = 'password';

    /**
     * SQLite File
     *
     * @var string
     */
    protected $database_file = '';

    /**
     * DB port
     *
     * @var int
     */
    protected $port = 3306;

    /**
     * DB encoding
     *
     * @var string
     */
    protected $charset = 'utf8';

    /**
     * DB NAME
     *
     * @var string
     */
    protected $database_name = '';

    /**
     * @var array
     */
    protected $option = array();

    /**
     * Table name
     *
     * @var string
     */
    protected $table_name;

    /**
     * Table prefix
     *
     * @var string
     */
    protected $table_prefix = NULL;

    protected static $instance = array();


    public function __construct(array $options = array()) {

        $database_config = Config::get('database');

        $options = array_merge($database_config, $options);

        foreach ($options as $option => $value) {
            $this->$option = $value;
        }

        parent::__construct();
    }

    /**
     * 获取真实表名
     */
    public function getTrueTableName() {
        if (is_null($this->table_prefix)) {
            return $this->table_name;
        }
        return $this->table_prefix . $this->table_name;
    }


    /**
     * Alias of getInstance
     *
     * @param null $options
     * @return Model
     */
    public static function model(array $options = array()) {
        return self::getInstance($options);
    }


    /**
     * @param array $options
     * @return Model
     */
    private static function getInstance(array $options = array()) {
        $className = get_called_class();
        $instance  = & self::$instance[$className];
        if (!$instance instanceof self) {
            self::$instance[$className] = new $className($options);
        }
        return self::$instance[$className];
    }


} 