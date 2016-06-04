<div class="v_comment"><ul>
			<?php
				$query="SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 1 MONTH ) AND user_id='0' AND comment_author_email != '' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 56";
				$wall = $wpdb->get_results($query);
				foreach ($wall as $comment)
				{
					if( $comment->comment_author_url )
					$url = $comment->comment_author_url;
					else $url="#";
					$r="rel='external nofollow'";
					$tmp = "<a target='_blank' rel='nofollow' href='".$url."' '".$r."' title='".$comment->comment_author." (留下".$comment->cnt."个脚印)'>".get_avatar($comment->comment_author_email, 40)."</a>";
					$output .= $tmp;
				}
				echo $output ;
			?></ul>
</div>