<?php

class person
{
    protected $fullName;
    protected $contactNum;
    protected $gmail;
    protected $address;

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getGmail()
    {
        return $this->gmail;
    }

    /**
     * @param mixed $gmail
     */
    public function setGmail($gmail)
    {
        $this->gmail = $gmail;
    }

    /**
     * @return mixed
     */
    public function getContactNum()
    {
        return $this->contactNum;
    }

    /**
     * @param mixed $contactNum
     */
    public function setContactNum($contactNum)
    {
        $this->contactNum = $contactNum;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }


}