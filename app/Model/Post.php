<?php

class Post extends AppModel {
    public $name = 'Post';
    public $validate = array(
        'Título' => array(
            'rule' => 'notBlank'
        ),
        'Corpo' => array(
            'rule' => 'notBlank'
        )
    );
}