<?php

// 应用行为扩展定义文件
return array(
    // 模块初始化
    'module_init'  => array(
        'weapp\\Export\\behavior\\admin\\ExportBehavior',
    ),
    // 操作开始执行
    'action_begin' => array(
        'weapp\\Export\\behavior\\admin\\ExportBehavior',
    ),
    // 视图内容过滤
    'view_filter'  => array(
        'weapp\\Export\\behavior\\admin\\ExportBehavior',
    ),
    // 日志写入
    'log_write'    => array(
        'weapp\\Export\\behavior\\admin\\ExportBehavior',
    ),
    // 应用结束
    'app_end'      => array(
        'weapp\\Export\\behavior\\admin\\ExportBehavior',
    ),
);
