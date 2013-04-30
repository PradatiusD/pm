<!-- begin sidebar -->
<div id="sidebar">
    <ul>
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar")) : //If no user selected widgets, display below ?>
                <li id="recent-post-default" class="widget">
                    <h2><a href="#" rel="nofollow" class="sidebartitle"><?php _e("Recent Posts"); ?></a></h2>
                    <ul>
                        <?php wp_get_archives('title_li=&type=postbypost&limit=10'); ?>
                    </ul>
                </li>
                
                <li id="categories" class="widget">
                    <h2><a href="#" rel="nofollow" class="sidebartitle"><?php _e("Categories"); ?></a></h2>
                    <ul>
                      <?php wp_list_categories('orderby=name&title_li=&depth=2'); ?>
                    </ul>
                </li>
                <li id="archives" class="widget">
                    <h2><a href="#" rel="nofollow" class="sidebartitle"><?php _e("Archives"); ?></a></h2>
                    <ul>
                      <?php wp_get_archives('type=monthly'); ?>	
                    </ul>
                </li>
                 
                
                <?php endif; ?>
                
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('240x130 Side Banner Space') ) : ?>
                <?php endif; ?>
			</ul>
      <script>
        jQuery(document).ready(function($){
            $(".sidebartitle").trigger("click");
            $('.readmore-icon').html('Read more');
        })
      </script>
		</div><!-- end sidebar -->