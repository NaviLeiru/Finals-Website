<?php 
    class HTMLTag {
        private $tag;
        private $attributes = [];
        private $contents = [];

        public function __construct($tag = ''){
            $this->tag = $tag;
        }

        public static function html(){
            $tag = 'html';
            return new static($tag);
        }

        public static function head(){
            $tag = 'head';
            return new static($tag);
        }

        public static function meta(){
            $tag = 'meta';
            return new static($tag);
        }

        public static function title(){
            $tag = 'title';
            return new static($tag);
        }

        public static function body(){
            $tag = 'body';
            return new static($tag);
        }

        public static function link(){
            $tag = 'link';
            return new static($tag);
        }
        

        public static function div(){
            $tag = 'div';
            return new static($tag);
        }

        public static function p(){
            $tag = 'p';
            return new static($tag);
        }

        public static function a(){
            $tag = 'a';
            return new static($tag);
        }

        public static function img(){
            $tag = 'img';
            return new static($tag);
        }

        public static function ul(){
            $tag = 'ul';
            return new static($tag);
        }

        public static function ol(){
            $tag = 'ol';
            return new static($tag);
        }

        public static function li(){
            $tag = 'li';
            return new static($tag);
        }

        public static function table(){
            $tag = 'table';
            return new static($tag);
        }

        public static function tr(){
            $tag = 'tr';
            return new static($tag);
        }

        public static function th(){
            $tag = 'th';
            return new static($tag);
        }

        public static function td(){
            $tag = 'td';
            return new static($tag);
        }

        public static function form(){
            $tag = 'form';
            return new static($tag);
        }

        public static function input(){
            $tag = 'input';
            return new static($tag);
        }

        public static function button(){
            $tag = 'button';
            return new static($tag);
        }

        public static function h1(){
            $tag = 'h1';
            return new static($tag);
        }
        
        public static function h2(){
            $tag = 'h2';
            return new static($tag);
        }

        public static function h3(){
            $tag = 'h3';
            return new static($tag);
        }

        public static function h4(){
            $tag = 'h4';
            return new static($tag);
        }

        public static function h5(){
            $tag = 'h5';
            return new static($tag);
        }

        public static function h6(){
            $tag = 'h6';
            return new static($tag);
        }

        public static function br(){
            $tag = 'br';
            return new static($tag);
        }

        public static function label(){
            $tag = 'label';
            return new static($tag);
        }

        public function id ($id){
            $attr = 'id';
            $value = $id;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function class ($class){
            $attr = 'class';
            $value = $class;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function src ($src){
            $attr = 'src';
            $value = $src;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function onclick ($onclick){
            $attr = 'onclick';
            $value = $onclick;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function onselect ($onselect){
            $attr = 'onselect';
            $value = $onselect;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function rel ($rel){
            $attr = 'rel';
            $value = $rel;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function href ($href){
            $attr = 'href';
            $value = $href;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function type ($type){
            $attr = 'type';
            $value = $type;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function for ($for){
            $attr = 'for';
            $value = $for;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function name ($name){
            $attr = 'name';
            $value = $name;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function alt ($alt){
            $attr = 'alt';
            $value = $alt;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function attrtitle ($attrtitle){
            $attr = 'title';
            $value = $attrtitle;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function charset ($charset){
            $attr = 'charset';
            $value = $charset;

            $this->attributes[$attr] = $value;
            return $this;
        }

        public function content ($contents){
            $this->contents[] = $contents;
            return $this;
        }

        public function renderOneTag (){
            $code = "\n<{$this->tag}";
            
            foreach ($this->attributes as $attr => $value) {
                $code .= " $attr=\"$value\"";
            }
            
            $code .= ">\n";
            return $code;
        }

        public function renderTag (){
            $code = "\n<{$this->tag}";

            foreach ($this->attributes as $attr => $value) {
                $code .= " $attr=\"$value\"";
            }

            foreach ($this->contents as $index => $value) {
                if ($index == 0){
                    $code .= ">{$value}";
                } else {
                    $code .= "{$value}";
                }
            }
    
            $code .= "</{$this->tag}>\n";

            return $code;
        }
    }

