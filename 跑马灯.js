$(function () {
    var message=$("#paomadeng").html();
    var seq=0;
    setInterval(function(){
        seq++;
        if(seq>message.length){
            seq=0;
        }
        $("#paomadeng").html(message.substr(seq,message.length)+message);
    },300)

    //setInterval(function(){
    //    //给跑马灯文字添加颜色设置
    //    $("#paomadeng").addClass("color_change");
    //},1000)
    //通过css覆盖addClass方式设置背景色


    //颜色数据
    var color_array=['red','blue','yellow','green','pink','black','purple','khaki','scarlet','gray','brownamber','aquamarine blue','olive green','turquoise blue','pansy'];
    //随机数
    var Rand = Math.round(Math.random()*15);
    setInterval(function(){
           var a = Math.ceil(Math.random()*10);
           //添加随机颜色
           $('#paomadeng').css(
              {
                'color':color_array[a]
              })

    },2000)






});