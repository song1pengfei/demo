
@extends('home.detail.base')

@section('content')


				<table id="Listing" class="Listing" cellspacing="0" cellpadding="0" border="0" style="">

												<tbody>
													<tr style="text-align: center">

														<th valign="bottom">
															标题
														</th>
														<th width="50" style="text-align: center">
															发布状态
														</th>
														<th width="50" style="text-align: center">
															评论数
														</th>
														<th width="50" style="text-align: center">
															阅读数
														</th>                    
														<th width="40" style="text-align: center">
															操作
														</th>
														<th width="40" style="text-align: center">
															操作
														</th>
													</tr>
											
										 @foreach ($list as $v)
													<tr id="entry_7086936" class="Alt">
														<td>
															<a class="titlelink" href="">
																{{$v->title}}
														</td>
														<td style="text-align: center">
															发布
														</td>
														<td style="text-align: center">
															0
														</td>
														<td style="text-align: center">
															1
														</td>                
														<td style="text-align: center">
															  <a href="{{URL('home/detail')}}/{{$v->cid}}/edit">编辑</a>
														</td>
														<td style="text-align: center">
															<a href='delete/{{$v->id}})'>删除</a>
														</td>
													</tr>
													@endforeach
												
												</tbody>

									</table>
	 @endsection

