<?php

class utiles extends mains_functions{
    /**
     * GenerateUUID
     * 
     * generate a UUID version 4 
     * ex: 
     * @return string the uuid as string 
     * 
     * @param bool if you dont want to keep the dashes(-)
     * 
     * @author MGP25
     */
    public function generateUUID($keepDashes = true) : string{
      $uuid = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x', mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0x0fff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000, mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff));
      return $keepDashes ? $uuid : str_replace('-', '', $uuid);
    }
    /**
     * GenerateRandomString
     * 
     * generate a random string from $charactersLength
     * 
     * @return string the generated string
     * 
     * @param int the lenght of the string to generate
     * 
     * @author mathias777
     */
    public function GenerateRandomString(int $length) : string{
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
    /**
     * parseheader
     * 
     * will be used to parset the sessions and other gaven cookies from instagram.
     * 
     * @return array the assosiative array containing returned cookies
     * 
     * @param string headers to parse
     */
    public function parseheader($headeur){
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $headeur, $matches);
        $cookies = array();
        foreach($matches[1] as $item) {
            parse_str($item, $cookie);
            $cookies = array_merge($cookies, $cookie);
        }
        return $cookies;
    }
    /**
     * GetUserAgent
     * 
     * get a user agent from a list of random device
     * 
     * @return string
     * 
     * @throws Exception
     * 
     * @see parent::USERAGENT
     */

    static function GetUserAgent(){
      if (count(parent::USERAGENT) > 0){

      }else{
        throw new Exception("No user agents");
      }
    }
}

?>