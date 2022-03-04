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
        echo 'id do post: ';
        var_dump($post);
        echo 'id do user: ';
        var_dump($user);
        echo 'return da função Owned: ';
        var_dump($this->field('id', array('id' => $post, 'user_id' => $user)));
        return $this->field('id', array('id' => $post, 'user_id' => $user)) === true;
    }

    public function testeDeField($postTitle)
    {
        return $this->field($postTitle);
    }
}