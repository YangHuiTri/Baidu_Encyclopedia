<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="referrer" content="always">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

    <title>百度百科首页</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="baidu.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">

    <style type="text/css">
        /*关键字样式设置*/
        .keyword_hover{
            color: #4cae4c;
            font-size: 20px;
        }

        #recently_keyword li:hover{
            color:darkmagenta;
        }
        /*.color_change{*/
            /*color: #4cae4c;*/
            /*font-size: 24px;*/
            /*background-color: red;*/
        /*}*/

    </style>
    <!--    jquery文件-->
    <script src="jquery.min.js"></script>
    <!--keywords.js-->
    <script src="keywords.js"></script>
    <!--展示，模拟    -->
    <!--    <script src="keywords_copy.js"></script>-->
    <!--跑马灯.js    -->
    <script src="跑马灯.js"></script>

    <script src="回到底部.js"></script>


</head>
<body onload="time()"><a name="top"></a>
<div class="container" >
    <p  id="paomadeng" style="overflow:hidden;height:27px;font-size:23px;text-align: center;color: darkorchid;">@闪耀之星组@:【齐心宇】【郭萍】【肖遥】【王祥福】【杨良辉】【曹文斌】【刘韶星】【邹旺林】</p>
    <div id="heading" >
        <form id="seachForm">
            <img src="images/baidu.jpg" >
            <input  id="query" name="word" type="text"placeholder="请先登录！">
            <button type="button" class="btn btn-primary btn-sm "">进入词条</button>
            <button type="button" class="btn btn-success btn-sm" ">全站搜索</button>
            <!--此处显示搜索热词            -->
            <div id="recently_keywords" style="height: 30px;;overflow: hidden;display: inline;">
                    <span class="glyphicon glyphicon-apple" style="color: forestgreen;">最近热词:</span>
                    <!--显示热词-->
                    <div id="recently_keyword" style="display:inline;">
                        <li style="display: inline;"><a href="#" id="keyword_a" style="font-size: 18px; id="keyword_a">习近平访美</a></li>
                    </div>
            </div>
            <div id="keywords_border" style="display:none;z-index:999;width: 400px;position:relative;height: 200px;border: 1px solid beige;background-color:#f9f9f9;;margin-top:-17px;margin-left:227px;">
                <div id="keywords_ul" class="list-group">

                </div>
            </div>
        </form>
    </div>

    <div id="content-menu">
        <div class="content-menu-left">
            <div class="pmVerticalRightOut">
                <div class="level">
                    <div class="levelTitle"><ul >
                        <li><a href="/art" target="_blank" class="technology">艺术</a></li>&nbsp;
                        <li><a href="/culture" target="_blank">文化</a></li>
                    </ul>
                    </div>
                    <div class="level_">
                        <div class="level_t1">
                            <div class="level_title">艺术</div>
                            <table>
                                <tr><td class="t1"><a href="">资讯</a></td>
                                    <td class="t1"><a href="">展览</a></td>
                                    <td class="t1"><a href="">艺术家</a></td>
                                    <td class="t1"><a href="">拍卖</a></td>
                                    <td class="t1"><a href="">作品</a></td>
                                </tr>
                            </table></div>
                        <div class="level_t2">
                            <div class="level_title">文化</div>
                            <table>
                                <tr><td class="t1"><a href="">美术</a></td>
                                    <td class="t1"><a href="">戏剧</a></td>
                                    <td class="t1"><a href="">舞蹈</a></td>
                                    <td class="t1"><a href="">摄影</a></td>
                                    <td class="t1"><a href="">曲艺</a></td>
                                    <td class="t1"><a href="">书画</a></td>
                                    <td class="t1"><a href="">建筑</a></td>
                                    <td class="t1"><a href="">语言</a></td>
                                </tr>
                            </table></div>
                    </div>
                </div>
                <div class="level">
                    <div class="levelTitle"><ul>
                        <li><a href="/science" target="_blank" class="art">科学</a></li>&nbsp;
                        <li><a href="/nature" target="_blank">自然</a></li>
                    </ul></div>
                    <div class="level_" >
                        <div class="level_t1" >
                            <div class="level_title">科学</div>
                            <table>
                                <tr><td class="t1"><a href="">环境</a></td>
                                    <td class="t1"><a href="">通信</a></td>
                                    <td class="t1"><a href="">水利</a></td>
                                    <td class="t1"><a href="">化工</a></td>
                                    <td class="t1"><a href="">气象</a></td>
                                </tr>
                            </table></div>
                        <div class="level_t2">
                            <div class="level_title">自然</div>
                            <table>
                                <tr><td class="t1"><a href="">动物</a></td>
                                    <td class="t1"><a href="">植物</a></td>
                                    <td class="t1"><a href="">灾害</a></td>
                                    <td class="t1"><a href="">资源</a></td>
                                    <td class="t1"><a href="">现象</a></td>
                                </tr>
                            </table></div>
                    </div>
                </div>
                <div class="level">
                    <div class="levelTitle"><ul>
                        <li><a href="/yule" target="_blank">娱乐</a></li>&nbsp;
                        <li><a href="/life" target="_blank">生活</a></li>
                    </ul></div>
                    <div class="level_">
                        <div class="level_t1">
                            <div class="level_title">娱乐</div>
                            <table>
                                <tr><td class="t1"><a href="">动漫</a></td>
                                    <td class="t1"><a href="">电影</a></td>
                                    <td class="t1"><a href="">电视剧</a></td>
                                    <td class="t1"><a href="">小说</a></td>
                                    <td class="t1"><a href="">演出</a></td>
                                </tr>
                            </table></div>
                        <div class="level_t2">
                            <div class="level_title">生活</div>
                            <table>
                                <tr><td class="t1"><a href="">美容</a></td>
                                    <td class="t1"><a href="">时尚</a></td>
                                    <td class="t1"><a href="">旅游</a></td>
                                    <td class="t1"><a href="">美食</a></td>
                                    <td class="t1"><a href="">工作</a></td>
                                </tr>
                            </table></div>
                    </div>
                </div>
                <div class="level">
                    <div class="levelTitle"><ul>
                        <li><a href="/shehui" target="_blank">社会</a></li>&nbsp;
                        <li><a href="/renwu" target="_blank">人物</a></li>
                    </ul></div>
                    <div class="level_">
                        <div class="level_t1">
                            <div class="level_title">社会</div>
                            <table>
                                <tr><td class="t1"><a href="">政治</a></td>
                                    <td class="t1"><a href="">法律</a></td>
                                    <td class="t1"><a href="">经济</a></td>
                                    <td class="t1"><a href="">交通</a></td>
                                    <td class="t1"><a href="">民族</a></td>
                                    <td class="t1"><a href="">军事</a></td>
                                </tr>
                            </table></div>
                        <div class="level_t2">
                            <div class="level_title">人物</div>
                            <table>
                                <tr><td class="t1"><a href="">政治人物</a></td>
                                    <td class="t1"><a href="">历史人物</a></td>
                                    <td class="t1"><a href="">文化人物</a></td>
                                    <td class="t1"><a href="">虚拟人物</a></td>
                                    <td class="t1"><a href="">话题人物</a></td>
                                </tr>
                            </table></div>
                    </div>
                </div>
                <div class="level">
                    <div class="levelTitle"><ul>
                        <li><a href="/jingji" target="_blank">经济</a></li>&nbsp;
                        <li><a href="/lishi" target="_blank">历史</a></li>
                    </ul></div>
                    <div class="level_">
                        <div class="level_t1">
                            <div class="level_title">经济</div>
                            <table>
                                <tr><td class="t1"><a href="">金融</a></td>
                                    <td class="t1"><a href="">经济学</a></td>
                                    <td class="t1"><a href="">管理</a></td>
                                    <td class="t1"><a href="">贸易</a></td>
                                    <td class="t1"><a href="">债券</a></td>
                                </tr>
                            </table></div>
                        <div class="level_t2">
                            <div class="level_title">历史</div>
                            <table>
                                <tr><td class="t1"><a href="">各国历史</a></td>
                                    <td class="t1"><a href="">历史事件</a></td>
                                    <td class="t1"><a href="">历史著作</a></td>
                                    <td class="t1"><a href="">文献考古</a></td>
                                </tr>
                            </table></div>
                    </div>
                </div>
                <div class="level">
                    <div class="levelTitle"><ul>
                        <li><a href="/tiyu" target="_blank">体育</a></li>&nbsp;
                        <li><a href="/dili" target="_blank">地理</a></li>
                    </ul></div>
                    <div class="level_">
                        <div class="level_t1">
                            <div class="level_title">体育</div>
                            <table>
                                <tr><td class="t1"><a href="">体育组织</a></td>
                                    <td class="t1"><a href="">体育设施</a></td>
                                    <td class="t1"><a href="">体育项目</a></td>
                                </tr>
                            </table></div>
                        <div class="level_t2">
                            <div class="level_title">地理</div>
                            <table>
                                <tr><td class="t1"><a href="">行政区划</a></td>
                                    <td class="t1"><a href="">地形地貌</a></td>
                                </tr>
                            </table></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-menu-middle">
            <div id="slide">
                <a id="btnLeft" href="javascript:void(0);" ></a>
                <a id="btnRight" href="javascript:void(0);" ></a>
                <!--when change next image:style="left: -(n-1)*800px;"-->
                <ul>
                    <li>
                        <div class="text"> <img src="images/5.jpg" alt="" >
                            <p><h5 class="textT"><a href="">阿尔法围棋</a><br>
                                <small class="text-content">阿尔法围棋（AlphaGo）是第一个击败人类职业围棋选手、第一个战胜围棋世界冠军的人工智能程序。</small></h5></p>
                        </div>
                        <div class="text"><img src="images/6.jpg" alt="" >
                            <p><h5 class="textT"><a href="">空中交汇对接技术</a><br>
                                <small class="text-content">两个航天器在空间轨道上汇合，并在结构上连接成一个整体的技术。是实现航天站、航天飞机、太空平台和空间运输系统。</small></h5></p>
                        </div>
                        <div class="text"><img src="images/shouji.jpg" alt="" >
                            <p><h5 class="textT"><a href="">安卓手机推送栏将统一标准</a><br>
                                <small class="text-content">由工信部旗下泰尔终端实验室主办的“统一推送联盟”成立，联盟将联合多家Android生态厂商，制定统一推送服务技术标准。</small></h5></p>
                        </div>
                    </li>
                    <li>
                        <div class="text"><img src="images/1.jpg" alt="" >
                            <p><h5 class="textT"><a href="">乞力马扎罗山</a><br>
                                <small class="text-content">乞力马扎罗山素有“非洲屋脊”之称，而许多地理学家称它为“非洲之王”。该山的主体以典型火山曲线向下面的平原倾斜。</small></h5></p>
                        </div>
                        <div class="text"><img src="images/j31.png" alt="" >
                            <p><h5 class="textT"><a href="">歼31首单已定!</a><br>
                                <small class="text-content">买世界上最顶级的战机的话，三年前肯定只有美国是唯一的选择。毕竟F35出来的时候，中国的J20才是网上传闻的“粽子机”。</small></h5></p>
                        </div>
                        <div class="text"><img src="images/renda.jpg" alt="" >
                            <p><h5 class="textT"><a href="">中共十九大在北京开幕</a><br>
                                <small class="text-content">中国共产党第十九次全国代表大会在北京召开。这次大会关乎中国共产党的未来，也将深刻影响着中国下一步的发展。</small></h5></p>
                        </div>

                    </li>

                    <li>
                        <div class="text"><img src="images/3.jpg" alt="" >
                            <p><h5 class="textT"><a href="">灵猫科下的第二大物种</a><br>
                                <small class="text-content">熊狸栖息于热带雨林或季雨林中，善在高大树木上攀爬跳跃，为典型的树栖动物。熊狸晨昏活动较频繁。</small></h5></p>
                        </div>
                        <div class="text"><img src="images/鲸鱼.jpg" alt="" >
                            <p><h5 class="textT"><a href="">“长毛”的鲸鱼</a><br>
                                <small class="text-content">座头鲸是徜徉于广袤海洋中的庞然大物，它有醒目的外貌和醉人的歌声，可是你知道它身上还长着“毛”么？</small></h5></p>
                        </div>
                        <div class="text"><img src="images/长颈驼.jpg" alt="" >
                            <p><h5 class="textT"><a href="">远古美洲大陆上的“三不像”</a><br>
                                <small class="text-content">在羊驼的故乡美洲大陆上，曾生活一种长颈驼，从外观上来看它集合了羊驼、长颈鹿、大象三种动物的特点。</small></h5></p>
                        </div>
                    </li>

                </ul>

                <div id="ico" class="ico">
                    <a class="active" href="javascript:void(0);"></a>
                    <a href="javascript:void(0);"></a>
                    <a href="javascript:void(0);"></a>
                    <a href="javascript:void(0);"></a>
                    <a href="javascript:void(0);"></a>
                    <a href="javascript:void(0);"></a>
                </div>
            </div>

        </div>
        <div class="content-menu-right">
            <div class="content-menu-rightbox1"><br>
                <h4>&nbsp; 百度百科   客观  专业  权威</h4>
                <div class="public-sun">
                    &nbsp;<span class="no1" id="shu1">  超过&nbsp <span style="color: #5bc0de"> 132,373,247 </span> &nbsp次编辑</span><br>
                    &nbsp;<span class="no1" id="shu2">  创建&nbsp <span style="color: #5bc0de"> 15,029,944 </span> &nbsp个词条</span>
                </div>
                <div class="content-menu-right-btn " >
                    &nbsp;&nbsp;  <button type="button" class="btn btn-info"><a href="word.php" style="color: white">创建词条</a></button>&nbsp;&nbsp;&nbsp;&nbsp;

                    <!--<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                        <!--用户登录-->
                        <!--<span class="caret"></span>-->
                    <!--</button>-->
                    <!-- Large modal -->
                    <button type="button" class="btn btn-info " data-toggle="modal" data-target=".fade">用户登录</button>
                    <div  id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="gridSystemModalLabel"><img src="images/登录.png">百度登录账号</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="erWei" style="float: left;"><img src="images/二维码.png"></div>
                                    <!--登录模态框-->
                                    <div class="login" style="height: 340px;">
                                        <form>
                                            <?php
                                            require_once 'common.php';
                                            ?>
                                        </form>
                                        <form class="form-signin" role="form" action="loginProcess.php" method="post">
                                            <h2 class="form-signin-heading" style="line-height: 60px">&nbsp;Please sign in</h2>
                                            <input type="text" class="form-control " placeholder="手机/邮箱/用户名" name="user_name" value="<?php echo getCookieVal("user_name"); ?>" required="" autofocus="" style="width: 230px">
                                            <br><input type="password" class="form-control" placeholder="密码" name="user_password" value="<?php echo getCookieVal("user_password"); ?>" required=""style="width: 230px;">
                                            <br><div class="form-inline"><td><input type="text" class="form-control" style="width: 130px" name="code" placeholder="请输入验证码"><img src="checkcode.php" onclick="this.src='checkcode.php?aa='+Math.random()"></td></div>
                                            <label class="checkbox" style="padding-top: 1px" >
                                                <input type="checkbox" name="keep" value="remember-me" > <h6>记住密码</h6>
                                            </label>
                                            <!--<button type="submit" class="btn btn-default btn-lg active">注册</button>-->

                                            <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 230px">Sign in</button>
                                            <a href="register.php" >立即注册</a>

                                        </form>
                                        <?php
                                            //接收登录成功的返回值并弹窗
                                            if (!empty($_GET['success'])){
                                                $word=$_GET['success'];
                                                echo "<script>window.alert('{$word}')</script>";
                                    }
                                    //接收登录失败的返回值并弹窗
                                    if (!empty($_GET['fail'])){
                                        $word=$_GET['fail'];
                                        echo "<script>window.alert('{$word}')</script>";
                                        }
                                        //接收未登录直接创建词条的返回值
                                        if(!empty($_GET['error'])){
                                        $word=$_GET['error'];
                                        echo "<script>window.alert('{$word}')</script>";
                                        }
                                        //接收创建词条成功的返回值
                                        if(!empty($_GET['msg'])){
                                        $word=$_GET['msg'];
                                        echo "<script>window.alert('{$word}')</script>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="modal-footer" >
                                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>
            <div class="content-menu-rightbox2">
                <div class="page-header">
                    <h4><a href="http://time.baike.com/?prd=shouye_shiguangji">时光机</a><small>&nbsp;  进入历史的每一天</small></h4>
                </div>
                <div class="timebox" >
                    <dt class="time">
                    <div id="month" style="padding-left: 8px"></div>
                    <div class="sun"><h3><a class="sun" href="http://time.baike.com/?prd=shouye_shiguangji"><div id="showtime" style="padding-left: 7px"></div></a></h3></div>
                    <div class="sun-rigth" > <h6 style="line-height: 17px"> &nbsp; 阿尔弗雷德·诺贝尔,瑞典化学家、工程师、发明家、实业家、炸药的发明者</h6></div>
                    </dt></div>

            </div>

        </div>
    </div>

    <div id="content-body">

        <div class="vbaike">
            <h3>冷知识</h3>
            <div class="vtitle">
                <a href="#"; target="_blank" class="knowledge-title" i>喝牛奶为啥会变白</a>
            </div>
            <img  class="pic" src="images/牛奶.jpg" >
            <div class="vtext" id="cold_zhishi1">
                牛奶不会直接让人变白，但很多间接的物质和作用会让人看起来更白。
            </div>
            <div class="vtitle">
                <a href="#"; target="_blank" class="knowledge-title">“衣冠禽兽”原是褒义词？</a>
            </div>
            <img  class="pic" src="images/衣冠禽兽.jpg">
            <div class="vtext"  id="cold_zhishi2">
                “衣冠禽兽”现在用来形容人作恶多端，而一开始他却是贵人的代称。
            </div>
            <div class="vtitle">
                <a href="#"; target="_blank" class="knowledge-title">《两只老虎》曾是国歌？</a>
            </div>
            <img  class="pic" src="images/国歌.jpg">
            <div class="vtext"  id="cold_zhishi3">
                北伐革命政府将《国民革命歌》定为国歌，它的旋律来自法国儿歌。
            </div>
            <div class="vtitle">
                <a href="#"; target="_blank" class="knowledge-title">历史上不存在扛梯攻城</a>
            </div>
            <img  class="pic" src="images/云梯.jpg">
            <div class="vtext"  id="cold_zhishi4">
                古代战争的影视剧中，常有扛梯攻城，这不仅脱离事实且与送死无异。
            </div>
        </div>
        <div class="news">
            <h3>今日热搜</h3>
            <div class="ntitle"  style=" background-color:#ecf5ff;">
                <li href="#"; target="_blank" class="knowledge-title"><a herf="#"></a><a herf="#">小伙调戏支付宝，遭千人疯狂转账 手机震动一整晚！</a>
                </li>
            </div>
            <div class="ntext" style=" background-color:#ecf5ff;">
                常听大家戏言“在中国，如果每个中国人给一块钱就能成亿万富翁”，这么白日梦的事情竟然真的发生了!不过不是 1 块而是 1 分!
            </div>
            <div class="ntitle" style=" background-color:#ecf5ff;">
                <li href="#"; target="_blank" class="knowledge-title"><a herf="#">女子怀孕7个月过安检，仪器发出警报，真相让人揪心！</a>
                </li>
            </div>
            <div class="ntext" style=" background-color:#ecf5ff;">
                近日，在湖南衡阳衡南县，一名孕妇乘坐高铁过安检时，突然仪器发生报警，安检人员迅速将这名孕妇控制住，并且派遣女同事对这名孕妇进行检查，结果真在这名女子的胸罩中发现了点不一样的东西！
            </div>
            <div class="ntitle" style=" background-color:#ecf5ff;">
                <li href="#"; target="_blank" class="knowledge-title"><a herf="#">朴槿惠称狱中环境恶劣权利遭侵害 韩法务部否认！</a>

                </li>
            </div>
            <div class="ntext" style=" background-color:#ecf5ff;">
                中新网10月18日电 据韩联社报道，韩国法务部18日就韩国前总统朴槿惠方面主张其在看守所遭侵害逐一反驳，称该主张与事实不符。
            </div>
            <div class="ntitle" style=" background-color:#ecf5ff;">
                <li  href="#"; target="_blank" class="knowledge-title"><a herf="#">继文章陈思成后，又一位荧幕好男人沦陷了！不免让人心寒。</a>
                </li>
            </div>
            <div class="ntext" style=" background-color:#ecf5ff;">
                如今演艺圈似乎离婚潮风起云涌一样，很多荧幕上的好男人到现实生活里简直判若两人，有很多大家非常羡慕的一对对到后来形同陌路，好男人人设的崩塌真的是让人费解，也许这就是看不懂的娱乐圈。
            </div>
        </div>
        <div class="star">
            <h3>最火之星</h3>
            <div class="picbox">
                <div class="num1"><img src="images/lsx.jpg" class="img-circle"> <span>刘韶星</span></div>
                <div class="num2"><img src="images/qjg.jpg" class="img-circle"><span>齐建国</span></div>
                <div class="num3"><img src="images/cwb.jpg" class="img-circle"><span>曹文斌</span></div>
                <div class="num4"><img src="images/cf.jpg" class="img-circle"><span>曹锋</span></div>
                <div class="num5"><img src="images/gp.jpg" class="img-circle"><span>郭萍</span></div>
                <div class="num6"><img src="images/xy.jpg" class="img-circle"><span>肖瑶</span></div>
                <div class="num7"><img src="images/ylh.jpg" class="img-circle"><span>杨良辉</span></div>
                <div class="num8"><img src="images/wxf.jpg" class="img-circle"><span>王祥福</span></div>
                <div class="num9"><img src="images/zwl.jpg" class="img-circle"><span>邹旺林</span></div>

            </div>
            <div class="r">
                <ul>
                    <li>●【新】热词团队火热招募中！</li>
                    <li>● 文明从新看：数字博物馆改版了</li>
                    <li>● 百科全新礼品上架，火热兑换中</li>
                    <li>●【热】百科校园大使招募啦！</li>
                </ul>
            </div>
        </div>

    </div>

    <div class="wgt-footer-main">
        <div class="content">
            <dl class="fresh">
                <dt><em class="cmn-icon cmn-icons cmn-icons_footer-fresh"></em>新手上路</dt>
                <dd>
                    <div class="x"><a target="_blank" href="/usercenter/tasks#guide">成长任务</a></div>
                    <div class="x"><a target="_blank" href="/help#main01">编辑入门</a></div>
                    <div class="x"><a target="_blank" href="/help#main06">编辑规则</a></div>
                    <div class="x"><a target="_blank" href="/help#main05">百科术语</a></div>
                </dd>
            </dl>
            <dl class="question">
                <dt><em class="cmn-icon cmn-icons cmn-icons_footer-question"></em>我有疑问</dt>
                <dd>
                    <div class="x"><a target="_blank" href="/user/question">常见问题</a></div>
                    <div class="x"><a target="_blank" href="https://aikefu.baidu.com/baidu.php?product=bk001" nslog-type="10000003">在线客服</a></div>
                    <div class="x"><a target="_blank" href="http://tieba.baidu.com/f?ie=utf-8&amp;fr=bks0000&amp;">参加讨论</a></div>
                    <div class="x"><a target="_blank" href="/feedback">意见反馈</a></div>
                </dd>
            </dl>
            <dl class="suggestion">
                <dt><em class="cmn-icon cmn-icons cmn-icons_footer-suggestion"></em>投诉建议</dt>
                <dd>
                    <div class="x"><a target="_blank" href="http://help.baidu.com/newadd?prod_id=10&amp;category=1">不良举报</a></div>
                    <div class="x"><a target="_blank" href="http://help.baidu.com/newadd?prod_id=10&amp;category=2">词条申诉</a></div>
                    <div class="x"><a target="_blank" href="http://help.baidu.com/newadd?prod_id=10&amp;category=6">投诉侵权</a></div>
                    <div class="x"><a target="_blank" href="http://help.baidu.com/newadd?prod_id=10&amp;category=5">封禁查询</a></div>
                </dd>
            </dl>
        </div>
        <div class="copyright" >©2017&nbsp;Baidu&nbsp;<a href="http://www.baidu.com/duty/baidu.php" target="_blank">使用百度前必读</a>&nbsp;|&nbsp;<a href="http://help.baidu.com/question?prod_en=baike&amp;class=89&amp;id=1637" target="_blank">百科协议</a>&nbsp;|&nbsp;<a href="/operation/cooperation" target="_blank">百度百科合作平台</a>&nbsp;|&nbsp;<span>京ICP证666666号&nbsp;</span><img class="copyright-img" width="13" height="16" src="https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/copy_rignt_24.png"></div>
    </div>



</div>
<a style="display: none;" id="回到底部" href="#top" class="top" ><image src="images/回到顶部.gif"></image></a>


<!--图片轮播-->
<script type="text/javascript">

    function showTime(){
        var now_date=new Date();
        //获取显示日期的div
        var  date_div=document.getElementById('showtime');
        //获取月份的div
        var month=document.getElementById("month");
        date_div.innerHTML=now_date.getDate();
        month.innerHTML=now_date.getMonth()+1+"月";

    }

    window.onload = function() {



        var oIco = document.getElementById("ico");
        var aBtn = oIco.getElementsByTagName("a");
        var oSlide = document.getElementById("slide");
        var oUl = oSlide.getElementsByTagName("ul");
        var aLi = oUl[0].getElementsByTagName("li");
        var oBtnLeft = document.getElementById("btnLeft");
        var oBtnRight = document.getElementById("btnRight");

        var baseWidth = aLi[0].offsetWidth;
        //alert(baseWidth);
        oUl[0].style.width = baseWidth * aLi.length + "px";
        var iNow = 0;
        for(var i=0;i<aBtn.length;i++) {
            aBtn[i].index = i;
            aBtn[i].onclick = function() {
                //alert(this.index);
                //alert(oUl[0].style.left);
                move(this.index);
                //aIco[this.index].className = "active";
            }
        }
        oBtnLeft.onclick = function() {
            iNow ++;
            //document.title = iNow;
            move(iNow);
        }
        oBtnRight.onclick = function() {
            iNow --;
            document.title = iNow;
            move(iNow);
        }

        var curIndex = 0;
        var timeInterval = 2000;
        setInterval(change,timeInterval);
        function change() {
            if(curIndex == aBtn.length) {
                curIndex =0;
            } else {
                move(curIndex);
                curIndex += 1;
            }

        }

        function move(index) {
            //document.title = index;
            if(index>aLi.length-1) {
                index = 0;
                iNow = index;
            }
            if(index<0) {
                index = aLi.length - 1;
                iNow = index;
            }
            for(var n=0;n<aBtn.length;n++) {
                aBtn[n].className = "";
            }
            aBtn[index].className = "active";
            oUl[0].style.left = -index * baseWidth + "px";
            //buffer(oUl[0],{
            // left: -index * baseWidth
            // },8)

        }
        showTime();

    }


</script>
<!--二级菜单-->
<script type="text/javascript">
    if (navigator.appName=="Microsoft Internet Explorer") {
        function fPmVerticalRightOut() {
            var getItem = document.getElementById("pmVerticalRightOut").getElementsByTagName("div");
            for (var i=0; i<getItem.length; i++) {
                getItem[i].onmouseover=function() {
                    if(     this.className=="level"){
                        this.className="levelIe";
                    }
                }
                getItem[i].onmouseout=function() {
                    if(     this.className=="levelIe"){
                        this.className="level";
                    }
                }//css popup menu script by shawl.qiu
            }
        }
        window.onload=fPmVerticalRightOut;
    }
</script>
<!--日历-->
<script language=Javascript>

    function time(){
        //获得显示时间的div
        t_div = document.getElementById('showtime');
        var now=new Date()
        //替换div内容
        t_div.innerHTML = now.getDate();
        //等待一秒钟后调用time方法，由于settimeout在time方法内，所以可以无限调用
        setTimeout(time,1000);
    }
</script>
<script src="jquery-2.2.4.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>
    $('#myModal').modal('hide');
</script>
</body>
</html>