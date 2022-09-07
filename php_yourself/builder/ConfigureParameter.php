<?php

/**
 * ここの部分のパラメーターを検索
 */
class ConfigureParameter
{
    //ヘッダの作成を行う
    public function isUserHeader(Bool $is_user_header = true)
    {
        return $is_user_header;
    }

    //スタイルシートの作成を行う
    public function isUserStylesheet(Bool $is_user_stylesheet = true)
    {
        return $is_user_stylesheet;
    }

    //コメントの作成を行う
    public function isComment(Bool $is_comment = true)
    {
        return $is_comment;
    }

    //編集を行う
    public function isEdit(Bool $is_edit = true)
    {
        return $is_edit;
    }

    //トラックバックを行う
    public function isTrackback(Bool $is_trackback = true)
    {
        return $is_trackback;
    }
}
