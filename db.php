<?php
    class DB {
        private const DRIVER  = 'mysql'; // las const se solicitan con 4puntos $db::DRIVERS
        private const HOST    = 'sql5c75f.carrierzone.com'; // localhost o 127.0.0.1
        private const PORT    = '3306';
        private const DBNAME  = 'db_test_gucitexcom581807'; // db_puntoplanet
        private const USER    = 'gucitexcom581807';
        private const PASS    = 'JaliscO=55';
        private const CHARSET = 'utf8';
        
        static function getConnection() {
            //echo 'getConnection()';
            $conn = NULL;
            try {
                //$conn = new PDO('mysql:host=127.0.0.1;dbname=puntoplanet_test', 'root', '');
                $conn = new PDO(self::DRIVER.':host='.self::HOST.';port='.self::PORT.';dbname='.self::DBNAME.';charset='.self::CHARSET, 
                                self::USER, 
                                self::PASS,
                                array(
                                    PDO::ATTR_TIMEOUT => 5, // in seconds
                                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                                )
                            );
                //echo 'DB OK';            
            } catch (PDOException $e) {
                //echo "DB ERROR: " . utf8_encode( $e->getMessage() );
            }
            return $conn;            
        }
    }   
    
    //$conn = DB::getConnection(); // comprobar si se conectó
    
    //********** COMPROBACION **************
    $conn = DB::getConnection(); // estatica
    var_dump($conn);
    foreach($conn->query('SELECT * FROM users') as $row) {
        print_r($row);
    }
    $conn = NULL;
    var_dump($conn);
    //*/
?>