<?php

register_page_template([
    'default' => __('Default'),
    'homepage' => __('Homepage'),
]);


register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for mgphutho theme',
]);

RvMedia::setUploadPathAndURLToPublic();
