<div class="notice-info notice as3cf-pro-installer">
	<p>
		<strong>
			<?php printf( __( 'Finish Installing %s', 'as3cf-pro' ), $this->plugin_name ); ?>
		</strong>
	</p>

	<p>
		<?php printf( __( 'The %s plugin requires the following plugins to be installed:', 'as3cf-pro' ), $this->plugin_name ); ?>
	</p>
	<ul style="list-style-type: disc; padding: 0 0 0 30px; margin: 5px 0;">
		<?php foreach ( $plugins_not_installed as $slug => $plugin ) : ?>
			<li style="margin: 0;">
				<a class="thickbox" style="text-decoration: none;" href="<?php echo $this->get_plugin_info_url( $slug ); ?>">
					<?php echo $plugin; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
	<p>
		<a href="#" class="button button-primary button-large install-plugins" data-process="installer"><?php _e( 'Install & Activate Now' ); ?></a>
	</p>
	<p>
		<em>
			<?php
			$deactivate_url  = $this->get_plugin_action_url( 'deactivate' );
			$deactivate_link = sprintf( '<a style="text-decoration:none;" href="%s">%s</a>', $deactivate_url, __( 'deactivating', 'as3cf-pro' ) );

			printf( __( 'You can also remove this message by %s the %s plugin.', 'as3cf-pro' ), $deactivate_link, $this->plugin_name ); ?>
		</em>
	</p>
</div>