<?php
/*
Plugin Name: Gourmet Artist Post Types
Plugin URI:
Description: Agrega Custom Post Types al sitio Gourmet Artist
Version:     1.0
Author:      Edison Perdomo
Author URI:
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


function crear_post_type_receta() {
  // Etiquetas para el Post Type
	$labels = array(
		'name'                => _x( 'Recetas', 'Post Type General Name', 'gourmet-artist' ),
		'singular_name'       => _x( 'Receta', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name'           => __( 'Recetas', 'gourmet-artist' ),
		'parent_item_colon'   => __( 'Receta Padre', 'gourmet-artist' ),
		'all_items'           => __( 'Todas las Recetas', 'gourmet-artist' ),
		'view_item'           => __( 'Ver Receta', 'gourmet-artist' ),
		'add_new_item'        => __( 'Agregar Nueva Receta', 'gourmet-artist' ),
		'add_new'             => __( 'Agregar Nueva Receta', 'gourmet-artist' ),
		'edit_item'           => __( 'Editar Receta', 'gourmet-artist' ),
		'update_item'         => __( 'Actualizar Receta', 'gourmet-artist' ),
		'search_items'        => __( 'Buscar Receta', 'gourmet-artist' ),
		'not_found'           => __( 'No encontrado', 'gourmet-artist' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'gourmet-artist' ),
  );
  
  // Otras opciones para el post type

	$args = array(
		'label'               => __( 'recetas', 'gourmet-artist' ),
		'description'         => __( 'Receta news and reviews', 'gourmet-artist' ),
		'labels'              => $labels,
		// Todo lo que soporta este post type
		'supports'            => array( 'title', 'editor', 'thumbnail'  ),
		/* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
		* Uno sin hierarchical es como los posts
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-page',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Por ultimo registramos el post type
	register_post_type( 'recetas', $args );
}
add_action( 'init', 'crear_post_type_receta' );







function crear_post_type_eventos() {

// Etiquetas para el Post Type
	$labels = array(
		'name'                => _x( 'Eventos', 'Post Type General Name', 'gourmet-artist' ),
		'singular_name'       => _x( 'Evento', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name'           => __( 'Eventos', 'gourmet-artist' ),
		'parent_item_colon'   => __( 'Evento Padre', 'gourmet-artist' ),
		'all_items'           => __( 'Todas las Eventos', 'gourmet-artist' ),
		'view_item'           => __( 'Ver Eventos', 'gourmet-artist' ),
		'add_new_item'        => __( 'Agregar Nueva Evento', 'gourmet-artist' ),
		'add_new'             => __( 'Agregar Nueva Evento', 'gourmet-artist' ),
		'edit_item'           => __( 'Editar Evento', 'gourmet-artist' ),
		'update_item'         => __( 'Actualizar Evento', 'gourmet-artist' ),
		'search_items'        => __( 'Buscar Evento', 'gourmet-artist' ),
		'not_found'           => __( 'No encontrado', 'gourmet-artist' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'gourmet-artist' ),
	);

// Otras opciones para el post type

	$args = array(
		'label'               => __( 'eventos', 'gourmet-artist' ),
		'description'         => __( 'Próximos Eventos', 'gourmet-artist' ),
		'labels'              => $labels,
		// Todo lo que soporta este post type
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
		* Uno sin hierarchical es como los posts
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
   	'menu_icon'           => 'dashicons-calendar-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Por ultimo registramos el post type
	register_post_type( 'eventos', $args );

}
// Post Type Eventos
add_action( 'init', 'crear_post_type_eventos', 0 );


function tipo_comida(){
  $labels = array(
    'name'              => _x( 'Tipo de comida', 'taxonomy general name' ),
    'singular_name'     => _x( 'Tipo de comida', 'taxonomy singular name' ),
    'search_items'      => __( 'Buscar Tipo de comida' ),
    'all_items'         => __( 'Todos los Tipo de comidas' ),
    'parent_item'       => __( 'Tipo de comida Padre' ),
    'parent_item_colon' => __( 'Tipo de comida Padre:' ),
    'edit_item'         => __( 'Editar Tipo de comida' ),
    'update_item'       => __( 'Actualizar Tipo de comida' ),
    'add_new_item'      => __( 'Agregar Nuevo Tipo de comida' ),
    'new_item_name'     => __( 'Nuevo Tipo de comida' ),
    'menu_name'         => __( 'Tipo de comida' ),
  );
  
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite' => array( 'slug' => 'tipo-comida' ),
  );
  
  register_taxonomy( 'tipo-comida', array( 'recetas' ), $args );
}
add_action( 'init', 'tipo_comida' );


function horario_comida() {
  $labels = array(
    'name'              => _x( 'Horario de Comida', 'taxonomy general name' ),
    'singular_name'     => _x( 'Horario de Comida', 'taxonomy singular name' ),
    'search_items'      => __( 'Buscar Horario' ),
    'all_items'         => __( 'Todos los Horarios' ),
    'parent_item'       => __( 'Horario Padre' ),
    'parent_item_colon' => __( 'Horario Padre:' ),
    'edit_item'         => __( 'Editar Horario' ),
    'update_item'       => __( 'Actualizar Horario' ),
    'add_new_item'      => __( 'Agregar Nuevo Horario' ),
    'new_item_name'     => __( 'Nuevo Horario' ),
    'menu_name'         => __( 'Horario' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite' => array( 'slug' => 'horario' ),
  );

  register_taxonomy( 'horario-menu', array( 'recetas' ), $args );
}
add_action( 'init', 'horario_comida' );


function estado_animo(){
  $labels = array(
    'name'              => _x( 'Estado de Animo', 'taxonomy general name' ),
    'singular_name'     => _x( 'Estado de Animo', 'taxonomy singular name' ),
    'search_items'      => __( 'Buscar Estado de Animo' ),
    'all_items'         => __( 'Todos los Estados de Animo' ),
    'parent_item'       => __( 'Genero Estado' ),
    'parent_item_colon' => __( 'Genero Estado:' ),
    'edit_item'         => __( 'Editar Estado' ),
    'update_item'       => __( 'Actualizar Estado' ),
    'add_new_item'      => __( 'Agregar Nuevo Estado' ),
    'new_item_name'     => __( 'Nuevo Estado' ),
    'menu_name'         => __( 'Estado de Ánimo' ),
  );
  
  $args = array(
    'hierarchical'      => false,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite' => array( 'slug' => 'estado' ),
  );
  
  register_taxonomy( 'estado', array( 'recetas' ), $args );
}
add_action( 'init', 'estado_animo' );