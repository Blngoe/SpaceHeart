<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img class ="post-picture-tumb" src="<?php echo site_url(); ?>assets/images/image_post/<?php echo $post['post_image']; ?>" > 
            <!-- width="170" height="150" -->
        </div>
        <div class="col-md-9">
            <small style = "font-size:18px"class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></small><br></strong>
            <?php echo word_limiter($post['body_text'],40); ?>
            <br>
            <p><a class = "btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>"> READ MORE</a></p>
        </div>
    </div>
    
<?php endforeach; ?>
<div class='pagination-links'>
<?php echo $this->pagination->create_links(); ?>
</div>
 