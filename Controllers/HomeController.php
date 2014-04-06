<?php
namespace bundles\tag\Controllers;

/**
 * Description of Tag HomeController
 *
 * @author info
 */
class TagController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $this->render('tag/index.tpl');
    }

    public function createAction()
    {
        $this->render('tag/create.tpl');
    }

    public function readAction()
    {
        if (isset($this->aParams['idtag']) && intval($this->aParams['idtag']) > 0) {
            $oTagModel = new \bundles\backend\Models\Tag(intval($this->aParams['idtag']), $this->oUser);
            $oTag = $oTagModel->read();
            if (! is_null($oTag) && $oTag->isLoaded()) {
                $this->aView['oTag'] = $oTag;
            }
        }
        $this->render('tag/read.tpl');
    }

    public function updateAction()
    {
        if (isset($this->aParams['idtag']) && intval($this->aParams['idtag']) > 0) {
            $oTagModel = new \bundles\backend\Models\Tag(intval($this->aParams['idtag']), $this->oUser);
            $oTag = $oTagModel->getEntity();
            if (! is_null($oTag) && $oTag->isLoaded()) {
                $this->aView['oTag'] = $oTag;
            }
        }
        $this->render('tag/update.tpl');
    }

    public function deleteAction()
    {
        if (isset($this->aParams['pk']) && intval($this->aParams['pk']) > 0) {
            $this->aView['pk'] = $this->aParams['pk'];
        }
        $this->render('tag/delete.tpl');
    }
}

class TagControllerException extends \Exception
{
}
?>
