<?php
    class JSON{
        // Method for Encoding JSON onject
        public static function stringify(array $object) : string{
            return json_encode($object);
        }

        // Method for Decoding JSON onject
        public static function parse(string $data) : array{
            return json_decode($data);
        }
    }
?>