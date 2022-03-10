<?php

namespace Blog\package_name {

    class example_Name {
        public function __construct( private  string $name) {}

        public function __toString():string {
            return sprintf('Hi, %s', $this->name);
        }
    }
}