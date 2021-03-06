<!DOCTYPE html>
<html lang="en">
<head>
	
	{{-- start: Meta --}}
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link id="bootstrap-style" href="{{asset('pr/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('pr/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('pr/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('pr/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="{{asset('pr/cimg/favicon.ico')}}" >

	
		
		
		
</head>

<body>
	

	@if(count($errors)>0)
	   <div class="alert alert-danger"
	     <ul>
		   @foreach($errors->all() as $error)
		     <li>{{$error}}</li>
			 @endforeach
			</ul>
			</div>
			@endif





	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>PR</span></a>
								
			
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-bell"></i>
								<span class="badge red">
								7 </span>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
					{{-- start: Notifications Dropdown --}}
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-calendar"></i>
								<span class="badge red">
								5 </span>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						{{-- end: Notifications Dropdown --}}
						{{-- start: Message Dropdown --}}
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
								<span class="badge red">
								4 </span>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						
						{{-- start: User Dropdown --}}
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Michael Pratama
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
					{{-- end: User Dropdown --}}
					</ul>
				</div>
				{{-- end: Header Menu --}}
				
			</div>
		</div>
	</div>
	{{-- start: Header --}}
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			{{-- start: Main Menu --}}
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
				
                    <li>{!! link_to(route('home.index'),"Tabel data")!!}</li>
				
                    
					</ul>
				</div>
			</div>
			{{-- end: Main Menu --}}
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			{{-- start: Content --}}
			<div id="content" class="span10">
			
		
            <div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Data raport baru</h2>
					
					</div>
					<div class="box-content">
                    {!! Form::model($data,['route'=>['raport.update',$data->id],'method'=>'put'],array('class'=>"form-horizontal"))!!}		
						  <fieldset>
							<div class="control-group">
								<table width="600px">
							<tr>
								<td>{!! Form::label('id_siswa','Masukan Id siswa',array('class'=>"control-label",'for'=>"typeahead"))!!}</td>
							 <td>
								<div class="controls">
							        {!! Form::select('id_siswa',$siswa,null,array('placeholder'=>"isi id siswa")) !!}
							  </div>
                               </td>	
							</div>
                            </tr> 
                           <tr>
						   <div class="control-group">
						<td>	{!! Form::label('id_matkul','Masukan id matkul:',array('class'=>"control-label",'for'=>"typeahead"))!!}	</td> 
						<td>	<div class="controls">
						{!! Form::select('id_matkul',$matkul,null,array('placeholder'=>"isi id matkul")) !!}
							  </div>
                            </td>
							  </div>
							   </tr>
							   <tr>
							<div class="control-group">
							<td> {!! Form::label('nama_guru','Masukan nama guru:',array('class'=>"control-label",'for'=>"typeahead"))!!}
							<td>  
							<div class="controls">
                            {!! Form::text('nama_guru',null,array('placeholder'=>"isi nama guru")) !!}
							  </div>
                               </td>
							</div>
                            </tr>
							<tr>
						   <div class="control-group">
						<td>	{!! Form::label('nilai','Masukan Nilai:',array('class'=>"control-label",'for'=>"typeahead"))!!}	</td> 
						<td>	<div class="controls">
						{{ Form::select('nilai', [
                           'A' => 'A',
                           'B' => 'B',
                             'C' => 'C',
                              'D'=>'D']
                              ) }}
							  </div>
                            </td>
							  </div>
							   </tr>
						        </table>
							
							<div class="form-actions">
							{!! Form::submit("Masukan data",array('class'=>"btn btn-primary")) !!}
                     		{!! Form::reset("Reset",array('class'=>"btn")) !!}
							
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			{{-- end: Content --}}
		</div>{{--/#content.span10--}}
		</div>{{--/fluid-row--}}
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	
	
	
	{{-- start: JavaScript--}}

		<script src="{{asset('pr/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('pr/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('pr/js/modernizr.js')}}"></script>
	
		<script src="{{asset('pr/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('pr/js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('pr/js/excanvas.js')}}"></script>
	<script src="{{asset('pr/js/jquery.flot.js')}}"></script>
	<script src="{{asset('pr/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('pr/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('pr/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('pr/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('pr/js/counter.js')}}"></script>
	
		<script src="{{asset('pr/js/retina.js')}}"></script>

		<script src="{{asset('pr/js/custom.js')}}"></script>
	{{-- end: JavaScript--}}
	
</body>
</html>
