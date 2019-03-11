<?php

namespace MacsiDigital\Resultable;

class ResultableUrl
{

    /**
     * @param array $parameters
     *
     * @return string
     */
    public static function render()
    {
       return self::url();
    }

    private static function url()
    {
        $href = '/'.request()->path().'?';
        $query = '';
        $sorts = [];
        foreach(request()->query() as $k => $v){
            if($k != 'results'){
                $href .= $k.'='.$v;
            }
        }
        return $href;
    }
}
