<?php
/**
 * database class to connect to our mysql database
 */
/**
 * automatically calls the construct method
 */
 class Database{
     public function_construct(
            //dtabase hosting
            $dhost = 'localhost',

            //database user
            $duser = 'root',

            //database password
            $dpass '',

            //dsatabaase name
            $dname = 'dcsit',
            ){

            //database connection
            $connect = new mysqli($dhost, $duser, $dpassword, $dname,)
    
                    //check if database is connected
                    if ($connect->connect_errno){
                        echo 'failed to connect to database' 
                    }
     }
     
 