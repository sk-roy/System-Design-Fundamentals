<?php

require_once('VideoStorage.php');
require_once('CompressorMOV.php');
require_once('CompressorMP4.php');
require_once('OverlayBlackAndWhite.php');


$videoStorage = new VideoStorage(new CompressorMOV, new OverlayBlackAndWhite);
$videoStorage->Store();
