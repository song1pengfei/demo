@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            用户信息表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="{{url('admin/userinfo')}}">用户信息</a></li>
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
                     @foreach($list as $v)
                    <tr>
                      <td>{{$v->id}}</td>
                      <td>{{$v->userid}}</td>
                      <td>{{$v->uname}}</td> 
                      <td>{{$v->age}}</td>       
                      <td>{{$v->sex}}</td>
                      <
                      <td>{{$v->pic}}</td>
                      
                      
                      <td>{{$v->email}}</td>
                      <td>{{$v->enrolltime}}</td>
                      
                      <!--<td><button class="btn btn-xs btn-primary" onclick="window.location='{{URL('admin/userinfo')}}/{{ $v->id }}/edit'">编辑</button> </td>>-->
                    </tr>
                    @endforeach
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                   {!! $list->render() !!}
                </div>

              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        
      
      <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    @endsection
    
    
    @section("myscript")
      <script type="text/javascript">
            function doDel(id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","{{url('admin/userinfo')}}/"+id).submit(); 
                }
            }
      </script>
    @endsection