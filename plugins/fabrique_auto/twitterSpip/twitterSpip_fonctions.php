<?php
/**
 * Plugin Twitter pour Spip
 * (c) 2013 Didier Debondt
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/*
 * Un fichier de fonctions permet de definir des elements
 * systematiquement charges lors du calcul des squelettes.
 *
 * Il peut par exemple définir des filtres, critères, balises, …
 * 
 */

/* Cette fonction va placer des liens correctes sur les éléments Twitter. */
function twitter_parse($text) {
	$text = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0" target="_blank">$0</a>', $text);
	$text = preg_replace('#@([a-z0-9_]+)#i', '<a href="http://twitter.com/$1" target="_blank">@$1</a>', $text);
	$text = preg_replace('# \#([a-z0-9_-]+)#i', ' <a href="http://search.twitter.com/search?q=%23$1" target="_blank">#$1</a>', $text);
	return $text;
}

/* Cette fonction va supprimer le @ devant le username s'il existe. */
function clean_at($twitter_username) {
	return str_replace('@', '', $twitter_username);
}

/*Cette fonction ajout le @ devant le username s'il n'existe pas.*/
function add_at($twitter_username) {
	if ($twitter_username[0] == '@') return $twitter_username;
	else return '@'.$twitter_username;
}
?>