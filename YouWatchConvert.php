<?php
class YouWatchConvert {
    private $domain;
    
    function __construct(){
        $this->domain = trim(file_get_contents('http://youwatch.org/url.html'));
    }
    
    public function URL($value){
        return str_replace('youwatch.org', $this->domain, $value);
    }
}
