<?php
/**
 * Plugin Spectacle
 * (c) 2013 Didier
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('inc/actions');
include_spip('inc/editer');

/**
 * Identifier le formulaire en faisant abstraction des parametres qui ne representent pas l'objet edite
 */
function formulaires_editer_spectacle_identifier_dist($id_spectacle='new', $retour='', $lier_trad=0, $config_fonc='', $row=array(), $hidden=''){
	return serialize(array(intval($id_spectacle)));
}

/**
 * Declarer les champs postes et y integrer les valeurs par defaut
 */
function formulaires_editer_spectacle_charger_dist($id_spectacle='new', $retour='', $lier_trad=0, $config_fonc='', $row=array(), $hidden=''){
	$valeurs = formulaires_editer_objet_charger('spectacle',$id_spectacle,'',$lier_trad,$retour,$config_fonc,$row,$hidden);
	return $valeurs;
}

/**
 * Verifier les champs postes et signaler d'eventuelles erreurs
 */
function formulaires_editer_spectacle_verifier_dist($id_spectacle='new', $retour='', $lier_trad=0, $config_fonc='', $row=array(), $hidden=''){
	
	include_spip('prive/formulaires/dater');
	$date_debut = dater_recuperer_date_saisie(_request('date_debut'));
	set_request('date_debut',sql_format_date($date_debut[0], $date_debut[1], $date_debut[2], '00', '00'));
	
	$date_fin = dater_recuperer_date_saisie(_request('date_fin'));
	set_request('date_fin',sql_format_date($date_fin[0], $date_fin[1], $date_fin[2], '00', '00'));
	
	return formulaires_editer_objet_verifier('spectacle',$id_spectacle, array('titre'));
}

function formulaires_editer_mon_objet_verifier_dist($id_mon_objet='new', $id_rubrique=0, $retour='', $associer_objet='', $lier_trad=0, $config_fonc='', $row=array(), $hidden=''){
	include_spip('prive/formulaires/dater');
	$date_edition = dater_recuperer_date_saisie(_request('date_edition'));
	set_request('date_edition',sql_format_date($date_edition[0], $date_edition[1], $date_edition[2], '00', '00'));
	return formulaires_editer_objet_verifier('mon_objet',$id_mon_objet, array('titre', 'date_edition'));
}


/**
 * Traiter les champs postes
 */
function formulaires_editer_spectacle_traiter_dist($id_spectacle='new', $retour='', $lier_trad=0, $config_fonc='', $row=array(), $hidden=''){
	return formulaires_editer_objet_traiter('spectacle',$id_spectacle,'',$lier_trad,$retour,$config_fonc,$row,$hidden);
}


?>