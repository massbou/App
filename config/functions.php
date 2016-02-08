<?php
    if(!function_exists('not_empty')){
        function not_empty($fields = []){
            if(count($fields) != 0){
                foreach($fields as $field){
                    if(empty($field) | trim($field) == ""){
                        return false;   
                    }
                }
                
                return true;
            }
        }
    }

    if(!function_exists('redirect')){
        function redirect($page){
            header('Location: '.$page);
            exit();
        }
    }
?>