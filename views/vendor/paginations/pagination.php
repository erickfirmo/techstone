<?php

function pagination_layout($layout, $pagination_data=NULL)
{
    if(isset($_SESSION['PAGE']) && isset($_SESSION['PAGES_NUMBER']) && isset($layout))
    {
        if($pagination_data != NULL)
            foreach($pagination_data as $responseName => $responseValue)
                $$responseName = $responseValue;
        include 'layouts/'.$layout.'.php';
    }
}

function pagination_links($layout, $pagination_data=NULL)
{
    if(isset($_SESSION['PAGE']) && isset($_SESSION['PAGES_NUMBER']) && isset($layout))
    {
        $page = $_SESSION['PAGE'];
        $n_pages = $_SESSION['PAGES_NUMBER'];
        $previous = $page-1;
        $next = $page+1;
        if($_SESSION['PAGINATE'] && $n_pages > 1)
        {
            $innerTag = '';
            if(!is_null($pagination_data))
            {
                foreach ($pagination_data as $prop => $value) {
                    $innerTag = $innerTag.' '.$prop.'="'.$value.'"';
                }
            }
            pagination_layout($layout, [
                'page' => $page, 
                'n_pages' => $n_pages,
                'previous' => $previous,
                'next' => $next,
                'innerTag' => $innerTag,
            ]);
        }
    }
}