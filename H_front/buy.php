<?php 
require_once '../include.php';
//���ݳ��ж�λ��Ȧ
$lcity = "����";
$locationrows = getLocationbyCity($lcity);
//�õ��̼ҹ�������
$adrow = getAD();
//������ʾ��
$showhousesrows = showHouses();

?>
<!DOCTYPE html>
<html>
<head>
<title>��ҪѰ��</title>
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

</head>
<body>
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
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+182 4113 7622</span></li>
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
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>��Ҫ</span>Ѱ��</h3> 
	<!---->
	<div class="menu-right">
		 <ul class="menu">
			<li class="item1"><a href="#">�� ��<i class="glyphicon glyphicon-menu-down"> </i> </a>
			<ul class="cute">
				<li class="subitem1"><a href="buy.php">��Ҫ���� </a></li>
				<li class="subitem2"><a href="sale.php">��Ҫ���� </a></li>
				<li class="subitem3"><a href="pravate_order.php">˽�˶��� </a></li>
				<li class="subitem1"><a href="congregation.php">VR���� </a></li>
			</ul>
		</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
		<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
      		
	</div>
</div>
<!--//header-->
<div class="container">
	
	<!--price-->
	<form action="dosearch.php?act=getHouses" method="post" >
	<div class="price">
		<div class="price-grid">
			<div class="col-sm-4 price-top">
				<h4>��Ȧ</h4>
				<select class="in-drop">
					<option>��ѡ�����</option>
					<?php foreach ($locationrows as $locationrow): ?>
					<option><?php echo $locationrow['hLocation'];?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="col-sm-4 price-top">
				<h4>����</h4>
				<select class="in-drop">
					<option>��ͨסլ</option>
					<option>�Ƶ깫Ԣ</option>
					<option>����</option>
					<option>д��¥</option>
					<option>����</option>
					<option>�ֿ⳧��</option>
					<option>���⳵λ</option>
				</select>
			</div>
			<div class="col-sm-4 price-top">
				<h4>����</h4>
				<select class="in-drop">
					<option>��ѡ����</option>
					<option>һ��</option>
					<option>����</option>
					<option>����</option>
					<option>�ķ�</option>
					<option>�巿</option>
					<option>�巿����</option>
				</select>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="price-grid">
			<div class="col-sm-6 price-top1">
				<h4>���/ʱ��/�۸�</h4>
				<ul>
					<li>
						<select class="in-drop">
							<option>��ѡ��۸�Χ</option>
							<option>500Ԫ����</option>
							<option>500Ԫ</option>
							<option>800Ԫ</option>
							<option>1000Ԫ</option>
							<option>1500Ԫ</option>
							<option>2000Ԫ</option>
							<option>3000Ԫ</option>
							<option>4000Ԫ</option>
						</select>
					</li>
					<span>-</span>
					<li>
						<select class="in-drop">
							<option>---</option>
							<option>800Ԫ</option>
							<option>1000Ԫ</option>
							<option>1500Ԫ</option>
							<option>2000Ԫ</option>
							<option>3000Ԫ</option>
							<option>4000Ԫ</option>
							<option>5000Ԫ</option>
							<option>5000Ԫ����</option>
						</select>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 price-top1">
				<h4>���</h4>
				<ul>
					<li>
						<select class="in-drop">
							<option>��ѡ��Χ</option>
							<option>40ƽ������</option>
							<option>40ƽ��</option>
							<option>60ƽ��</option>
							<option>80ƽ��</option>
							<option>100ƽ��</option>
							<option>150ƽ��</option>
							<option>200ƽ��</option>
							<option>250ƽ��</option>
							<option>500ƽ��</option>
						</select>
					</li>
					<span>-</span>
					<li>
						<select class="in-drop">
							<option>---</option>
							<option>60ƽ��</option>
							<option>80ƽ��</option>
							<option>100ƽ��</option>
							<option>150ƽ��</option>
							<option>200ƽ��</option>
							<option>250ƽ��</option>
							<option>500ƽ��</option>
							<option>500ƽ������</option>
						</select>
					</li>
				</ul>
			</div>
            <input type="reset" class="hvr-sweep-to-right more" value="����">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="hvr-sweep-to-right more">ȷ��</a>
			<div class="clearfix"> </div>
		</div>
	</div>
	</form>
	<!---->
<!--�̼ҹ���-->
<div class="premium" background="url(../himages/<?php echo $adrow['albumPath'];?>) no-repeat center">
	<div class="pre-top">
		<h5><?php echo $adrow['phoTop'];?></h5>
		<p><?php echo $adrow['phoDesc']?> & �۸�:<?php echo $adrow['price'];?></p>
	</div>
</div>
<!--//premium-project-->
<!---->
<div class="container">
	<div class="future">
		<h3 >����չʾ��</h3>
		
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">	
					<?php foreach ($showhousesrows as $showhousesrow):?>		
						<li><div class="project-fur">
								<a href="javascript:void(0);" onclick="getHouses(<?php echo $showhousesrow['id'];?>);return false;" ><img class="img-responsive" src="himages/<?php echo $showhousesrow['hImg'];?>" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">��<?php echo $showhousesrow['hPrice'];?> </span>
		                                    <h6 class="fur-name"><a href="#"><?php echo $showhousesrow['hArea'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $showhousesrow['hKind'];?></a></h6>
		                                   	<span><?php echo $showhousesrow['hLocation'];?></span>
                               			</div>
			                            <div class="fur2">
			                               	<span><?php echo $showhousesrow['hType'];?></span>
			                             </div>
									</div>
							</div></li>
					<?php endforeach; ?>
					</ul>
					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 3
						    		}
						    	}
						    });
						    
						});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
</div>

<!--footer-->
<div class="footer">
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="index.php">U_Homer</a></h2>
			</div>
			<div class="col-md-8 footer-class">
				<p >Copyright &copy; 2016.Company name All rights reserved.</p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->
</body>
<script type="text/javascript">
function getHouses(id){
	window.location = "doHouses.php?act=searchHouses&id="+id;
}
</script>
</html>