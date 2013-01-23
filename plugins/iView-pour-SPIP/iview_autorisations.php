<?php
/**
 * Plugin iView pour SPIP
 * (c) 2012 Phenix
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

/*
 * Un fichier d'autorisations permet de regrouper
 * les fonctions d'autorisations de votre plugin
 */

// declaration vide pour ce pipeline.
function iview_autoriser(){}


/* Exemple
function autoriser_configurer_iview_dist($faire, $type, $id, $qui, $opt) {
	// type est un objet (la plupart du temps) ou une chose.
	// autoriser('configurer', '_iview') => $type = 'iview'
	// au choix
	return autoriser('webmestre', $type, $id, $qui, $opt); // seulement les webmestres
	return autoriser('configurer', '', $id, $qui, $opt); // seulement les administrateurs complets
	return $qui['statut'] == '0minirezo'; // seulement les administrateurs (même les restreints)
	// ...
}
*/

// -----------------
// Objet slides


// bouton de menu
function autoriser_slides_menu_dist($faire, $type, $id, $qui, $opts){
	return true;
} 

// bouton d'outils rapides
function autoriser_slidecreer_menu_dist($faire, $type, $id, $qui, $opts){
	return autoriser('creer', 'slide', '', $qui, $opts);
} 

// creer
function autoriser_slide_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite')); 
}

// voir les fiches completes
function autoriser_slide_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

// modifier
function autoriser_slide_modifier_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

// supprimer
function autoriser_slide_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' AND !$qui['restreint'];
}


// associer (lier / delier)
function autoriser_associerslides_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' AND !$qui['restreint'];
}
// -----------------
// Objet slideshows


// bouton de menu
function autoriser_slideshows_menu_dist($faire, $type, $id, $qui, $opts){
	return true;
} 

// bouton d'outils rapides
function autoriser_slideshowcreer_menu_dist($faire, $type, $id, $qui, $opts){
	return autoriser('creer', 'slideshow', '', $qui, $opts);
} 

// creer
function autoriser_slideshow_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite')); 
}

// voir les fiches completes
function autoriser_slideshow_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

// modifier
function autoriser_slideshow_modifier_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

// supprimer
function autoriser_slideshow_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' AND !$qui['restreint'];
}




?>