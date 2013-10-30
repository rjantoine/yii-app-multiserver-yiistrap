<?php
// main configuration
return array(
    // path aliases
    'aliases' => array(
        'bootstrap' => 'application.extensions.bootstrap'
    ),
    // import paths
    'import' => array(
        'bootstrap.helpers.TbHtml',
    ),
    // application modules
    'modules' => array(
        'gii' => array(
            'generatorPaths' => array('bootstrap.gii'),
        ),
    ),
    // application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),
    ),
);