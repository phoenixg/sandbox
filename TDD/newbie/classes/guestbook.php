<?php
class Guestbook {

    // 为节省时间，伪造一些数据
    private static $_entries = array(  
        array (  
            'name' => 'Kirk', 
            'message' => 'Hi, I\'m Kirk.'  
        ),  
        array (  
            'name' => 'Ted',  
            'message' => 'Hi, I\'m Ted.'  
        )  
    ); 

    public function viewAll(){
        return self::$_entries;  
    }
    
    public function add($name, $message){
        self::$_entries[] = array('name' => $name, 'message' => $message );
        return true;  
    }

    public function deleteAll(){
        self::$_entries = array();  
        return true;
    }
    
}