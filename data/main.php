<?php
    /**
     * mains_functions
     * 
     * those function should not be edited at all.
     * its used to get feed and also check if user can post, is logged (no 302) ect..
     * 
     */
    class mains_functions{
        protected $UserAgent = [
            "",
            ""
        ];
        
        protected function TestIgFeed() : int{
            $feed = curl_init("https://i.instagram.com/api/v1/feed/reels_tray/");
            curl_setopt_array($feed, [
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_HTTPHEADER => [
                    "accept: */*",
                    "accept-language: fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7",
                    "origin: https://www.instagram.com",
                    "referer: https://www.instagram.com/",
                    "user-agent: " . ""
                ]
            ]);
            curl_exec($feed);
            return curl_getinfo($feed)["http_code"];
        }

        /**
         * CheckIfCredentialExist
         * 
         * check if the user who sent the request have session to his instagram account
         * 
         * /!\ THIS DO NO CHECK IF THE SESSION IS VALID
         * @see check_session() to check if the session is valid
         * 
         * @return bool true or false
         * 
         * @author mathias777
         */

        public function CheckIfCredentialExist(): bool{
            if ($_SESSION){
                if (isset($_SESSION["sessionID"]) && isset($_SESSION["csrftoken"])){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        public function check_session(){
            if ($this->CheckIfCredentialExist()){
                
            }else{
                return false;
            }
        }

    }
    

    //after declared the main function, require the other ones.
    require_once "./constant.php";
    require_once "./utils.php";
    
?>