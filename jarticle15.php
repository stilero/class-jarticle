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

class JArticle30 extends JArticle{
    
    public static $JOOMLA_VERSION = '1.5';
    public static $ACCESS_PUBLIC = '0';
    public static $ACCESS_REGISTRED = '1';
    public static $ACCESS_SPECIAL = '2';
    public static $STATE_ARCHIVED = '-1';
    
    public function __construct($article) {
        parent::__construct($article);
    }
    
    public function categoryTitle($article){
        return parent::categoryTitle($article);
    }
    
    public function description($article, $limit=250){
        return parent::description($article, $limit);
    }
    
    public function isPublished($article){
        return parent::isPublished($article);
    }
    
    public function isPublic($article){
        return parent::isPublished($article);
    }
    
    public function tags($article) {
        return parent::tags($article);
    } 
}
