<?php $__env->startSection('content'); ?>
    <h1>Update Team</h1>
    <?php echo Form::model($post,['method' => 'PATCH','route'=>['posts.update',$post->id]]); ?>

    <div class="form-group">
        <?php echo Form::label('Team Name', 'Team Name:'); ?>

        <?php echo Form::text('title',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Captain Name', 'Captain Name:'); ?>

        <?php echo Form::text('description',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>