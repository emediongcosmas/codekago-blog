
<?php 
    // This will check if the form has been submitted and therefore make an update to the database
    if(isset($_POST['editPost']))
    {
        post::UpdatePost(
            $_POST['id'],
            $_POST['title'], 
            $_POST['body'],
            $_FILES['photo']
        );
        header('Location: admin');
    } else {
        
    // This will fetch the note to be edited from the database
    if(isset($_POST['id'])){
        $post   = post::FetchSinglepost($_POST['id']);
        $title  = $post['title'];
        $body   = $post['body']; 
?>
 
<div class="container-fluid">
    <div class="row h-100">
        <div class="col-lg-8 d-inline mb-4">
            <form method="POST" id="post-form" enctype="multipart/form-data">
            
                <img class="card-img" src="assets/img/<?= $post['photo']; ?>" alt="" />
                <br>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Body</label>
                    <textarea class="form-control" name="body"><?php echo $body;?></textarea>
                </div>
                 <div class="form-group">
                    <label for="photo">Change Image</label>
                    <input type="file" id="photo" name="photo"/>
                </div>
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $note['id']; ?>">
                <button type="submit" class="btn btn-primary" name="editPost">Save</button>
                <button type="button" class="btn btn-secondary" onclick="window.location.href='admin';">Close</button>
            </form>
        </div>
    </div>
</div>
 
<!-- This will redirect to the homepage if there is no note to be edited -->
<?php }else{
    header('Location: home');
} } ?>
   