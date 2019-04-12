<?php

class Preference{ 
    const TYPE_STRING  = 'string';
    const TYPE_BOOL    = 'boolean'; 
    const TYPE_INT     = 'int';   
    public $key;
    public $value;
    public $type;
    
    public function __construct($key, $value, $type) {
        $this -> key   = $key;
        $this -> type  = $type; 
        $this -> value = $this -> getValue($value);
    }

    public function getValue($value){
        switch($this -> type){
            case self::TYPE_STRING:
                return (string) $value;
            break;

            case self::TYPE_INT:
                return filter_var($value,FILTER_VALIDATE_INT);
            break;

            case self::TYPE_BOOL:
                return filter_var($value,FILTER_VALIDATE_BOOLEAN);
            break;                        
        }
    }

    public function value(){
        return $this-> getValue($this -> value);
    }

    
}

