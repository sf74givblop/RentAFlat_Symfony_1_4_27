<?php

/**
 * Disposition filter form base class.
 *
 * @package    RentAFlat
 * @subpackage filter
 * @author     Serge Frézier  with NetBeans IDE 8.2
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDispositionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'text' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'text' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('disposition_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Disposition';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'text' => 'Text',
    );
  }
}
