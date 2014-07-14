@extends('_master')

@section('title')
	Developer's best friend
@stop

@section('content')

<div class="row">
	<div class="col-sm-6">
		<form method="POST" action="/lorem-ipsum" role="form" class="form-horizontal">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Lorem Ipsum generator</h3>
			  </div>
			  <div class="panel-body">
			    <div class="row">
			    	<div class="col-sm-6">
			    		<label for="paragraphs" class="control-label">Paragraphs #</label>
			    	</div>
			    	<div class="col-sm-6">
						<input type="number" class="form-control" id="paragraphs" name="paragraphs" 
									value="<?php echo 2; ?>">
			    	</div>
			    </div>
			    <div class="row">
			    	<div class="button">
						<button type="submit" class="btn btn-primary">Generate Lorem Ipsum</button>
					</div>
			    </div>
			  </div>
			</div>
		</form>
		<p>You can also use links in the format <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/lorem-ipsum/2"; ?>"><?php  echo "http://".$_SERVER['HTTP_HOST']."/lorem-ipsum/2" ; ?></a>
		 where "n" is an integer number that represents the number of paragraphs</p>
	</div>
	<div class="col-sm-6">
		<form method="POST" action="/user-generator" role="form" class="form-horizontal">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">User generator</h3>
			  </div>
			  <div class="panel-body">
			    <div class="row">
			    	<div class="col-sm-6">
			    		<label for="users" class="control-label">Users #</label>
			    	</div>
			    	<div class="col-sm-6">
						<input type="number" class="form-control" id="users" name="users" 
									value="<?php echo 2; ?>">
			    	</div>
			    </div>
			    <div class="row">
			    	<div class="button">
						<button type="submit" class="btn btn-primary">Generate Users</button>
					</div>
			    </div>
			  </div>
			</div>
		</form>
		<p>You can also use links in the format <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/user-generator/2"; ?>"><?php  echo "http://".$_SERVER['HTTP_HOST']."/user-generator/2" ; ?></a>
		 where "n" is an integer number that represents the number of users</p>
	</div>
</div>



@stop
