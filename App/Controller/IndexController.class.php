<?php
    class IndexController extends Controller {
        public function IndexAction(){
            $model = M('test');
            $this->assign('content', 'Hello World');
            $this->display();
        }
    }