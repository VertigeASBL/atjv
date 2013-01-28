<?php
/**
 * Plugin Spectacle
 * (c) 2013 Didier
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/*
 * Un fichier de pipelines permet de regrouper
 * les fonctions de branchement de votre plugin
 * sur des pipelines existants.
 */



/**
 * Ajout de contenu sur certaines pages,
 * notamment des formulaires de liaisons entre objets
 */
function spect_affiche_milieu($flux) {
	$texte = "";
	$e = trouver_objet_exec($flux['args']['exec']);



	// spectacles sur les evenements
	if (!$e['edition'] AND in_array($e['type'], array('evenement'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'spectacles',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}

	if ($texte) {
		if ($p=strpos($flux['data'],"<!--affiche_milieu-->"))
			$flux['data'] = substr_replace($flux['data'],$texte,$p,0);
		else
			$flux['data'] .= $texte;
	}

	return $flux;
}


/**
 * Optimiser la base de donnees en supprimant les liens orphelins
 * de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 *
 * @param int $n
 * @return int
 */
function spect_optimiser_base_disparus($flux){
	include_spip('action/editer_liens');
	$flux['data'] += objet_optimiser_liens(array('spectacle'=>'*'),'*');
	return $flux;
}

?>