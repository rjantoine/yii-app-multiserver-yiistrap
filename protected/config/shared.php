<?php
return CMap::mergeArray(
    require(dirname(__FILE__) . '/bootstrap.php'),
    require(dirname(__FILE__) . '/main.php')
);