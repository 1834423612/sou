<?php
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    <link rel="icon" href="favicon.ico">
    <title>kjch导航 | 一款快捷、实用、方便的起始页</title>
    <meta name="keywords" content="网站导航,导航页,浏览器主页,自定义"/>
    <meta name="description" content="">
    <script src="js/hotokoto.js"></script>
    <script src="./font_1230786_swt4kkie8ym/iconfont.js"></script>  
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jQuery.rTabs.js"></script>
    <script src="js/js.cookie.js"></script>
    <script src="js/sou.js"></script>
	<script src="js/test.js"></script>
	<script type="text/javascript" src="time.js"></script>  
    <link rel="stylesheet" href="./font_1230786_swt4kkie8ym/iconfont.css">
    <link rel="stylesheet" href="./font_1614281/iconfont.css">  
	<link rel="stylesheet" href="./css/sou.css">
	<link rel="stylesheet" href="./css/app.e199aaf6.css">
	
</head>
<body onload="Time()">

<!-- 侧栏 -->
<div id="menu"><i></i></div>

<div class="side closed">

    <div class="tab-nav j-tab-nav">

        <a href="javascript:void(0);" class="current">书签</a>

        <a href="javascript:void(0);">自定义</a>

        <a href="javascript:void(0);">偏好</a>

    </div>

    <div class="tab-con">

        <div class="j-tab-con">
            <!--书签-->
            <div class="tab-con-item" style="display:block;">

                <div class="list">
                    <ul>
                        <!------>
                        <li class="title"><i class="iconfont icon-youxiang"></i> 邮箱</li>
                        <li><a rel="nofollow" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i
                                class="iconfont icon-gmail" style="color: #f03;"></i>Gmail</a></li>
                        <li><a rel="nofollow" href="https://outlook.live.com/mail/" target="_blank"><i
                                class="iconfont icon-windows" style="color: #059;"></i>Hotmail</a></li>
                        <li><a rel="nofollow" href="https://mail.163.com/" target="_blank"><i
                                class="iconfont icon-wangyi" style="color: #169;"></i>网易邮箱</a></li>
                        <li><a rel="nofollow" href="https://mail.sina.com.cn/" target="_blank"><i
                                class="iconfont icon-xinlang" style="color: #e6162d;"></i>新浪邮箱</a></li>
                        <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank"><i
                                class="iconfont icon-QQ" style="color: #f05;"></i>QQ邮箱</a></li>
                        <li><a rel="nofollow" href="https://qiye.aliyun.com/" target="_blank"><i
                                class="iconfont icon-yunyouxiang" style="color: #f15534;"></i>阿里邮箱</a></li>
                        <!------>
                        <li class="title"><i class="iconfont icon-msg"></i> 社交</li>
                        <li><a rel="nofollow" href="https://www.weibo.com" target="_blank"><i
                                class="iconfont icon-weibo" style="color: #e6162d;"></i>微博</a></li>
                        <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank"><i
                                class="iconfont icon-zhihu" style="color: #0084ff;"></i>知乎</a></li>
                        <li><a rel="nofollow" href="https://www.douban.com/" target="_blank"><i
                                class="iconfont icon-douban" style="color: #072;"></i>豆瓣</a></li>
                        <li><a rel="nofollow" href="https://www.instagram.com" target="_blank"><i
                                class="iconfont icon-instagram" style="color: #93009f;"></i>Instagram</a></li>
                        <li><a rel="nofollow" href="https://www.twitter.com" target="_blank"><i
                                class="iconfont icon-twitter" style="color: #00bcff;"></i>Twitter</a></li>
                        <li><a rel="nofollow" href="https://www.facebook.com" target="_blank"><i
                                class="iconfont icon-facebook" style="color: #4267b2;"></i>Facebook</a></li>
                        <!------>
                        <li class="title"><i class="iconfont icon-shipin"></i> 视频媒体</li>
                        <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank"><i
                                class="iconfont icon-youtube" style="color:#f03;"></i>Youtube</a></li>
                        <li><a rel="nofollow" href="https://v.qq.com/" target="_blank"><i
                                class="iconfont icon-tengxunshipin" style="color:#2a0;"></i>腾讯视频</a></li>
                        <li><a rel="nofollow" href="https://www.youku.com/" target="_blank"><i
                                class="iconfont icon-youku" style="color:#09e;"></i>优酷</a></li>
                        <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank"><i
                                class="iconfont icon-aiqiyi" style="color:#1d0;"></i>爱奇艺</a></li>
                        <li><a rel="nofollow" href="http://www.zmz2019.com/" target="_blank"><i
                                class="iconfont icon-zimu" style="color: #067;"></i>字幕组</a></li>
                        <li><a rel="nofollow" href="http://www.acfun.cn/index.html" target="_blank"><i
                                class="iconfont icon-acfun" style="color:#f33;"></i>ACFUN</a></li>
                        <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><i
                                class="iconfont icon-bili" style="color:#09e;"></i>哔哩哔哩</a></li>
                        <li><a rel="nofollow" href="/movies/" target="_blank"><i class="iconfont icon-yunbo"
                                                                                 style="color:#0bf;"></i>影视搜索</a>
                        </li>
                        <li><a rel="nofollow" href="/tv/" target="_blank"><i class="iconfont icon-dianshi"
                                                                             style="color:#9ae;"></i>直播电视</a>
                        </li>
                        <li><a rel="nofollow" href="https://music.yyv.me/" target="_blank"><i
                                class="iconfont icon-yinle" style="color:#f4a;"></i>音乐解析</a></li>
                        <!------>
                        <li class="title"><i class="iconfont icon-gouwuche"></i> 购物</li>
                        <li><a rel="nofollow" href="https://www.taobao.com" target="_blank"><i
                                class="iconfont icon-taobao" style="color: #ff6019;"></i>淘宝网</a></li>
                        <li><a rel="nofollow" href="https://dyartstyle.com/juhuasuan/" target="_blank"><i
                                class="iconfont icon-juhuasuan" style="color: #E61414;"></i>聚划算</a></li>
                        <li><a rel="nofollow" href="https://dyartstyle.com/temai/" target="_blank"><i
                                class="iconfont icon-temai" style="color: #ff6019;"></i>淘宝特卖</a></li>
                        <li><a rel="nofollow"
                               href="https://mobile.yangkeduo.com/duo_cms_mall.html?pid=8742514_71211367&cpsSign=CM_190605_8742514_71211367_92fdd9f7fb637fec599bf556f263ed1f&duoduo_type=2&launch_wx=1"
                               title="拼多多手机端专属商城，超低价商品火热抢购中，更有超多大额优惠券持续发放，一键立抢>>" target="_blank"><i
                                class="iconfont icon-99" style="color: #f83e3e;"></i>拼多多</a></li>
                        <li><a rel="nofollow" href="https://www.jd.com" target="_blank"><i
                                class="iconfont icon-jingdong" style="color: #e33333;"></i>京东</a></li>
                        <li><a rel="nofollow" href="https://www.suning.com/" target="_blank"><i
                                class="iconfont icon-suning" style="color: #f90;"></i>苏宁易购</a></li>
                        <li><a rel="nofollow" href="http://you.163.com/" target="_blank"><i
                                class="iconfont icon-yanxuan" style="color: #B4A078;"></i>网易严选</a></li>
                        <li><a rel="nofollow" href="https://www.amazon.cn/" target="_blank"><i
                                class="iconfont icon-amazon" style="color: #fc9b18;"></i>亚马逊</a></li>
                        <li><a rel="nofollow" href="http://www.dangdang.com/" target="_blank"><i
                                class="iconfont icon-dangdang" style="color: #ff2832;"></i>当当</a></li>
                        <li><a rel="nofollow" href="https://wat.dyartstyle.com/" target="_blank"><i
                                class="iconfont icon-wat" style="color: #fe2e52;"></i>吾爱淘</a></li>
                        <!------>
                        <li class="title"><i class="iconfont icon-sheji"></i> 设计视觉</li>
                        <li><a rel="nofollow" href="https://web.yyv.me/" target="_blank"><i
                                class="iconfont icon-daohang1"></i>设计导航</a></li>
                        <li><a rel="nofollow" href="https://www.pinterest.com/" target="_blank"><i
                                class="iconfont icon-pinterest" style="color:#e02;"></i>Pinterest</a></li>
                        <li><a rel="nofollow" href="https://www.behance.net/" target="_blank"><i
                                class="iconfont icon-behance" style="color:#56f;"></i>Behance</a></li>
                        <li><a rel="nofollow" href="https://www.dribbble.com/" target="_blank"><i
                                class="iconfont icon-dribbble" style="color:#e48;"></i>Dribbble</a></li>
                        <li><a rel="nofollow" href="https://huaban.com/" target="_blank"><i
                                class="iconfont icon-huaban" style="color:#f06;"></i>花瓣</a></li>
                        <li><a rel="nofollow" href="https://www.zcool.com.cn/" target="_blank"><i
                                class="iconfont icon-zhanku" style="color:#f90;"></i>站酷</a></li>
                        <li><a rel="nofollow" href="https://www.iconfont.cn/" target="_blank"><i
                                class="iconfont icon-iconfont" style="color: #ff6019;"></i>阿里图标</a></li>
                        <li><a rel="nofollow" href="https://www.iconfinder.com/" target="_blank"><i
                                class="iconfont icon-eye"></i>IconFinder</a></li>
                        <li><a rel="nofollow" href="https://uiiiuiii.com/" target="_blank"><i
                                class="iconfont icon-jiaocheng" style="color:#0aa;"></i>优设教程</a></li>
                        <!------>
                        <li class="title"><i class="iconfont icon-ai-tool"></i> 工具</li>
                        <li><a rel="nofollow" href="/ip/" target="_blank"><i class="iconfont icon-wangluo"
                                                                             style="color: #02f;"></i>IP查询</a>
                        </li>
                        <li><a rel="nofollow" href="https://translate.google.cn/?hl=zh-CN" target="_blank"><i
                                class="iconfont icon-fanyi" style="color: #02f;"></i>谷歌翻译</a></li>
                        <li><a rel="nofollow" href="http://www.slimego.cn/" target="_blank"><i
                                class="iconfont icon-shilaimu" style="color: #0f89c2;"></i>史莱姆</a></li>
                        <li><a rel="nofollow" href="https://gugeji.com/" target="_blank"><i
                                class="iconfont icon-google" style="color:#4285f4"></i>镜像</a></li>
                        <li><a rel="nofollow" href="https://feedly.com" target="_blank"><i
                                class="iconfont icon-feedly" style="color: #11dd00;"></i>Feedly</a></li>
                        <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank"><i
                                class="iconfont icon-baiduyun" style="color: #148bfe;"></i>百度网盘</a></li>
                        <li><a rel="nofollow" href="https://www.baiduwp.com" target="_blank"><i
                                class="iconfont icon-cloud-download" style="color: #148bfe;"></i>网盘解析</a></li>
                        <li><a rel="nofollow" href="https://www.mdeditor.com/" target="_blank"><i
                                class="iconfont icon-md" style="color:#09f;"></i>MD编辑器</a></li>
                        <li><a rel="nofollow" href="https://miku.tools/" target="_blank"><i
                                class="iconfont icon-ai-tool"></i>Miku工具</a></li>
                        <li><a rel="nofollow" href="http://cubic-bezier.com" target="_blank"><i
                                class="iconfont icon-quxian" style="color: #f08;"></i>贝赛尔曲线</a></li>
                        <li><a rel="nofollow" href="/base64/" target="_blank"><i class="iconfont icon-base64"
                                                                                 style="color:#1d0;"></i>Base64</a>
                        </li>
                        <li><a rel="nofollow" href="https://javascriptobfuscator.com/Javascript-Obfuscator.aspx"
                               target="_blank"><i class="iconfont icon-jshunxiao" style="color: #48c;"></i>JS混淆器</a>
                        </li>
                        <li><a rel="nofollow" href="https://ping.pe" target="_blank"><i
                                class="iconfont icon-wangluo1" style="color:#1d0;"></i>Ping.pe</a></li>
                        <li><a rel="nofollow" href="https://ping.chinaz.com/" target="_blank"><i
                                class="iconfont icon-pingup" style="color:#2361ad;"></i>站长Ping</a></li>
                        <li><a rel="nofollow" href="https://apkdl.in/" target="_blank"><i
                                class="iconfont icon-anzhuo" style="color:#094;"></i>APK下载</a></li>
                        <!------>
                        <li class="title"><i class="iconfont icon-kongzhitai"></i> 开发</li>
                        <li><a rel="nofollow" href="http://www.w3school.com.cn/" target="_blank"><i
                                class="iconfont icon-h5" style="color:#c03;"></i>W3school</a></li>
                        <li><a rel="nofollow" href="https://github.com/" target="_blank"><i
                                class="iconfont icon-github"></i>Github</a></li>
                        <li><a rel="nofollow" href="https://codepen.io/" target="_blank"><i
                                class="iconfont icon-codepen"></i>Codepen</a></li>
                        <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank"><i
                                class="iconfont icon-theater-masks" style="color:#f03;"></i>吾爱破解</a></li>
                        <li><a rel="nofollow" href="https://segmentfault.com/" target="_blank"><i
                                class="iconfont icon-msg" style="color:#096;"></i>SF思否</a></li>
                        <li><a rel="nofollow" href="https://cdnjs.com/" target="_blank"><i
                                class="iconfont icon-cdnjs" style="color: #e52;"></i>CdnJs</a></li>
                        <li><a rel="nofollow" href="https://fontawesome.com/icons?d=gallery&m=free"
                               target="_blank"><i class="iconfont icon-font-awesome" style="color: #4af;"></i>Font
                            A.</a></li>
                        <li><a rel="nofollow" href="https://msdn.itellyou.cn/" target="_blank"><i
                                class="iconfont icon-windows" style="color: #48c;"></i>MSDN下载</a></li>
                        <li><a rel="nofollow" href="https://dash.cloudflare.com/" target="_blank"><i
                                class="iconfont icon-cloudflare" style="color: #f37f20;"></i>C. flare</a></li>
                        <li><a rel="nofollow" href="https://www.swiper.com.cn/" target="_blank"><i
                                class="iconfont icon-S" style="color:#065fe3;"></i>Swiper</a></li>
						<!--
							<li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-write"></use></svg> 图标制作</li>
						    <li><a rel="nofollow" href="https://www.iconfont.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-iconfont"></use></svg>阿里图标</a></li>
							<li><a rel="nofollow" href="http://www.zuohaotu.com/image-to-ico.aspx" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-change"></use></svg>图片转ico</a></li>
							<li><a rel="nofollow" href="http://www.zuohaotu.com/svg/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-svg"></use></svg>在线制作svg</a></li>
							<li><a rel="nofollow" href="https://www.aconvert.com/cn/image/png-to-svg" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-png"></use></svg>png转svg</a></li>
						-->
                    </ul>
                </div>

            </div>
            <!--书签 end-->
			
            <!--设置-->
            <div class="tab-con-item">

                <div class="set">
                    <!--搜索引擎设置-->
                    <div class="set_blocks">
                        <div class="set_blocks_title">搜索引擎</div>
                        <div class="set_blocks_content">
                            <div class="se_list">
                                <table class="se_list_table">
                                    <tr>
                                        <td><span class="iconfont iconhome"></span></td>
                                        <td>百度</td>
                                        <td>
                                            <button class="set_se_default" value="baidu"><span
                                                    class="iconfont iconstrore-add"></span></button>
                                            &nbsp;
                                            <button class="edit_se" value="baidu"><span
                                                    class="iconfont iconbook-edit"></span></button>
                                            &nbsp;
                                            <button class="delete_se" value="baidu"><span
                                                    class="iconfont icondelete"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>谷歌</td>
                                        <td>
                                            <button class="set_se_default" value="google"><span
                                                    class="iconfont iconstrore-add"></span></button>
                                            &nbsp;
                                            <button class="edit_se" value="google"><span
                                                    class="iconfont iconbook-edit"></span></button>
                                            &nbsp;
                                            <button class="delete_se" value="google"><span
                                                    class="iconfont icondelete"></span></button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="se_add_preinstall">
                                <button class="set_se_list_add"><span class="icon iconfont icontianjia"></span>新增
                                </button>
                                <button class="set_se_list_preinstall"><span class="icon iconfont iconjinggao"></span>重置
                                </button>
                            </div>
                            <div class="add_content se_add_content" style="display:none;">
                                <div class="from_items">
                                    <p><b>顺序:</b></p>
                                    <input type="hidden" name="key_inhere">
                                    <input type="number" name="key" placeholder="填入正整数">
                                </div>
                                <div class="from_items">
                                    <p><b>名称:</b></p>
                                    <input type="text" name="title" placeholder="网站名称">
                                </div>
                                <div class="from_items">
                                    <p><b>网址:</b></p>
                                    <input type="url" name="url" placeholder="以“https:”或“http:”开头的URL">
                                </div>
                                <div class="from_items">
                                    <p><b>搜索字段名:</b></p>
                                    <input type="text" name="name" placeholder="URL中“?”后的字段">
                                </div>
                                <div class="from_items">
                                    <p><b>图标:</b></p>
                                    <input type="text" name="img" placeholder="图片地址">
                                </div>
                                <div class="from_items button">
                                    <button class="se_add_save">保存</button>
                                    <button class="se_add_cancel">取消</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--搜索引擎设置 end-->
                    <!--快捷方式设置-->
                    <div class="set_blocks">
                        <div class="set_blocks_title">快捷方式</div>
                        <div class="set_blocks_content">
                            <div class="quick_list">
                                <table class="quick_list_table">
                                    <tr>
                                        <td>1.&nbsp;</td>
                                        <td>哔哩哔哩</td>
                                        <td>
                                            <button class="edit_quick" value="1">
                                                <span class="iconfont iconbook-edit"></span>
                                            </button>
                                            &nbsp;
                                            <button class="delete_quick" value="1">
                                                <span class="iconfont icondelete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.&nbsp;</td>
                                        <td>知乎</td>
                                        <td>
                                            <button class="edit_quick" value="2">
                                                <span class="iconfont iconbook-edit"></span>
                                            </button>
                                            &nbsp;
                                            <button class="delete_quick" value="2">
                                                <span class="iconfont icondelete"></span>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="se_add_preinstall">
                                <button class="set_quick_list_add">
                                    <span class="icon iconfont icontianjia"></span>新增
                                </button>
                                <button class="set_quick_list_preinstall">
                                    <span class="icon iconfont iconjinggao"></span>重置
                                </button>
                            </div>
                            <div class="add_content quick_add_content" style="display:none;">
                                <div class="from_items">
                                    <p><b>顺序:</b></p>
                                    <input type="hidden" name="key_inhere">
                                    <input type="number" name="key" placeholder="填入正整数">
                                </div>
                                <div class="from_items">
                                    <p><b>名称:</b></p>
                                    <input type="text" name="title" placeholder="网站名称">
                                </div>
                                <div class="from_items">
                                    <p><b>网址:</b></p>
                                    <input type="url" name="url" placeholder="以“https:”或“http:”开头的URL">
                                </div>
                                <div class="from_items">
                                    <p><b>图标:</b></p>
                                    <input type="text" name="img" placeholder="图片地址">
                                </div>
                                <div class="from_items button">
                                    <button class="quick_add_save">保存</button>
                                    <button class="quick_add_cancel">取消</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--快捷方式设置 end-->
                    <!--主题设置-->
                    <div class="set_blocks">
                        <div class="set_blocks_title">主题</div>
                        <div class="set_blocks_content">
                            <div id="themes">
                                <input type="button" class="but-ordinary but-active" value="明亮">
                                <button class="but-ordinary set-theme" data-id="2">黑暗</button>
                            </div>
                        </div>
                    </div>
                    <!--主题设置 end-->
                    <!--壁纸设置-->
                    <div class="set_blocks">
                        <div class="set_blocks_title">壁纸</div>
                        <div class="set_blocks_content">
                            <div class="from_container">
                                <div class="from_row">
                                    <div class="from_row_title"><b>壁纸设置</b></div>
                                    <div class="from_row_content">
                                        <div id="wallpaper">
                                            <input type="radio" class="set-wallpaper" name="wallpaper-type" value="1"> 默认
                                            <input type="radio" class="set-wallpaper" name="wallpaper-type" value="2"> 无
                                            <input type="radio" class="set-wallpaper wallpaper-custom" name="wallpaper-type" value="3"> 自定义
                                        </div>
                                    </div>

                                </div>
                                <div id="wallpaper_url" style="display:none;">
                                    <div class="from_row">
                                        <div class="from_row_title"><b>自定义图片地址(可将下方链接复制到此处)：</b></div>
                                        <div class="from_row_content">
                                            <input type="text" name="wallpaper-url" id="wallpaper-url">
                                        </div>
                                    </div>
									<a>白天壁纸：<p>"./bg-day.jpeg"</p></a>
									<a>夜间壁纸：<p>"./bg-night.jpeg"</p></a>
                                    <div class="from_row">
                                        <div class="from_row_content right">
                                            <button class="but-ordinary wallpaper-submit">保存</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--壁纸设置 end-->
                    <!--导入|导出-->
                    <div class="set_blocks">
                        <div class="set_blocks_title">数据备份</div>
                        <div class="set_blocks_content">
                            <div>
                                <button class="but-ordinary" id="my_data_in">导入</button>
                                <button class="but-ordinary" id="my_data_out">导出</button>
                                <input type="file" id="my_data_file" name="file" style="display: none">
                            </div>
                        </div>
                    </div>
                    <!--导入|导出 end-->
                </div>

            </div>
            <!--设置 end-->
            <!--我的-->
            <div class="tab-con-item">
                <p><b><pre style="color: skyblue">正在努力开发中!敬请期待 
                ଘ(੭ˊ꒳​ˋ)੭✧ </pre></b></p>
                <!--<div class="me">
                    <p><img src="./icon/user.png"></p>
                </div>-->
            </div>
            <--我的 end-->
        </div>

    </div>

</div>
<!-- 侧栏 end -->

<!--天气插件-->
    <div class="mywth">
        <div class="wea_hover">
            <div class="wea_in wea_top"></div>
            <div class="wea_in wea_con">
                <ul></ul>
            </div>
            <div class="wea_in wea_foot">
                <ul></ul>
            </div>
        </div>
        <!--天气插件，基于和风天气接口制作-->
    </div>    
<div id="he-plugin-simple"></div>
<script>
WIDGET = {
  CONFIG: {
    "modules": "10234",
    "background": 5,
    "tmpColor": "FFFFFF",
    "tmpSize": "19",
    "cityColor": "FFFFFF",
    "citySize": 16,
    "aqiSize": 16,
    "weatherIconSize": 24,
    "alertIconSize": 18,
    "padding": "10px 10px 10px 10px",
    "shadow": "1",
    "language": "auto",
    "borderRadius": "10",
    "fixed": "true",
    "vertical": "middle",
    "horizontal": "center",
    "left": 10,
    "top": 10,
    "key": "e0f665c6ac024996a612dcb1fb0f15ce"
  }
}
</script>
<script src="https://widget.qweather.net/simple/static/js/he-simple-common.js?v=2.0"></script>
<!--天气插件 End-->

<!--搜索框和书签-->
<div id="content">
    <div class="con">

        <!--一般搜索框上面都有的图片↓-->
         <!--<div class="shlogo"></div>-->
       <div class="title" id="title" style="transform: scale(1);">
       <h1 id="titleText" style="color: white; text-align: center"><div id="Time"></div></h1>
         </div>      
         <div class="sou">
            <form class="search" action="https://www.baidu.com/s">
                <img class="se" src="./icon/baidu.ico" title="点击切换搜索引擎">
                <input class="wd" type="text" name="wd" placeholder="请输入搜索内容" autocomplete="off">
                <button class="s">
                    <i style="font-size: 20px;" class="iconfont icon-sousuo"></i>
                </button>
            </form>
            <div id="keywords" style="display: none;"></div>
            <div class="search-engine" style="display: none;">
                <div class="search-engine-head">
                    <strong class="search-engine-tit">选择搜索引擎：</strong>
                </div>
                <span class="search-engine-tip"></span>
                <ul class="search-engine-list">
                    <li class="se-li" data-url="https://www.baidu.com/s" data-name="wd" data-img="./icon/baidu.ico">
                        <img src="./icon/baidu.ico">百度
                    </li>
                    <li class="se-li" data-url="https://www.google.com/search" data-name="q" data-img="./icon/google_1.png">
                        <img src="./icon/google_1.png">谷歌
                    </li>
                    <li class="se-li" data-url="https://cn.bing.com/search" data-name="q" data-img="./icon/bing.ico">
                        <img src="./icon/bing.ico">必应
                    </li>
                    <li class="se-li" data-url="https://www.dogedoge.com/results" data-name="q" data-img="./icon/doge_ico.png">
                        <img src="./icon/doge_ico.png">多吉
                    </li>
                    <li class="se-li" data-url="https://mijisou.com" data-name="q" data-img="./icon/mijisou.png">
                        <img src="./icon/mijisou.png">秘迹
                    </li>
                    <li class="se-li" data-url="https://seeres.com/search" data-name="q" data-img="./icon/seeres.png">
                        <img src="./icon/seeres.png">seeres*
                    </li>
                </ul>
            </div>
            <div class="quick-div">
                <ul class="quick-ul">
                    <li class="quick" data-s="bilibili" title="哔哩哔哩 (゜-゜)つロ 干杯~">
                        <a href="https://www.bilibili.com/">
                            <i style="background-image: url(./icon/bilibili.png);"></i>
                            哔哩哔哩
                        </a>
                    </li>
                    <li class="quick" data-s="github" title="GitHub">
                        <a href="https://github.com/">
                            <i style="background-image: url(./icon/github.ico);"></i>
                            GitHub
                        </a>
                    </li>
                    <li class="quick" data-s="v2ex" title="V2EX">
                        <a href="https://www.v2ex.com/">
                            <i style="background-image: url(./icon/v2ex.png);"></i>
                            V2EX
                        </a>
                    </li>
                    <li class="quick" data-s="steam" title="Steam">
                        <a href="https://store.steampowered.com/">
                            <i style="background-image: url(./icon/steam.ico);"></i>
                            Steam
                        </a>
                    </li>
					<li class="quick" data-s="scp" title="scp">
					    <a href="http://scp-wiki-cn.wikidot.com/">
					        <i style="background-image: url(./icon/scp.png);"></i>
					        scp基金会
					    </a>
					</li>
                    <li class="quick" data-s="kjch" title="快捷、实用、无广告的导航网">
                        <a href="https://daohang.kjchmc.cn/">
                            <i style="background-image: url(https://daohang.kjchmc.cn/favicon.ico);"></i>
                            kjch导航
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
        <div class="foot" style="height: 110px; color: #FFFFFF;"><b>
		<script>
			var txtUrl = "hotokoto/all.txt";        // 一言文本本件(TXT)位置
			window.onload = function(){
				getQuotesTxt( 'yiyan', txtUrl);       // 获取一言
				window.setInterval( "getQuotesTxt( 'yiyan', txtUrl)", 30000);    // 加个定时器自动刷新
			}
			
			// Text 文本文件中随机获取一行
			function getQuotesTxt( id, url) {
				var i = 0,
					resultTxt = "",
					resultArr = [];
					
				if( !url ) { return "error"}
				x = fetch(url)
				.then(function(response) {
					return response.text();
				})
				.then(function(text) {
					resultArr = text.toString().split(/[\n]/);          
					i = Math.floor( Math.random()*resultArr.length );
					resultTxt = resultArr[i];                         
					document.getElementById( id ).innerHTML = resultTxt;
				});
			}
		</script>
              <p><b style="color: #FFFFFF;">一言：<div id="yiyan" class="yiyan" style="color: #FFFFFF;"></div></b></p>
              <pre>    
              </pre>
              <a href="http://cloud.zhuimyun.cn/" target="_blank"  style="color: #F5F5F5;">佳城互联</a> | 
              <a href="./" style="color: #F5F5F5;">kjch导航</a> | 
              <a href="https://github.com/1834423612/sou/" target="_blank" style="color: #F5F5F5;">在Github开源</a> |
              <a href="./update.html" style="color: #F5F5F5;">计划任务</a><br>
              © 2020-<?php echo date("Y") ?> by <a href="./" color="#ffffff"><b style="color: #F5F5F5;">kjch况佳城</a></b> . All rights reserved.</div></style>
        </b></div>
<!--搜索框和书签 end-->

<!--统计数据-->
    <?php
 //文件名字
 $filename = "ip.txt";
  if (isset($_SERVER['HTTP_CLIENT_IP']))
  {
  $clientip = $_SERVER['HTTP_CLIENT_IP'];
  }elseif (isset($_SERVER['HTTP_X_FORWARD_FOR']))
  {
  $clientip = $_SERVER['HTTP_X_FORWARD_FOR'];
  }else
  {
  $clientip = $_SERVER['REMOTE_ADDR'];
  }
  //打开文件（文件不存在自动建立）
  if (!$fp = fopen($filename, "a+"))
  {
   echo "不能打开文件$";
  exit;
  }
 //写入的时候还判断是否已经有重复数据
 while(!feof($fp))
 {
  $line = fgets($fp);
  if($line == ($clientip."\n"))
  { 
   exit;  //有重复数据就退出；
  }
 }
 // 写入文件
  if(!fwrite($fp,$clientip."\n"))
  {
   echo "不能写入到文件$filename" ;
  exit;
  }
  //已经完成写入文件
  fclose($fp);
 ?>
<!-- end-->

</body>
</html>