<?php
global $sidebar_width;
$sidebar_position = ishyoboy_get_sidebar_position();

if ( 'left' == $sidebar_position || 'right' == $sidebar_position){
?>
	<div class="ish-grid3 ish-main-sidebar ish-<?php echo $sidebar_position . '-sidebar' ?>" id="sidebar">
		<div class="ish-row ish-row-notfull">
			<div class="ish-row_inner">
				<?php $sidebar_width = 3; // Used when displaying widgets ?>
				<?php $sidebar = ishyoboy_get_sidebar(); ?>
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar($sidebar)) : else : ?>

					<div class="pre-widget">
						<div class="space"></div>
						<p><strong>Widgetized Sidebar</strong></p>
						<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
					</div>

				<?php endif; ?>

				<div class="space"></div>

			</div>
		</div>
	</div>
<?php
}
?>