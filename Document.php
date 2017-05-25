<?php

/**
 * Created by PhpStorm.
 * User: Sabinka
 * Date: 5/22/2017
 * Time: 11:31 AM
 */
class Document
{
    public $id;
    public $document;

    /**
     * Employee constructor.
     * @param $name
     */
    public function __construct($id, $document)
    {
        $this->id = $id;
        $this->document = $document;
    }
}