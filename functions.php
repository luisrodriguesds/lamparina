<?php
//Ativando menu dinamico
	function register_menu(){
		$locations['header-menu'] = 'Menu';
		register_nav_menus( $locations );
	}
	add_action( 'init', 'register_menu');

	//POSTS TYPES
	function posts_types(){
		//Slide
		$var['labels']['name'] 		 = 'Slide';
		$var['labels']['singular_name']= 'Slide';
		$var['public']				 = true;
		$var['has_archice']			 = true;
		$var['menu_icon']			 	 = 'dashicons-format-gallery';
		$var['supports']    			 = array('title', 'page-attributes', 'url');
		register_post_type('slide', $var );

		//Areas de atuacao
		$var['labels']['name'] 		 = 'Serviços';
		$var['labels']['singular_name']= 'Serviços';
		$var['public']				 = true;
		$var['has_archice']			 = true;
		$var['menu_icon']			 	 = 'dashicons-welcome-learn-more';
		$var['supports']    			 = array('title', 'thumbnail', 'page-attributes', 'url', 'editor');
		register_post_type('servicos', $var );

		//Numero
		$var['labels']['name'] 		 = 'Números';
		$var['labels']['singular_name']= 'Números';
		$var['public']				 = true;
		$var['has_archice']			 = true;
		$var['menu_icon']			 	 = 'dashicons-chart-bar';
		$var['supports']    			 = array('title', 'page-attributes', 'url');
		register_post_type('numeros', $var );

		//Nossa historia
		$var['labels']['name'] 		 = 'Nossa História';
		$var['labels']['singular_name']= 'Nossa História';
		$var['public']				 = true;
		$var['has_archice']			 = true;
		$var['menu_icon']			 	 = 'dashicons-image-rotate';
		$var['supports']    			 = array('title', 'page-attributes', 'url');
		register_post_type('nossa-historia', $var );

		//Nosso time
		$var['labels']['name'] 		 = 'Nosso Time';
		$var['labels']['singular_name']= 'Nosso Time';
		$var['public']				 = true;
		$var['has_archice']			 = true;
		$var['menu_icon']			 	 = 'dashicons-admin-users';
		$var['supports']    			 = array('title', 'page-attributes', 'url');
		register_post_type('nosso-time', $var );


		//Textos seções
		$var['labels']['name'] 		 = 'Textos das seções';
		$var['labels']['singular_name']= 'Textos das seções';
		$var['public']				 = true;
		$var['has_archice']			 = true;
		$var['menu_icon']			 	 = 'dashicons-format-aside';
		$var['supports']    			 = array('title', 'page-attributes', 'url', 'editor');
		register_post_type('textos-das-secoes', $var );

		//Textos seções
		$var['labels']['name'] 		 = 'Clientes';
		$var['labels']['singular_name']= 'Clientes';
		$var['public']				 = true;
		$var['has_archice']			 = true;
		$var['menu_icon']			 	 = 'dashicons-welcome-widgets-menus';
		$var['supports']    			 = array('title', 'page-attributes', 'url');
		register_post_type('clienttes', $var );

		//Portfolio
		$var['labels']['name'] 		 = 'Portfolio';
		$var['labels']['singular_name']= 'Portfolio';
		$var['public']				 = true;
		$var['has_archice']			 = true;
		$var['menu_icon']			 	 = 'dashicons-media-spreadsheet';
		$var['supports']    			 = array('title', 'page-attributes', 'url');
		register_post_type('portfolio', $var );

	}

	add_action( 'init', 'posts_types');
