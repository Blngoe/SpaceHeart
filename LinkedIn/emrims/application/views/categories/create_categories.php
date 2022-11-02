<h2><?= $title ;?></h2>
<?php echo validation_errors(); ?>
<!-- this will go to (Categories.php/create function) -->
<?php echo form_open_multipart('categories/create_categories'); ?> 
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholde="Enter Name">
    </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
</form>