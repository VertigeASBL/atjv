<?php
/**
 * Plugin iView pour SPIP
 * (c) 2012 Phenix
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('inc/actions');
include_spip('inc/editer');

/**
 * Identifier le formulaire en faisant abstraction des parametres qui ne representent pas l'objet edite
 */
function formulaires_editer_slideshow_identifier_dist($id_slideshow='new', $retour='', $lier_trad=0, $config_fonc='', $row=array(), $hidden=''){
	return serialize(array(intval($id_slideshow)));
}

/**
 * Declarer les champs postes et y integrer les valeurs par defaut
 */
function formulaires_editer_slideshow_charger_dist($id_slideshow='new', $retour='', $lier_trad=0, $config_fonc='', $row=array(), $hidden=''){
	$valeurs = formulaires_editer_objet_charger('slideshow',$id_slideshow,'',$lier_trad,$retour,$config_fonc,$row,$hidden);
	return $valeurs;
}

/**
 * Verifier les champs postes et signaler d'eventuelles erreurs
 */
function formulaires_editer_slideshow_verifier_dist($id_slideshow='new', $retour='', $lier_trad=0, $config_fonc='', $row=array(), $hidden=''){
	return formulaires_editer_objet_verifier('slideshow',$id_slideshow, array('titre'));
}

/**
 * Traiter les champs postes
 */
function formulaires_editer_slideshow_traiter_dist($id_slideshow='new', $retour='', $lier_trad=0, $config_fonc='', $row=array(), $hidden=''){
	return formulaires_editer_objet_traiter('slideshow',$id_slideshow,'',$lier_trad,$retour,$config_fonc,$row,$hidden);
}


?>