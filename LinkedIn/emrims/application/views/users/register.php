
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="row">
    <div class="col-md-4 col-md-offeset-4">
        <h2 class="text-center"><?= $title; ?></h2>

        <div class="form-group">
            <label>NAME</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
        </div>

        <div class="form-group">
            <label>ZIPCODE</label>
                <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
        </div>

        <div class="form-group">
            <label>EMAIL</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="form-group">
            <label>USERNAME</label>
                <input type="text" class="form-control" name="user_name" placeholder="Username">
        </div>

        <div class="form-group">
            <label>PASSWORD</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="form-group">
            <label>CONFIRM PASSWORD</label>
                <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">SUBMIT</button>
<?php echo form_close(); ?>