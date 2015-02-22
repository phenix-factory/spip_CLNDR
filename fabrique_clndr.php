<?php

/**
 *  Fichier généré par la Fabrique de plugin v5
 *   le 2014-09-09 14:01:11
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
    'nom' => 'CLNDR',
    'slogan' => 'Un calendrier d\'événement pour SPIP',
    'description' => 'Un calendrier d\'événement pour SPIP',
    'prefixe' => 'clndr',
    'version' => '1.0.0',
    'auteur' => 'Vertige (Didier)',
    'auteur_lien' => 'http://p.henix.be',
    'licence' => 'GNU/GPL',
    'categorie' => 'date',
    'etat' => 'dev',
    'compatibilite' => '[3.0.17;3.0.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => 'Configuration du calendrier',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
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
    ),
  ),
);

?>