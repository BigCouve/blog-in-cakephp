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
    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }
}