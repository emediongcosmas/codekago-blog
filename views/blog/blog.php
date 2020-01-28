 <?php 
    $posts = post::FetchPosts();
    foreach($posts as $post) { 
        
        // $category = categories::FetchSingleCategory($post['categories_id']);
        $user = users::DetailsById($post['user_id']);
        
        ?> 

 <main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-9">

          <article class="card mb-4">
            <header class="card-header">
              <div class="card-meta">
                Posted <a href="#"><time class="timeago" datetime="<?=$post['timestamp'];?>"></time></a> 
                <!-- in <a href="page-category.html">Journey</a> -->
              </div>
              <a href="blog-details?article=<?= $post['slug']; ?>#disqus_thread">
                <h4 class="card-title"><?= $post['title']; ?></h4>
              </a>
            </header>
            <a href="blog-details?article=<?= $post['slug']; ?>#disqus_thread" data-json="{ 'id':'<?= $post['id'];?>'}">
              <img class="card-img" src="assets/img/<?= $post['photo']; ?>" alt="" />
            </a>
            <div class="card-body">
              <p class="card-text"><?= $post['body']; ?></p>
            </div>
          </article><!-- /.card -->
          
        </div>
        <div class="col-md-3 ml-auto">

          <aside class="sidebar">
            <div class="card mb-4">
            </div><!-- /.card -->
          </aside>

          <aside class="sidebar sidebar-sticky">
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Tags</h4>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Journey</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Work</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Lifestype</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Photography</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Food & Drinks</a>
              </div>
            </div><!-- /.card -->
          </aside>

        </div>
      </div>
    </div>

  </main>
    <?php } ?>

  <div class="site-newsletter">
    <div class="container">
      <div class="text-center">
        <h3 class="h4 mb-2">Subscribe to our newsletter</h3>
        <p class="text-muted">Join our monthly newsletter and never miss out on new stories and promotions.</p>

        <div class="row">
          <div class="col-xs-12 col-sm-9 col-md-7 col-lg-5 ml-auto mr-auto">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Email address" aria-label="Email address">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Subscribe</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>