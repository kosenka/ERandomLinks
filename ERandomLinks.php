<?php
/**
 * ERandomLinks class file.
 *
 * @author Vladimir Papaev <kosenka@gmail.com>
 * @version 0.1
 * @license http://www.opensource.org/licenses/bsd-license.php
 * @github https://github.com/kosenka/ERandomLinks
 */

class ERandomLinks extends CWidget
{
        public $links=array();

        public function init()
        {
                parent::init();
        }

        public function run()
        {
                $result="";
                if(!empty($this->links))
                {
                        $rnd=rand(0, sizeof($this->links)-1);//генерируем случайным номер
                        $link=$this->links[$rnd];
                        $result=CHtml::link($link['name'], $link['url']);
                }
                echo $result;
        }
}
