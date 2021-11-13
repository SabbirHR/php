<?php

class Student extends person
{
    public $id;
    public function getStudents(){
      $stu = new Student();
      $name = $stu->getFullName();
}
//    public function reg(){
//
//    }
//    protected function getAccountsInfo(){
//
//    }
//    /**
//     * @return mixed
//     */
//    public function getPhoneNum()
//    {
//        return $this->phoneNum;
//    }
//
//    /**
//     * @param mixed $phoneNum
//     */
//    public function setPhoneNum($phoneNum)
//    {
//        $this->phoneNum = $phoneNum;
//    }

}