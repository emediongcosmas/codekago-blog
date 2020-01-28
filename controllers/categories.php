<?php 

class categories {

    public static function FetchCategories() {
        
        global $db;
        
        $categories = $db->query("SELECT * FROM categories");
        
        if ($categories) {
            
            return $categories ;
            
        }
        
    }
    
    public static function FetchSingleCategory($category_id) {
        
        global $db;
        
        $param = array(
            'id' => $category_id
        );
        
        $category = $db->query("SELECT * FROM categories WHERE id = :id", $param, false);
        
        if ($category) {
            
            return $category ;
            
        }
        
    }
}