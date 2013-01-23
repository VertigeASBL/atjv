<?php
/**
 * Plugin iView pour SPIP
 * (c) 2012 Phenix
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 */
function iview_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['slideshows'] = 'slideshows';
	$interfaces['table_des_tables']['slides'] = 'slides';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 */
function iview_declarer_tables_objets_sql($tables) {

	$tables['spip_slideshows'] = array(
		'type' => 'slideshow',
		'principale' => "oui",
		'field'=> array(
			"id_slideshow"       => "bigint(21) NOT NULL",
			"titre"              => "text NOT NULL DEFAULT ''",
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_slideshow",
		),
		'titre' => "titre AS titre, '' AS lang",
		 #'date' => "",
		'champs_editables'  => array('titre'),
		'champs_versionnes' => array(),
		'rechercher_champs' => array("titre" => 8),
		'tables_jointures'  => array()
	);

	$tables['spip_slides'] = array(
		'type' => 'slide',
		'principale' => "oui",
		'field'=> array(
			"id_slide"           => "bigint(21) NOT NULL",
			"titre"              => "text NOT NULL DEFAULT ''",
			"descriptif"        => "text NOT NULL DEFAULT ''",
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_slide",
			"KEY statut"         => "statut", 
		),
		'titre' => "titre AS titre, '' AS lang",
		 #'date' => "",
		'champs_editables'  => array('titre', 'descriptif'),
		'champs_versionnes' => array(),
		'rechercher_champs' => array("titre" => 8, "descriptif" => 3),
		'tables_jointures'  => array('spip_slides_liens'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date', 
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'slide:texte_changer_statut_slide', 
		

	);

	return $tables;
}


/**
 * Déclaration des tables secondaires (liaisons)
 */
function iview_declarer_tables_auxiliaires($tables) {

	$tables['spip_slides_liens'] = array(
		'field' => array(
			"id_slide"           => "bigint(21) DEFAULT '0' NOT NULL",
			"id_objet"           => "bigint(21) DEFAULT '0' NOT NULL",
			"objet"              => "VARCHAR(25) DEFAULT '' NOT NULL",
			"vu"                 => "VARCHAR(6) DEFAULT 'non' NOT NULL"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_slide,id_objet,objet",
			"KEY id_slide"       => "id_slide"
		)
	);

	return $tables;
}


?>