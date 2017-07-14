
@extends('home.detail.base');


  @section('content')
  		@include('vendor.ueditor.assets')
		<form method="post" action="{{URL('home/detail')}}/{{ $list->id }}" id="frmMain">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		 <input type="hidden" name="_method" value="put">
							


								
									<div id="Editor_Edit_Header" class="CollapsibleTitle">
										<span id="Editor_Edit_headerTitle">添加文章</span>
									</div>
								<div id="Editor_Edit_Contents" style="max-width: 1200px">
									<div id="edit_container">
<div id="Editor_Edit_Contents">
									<div id="edit_container">
										<div id="edit_title">
											<b>标题</b>            
											<br>
											<input name="title" type="text" maxlength="200" id="Editor_Edit_txbTitle"
											value="{{$list->title}}" onblur="localPreserver.saveDraftTitle();" onkeydown="title_keydown(event);" style="width:99%;">
										</div>
										<div id="edit_title">
											<b>作者</b>            
											<br>
											<input name="author"  value="{{$list->author}}" type="text" maxlength="200" id="Editor_Edit_txbTitle" onblur="localPreserver.saveDraftTitle();" onkeydown="title_keydown(event);" style="width:99%;">
										</div>
									

									
													<!-- 实例化编辑器 -->
									    <script type="text/javascript">
									        var ue = UE.getEditor('container');
									        ue.ready(function() {
									            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
									        });
									    </script>

									    <!-- 编辑器容器 -->
									    <script id="container" name="content" type="text/plain">
									    {{ $list->content }}
									    	  
									    </script>
										</div>
									</div>

							

								<div class="post_block">
									<input type="submit" name="Editor$Edit$lkbPost" value="发布"  class="Button">
									<input type="submit" name="Editor$Edit$lkbCancel" value="取消" class="Button">            
								</div>         
								<div style="clear:both;"></div>      
								<span id="tip_posging" style="padding-left:20px;color:red; vertical-align: middle;"></span> 
								<div style="padding-bottom:10px;margin-top:10px;"> 
								
								</div> 
								</div>

							</div>
								</div>

							</form>

						<span id="currentPostId" style="display:none;"></span>



					




			
						</div>
					</td>
				</tr>
			</tbody>
		</table>

           
						 @endsection

