<?php

namespace App\Traits;
use Carbon\Carbon;

trait General
{
    public function makeDirectory($name)
    {
        $dirPath = public_path('uploads/' . $name);
        if (!file_exists($dirPath)) {
            mkdir($dirPath, 0777, true);
        }
    }

    public function makeMultipleDirectories($parent, $childs = array())
    {
        foreach ($childs as $child) {
            $dirPath = public_path('uploads/' . $parent . "/" . $child);
            if (!file_exists($dirPath)) {
                mkdir($dirPath, 0777, true);
            }
        }
    }
}
