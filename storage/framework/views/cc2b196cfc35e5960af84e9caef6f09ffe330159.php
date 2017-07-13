;

  <?php $__env->startSection('content'); ?>
			
			<form class="form-horizontal" action="<?php echo e(URL('home/personal')); ?>/<?php echo e($list->userid); ?>" method="post">
			 <?php echo e(csrf_field()); ?>

                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <input type="hidden" name="_method" value="put">
			<div class="col-xs-16 col-xs-offset-8 main">
				<table>
					<thead>
						<tr>
							<th class="setting-head responsive-head"></th> 
							<th></th>
						</tr>
					</thead> 
					<tbody class="base">
				
				
				<tr>
					<td class="top-line">
						<div class="avatar">
							<img src="<?php echo e($list->pic); ?>">
						</div>
					</td> 
					<td class="top-line">
						<a class="btn btn-hollow"><input unselectable="on" type="file" class="hide">更改头像</a>
					
					</td>
				</tr> 
				<tr>
					 
					<td class="setting-title">用户名</td>
						
            
					<td>
						
						<input type="text" name="account" value="<?php echo e($list->account); ?>">
						
					</td>
				</tr> 
				<tr>
					<td class="setting-title">电子邮件</td> 
					<td>
						
							<!--<input type="button" value="发送" class="btn btn-hollow pull-right">-->
							<input type="email" name="email" value="<?php echo e($list->email); ?>">
						
					</td>
				</tr> 
				<tr>
					<td class="setting-title">手机</td> 
					<td class="setted">
						<!--<div><?php echo e($list->phone); ?></div>--> 
						<input type="text" name="phone" value="<?php echo e($list->phone); ?>">
							<!--<i class="iconfont ic-collections-followed"></i> -->
							<!--<span>已验证</span>--> 
							<a class="cancel-bind">更换手机</a>
					</td>
				</tr> 
				<tr>
					<td class="setting-title">年龄</td> 
					<td>
						<input type="text" name="age" value="<?php echo e($list->age); ?>">
					</td>
				</tr> 
				<tr>
					<td class="setting-title">性别</td> 
					<td>
						<input type="radio" name="sex" value="m">男&nbsp;&nbsp;

						<input type="radio" name="sex" value="w">女

					</td>
				</tr> 
				
				
				</tbody>
				</table> 
				
			    <input type="submit" class="btn btn-success setting-save" value="保存">

			    <!--<button type="submit" class="btn btn-success setting-save">保存</button>-->
				<!--<button class="btn btn-success setting-save" onclick="window.location='<?php echo e(URL('admin/personal')); ?>/<?php echo e($list->id); ?>/edit'">编辑</button>--><!----> <!---->
			</div>
			</form>

			 <?php $__env->stopSection(); ?>
<?php echo $__env->make('home/personal.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>