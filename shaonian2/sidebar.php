<aside class="sidebar">	
<div class="widget widget_text">
<?php if( dopt('d_tqq_b') || dopt('d_weibo_b') || dopt('d_facebook_b') || dopt('d_twitter_b') ){ ?>

<?php if( dopt('d_twitter_b') ) echo '<a href="'.dopt('d_twitter').'" rel="external nofollow" title="Twitter" target="_blank"><i class="twitter fa fa-twitter"></i></a>'; ?>
<?php if( dopt('d_facebook_b') ) echo '<a href="'.dopt('d_facebook').'" rel="external nofollow" title="Facebook" target="_blank"><i class="facebook fa fa-facebook"></i></a>'; ?>
<?php if( dopt('d_emailContact_b') ) echo '<a href="'.dopt('d_emailContact').'" rel="external nofollow" title="Email" target="_blank"><i class="email fa fa-envelope-o"></i></a>'; ?>


<?php } ?>
</div></div></div>

<?php 
if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sitesidebar')) : endif; 

if (is_single()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_postsidebar')) : endif; 
}
else if (is_page()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_pagesidebar')) : endif; 
}
else if (is_home()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sidebar')) : endif; 
}
else {
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_othersidebar')) : endif; 
}
?>
</aside>