@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            信息输出表
            <small>preview of simple tables</small>
          </h1>
          
		  
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 评论信息管理</h3>
                  <div class="box-tools">
                    <form action="{{url('admin/discussTab')}}" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="articleid" class="form-control input-sm pull-right" placeholder="查找"/>
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
                      <th style="width:60px">ID</th>  
                      <th>对应文章</th>
                      <th>评论内容</th>
                      <th>评论时间</th>
                      <th>状态</th>     
                      <th style="width: 100px">操作</th>
                    </tr>
                 @foreach($list as $v)
                    <tr>
                      <td>{{$v->id}}</td>
                      <td>{{$v->articleid}}</td>
                      <td>{{$v->content}}</td>       
                      <td>{{$v->disTime}}</td>
                      <td>@if($v->status==1)待审核@elseif($v->status==2)通过@elseif($v->status==3)未通过@endif</td>  
                      <td><button onclick="doDel({{$v->id}})" class="btn btn-xs btn-danger">删除</button> 
					  
                     
						<a href="{{URL('admin/discussTab')}}/{{$v->id}}/edit" class="btn btn-xs btn-danger">详情</a>
					  </td>
                    </tr>
                    @endforeach
                  
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
				 {!! $list->appends($params)->render() !!}
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
                    $("#mydeleteform").attr("action","{{url('admin/discussTab')}}/"+id).submit(); 
                }
            }
      </script>
    @endsection
  