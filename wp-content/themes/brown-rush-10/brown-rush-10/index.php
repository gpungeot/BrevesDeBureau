<?php get_header(); ?>

<div id="left">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="ptop_left"><div class="ptop_right"></div></div>
			<div class="pmid_left">
			<div class="pmid_right">
			<div class="post">
	  			<div class="post-date"><span class="post-month"><?php the_time('M'); ?></span> <span class="post-day"><?php the_time('d'); ?></span></div>
				<div class="post-head">
					<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					<div class="posted">in <?php the_category(', '); ?></div>
					<span class="comments"><?php comments_popup_link('No comment &#187;', '1 comment &#187;', '% comments &#187;'); ?></span>
					<div style="clear: both;"></div>
				</div>
				<?php the_content(); ?>
			</div>
			</div>
			</div>
			<div class="pbot_left"><div class="pbot_right"></div></div>

<?php endwhile; else: ?>

			<div class="ptop_left"><div class="ptop_right"></div></div>
			<div class="pmid_left">
			<div class="pmid_right">
			<div class="post">
				<div class="post-head">
					<div class="title">Not Found</div>
					<div style="clear: both;"></div>
				</div>
				<div class="post-entry">
				you are looking for something that isn't here
				</div>

			</div>
			</div>
			</div>
			<div class="pbot_left"><div class="pbot_right"></div></div>

<?php endif; ?>

<div class="nav-link">
	<?php posts_nav_link(); ?>
</div>

</div>

<?php get_footer(); ?>