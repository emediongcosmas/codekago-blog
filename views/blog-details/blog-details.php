<?php 
    $post = post::FetchSinglePost($slug); 

?> 

  <main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-9">

          <article class="card mb-4">
            <header class="card-header text-center">
              <div class="card-meta">
                <a href="#"><time class="timeago" datetime="<?= $post['timestamp']; ?>">26 october 2019</time></a> in <a href="page-category.html">Journey</a>
              </div>
              <a href="post-image.html">
                <h1 class="card-title"><?= $post['title']; ?></h1>
              </a>
            </header>
            <a href="post-image.html">
              <img class="card-img" src="assets/img/<?= $post['photo']; ?>" alt="" />
            </a>
            <div class="card-body">

              <p><?= $post['body']; ?></p>

              <hr />

              <div id="disqus_thread"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://codekago-blog.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            

            </div>
          </article><!-- /.card -->

        </div>
        <div class="col-md-3 ml-auto">

          <aside class="sidebar">
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">About</h4>
                <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam <a href="#">semper libero</a>, sit amet adipiscing sem neque sed ipsum. </p>
              </div>
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
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Popular stories</h4>

                <a href="post-image.html" class="d-inline-block">
                  <h4 class="h6">The blind man</h4>
                  <img class="card-img" src="img/articles/2.jpg" alt="" />
                </a>
                <time class="timeago" datetime="2019-10-03 20:00">3 october 2019</time> in Lifestyle

                <a href="post-image.html" class="d-inline-block mt-3">
                  <h4 class="h6">Crying on the news</h4>
                  <img class="card-img" src="img/articles/3.jpg" alt="" />
                </a>
                <time class="timeago" datetime="2019-07-16 20:00">16 july 2019</time> in Work

              </div>
            </div><!-- /.card -->
          </aside>

        </div>
      </div>
    </div>

  </main>

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