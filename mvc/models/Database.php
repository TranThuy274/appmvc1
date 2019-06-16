<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 6/11/2019
 * Time: 6:34 PM
 */

namespace MVC\Model;

class Database{
    public $connection;

    const DATABASE_SERVER = "localhost";

    const DATABASE_USER = "root";

    const DATABASE_PASSWORD = "";

    const DATABASE_NAME = "mvc1";


    public function __construct()
    {
        /**
         * !$this->connection
         * khi chưa có kết nối đến CSDl
         *
         */
        if(!$this->connection)
        {
            $this->connection = mysqli_connect(self::DATABASE_SERVER, self::DATABASE_USER, self::DATABASE_PASSWORD, self::DATABASE_NAME);
        }
    }

}
