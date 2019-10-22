<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php

//console($data);
//echo getDoctypeName()
//console($data['menu']);

?>



<section class="slider-content-bottom">
	<div class="container">
		<div class="row sider-btm-row-inner">
			<?php 
			$i = 1;
			foreach($data['category'] as $row)
			{
			?>
			<style>
				.slider-content-bottom .btm-item::before {
					background: <?php echo $row['color']?>!important;
				}
			</style>
			<div class="col-sm-3 content_body slide_cont_box_0<?php echo $i;?>" >
				<div class="slider-btm-box btm-item_0<?php echo $i;?>">
					<img src="<?php echo base_url()?>assets/images/index/slide-bottom-01.png" alt="" class="btm-item-icon">
					<h3 style="text-align: left!important;min-height: 80px;"><?php echo $row['cat_name']?></h3>
					<p><?php echo $row['description'];?></p>
					<a href="#">read more<i class="fa fa-long-arrow-right slider-b-btn-icon"></i></a>
				</div>
			</div>
			<?php 
			$i++;
			}
			?>

			

		</div>
	</div>
</section>	


<section class="trausted-stu-area" style="padding: 60px 0;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="trausted-content">
					<div class="row">
						<div class="col-sm-12 col-md-12" >
							<h3 class="section-h-medium" style="float:right;">นโยบายคุณภาพ สำนักงานวิทยาศาสตร์และเทคโนโลยีขั้นสูง</h3>
							<p style="float:right;padding-top:14px;">มุ่งมั่นปรับปรุงให้บริการด้วยใจ โปร่งใสบริหารงาน ได้มาตรฐานสากล เพื่อประสิทธิผลของผู้ใช้บริการ</p>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start Blog page Area section -->
<section class="blog-area" style="padding-top: 35px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header" style="text-align: left!important;">
					<span style="font-size:28px;"><strong>งานที่ให้บริการ</strong></span>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">
			<?php 
			foreach($data['service'] as $row)
			{
			?>
			<div class="col-sm-4 latest-news-single">
				<div class="blog-single-box">
					<div class="img-box">
						<img src="<?php echo base_url().$row['thumbnail'];?>" alt="" class="img-responsive">
					</div>
					<div class="blog-content">
						<h3><a href="<?php echo $row['link'];?>"><?php echo $row['title'];?></a></h3>
					</div>
				</div>
			</div>
			<?php 
			}
			?>
		</div>
	</div>
</section>
<!-- ./ End blog Area section -->



<!--Start Courses Area Section-->
<section class="Courses-area" style="background: white;
    padding: 0 0 30px 0;">
	<div class="container">	
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header" style="text-align: left!important;">
					<span style="font-size:28px;"><strong>ข่าวสาร</strong></span>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row courses-r-margin-bottom">
			
			<?php 
			foreach($data['news'] as $row)
			{
			?>
			<div class="col-sm-3 single-courses-box">
			    <div class="single-courses">
					<figure>
						<div class="figure-img"><img src="<?php echo base_url().$row['thumbnail'];?>" alt="" class="img-responsive"></div>
						<figcaption>
							<div><a href="<?php echo base_url('news/detail/').$row['news_id'];?>" target="_blank" class="read_more-btn">Read More</a></div>
						</figcaption>
					</figure>
					<div class="courses-content-box">
						<div class="courses-content">
							<div class="rank-icons" style="min-height: 35px;">
								<span style="float:left!important;"><?php echo $row['title'];?></span>
							</div>	
							
						</div>
						<div class="courses-content-bottom">
							<ul class="list-unstyled">
								<li><i class="fa fa-clock-o"></i></li>
								<li><span><?php echo $row['create_date'];?></span></li>
							</ul>
						</div>
					</div>
				</div><!-- Ends: .single courses -->
			</div><!-- Ends: . -->
			<?php 
			}
			?>

	</div>
</section><!-- Ends: . -->	
<!-- ./ End Courses Area section -->

<!-- Start Welcome Area section -->
<section class="pr-area" style="background: white;
    padding: 35px 0 28px 0;">
	<div class="container">	
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header" style="text-align: left!important;">
					<span style="font-size:28px;"><strong>ข่าวประชาสัมพันธ์</strong></span>
				</div><!-- ends: .section-header -->
			</div>
		</div>
		<div class="row">
		<div class="curriculum-text-box">
						<div class="curriculum-section">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title click">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="">
											ข่าวประชาสัมพันธ์<span>0/5</span></a>
										</h4>

									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="row curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>ประกาศ หลักเกณฑ์และอัตราค่าธรรมเนียมการใช้บริการของสำนักงานวิทยาศาสตร์และเทคโนโลยีชั้นสูง (เพิ่มเติมฉบับที่ 2) พ.ศ.2562</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>การให้บริการห้องปฏิบัติการความปลอดภัยทางชีวภาพ ระดับ 2 Blosafety Level 2 (BSL-2) Laboratory</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>ศูนย์เครื่องมือวิทยาศาสตร์เพื่อการวิจัยขั้นสูง ขอเชิญเข้าร่วมอบรม การกำจัด Microorganisms ในห้องปฏิบัติการ วันพุธที่ 27 มีนาคม 2562 </span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>คำสั่ง สำนักงานวิทยาศาสตร์และเทคโนโลยีชั้นสูง มหาวิทยาลัยธรรมศาสตร์</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
										กิจกรรมอบรม<span>0/4</span></a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="row curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
										สมัครงาน<span>0/3</span></a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="row curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
										จัดซื้อจัดจ้าง<span>0/3</span></a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="row curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row  curriculum-single">
												<div class="con-sm-12">
													<div class="row">
														<div class="col-sm-10">
															<div class="lecture">
																<div class="col-sm-3">
																	<span><i class="fa fa-clock-o"></i>22-04-2562</span>
																</div>
																<div class="col-sm-9">
																	<span>Duration: 30mins</span>
																</div>
															</div>
														</div>
														<div class="col-sm-2">
															<div class="lecture-btn pull-right">
																<a href="">Preview</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div> <!-- .curriculum-section-text END -->
						</div>
					</div>
		</div>
	</div>				
</section><!-- Ends: . -->
<!-- ./ End Welcome Area section -->


<!-- Start Events Area Section -->
<section class="events-area" style="background: white;
    padding: 30px 0 30px 0;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header" style="text-align: left!important;">
					<span style="font-size:28px;"><strong>จดหมายข่าว</strong></span>
				</div><!-- ends: .section-header -->
			</div>
		</div>
		<?php 
		foreach($data['news_recommend'] as $row)
		{
		?>	
		<div class="row">
			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-6">
							<img src="<?php echo base_url().$row['thumbnail'];?>" alt="" class="img-responsive">
						</div>
						
						<div class="col-sm-6 event-info">
							<h3><?php echo $row['title'];?></h3>
							<p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									<?php echo $row['create_date'];?>
								</span>
							</p>

							<p><?php echo iconv_substr($row['description'], 0,300, "UTF-8");?>…</p>

							<a class="event-btn" href="<?php echo base_url('news/detail/').$row['news_id'];?>">Read More<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<?php 
		}
		?>
	</div>
</section>
<!-- ./ End Events Area section -->



<!-- Instraction Area section -->
<section class="instraction-area">
	<div class="container">
		<div class="row inspiration-full-box">
			<!--
			<div class="col-md-9 section-header-l">
				<h2>Like to become an instructor?</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
			</div>

			<div class="col-md-3">
				<div class="instraction-btn">
					<a href="#" class="">get strated now</a>
				</div>
			</div>
		-->
		</div>
	</div>
</section>
<!-- ./ End Instraction Area section -->	
