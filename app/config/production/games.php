<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 腾讯游戏点券下单页
 * eng_name英文名称 用于初始化大区服务器
 * 暂不考虑 product_list 游戏下的所有产品列表,默认为点券时没有这个参数；当有多种点券时，有参数。如QQ华夏：点券，金元宝，银元宝，铜元宝
 * //'QQ华夏'=>array('eng_name'=>'hx','product_list'=>array('QQ华夏点券'=>100,'QQ华夏金元宝'=>1/30,'QQ华夏银元宝'=>1/10,'QQ华夏铜元宝'=>1),'type'=>0),
 */
$config['games']=array(
    //不需要type
    "5"=>array("name"=>"炫舞","serverUrl"=>"http://x5.qq.com/comm-htdocs/js/game_area/utf8verson/x5_server_select_utf8.js","serverName"=>"X5ServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"天堂","serverUrl"=>"http://tiantang.qq.com/comm-htdocs/js/game_area/utf8verson/tiantang_server_select_utf8.js","serverName"=>"TIANTANGServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"丝路英雄","serverUrl"=>"http://sl.qq.com/comm-htdocs/js/game_area/utf8verson/sl_server_select_utf8.js","serverName"=>"SLServerSelect","amountUnit"=>"丝路币"),
    ""=>array("name"=>"战争前线","serverUrl"=>"http://wf.qq.com/comm-htdocs/js/game_area/utf8verson/wf_server_select_utf8.js","serverName"=>"WFServerSelect","amountUnit"=>"点券"),
    "12"=>array("name"=>"战地之王AVA","serverUrl"=>"http://ava.qq.com/comm-htdocs/js/game_area/utf8verson/ava_server_select_utf8.js","serverName"=>"AVAServerSelect","amountUnit"=>"点券"),
    "37"=>array("name"=>"烽火战国","serverUrl"=>"http://zg.qq.com/comm-htdocs/js/game_area/utf8verson/zg_server_select_utf8.js","serverName"=>"ZGServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"自由幻想","serverUrl"=>"http://ffo.qq.com/comm-htdocs/js/game_area/utf8verson/ffo_server_select_utf8.js","serverName"=>"FFOServerSelect","amountUnit"=>"彩玉点"),
    "34"=>array("name"=>"大明龙权","serverUrl"=>"http://dm.qq.com/comm-htdocs/js/game_area/utf8verson/dm_server_select_utf8.js","serverName"=>"DMServerSelect","amountUnit"=>"点券"),
    "3"=>array("name"=>"穿越火线","serverUrl"=>"http://cf.qq.com/comm-htdocs/js/game_area/utf8verson/cf_server_select_utf8.js","serverName"=>"CFServerSelect","amountUnit"=>"CF点"),
    "7"=>array("name"=>"QQ飞车","serverUrl"=>"http://speed.qq.com/comm-htdocs/js/game_area/utf8verson/speed_server_select_utf8.js","serverName"=>"SPEEDServerSelect","amountUnit"=>"点券"),
    "40"=>array("name"=>"幻想世界","serverUrl"=>"http://hxsj.qq.com/comm-htdocs/js/game_area/utf8verson/hxsj_server_select_utf8.js","serverName"=>"HXSJServerSelect","amountUnit"=>"金子"),
    ""=>array("name"=>"七雄争霸","serverUrl"=>"http://7.qq.com/comm-htdocs/js/game_area/utf8verson/7_main_server_select_utf8.js","serverName"=>"QXZBServerSelect","amountUnit"=>"元宝"),
    "23"=>array("name"=>"QQ西游","serverUrl"=>"http://qqxy.qq.com/comm-htdocs/js/game_area/utf8verson/qqxy_server_select_utf8.js","serverName"=>"QQXYServerSelect","amountUnit"=>"元宝"),
    "1"=>array("name"=>"英雄联盟","serverUrl"=>"http://lol.qq.com/comm-htdocs/js/game_area/utf8verson/lol_server_select_utf8.js","serverName"=>"LOLServerSelect","amountUnit"=>"点券"),
    "8"=>array("name"=>"御龙在天","serverUrl"=>"http://yl.qq.com/comm-htdocs/js/game_area/utf8verson/yl_server_select_utf8.js","serverName"=>"YLServerSelect","amountUnit"=>"金子"),
    "4"=>array("name"=>"剑灵","serverUrl"=>"http://gameact.qq.com/comm-htdocs/js/game_area/utf8verson/bns_server_select_utf8.js","serverName"=>"BNSServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"轩辕传奇","serverUrl"=>"http://xy.qq.com/comm-htdocs/js/game_area/utf8verson/xy_server_select_utf8.js","serverName"=>"XYServerSelect","amountUnit"=>"金币"),
    ""=>array("name"=>"王朝霸域","serverUrl"=>"http://wang.qq.com/comm-htdocs/js/game_area/utf8verson/wcby_server_select_utf8.js","serverName"=>"WCBYServerSelect","amountUnit"=>"黄金"),
    ""=>array("name"=>"NBA2KOL","serverUrl"=>"http://nba2k.qq.com/comm-htdocs/js/game_area/utf8verson/nba2k_server_select_utf8.js","serverName"=>"NBA2KServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"新天堂II","serverUrl"=>"http://tiantang2.qq.com/comm-htdocs/js/game_area/utf8verson/tiantang2_server_select_utf8.js","serverName"=>"TIANTANG2ServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"QQ九仙","serverUrl"=>"http://9.qq.com/comm-htdocs/js/game_area/9_server_select.js","charset"=>"gbk","serverName"=>"_9ServerSelect","amountUnit"=>"元宝"),
    ""=>array("name"=>"球球堂","serverUrl"=>"http://qqt.qq.com/comm-htdocs/js/game_area/qqt_server_select.js","charset"=>"gbk","serverName"=>"QQTServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"糖之物语","serverUrl"=>"http://tang.qq.com/comm-htdocs/js/game_area/tg_server_select.js","charset"=>"gbk","serverName"=>"TGServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"生化战场","serverUrl"=>"http://gameact.qq.com/comm-htdocs/js/game_area/utf8verson/woz_server_select_utf8.js","serverName"=>"WOZServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"烈焰行动","serverUrl"=>"http://gameact.qq.com/comm-htdocs/js/game_area/utf8verson/btr_server_select_utf8.js","serverName"=>"BTRServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"将魂","serverUrl"=>"http://gameact.qq.com/comm-htdocs/js/game_area/utf8verson/jh_server_select_utf8.js","serverName"=>"JHServerSelect","amountUnit"=>"元宝"),
    ""=>array("name"=>"枪神纪","serverUrl"=>"http://gameact.qq.com/comm-htdocs/js/game_area/utf8verson/tps_server_select_utf8.js","serverName"=>"TPSServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"QQ封神记","serverUrl"=>"http://gameact.qq.com/comm-htdocs/js/game_area/utf8verson/fs_server_select_utf8.js","serverName"=>"FSServerSelect","amountUnit"=>"元宝"),
    ""=>array("name"=>"QQ仙灵","serverUrl"=>"http://gameact.qq.com/comm-htdocs/js/game_area/utf8verson/h2_server_select_utf8.js","serverName"=>"H2ServerSelect","amountUnit"=>"金子"),
    ""=>array("name"=>"星之物语","serverUrl"=>"http://ss.qq.com/comm-htdocs/js/game_area/utf8verson/ss_server_select_utf8.js","serverName"=>"SSServerSelect","amountUnit"=>"星币"),
    ""=>array("name"=>"逆战","serverUrl"=>"http://gameact.qq.com/comm-htdocs/js/game_area/utf8verson/nz_server_select_utf8.js","serverName"=>"NZServerSelect","amountUnit"=>"逆战点"),
    ""=>array("name"=>"漫游七雄争霸","serverUrl"=>"http://7.qq.com/comm-htdocs/js/game_area/utf8verson/7_manyou_server_select_utf8.js","serverName"=>"QXZBServerSelect","amountUnit"=>"元宝"),
    ""=>array("name"=>"万王之王3","serverUrl"=>"http://3.qq.com/comm-htdocs/js/game_area/utf8verson/3_server_select_utf8.js","serverName"=>"_3ServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"QQ幻想","serverUrl"=>"http://fo.qq.com/comm-htdocs/js/game_area/utf8verson/fo_server_select_utf8.js","serverName"=>"FOServerSelect","amountUnit"=>"彩玉"),
    ""=>array("name"=>"就要K歌","serverUrl"=>"http://ktv.qq.com/comm-htdocs/js/game_area/utf8verson/ktv_server_select_utf8.js","serverName"=>"KTVServerSelect","amountUnit"=>"K币"),
    ""=>array("name"=>"大明游戏专区","serverUrl"=>"http://dm.qq.com/comm-htdocs/js/game_area/utf8verson/dmyxzq_server_select_utf8.js","serverName"=>"DMYXZQServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"刀剑2","serverUrl"=>"http://d2.qq.com/comm-htdocs/js/game_area/utf8verson/dj2_server_select_utf8.js","serverName"=>"DJ2ServerSelect","amountUnit"=>"刀玉"),
    ""=>array("name"=>"纵横九州","serverUrl"=>"http://9z.qq.com/comm-htdocs/js/game_area/utf8verson/9z_server_select_utf8.js","serverName"=>"_9ZServerSelect","amountUnit"=>"元宝"),
    ""=>array("name"=>"斗战诛天","serverUrl"=>"http://dzzt.qq.com/comm-htdocs/js/game_area/utf8verson/dzzt_server_select_utf8.js","serverName"=>"DZZTServerSelect","amountUnit"=>"元宝"),
    ""=>array("name"=>"Q游记","serverUrl"=>"http://17q.qq.com/comm-htdocs/js/game_area/utf8verson/qyj_server_select_utf8.js","serverName"=>"QYJServerSelect","amountUnit"=>"点券"),
    ""=>array("name"=>"自由足球","serverUrl"=>"http://fsf.qq.com/comm-htdocs/js/game_area/utf8verson/fsf_server_select_utf8.js","serverName"=>"FSFServerSelect","amountUnit"=>"自由币")
);

$config['other_games'] = array(


);