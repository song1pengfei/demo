
@extends('home/personal.base');

  @section('content')

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
							<img src="{{asset('homes/images/15-a7ac401939dd4df837e3bbf82abaa2a8(1).jpg')}}">
						</div>
					</td> 
					<td class="top-line">
						<a class="btn btn-hollow"><input unselectable="on" type="file" class="hide">更改头像</a>
					
					</td>
				</tr> 
				<tr>
					 
					<td class="setting-title">昵称</td>
						
            
					<td>
						

						<input type="text" value="{{$list->account}}">

						
					</td>
				</tr> 
				<tr>
					<td class="setting-title">电子邮件</td> 
					<td>
						<form>
							<input type="button" value="发送" class="btn btn-hollow pull-right">

							<input type="email" value="{{$list->email}}">

						</form>
					</td>
				</tr> 
				<tr>
					<td class="setting-title">手机</td> 
					<td class="setted">
						<div>157****8103</div> 
							<i class="iconfont ic-collections-followed"></i> 
							<span>已验证</span> 
							<a class="cancel-bind">解除绑定</a>
					</td>
				</tr> 
				<tr>
					<td class="setting-title">年龄</td> 
					<td>

						<input type="text" value="{{$list->age}}">

					</td>
				</tr> 
				<tr>
					<td class="setting-title">性别</td> 
					<td>

						<input type="text" value="{{$list->sex}}">
					</td>
				</tr> 
				
				

				</tbody>
				</table> 
				<a href="{{URL('home/personal/index')}}"<button type="submit" class="btn btn-success setting-save">保存</button></a>
				<!--<button type="submit" class="btn btn-primary">保存</button>--><!----> <!---->
			</div>

	 @endsection

