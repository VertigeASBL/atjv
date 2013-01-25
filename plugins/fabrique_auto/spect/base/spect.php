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
	$interfaces['table_des_traitements']['DESCRIPTION']['spectacles'] = "safehtml(".str_replace("%s","interdit_html(%s)",_TRAITEMENT_RACCOURCIS).")";

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
			"statut"             => "varchar(20)  DEFAULT '0' NOT NULL", 
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_spectacle",
			"KEY statut"         => "statut", 
		),
		'titre' => "titre AS titre, '' AS lang",
		 #'date' => "",
		'champs_editables'  => array('titre', 'auteur_spect', 'metteur_en_scene', 'type_de_spectacle', 'style', 'date_debut', 'date_fin', 'lieu', 'description', 'reserve_1', 'reserve_2', 'reserve_3', 'reserve_4'),
		'champs_versionnes' => array('titre', 'auteur_spect', 'metteur_en_scene', 'type_de_spectacle', 'style', 'date_debut', 'date_fin', 'lieu', 'description', 'reserve_1', 'reserve_2', 'reserve_3', 'reserve_4'),
		'rechercher_champs' => array("titre" => 8, "auteur_spect" => 6, "metteur_en_scene" => 6, "type_de_spectacle" => 6, "date_debut" => 6, "date_fin" => 6, "description" => 6),
		'tables_jointures'  => array(),
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
		'texte_changer_statut' => 'spectacle:texte_changer_statut_spectacle', 
		

	);

	return $tables;
}



?>