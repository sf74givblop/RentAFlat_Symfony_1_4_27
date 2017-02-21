<?php
// auto-generated by sfViewConfigHandler
// date: 2017/02/21 01:38:29
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Rent-a-Flat - NetBeans sample!', false, false);
  $response->addMeta('description', 'Sample Symfony framework project for NetBeans', false, false);
  $response->addMeta('keywords', 'flat, rental, home, low prices', false, false);
  $response->addMeta('language', 'en', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('author', 'Oracle corp.', false, false);
  $response->addMeta('copyright', '(c) 2011 Oracle', false, false);

  $response->addStylesheet('cssweb.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('function.js', '', array ());


