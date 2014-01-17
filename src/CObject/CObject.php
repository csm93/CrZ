<?php
    /**
    * Holding a instance of CrzC to enable use of $this in subclasses.
    *
    * @package CrZCore
    */
    class CObject {

       protected $crz;
	   protected $config;
       protected $request;
       protected $data;
	   protected $db;
	   protected $views;
	   protected $session;
	   protected $user;

       /**
        * Constructor
        */
	   protected function __construct($crz=null) {
        if(!$crz) {
			$crz = CrZC::Instance();
		}
			$this->crz			= &$crz;
        $this->config   = &$crz->config;
        $this->request  = &$crz->request;
        $this->data     = &$crz->data;
		$this->db       = &$crz->db;
		$this->views    = &$crz->views;
		$this->session  = &$crz->session;
		$this->user     = &$crz->user;
	  
	 }

	 /**
         * Wrapper for same method in CrZC. See there for documentation.
         */
        protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->crz->RedirectTo($urlOrController, $method, $arguments);
  }
  
         /**
         * Wrapper for same method in CrZC. See there for documentation.
         */
        protected function RedirectToController($method=null, $arguments=null) {
    $this->crz->RedirectToController($method, $arguments);
  }


      /**
         * Wrapper for same method in CrzC. See there for documentation.
         */
        protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->crz->RedirectToControllerMethod($controller, $method, $arguments);
  }
  
  /**
         * Wrapper for same method in CLydia. See there for documentation.
         */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->crz->AddMessage($type, $message, $alternative);
  }
  
 

  protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->request->CreateUrl($urlOrController, $method, $arguments);
  }

  }
