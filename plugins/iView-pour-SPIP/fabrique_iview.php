<?php

/**
 *  Fichier généré par la Fabrique de plugin v5
 *   le 2012-12-08 01:25:31
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined("_ECRIRE_INC_VERSION")) return;

$data = array (
  'fabrique' => 
  array (
    'version' => 5,
  ),
  'paquet' => 
  array (
    'nom' => 'iView pour SPIP',
    'slogan' => 'Le slideshow ultime',
    'description' => 'iView est un slider Javascript facile d\'utilisation',
    'prefixe' => 'iview',
    'version' => '1.0.0',
    'auteur' => 'Phenix',
    'auteur_lien' => 'http://www.phenix-factory.net',
    'licence' => 'GNU/GPL',
    'categorie' => 'multimedia',
    'etat' => 'dev',
    'compatibilite' => '[3.0.5;3.0.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => 'Configuration de iView',
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Slides',
      'nom_singulier' => 'Slide',
      'genre' => 'masculin',
      'logo_variantes' => 'on',
      'table' => 'spip_slides',
      'cle_primaire' => 'id_slide',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'slide',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Drescriptif',
          'champ' => 'drescriptif',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
          ),
          'recherche' => '3',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'li_class=haut, class=inserer_barre_edition, rows=4',
        ),
      ),
      'champ_titre' => 'titre',
      'champ_date' => '',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Slides',
        'titre_objet' => 'Slide',
        'info_aucun_objet' => 'Aucun slide',
        'info_1_objet' => 'Un slide',
        'info_nb_objets' => '@nb@ slides',
        'icone_creer_objet' => 'Créer un slide',
        'icone_modifier_objet' => 'Modifier ce slide',
        'titre_logo_objet' => 'Logo de ce slide',
        'titre_langue_objet' => 'Langue de ce slide',
        'titre_objets_rubrique' => 'Slides de la rubrique',
        'info_objets_auteur' => 'Les slides de cet auteur',
        'retirer_lien_objet' => 'Retirer ce slide',
        'retirer_tous_liens_objets' => 'Retirer tous les slides',
        'ajouter_lien_objet' => 'Ajouter ce slide',
        'texte_ajouter_objet' => 'Ajouter un slide',
        'texte_creer_associer_objet' => 'Créer et associer un slide',
        'texte_changer_statut_objet' => 'Ce slide est :',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_slideshows',
      ),
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    1 => 
    array (
      'nom' => 'Slideshows',
      'nom_singulier' => 'Slideshow',
      'genre' => 'masculin',
      'logo_variantes' => 'on',
      'table' => 'spip_slideshows',
      'cle_primaire' => 'id_slideshow',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'slideshow',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'obligatoire',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => 'Titre de votre slideshow',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'champ_date' => '',
      'statut' => '',
      'chaines' => 
      array (
        'titre_objets' => 'Slideshows',
        'titre_objet' => 'Slideshow',
        'info_aucun_objet' => 'Aucun slideshow',
        'info_1_objet' => 'Un slideshow',
        'info_nb_objets' => '@nb@ slideshows',
        'icone_creer_objet' => 'Créer un slideshow',
        'icone_modifier_objet' => 'Modifier ce slideshow',
        'titre_logo_objet' => 'Logo de ce slideshow',
        'titre_langue_objet' => 'Langue de ce slideshow',
        'titre_objets_rubrique' => 'Slideshows de la rubrique',
        'info_objets_auteur' => 'Les slideshows de cet auteur',
        'retirer_lien_objet' => 'Retirer ce slideshow',
        'retirer_tous_liens_objets' => 'Retirer tous les slideshows',
        'ajouter_lien_objet' => 'Ajouter ce slideshow',
        'texte_ajouter_objet' => 'Ajouter un slideshow',
        'texte_creer_associer_objet' => 'Créer et associer un slideshow',
        'texte_changer_statut_objet' => 'Ce slideshow est :',
      ),
      'table_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NjA4NDVFRjM4RUYxMUUyOEI3RkY2Q0UwQzQ1NUU3NyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5NjA4NDVGMDM4RUYxMUUyOEI3RkY2Q0UwQzQ1NUU3NyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk2MDg0NUVEMzhFRjExRTI4QjdGRjZDRTBDNDU1RTc3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjk2MDg0NUVFMzhFRjExRTI4QjdGRjZDRTBDNDU1RTc3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+8Hwp4AAACXJJREFUeNrsXV2S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',
          ),
        ),
      ),
      1 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => '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',
          ),
        ),
      ),
    ),
  ),
);

?>