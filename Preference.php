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

            case self::TYPE_BOOL:
                return (boolean) $value;
            break;

            case self::TYPE_INT:
                return (int) $value;
            break;                        
        }
    }

}

