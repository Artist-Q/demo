<?php
namespace core;
class View
{
    protected  $file;//模板文件
    protected  $vars = [];//模板变量
    public function make($class,$action){
        $class = $class?strtolower($class):'index';
        $this->file = 'web/view/'.$class.'/'.$action.'.html';
        return $this;
    }
    public function with($name,$value){
        $this->vars[$name] = $value;
        return $this;
    }
    public function __toString()
    {
        extract($this->vars);
        include $this->file;
        return '';
    }
}
