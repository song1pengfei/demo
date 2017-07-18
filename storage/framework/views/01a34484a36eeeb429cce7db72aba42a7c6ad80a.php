<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			角色信息管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">信息管理</a></li>
            <li class="active">编辑信息</li>
          </ol>
        </section>
      
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-primary">
               
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-plus"></i> 编辑角色信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo e(URL('admin/adminer')); ?>/<?php echo e($list->id); ?>" method="post">
                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <input type="hidden" name="_method" value="put">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">管理员账号</label>
                      <div class="col-sm-4">
                        <input type="text" name="account" class="form-control" value="<?php echo e($list->account); ?>">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">管理员密码</label>
                      <div class="col-sm-4">
                        <input type="text" name="pass" class="form-control" value="<?php echo e($list->pass); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">当前状态</label>
                      <div class="col-sm-4">
                        <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio1" <?php echo e(($list->status == 0)?"checked":""); ?> value="0"> 启用
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio2" <?php echo e(($list->status == 1)?"checked":""); ?> value="1"> 禁用
                        </label>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">保存</button>
                    </div>
					<div class="col-sm-1">
						<button type="submit" class="btn btn-primary">重置</button>
					</div>
                  </div><!-- /.box-footer -->
                </form>
				<div class="row"><div class="col-sm-12">&nbsp;</div></div>
				<div class="row"><div class="col-sm-12">
                <br/>
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                </div></div>
                
              </div><!-- /.box -->
       
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
    <?php $__env->stopSection(); ?>
  
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>