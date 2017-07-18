<?php $__env->startSection('content'); ?>


				<table id="Listing" class="Listing" cellspacing="0" cellpadding="0" border="0" style="">
												<tbody>
													<tr style="text-align: center">

														<th valign="bottom">
															标题
														</th>
												                    
														<th width="40" style="text-align: center">
															操作
														</th>
														<th width="40" style="text-align: center">
															操作
														</th>
													</tr>
											
										 <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<tr id="entry_7086936" class="Alt">
														<td>
															<a class="titlelink" href="">
																<?php echo e($v->title); ?>

														</td>
											               
														<td style="text-align: center">
															  <a dir='ltr' class="btn btn-xs btn btn-warning" onclick="window.location='<?php echo e(URL('home/detail')); ?>/<?php echo e($v->cid); ?>/edit'">编辑</a>
														</td>
														<td style="text-align: center">
															<a class="btn btn-xs btn-danger" onclick="doDel(<?php echo e($v->cid); ?>)"'>删除</a>
														</td>
													</tr>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												
												</tbody>
									</table>
	 <?php $__env->stopSection(); ?>
<?php echo $__env->make('home.detail.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>