<?php
/**
 * JArticle_Class
 *
 * @version  1.0
 * @package Stilero
 * @subpackage JArticle_Class
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2012-nov-29 Stilero Webdesign (www.stilero.com)
 * @license	GNU General Public License version 2 or later.
 * @link http://www.stilero.com
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

class K2JArticleUrl extends JArticleUrl{
    
    protected $routerPath = '/components/com_k2/helpers/route.php';

    public function __construct($JArticle) {
        parent::__construct($JArticle);
    }
    
    protected function _categoryAlias(){
        $alias = '';
        if(isset($this->Article->category->alias)){
            $alias = $this->Article->category->alias;
        }
        return $alias;
    }
    
    protected function _articleAlias(){
        $alias = '';
        if(isset($this->Article->alias)){
            $alias = $this->Article->alias;
        }
        return $alias;
    }
    
    protected function urlFromLink(){
        $indexStart = strpos($this->Article->link, 'index.php');
        $url = substr($this->Article->link, $indexStart);
        $absUrl = JURI::Root().$url;
        return $absUrl;
    }
    
    protected function articleRoute(){
        require_once(JPATH_SITE.$this->routerPath);
        $catAlias = $this->_categoryAlias();
        $articleSlug = $this->_articleSlug();
        $catSlug = $this->Article->catid.':'.$catAlias;
        $k2Route = K2HelperRoute::getItemRoute($articleSlug, $catSlug);
        $articleRoute = JRoute::_( $k2Route );
        return $articleRoute;
    }
           
    public function url(){
        if(isset($this->Article->link)){
            return $this->urlFromLink();
        }
        return $this->_joomlaSefUrlFromRoute();
    }
}
