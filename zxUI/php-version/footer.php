		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
			<!-- content ends -->
			</div><!--/#content.span10-->
		<?php } ?>
		</div><!--/fluid-row-->
		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
		
		<hr>

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

	</div><!--/.fluid-container-->
	<!-- footer begin -->
<div class="container-fluid">
<div class="footer_nav">
	<div class="indexbottom"></div>
		<footer>
			
		<div>
			<p class="pull-left"><a class="gray" href="http://usman.it" target="_blank">首页</a> </p>
			<p class="pull-left"><a class="gray" href="http://usman.it" target="_blank">关于我们</a> </p>
			<p class="pull-left"><a class="gray" href="http://usman.it" target="_blank">联系我们</a> </p>
			<p class="pull-left"><a class="gray" href="http://usman.it" target="_blank">客服中心</a> </p>
			<div class="pull-right">
		
				<p class="pull-right">&copy; <a href="http://usman.it" target="_blank">众兴投资</a> <?php echo date('Y') ?></p>
				<p>ICP证:<a href="http://usman.it" target="_blank">鲁ICP备13008504号-1</a></p>
				<p>统一客服热线:400-080-1891 公司地址:山东省临沂市新华路12号万阅城A座902</p>
				</div>
			</div>
				
		</footer>
		
		</div>
		<?php } ?>
		</div>
<!--footer end -->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
	<script type="text/javascript">
    var site_url = window.location.href.toLowerCase();	
   
	switch (true) {
		case site_url.indexOf("/jsfoot") > 0 || site_url.indexOf("/fafds") > 0 || site_url.indexOf("/js") > 0 : 
		//判断当前频道属于哪个根目录模块就设置频道标签高亮
			$("#nav li").attr("class","");
			$("#nav li").eq(1).attr("class","nav_lishw"); //设置当前频道标签高亮
			$(".nav_lishw .v a").attr("class","sele");
			$(".nav_lishw .kind_menu").show();
			break;
		default :
			$("#nav li").attr("class","");
			$("#nav li").eq(0).attr("class","nav_lishw");
			$(".nav_lishw .v a").attr("class","sele");
			$(".nav_lishw .kind_menu").show();
	}
	
	$("#nav li").hover(
		function(){
			clearTimeout(setTimeout("0")-1);
			$("#nav .kind_menu").hide(); 
			$("#nav li .v .sele").attr("class","shutAhover");
			$(this).attr("id","nav_hover");
			
			$("#nav_hover .v a").attr("class","sele");
			$("#nav_hover .kind_menu").show(); 
		},
		function(){
			
			if($(this).attr("class") != "nav_lishw"){
				$("#nav_hover .v .sele").attr("class","");
				
				$("#nav_hover .kind_menu").hide(); 
			}
			$(this).attr("id","")
			$("#nav li .v .shutAhover").attr("class","sele");
			setTimeout(function(){
				$(".nav_lishw .kind_menu").show();
				$(".nav_lishw .v a").attr("class","sele");
			},50); 
		}
	);
	
</script>
	
	
	<?php //Google Analytics code for tracking my demo site, you can remove this.
		if($_SERVER['HTTP_HOST']=='usman.it') { ?>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-26532312-1']);
			_gaq.push(['_trackPageview']);
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
			})();
		</script>
		
	<?php } ?>
	
</body>
</html>
