<?php
    class DbInfo {
        public static function getServer(){
            return 'localhost';
        }

        public static function getDbName () {
            return 'jobhive';
        }

        public static function getUserName(){
            return 'root';
        }

        public static function getPassword(){
            return '';

        }

        public static function getPort (){
            return '3306';
        }

        public static function connectDB (){
            $dsn = 'mysql:host'.DbInfo::getServer().';dbname='.DbInfo::getDbName().';port='.DbInfo::getPort();
            $option = array(PDO:: ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,);
            $conn = new PDO($dsn,DbInfo::getUsername(),DbInfo::getPassword(),$option);
            return $conn;
        }
    }