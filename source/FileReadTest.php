<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Source;

/**
 * Description of FileReadTest
 *
 * @author ndanilov
 */
class FileReadTest extends FileRead
{
    public function readTest() 
    {
        $file = parent::$file;
        $arText = parent::read($file);
                
        if (count($arText) == 0) {
            return 'file doesn`t exist, not .txt';
        } else {
            return 'file work success';
        }
    }
    
    public function fileTextReadText() 
    {
        $arText = parent::read($file);
        if (count($arText) > 0) {
            $arWord = parent::fileTextRead($arText);
            if (count($arWord) == 0) {
                return 'file doen`t work';
            } else {
                return 'file work';
            }
        }
    }
        
}
