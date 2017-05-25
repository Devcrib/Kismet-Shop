<?php

/**
 * Created by PhpStorm.
 * User: bane
 * Date: 06/04/2017
 * Time: 1:49 PM
 */
class Staff
{   private $staffId;
    private $staffName;
    public $staffJob = [];
    private $race;


    public function __construct($id,$staffName, $staffJob, $race = NULL)
    {
        $this->staffId = $id;
        $this->staffName = $staffName;
        $this->staffJob[] = $staffJob;
        $this->race = $race;

    }

    /**
     * @return mixed
     */
    public function getStaffJob()
    {
        return $this->staffJob;
    }

    public function getFirstStaffJob()
    {
        return $this->staffJob[1];
    }


    /**
     * @return mixed
     */
    public function getStaffName()
    {
        return $this->staffName;
    }

    /**
     * @param mixed $staffJob
     */
    public function setStaffJob($staffJob)
    {
        $this->staffJob[] = $staffJob;
    }

    /**
     * @param mixed $staffName
     */
    public function setStaffName($staffName)
    {
        $this->staffName = $staffName;
    }

}