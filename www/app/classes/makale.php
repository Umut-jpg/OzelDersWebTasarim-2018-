<?php


class Makale {


    public static function findPost($post_url)
    {

        global $db;

        return $db->from('posts')



            ->where('post_url', $post_url)
            ->where('post_status', 1)
            ->first();
    }
}