<?php

require_once('ICompressor.php');

class CompressorMP4 implements ICompressor {
    public function Compress() {
        echo 'Compressing video using MP4' . PHP_EOL;
    }
}