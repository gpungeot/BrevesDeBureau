			<div id="right">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>

			<div class="ltop_left"><div class="ltop_right"></div></div>
			<div class="lmid_left">
			<div class="lmid_right">
			<h2>Categories</h2>
			<ul>
			<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>
			</div>
			</div>
			<div class="lbot_left"><div class="lbot_right"></div></div>


			<div class="ltop_left"><div class="ltop_right"></div></div>
			<div class="lmid_left">
			<div class="lmid_right">
      <h2>Links</h2>
			<ul>
			<?php get_links('-1', '<li>', '</li>', '', FALSE, 'name', FALSE,
FALSE, -1, FALSE, TRUE); ?>
			</ul>
			</div>
			</div>
			<div class="lbot_left"><div class="lbot_right"></div></div>

			<div class="ltop_left"><div class="ltop_right"></div></div>
			<div class="lmid_left">
			<div class="lmid_right">

			<h2>Archives</h2>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>
			</div>
			</div>
			<div class="lbot_left"><div class="lbot_right"></div></div>

			<div class="ltop_left"><div class="ltop_right"></div></div>
			<div class="lmid_left">
			<div class="lmid_right">
			<h2>Meta</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
			</div>
			</div>
			<div class="lbot_left"><div class="lbot_right"></div></div>

<?php endif; ?>
		</div>


