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
		margin: auto;
		margin-bottom: 20px;
			}
	.inp1 {
		display: inline-block;
		padding: 20px 20px;
		margin: 5px;
		margin-bottom: 20px;
}
.submit{
	width: 150px;
}
</style> 
  <div class="content-wrapper">
  	<div class="main">
  		<h3>Edit Post</h3>
  	<form class="userform" method="POST" action="{{ route('news_update') }}">
  		@csrf
      Title: <input type="text" name="title" value="<?php echo $news['title'] ?>">
      Content: <input type="text" name="content" value="<?php echo $news['content'] ?>">
      Img URL:<input type="text" name="imgUrl" value="<?php echo $news['imgUrl'] ?>">
  	Add Date:<input type="date" name="date" value="<?php echo $news['date'] ?>">
<input type="hidden" name="id"  value="<?php echo $news['id'] ?>">
       <input  type="submit" name="Add_product" class="submit">
   </form>
   </div>
  </div>

@endsection


