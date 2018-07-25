<?php

namespace Source;

class FileHelp 
{
        
    static public function log_array() 
    { 
        $arArgs = func_get_args(); 
        $sResult = ''; 
        foreach($arArgs as $arArg) { 
           $sResult .= "\n\n".print_r($arArg, true); 
        } 
        
        file_put_contents('log.txt', $sResult, FILE_APPEND);
    }
    
    static public function isDebug() 
    {
        $debug = false;
        // запрос из настроек или из формы в зависимости от логики 
        $debug = true;
        
        if ($debug) {
            return true;
        }
        
    }
    
}
