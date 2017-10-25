<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>
<div class="tml tml-login" id="theme-my-login<?php $template->the_instance(); ?>">
	<?php  $template->the_action_template_message( 'login' ); ?>
	<?php $template->the_errors(); ?>
	<form name="loginform" id="loginform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'login', 'login_post' ); ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="mng-item">
                    <label for="user_login<?php $template->the_instance(); ?>"><?php
                        if ( 'username' == $theme_my_login->get_option( 'login_type' ) ) {
                            _e( '', 'theme-my-login' );
                        } elseif ( '' == $theme_my_login->get_option( 'login_type' ) ) {
                            _e( '', 'theme-my-login' );
                        } else {
                            _e( '', 'theme-my-login' );
                        }
                    ?></label>
                    <input type="text" name="log" id="user_login<?php $template->the_instance(); ?>" class="input" placeholder="Логін" value="<?php $template->the_posted_value( 'log' ); ?>" size="20" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="mng-item">
                    <label for="user_pass<?php $template->the_instance(); ?>"><?php _e( '', 'theme-my-login' ); ?></label>
                    <input type="password" name="pwd" id="user_pass<?php $template->the_instance(); ?>" class="input" placeholder="Пароль" value="" size="20" autocomplete="off" />
                </div>
            </div>

		<?php do_action( 'login_form' ); ?>

            <div class="col-md-4">
                <div class="mng-item">
                    <input type="submit" class="red-button" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" value="<?php esc_attr_e( 'увійти', 'theme-my-login' ); ?>" />
                    <input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'login' ); ?>" />
                    <input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
                    <input type="hidden" name="action" value="login" />
                </div>
             </div>
        </div>
	</form>
	<?php// $template->the_action_links( array( 'login' => false ) ); ?>
</div>
