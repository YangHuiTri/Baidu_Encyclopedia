﻿/*
CHAR
VARCHAR
TINYTEXT
MEDUIMTEXT
TEXT
LONGTEXT
DATE      1000-01-01 ~ 9999-12-31
DATETIME  1000-01-01 00:00:00 ~ 9999-12-31 23:59:59
TIMESTAMP  19700101080001 ~ 20380119111407

NOW()

FOREIGN KEY (parent_id) REFERENCES parent(id)
                     ON DELETE CASCADE

 */


drop database if exists `baidu`;
create database `baidu` charset=utf8;

use `baidu`;
drop table if exists `user`;
create table `user`
(
  id TINYINT(4) UNSIGNED not null PRIMARY KEY auto_increment,
	user_name VARCHAR(128) not null,
	user_password varchar(128) not null,
	user_date datetime not NULL,
	user_phone varchar(128) not null
);

insert into `user` VALUES(null,'zhangsan',md5('12345'),NOW(),'13632882399'),
(null,'lisi',md5('123456'),NOW(),'13632882400');

drop table if exists `words`;
create table `words`
(
	id int(10) unsigned primary key auto_increment,
	user_id int(10) unsigned not null,
	keyword_title varchar(128) not null,
	keyword_name varchar(128) not null,
	keyword_body varchar(512) not NULL,
	keyword_wenxian varchar(512) DEFAULT NULL,
	keyword_creattime datetime not null,
	keyword_count int(10) not null DEFAULT 1
);


insert into `words` VALUES(NULL,1,'人物类','杨良辉','杨良辉好帅', null,NOW(), '1'),
(null,1,'人物类','杨良辉123','杨良辉好帅123', '杨良辉学',NOW(), '1'),
(NULL,1,'人物类','杨良辉1','杨良辉好帅1', null,NOW(), '1'),
(NULL,2,'人物类','习近平','习近平，男，汉族，1953年6月生，陕西富平人，1969年1月参加工作，1974年1月加入中国共产党，清华大学人文社会学院马克思主义理论与思想政治教育专业毕业，在职研究生学历，法学博士学位。
现任中国共产党中央委员会总书记，中共中央军事委员会主席，中华人民共和国主席，中华人民共和国中央军事委员会主席。',
 '中共第十五届中央候补委员，十六届、十七届、十八届、十九届中央委员，十七届中央政治局委员、常委、中央书记处书记，十八届、十九届中央政治局委员、常委、中央委员会总书记。
第十一届全国人大第一次会议当选为中华人民共和国副主席。
十七届五中全会增补为中共中央军事委员会副主席。
第十一届全国人大常委会第十七次会议任命为中华人民共和国中央军事委员会副主席。
十八届一中全会任中共中央军事委员会主席。
第十二届全国人大第一次会议当选为中华人民共和国主席、中华人民共和国中央军事委员会主席。
十九届一中全会任中共中央军事委员会主席。',NOW(), '1'),

(NULL,3,'人物类','彭丽媛','彭丽媛，1962年11月20日出生于山东省菏泽市郓城县，中国著名女高音歌唱家，中国第一位民族声乐硕士，国家一级演员，享受国务院颁发的“政府津贴”。1985年7月加入中国共产党，是中国人民解放军文职干部，正军级待遇。
彭丽媛是连续当选第八届、九届、十届中国人民政治协商会议的全国政协委员。2005年当选中华全国青联联合会副主席。2009年担任中国人民解放军总政治部歌舞团团长。2012年升任解放军艺术学院院长。
彭丽媛现在是解放军艺术学院院长，中国音乐家协会理事，中国歌剧研究会副主席，全国妇联执委，担任中国音乐学院客座教授，北京大学、上海师范大学兼职教授。', '1985年，获文化部举办的第一届“全国聂耳、星海声乐作品比赛“民族唱法组”金牌；同年获第三届“梅花奖”。
1986年，获得CCTV青年歌手电视大奖赛专业组冠军。
2005年9月，荣获林肯艺术中心艺术委员会颁发的“杰出艺术家”奖。 
2011年12月，获得首届中华艺文奖。 
2013年4月18日，入围《时代》杂志百大影响力人物 。
2013年5月22日，入选美国《福布斯》杂志2013年度“全球最具权力女性榜” 。
2017年12月6日，美国茱莉亚学院授予彭丽媛名誉博士学位。 ',NOW(), '1'),

(NULL,1,'人物类','唐纳德·特朗普','1968年进入其父的房地产公司工作，正式进军商界。在随后几十年间，特朗普开始建立自己的房地产王国，人称“地产之王”。除房地产外，特朗普将投资范围延伸到其他行业，包括开设赌场、高尔夫球场等。他还涉足娱乐界，是美国真人秀《名人学徒》等电视节目的主持人，并担任“环球小姐”选美大赛主席。美国杂志《福布斯》曾评估特朗普资产净值约为45亿美元，特朗普则称超过100亿美元。
特朗普在过去20年间分别支持过共和党和民主党各主要总统竞选者。2015年6月，特朗普以共和党竞选者身份正式参加2016年美国总统选举。此前，特朗普没有担任过公共职务。特朗普结过3次婚，育有5个子女.2016年11月9日，唐纳德·特朗普已获得了276张选举人票，超过270张选举人票的获胜标准，当选美国第45任总统。
美国当地时间2017年1月20日中午特朗普在美国首都华盛顿宣誓就职，正式成为美国第45任总统。','2015年12月7日，入围美国知名新闻周刊《时代》2015年度人物的候选名单。
2016年9月22日，彭博全球50大最具影响力人物排行榜，唐纳德·特朗普排第二名。 
2016年12月7日，美国《时代周刊》评选出2016年度人物，美国当选总统特朗普获选。 ',NOW(), '1'),

(NULL,1,'人物类','习近平访美','习近平访美', '习近平访美',NOW(), '1'),
(NULL,1,'人物类','习近平扶贫','习近平扶贫', '习近平扶贫',NOW(), '1'),
(NULL,1,'人物类','习特会','习特会', '习特会',NOW(), '1'),
(NULL,2,'人物类','习近平 彭丽媛','习近平 彭丽媛', '习近平 彭丽媛',NOW(), '1'),
(NULL,2,'人物类','特朗普访华','特朗普访华', '特朗普访华',NOW(), '1'),
(NULL,3,'人物类','特朗普医改','特朗普医改', '特朗普医改',NOW(), '1'),
(NULL,3,'人物类','特朗普穆斯林禁令','特朗普穆斯林禁令', '特朗普穆斯林禁令',NOW(), '1'),
(NULL,2,'人物类','特朗图夫人','特朗图夫人', '特朗图夫人',NOW(), '1'),
(NULL,1,'人物类','伊万卡特朗普','伊万卡特朗普','伊万卡特朗普',NOW(), '1'),


(NULL,1,'人物类','杨良辉2','杨良辉好帅2', null,NOW(), '1'),
(NULL,1,'人物类','杨良辉3','杨良辉好帅3', null,NOW(), '1');




drop table if exists `upvote`;
create table `upvote`
(
	upvote_id int(10) unsigned primary key auto_increment,

	keyword_id int(10) unsigned not null,
	keyword_name varchar(128) not null,
	upvote_count int(10) not null DEFAULT 0
);

insert into `upvote` values(null,1,'杨良辉',0),
(null,1,'杨良辉123',1),
(null,1,'杨良辉1',2),
(null,1,'杨良辉2',3),
(null,1,'杨良辉3',4);