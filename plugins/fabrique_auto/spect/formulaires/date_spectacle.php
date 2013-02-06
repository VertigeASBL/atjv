<?php
include_spip('action/editer_objet');
include_spip('action/editer_evenement');

function formulaires_date_spectacle_charger_dist($id_spectacle) {
	$contexte = array(
		'date_debut' => _request('date_debut'),
		'date_fin' => _request('date_fin')
		);

	echo '<pre>';
	var_dump(_request('date_debut'));
	echo '</pre>';

	return $contexte;
}

function formulaires_date_spectacle_verifier_dist($id_spectacle) {
	$erreurs = array();
	return $erreurs;
}

function formulaires_date_spectacle_traiter_dist($id_spectacle) {
	
	/* On récupère et on vérifie les dates envoyer */
	include_spip('inc/date_gestion');

	/* on fait une date correct. */
	include_spip('prive/formulaires/dater');

	/* Avec les fonctions "dater" on va générer des dates corrects à insérer dans la base de donnée. */
	$date_debut = array_merge(dater_recuperer_date_saisie(_request('date_debut')['date']), dater_recuperer_heure_saisie(_request('date_debut')['heure']));
	$date_debut = sql_format_date($date_debut[0], $date_debut[1], $date_debut[2], $date_debut[3], $date_debut[4]);

	$date_fin = array_merge(dater_recuperer_date_saisie(_request('date_fin')['date']), dater_recuperer_heure_saisie(_request('date_fin')['heure']));
	$date_fin = sql_format_date($date_fin[0], $date_fin[1], $date_fin[2], $date_fin[3], $date_fin[4]);

	/* On créer l'événement dans la base de donnée. */
	$id_event = evenement_inserer(1, 'evenement');

	/* On modifier l'événement et on récupère les éventuelle erreur. */
	$err = evenement_modifier($id_event, 
		array(
			'titre' => 'test',
			'date_debut' => $date_debut,
			'date_fin' => $date_fin
			));

	echo '<pre>';
	var_dump($err);
	echo '</pre>';

    // message
	return array(
		'editable' => true,
		'message_ok' => '',
		'redirect' => ''
		);
}
?>