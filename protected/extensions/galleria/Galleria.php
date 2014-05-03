<?php
/**
 * Copyright (c) 2010 Michał‚ Rzeszut
 * @license MIT
 * @version 0.1
 */

class Galleria extends CWidget {

    public $theme = 'classic'; // alternatives: dots, fullscreen

    public $containerClass = 'images';

    public $images = array();

    public $options = array();

    private static $defaultImageOptions = array(
        'alt'=>'',
        'htmlOptions'=>array(),
    );

    private static function prepareOptions($options) {
        return json_encode($options);
    }

    private static function prepareArray($array) {
        foreach ($array as $index=>$image) {
            foreach (self::$defaultImageOptions as $defaultKey=>$defaultValue) {
                if (!array_key_exists($defaultKey, $image)) {
                    $array[$index][$defaultKey] = $defaultValue;
                }
            }
        }
        return $array;
    }

    public function init() {
        $baseDir = dirname(__FILE__);
        $assets = Yii::app()->getAssetManager()->publish($baseDir.DIRECTORY_SEPARATOR.'assets');
		$cs = Yii::app()->getClientScript();
		$cs->registerCoreScript('jquery');
        $cs->registerScriptFile($assets.'/galleria.js');
        $cs->registerScriptFile($assets.'/themes/'.$this->theme.'/galleria.'.$this->theme.'.js');

        $preparedOptions = self::prepareOptions($this->options);
        $js =<<<EOP
$(document).ready(function() { $('.{$this->containerClass}').galleria({$preparedOptions}); });
EOP;

        $cs->registerScript('galleria_init', $js, CClientScript::POS_HEAD);
    }

    public function run() {
        $this->render('gallery', array(
                'images'=>self::prepareArray($this->images),
                'class'=>$this->containerClass,
            )
        );
    }

}
