<?php

namespace App;
use \App\VocabTable;

class Vocabulary{
    public $word;
    public function __construct($word)
    {
        if(VocabTable::where('word',$word)->count()>0){
            dd("Word was found");
        }else{
            dd("Word was not found");
        }
    }
}