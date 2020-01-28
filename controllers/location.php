<?php 

class location {

    public static function state() {
        
        global $db;
        
        $state = $db->query("SELECT * FROM state");
        
        if ($state) {
            
            return $state ;
            
        }
        
    }
    
    public static function city($state_id) {
        
        global $db;
        
        $param = array(
            'state_id' => $state_id
        );
        
        $statement = "SELECT * FROM state WHERE state_id = :state_id";
        
        $city = $db->query($statement, $param);
        
        if($city){ 
            
            return $city;
            
        }
        
    }
    
}
