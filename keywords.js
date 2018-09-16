$(function(){
    //搜索框呈现
    $("#query").keyup(function(e){
        if(e.keyCode==32){
            var keyword=$("#query").val().trim();
            var ok=true;

            $("#keywords_ul").empty();
            $("#keywords_border").hide();

            if(keyword==null || keyword==""){
                ok=false;
            }
            if(ok){
                $.ajax({
                    type: "post",
                    url: "keywords.php",
                    data: {keyword:keyword},
                    dataType: "json",
                    success: function(data){
                        //每次追加之前，需要先清空框内内容
                        $("#keywords_border").hide();
                        $("#keywords_ul").empty();

                        // console.log(data.length);
                        if(data.length!=0){
                            //data是返回的json数组，遍历
                            for(var i=0;i<data.length;i++){
                                //  console.log(data[i].keyword_name);
                                var keyword_name=data[i].keyword_name;
                                //关键词框显示
                                $("#keywords_border").show();
                                var keyword_str='<a href="#" class="list-group-item list-group-item-success" style="color:green;">'+keyword_name+'</a>';
                                //给列表追加li
                                $("#keywords_ul").append(keyword_str);
                            }
                        }
                    },
                    error:function(){
                        //alert("服务器请求失败!请稍后重试!");
                    }
                });
            }


        }
    });

    //热词选中
    $("#keywords_ul").on("click","a",function(){
        var word=$(this).html();
        $("#query").val(word);
        $("#keywords_ul").empty();
        $("#keywords_border").hide();
    });

    //最近热词
    setInterval(function(){
        //$("#recently_keyword").fadeOut(1000);
        $.ajax({
            url:"recently_headted.php",
            dataType:"json",
            success: function(data){
                 if(data.length!=0){
                     //清空框中内容
                     $("#recently_keyword").empty();
                     var recently_keyword_str='<li style="display: inline;"><a href="#" id="keyword_a" style="font-size: 18px; id="keyword_a">'+data[0].keyword_name+'</a></li>';
                     $("#recently_keyword").append(recently_keyword_str);
                 }

            },
            error:function(){
                 alert("服务器请求失败,请稍后重试!");
            }
        });
    },60000);
});