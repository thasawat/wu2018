<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        if (strpos($text, "ครับ") !== false) {
            return 'Male';
        }elseif  (strpos($text, "ค่ะ") !== false) {
            return 'Female';
        }elseif  (strpos($text, "คะ") !== false) {
            return 'Female';
        }else {
            return 'Unknown';
        }
        
    } 

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        if (strpos($text,"น่ารัก")!== false){
            return 'Positive';
        }elseif (strpos($text,"บ้า")!== false){
            return 'Negative';
        }elseif (strpos($text,"เหี้ย")!== false){
            return 'Negative';
        }else{
            return 'Neutral';
        }
        
       
    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        if (strpos($text,"สัส")!== false){
            return ['สัส'];
        }elseif (strpos($text,"เหี้ย")!== false){
            return ['เหี้ย'];
        }elseif (strpos($text,"เวร")!== false){
            return ['เวร'];
        }else{
            return ['   '];
        }
        
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        if (!preg_match('/[^A-Za-z0-9]/', $text)){
            return ['EN'];
            }
            
        return ['TH'];
    }
}
