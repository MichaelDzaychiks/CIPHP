<?php

namespace App\Controllers;

class Christmas extends BaseController
{
    private function isChristmas(): string
    {
        $today = date("m-d");
        $christmas = "12-25";
        
        
        if ($today === $christmas) {
            return "🎄 Yes, it's Christmas! Merry Christmas! 🎄";
            
        } else {
            return "No, it's not Christmas yet. ";


        }
    }

    public function index(): string
    {
        return $this->isChristmas();
    }
}