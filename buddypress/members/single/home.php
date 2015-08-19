<div id="buddypress">

	<?php

	/**
	 * Fires before the display of member home content.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_before_member_home_content' ); ?>

	<div id="item-header" role="complementary">

		<?php bp_get_template_part( 'members/single/member-header' ) ?>

	</div><!-- #item-header -->

	<div id="item-nav">
		<div class="item-list-tabs no-ajax" id="object-nav">
 			
	 			<?php 
	 			$defaults = array( 
	 				'after'           => '', 
				 	'before'          => '', 
				 	'container'       => false, 
				 	'container_class' => '',  
				 	'depth'           => 0, 
				 	'echo'            => true, 
				 	'fallback_cb'     => false, 
				 	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
				 	'link_after'      => '', 
				 	'link_before'     => '', 
				 	'menu_class'      => 'nav nav-pills', 
				 	'menu_id'         => '', 
				 	//'walker'		=> new BP_Bootstrap_Walker_Nav_Menu(),
				 ); 
	 			bp_nav_menu($defaults); ?> 

		</div>
	</div><!-- #item-nav -->

	<div id="item-body">

		<?php

		/**
		 * Fires before the display of member body content.
		 *
		 * @since BuddyPress (1.2.0)
		 */
		do_action( 'bp_before_member_body' );

		if ( bp_is_user_activity() || !bp_current_component() ) :
			bp_get_template_part( 'members/single/activity' );

		elseif ( bp_is_user_blogs() ) :
			bp_get_template_part( 'members/single/blogs'    );

		elseif ( bp_is_user_friends() ) :
			bp_get_template_part( 'members/single/friends'  );

		elseif ( bp_is_user_groups() ) :
			bp_get_template_part( 'members/single/groups'   );

		elseif ( bp_is_user_messages() ) :
			bp_get_template_part( 'members/single/messages' );

		elseif ( bp_is_user_profile() ) :
			bp_get_template_part( 'members/single/profile'  );

		elseif ( bp_is_user_forums() ) :
			bp_get_template_part( 'members/single/forums'   );

		elseif ( bp_is_user_notifications() ) :
			bp_get_template_part( 'members/single/notifications' );

		elseif ( bp_is_user_settings() ) :
			bp_get_template_part( 'members/single/settings' );

		// If nothing sticks, load a generic template
		else :
			bp_get_template_part( 'members/single/plugins'  );

		endif;

		/**
		 * Fires after the display of member body content.
		 *
		 * @since BuddyPress (1.2.0)
		 */
		do_action( 'bp_after_member_body' ); ?>

	</div><!-- #item-body -->

	<?php

	/**
	 * Fires after the display of member home content.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_after_member_home_content' ); ?>

</div><!-- #buddypress -->
