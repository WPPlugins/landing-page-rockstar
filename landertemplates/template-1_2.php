<?php

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
   
?>

<style type="text/css">
  html {
    background: url('<?php echo $image[0]; ?>') center top no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.myBackground.jpg', sizingMethod='scale');
  -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='myBackground.jpg', sizingMethod='scale')";
  }
</style>
		
		
		<div id="post-<?php the_ID(); ?>" class="lp1_2 ct_lp lpid_<?php echo $templateid; ?>">
		
		  <?php if($logo) : ?>
      <header>
        <img src="<?php echo $logo; ?>" alt="Logo" />
      </header>
      <?php endif; ?>
			
			<h1><?php echo $headline; ?></h1>
			<h2><?php echo $subhead; ?></h2>

			<div class="lp-content">
			 
			 <div id="formwrapper">
			 
			  <h3><?php echo $optin_head; ?></h3>
				
				<form id="formid_<?php echo $templateid; ?>" action="<?php echo $lprs_parser->forms[0]['action']; ?>" method="<?php echo $lprs_parser->forms[0]['method']; ?>">
				  <div id="formfields">
            <?php
              echo $lprs_parser->render_elements($optincode);
            ?>
          </div>
          <input type="submit" class="orangebtn button" id="submit_<?php echo $templateid; ?>" value="<?php echo $submit_value; ?>" />
				</form>
				
			 </div>

			</div>
			
		</div>
		
		<p style="text-align: center;"><?php echo $submit_note; ?></p>