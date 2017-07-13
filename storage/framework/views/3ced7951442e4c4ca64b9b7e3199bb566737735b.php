    <?php $__env->startSection('content'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            用户信息表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo e(url('admin')); ?>"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="<?php echo e(url('admin/userinfo')); ?>">用户信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 用户信息管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">ID</th>
                      <th>用户id</th>
                      <th>用户名</th>
                      
                      <th>年龄</th> 
                      <th>性别</th>
                      <th>图片</th>
                      
                      <th>邮箱</th>
                      <th>注册时间</th>
                      <!--<th style="width: 100px">操作</th>-->
                    </tr>
                     <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($v->id); ?></td>
                      <td><?php echo e($v->userid); ?></td>
                      <td><?php echo e($v->uname); ?></td> 
                      <td><?php echo e($v->age); ?></td>       
                      <td><?php echo e($v->sex); ?></td>
                      <
                      <td><?php echo e($v->pic); ?></td>
                      
                      
                      <td><?php echo e($v->email); ?></td>
                      <td><?php echo e($v->enrolltime); ?></td>
                      
                      <!--<td><button class="btn btn-xs btn-primary" onclick="window.location='<?php echo e(URL('admin/userinfo')); ?>/<?php echo e($v->id); ?>/edit'">编辑</button> </td>>-->
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                   <?php echo $list->render(); ?>

                </div>

              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        
      
      <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    <?php $__env->stopSection(); ?>
    
    
    <?php $__env->startSection("myscript"); ?>
      <script type="text/javascript">
            function doDel(id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","<?php echo e(url('admin/userinfo')); ?>/"+id).submit(); 
                }
            }
      </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>