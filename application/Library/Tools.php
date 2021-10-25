<?php

    class Tools
    {
        public static function showArray($arr)
        {
           echo "<pre>";
            print_r($arr);
           echo "</pre>";
        }

        public static function CleanStr($x)
        {
            $x = trim($x);
            $x = stripslashes($x);
            $x = htmlspecialchars($x);
            return $x;
        }

        public static function encrypt($data , $stringify = true)
        {
            $en = Crypt::encodeWD($data);
            if ($stringify) {
                $en = json_encode($en);
            }
           return $en;
        }

        public static function decrypt($en, $stringify = true)
        {   
            if ($stringify) {
                $en = json_decode($en);
            }
           
            $en = Crypt::decodeWD($en);
            
           return $en;
          
        }

        public static function randomStr($l = 5)
        {
            $trans_ID = "";
            $rSmal = array( "A" , "B" , "C" , "D"  , "E" , "F" , "G" , "H" , "I" , "J" , "K" , "L" , "M" , "N" , "O" , "P" , "Q" , "R" , "S" , "T" , "U" , "V" , "W" , "X" , "Y" , "Z" ,"a" , "b" , "c"  , "d" , "e" , "f" , "g" , "h" , "i" , "j" , "k" , "l" , "m" , "n" , "o" , "p" , "q" , "r" , "s" , "t" , "u" , "v" , "w" , "x" , "y" , "z"  , "$" , "."  ,  1, 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 0);

            for ($i=0; $i < $l; $i++) {
                $trans_ID .= $rSmal[array_rand($rSmal)];
            }

            return  $trans_ID;
        }

        public static function writeLog($msg)
        {
            $logPath = $_SERVER['DOCUMENT_ROOT'].ACCESS_LOG;
            $logFileName = $logPath.'access_log_'.date("Y-m-d").'.txt';
            $myfile = fopen($logFileName, "w") or die("Unable to open file!");
            $txt = $msg;
            fwrite($myfile, $txt);
            fclose($myfile);
        }

         public static function readLog($filename = null)
        {
            $content = null;
            $logPath = $_SERVER['DOCUMENT_ROOT'].ACCESS_LOG;
            $logFileName = $logPath.'access_log_'.date("Y-m-d").'.txt';

            if ($filename != null) {
                $logFileName = $logPath.$filename;
            }

            if (file_exists($logFileName)) {
                $myfile = fopen($logFileName, "r") or die("Unable to open file!");
                $content = fread($myfile,filesize($logFileName));
                fclose($myfile);
            }
           
           
            return $content ;
        }

        

    }
    