@extends('admin.layout.index')

@section('themes') class="active" @endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <a href="admin/themes/add"><button type="button" class="btn btn-primary btn-sm"><i class='fa fa-plus'></i> ADD</button></a>
        </h1>
    </div>
</div>
@include('admin.errors.alerts')
<!-- logo -->
<div class="row">
    <div class="col-md-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                LOGO
            </div>
            <div class="panel-body" id="data-cat">
                @if(count($logo) == 0)
                    <h2 style="color:red">The list is empty !!</h2>
                @else
                <table width="100%" class="table table-striped table-bordered table-hover" >
                    <thead>
                        <tr>
							<th></th><th>Name</th><th>Status</th><th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($logo as $val)
						<tr>
							<td><img style="height: 100px;" src="data/themes/{{$val->img}}"></td>
                            <td>{{$val->name}}</td><td class="text-center"><input id="status" name="status" <?php if($val->status == 'true'){echo "checked";} ?> type="checkbox"  /></td>
                            <td  class="text-center"><a href="admin/themes/edit/{{$val->id}}"><i class="fa fa-pencil"></i> sửa </a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@endif
            </div>
        </div>
  	</div>
</div>

<!-- slide -->
<div class="row">
    <div class="col-md-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                SLIDE
            </div>
            <div class="panel-body" id="data-cat">
                @if(count($slide) == 0)
                    <h2 style="color:red">The list is empty !!</h2>
                @else
                <table width="100%" class="table table-striped table-bordered table-hover" >
                    <thead>
                        <tr>
							<th></th><th>Name</th><th>Status</th><th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($slide as $val)
						<tr>
                            <td><img style="height: 100px;" src="data/themes/{{$val->img}}"></td>
                            <td>{{$val->name}}</td><td class="text-center"><input id="status" name="status" <?php if($val->status == 'true'){echo "checked";} ?> type="checkbox"  /></td>
                            <td  class="text-center"><a href="admin/themes/edit/{{$val->id}}"><i class="fa fa-pencil"></i> sửa </a> | <a onClick="javascript:return window.confirm('Bạn muốn xóa sản phẩm này?');" href="admin/themes/delete/{{$val->id}}"><i class="fa fa-trash-o"></i> xóa </a></td>
                        </tr>
						@endforeach
					</tbody>
				</table>
				@endif
            </div>
        </div>
  	</div>
</div>

<!-- logo đối tác -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Logo đối tác
            </div>
            <div class="panel-body" id="data-cat">
                @if(count($logo_doitac) == 0)
                    <h2 style="color:red">The list is empty !!</h2>
                @else
                <table width="100%" class="table table-striped table-bordered table-hover" >
                    <thead>
                        <tr>
                            <th></th><th>Name</th><th>Status</th><th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logo_doitac as $val)
                        <tr>
                            <td><img style="height: 100px;" src="data/themes/{{$val->img}}"></td><td>{{$val->name}}</td><td class="text-center"><input id="status" name="status" <?php if($val->status == 'true'){echo "checked";} ?> type="checkbox"  /></td><td  class="text-center"><a href="admin/themes/edit/{{$val->id}}"><i class="fa fa-pencil"></i> sửa </a> | <a onClick="javascript:return window.confirm('Bạn muốn xóa sản phẩm này?');" href="admin/themes/delete/{{$val->id}}"><i class="fa fa-trash-o"></i> xóa </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection