<?php

/**
 * Property form base class.
 *
 * @method Property getObject() Returns the current form's model object
 *
 * @package    RentAFlat
 * @subpackage form
 * @author     Serge Frézier  with NetBeans IDE 8.2
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePropertyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'reference_no'      => new sfWidgetFormInputText(),
      'title'             => new sfWidgetFormTextarea(),
      'text'              => new sfWidgetFormTextarea(),
      'disposition_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Disposition'), 'add_empty' => false)),
      'area'              => new sfWidgetFormInputText(),
      'floor'             => new sfWidgetFormInputText(),
      'lift'              => new sfWidgetFormInputCheckbox(),
      'cellar'            => new sfWidgetFormInputText(),
      'balcony'           => new sfWidgetFormInputText(),
      'location_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Location'), 'add_empty' => false)),
      'price'             => new sfWidgetFormInputText(),
      'created_on'        => new sfWidgetFormDateTime(),
      'street'            => new sfWidgetFormTextarea(),
      'property_build_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PropertyBuild'), 'add_empty' => false)),
      'terace'            => new sfWidgetFormInputText(),
      'loggia'            => new sfWidgetFormInputText(),
      'garden'            => new sfWidgetFormInputText(),
      'garage'            => new sfWidgetFormInputText(),
      'parking_place'     => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'reference_no'      => new sfValidatorString(array('max_length' => 255)),
      'title'             => new sfValidatorString(),
      'text'              => new sfValidatorString(),
      'disposition_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Disposition'))),
      'area'              => new sfValidatorNumber(),
      'floor'             => new sfValidatorInteger(),
      'lift'              => new sfValidatorBoolean(),
      'cellar'            => new sfValidatorNumber(array('required' => false)),
      'balcony'           => new sfValidatorNumber(array('required' => false)),
      'location_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Location'))),
      'price'             => new sfValidatorInteger(),
      'created_on'        => new sfValidatorDateTime(),
      'street'            => new sfValidatorString(),
      'property_build_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PropertyBuild'))),
      'terace'            => new sfValidatorNumber(array('required' => false)),
      'loggia'            => new sfValidatorNumber(array('required' => false)),
      'garden'            => new sfValidatorNumber(array('required' => false)),
      'garage'            => new sfValidatorNumber(array('required' => false)),
      'parking_place'     => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('property[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Property';
  }

}
