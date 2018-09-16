
$(function(){$("#query").keyup(function(e){if(e.keyCode==32){keywords_border_show();}});
    $("#keywords_ul").on("click","a",function(){var word=$(this).html();$("#query").val(word);$("#keywords_ul").empty();$("#keywords_border").hide();});
    //周期函数
    setInterval(function(){$("#recently_keywords").empty();for(var i=0;i<3;i++){var Rand = Math.round(Math.random()*10);var str_li='<li style="float: right;margin-right: 80px;"><a href="#" class="keyword_hover">习好好近平'+Rand+'</a></li>';$("#recently_keywords").append(str_li);}},2000);
});

//�ؼ��ֿ����
function keywords_border_show(){
    //��ȡ����
    var keyword=$("#query").val().trim();
    var ok=true;
    if(keyword==""){ok=false;$("#keywords_ul").empty();$("#keywords_border").hide();}
    if(ok){$("#keywords_ul").empty();
        if(keyword=="习"){
            var keywords_string='习近平,习特会,习近平 彭丽媛,习近平扶贫,习近平-人名好主席';
            var strs_keyword= new Array(); //����һ����
            strs_keyword=keywords_string.split(","); //�ַ��ָ�
            for(var i=0;i<strs_keyword.length;i++){
                //关键词框显示
                $("#keywords_border").show();
                var keyword_str='<a href="#" class="list-group-item list-group-item-success">'+strs_keyword[i]+'</a>';
                //给列表追加li
                $("#keywords_ul").append(keyword_str);
            }



        }
        //
        if(keyword=="特"){
            var keywords_string='特朗普,特朗普税改,特朗普威胁朝鲜,伊万卡-特朗普,世界焦点-习特会,特朗普何时访华';
            var strs_keyword= new Array(); //����һ����
            strs_keyword=keywords_string.split(","); //�ַ��ָ�
            for(var i=0;i<strs_keyword.length;i++){
                //关键词框显示
                $("#keywords_border").show();
                var keyword_str='<a href="#" class="list-group-item list-group-item-success">'+strs_keyword[i]+'</a>';
                //给列表追加li
                $("#keywords_ul").append(keyword_str);
            }



        }
    }







}