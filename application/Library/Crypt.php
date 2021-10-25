    <?php

    /**
    *   $c = new Crypt;
    *   $c->setKey('6A6F736875613C336D696572');
    *   $c->setData('empl1');
    *   $er =  $c->encodeWD('emp1');
    *   $this->showArray($er);
    *   echo "<hr>";
    *   echo $er =  $c->decodeWD($er);
    */
    class Crypt 
    {

        private static $key = '6A6F736875613C336D696572';

        private static $data;
        private static $ENCRYPTION_ALGORITHM = 'AES-256-CBC'; // "AES-128-CTR";
        private static $encrypt_iv = '1234567891011121';

       
        public static function encrypt($data)
        {
            // Storing a string into the variable which 
            $simple_string = $data ;//this->getData();

            // Storingthe cipher method 
            $ciphering = self::$ENCRYPTION_ALGORITHM; // "AES-128-CTR";

            // Using OpenSSl Encryption method 
            $iv_length = openssl_cipher_iv_length($ciphering);
            $options   = 0;

            // Non-NULL Initialization Vector for encryption 
            $encryption_iv = self::$encrypt_iv;//'617263616e67656c3c336d696572';

            // Storing the encryption key 
            $encryption_key = self::getKey();

            // Using openssl_encrypt() function to encrypt the data 
            $encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);
            return $encryption;
        }

        public static function decrypt($data)
        {
            $encryption = $data ; // $this->getData();

            $ciphering = self::$ENCRYPTION_ALGORITHM; 

            $options   = 0;

            // Non-NULL Initialization Vector for decryption 
            $decryption_iv = self::$encrypt_iv;

            // Storing the decryption key 
            $decryption_key = self::getKey();

            // Using openssl_decrypt() function to decrypt the data 
            $decryption = openssl_decrypt($encryption, $ciphering, $decryption_key, $options, $decryption_iv);
              return $decryption;
        }

        public static function unpack($e)
        {
            $e = base64_encode($e);
            $hex = implode(unpack("H*", $e ));
            return $hex;
        }

        public static function pack($e)
        {
            $e = pack("H*", $e);
            $e = base64_decode($e);
            return $e;
        }

        public static function strToHex($string){
            $hex = '';
            for ($i=0; $i<strlen($string); $i++){
                $ord = ord($string[$i]);
                $hexCode = dechex($ord);
                $hex .= substr('0'.$hexCode, -2);
            }
            return strToUpper($hex);
        }

        public static function hexToStr($hex){
            $string='';
            for ($i=0; $i < strlen($hex)-1; $i+=2){
                $string .= chr(hexdec($hex[$i].$hex[$i+1]));
            }
            return $string;
        }

        public static function encodeWD($en)
        {

            $en = self::encrypt($en);
            $en = self::unpack($en);
            $en = self::strToHex($en);
            $en = base64_encode($en);
           
            $parts = ceil(strlen($en) / 4); // Break string into 3 parts
            $str_chunks = chunk_split($en, $parts);
            $arr = explode(PHP_EOL, $str_chunks);

            return $arr;
        }

        public static function decodeWD($en)
        {
            $en = implode('',$en);
            $en = base64_decode($en);
            $en = self::hexToStr($en);
            $en = self::pack($en);
            $en = self::decrypt($en);
            return $en;
        }

        public static function setKey($key)
        {
            self::$key = $key;
        }

        public function setData($data)
        {
            self::$data = $data;
        }

        private static function getKey()
        {
            return  self::$key;
        }

        private function getData()
        {
            return  self::$data;
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

        public static function encryptStr($en)
        {
            $en = self::unpack($en);
            //$en = self::strToHex($en);
            return $en;
        }

        public static function decryptStr($en)
        {
           //$en = self::hexToStr($en);
            $en = self::pack($en);
            return $en;
        }
    }
    