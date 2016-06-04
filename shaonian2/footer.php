</section>
<footer class="footer">
    <div class="footer-inner">
        <div class="copyright pull-left" >
         <a href="#" title="个人博客">个人博客</a> 版权所有，保留一切权利 · <a href="#" title="站点地图">站点地图</a> 
        </div>
        <div class="trackcode pull-right">
            <?php if( dopt('d_track_b') ) echo dopt('d_track'); ?>
        </div>
    </div>
</footer>

<?php 
wp_footer(); 
global $dHasShare; 
if($dHasShare == true){ 
	echo'';
}  
if( dopt('d_footcode_b') ) echo dopt('d_footcode'); 
?>
</body>
</html>