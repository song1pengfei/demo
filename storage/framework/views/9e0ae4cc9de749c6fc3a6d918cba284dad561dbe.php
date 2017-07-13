    <?php $__env->startSection('content'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            文章审核列表
            <small>Review list</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">文章列表信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 文章信息</h3>
                  <div class="box-tools">
                    <form action="<?php echo e(url('admin/article')); ?>" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="author" class="form-control input-sm pull-right" placeholder="作者"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>ID</th>
                      <th>用户id</th>
                      <th>文章id</th>
                      <th>标题</th>
                      <th>作者</th>
                      <th>头像</th>
					            <th>文章类型</th>
                      <th>发布时间</th>
                      <th>状态</th>
                      <th>操作</th>
                    </tr>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($v->id); ?></td>
                      <td><?php echo e($v->userid); ?></td>
                      <td><?php echo e($v->cid); ?></td>
                      <td><?php echo e($v->title); ?></td>
                      <td><?php echo e($v->author); ?></td>
                      <td><?php echo e($v->picname); ?></td>
                      <td><?php echo e($v->articleType); ?></td>
                      <td><?php echo e($v->addtime); ?></td>
                      <td class="btn btn-primary btn-xs"><?php if($v->status=='0'): ?>待审核 <?php elseif($v->status=='1'): ?>通过 <?php else: ?>未通过 <?php endif; ?></td>
        
                      <td><button onclick="doDel(<?php echo e($v->id); ?>)" class="btn btn-xs btn-danger">删除</button>
                      <button class="btn btn-xs btn-primary" onclick="window.location='<?php echo e(URL('admin/article')); ?>/<?php echo e($v->cid); ?>/edit'">查看内容详情</button> 
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <?php echo $list->appends($params)->render(); ?>

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
                    $("#mydeleteform").attr("action","<?php echo e(url('admin/article')); ?>/"+id).submit(); 
                }
            }
      </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>