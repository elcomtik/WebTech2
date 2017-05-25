<?php

/**
 * Created by PhpStorm.
 * User: Sabinka
 * Date: 5/24/2017
 * Time: 4:14 PM
 */
class Staff
{
    public $id;
    public $classification;
    public $department;
    public $phoneNumber;
    public $room;
    public $aisId;

    /**
     * Staff constructor.
     * @param $id
     * @param $classification
     * @param $department
     * @param $phoneNumber
     * @param $room
     * @param $aisId
     */
    public function __construct($id, $classification, $department, $phoneNumber, $room, $aisId)
    {
        $this->id = $id;
        $this->classification = $classification;
        $this->department = $department;
        $this->phoneNumber = $phoneNumber;
        $this->room = $room;
        $this->aisId = $aisId;
    }


}