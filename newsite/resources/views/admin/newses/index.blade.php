@extends('admin/layouts.app')

@section('content')
<style>
 .title{
  text-align: center;
 }
 .createButton{
  color: white;
  border: 1px solid;
  border-radius: 5px;
  padding:10px;
  background-color: #007bff;
  margin: 15px;
  display: inline-block;
 }
  .createButton:hover{
  text-decoration: none;
  color: white;
 }
 .usersTable{
 width: 1000px;
 margin:0 auto;
 }
 .usersTable tr td{
  border: 1px solid #5383d3;
  text-align: center;
  padding:10px;
 }
 .headerTR{
  background-color: #5383d3;
  color: white;
 }
</style> 
 <div class="content-wrapper">
  	<h1 class="title">Newses</h1>
 
  	<a href="{{ url('/admin/newses/create') }}" class="createButton">Create post</a>
<div class="tableDiv">
  <table class="usersTable">
        <tr class="headerTR">
          <td>Title</td>
          <td>Content</td>
          <td>imgUrl</td>
          <td>addDate</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
                  <?php foreach ($news as $key => $value) {
          ?>
        <tr>
            <td><?php echo $value['title'] ?></td>
            <td><?php echo $value['content'] ?></td>
            <td><?php echo $value['imgUrl'] ?></td>
            <td><?php echo $value['date'] ?></td>
            <td><a href="{{ url('/admin/newses/edit/') }}/<?php echo $value['id'] ?>">✎</a></td>
            <td><a href="{{ url('/admin/newses/delete/') }}/<?php echo $value['id'] ?>">✖</a></td>
        </tr>
          <?php
        } ?>
      </table>
</div>
  		
  </div>

@endsection