
    


<div class="container">
	
    <!-- Status message -->
    

    <div class="panel-primary">
        <div class="panel-heading">
            <h2>To Do List Web Application</h2>
    </div>

	<?php  
        if(!empty($success_msg)){ 
            echo '<p class="alert alert-success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="alert alert-danger">'.$error_msg.'</p>'; 
        } 
    ?>
    <!-- Registration form -->
    <div class="panel">
        <div class="panel-header" style="color:Green;">
            <h3>Create a New Account</h3>
        </div>
        <div class="panel-body">
        <div>
        <form action="" method="post">
            <div class="form-group">
                <label>Enter First Name: </label>
                <input type="text" name="first_name" class="form-control" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" >
                <?php echo form_error('first_name','<p class="help-block alert alert-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label>Enter Last Name: </label>
                <input type="text" name="last_name" class="form-control" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" >
                <?php echo form_error('last_name','<p class="help-block alert alert-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label>Enter Email Id: </label>
                <input type="email" name="email" class="form-control" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" >
                <?php echo form_error('email','<p class="help-block alert alert-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label>Enter Password: </label>
                <input type="password" name="password" class="form-control" >
                <?php echo form_error('password','<p class="help-block alert alert-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label>Enter Confirm Password: </label>
                <input type="password" name="conf_password" class="form-control">
                <?php echo form_error('conf_password','<p class="help-block alert alert-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label>Gender: </label>
                <?php 
                if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
						Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Enter Phone No.: </label>
                <input type="text" name="phone" class="form-control" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block alert alert-danger">','</p>'); ?>
            </div>
            <div>
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT" class="btn btn-primary">
            </div>
        </form>
        <br />
        <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p>
    </div>
        </div>
    </div>
    
</div> 
</div>