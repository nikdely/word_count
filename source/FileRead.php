<?php

namespace Source;

class FileRead 
{
    
    static protected $file = '/file/text.txt';
    static protected $debug;
    
    private function __construct() 
    {
        $debug = \Source\FileHelp::isDebug();
    }

    protected function read($file) 
    {
        $arText = array();
        
        if (file_exists($file)) {
            $text = file_get_contents($file);
            $arText = explode('.', $text);
        } else {
            if ($debug)
                fileHelp::log_array('file doesn`t exist, or not .txt');
        }
        
        return $arText;
    }
    
    protected function fileTextRead($arText) 
    {
        $arWord = array();
        
        foreach ($arText as $key => $value) {
            $arWordCount = array();
            setlocale(LC_ALL, 'ru_RU');
            $arWordCount = str_word_count($value, 1);
            
            foreach ($arWordCount as $value) {
                $arWordLower[] = mb_strtolower($value);
            }
            
            $arWord = array_merge($arWord, $arWordLower);
            $arWord = array_unique($arWord);
        }
        
        if ($debug)
            fileHelp::log_array($arWord);
        
        return $arWord;
    }
    
    public function workWithFile() 
    {
        $arText = $this->read($this->file);
        
        if ($arText)
            $arWord = $this->fileTextRead($arText);
        
        $count = count($arWord);
        
        return $count;
    }
    
    
}
