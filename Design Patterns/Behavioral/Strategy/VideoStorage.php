<?php

require_once('ICompressor.php');
require_once('IOverlay.php');

class VideoStorage {
    public function __construct(
        private ICompressor $compressor,
        private IOverlay $overlay
    ) {}
    
    public function Store() {
        $this->compressor->Compress();
        $this->overlay->Apply();
    }
}