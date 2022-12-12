<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>"> 
  <div class="form-group">
    <label>Title</Title></label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea textarea id="editor1" class="form-control" name ="body_text"placeholder="Add Body"><?php echo $post['body_text']; ?></textarea>
  </div>
  <!-- this is to create dropdown menu in web -->
  <div class="form-group">
    <label>Category</label>
      <select name="category_id" class="form_control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
      </select>
      
  <button type="submit" class="btn btn-default">Submit</button>
  
</form>