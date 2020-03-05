<?php

namespace Step\classes;

include_once "Attributes.php";
include_once "Body.php";

abstract class BaseTag
{
    private $name;
    private $attrs;
    private $isClosing;
    private $body;
    private const SELF_CLOSED = [

    ];


    public function  __construct(string $name, array $attrs = [])
    {
        $this->name = $name;
        $this->attrs = new Attributes($attrs);


        $this->isClosing = false;
        $this->body = new Body();

        if (in_array($name, self::SELF_CLOSED)) {
            $this->selfClosing();
        }
    }

    protected function selfClosing(){
        $this->isClosing = true;
        return $this;
    }

    public function addAttribute(string $key, string $value = null){
        return $this->attrs->setAttribute($key, $value);
    }

    public function addAttributes(array $attrs){
        return $this->attrs->setAttribute($attrs);
    }

    public function appendAttributes($key, $value){
        return $this->attrs->appendAttribute($key, $value);
    }

    public function prependAttributes($key, $value){
        return $this->attrs->prependAttribute($key, $value);
    }

    public function appendBody($body){
        $this->body->appendBody($body);
        return $this;
    }

    public function prependBody($body){
        $this->body->prependBody($body);
        return $this;
    }

    public function __toString() : string{
        $str = "<" . $this->name;

        $str .= $this->attrs;

        if($this->isClosing)  {
            $str .= "/>";
            return $str;
        }

        $str .= ">";

        $str .= $this->body . "</" . $this->name . ">";

        return $str;
    }

    public function appendTo(BaseTag $tag){
        $tag->appendBody($this);
        return $this;
    }

    public function prependTo(BaseTag $tag){
        $tag->prependBody($this);
        return $this;
    }
}