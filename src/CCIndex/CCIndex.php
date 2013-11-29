    <?php
    /**
    * Standard controller layout.
    *
    * @package CrZCore
    */
    class CCIndex implements IController {

       /**
        * Implementing interface IController. All controllers must have an index action.
        */
       public function Index() {   
          global $crz;
          $crz->data['title'] = "The Index Controller";
       }

    } 