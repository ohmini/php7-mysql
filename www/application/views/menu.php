<?php 
//console($data_menu);
?>
<body class="<?php echo $data_menu['cat_class']?>">
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<header id="header">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12 header-top-left">
					
				</div>
				<div class="col-sm-6 col-xs-12 header-top-right">
					<ul class="list-unstyled">
						<li><a href="register.html"><i class="fa fa-user-plus top-icon"></i> TH</a></li>
						<li><a href="login.html"><i class="fa fa-lock top-icon"></i>EN</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- Ends: .header-top -->

	
	<div class="header-body science-<?php echo $data_menu['cat_id'];?>" id="" style="background: url(<?php echo base_url().$data_menu['cat_thumbnail'];?>) no-repeat center center!important;">
		<?php /* 
		<nav class="navbar edu-navbar">
			<div class="container" >
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand  data-scroll"><img src="images/logo.png" alt=""><span>EduRead</span></a>
				</div>

				<div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right">
					<li class="active" ><a data-scroll="" href="index.html">Home</a>
						<!-- dropdwon start -->
                        <ul class="dropdown list-unstyled">
                            <li><a href="index.html">Home Version One</a></li>
                            <li><a href="index-02.html">Home Version Two</a></li>
                            <li><a href="index-03.html">Home Version Three</a></li>
                            <li><a href="index-04.html">Home Version Four</a></li>
                        </ul>
                        <!-- dropdown end -->
					</li>
					<li><a data-scroll="" href="courses-01.html">Courses</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="courses-01.html">Course Style One</a></li>
                                <li><a href="courses-02.html">Course Style Two</a></li>
                                <li><a href="courses-03.html">Course Style Three</a></li>
                                <li class="dropdown-list-box-02"><a href="#">Dropdown<i class="fa fa-angle-right menu-icon"></i></a>
	                                <ul class="dropdown-list_2 list-unstyled">
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li class="dropdown-list-box-03"><a href="#">Label One<i class="fa fa-angle-right menu-icon"></i></a>
			                                <ul class="dropdown-list_3 list-unstyled">
			                                    <li><a href="#">Label Two</a></li>
			                                    <li><a href="#">Label Two</a></li>
			                                </ul>
	                                    </li>
	                                </ul>									
                                </li>
                                <li><a href="courses-carousel.html">Course Carousel Style</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                                <li><a href="course-details-left-sidebar.html">Course Details Sidebar</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
						<li><a data-scroll href="event-list.html">Event</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="event-list.html">Event List One</a></li>
                                <li><a href="event-list-1.html">Event List Two</a></li>
                                <li><a href="event-grid-2.html">Event Two Grid</a></li>
                                <li><a href="event-grid-3.html">Event Three Grid</a></li>
								<li><a href="event-details.html">Event Details</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
						<li><a data-scroll href="#">Pages</a>
							<ul class="list-unstyled dropdown">
                                <li><a href="courses-01.html">Courses</a></li>
                                <li><a href="event-list.html">Events</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="teachers-01.html">Teachers</a></li>
                                <li class="dropdown-list-box-02"><a href="#">Dropdown<i class="fa fa-angle-right menu-icon"></i></a>
	                                <ul class="dropdown-list_2 list-unstyled">
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li class="dropdown-list-box-03"><a href="#">Label One<i class="fa fa-angle-right menu-icon"></i></a>
			                                <ul class="dropdown-list_3 list-unstyled">
			                                    <li><a href="#">Label Two</a></li>
			                                    <li><a href="#">Label Two</a></li>
			                                </ul>
	                                    </li>
	                                </ul>									
                                </li>
                                <li><a href="teachers-profile.html">Teachers Porfile</a></li>
                                <li><a href="become-a-teacher.html">Become a Teacher</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Registation</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-post.html">Post</a></li>
                                <li><a href="contact.html">Contact</a></li>
							</ul>
						</li>
					<li><a data-scroll href="teachers-01.html">Teachers</a>
						<!-- dropdwon start -->
                        <ul class="dropdown list-unstyled">
                            <li><a href="teachers-01.html">Teachers Style One</a></li>
                            <li><a href="teachers-02.html">Teachers Style Two</a></li>
                            <li><a href="teachers-profile.html">Teachers Porfile</a></li>
                            <li><a href="become-a-teacher.html">Become a Teacher</a></li>
                        </ul>
                        <!-- dropdown end -->
					</li>
					<li><a data-scroll href="blog.html">Blog</a>
						<!-- dropdwon start -->
                        <ul class="dropdown list-unstyled">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-post.html">Blog Post</a></li>
                        </ul>
                        <!-- dropdown end -->
					</li>
					<li><a data-scroll href="contact.html">Contact</a></li>
					<li><a data-scroll href="#"><i class="fa fa-search search_btn"></i></a>
						<div id="search">
						  	<button type="button" class="close">×</button>
						 	 <form>
						   		 <input type="search" value="" placeholder="Search here...."  required/>
						   		 <button type="submit" class="btn btn_common blue">Search</button>
						 	 </form>
						</div>
					</li>
				</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		*/
		?>

<nav class="navbar edu-navbar">
			<div class="container" >
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand  data-scroll"><img src="images/logo.png" alt=""><span>EduRead</span></a>
				</div>

				<div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right">
					<li><a data-scroll href="contact.html">สำนักงานวิทยาศาสตร์และเทคโนโลยีชั้นสูง</a></li>
					<li <?php if($data_menu['active']=='category_home') echo 'class="active"';?>><a data-scroll href="<?php echo base_url('category/').$data_menu['slug']?>"><?php echo $data_menu['cat_name'];?></a></li>
					<li <?php if($data_menu['active']=='category_tools') echo 'class="active"';?>><a data-scroll href="teachers-01.html">บริการ</a>
						<!-- dropdwon start -->
                        <ul class="dropdown list-unstyled">
                            <li><a href="<?php echo base_url('category/').$data_menu['slug'].'/tools';?>">เครื่องมือ</a></li>
                            <li><a href="<?php echo base_url('category/').$data_menu['slug'].'/services';?>">อัตราค่าบริการ</a></li>
                        </ul>
                        <!-- dropdown end -->
					</li>
					<li <?php if($data_menu['active']=='category_personnel') echo 'class="active"';?>><a data-scroll href="<?php echo base_url('category/').$data_menu['slug'].'/personnel';?>">บุคลากร</a></li>
					<li <?php if($data_menu['active']=='category_contact') echo 'class="active"';?>><a data-scroll href="<?php echo base_url('category/').$data_menu['slug'].'/contactus';?>">ติดต่อเรา</a></li>
					<li><a data-scroll href="#"><i class="fa fa-search search_btn"></i></a>
						<div id="search">
						  	<button type="button" class="close">×</button>
						 	 <form>
						   		 <input type="search" value="" placeholder="Search here...."  required/>
						   		 <button type="submit" class="btn btn_common blue">Search</button>
						 	 </form>
						</div>
					</li>
				</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		
		<div class="container">
			<div class="row" >
				<div class="col-md-12">
					<div class="intro-text ">
						<h1><?php echo $data_menu['cat_name']?></h1>
						<!--
						<p><span><a href="">Home <i class='fa fa-angle-right'></i></a></span> <span class="b-active" >Become a teacher</span></p>
-->
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
	<!--  End header section-->