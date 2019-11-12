<?php

namespace Khas\Paintings\Controller;


class PaintingsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function listAction()
    {
        $lists = array();
        for ($i = 1; $i <= 3; $i++){
            $list=$this->objectManager->get('Khas\\Paintings\\Domain\\Model\\Paintings');
            $list->setTitle(i);
            $lists[]=$list;
        }
        $this->view->assign('lists',$lists);
    }
}