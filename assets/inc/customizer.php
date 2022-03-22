<?php
/*
 * Theme Options via Kirki
 * Outputs customizer options
 *
 * @version 1.0
 * @since agencyforcewp 1.0
 */

/*****************************
 * Homepage options
 * panel, sections & fields
 ****************************/

/* Panel */
new \Kirki\Panel(
	'afwp_homepage_pan',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Homepage', 'agencyforcewp' ),
	]
);
/* header section */
new \Kirki\Section(
	'afwp_homepage_header_sec',
	[
		'title'       => esc_html__( 'Header Section', 'agencyforcewp' ),
		'description' => esc_html__( 'Add your header button', 'agencyforcewp' ),
		'panel'       => 'afwp_homepage_pan',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'afwp_header_button_text',
		'label'    => esc_html__( 'Button Text', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_header_sec',
		'default'  => '',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'afwp_header_button_url',
		'label'    => esc_html__( 'URL', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_header_sec',
		'default'  => '',
		'priority' => 10,
	]
);

/* hero section*/
new \Kirki\Section(
	'afwp_homepage_hero_sec',
	[
		'title'       => esc_html__( 'Hero Section', 'agencyforcewp' ),
		'description' => esc_html__( 'Add your contents for hero section', 'agencyforcewp' ),
		'panel'       => 'afwp_homepage_pan',
		'priority'    => 160,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'afwp_hero_img',
		'label'       => esc_html__( 'Upload Image', 'agencyforcewp' ),
		'description' => esc_html__( 'recommened: svg or png / 900px X 600px', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_hero_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'afwp_hero_heading_text',
		'label'    => esc_html__( 'Heading Text', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_hero_sec',
		'default'  => '',
		'priority' => 10,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'afwp_hero_short_desc',
		'label'       => esc_html__( 'Short Description', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_hero_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'afwp_hero_button_text',
		'label'    => esc_html__( 'Button Text', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_hero_sec',
		'default'  => '',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'afwp_hero_button_url',
		'label'    => esc_html__( 'URL', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_hero_sec',
		'default'  => '',
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'afwp_hero_video_id',
		'label'    => esc_html__( 'Video ID', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_hero_sec',
		'description' => esc_html__( 'YouTube/Vimeo', 'agencyforcewp' ),
		'default'  => '',
		'priority' => 10,
	]
);

/* logo section*/
new \Kirki\Section(
	'afwp_homepage_logo_sec',
	[
		'title'       => esc_html__( 'Logo Section', 'agencyforcewp' ),
		'panel'       => 'afwp_homepage_pan',
		'priority'    => 160,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'afwp_homepage_logo_gallery',
		'label'    => esc_html__( 'Upload Logos', 'agencyforcewp' ),
		'description' => esc_html__( 'Recommended: 6 logos max.', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_logo_sec',
		'priority' => 10,
		'default'  => '',
		'fields'   => [
			'logo_url'   			=> [
				'type'        		=> 'image',
				'description' 		=> esc_html__( 'Recommended size: 130px X 40px', 'agencyforcewp' ),
				'default'     		=> '',
			],
		],
	]
);

/* services section*/
new \Kirki\Section(
	'afwp_homepage_services_sec',
	[
		'title'       => esc_html__( 'Services Section', 'agencyforcewp' ),
		'panel'       => 'afwp_homepage_pan',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings'    => 'afwp_homepage_services_heading',
		'label'       => esc_html__( 'Title', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_services_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'afwp_homepage_services_subtitle',
		'label'       => esc_html__( 'Sub Title', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_services_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'afwp_homepage_service_box',
		'label'    => esc_html__( 'Add Service Box', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_services_sec',
		'priority' => 10,
		'default'  => '',
		'fields'   => [
			'afwp_homepage_service_box_img'   	=> [
				'type'        		=> 'image',
				'label'    => esc_html__( 'Image', 'agencyforcewp' ),
				'description' 		=> esc_html__( 'Recommended: 110px X 115px, svg/png', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_homepage_service_box_bg_img'   	=> [
				'type'        		=> 'image',
				'label'    => esc_html__( 'Background Corner Image', 'agencyforcewp' ),
				'description' 		=> esc_html__( 'Recommended: 120px X 120px, svg/png', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_homepage_service_box_title'   => [
				'type'        		=> 'text',
				'description' 		=> esc_html__( 'Title', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_homepage_service_box_desc'   => [
				'type'        		=> 'textarea',
				'description' 		=> esc_html__( 'Description', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_homepage_service_box_list_icon'   	=> [
				'type'        		=> 'image',
				'label'    => esc_html__( 'List Icon', 'agencyforcewp' ),
				'description' 		=> esc_html__( 'Recommended: 25px X 25px, svg/png', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_homepage_service_box_list1'   => [
				'type'        		=> 'text',
				'description' 		=> esc_html__( '1. List text', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_homepage_service_box_list2'   => [
				'type'        		=> 'text',
				'description' 		=> esc_html__( '2. List text', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_homepage_service_box_list3'   => [
				'type'        		=> 'text',
				'description' 		=> esc_html__( '3. List text', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_homepage_service_box_list4'   => [
				'type'        		=> 'text',
				'description' 		=> esc_html__( '4. List text', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_homepage_service_box_list5'   => [
				'type'        		=> 'text',
				'description' 		=> esc_html__( '5. List text', 'agencyforcewp' ),
				'default'     		=> '',
			],
		],
	]
);

/* Image box section 1 */
new \Kirki\Section(
	'afwp_homepage_imagebox_1_sec',
	[
		'title'       => esc_html__( 'Image Box Section 1', 'agencyforcewp' ),
		'panel'       => 'afwp_homepage_pan',
		'priority'    => 160,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'afwp_home_imagebox_1_img',
		'label'       => esc_html__( 'Upload Image', 'agencyforcewp' ),
		'description' => esc_html__( 'recommened: svg or png / 780px X 700px', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_imagebox_1_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'afwp_home_imagebox_1_title',
		'label'       => esc_html__( 'Title', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_imagebox_1_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'afwp_home_imagebox_1_subtitle',
		'label'       => esc_html__( 'Sub Title', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_imagebox_1_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'afwp_home_imagebox_1_desc',
		'label'       => esc_html__( 'Description', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_imagebox_1_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'afwp_home_imagebox_1_btntext',
		'label'    => esc_html__( 'Button Text', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_imagebox_1_sec',
		'default'  => '',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'afwp_home_imagebox_1_btnurl',
		'label'    => esc_html__( 'URL', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_imagebox_1_sec',
		'default'  => '',
		'priority' => 10,
	]
);

/* Image box section 2 */
new \Kirki\Section(
	'afwp_homepage_imagebox_2_sec',
	[
		'title'       => esc_html__( 'Image Box Section 2', 'agencyforcewp' ),
		'panel'       => 'afwp_homepage_pan',
		'priority'    => 160,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'afwp_home_imagebox_2_img',
		'label'       => esc_html__( 'Upload Image', 'agencyforcewp' ),
		'description' => esc_html__( 'recommened: svg or png / 780px X 700px', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_imagebox_2_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'afwp_home_imagebox_2_title',
		'label'       => esc_html__( 'Title', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_imagebox_2_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'afwp_home_imagebox_2_desc',
		'label'       => esc_html__( 'Description', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_imagebox_2_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'afwp_home_imagebox_2_iconbox',
		'label'    => esc_html__( 'Add Icon Box', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_imagebox_2_sec',
		'priority' => 10,
		'default'  => '',
		'fields'   => [
			'afwp_home_imagebox_2_iconbox_img'  => [
				'type'        					=> 'image',
				'label'    						=> esc_html__( 'Image', 'agencyforcewp' ),
				'description' 					=> esc_html__( 'Recommended: 50px X 50px, svg/png', 'agencyforcewp' ),
				'default'     					=> '',
			],
			'afwp_home_imagebox_2_iconbox_title'   => [
				'type'        		=> 'text',
				'description' 		=> esc_html__( 'Title', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_home_imagebox_2_iconbox_desc'   => [
				'type'        		=> 'textarea',
				'description' 		=> esc_html__( 'Description', 'agencyforcewp' ),
				'default'     		=> '',
			],
		],
	]
);
/* Testimonial section */
new \Kirki\Section(
	'afwp_homepage_testimonial_sec',
	[
		'title'       => esc_html__( 'Testimonial Section', 'agencyforcewp' ),
		'panel'       => 'afwp_homepage_pan',
		'priority'    => 160,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'afwp_home_testimonial',
		'label'    => esc_html__( 'Add Testimonial', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_testimonial_sec',
		'priority' => 10,
		'default'  => '',
		'fields'   => [
			'afwp_home_testimonial_img'  => [
				'type'        					=> 'image',
				'label'    						=> esc_html__( 'Person Image', 'agencyforcewp' ),
				'description' 					=> esc_html__( 'Recommended: 512px X 512px', 'agencyforcewp' ),
				'default'     					=> '',
			],
			'afwp_home_testimonial_box_img'  => [
				'type'        					=> 'image',
				'label'    						=> esc_html__( 'Overlay Box Image', 'agencyforcewp' ),
				'description' 					=> esc_html__( 'Recommended: 500px X 340px', 'agencyforcewp' ),
				'default'     					=> '',
			],
			'afwp_home_testimonial_box_title'   => [
				'type'        		=> 'text',
				'description' 		=> esc_html__( 'Overlay Box Title', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_home_testimonial_box_subtitle'   => [
				'type'        		=> 'text',
				'description' 		=> esc_html__( 'Overlay Box Sub Title', 'agencyforcewp' ),
				'default'     		=> '',
			],
			'afwp_home_testimonial_desc'   => [
				'type'        		=> 'textarea',
				'description' 		=> esc_html__( 'Testimonial Text', 'agencyforcewp' ),
				'default'     		=> '',
			],
		],
	]
);
/* Blog section */
new \Kirki\Section(
	'afwp_homepage_blog_sec',
	[
		'title'       => esc_html__( 'Blog Section', 'agencyforcewp' ),
		'panel'       => 'afwp_homepage_pan',
		'priority'    => 160,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'afwp_homepage_blog_title',
		'label'       => esc_html__( 'Title', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_blog_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'afwp_homepage_blog_desc',
		'label'       => esc_html__( 'Description', 'agencyforcewp' ),
		'section'     => 'afwp_homepage_blog_sec',
		'default'     => '',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'afwp_homepage_blog_btntext',
		'label'    => esc_html__( 'Button Text', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_blog_sec',
		'default'  => '',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'afwp_homepage_blog_btnurl',
		'label'    => esc_html__( 'URL', 'agencyforcewp' ),
		'section'  => 'afwp_homepage_blog_sec',
		'default'  => '',
		'priority' => 10,
	]
);

/*****************************
 * About page options
 * panel, sections & fields
 ****************************/
 /* Panel */
 new \Kirki\Panel(
 	'afwp_aboutpage_pan',
 	[
 		'priority'    => 10,
 		'title'       => esc_html__( 'About page', 'agencyforcewp' ),
 	]
 );
 /* Title section */
 new \Kirki\Section(
 	'afwp_aboutpage_title_sec',
 	[
 		'title'       => esc_html__( 'Title Section', 'agencyforcewp' ),
 		'panel'       => 'afwp_aboutpage_pan',
 		'priority'    => 160,
 	]
 );
 new \Kirki\Field\Textarea(
 	[
 		'settings'    => 'afwp_aboutpage_title',
 		'label'       => esc_html__( 'Title', 'agencyforcewp' ),
 		'section'     => 'afwp_aboutpage_title_sec',
 		'default'     => '',
 	]
 );

 /* Video section */
 new \Kirki\Section(
   'afwp_aboutpage_video_sec',
   [
	   'title'       => esc_html__( 'Video Section', 'agencyforcewp' ),
	   'panel'       => 'afwp_aboutpage_pan',
	   'priority'    => 160,
   ]
 );
 new \Kirki\Field\Textarea(
   [
	   'settings'    => 'afwp_aboutpage_video_heading',
	   'label'       => esc_html__( 'Heading', 'agencyforcewp' ),
	   'section'     => 'afwp_aboutpage_video_sec',
	   'default'     => '',
   ]
 );
 new \Kirki\Field\Textarea(
   [
	  'settings'    => 'afwp_aboutpage_video_subheading',
	  'label'       => esc_html__( 'Sub Heading', 'agencyforcewp' ),
	  'section'     => 'afwp_aboutpage_video_sec',
	  'default'     => '',
   ]
 );
 new \Kirki\Field\Textarea(
   [
	 'settings'    => 'afwp_aboutpage_video_desc',
	 'label'       => esc_html__( 'Description', 'agencyforcewp' ),
	 'section'     => 'afwp_aboutpage_video_sec',
	 'default'     => '',
   ]
 );
 new \Kirki\Field\Image(
 	[
 		'settings'    => 'afwp_aboutpage_video_img',
 		'label'       => esc_html__( 'Upload Image', 'agencyforcewp' ),
 		'description' => esc_html__( 'recommened: svg or png / 785px X 510px', 'agencyforcewp' ),
 		'section'     => 'afwp_aboutpage_video_sec',
 		'default'     => '',
 	]
 );
 new \Kirki\Field\Text(
   [
	'settings'    => 'afwp_aboutpage_video_id',
	'label'       => esc_html__( 'Video ID', 'agencyforcewp' ),
	'description' => esc_html__( 'YouTube/Vimeo', 'agencyforcewp' ),
	'section'     => 'afwp_aboutpage_video_sec',
	'default'     => '',
   ]
 );
 /* Iconbox section */
 new \Kirki\Section(
   'afwp_aboutpage_iconbox_sec',
   [
	   'title'       => esc_html__( 'Iconbox Section', 'agencyforcewp' ),
	   'panel'       => 'afwp_aboutpage_pan',
	   'priority'    => 160,
   ]
 );
 new \Kirki\Field\Repeater(
 	[
 		'settings' => 'afwp_aboutpage_iconbox',
 		'label'    => esc_html__( 'Add Icon Box', 'agencyforcewp' ),
 		'section'  => 'afwp_aboutpage_iconbox_sec',
 		'priority' => 10,
 		'default'  => '',
 		'fields'   => [
 			'afwp_iconbox_icon'   	=> [
 				'type'        		=> 'image',
 				'description' 		=> esc_html__( 'Upload Icon', 'agencyforcewp' ),
 				'default'     		=> '',
 			],
			'afwp_iconbox_title'   	=> [
 				'type'        		=> 'text',
 				'description' 		=> esc_html__( 'Title', 'agencyforcewp' ),
 				'default'     		=> '',
 			],
			'afwp_iconbox_desc'   	=> [
 				'type'        		=> 'textarea',
 				'description' 		=> esc_html__( 'Description', 'agencyforcewp' ),
 				'default'     		=> '',
 			],
 		],
 	]
 );

 /* Image Carousel section */
 new \Kirki\Section(
   'afwp_aboutpage_carousel_sec',
   [
	  'title'       => esc_html__( 'Carousel Slider Section', 'agencyforcewp' ),
	  'panel'       => 'afwp_aboutpage_pan',
	  'priority'    => 160,
   ]
 );
 new \Kirki\Field\Repeater(
   [
	   'settings' => 'afwp_aboutpage_carousel',
	   'label'    => esc_html__( 'Add slide', 'agencyforcewp' ),
	   'section'  => 'afwp_aboutpage_carousel_sec',
	   'priority' => 10,
	   'default'  => '',
	   'fields'   => [
		   'afwp_about_carousel_img'   		=> [
			   'type'        				=> 'image',
			   'label' 						=> esc_html__( 'Upload Icon', 'agencyforcewp' ),
			   'description' 				=> esc_html__( 'Recommended: 650px X 410px', 'agencyforcewp' ),
			   'default'     				=> '',
		   ],
		   'afwp_about_carousel_title'   	=> [
			   'type'        				=> 'text',
			   'description' 				=> esc_html__( 'Title', 'agencyforcewp' ),
			   'default'     				=> '',
		   ],
		   'afwp_about_carousel_desc'   	=> [
			   'type'        				=> 'textarea',
			   'description' 				=> esc_html__( 'Description', 'agencyforcewp' ),
			   'default'     				=> '',
		   ],
		   'afwp_about_carousel_btntext'   	=> [
			   'type'        				=> 'text',
			   'description' 				=> esc_html__( 'Button Text', 'agencyforcewp' ),
			   'default'     				=> '',
		   ],
		   'afwp_about_carousel_btnurl'   	=> [
			   'type'        				=> 'url',
			   'description' 				=> esc_html__( 'Button Link', 'agencyforcewp' ),
			   'default'     				=> '',
		   ],
		   'afwp_about_carousel_btntarget'  => [
			   'type'        				=> 'checkbox',
			   'description' 				=> esc_html__( 'Open button link in new tab', 'agencyforcewp' ),
			   'default'     				=> false,
		   ],
	   ],
   ]
 );

 /* Call to action section */
 new \Kirki\Section(
   'afwp_aboutpage_calltoaction_sec',
   [
	 'title'       => esc_html__( 'Call To Action Section', 'agencyforcewp' ),
	 'panel'       => 'afwp_aboutpage_pan',
	 'priority'    => 160,
   ]
 );
 new \Kirki\Field\Textarea(
   [
	   'settings'    => 'afwp_aboutpage_calltoaction_text',
	   'label'       => esc_html__( 'Callout Text', 'agencyforcewp' ),
	   'section'     => 'afwp_aboutpage_calltoaction_sec',
	   'default'     => '',
   ]
 );
 new \Kirki\Field\Text(
   [
	  'settings'    => 'afwp_aboutpage_calltoaction_btntext',
	  'label'       => esc_html__( 'Button Text', 'agencyforcewp' ),
	  'section'     => 'afwp_aboutpage_calltoaction_sec',
	  'default'     => '',
   ]
 );
 new \Kirki\Field\URL(
   [
	 'settings'    => 'afwp_aboutpage_calltoaction_btnurl',
	 'label'       => esc_html__( 'Button Link', 'agencyforcewp' ),
	 'section'     => 'afwp_aboutpage_calltoaction_sec',
	 'default'     => '',
   ]
 );
 new \Kirki\Field\Checkbox(
   [
	'settings'    => 'afwp_aboutpage_calltoaction_btntarget',
	'label'       => esc_html__( 'Open button link in new tab', 'agencyforcewp' ),
	'section'     => 'afwp_aboutpage_calltoaction_sec',
	'default'     => false,
   ]
 );

 /* Team section */
 new \Kirki\Section(
   'afwp_aboutpage_team_sec',
   [
	'title'       => esc_html__( 'Team Section', 'agencyforcewp' ),
	'panel'       => 'afwp_aboutpage_pan',
	'priority'    => 160,
   ]
 );
 new \Kirki\Field\Text(
   [
	'settings'    => 'afwp_aboutpage_team_sec_heading',
	'label'       => esc_html__( 'Heading', 'agencyforcewp' ),
	'section'     => 'afwp_aboutpage_team_sec',
	'default'     => '',
   ]
 );
 new \Kirki\Field\Textarea(
   [
	  'settings'    => 'afwp_aboutpage_team_sec_subheading',
	  'label'       => esc_html__( 'Sub Heading', 'agencyforcewp' ),
	  'section'     => 'afwp_aboutpage_team_sec',
	  'default'     => '',
   ]
 );
 new \Kirki\Field\Repeater(
   [
	  'settings' => 'afwp_aboutpage_team',
	  'label'    => esc_html__( 'Add Team Member', 'agencyforcewp' ),
	  'section'  => 'afwp_aboutpage_team_sec',
	  'priority' => 10,
	  'default'  => '',
	  'fields'   => [
		  'afwp_about_team_img'   			=> [
			  'type'        				=> 'image',
			  'label' 						=> esc_html__( 'Team Image', 'agencyforcewp' ),
			  'description' 				=> esc_html__( 'Recommended: 160px X 160px', 'agencyforcewp' ),
			  'default'     				=> '',
		  ],
		  'afwp_about_team_designation'   	=> [
			  'type'        				=> 'text',
			  'description' 				=> esc_html__( 'Designation', 'agencyforcewp' ),
			  'default'     				=> '',
		  ],
		  'afwp_about_team_name'   			=> [
			  'type'        				=> 'text',
			  'description' 				=> esc_html__( 'Name', 'agencyforcewp' ),
			  'default'     				=> '',
		  ],
		  'afwp_about_team_desc'   			=> [
			  'type'        				=> 'textarea',
			  'description' 				=> esc_html__( 'Description', 'agencyforcewp' ),
			  'default'     				=> '',
		  ],
		  'afwp_about_team_fb'   			=> [
			  'type'        				=> 'url',
			  'description' 				=> esc_html__( 'Facebook', 'agencyforcewp' ),
			  'default'     				=> '',
		  ],
		  'afwp_about_team_twitter'  		=> [
			  'type'        				=> 'url',
			  'description' 				=> esc_html__( 'Twitter', 'agencyforcewp' ),
			  'default'     				=> '',
		  ],
		  'afwp_about_team_instagram'  		=> [
			  'type'        				=> 'url',
			  'description' 				=> esc_html__( 'Instagram', 'agencyforcewp' ),
			  'default'     				=> '',
		  ],
		  'afwp_about_team_linkedin'  		=> [
			  'type'        				=> 'url',
			  'description' 				=> esc_html__( 'LinkedIn', 'agencyforcewp' ),
			  'default'     				=> '',
		  ],
	  ],
   ]
 );

 /* Testimonial section */
 new \Kirki\Section(
   'afwp_aboutpage_testimonial_sec',
   [
   'title'       => esc_html__( 'Testimonial Section', 'agencyforcewp' ),
   'panel'       => 'afwp_aboutpage_pan',
   'priority'    => 160,
   ]
 );
 new \Kirki\Field\Text(
   [
   'settings'    => 'afwp_aboutpage_testimonial_sec_heading',
   'label'       => esc_html__( 'Heading', 'agencyforcewp' ),
   'section'     => 'afwp_aboutpage_testimonial_sec',
   'default'     => '',
   ]
 );
 new \Kirki\Field\Textarea(
   [
	 'settings'    => 'afwp_aboutpage_testimonial_sec_subheading',
	 'label'       => esc_html__( 'Sub Heading', 'agencyforcewp' ),
	 'section'     => 'afwp_aboutpage_testimonial_sec',
	 'default'     => '',
   ]
 );
 new \Kirki\Field\Image(
   [
	'settings'    => 'afwp_aboutpage_testimonial_image',
	'label'       => esc_html__( 'Testimonial Image', 'agencyforcewp' ),
	'section'     => 'afwp_aboutpage_testimonial_sec',
	'default'     => '',
   ]
 );
 new \Kirki\Field\Image(
   [
	'settings'    => 'afwp_aboutpage_testimonial_box_image',
	'label'       => esc_html__( 'Testimonial Box Image', 'agencyforcewp' ),
	'section'     => 'afwp_aboutpage_testimonial_sec',
	'default'     => '',
   ]
 );
 new \Kirki\Field\Text(
   [
   'settings'    => 'afwp_aboutpage_testimonial_box_title',
   'label'       => esc_html__( 'Box Title', 'agencyforcewp' ),
   'section'     => 'afwp_aboutpage_testimonial_sec',
   'default'     => '',
   ]
 );
 new \Kirki\Field\Text(
   [
   'settings'    => 'afwp_aboutpage_testimonial_box_subtitle',
   'label'       => esc_html__( 'Box Sub Title', 'agencyforcewp' ),
   'section'     => 'afwp_aboutpage_testimonial_sec',
   'default'     => '',
   ]
 );
 new \Kirki\Field\Textarea(
   [
   'settings'    => 'afwp_aboutpage_testimonial_text',
   'label'       => esc_html__( 'Testimonial Text', 'agencyforcewp' ),
   'section'     => 'afwp_aboutpage_testimonial_sec',
   'default'     => '',
   ]
 );
 new \Kirki\Field\Checkbox(
   [
   'settings'    => 'afwp_aboutpage_testimonial_rating',
   'label'       => esc_html__( 'Disable Rating', 'agencyforcewp' ),
   'section'     => 'afwp_aboutpage_testimonial_sec',
   'default'     => false,
   ]
 );

 /* Logo section */
 new \Kirki\Section(
   'afwp_aboutpage_logo_sec',
   [
   'title'       => esc_html__( 'Logo Section', 'agencyforcewp' ),
   'panel'       => 'afwp_aboutpage_pan',
   'priority'    => 160,
   ]
 );
 new \Kirki\Field\Repeater(
   [
	 'settings' => 'afwp_aboutpage_logo',
	 'label'    => esc_html__( 'Add Logos', 'agencyforcewp' ),
	 'section'  => 'afwp_aboutpage_logo_sec',
	 'priority' => 10,
	 'default'  => '',
	 'fields'   => [
		 'afwp_about_logo_img'   		=> [
			 'type'        				=> 'image',
			 'label' 					=> esc_html__( 'Upload Logo', 'agencyforcewp' ),
			 'description' 				=> esc_html__( 'Recommended: 130px X 140px', 'agencyforcewp' ),
			 'default'     				=> '',
		 ],
	 ],
   ]
 );
