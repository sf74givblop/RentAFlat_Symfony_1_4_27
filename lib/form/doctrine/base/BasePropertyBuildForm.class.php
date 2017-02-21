<?php

/**
 * PropertyBuild form base class.
 *
 * @method PropertyBuild getObject() Returns the current form's model object
 *
 * @package    RentAFlat
 * @subpackage form
 * @author     Serge Frézier  with NetBeans IDE 8.2
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePropertyBuildForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'   => new sfWidgetFormInputHidden(),
      'text' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'text' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('property_build[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PropertyBuild';
  }

}
