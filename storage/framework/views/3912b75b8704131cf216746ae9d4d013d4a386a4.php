<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="col-md-4 control-label"><?php echo e('Name'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($employee->name) ? $employee->name : ''); ?>" >
        <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
    <label for="email" class="col-md-4 control-label"><?php echo e('Email'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="<?php echo e(isset($employee->email) ? $employee->email : ''); ?>" >
        <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('cname') ? 'has-error' : ''); ?>">
    <label for="cname" class="col-md-4 control-label"><?php echo e('Cname'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="cname" type="text" id="cname" value="<?php echo e(isset($employee->cname) ? $employee->cname : ''); ?>" >
        <?php echo $errors->first('cname', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Create'); ?>">
    </div>
</div>
