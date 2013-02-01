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

	$date_debut = dater_recuperer_date_saisie(_request('date_debut')['date'].' '._request('date_debut')['heure'].':00');
	$date_debut = sql_format_date($date_debut[0], $date_debut[1], $date_debut[2], '00', '00');

	$date_fin = dater_recuperer_date_saisie(_request('date_fin')['date'].' '._request('date_fin')['heure'].':00');
	$date_fin = sql_format_date($date_fin[0], $date_fin[1], $date_fin[2], '00', '00');

	echo '<pre>';
	var_dump($date_debut);
	echo '</pre>';

	echo '<pre>';
	var_dump($date_fin);
	echo '</pre>';

	/* On créer l'événement dans la base de donnée. */
	$id_event = evenement_inserer(1, 'evenement');

	$err = evenement_modifier($id_event, 
		array(
			'titre' => 'test',
			'date_debut' => $date_debut,
			'date_fin' => $date_fin
			));

    // message
	return array(
		'editable' => true,
		'message_ok' => '',
		'redirect' => ''
		);
}
?>