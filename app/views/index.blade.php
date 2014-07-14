@extends('_master')

@section('title')
	Developer's best friend
@stop

@section('content')
<form method="POST" action="/lorem-ipsum" role="form" class="form-horizontal">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Lorem Ipsum generator</h3>
	  </div>
	  <div class="panel-body">
	    <div class="row">
	    	<div class="col-sm-3">
	    		<label for="paragraphs" class="control-label">Paragraphs #</label>
	    	</div>
	    	<div class="col-sm-2">
				<input type="number" class="form-control" id="paragraphs" name="paragraphs" 
							value="<?php echo 2; ?>">
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="button">
				<button type="submit" class="btn btn-default">Generate Lorem Ipsum</button>
			</div>
	    </div>
	  </div>
	</div>
</form>

<form method="POST" action="/user-generator" role="form" class="form-horizontal">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">User generator</h3>
	  </div>
	  <div class="panel-body">
	    <div class="row">
	    	<div class="col-sm-3">
	    		<label for="users" class="control-label">Users #</label>
	    	</div>
	    	<div class="col-sm-2">
				<input type="number" class="form-control" id="users" name="users" 
							value="<?php echo 2; ?>">
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="button">
				<button type="submit" class="btn btn-default">Generate Users</button>
			</div>
	    </div>
	  </div>
	</div>
</form>

@stop
