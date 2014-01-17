<?php
    /**
    * Get lits of tools.
    */
	
	function get_tools() {
	global $crz;

	return <<<EOD
	
<p>Tools: 
<a href="http://validator.w3.org/check/referer">html5</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css3</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css21">css21</a>
<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">unicorn</a>
<a href="http://validator.w3.org/checklink?uri={$crz->request->current_url}">links</a>
<a href="http://qa-dev.w3.org/i18n-checker/index?async=false&amp;docAddr={$crz->request->current_url}">i18n</a>
<!-- <a href="link?">http-header</a> -->
<a href="http://csslint.net/">css-lint</a>
<a href="http://jslint.com/">js-lint</a>
<a href="http://jsperf.com/">js-perf</a>
<a href="http://www.workwithcolor.com/hsl-color-schemer-01.htm">colors</a>
<a href="http://dbwebb.se/style">style</a>
</p>

<p>Docs:
<a href="http://www.w3.org/2009/cheatsheet">cheatsheet</a>
<a href="http://dev.w3.org/html5/spec/spec.html">html5</a>
<a href="http://www.w3.org/TR/CSS2">css2</a>
<a href="http://www.w3.org/Style/CSS/current-work#CSS3">css3</a>
<a href="http://php.net/manual/en/index.php">php</a>
<a href="http://www.sqlite.org/lang.html">sqlite</a>
<a href="http://www.blueprintcss.org/">blueprint</a>
</p>

EOD;

}
/**
 * Helpers for theming, available for all themes in their template files and functions.php.
 * This file is included right before the themes own functions.php
 */
 

/**
 * Print debuginformation from the framework.
 */
function get_debug() {
  $crz = CrZC::Instance();  
  if(empty($crz->config['debug'])) {
    return;
  }
  
  // Get the debug output
  $html = null;
  if(isset($crz->config['debug']['db-num-queries']) && $crz->config['debug']['db-num-queries'] && isset($crz->db)) {
    $flash = $crz->session->GetFlash('database_numQueries');
    $flash = $flash ? "$flash + " : null;
    $html .= "<p>Database made $flash" . $crz->db->GetNumQueries() . " queries.</p>";
  }    
  if(isset($crz->config['debug']['db-queries']) && $crz->config['debug']['db-queries'] && isset($crz->db)) {
    $flash = $crz->session->GetFlash('database_queries');
    $queries = $crz->db->GetQueries();
    if($flash) {
      $queries = array_merge($flash, $queries);
    }
    $html .= "<p>Database made the following queries.</p><pre>" . implode('<br/><br/>', $queries) . "</pre>";
  }    
  if(isset($crz->config['debug']['timer']) && $crz->config['debug']['timer']) {
    $html .= "<p>Page was loaded in " . round(microtime(true) - $crz->timer['first'], 5)*1000 . " msecs.</p>";
  }    
  if(isset($crz->config['debug']['crz']) && $crz->config['debug']['crz']) {
    $html .= "<hr><h3>Debuginformation</h3><p>The content of CrZC:</p><pre>" . htmlent(print_r($crz, true)) . "</pre>";
  }    
  if(isset($crz->config['debug']['session']) && $crz->config['debug']['session']) {
    $html .= "<hr><h3>SESSION</h3><p>The content of CCrZC->session:</p><pre>" . htmlent(print_r($crz->session, true)) . "</pre>";
    $html .= "<p>The content of \$_SESSION:</p><pre>" . htmlent(print_r($_SESSION, true)) . "</pre>";
  }    
  return $html;
}

    /**
    * Get messages stored in flash-session.
    */
    function get_messages_from_session() {
      $messages = CrZC::Instance()->session->GetMessages();
      $html = null;
      if(!empty($messages)) {
        foreach($messages as $val) {
          $valid = array('info', 'notice', 'success', 'warning', 'error', 'alert');
          $class = (in_array($val['type'], $valid)) ? $val['type'] : 'info';
          $html .= "<div class='$class'>{$val['message']}</div>\n";
        }
      }
      return $html;
    }
	
	/**
* Login menu. Creates a menu which reflects if user is logged in or not.
*/
function login_menu() {
  $crz = CrZC::Instance();
  if($crz->user['isAuthenticated']) {
        $items = "<a href='" . create_url('user/profile') . "'><img class='gravatar' src='" . get_gravatar(20) . "' alt=''> " . $crz->user['acronym'] . "</a> ";
    if($crz->user['hasRoleAdministrator']) {
      $items .= "<a href='" . create_url('acp') . "'>acp</a> ";
    }
    $items .= "<a href='" . create_url('user/logout') . "'>logout</a> ";
  } else {
    $items = "<a href='" . create_url('user/login') . "'>login</a> ";
  }
  return "<nav id='login-menu'>$items</nav>";
}

/**
* Prepend the theme_url, which is the url to the current theme directory.
*
* @param $url string the url-part to prepend.
* @returns string the absolute url.
*/
function theme_url($url) {
  return create_url(CrZC::Instance()->themeUrl . "/{$url}");
}


/**
* Prepend the theme_parent_url, which is the url to the parent theme directory.
*
* @param $url string the url-part to prepend.
* @returns string the absolute url.
*/
function theme_parent_url($url) {
  return create_url(CrZC::Instance()->themeParentUrl . "/{$url}");
}

/**
 * Create a url to an internal resource.
 */
function create_url($urlOrController=null, $method=null, $arguments=null) {
	return CrZC::Instance()->CreateUrl($urlOrController, $method, $arguments);

 }
 
/**
* Escape data to make it safe to write in the browser.
*
* @param $str string to escape.
*
* @returns string the escaped string.
*/
function esc($str) {
  return htmlEnt($str);
}

/**
* Filter data according to a filter. Uses CMContent::Filter()
*
* @param $data string the data-string to filter.
* @param $filter string the filter to use.
* @returns string the filtered string.
*/
function filter_data($data, $filter) {
  return CMContent::Filter($data, $filter);
}


/**
* Display diff of time between now and a datetime.
*
* @param $start datetime|string
* @returns string
*/
function time_diff($start) {
  return formatDateTimeDiff($start);
}


/**
 * Prepend the base_url.
 */
function base_url($url=null) {
  return CrzC::Instance()->request->base_url . trim($url, '/');
}


/**
 * Return the current url.
 */
function current_url() {
  return CrZC::Instance()->request->current_url;
}

/**
* Get a gravatar based on the user's email.
*/
function get_gravatar($size=null) {
  return 'http://www.gravatar.com/avatar/' . md5(strtolower(trim(CrZC::Instance()->user['email']))) . '.jpg?' . ($size ? "s=$size" : null);
}

/**
* Render all views.
*/
function render_views($region='default') {
	return CrZC::Instance()->views->Render($region);
}

/**
* Check if region has views. Accepts variable amount of arguments as regions.
*
* @param $region string the region to draw the content in.
*/
function region_has_content($region='default' /*...*/) {
   return CrZC::Instance()->views->RegionHasView(func_get_args());
}
