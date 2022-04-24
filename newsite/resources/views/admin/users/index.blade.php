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
  	<h1 class="title">All Users</h1>
 
  	<a href="{{ url('/admin/users/create/') }}" class="createButton">Create User</a>
<div class="tableDiv">
  <table class="usersTable">
        <tr class="headerTR">
          <td>Name</td>
          <td>Email</td>
           <td>User Type</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
           <?php foreach ($users as $key => $value) {
          ?>
        <tr>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['email'] ?></td>
             <td><?php echo  ($value['usertype'] =='on' || $value['usertype'] == 'Bike') ?  "admin" : "user";  ?></td>
            <td><a href="{{ url('/admin/users/edit/') }}/<?php echo $value['id'] ?>">✎</a></td>
            <td><a href="{{ url('/admin/users/delete/') }}/<?php echo $value['id'] ?>">✖</a></td>
        </tr>
          <?php
  
          
        } ?>
      </table>
</div>
  		
  </div>

@endsection