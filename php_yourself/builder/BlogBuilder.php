<?php
require_once 'ConfigureParameter.php';

abstract class BlogBuilder
{
    public $blog_builder;


    //インスタンスの初期化（もしかすると必要ないかも？）
    public function __constructor()
    {
        $this->blog_builder = new BlogBuilder();
    }

    /**
     * ビルダーの名称を返す
     * @return String
     */
    public abstract function getName() :string;

    /**
     * ヘッダの作成を行う
     * @return String
     */
    public abstract function appendHeaderName() :array;

    /**
     * スタイルシートの作成を行う
     * @return String
     */

    public abstract function appendStyleSheetOn() :array;

    /**
     * コメントの作成を行う
     * @return String
     */
    public abstract function appendCommentOn() :array;

    /**
     * 編集を行う
     * @return String
     */
    public abstract function appendEditOn() :array;

    /**
     * トラックバックを行う
     * @return String
     */
    public abstract function appendTrackbackOn() :array;

    /**
     * 結果文字列を返す
     * @return string
     */
    public function getHtmlText()
    {

    }

}