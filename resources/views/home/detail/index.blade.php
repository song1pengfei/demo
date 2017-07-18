
@extends('home.detail.base')

@section('content')
	
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
											

										 			@foreach ($res as $v)

													<tr id="entry_7086936" class="Alt">
														<td>
															<a class="titlelink" href="{{url('/home/details')}}/{{$v->id}}">{{$v->title}}</a>
																
														</td>

													
												                
														<td style="text-align: center">
															  <a dir='ltr' class="btn btn-xs btn btn-warning" onclick="window.location='{{URL('home/detail')}}/{{$v->cid}}/edit'">编辑</a>
														</td>
										<td style="text-align: center">
											<a class="btn btn-xs btn-danger" onclick="doDel({{$v->cid}})">删除</a>
										</td>
													</tr>
										@endforeach
										


						</tbody>
					</table>

					<div class="btn-group" role="group" aria-label="...">
						 	 {{ $res->links() }}  
			        </div>
																
									<form action="" style="display:none;" id="mydeleteform" method="post">
						            	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						            	<input type="hidden" name="_method" value="DELETE">
						        	</form>

									
									 <script type="text/javascript">
							            function doDel(id){
							                if(confirm('确定要删除吗？')){
							                    $("#mydeleteform").attr("action","{{url('home/detail')}}/"+id).submit(); 
							                }
							            }
     								 </script>	

	 @endsection

