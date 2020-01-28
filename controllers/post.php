<?php 

class post {
    
    public static function AddPost($user_id, $title, $body, $photo = array()) {
        global $db;
        
        $upload = upload::add($photo, 'assets/img/', true);
        $photo = $upload['file'];
        $slug = request::slug($title);
        
        $param = array(
            // 'activity_id' => $activity_id,
            'user_id' => $user_id,
            'title' => $title,
            'body' => $body,
            'photo' => $photo,
            'slug' => $slug,
            'timestamp' => date("Y-m-d H:i:s")
        );
       
        $statement = "INSERT INTO post (user_id, title, body, photo, slug, timestamp) VALUES (:user_id, :title, :body, :photo, :slug, :timestamp)";
    
        if ($db->query($statement, $param)) {
            respond::alert('success', '', 'Post Added Successfully'); 
            header('Lcoation: admin');
        }else {
            respond::alert('danger', '', 'Sorry! Please try again');  
        }
        
    }
    
    public static function FetchPosts() {
        
        global $db;
        
        $post = $db->query("SELECT * FROM post ORDER BY timestamp DESC");
        
        if ($post) {
            
            return $post ;
            
        }
        
    }
    
    public static function FetchSinglePost($slug) {
        
        global $db;
        
        $param = array(
            'slug' => $slug
        );
        
        $post = $db->query("SELECT * FROM post WHERE slug = :slug", $param, false, $fetch = true, $fetchmode = PDO::FETCH_ASSOC);
         
            if($post){
                return $post;
            }
        
    }
    
    public static function UpdatePost($id, $title, $body, $photo) 
    {
        
        global $db;
        
        $slug = request::slug($title);
        
        $param = array(
            'id' => $id,
            'title' => $title,
            'body' => nl2br($body),
            'photo' => $photo,
            'slug' => $slug,
            'timestamp' => date("Y-m-d H:i:s")
        );
        
        $update = "UPDATE post SET title = :title, body = :body, photo = :photo, timestamp = :timestamp, slug = :slug  
                               WHERE id = :id";
        $note = $db->query($update, $param, false);
         
        if($note){
            return $note;
        }
        
    }
    
    public static function DeleteNote($id) 
    {
        global $db;
        
        $param = array(
            'id' => $id
        );
        
        $delete = "DELETE FROM table_name WHERE id = :id";
        $note = $db->query($delete, $param);
        
        if($note){
            return $note;
        }
    }
    
}