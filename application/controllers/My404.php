  <?php 
class My404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
		header("HTTP/1.1 404 Not Found");
       // redirect('/404');
        $this->load->view('templates/header');
        $this->load->view('pages/error_page');//loading in my template 
        $this->load->view('templates/footer');
    } 
     
} 
   
   ?>
