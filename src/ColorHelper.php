<?php

namespace FL;

class ColorHelper {


    /**
     * Helper function to the constructor.
     * @return object the ColorHelper instance
     */
    public static function getInstance() {
        $class = __CLASS__;
        return new $class($value);
    }

    // --------------------------------------------------------------------------------------//
    // __ FUNCTIONS                                                                      //
    // --------------------------------------------------------------------------------------//

    /**
     * Initializes a ColorHelper instance. 
     */
    function __construct() {
    }

    // --------------------------------------------------------------------------------------//
    // VARIOUS FUNCTIONS                                                                     //
    // --------------------------------------------------------------------------------------//

    /**
     * Prints a html page containing all colors in $colors array
     * @param array $colors, an array containing all colors to be printed. This array has to
     * be formatted like the ones in Colors.php and ColorsPantone.php
     * @return text html for the color table
     */
    public function printColorScreen($colors) {
        $returnvalue = "<table><tr>";
        $idx = 1;
        foreach($colors as $key => $data) {
            if ($idx == 10) {
                $returnvalue .= "</tr><tr>";
            }
            $info = "<b>name:</b>" . $data["name"] . "<br>";
            $info .= "<b>RGB:</b>" . $data["R"]  . " " . $data["G"] . " " . $data["B"] . "<br>";
            $info .= "<b>HEX:</b>" . $data["HEX"] . "<br>";
            $returnvalue .= "<td>";
            $returnvalue .= "<table><tr><td style='backgroundcolor=" . $data["HEX"] . ";'>&nbsp;</td></tr><tr><td>" . $info . "</td></tr></table>";
            $returnvalue .= "</td>";
            $idx +=1;
        }
        $returnvalue .= "</tr></table>";
        return $returnvalue;
      
    }

}