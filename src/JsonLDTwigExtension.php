<?php

class JsonLDTwigExtension extends Twig_Extension 
{
    public function getFunctions()
    {
        return [
            new Twig_Function('hello', [$this, 'helloAction']),
        ];
    }

    public function helloAction()
    {
        return 'Hello from function';
    }
}
