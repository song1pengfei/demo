@extends('admin.base')


@section('content')
<!-- Content Header (Page header) -->
       <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
			会员信息管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">信息管理</a></li>
            <li class="active">编辑信息</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- right column -->
		
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-plus"></i> 编辑管理员信息</h3>
                </div><!-- /.box-header -->
				 <form class="form-horizontal" action="{{URL('admin/discussTab')}}/{{ $list->id }}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="_method" value="put">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3"   class="col-sm-2 control-label">对应文章</label>
                      <div class="col-sm-4">
                        <input type="text" name="articleid" readonly class="form-control" value="{{$list->articleid}}">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3"  class="col-sm-2 control-label">评论内容</label>
                      <div class="col-sm-4">
						<textarea cols="23" rows="5" type="text" name="content" readonly ><?php echo $list['content'];?></textarea>
                        
                      </div>
                    </div>
					<div class="form-group">
                      <label for="inputPassword3"  class="col-sm-2 control-label">评论时间</label>
                      <div class="col-sm-4">
                        <input type="text" name="disTime" readonly class="form-control" value="{{$list->disTime}}">
                      </div>
                    </div>	
					<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">状态</label>
                      <div class="col-sm-4">
                        <input type="radio" name="status"  value="1"<?php echo $list['status']=="1"?"checked":"";?>/>待审核
                        <input type="radio" name="status"  value="2"<?php echo $list['status']=="2"?"checked":"";?>/>通过
                        <input type="radio" name="status"  value="3"<?php echo $list['status']=="3"?"checked":"";?>/>未通过
                      </div>
          </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				    <div class="col-sm-offset-2 col-sm-1">
						<button type="submit" class="btn btn-primary">提交</button>
                    </div>
                  </div><!-- /.box-footer -->
                </form> 
				<div class="row"><div class="col-sm-12">&nbsp;</div></div>
				<div class="row"><div class="col-sm-12">
                <br/>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                </div></div>
              </div><!-- /.box -->
       
            </div><!--/.col (right) --> 
		
			
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
    @endsection
  