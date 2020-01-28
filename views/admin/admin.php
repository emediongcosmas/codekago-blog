
<?php
    if(isset($_POST['addPost']))
    {
        post::AddPost(
            $user_id,
            $_POST['title'], 
            $_POST['body'],
            $_FILES['photo']
        );
    }       
?>

<!-- THIS IS THE ADD BUTTON FOR ADDING postS -->
<!-- <a href="" data-toggle="modal" data-target="#addNote" class="float">
    <i class="fa fa-plus my-float"></i>
</a> -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
     <div class="row">
        
        <?php 
        
            $posts = post::FetchPosts();
            
            if($posts){
            foreach($posts as $post) {
                // $time = $jot['timestamp'];
                
        ?> 

            <!-- Content Column -->
            <div class="col-lg-3 d-inline mb-4">
                <!-- Content -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary float-left"><?= $post['title']; ?></h6>
                    </div>
                    <div class="card-body">
                        <!-- <p><?= $post['body']; ?></p> -->
                        <p><?=  $post['body']; ?></p>
                        <br>
                        
                        <div class="text-center options" style="display: flex;">
                            <!-- EDIT OPTION -->
                            <form action="edit-post" method="post">
                                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                <button type="submit" class="btn options"><i class="far fa-edit"></i></button>
                            </form>
                            <!-- DELETE OPTION -->
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                <button type="submit" class="btn options delete-btn" data-toggle="modal" data-target="#deletePost" data-id="<?php echo $post['id']; ?>"><i class="far fa-trash-alt"></i></button>
                            </form>
                            <!-- <button type="submit" class="btn options delete-btn" data-toggle="modal" data-target="#deletePost" data-id="<?php echo $post['id']; ?>"><i class="far fa-trash-alt"></i></button> -->
                        </div>
                    </div>
                </div>
            </div>
        
        <?php } } ?>
        
    </div>

</div>
<!-- /.container-fluid -->