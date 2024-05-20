<?php
class CSSGenerator {
    private $styles = [];
    private $currentSelector = ''; 

    public function designSelector($selector) {
        $this->currentSelector = $selector;
        if (!isset($this->styles[$selector])) {
            $this->styles[$selector] = [];
        }
        return $this;
    }

    public function addProperty($property, $value) {
        if (!empty($this->currentSelector)) {
            $this->styles[$this->currentSelector][] = "$property: $value;";
        }
        return $this;
    }

    public function render() {
        $output = '';
        foreach ($this->styles as $selector => $properties) {
            $output .= "$selector {\n    ";
            $output .= implode("\n    ", $properties);
            $output .= "\n}\n\n";
        }
        return $output;
    }

    public function head() {
        return $this->designSelector('head');
    }

    public function pl() {
        return $this->designSelector('.pdiv p');
    }

    public function div() {
        return $this->designSelector('.pdiv');
    }

    public function img() {
        return $this->designSelector('img');
    }

    public function p2() {
        return $this->designSelector('p');
    }

    public function lil() {
        return $this->designSelector('ul li');
    }

    public function i1() {
        return $this->designSelector('ol li:nth-child(1)');
    }

    public function i2() {
        return $this->designSelector('ol li:nth-child(2)');
    }

    public function li3() {
        return $this->designSelector('ol li:nth-child(3)');
    }

    public function li4() {
        return $this->designSelector('ol li:nth-child(4)');
    }

    public function ol() {
        return $this->designSelector('ol');
    }

    public function thl() {
        return $this->designSelector('th');
    }

    public function th2() {
        return $this->designSelector('th:nth-child(2)');
    }

    public function tdl() {
        return $this->designSelector('td');
    }

    public function td2() {
        return $this->designSelector('td:nth-child(2)');
    }

    public function trl() {
        return $this->designSelector('tr');
    }

    public function tr2() {
        return $this->designSelector('tr:nth-child(2)');
    }

    public function table() {
        return $this->designSelector('table');
    }
}

?>