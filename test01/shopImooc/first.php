
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" charset="utf-8" />
<title>无标题文档</title>
<link href="styles/main.css" rel="stylesheet"type="text/css" />
<script src="scripts/setHomeSetFav.js" type="text/javascript" charset="gb2312"></script>
<script src="scripts/myfocus-2.0.1.min.js" type="text/javascript"></script>
<script src="scripts/mf-pattern/mF_YSlider.js" type="text/javascript" ></script>
<link href="scripts/mf-pattern/mF_YSlider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
myFocus.set(
{id:'picBox'
}
)
</script>
</head>
<body>
<div class="top">
<div class="top_content">
<ul>
<li><a href="#">联系我们</a></li>
<li><a href="#" onclick="AddFavorite(window.loattion,document.title)">加入收藏</a></li>
<li><a href="#" onclick="SetHome(window.location)">设为首页</a></li>
</ul>
</div>
</div><!--top结束-->
<div class="wrap">
<div class="logo">
<div class="logo_left">
<img src="images/logo.jpg" alt="慕课网"/>
</div>
<div class="logo_right">
<img src="images/tel.jpg" alt="服务热线"/>24小时服务热线<span class="tel">123-456-7890</span>
</div>
</div><!--logo结束-->


<div class="nav">
<div class="nav_left">
</div>
<div class="nav_mid">
<div class="nav_mid_left">
<ul>
<li><a href="#">首页</a></li>
<li><a href="list.php">科研团队</a></li>
<li><a href="list.php">成果展示</a></li>
<li><a href="list.php">人才培养</a></li>
<li><a href="list.php">招生信息</a></li>
</ul>
</div>
<div class="nav_mid_right">
<form action="" method="post">
<input type="text" class="search_text"/>
</form>
</div>
</div><!--nav_mid结束-->
<div class="nav_right">
</div>
</div><!--nav结束-->
<div class="ad" id="picBox">
<div class="loading"><img src="images/loading.gif" alt="请稍后..."/></div>
<div class="pic">
<ul>
<li><img src="images/ad2.jpg"/></li>
<li><img src="images/ad3.jpg"/></li>
<li><img src="images/ad4.jpg"/></li>
</ul>
</div>
</div><!--ad结束-->
<div class="main">
<div class="news">
<div class="title">
<h2 class="title_left">新闻中心</h2> <span class="title_right"><a href="news.php">More&gt;&gt;</a></span>
</div><!--title结束-->
<div class="pic_news">
<img src="images/news.jpg"/>
<h2><a href="news.php">520慕女神来喊你表白</a></h2>
<p>活动时间：5月20日—5月25日<br />
获奖公布时间：5月26日<br />
<a href="news.php">Learn More>></a></p>
</div><!--pic_new结束-->
<div class="news_list">
<ul>
<li><span>2017-4-10</span><a href="news.php">【慕客访谈 用户篇】“有为屌丝”在路上</a></li>
<li><span>2017-4-05</span><a href="news.php">【有奖活动】给父亲的三行书信</a></li>
<li><span>2017-1-05</span><a href="news.php">《程序猿，请晒出你的童年》活动获奖公告</a></li>
</ul>
</div><!--news_list结束-->
</div><!--news结束-->
<div class="course">
<div class="title">
<h2 class="title_left">课程中心</h2><span class="title_right"><a href="news.php">More&gt;&gt;</a></span>
</div><!--title结束-->
<div class="course_pic">
<img src="images/css.jpg" /><h2><a href="news.php">css圆角进化论</a></h2><p>CSS圆角的实现，经历了三大发展阶段：背景图片方式、CSS2.0+php标签模拟、CSS3.0圆角属性）。本案例详细讲解每一种的实现方式，并对实现的优缺点进行对比分析。</p>
</div><!--course_pic结束-->
<div class="course_type">
<ul>
<li>php开发</li>
<li>c开发</li>
<li>c++开发</li>
<li>java开发</li>
</ul>
</div><!--course_type结束-->
</div><!--course结束-->
<div class="setbar">
<div class="video">
<div class="title"><h2 class="title_left">媒体聚焦</h2></div><!--title结束-->
<div class="video_content">
<embed src='http://player.youku.com/player.php/sid/XMjY0OTUwMjQ2MA==/v.swf'
    allowFullScreen='true' quality='high' width='220' height='140' align='middle' allowScriptAccess='always'
        type='application/x-shockwave-flash'></embed>
        </div><!--video_content结束-->
        </div><!--video结束-->
        <div class="sidebar_ad">
        <img src="images/app.jpg"/>
        </div><!--sidebar_ad结束-->
        </div><!--setbar结束-->
        </div><!--main结束-->
        </div><!--wrap结束-->
        <div class="copyright">
        <div class="copyright_content">
        <ul>
        <li><a href="#">关于</a>
        <ul>
        <li><a href="#">品牌故事</a></li>
        <li><a href="#">联系我们</a></li>
        <li><a href="#">加入我们</a></li>
        <li><a href="#">版权声明</a></li>
        </ul>
        </li>
        <li><a href="#">课程</a>
        <ul>
        <li><a href="#">PHP开发</a></li>
        <li><a href="#">Java开发</a></li>
        <li><a href="#">前端开发</a></li>
        <li><a href="#">Andriod开发</a></li>
        </ul>
        </li>
        <li><a href="#">关注</a>
        <ul>
        <li><a href="#">新浪微博</a></li>
        <li><a href="#">腾讯微博</a></li>
        <li><a href="#">企业微信</a></li>
        <li><a href="#">qq空间</a></li>
        </ul>
        </li>
        <li><a href="#">留言</a>
        <ul>
        <li><a href="#">意见反馈</a></li>
        <li><a href="#">问题留言</a></li>
        <li><a href="#">媒体联络</a></li>
        <li><a href="#">在线客服</a></li>
        </ul>
        </li>
        <li><a href="#"><img src="images/weixin.png"/>微信关注</a>
        <ul>
        <li><img src="images/qrcode.jpg"/></li>
        </ul>
        </li>
        </ul>
        </div><!--copyright_content结束-->
        </div><!--copyright结束-->
        </body>