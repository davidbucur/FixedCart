<?php
/**
 * @author David Bucur
 * @copyright 2014
 * @email davidbucur1989@gmail.com
 * @website www.davidbucur.net
 */
 
class fixedmenucart extends Module {
	
	public function __construct() {
		$this->name 		= 'fixedmenucart';
		$this->tab 			= 'front_office_features';
		$this->version 		= '1.0.1.1';
		$this->author 		= 'David Bucur';
		$this->displayName 	= $this->l('Fixed Menu & Cart');
		$this->description 	= $this->l('This module allows you to keep the Shopping Cart and Menu visible when you scroll down.');
        
		parent :: __construct();
       
	}
	
	public function install() {
		return parent :: install()
            && $this->registerHook('header')
            ;
	}

    public function psversion() {
		$version=_PS_VERSION_;
		$exp=$explode=explode(".",$version);
		return $exp[1];
	}
    
    public function hookHeader($params){
        if ($this->psversion()==5){
            $this->context->controller->addCSS(($this->_path).'fixedmenucart.css', 'all');
            $this->context->controller->addJS(($this->_path).'fixedmenucart.js','all');
        } else {
            Tools::addCSS(($this->_path).'fixedmenucart.css');
            Tools::addJS(($this->_path).'fixedmenucart.js');
        }
    }
          
	
}