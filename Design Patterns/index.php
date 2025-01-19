<?php

require_once('DesignPatterns\Behavioral\Strategy\VideoStorage.php');
require_once('DesignPatterns\Behavioral\Strategy\CompressorMOV.php');
require_once('DesignPatterns\Behavioral\Strategy\CompressorMP4.php');
require_once('DesignPatterns\Behavioral\Strategy\OverlayBlackAndWhite.php');


$videoStorage = new VideoStorage(new CompressorMOV, new OverlayBlackAndWhite);
$videoStorage.store();
