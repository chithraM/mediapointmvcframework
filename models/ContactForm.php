<?php
namespace app\models;
use app\core\Application;
use app\core\Model;
use app\core\UserModel;

/**
 * Summary of LoginForm
 */
class ContactForm extends UserModel
{
    public string $subject='';
    public string $email='';
    public string $body='';
    public function tableName(): string
    {
        return 'contact';
    }
    public function primaryKey():string
    {
        return 'id';
    }
    public function save(){
        return parent::save();
    }
    public function rules():array
    {
       return [
            'subject'=>[self::RULE_REQUIRED],
            'email'=>[self::RULE_REQUIRED,self::RULE_EMAIL],
            'body'=>[self::RULE_REQUIRED]
       ];
    }
    public function labels():array
    {
        return[
            'subject'=>'Enter your Subject',
            'email'=>'Your Email',
            'body'=>'Body'
        ];
    }
    /**
     * Summary of login
     * @return bool
     */
    public  function send(){
        return $this->save();
       //return true;
    }
    public function attributes(): array
    {
         return ['email','subject','body'];
    }
    public function getDisplayName():string
   {
        return '';
   }
}