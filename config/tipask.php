<?php
/**
 * Tipask全局配置
 * User: sdf_sky
 * Date: 15/9/4
 * Time: 上午11:40
 */

return [
    'version' => 'Tipask3.0',
    'release' => '20160701',
    'user_cache_time' => 1, //用户数据缓存时间单位分钟
    'admin' => [
        'page_size' => 15,  //后台分页列表显示数目
    ],
    'user_actions' => [   //积分操作动作
        'login'    => '登录',
        'register' => '注册',
        'ask'      => '发起提问',
        'answer'   => '回答问题',
        'follow_question' => '关注了问题',
        'append_reward' => '对问题追加悬赏',
        'answer_adopted' => '回答被采纳',
        'create_article' => '发表了文章',
        'exchange' => '兑换商品',

    ],
    'notification_types' =>[
        'answer'  => '回答了问题',
        'reply_comment'  => '回复了',
        'comment_question' => '评论了问题',
        'comment_answer' => '评论了回答',
        'comment_article' => '评论了文章',
        'follow_question' => '关注了问题',
        'invite_answer' => '邀请您回答问题',
        'adopt_answer' => '采纳了您的回答',
        'create_article' => '发表了文章',
        'follow_user' => '关注了你',
    ],
    'summernote'=>[
        'ask' => "['common', ['style','bold','ol','link','picture','clear','fullscreen']]",
        'blog' => "['common', ['style','bold','color','ol', 'paragraph','table','link','picture','clear','fullscreen']]",
    ]

];