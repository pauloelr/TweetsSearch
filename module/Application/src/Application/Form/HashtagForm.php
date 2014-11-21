<?php
namespace Application\Form;

use Zend\Form\Form;

class HashtagForm extends Form
{
    public function __construct()
    {
        parent::__construct('hashtag');
        $this->setAttribute('method', 'get');

        $this->add(array(
            'name' => 'hashtag',
            'type' => 'text',
            'options' => array(
                'label' => 'Hashtag',
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Buscar',
                'id' => 'submit',
            ),
        ));
    }
}