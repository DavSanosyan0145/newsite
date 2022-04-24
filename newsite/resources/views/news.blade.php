@extends('layouts.app')

@section('content')
	<div class="main">

	        <?php 
          $reversed = array_reverse($news);
          foreach ($reversed as $key => $value) {
          ?>
        <div class="newsMain">
            <img class="newsImg" src="<?php echo $value['imgUrl'] ?>">
        	
        	<h2 class="newsTitle"><?php echo $value['title'] ?></h2>
           	<p class="newsContent"><?php echo $value['content'] ?></p>
 			<p class="newsDate">Added: <?php echo $value['date'] ?></p>
  		</div>

          <?php
        } ?>
</div>
@endsection