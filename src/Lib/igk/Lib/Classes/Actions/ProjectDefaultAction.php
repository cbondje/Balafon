<?php

namespace IGK\Actions;


abstract class ProjectDefaultAction extends \IGKActionBase{
    public function logout(){
        $this->ctrl->logout(1);
    }
}