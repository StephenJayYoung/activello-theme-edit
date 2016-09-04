<?php

<div class="about-section" style="margin-top: 0px; margin-bottom: 40px; color: #fff; padding: 20px">
	<div class="container">
	<?php
	  $home_page_post_id = 40;
	  $home_page_post = get_post( $home_page_post_id, ARRAY_A );
	  $content_home = $home_page_post['post_content'];
	  echo $content_home;
	?>
	</div>
</div>	

<div class="about-section" style="margin-top: 0px; margin-bottom: 40px; color: #fff; padding: 20px">
	<div class="container">
	<?php
	  $home_page_post_id = 42;
	  $home_page_post = get_post( $home_page_post_id, ARRAY_A );
	  $content_home = $home_page_post['post_content'];
	  echo $content_home;
	?>
	</div>
</div>	