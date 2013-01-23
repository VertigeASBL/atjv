<?php
/**
 * Plugin iView pour SPIP
 * (c) 2012 Phenix
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Fonction d'installation du plugin et de mise à jour.
 * Vous pouvez :
 * - créer la structure SQL,
 * - insérer du pre-contenu,
 * - installer des valeurs de configuration,
 * - mettre à jour la structure SQL 
**/
function iview_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();
	# quelques exemples
	# (que vous pouvez supprimer !)
	# 
	# $maj['create'] = array(array('creer_base'));
	#
	# include_spip('inc/config')
	# $maj['create'] = array(
	#	array('maj_tables', array('spip_xx', 'spip_xx_liens')),
	#	array('ecrire_config', array('iview', array('exemple' => "Texte de l'exemple")))
	#);
	#
	# $maj['1.1.0']  = array(array('sql_alter','TABLE spip_xx RENAME TO spip_yy'));
	# $maj['1.2.0']  = array(array('sql_alter','TABLE spip_xx DROP COLUMN id_auteur'));
	# $maj['1.3.0']  = array(
	#	array('sql_alter','TABLE spip_xx CHANGE numero numero int(11) default 0 NOT NULL'),
	#	array('sql_alter','TABLE spip_xx CHANGE texte petit_texte mediumtext NOT NULL default \'\''),
	# );
	# ...

	$maj['create'] = array(array('maj_tables', array('spip_slides', 'spip_slides_liens', 'spip_slideshows')));

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);

	$config_default = array(
		'effet' => 'random',
		'vitesse' => 1000,
		'pause' => 3000, 
		'direction_nav' => 'false',
		'control_nav' => 'true',
		'controlNavHoverOpacity' => 0.6,
		'controlNavNextPrev' => 'true',
		'controlNavTooltip' => 'true',
		'effet_caption' => 'fade',
		'vitesse_caption' => 500,
		'opacite_caption' => 0.9,
		'posX_caption' => 70,
		'posY_caption' => 70,
		'timer' => 'pie',
		'timerX' => 10,
		'timerY' => 10,
		'timerColor' => '#919191',
		'timerOpacity' => 0.8,
		'timerDiameter' => 30,
		'timerPadding' => 3,
		'timerStroke' => 1,
		'timerBarStrokeColor' => '#ffffff'
		);

	ecrire_meta('iview', serialize($config_default));
}


/**
 * Fonction de désinstallation du plugin.
 * Vous devez :
 * - nettoyer toutes les données ajoutées par le plugin et son utilisation
 * - supprimer les tables et les champs créés par le plugin. 
**/
function iview_vider_tables($nom_meta_base_version) {
	# quelques exemples
	# (que vous pouvez supprimer !)
	# sql_drop_table("spip_xx");
	# sql_drop_table("spip_xx_liens");

	sql_drop_table("spip_slides");
	sql_drop_table("spip_slides_liens");
	sql_drop_table("spip_slideshows");

	# Nettoyer les versionnages et forums
	sql_delete("spip_versions",              sql_in("objet", array('slide', 'slideshow')));
	sql_delete("spip_versions_fragments",    sql_in("objet", array('slide', 'slideshow')));
	sql_delete("spip_forum",                 sql_in("objet", array('slide', 'slideshow')));

	effacer_meta($nom_meta_base_version);
}

?>