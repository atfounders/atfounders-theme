<?php

/* Styled login screen */
add_action( 'login_head', 'founders_login_css', 99999 );

function founders_login_css() { 
	?>
	
	<style type="text/css">
	body {
		background: #000 url('http://atfounders.com/wp-content/themes/atfounders/images/login-background.jpeg') no-repeat top center !important;
	}
	
	#login {
		padding-top: 60px !important;
	}
	
	html {
		background: #e6e6e6;
	}
	
	#loginform {
		margin-bottom: 21px;
	}
	
	p#nav,
	p#backtoblog { 
		background: #fff;
		border: 1px solid #eee;
		margin-left: 8px !important;
		padding: 15px !important;
	}
	
	p#nav { 
		border-bottom: 0 !important;
		margin-bottom: -2px !important;
		padding-bottom: 2px !important;
		-moz-box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
		-webkit-box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
		box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
	}
	
	.login p#backtoblog {
		border-top: 0 !important;
		margin-bottom: 21px !important;
		padding-top: 5px !important;
	}
	
	.login p#backtoblog a {
		color: #999 !important;
		font-size: 9px !important;
	}
	
	#login {
		padding-bottom: 42px;
	}
	</style>
	
	<?php
}


// Taking over the meta output
function twentyeleven_posted_on() {
	printf( __( '<span class="gravatar">%1$s</span><span class="sep ryan">Posted on </span><a href="%2$s" title="%3$s" rel="bookmark"><time class="entry-date" datetime="%4$s" pubdate>%5$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%6$s" title="%7$s" rel="author">%8$s</a></span></span>', 'twentyeleven' ),
		get_avatar( get_the_author_meta( 'ID' ), 22 ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),
		get_the_author() 
	);
}

?>