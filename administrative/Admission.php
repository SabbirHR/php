<?php

class Admission
{
public function addStudent(){
    $addStu = new Student();
    $addStu->id='1';
    $addStu->getFullName('abul');
    $addStu->getContactNum('018,,,');

}
}