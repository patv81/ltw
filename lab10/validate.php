<?php 
class Validate{
    static public function checklen($str,$from , $to){
        if (strlen($str) > $to || strlen($str) < $from){
            return FALSE;
        }
        return TRUE;
    }
    static public function checkInt($str){
        return is_numeric($str);
    }
    static public function checkIntft($str,$from,$to)
    {
        $num=null;
        if (is_numeric($str)){
            $num =(int)$str;
            if ( $num>$from && $num <$to){
                return true;
            }
        }
        return false;
    }
}
?>
