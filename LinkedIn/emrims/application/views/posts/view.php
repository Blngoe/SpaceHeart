<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<img class="post-picture-view" src="<?php echo site_url(); ?>assets/images/image_post/<?php echo $post['post_image']; ?>" > 

<div class='post-body'>
<?php echo $post['body_text']; ?>
  
</div>

<?php if($this->session->userdata('user_id')== $post['user_id']): ?>
    <!– /*this is to create EDIT button on every post*/ —>
    <a class ="btn btn-warning" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>

    <!– /*this is to create DELETE button on every post*/ —>
    <hr>
    <?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
    </hr>

    </form>
<?php endif; ?>
<!-- /this is for the comment to show and backgroun color -->
<hr>
    <h3>Comments</h3>
    <?php if($comments) : ?>
        <?php foreach($comments as $comment) : ?>
            <div class="well">   
            <!-- style="background-color:rgb(86, 105, 105) -->
                </h5><?php echo $comment['body']; ?> [by: <strong><?php echo $comment['name']; ?></strong>]</h5>
            </div>
        <?php endforeach; ?>

    <?php else : ?>
        <p>No Comments to Display</p>
    <?php endif; ?>

<hr>
    <h3>Add Comments</h3>
<!-- this will output form validation -->
        <?php echo validation_errors(); ?>

<!-- this will go to COMMENTS controler on Comments.php and follow the method call CREATE and ID will pass as parameter when the form is submit -->
        <?php echo form_open('comments/create/'.$post['id']); ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea type="text" name="body" class="form-control"></textarea>
            </div>
            <input type="hidden" name ="slug" value="<?php echo $post['slug'];?>">
            <button class="btn btn-primary" type="submit">Submit</button>
            
        

</hr>
