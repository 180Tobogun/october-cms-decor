<?php namespace Andrey\Contact\Components;
use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
class ContactForm extends ComponentBase
{
    public function componentDetails(){
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }
    public function onSend(){
        $data = post();
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email'
        ];
        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            throw new ValidationException($validator);
        } else {
            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content'), 'tel' => input::get('phone')];
            Mail::send('andrey.contact::mail.message', $vars, function($message) {
                $message->to('andreykoroka@gmail.com', 'Admin Person');
                $message->subject('New message from contact form');
            });
        }
    }
}
