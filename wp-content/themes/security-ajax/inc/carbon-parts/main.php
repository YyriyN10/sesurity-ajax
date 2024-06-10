<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'security_main_page' );

	function security_main_page(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_main_screen_title'.security_lang_prefix(), __( 'Голоаний заголовок' )  ),
			         Field::make( 'text', 'security_main_screen_text'.security_lang_prefix(), __( 'Текст' )  ),
			         Field::make_complex('security_main_screen_device_pic_list'.security_lang_prefix(), 'Зображення складових приладу')
						->add_fields(array(
							Field::make_image('image', 'Зображення')
						)),
			         Field::make_complex('security_main_screen_get_list'.security_lang_prefix(), 'Перелік того що отримує клієнт')
						->add_fields(array(
							Field::make_text('text', 'Текст'),
							Field::make_image('icon', 'Іконка')
								->set_value_type('url')
						)),

		         ));

		Container::make( 'post_meta', __('Переваги') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_product_description_block_title'.security_lang_prefix(), __( 'Заголовок блоку' )  ),
			         Field::make_image('security_product_description_image'.security_lang_prefix(), 'Зображення блоку'),

			         Field::make( 'complex', 'security_product_description_advantages_list'.security_lang_prefix(), __( 'Перелік переваг' ) )
			              ->add_fields( array(
				              Field::make( 'text', 'title', __( 'Назва переваги' ) ),
				              Field::make( 'text', 'description', __( 'Опис переваги' ) ),
			              ) ),

		         ));

		Container::make( 'post_meta', __('Що це') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_product_what_is_block_title'.security_lang_prefix(), __( 'Заголовок блоку' )  ),
			         Field::make( 'text', 'security_product_what_is_text'.security_lang_prefix(), __( 'Текст блоку' )  ),
			         Field::make_image('security_product_what_is_mob_image'.security_lang_prefix(), 'Зображення продукту для мобільного'),
			         Field::make_image('security_product_what_is_console_image'.security_lang_prefix(), 'Зображення центральної консолі'),
			         Field::make_complex('security_product_what_is_device_list'.security_lang_prefix(), 'Складові частини системи')
			            ->add_fields(array(
			            	Field::make_text('name', 'Назва'),
				            Field::make_image('image', 'Зображення')
			            ))

		         ));

		Container::make('post_meta', 'Призив до дії')
			->where( function ( $homeFields){
				$homeFields->where( 'post_type', '=', 'page' );
				$homeFields->where( 'post_template', '=', 'template-home.php' );
			})

			->add_fields( array(
				Field::make_text('security_call_to_action_block_title'.security_lang_prefix(), 'Заголовок блоку'),
				Field::make_text('security_call_to_action_text'.security_lang_prefix(), 'Текст'),
			));

		Container::make( 'post_meta', __('Характеристики') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_features_block_title'.security_lang_prefix(), __( 'Заголовок блоку' )  ),

			         Field::make( 'complex', 'security_features_list'.security_lang_prefix(), __( 'Перелік характеристик' ) )
			              ->add_fields( array(
				              Field::make( 'text', 'text', __( 'Текст характеристики' )  ),
				              Field::make_image('icon', 'Іконка характеристики')
				                ->set_value_type('url')

			              ) )

		         ));

		Container::make( 'post_meta', __('Слоган') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_slogan_title'.security_lang_prefix(), __( 'Заголоаок блоку' )  ),
			         Field::make_text('security_slogan_text'.security_lang_prefix(), 'Основний ткст'),
			         Field::make_text('security_slogan_montage'.security_lang_prefix(), 'Інформація про час монтажу'),
			         Field::make_image('security_slogan_video'.security_lang_prefix(), 'Відео фон')
			            ->set_value_type('url')

		         ));

		Container::make( 'post_meta', __('Про нас') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_about_us_block_title'.security_lang_prefix(), __( 'Заголовок блоку' )  ),

			         Field::make( 'text', 'security_about_us_text'.security_lang_prefix(), __( 'Текст блоку' )  ),

			         Field::make( 'complex', 'security_about_us_list'.security_lang_prefix(), __( 'Перелік досягнень' ) )
			              ->add_fields( array(
				              Field::make( 'text', 'text', __( 'Текст досягнення' ) ),
				              Field::make_select( 'select_type', 'Оберіть тип контенту')
								->set_options( array(
									'image' => 'Зображення',
									'text'  => 'Текст'
								)),
				              Field::make( 'image', 'image', __( 'Іконка' ) )
				                   ->set_type( 'image' )
				                   ->set_value_type( 'url' )
					              ->set_conditional_logic( array(
						              'relation' => 'AND',
						              array(
							              'field' => 'select_type',
							              'value' => 'image',
							              'compare' => '=',
						              )
					              ) ),
				              Field::make( 'text', 'sense', __( 'Значення досягнення' ) )
					              ->set_conditional_logic( array(
						              'relation' => 'AND',
						              array(
							              'field' => 'select_type',
							              'value' => 'text',
							              'compare' => '=',
						              )
					              ) ),
			              ) ),


		         ));


		Container::make( 'post_meta', __('Шлях клієнта') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_steps_block_title'.security_lang_prefix(), __( 'Заголовок блоку' )  ),

			         Field::make( 'complex', 'security_steps_list'.security_lang_prefix(), __( 'Перелік кроків' ) )
			              ->add_fields( array(
				              Field::make( 'text', 'title', __( 'Назва кроку' ) ),
				              Field::make( 'text', 'description', __( 'Опис кроку' ) ),
				              Field::make( 'image', 'image', __( 'Іконка кроку' ) )
				                   ->set_type( 'image' )
				                   ->set_value_type( 'url' ),
			              ) )


		         ));

		Container::make( 'post_meta', __('Контактна форма') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(

			         Field::make( 'text', 'security_contact_form_block_title'.security_lang_prefix(), __( 'Заголовок блоку' )  ),

			         Field::make( 'text', 'security_contact_form_block_subtitle'.security_lang_prefix(), __( 'Підзаголовок блоку' )  ),


		         ));
	}