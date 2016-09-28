<?php
namespace Serverfireteam\Panel\libs;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AppHelper {
    use \Illuminate\Console\AppNamespaceDetectorTrait;

    public function getNameSpace(){
        return $this->getAppNamespace();
    }

    public function getModelClass($model)
    {
        $customNamespaces = \Config::get('panel.customModelNamespaces', array());
        if (isset($customNamespaces[$model])) {
            $namespace = $customNamespaces[$model];
        } else {
            $namespace = \Config::get('panel.overrideDefaultModelNamespace', $this->getAppNamespace());
        }
        return $namespace.$model;
    }

    public static function validName($name) {
        return strpos($name, '.') !== 0;
    }

    public static function access($attr, $path, $data, $volume) {
        if (strpos(basename($path), '.') === 0) {
            return !($attr == 'read');
        } else {
            return null;
        }
    }
}
