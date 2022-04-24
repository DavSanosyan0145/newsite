@extends('layouts.app')

@section('content')
<div class="main">
	<div class="contact" style="height: 850px;">
		<div class="top">
<div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=gyumri&t=k&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:350px;width:1000px;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:1000px;}</style></div>

		<div class="left">
		<div class="contactItems">
        		<div>
        		<i class="fa fa-map-marker"></i>
        		<p><span>Gayi street</span> Gyumri, Armenia</p>
        		</div>
        		<div>
        		<i class="fa fa-phone"></i>
        		<p>+374 10 398413</p>
        		</div>
        		<div>
        		<i class="fa fa-envelope"></i>
        		<p>dav.sanosyan.dev@gmail.com</p>
        		</div>
        </div>
		</div>


		<div class="right">
			<form >
    		<label for="fname">First Name</label>
    		<input type="text" id="fname" name="firstname" placeholder="Your name..">

			<label for="email">Email</label>
    		<input type="text" id="email" name="email" placeholder="Your email..">

    		<label for="title">Title</label>
    		<input type="text" id="title" name="title" placeholder="Message Title..">

    		<label for="content">Content</label>
    		<input type="text" id="content" name="content" placeholder="Message Content..">
    		<input type="submit" value="Send">
  </form></div>
		</div>
</div>
@endsection
