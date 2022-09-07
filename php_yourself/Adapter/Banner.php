<?php

/**
 * 提供されているクラス
 */
class Banner
{

    /**
     * 文言
     * @return String
     */
    private $string;

    public function __construct(String $string)
    {
        $this->string = $string;
    }

    public function showWithParen()
    {
        echo "(" . $this->string . ")";
    }

    public function showWithAster()
    {
        echo "*" . $this->string . "*";
    }
}