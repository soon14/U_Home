<?php 


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>U_Homer</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body >
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="index.php">��ҳ</a></li>
						<li><a  href="about.php">��������</a></li>
						<li><a  href="blog.php">�����</a></li>
						<li><a  href="terms.php">��ͬ����</a></li>
						<li><a  href="privacy.php">��˽����</a></li>
						<li><a  href="contact.php">��ϵ����</a></li>
					</ul>
				</nav>			
			</div>
		</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.php">U_Homer</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+18241137622</span></li>
				<li><a  href="login.php"><i class="glyphicon glyphicon-user"> </i>��¼</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
			   
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>��������</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>��ҪѰ��</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>��Ҫ����</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
								 	<div class="facts">
									  	<div class="login">
											<input type="text" value="��������������" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '��������������';}">		
									 		<input type="submit" value="">
									 	</div>        
							        </div>
						  		</div>
							     <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">									
										<div class="login">
											<input type="text" value="��������������" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '��������������';}">		
									 		<input type="submit" value="">
									 	</div> 
							        </div>	
								 </div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="facts">
										<div class="login">
											<input type="text" value="��������������" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '��������������';}">		
									 		<input type="submit" value="">
									 	</div> 
							         </div>	
							    </div>
					      </div>
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
			  			 </script>	
				</div>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//����ͼ���ֵ�ͼƬ��ַ��style.css�ļ�427��-->	
	<div class=" header-right">
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		       
					 <li>
			          	 <div class="banner1">
			           		<div class="caption">
					          	<h3><span>WEL</span>us site</h3>
					          	<p>Ϊ���Ҵ��������</p>
			          		</div>
			          	</div>
			         </li>
					 <li>
			          	 <div class="banner2">
			           		<div class="caption">
					          	<h3><span>WEL</span>us site</h3>
					          	<p>Ϊ�������͵�����</p>
			          		</div>
			          	</div>
			         </li>
			         <li>
			          	 <div class="banner3">
			           		<div class="caption">
					          	<h3><span>WEL</span>us site</h3>
					          	<p>Ϊ�����̵��δ��</p>
			          		</div>
			          	</div>
			         </li>		
			      </ul>
			  </div>
			</div>
		</div>
	</div>
	 
	<!--header-bottom-->
	<div class="banner-bottom-top">
			<div class="container">
			<div class="bottom-header">
				<div class="header-bottom">
					<div class=" bottom-head">
						<a href="buy.php">
							<div class="buy-media">
                                <h6>��ҪѰ��</h6>
								<i class="buy"> </i>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="sale.php">
							<div class="buy-media">
                            <h6>��Ҫ����</h6>
							<i class="rent"> </i>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="pravate_order.php">
							<div class="buy-media">
                            <h6>˽�˶���</h6>
							<i class="apart"> </i>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="congregation.php">
							<div class="buy-media">
                            <h6>VR����</h6>
							<i class="deal"> </i>
							</div>
						</a>
					</div>
                    
<!--                    <div class=" bottom-head">
						<a href="http://hotel.elong.com/">
							<div class="buy-media">
							<i class="pg"> </i>
							<h6>�����ⷿ</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="resale.php">
							<div class="buy-media">
							<i class="sell"> </i>
							<h6>ת���ҵ�</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="http://dl.uaf.com.cn/Online/OnlineNew/baidu">
							<div class="buy-media">
							<i class="loan"> </i>
							<h6>���ݴ���</h6>
							</div>
						</a>
					</div>-->

					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	</div>
			<!--//-->
				
	<!--//header-bottom-->
	
	
<!--//header-->
<!--content-->
<div class="content">
	<div class="content-grid">
		<div class="container">
			<h3>��������</h3>
				<div class="col-md-4 box_2">
			     	 <a href="single.php" class="mask">
			     	   	<img class="img-responsive zoom-img" src="himages/z2.jpg" alt="">
			     	   	<span class="four">��17000</span>
			     	 </a>
			     	   <div class="most-1">
			     	   	 <h5><a href="#">�������������㳡��ҵȦ</a></h5>
			     	    	<p>3��2��1�� 2016-04-05</p>
			     	   </div>
			 </div>
			  <div class="col-md-4 box_2">
		     	 <a href="single.php" class="mask">
			     	   	<img class="img-responsive zoom-img" src="himages/y2.jpg" alt="">
			     	   	<span class="four">��2000</span>
			     	 </a>
		     	   <div class="most-1">
			     	   	<h5><a href="#">��������������ܰԷ</a></h5>
			     	    	<p>2��1��1�� 2015-12-31</p>
			     	   </div>
		     	
		      </div>
			  <div class="col-md-4 box_2">
		     	 <a href="single.php" class="mask">
			     	   	<img class="img-responsive zoom-img" src="himages/g6.jpg" alt="" >
			     	   	<span class="four">��2600</span>
			     	 </a>
		     	   <div class="most-1">
			     	   	 <h5><a href="#">������ɽ�����·��Ӣ��</a></h5>
			     	    	<p>1��1��1��  2015-12-31</p>
			     	   </div>
		     	
		      </div>
		 	<div class="clearfix"> </div>
		</div>
	</div>
<!--project--->
	<div class="project">
		<div class="container">
			<h3>��Դ����</h3>
				<div class="project-top">
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							 <a href="single.php" class="mask"><img src="images/ga.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.1</span>
									 </div>
									 <div class="col-md4">
									 	<strong>�������</strong>
									 	<small>50 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>С�߲� ��װ90ƽ2��2�� �ҵ���ȫ</p>
								 <p class="cost">��2300</p>
								 <a href="#" class="hvr-sweep-to-right more">���� >></a>
							 </div>
						</div>
					</div>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							  <a href="single.php" class="mask"><img src="images/ga1.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.4</span>
									 </div>
									 <div class="col-md4">
									 	<strong>����E��</strong>
									 	<small>61 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>��װ����һ�� �ҵ�ȫ�� �����ס</p>
								 <p class="cost">��1600</p>
								 <a href="#" class="hvr-sweep-to-right more">���� >></a>
							 </div>
						</div>
					</div>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							  <a href="single.php" class="mask"><img src="images/ga2.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 3.9</span>
									 </div>
									 <div class="col-md4">
									 	<strong>����ԣ��</strong>
									 	<small>42 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>1��2��3�� ������ס ��Դ�����й�</p>
								 <p class="cost">��3300</p>
								 <a href="#" class="hvr-sweep-to-right more">���� >></a>
							 </div>
						</div>
					</div>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							  <a href="single.php" class="mask"><img src="images/ga3.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.1</span>
									 </div>
									 <div class="col-md4">
									 	<strong>���ҷ�Դ</strong>
									 	<small>20 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>1��С��Ԣ ������ʱ������ס</p>
								 <p class="cost">��1800</p>
								 <a href="#" class="hvr-sweep-to-right more">���� >></a>
							 </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>				
		</div>
	</div>
<!--//project-->
<!--service-->
	<div class="services">
		<div class="container">
			<div class="service-top">
				<h3>��Ŀ</h3>
				<p>���ڴ�ѧ��C2B˽�˶����ⷿƽ̨</p>
			</div>
			<div class="services-grid">
		   		<div class="col-md-6 service-top1">
		   			<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </a>
		   			</div>
		   			<div  class="ser-top">
		   				<h4>�Ŷӳ�Ա</h4>
		   				<p>�����٣���֯Э�������Ȱ����Լ��߻��飻
                           ��˹�ʣ��㷨ƥ�������Լ�΢�Ŷ˽ӿڿ�����
                           ��Т˧�����������Լ��߻��飻
                           ʷС�ɣ��г�����Ӫ�Լ���ϵ�̼ң�
                           ��浣���硢PPT������ </p>
		   		    </div>
					<div class="clearfix"> </div>
		   	   </div>
				<div class="col-md-6 service-top1">
		   			<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-leaf"> </a>
		   			</div>
		   			<div  class="ser-top">
		   				<h4>�о�Ŀ��</h4>
		   				<p>Խ��Խ�����У��ѧ��������ѡ�������ⷿ�������ڷ��۲������ǣ����Ҳ��֮ˮ�Ǵ��ߣ�ʹ�ø�У�����ķ�������Ѿ��ǵ�ǧԪ���ϣ����ºܶ�ѧ�������ѿ�ʼ���Զ�ĵط�Ѱ�Ҹ����˵ķ�Դ�� </p>
		   		    </div>
					<div class="clearfix"> </div>
		   		</div>
		   	<div class="clearfix"> </div>
		 </div>
		 <div class="services-grid">
			   	<div class="col-md-6 service-top1">
			   		<div class=" ser-grid">	
			   			<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-cog"> </a>
			   		</div>
			   		<div  class="ser-top">
			   			<h4>�о�����</h4>
			   				<p>����Ŀ���ڴ�ѧ��C2B˽�˶����ⷿƽ̨��ּ�ڸ��´�ͳ���ⷿ��ʽ��Ϊ��ѧ���ⷿ����������ƽ̨����΢�Ŷ˽ӿڼ���������ʵ�ֿͻ�Ⱥ�����̼ҵĶԽӣ��ͻ����Ժܷ����ͨ��ƽ̨����������Ҫ�ķ��ͣ���������ƽ̨����פ�Ķ�������ڴ�ѧ�����̼ҡ� </p>
			   		</div>
					<div class="clearfix"> </div>
			   	</div>
				<div class="col-md-6 service-top1">
			   		<div class=" ser-grid">	
			   			<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </a>
			   		</div>
			   		<div  class="ser-top">
			   			<h4>��Ŀ��ɫ</h4>
			   			<p>����΢�Ŷ˽ӿڿ�����������ǰ�ؼ������ⷿ��ʽ���������������ȺΪ�����������ṩC2B˽�˶��Ʒ��񣬸����˴�ͳ���ⷿƽ̨��</p>
			   		</div>
					<div class="clearfix"> </div>
			   	</div>
		   	  <div class="clearfix"> </div>
		 	</div>
		</div>
	</div>
<!--//services-->
<!--phone-->
	<div class="phone">
		<div class="container">
			<div class="col-md-6">
				<img src="images/ph1.png" class="img-responsive" alt=""/>
			</div>
			<div class="col-md-6 phone-text">
				<h4>Search Homes Everywhere</h4>
					<div class="text-1">
						<h5>���Ƕ�λ</h5>
						<p>����LBS�Ŀ�����������������Ƕ�����֪��</p>
					</div>
					<div class="text-1">
						<h5>��ͼ����</h5>
						<p>���ڵ�ͼ��API��������������ÿ���ط���������</p>
					</div>
					<div class="text-1">
						<h5>��ϸ��</h5>
						<p>����ÿ���˲�ͬ��Ʒζ��������ͬ��С����</p>
					</div>
					<a href="#" class="hvr-sweep-to-right more">���� App</a>
			</div>
		</div>
	</div>
<!--//phone-->
<!--partners-->
	<div class="content-bottom1">
		<h3>Our Partners</h3>
	 		<div class="container">
				<ul>
					<li><a href="#"><img class="img-responsive" src="images/lg.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg1.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg2.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg3.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg4.png" alt=""></a></li>
				<div class="clearfix"> </div>
				</ul>
				<ul>
					<li><a href="#"><img class="img-responsive" src="images/lg5.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg6.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg7.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg8.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg9.png" alt=""></a></li>	
				<div class="clearfix"> </div>
				</ul>
			</div>
		</div>	
<!--//partners-->	
	</div>
<!--footer-->
<div class="footer">
		<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-8 footer-class">
				<p >Copyright &copy; 2016.Company name All rights reserved.</p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->
</body>
</html>