<?php $list = $this->requestAction('/posts/list');
foreach ($list as $a) {
    debug($a);
    echo $a['Post']['image'];
}