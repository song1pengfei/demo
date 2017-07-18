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
											
										 @foreach ($list as $v)
													<tr id="entry_7086936" class="Alt">
														<td>
															<a class="titlelink" href="{{url('/home/details')}}/{{$v->id}}">
																{{$v->title}}
														</td>
											               
														<td style="text-align: center">
															  <a dir='ltr' class="btn btn-xs btn btn-warning" onclick="window.location='{{URL('home/detail')}}/{{$v->cid}}/edit'">编辑</a>
														</td>
														<td style="text-align: center">
															<a class="btn btn-xs btn-danger" onclick="doDel({{$v->cid}})"'>删除</a>
														</td>
													</tr>
													@endforeach
												
												</tbody>
									</table>
	 @endsection