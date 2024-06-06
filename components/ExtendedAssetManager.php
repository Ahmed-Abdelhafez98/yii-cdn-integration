<?php

namespace app\components;

use yii\web\AssetManager;
use yii\helpers\Url;

class ExtendedAssetManager extends AssetManager
{
    public $cdnDomain;
    public $staticFolderName;

    public function getAssetUrl($bundle, $asset, $appendTimestamp = null)
    {
        $url = parent::getAssetUrl($bundle, $asset, $appendTimestamp);

        // Replace host with CDN domain
        if ($this->cdnDomain) {
            $url = str_replace(Url::base(true), $this->cdnDomain, $url);
        }

        // Replace random folder name with static folder name
        if ($this->staticFolderName) {
            $url = str_replace($this->hash($bundle->basePath), $this->staticFolderName, $url);
        }

        return $url;
    }

    protected function hash($path)
    {
        // Return the static folder name instead of a hashed name
        return $this->staticFolderName ?: parent::hash($path);
    }
}