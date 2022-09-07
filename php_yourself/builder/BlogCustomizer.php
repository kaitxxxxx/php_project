<?php

require_once 'BlogBuilder.php';

/**
 * blogbuilderを選択して、パラメータを選択してそれに応じてアプリケーションの結果を返す
 */
class BlogCustomizer
{

    protected BlogBuilder $builder_list;
    /**
     * blogbuilderを選択する
     * @return BlogBuilder
     */
    private function selectBuilder()
    {
        $builder_list = [new BlogBuilderA(), new BlogBuilderB()];
        //上記配列の数
        $size = count($builder_list);

        while (true) {
            echo('ビルダを選択してください');
            for ($i=0; $i<$size; $i++) {
                echo($i + 1);
                echo('=');
                echo($builder_list[$i]->getName());
            }
        }
    }


}