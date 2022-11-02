<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</Title></label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
      <textarea  textarea id="editor1" class="form-control" name ="body_text"placeholder="Add Body"></textarea>
  </div>
<!-- this is to create dropdown menu in web -->
  <div class="form-group">
    <label>Category</label>
      <select name="category_id" class="form_control">
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?>
          </option>
        <?php endforeach; ?>
      </select>
  </div>
  <!-- this is to create image button in web app (CREATE POST) -->
  <div class="form-group">
        <label>Upload Image</label>
        <input type="file" name="userfile" size="20">
        </imput>
        </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>