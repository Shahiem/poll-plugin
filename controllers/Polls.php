<?php namespace ShahiemSeymor\Poll\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Polls extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('ShahiemSeymor.Poll', 'poll', 'polls');
    }    

    public function update($recordId, $context = null)
    {
        $this->bodyClass = 'compact-container';
        return $this->getClassExtension('Backend.Behaviors.FormController')->update($recordId, $context);
    }

}