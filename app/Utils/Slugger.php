<?php

namespace App\Utils;

class Slugger {
    public function slug (string $text): string {
        // Remove punctuation
        $text = preg_replace('/[^\p{L}\p{N}\s]+/u', '', $text);

        // Convert to lowercase
        $text = mb_strtolower($text);

        // Replace multiple spaces with single hyphen
        $text = preg_replace('/\s+/', '-', $text);

        //Trim hyphens from start and end if any
        return trim($text, '-');
    }
}

?>