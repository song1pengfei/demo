<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
       <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
      会员信息管理
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
                  <h3 class="box-title"><i class="fa fa-plus"></i> 编辑管理员信息</h3>
                </div><!-- /.box-header -->
         <form class="form-horizontal" action="<?php echo e(URL('admin/article')); ?>/<?php echo e($list->id); ?>" method="post">
                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <input type="hidden" name="_method" value="put">


                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3"   class="col-sm-2 control-label">ID</label>

                      <div class="col-sm-4">
                        <input type="text" name="articleid" readonly class="form-control" value="<?php echo e($list->id); ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3"   class="col-sm-2 control-label">用户id</label>
                      <div class="col-sm-4">
                        <input type="text" name="articleid" readonly class="form-control" value="<?php echo e($list->userid); ?>">
                      </div>
                    </div>

                   <div class="form-group">
                      <label for="inputPassword3"  class="col-sm-2 control-label">文章标题</label>
                      <div class="col-sm-4">
                        <input type="text" name="disTime" readonly class="form-control" value="<?php echo e($list->title); ?>">
                      </div>
                    </div>  
                     <div class="form-group">
                      <label for="inputPassword3"  class="col-sm-2 control-label">头像</label>
                      <div class="col-sm-4">
                        <img src=""/>
                      </div>
                    </div>  
                    <div class="form-group">
                      <label for="inputPassword3"  class="col-sm-2 control-label">作者</label>
                      <div class="col-sm-4">
                        <input type="text" name="disTime" readonly class="form-control" value="<?php echo e($list->author); ?>">
                      </div>
                    </div>  
                    
          <div class="form-group">
                      <label for="inputPassword3"  class="col-sm-2 control-label">文章内容</label>
                      <div class="col-sm-4">
                        <textarea  readonly cols="120" rows="20" contenteditable="true"><?php echo e($list->content); ?></textarea></td>
                      </div>
                    </div>  
           <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">当前状态</label>
                      <div class="col-sm-4">
                        <label class="radio-inline">

                          <input type="radio" name="status" id="inlineRadio1" value="0"> 待审核
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" id="inlineRadio2" value="1"> 通过
                        </label>
                          <label class="radio-inline">
                          <input btn btn-primary type="radio" name="status"   id="inlineRadio2" value="2"> 
                          未通过

                        </label>
                      </div>
                    </div>
                  <div class="box-footer">
            <div class="col-sm-offset-2 col-sm-1">
            <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                  </div><!-- /.box-footer -->
                </form> 
        <div class="row"><div class="col-sm-12">&nbsp;</div></div>
    
              </div><!-- /.box -->
       
            </div><!--/.col (right) --> 
    
      
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
    <?php $__env->stopSection(); ?>
  
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>