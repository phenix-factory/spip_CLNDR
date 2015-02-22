<?php
/**
 * Utilisations de pipelines par CLNDR
 *
 * @plugin     CLNDR
 * @copyright  2014
 * @author     Vertige (Didier)
 * @licence    GNU/GPL
 * @package    SPIP\Clndr\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

// Les autres ne son des lib en plus, mais non dépendante de jquery
function clndr_insert_head($flux) {

    $flux .= '
    <script src="'.find_in_path('lib/moment/moment-with-locales.js').'" type="text/javascript"></script>
    <script src="'.find_in_path('lib/underscore/underscore.js').'" type="text/javascript"></script>
    <script src="'.find_in_path('lib/clndr/clndr.js').'" type="text/javascript"></script>';

    return $flux;
}

function clndr_insert_head_css($flux) {
    $flux .= '
    <link rel="stylesheet" href="'.find_in_path('css/clndr.css').'" type="text/css" />';
    return $flux;
}