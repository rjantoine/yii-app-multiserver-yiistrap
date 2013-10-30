<?php
return CMap::mergeArray(
    require(dirname(__FILE__) . '/yiiwheels.php'),
    require(dirname(__FILE__) . '/yiistrap.php'),
    require(dirname(__FILE__) . '/main.php')
);