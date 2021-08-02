<?php
    class mains_functions{
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
        public function CheckIfCredentialExist(){
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
    }

    //after declared the main function, require the other ones.

    require_once "./utils.php";
    require_once "./constant.php";
?>