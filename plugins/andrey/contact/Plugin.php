<?php namespace Andrey\Contact;
use System\Classes\PluginBase;
class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Andrey\Contact\Components\ContactForm' => 'contactform',
        ];
    }
    public function registerSettings()
    {
    }
}
