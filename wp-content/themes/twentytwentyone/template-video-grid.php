<?php
/**
 * Template Name: Video Grid
 *
 * */
?>
<style type="text/css">
.container {
    max-width: 970px;
    margin: auto;
    padding-top: 100px;
}
.video-grid {
    display: flex;
    flex-wrap: wrap;
}
.video-item {
    width: 48%;
    margin-right: 2%;
    margin-bottom: 2%;
}
.video-item img {
  width:100%;
  height:auto;
}
.video-item:hover span {
    opacity: 1;
}
a.video {
  float: left;
  position: relative;
}
a.video span {
    width: 100%;
    height: 100%;
    position: absolute;
    background: url(http://localhost/test/wp-content/uploads/2022/02/play-icon.png) no-repeat;
    background-position: 50% 50%;
    background-size: 20%;
    opacity: 0;
    transition: all 0.2s ease;
}
@media screen and (max-width: 480px) {
  a.video span {
    background-size: 400%;
  }
}
</style>

<div class="container">
<div class="video-grid">
<div class="video-item">
  <a href="https://example.com/" class="video">
    <span></span>
    <img src="http://localhost/test/wp-content/uploads/2022/01/slide1.png" alt="My Awesome Video" />
  </a>
</div>
<div class="video-item">
  <a href="https://example.com/" class="video">
    <span></span>
    <img src="http://localhost/test/wp-content/uploads/2022/01/slide1.png" alt="My Awesome Video" />
  </a>
</div>
<div class="video-item">
  <a href="https://example.com/" class="video">
    <span></span>
    <img src="http://localhost/test/wp-content/uploads/2022/01/slide1.png" alt="My Awesome Video" />
  </a>
</div>
<div class="video-item">
  <a href="https://example.com/" class="video">
    <span></span>
    <img src="http://localhost/test/wp-content/uploads/2022/01/slide1.png" alt="My Awesome Video" />
  </a>
</div>
<div class="video-item">
  <a href="https://example.com/" class="video">
    <span></span>
    <img src="http://localhost/test/wp-content/uploads/2022/01/slide1.png" alt="My Awesome Video" />
  </a>
</div>
<div class="video-item">
  <a href="https://example.com/" class="video">
    <span></span>
    <img src="http://localhost/test/wp-content/uploads/2022/01/slide1.png" alt="My Awesome Video" />
  </a>
</div>
<div class="video-item">
  <a href="https://example.com/" class="video">
    <span></span>
    <img src="http://localhost/test/wp-content/uploads/2022/01/slide1.png" alt="My Awesome Video" />
  </a>
</div>
<div class="video-item">
  <a href="https://example.com/" class="video">
    <span></span>
    <iframe src="https://player.vimeo.com/video/61487989?autoplay=1&loop=1&autopause=0&api=1&controls=0&muted=1?playsinline=0" width="470" height="258" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </a>
</div>
</div>

<?php 

$args = array(  
        'post_type' => 'gallery',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="embed-container">
            <?php // Load value.
            $iframe = get_field('video_iframe');

            // Use preg_match to find iframe src.
            preg_match('/src="(.+?)"/', $iframe, $matches);
            $src = $matches[1];

            // Add extra parameters to src and replace HTML.
            $params = array(
                'controls'  => 0,
                'hd'        => 1,
                'autohide'  => 1
            );
            $new_src = add_query_arg($params, $src);
            $iframe = str_replace($src, $new_src, $iframe);

            // Add extra attributes to iframe HTML.
            $attributes = 'frameborder="0"';
            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

            // Display customized HTML.
            echo $iframe; ?>
        </div>
        <?php
        the_title(); 
        the_excerpt(); 
    endwhile;

    wp_reset_postdata(); 
?>
</div>