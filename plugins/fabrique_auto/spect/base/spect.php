<?php
/**
 * Plugin Spectacle
 * (c) 2013 Didier
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 */
function spect_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['spectacles'] = 'spectacles';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 */
function spect_declarer_tables_objets_sql($tables) {

	$tables['spip_spectacles'] = array(
		'type' => 'spectacle',
		'principale' => "oui",
		'field'=> array(
			"id_spectacle"       => "bigint(21) NOT NULL",
			"titre"              => "text NOT NULL DEFAULT ''",
			"auteur_spect"       => "text NOT NULL DEFAULT ''",
			"metteur_en_scene"   => "text NOT NULL DEFAULT ''",
			"type_de_spectacle"  => "text NOT NULL DEFAULT ''",
			"style"              => "text NOT NULL DEFAULT ''",
			"date_debut"         => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'",
			"date_fin"           => "datetime NOT NULL DEFAULT '0000-00-00 00:00:00'",
			"lieu"               => "text NOT NULL DEFAULT ''",
			"description"        => "text NOT NULL DEFAULT ''",
			"reserve_1"          => "varchar(25) NOT NULL DEFAULT ''",
			"reserve_2"          => "varchar(25) NOT NULL DEFAULT ''",
			"reserve_3"          => "varchar(25) NOT NULL DEFAULT ''",
			"reserve_4"          => "varchar(25) NOT NULL DEFAULT ''",
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_spectacle",
		),
		'titre' => "titre AS titre, '' AS lang",
		 #'date' => "",
		'champs_editables'  => array('titre', 'auteur_spect', 'metteur_en_scene', 'type_de_spectacle', 'style', 'date_debut', 'date_fin', 'lieu', 'description', 'reserve_1', 'reserve_2', 'reserve_3', 'reserve_4'),
		'champs_versionnes' => array('titre', 'auteur_spect', 'metteur_en_scene', 'type_de_spectacle', 'style', 'date_debut', 'date_fin', 'lieu', 'description', 'reserve_1', 'reserve_2', 'reserve_3', 'reserve_4'),
		'rechercher_champs' => array("titre" => 8, "auteur_spect" => 6, "metteur_en_scene" => 6, "type_de_spectacle" => 6, "date_debut" => 6, "date_fin" => 6, "description" => 6),
		'tables_jointures'  => array(),
		

	);

	return $tables;
}



?>