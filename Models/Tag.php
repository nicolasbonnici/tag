<?php
namespace bundles\tag\Models;

class Tag extends \Library\Core\Crud
{

    /**
     * Instance constructor overide
     */
    public function __construct($iPrimaryKey = null, \bundles\user\Entities\User $oUser)
    {
        assert('is_null($iPrimaryKey) || intval($iPrimaryKey) > 0');
        if (! $oUser->isLoaded()) {
            throw new TagModelException('Tag need a valid user instance, no user provided.');
        } elseif (! $oUser instanceof \bundles\user\Entities\User || ! $oUser->isLoaded()) {
            throw new TagModelException('Tag need a valid user instance, no user provided.');
        } else {
            parent::__construct('bundles\tag\Entities\Tag', 'bundles\tag\Entities\Collection\TagCollection', $iPrimaryKey, $oUser);
        }
    }
}

class TagModelException extends \Exception
{
}
