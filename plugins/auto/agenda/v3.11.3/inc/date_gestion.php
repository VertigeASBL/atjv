<?php
/**
 * Plugin Agenda 4 pour Spip 3.0
 * Licence GPL 3
 *
 * 2006-2011
 * Auteurs : cf paquet.xml
 */

if (!defined("_ECRIRE_INC_VERSION")) return;



/**
 * Recuperer les champs date_xx et heure_xx, verifier leur coherence et les reformater
 *
 * @param string $suffixe
 * @param bool $horaire
 * @param array $erreurs
 * @return int
 */
function verifier_corriger_date_saisie($suffixe,$horaire,&$erreurs){
	include_spip('inc/filtres');
	
	$date = _request("date_$suffixe").($horaire?' '.trim(_request("heure_$suffixe")).':00':'');
	
	if (!$date)
		return '';
	$ret = null;
	if (!$ret=mktime(0,0,0,$date[1],$date[2],$date[0]))
		$erreurs["date_$suffixe"] = _T('agenda:erreur_date');
	elseif (!$ret=mktime($date[3],$date[4],$date[5],$date[1],$date[2],$date[0]))
		$erreurs["date_$suffixe"] = _T('agenda:erreur_heure');
	if ($ret){
		if (trim(_request("date_$suffixe")!==($d=date('d/m/Y',$ret)))){
			$erreurs["date_$suffixe"] = _T('agenda:erreur_date_corrigee');
			set_request("date_$suffixe",$d);
		}
		if ($horaire AND trim(_request("heure_$suffixe")!==($h=date('H:i',$ret)))){
			$erreurs["heure_$suffixe"] = _T('agenda:erreur_heure_corrigee');
			set_request("heure_$suffixe",$h);
		}
	}
	return $ret;
}

?>