<?php

// 应用行为扩展定义文件
return array(
    // 模块初始化
    'module_init'  => array(
        'weapp\\LinkArchives\\behavior\\admin\\LinkArchivesBehavior',
    ),
    // 操作开始执行
    'action_begin' => array(
        'weapp\\LinkArchives\\behavior\\admin\\LinkArchivesBehavior',
    ),
    // 视图内容过滤
    'view_filter'  => array(
        'weapp\\LinkArchives\\behavior\\admin\\LinkArchivesBehavior',
    ),
    // 日志写入
    'log_write'    => array(
        'weapp\\LinkArchives\\behavior\\admin\\LinkArchivesBehavior',
    ),
    // 应用结束
    'app_end'      => array(
        'weapp\\LinkArchives\\behavior\\admin\\LinkArchivesBehavior',
    ),
);
