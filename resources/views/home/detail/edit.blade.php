
@extends('home.detail.base');

  @section('content')
		<form method="post" action="{{URL('home/detail')}}/{{ $list->id }}" id="frmMain">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		 <input type="hidden" name="_method" value="put">



								<div id="Editor_Edit">
									<div id="Editor_Edit_Header" class="CollapsibleTitle">
										<span id="Editor_Edit_headerTitle">添加文章</span>
									</div>
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
										<div id="title">
											<b>上传头像</b>            
											<br>
											<input name="picname" type="file" maxlength="200" value="{{$list->picname}}" id="Editor_Edit_txbTitle" onblur="localPreserver.saveDraftTitle();" onkeydown="title_keydown(event);" style="width:99%;">
										</div>
										<div id="edit_body">
											<b>内容</b>            
											<br>
											<textarea   cols="190" name="content"  rows="20" contenteditable="true">{{ $list->content }}</textarea>
										</div>
									
											<!--<script src="{{asset('homes/js/paste-upload-image.js')}}"></script>
											<script>$('#Editor_Edit_EditorBody').pasteUploadImage('www.cnblogs.com');</script>-->
										</div>
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






				<!--		<script type="text/javascript">    
							$(function () {
								if (isEdit) {
									document.getElementById('Editor_Edit_txbTitle').focus();
									if (currentUseEditor == 1) {
										var editor1 = document.getElementById(currentEditorId);
										if (editor1.IsReady) CuteEditor_OnInitialized(editor1);
									}
									setInterval(localPreserver.saveDraftBody, 10000);
									localPreserver.showViewTip();            
								}
								
							});
						</script》 -->

						</div>
					</td>
				</tr>
			</tbody>
		</table>

      	 @endsection

