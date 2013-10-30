<?php
return CMap::mergeArray(
    require(dirname(__FILE__) . '/shared.php'),
    array(
        'components' => array(
            // uncomment the following to use a MySQL database
            /*
            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=testdrive',
                'emulatePrepare' => true,
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
            ),
            */
        ),
        'params'=>array(
        ),
    )
);