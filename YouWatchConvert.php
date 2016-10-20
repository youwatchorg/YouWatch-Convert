<?php
class YouWatchConvert {
    private $domain;
    
    function __construct(){
        $this->domain = file_get_contents('http://youwatch.org/url.html');
    }
    
    function IframeJS(){
        $js = "var domain = '".base64_encode($this->domain)."';";
        $js .= "eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\\\b'+e(c)+'\\\\b','g'),k[c])}}return p}('1 f=7.9(\'a\');1 4=b c(\'5.6\');8(1 i=0;i<f.d;i++){k(4.e(f[i].2)){1 3=f[i].2.h(\"5.6\",j(g));f[i].2=3}}',21,21,'|var|src|n|r|youwatch|org|document|for|getElementsByTagName|iframe|new|RegExp|length|test||domain|replace||atob|if'.split('|'),0,{}));";
        return $js;
    }
    
    public function Convert($value){
        return str_replace('youwatch.org', $this->domain, $value);
    }
}
