<?php

class sfShibbolethFakeUserForm extends sfForm
{
  public function configure()
  {
    $fakeUsers = sfConfig::get('app_sfShibboleth_fake_users', false);
    $options = array();
    foreach ($fakeUsers as $id => $data) 
    {
      $options[$id] = $data['display_name'];
    }
    
    $this->setWidgets(array(
      'fake_user' => new sfWidgetFormSelect(array('choices' => $options)),
    ));
  }
}