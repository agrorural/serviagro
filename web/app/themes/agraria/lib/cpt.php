<?php //

add_action( 'init', 'create_my_post_types' );
function create_my_post_types() {
	$labels_servicio = array(
		'name'               => _x( 'Servicios', 'post type general name', 'agra' ),
		'singular_name'      => _x( 'Servicio', 'post type singular name', 'agra' ),
		'menu_name'          => _x( 'Servicios', 'admin menu', 'agra' ),
		'name_admin_bar'     => _x( 'Servicio', 'Agregar Nuevo on admin bar', 'agra' ),
		'add_new'            => _x( 'Agregar Nuevo', 'Servicio', 'agra' ),
		'add_new_item'       => __( 'Agregar Nuevo Servicio', 'agra' ),
		'new_item'           => __( 'Nuevo Servicio', 'agra' ),
		'edit_item'          => __( 'Editar Servicio', 'agra' ),
		'view_item'          => __( 'Ver Servicio', 'agra' ),
		'all_items'          => __( 'Todos', 'agra' ),
		'search_items'       => __( 'Buscar Servicios', 'agra' ),
		'parent_item_colon'  => __( 'Servicio Padre:', 'agra' ),
		'not_found'          => __( 'Ningún Servicio encontrado.', 'agra' ),
		'not_found_in_trash' => __( 'Ningún Servicio encontrado en la Papelera.', 'agra' )
	);
 
	$args_servicio = array(
		'labels'             => $labels_servicio,
        'description'        => __( 'Servicios de Serviagro.', 'agra' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type' => 'servicio',
			'capabilities' => array(
				'publish_posts' => 'publish_servicios',
				'edit_posts' => 'edit_servicios',
				'edit_others_posts' => 'edit_others_servicios',
				'delete_posts' => 'delete_servicios',
				'delete_others_posts' => 'delete_others_servicios',
				'read_private_posts' => 'read_private_servicios',
				'edit_post' => 'edit_servicio',
				'delete_post' => 'delete_servicio',
				'read_post' => 'read_servicio',
			),
		'has_archive'        => true,
		'hierarchical'       => true,
		'rewrite'            => array( 'slug' => 'servicios' ),
		'menu_position'      => 10,
		'menu_icon'			 => 'dashicons-store',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions', 'page-attributes' )
	);

	register_post_type('servicio', $args_servicio);
}

add_action( 'init', 'create_my_taxonomies', 0 );
function create_my_taxonomies() {
	// Agregar Nuevo taxonomy, make it hierarchical (like categories)
	$labels_servicio_organizacion = array(
		'name'              => _x( 'Organizaciones', 'taxonomy general name' ),
		'singular_name'     => _x( 'Organización', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar organizaciones' ),
		'all_items'         => __( 'Todas los  organizaciones' ),
		'parent_item'       => __( 'Organización Padre' ),
		'parent_item_colon' => __( 'Organización Padre:' ),
		'edit_item'         => __( 'Editar organización' ),
		'update_item'       => __( 'Actualizar organización' ),
		'add_new_item'      => __( 'Agregar Nueva organización' ),
		'new_item_name'     => __( 'Nombre de Nueva organización' ),
		'menu_name'         => __( 'Organizaciones' )
	);
	$args_servicio_organizacion = array(
		'public' 			=> true,
		'hierarchical'      => true,
		'labels'            => $labels_servicio_organizacion,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'capabilities'		=> array(
			'manage_terms' => 'manage_organizacion',
			'edit_terms' => 'edit_organizacion',
			'delete_terms' => 'delete_organizacion',
			'assign_terms' => 'assign_organizacion'
		)
	);

		register_taxonomy( 'organizacion', 'servicio', $args_servicio_organizacion );
}