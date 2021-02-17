<?php 
function yala_blog_color_font_css(){?>
	<style type="text/css">
	
	<?php if( get_theme_mod('yala_blog_theme_color_setting') ):?>
	
	.header .header-inner-menu .nav li.active a,
.header .header-inner-menu .nav li:hover a {
	color:  <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
}
@media only screen and (max-width: 767px){
.mobile-nav .slicknav_nav {
    background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
}
.slicknav_btn {
    color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?> !important;
}
}
section.breadcrumbs{
	background: <?php echo esc_attr(get_theme_mod('yala_blog_bc_color_setting'));?>
}
	.shadow.primary::before {
	background-image: linear-gradient(#0000, <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>), linear-gradient(#0000, #f09819);
	}

	.preloader-icon span {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.meta span i{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.meta span a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.meta .date i {
		margin-right: 5px;
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.breadcrumbs ul li a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}
	.breadcrumbs ul li.active a {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.newsletter .news-title i {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.cat-title span{
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.cat-title:before{
		border-top: 10px solid <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	#scrollUp {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.pagination-main .pagination li.prev:hover a,
	.pagination-main .pagination li.next:hover a {
	  color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.pagination-main .pagination li.active a,
	.pagination-main .pagination li:hover a {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}
	
	.slider-inner .slider-content .btn {
	background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.slider-inner .slider-content .btn:hover{
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.header .topbar {
	background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}


	.header .search-form .icon {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}


	.header .search-form .form button {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.header .search-form .form a {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.header .header-inner .nav li.active a,
	.header .header-inner .nav li:hover a {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.header .header-inner .nav .dropdown {
		border-top:3px solid <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.header .header-inner .nav li .dropdown li:hover a{
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.header .header-inner .nav li .dropdown li .sub-dropdown li:hover a {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.header .social-header li:hover a{
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.header.style2 .topbar .date span {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.slider-inner .owl-controls .owl-nav div {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.slider-inner .owl-controls .owl-nav div:hover{
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.treding-news .news-head .comment i {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}
	.treding-news .single-news:hover .comment {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.treding-news .content {
		border-top: 5px solid <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.treding-news .title-medium a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.featured-news {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}
	.featured-news .owl-controls .owl-nav div {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.featured-news .owl-controls .owl-nav div:hover{
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.featured-news .content h2:hover a{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-grid-one .news-head .comment i {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-grid-one .title-medium:hover a{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-tabs .nav-tabs {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-tabs .nav-tabs li a.active,
	.news-tabs .nav-tabs li a:hover{
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-tabs .tab-big-news .button a {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-tabs .tab-small-news .title-small a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-grid-two .single-news:hover .cat-name .btn {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-grid-two .cat-name .btn {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-grid-two .title-medium a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	#video-gallery-main .video-play-main a {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	#video-gallery-main .video-play-main a:hover{
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-carousel .single-news:hover .cat-name a{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-carousel .title-medium a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}
	.news-carousel .single-news:hover .btn{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}
	.news-carousel .btn {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-carousel .owl-controls .owl-nav div {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-single .meta-share .author img {
		border: 2px solid <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-single .content-with-img h4 {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-single blockquote .qoute-img img {
		border: 5px solid <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.news-single blockquote .qoute-icon {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-entry-meta ul .item-tag span {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-entry-meta ul .item-tag a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-entry-meta ul .item-social a:hover{
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-entry-meta ul .item-respons i {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.author-content h4 span i{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.author-content .social-share li a {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.author-content .social-share li a:hover {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.comment-content a {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.comment-content p.date i {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.comments-form .form-head .form-group i {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.comments-form .form-head .form-group button {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.contact .form-head .form-group i {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.contact .form-head .form-group button {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.contact .contact-info .icon i {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-sidebar .single-sidebar h2 {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-sidebar .single-sidebar ul li a i{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-sidebar .newsletter button {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-sidebar .post-tab .nav li a.active,
	.blog-sidebar .post-tab .nav li a:hover {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-sidebar .post-tab .post-info a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-sidebar .category ul li a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.blog-sidebar .tags ul li a:hover{
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.error-page .error-inner h2 span {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.form-search button {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.footer .single-footer h3:before{
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.footer .f-link ul li a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.footer .single-news .cat {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.footer .single-news h4 a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.footer .single-news .date i {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.single-footer.category ul li a:hover {
		color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?> !important;
	}

	.footer .social li a:hover{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.footer .copyright {
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.footer.style2{
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	#author,#email,#url{
		border: 1px solid <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.form-submit input {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}
	.form-submit input:hover{
		background:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}
	#commentform p a{
		color:<?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.search-submit{
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
		border: 1px solid <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.mobile-nav .slicknav_nav {
		background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}

	.slicknav_btn {
	  	color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?> !important;
	}

	.slicknav_menu .slicknav_icon-bar {
	  	background: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;

	}
	.header .header-inner .logo a {
    
    color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
	}
	.comment-author a, .comment-metadata a, .bypostauthor, .reply a {
    color: <?php echo esc_attr(get_theme_mod('yala_blog_theme_color_setting'));?>;
}
	<?php endif;?>

	/*Google Font family */
	<?php if(get_theme_mod('google_fontfamily_setting')):?>
		body{
			font-family:<?php echo esc_attr( get_theme_mod('google_fontfamily_setting'));?>;
		}
	<?php endif;?>

	<?php if(get_theme_mod('title_google_fontfamily_setting')):?>

		section h1,section h2,section h3,section h4,section h5,section h6,h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{
			font-family:<?php echo esc_attr( get_theme_mod('title_google_fontfamily_setting'));?> ! important;
		}

	<?php endif;?>

	<?php if(get_theme_mod('description_google_fontfamily_setting')):?>
		section p, p{
			font-family:<?php echo esc_attr( get_theme_mod('description_google_fontfamily_setting'));?> ! important;
		}
	<?php endif;?>

	<?php $header_bg_img = get_header_image();
		if(!empty($header_bg_img)):?>

		.header {
		background:url('<?php echo esc_url(get_header_image());?>');
			}
	.header .topbar {
    background: transparent;}
	<?php endif; ?>


</style>	
<?php
}
add_action('wp_head','yala_blog_color_font_css');