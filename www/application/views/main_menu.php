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

	
	<div class="header-body" id="" style="background: url(<?php echo base_url().$data_menu['cat_thumbnail'];?>) no-repeat center center!important;">
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
					<li><a data-scroll href="contact.html">หน้าหลัก</a></li>
					<li><a data-scroll href="contact.html">เกี่ยวกับ</a></li>
					<li><a data-scroll href="teachers-01.html">หน่วยงาน</a>
						<!-- dropdwon start -->
                        <ul class="dropdown list-unstyled">
                            <li><a href="#">ศูนย์เครื่องมือ</a></li>
                            <li><a href="#">ศูนย์ยา</a></li>
                        </ul>
                        <!-- dropdown end -->
					</li>
					<li><a data-scroll href="teachers-01.html">เอกสาร</a>
						<!-- dropdwon start -->
                        <ul class="dropdown list-unstyled">
                            <li><a href="#">ประกาศ</a></li>
							<li><a href="#">อัตราค่าบริการ</a></li>
                            <li><a href="#">แบบฟอร์มขอใช้บริการ</a></li>
                        </ul>
                        <!-- dropdown end -->
					</li>
					<li><a data-scroll href="teachers-01.html">ข่าวประชาสัมพันธ์</a>
						<!-- dropdwon start -->
                        <ul class="dropdown list-unstyled">
                            <li><a href="#">ประกาศ</a></li>
							<li><a href="#">อัตราค่าบริการ</a></li>
                            <li><a href="#">แบบฟอร์มขอใช้บริการ</a></li>
                        </ul>
                        <!-- dropdown end -->
					</li>
					<li><a data-scroll href="#">ติดต่อเรา</a></li>
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

	<?php 
	if($data_menu['slug'] =='home')
	{
		//console($data_menu['slide']);
	?>

 	<!--==================
		Slider
	===================-->
    <div class="rev_slider_wrapper">
       <div id="rev_slider_1" class="rev_slider" >

            <!-- BEGIN SLIDES LIST -->
            <ul>
				<?php 
				foreach($data_menu['slide'] as $row)
				{
				?>
				<li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text" data-thumb="<?php echo base_url().$row['thumbnail'];?>">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="<?php echo base_url().$row['thumbnail'];?>" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-140" 
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;"><?php echo $row['title'];?> 
					</div>
					
					
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-10" 
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;"><?php echo $row['description'];?> 
					</div>						
					
					<!-- LAYER NR. 4 -->
					<div class="tp-caption lfb tp-resizeme header-btn" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="90" 
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 8;"><a href="<?php $row['link'];?>" class="el-btn-regular">View More</a>
					</div>
				</li>
				<?php 
				}
				?>
            </ul><!-- END SLIDES LIST -->

        </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
	<?php 
	}
	?>

</header>
	<!--  End header section-->