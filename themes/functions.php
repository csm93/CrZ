<?php

    /**
    * Print debuginformation from the framework.
    */
    function get_debug() {
      $crz = CrzC::Instance();
      $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($crz->config, true)) . "</pre>";
      $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($crz->data, true)) . "</pre>";
      $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($crz->request, true)) . "</pre>";
      return $html;
    }

    /**
    * Helpers for theming, available for all themes in their template files and functions.php.
    * This file is included right before the themes own functions.php
    */

    /**
    * Create a url by prepending the base_url.
    */
    function base_url($url) {
      return CrZC::Instance()->request->base_url . trim($url, '/');
    }

    /**
    * Return the current url.
    */
    function current_url() {
      return CrZC::Instance()->request->current_url;
    }
	
	