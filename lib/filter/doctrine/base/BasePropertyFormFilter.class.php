<?php

/**
 * Property filter form base class.
 *
 * @package    RentAFlat
 * @subpackage filter
 * @author     Serge Frézier  with NetBeans IDE 8.2
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePropertyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'reference_no'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'title'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'text'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'disposition_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Disposition'), 'add_empty' => true)),
      'area'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'floor'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lift'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cellar'            => new sfWidgetFormFilterInput(),
      'balcony'           => new sfWidgetFormFilterInput(),
      'location_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Location'), 'add_empty' => true)),
      'price'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_on'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'street'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'property_build_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PropertyBuild'), 'add_empty' => true)),
      'terace'            => new sfWidgetFormFilterInput(),
      'loggia'            => new sfWidgetFormFilterInput(),
      'garden'            => new sfWidgetFormFilterInput(),
      'garage'            => new sfWidgetFormFilterInput(),
      'parking_place'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'reference_no'      => new sfValidatorPass(array('required' => false)),
      'title'             => new sfValidatorPass(array('required' => false)),
      'text'              => new sfValidatorPass(array('required' => false)),
      'disposition_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Disposition'), 'column' => 'id')),
      'area'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'floor'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lift'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cellar'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'balcony'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'location_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Location'), 'column' => 'id')),
      'price'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_on'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'street'            => new sfValidatorPass(array('required' => false)),
      'property_build_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PropertyBuild'), 'column' => 'id')),
      'terace'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'loggia'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'garden'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'garage'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'parking_place'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('property_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Property';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'reference_no'      => 'Text',
      'title'             => 'Text',
      'text'              => 'Text',
      'disposition_id'    => 'ForeignKey',
      'area'              => 'Number',
      'floor'             => 'Number',
      'lift'              => 'Boolean',
      'cellar'            => 'Number',
      'balcony'           => 'Number',
      'location_id'       => 'ForeignKey',
      'price'             => 'Number',
      'created_on'        => 'Date',
      'street'            => 'Text',
      'property_build_id' => 'ForeignKey',
      'terace'            => 'Number',
      'loggia'            => 'Number',
      'garden'            => 'Number',
      'garage'            => 'Number',
      'parking_place'     => 'Boolean',
    );
  }
}
