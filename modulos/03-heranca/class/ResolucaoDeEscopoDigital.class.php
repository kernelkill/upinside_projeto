<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 23/02/17
 * Time: 21:49
 */
class ResolucaoDeEscopoDigital extends ResolucaoDeEscopo 
{
    public static  $Digital;

    /**
     * ResolucaoDeEscopoDigital constructor.
     * @param $Digital
     */
    public function __construct($Produto, $Valor)
    {
        parent::__construct($Produto, $Valor);
    }

    public function Vender()
    {
        self::$Digital += 1;
        parent::Vender();

    }


}