// 点击选择关联文章
function selectLinkArchives() {
    var link_aid = $("#link_aid").val();
    var iframes = layer.open({
        type: 2,
        title: '选择关联文档',
        fixed: true, //不固定
        shadeClose: false,
        shade: layer_shade,
        area: ['80%', '80%'],
        content: ajax_archives_list
    });
}

// 选择关联文章返回 type=1 确定 0-取消
function selectArticleBack(type) {
    layer.closeAll();
    if (1 == type) {
        var html = '';
        for (var i = 0; i < new_link_list.length; i++) {
            // 文档列表处理
            html +=
                '<tr draggable="false" class="ment-table-row">'+
                '<td class="">'+
                '<div class="ment-table-cell ellipsis">' + new_link_list[i]['title'] + '</div>'+
                '</td>'+
                '<td class="">'+
                '<div class="ment-table-cell">'+
                '<a class="curpoin" href="javaScript:void(0);" data-aid="' + new_link_list[i]['aid'] + '" data-key="'+i+'" onclick="delNodeArchives(this);">删除</a>'+
                '</div>'+
                '</td>'+
                '</tr>';
        }
        // 加载文档标题显示
        $(".linkArchivesTbody").html(html);
        if ('' != html){
            $("#link_arc_dl").show();
        }
        link_aid = new_link_aid.join(",");
        link_list = new_link_list;
    }else{
        new_link_aid = link_aid.split(",");
        new_link_list = link_list;
    }
    $("#link_aid").val(link_aid);
}


// 删除节点文档列表中指定的文档
function delNodeArchives(obj) {
    var aid = $(obj).attr('data-aid');

    new_link_aid.forEach(function( val, index ) {
        if (aid == val) {
            new_link_aid.splice(index, 1);
            new_link_list.splice(index, 1);
        }
    });

    if (0 == new_link_aid.length) {
        link_aid = '';
    }else{
        link_aid = new_link_aid.join(",");
    }
    link_list = new_link_list;

    // 删除节点文档html
    $(obj).parent().parent().parent().remove();
    var table_length = $(".linkArchivesTbody tr").length;
    if (0 == table_length) {
        $("#link_arc_dl").hide();
    }

    if ('' == link_aid) {
        $("#link_aid").val('');
    }else{
        $("#link_aid").val(link_aid);
    }
}