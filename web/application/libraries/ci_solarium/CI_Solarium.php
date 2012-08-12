<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

require('library/Solarium/Autoloader.php');

class CI_Solarium {
    
    public function __construct() {
        Solarium_Autoloader::register();
    }

    public function some_function()
    {
    }
}
/* End of file Sola.php */
