<?php


namespace App\Controllers;

/**
 * Description of PostController
 *
 * @author hidran@gmail.com
 */
class PostController {
    protected $layout = 'layout/index.tpl.php';
    public $content ='Hidran Arias';
    public function __construct() {
        echo "Postcontroller creato";
    }
    
    public function display()
    {
        require  $this->layout; 
    }
    public function show( $postid )
    {
      $message ='this is a post message';
      ob_start();
      require __DIR__.'/../Views/post.tpl.php';
      $this->content = ob_get_contents();
      ob_end_clean();
     
    }
}
