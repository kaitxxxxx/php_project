<?php
require_once('BlogBuilder');

/**
 * BlogBuilderの抽象クラス
 */
class BlogBuilderB extends BlogBuilder
{
    /**
     * 区切り文字列
     */
    const DELIMETTER = '*******************************************';

    public function getName() :string
    {
        return 'ビルダB';
    }

    public function appendHeaderName() :Array
    {
        return $header_name = [self::DELIMETTER, "<br>", '[', $this->getName(), ']によるヘッダ作成', "<br>", self::DELIMETTER];
    }

    public function appendStyleSheetOn() :Array
    {
        return $header_name = [self::DELIMETTER, "<br>", '[', $this->getName(), ']によるスタイルシートの作成', "<br>", self::DELIMETTER];
    }

    public function appendCommentOn() :Array
    {
        return $header_name = [self::DELIMETTER, "<br>", '[', $this->getName(), ']によるコメントのコメント作成', "<br>", self::DELIMETTER];
    }

    public function appendEditOn() :Array
    {
        return $header_name = [self::DELIMETTER, "<br>", '[', $this->getName(), ']によるコメントの編集', "<br>", self::DELIMETTER];
    }

    public function appendTrackbackOn() :Array
    {
        return $header_name = [self::DELIMETTER, "<br>", '[', $this->getName(), ']によるトラックバックの編集', "<br>", self::DELIMETTER];
    }

}
