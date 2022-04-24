@extends('admin/layouts.app')


@section('content')
<style>
	.main{
		width: 500px;
		background-color: #f2f2f2;
		margin: 0 auto;
		padding: 30px;
	}
	.main h3 {
		text-align: center;
	}
	.userform{
	text-align: left;
	color: #007bff;
	}
	input {
		width: 450px;
		display: block;
		padding: 10px;
	
		margin-bottom: 20px;
			}
	.inp1 {
		display: inline-block;
		padding: 30px 30px;
	
}
.submit{
	width: 150px;
}
</style> 
  <div class="content-wrapper">
  	<div class="main">
  		<h3>Edit User</h3>
  	<form class="userform" method="POST" action="{{ route('users_update') }}">
  		@csrf
      Name, surname: <input type="text" name="name" value="<?php echo $user['name'] ?>">
      Email: <input type="text" name="email"  value="<?php echo $user['email'] ?>">
      Password:<input type="password" name="password" >
      UserType:
      Admin <input class="inp1" type="radio" name="usertype">
      <input type="hidden" name="id"  value="<?php echo $user['id'] ?>">
       <input  type="submit" name="Add_product" class="submit">
   </form>
  </div>
  </div>

@endsection
