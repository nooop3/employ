<!DOCTYPE html>
<html>    
<head>
    <meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />
    <meta http-equiv = "Content-Language" content = "zh-cn" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta name = "author" content = "zhendezhendong" />
    <meta name = "keyewords" content = "厦门大学, 厦门大学就业指导中心, 厦门大学就业指导, 厦门大学毕业生, 找工作, 需求信息, 招聘信息, 校园招聘, 厦大学生, 毕业, 就业指导, 厦门大学就业指导中心" />
    <meta name = "description" content = "厦门大学, 厦门大学就业指导中心, 厦门大学就业指导, 厦门大学毕业生, 找工作, 需求信息, 招聘信息, 校园招聘, 厦大学生, 毕业, 就业指导, 厦门大学就业指导中心"/>
    <link rel = "stylesheet" type = "text/css" href = "templates/employ/mystyle.css"/>
    <title>厦大校园招聘信息</title>    
</head>

<body id = "activity-detail" class = "zh_CN ">
<div class = "rich_media">
  <div class = "rich_media_inner"> 
    <div id = "page-content"> 
      <div class = "rich_media_area_primary"> 
        <h2 class = "rich_media_title" style="text-align:center">厦门大学校园招聘信息</h2>
        <div class = "rich_media_content"> 
          {foreach from = $table  item = i}
            <section class = "post_feed">
              <section class = "post_feed_detail">
                <section class = "post_title">
                  {$i.title}
                </section> 
                <section class = "post_time">
                  时间：{$i.time}
                </section> 
                <section class = "post_place">
                  地点：{$i.place}
                </section> 
                <section class = "post_detail">
                  相关专业：{$i.speciaty}
                </section> 
                <section class = "post_summary">
                  {* 链接：{$i.link} *}
                </section> 
              </section>
              <section class = "post_more">
                <section class = "post_tag">
                  {* 文章序号：{$i.postID} *}
                </section> 
                <section class = "post_from">
                  <a href = "{$i.link} ">详细信息</a>
                </section> 
              </section>               
            </section>
          {/foreach}
          <div class="post_feed">
            <div class="cotainer col-md-offset-1 col-xs-offset-1">
              <p><strong>想要及时获取招聘信息，订阅吧！</strong></p>
              <div style="text-align:right;">
                <a type="button" href="subscribe.php" style="color: #fff;background-color: #286090;border-color: #204d74;padding: 6px 12px;margin-bottom: 0;font-size: 14px;font-weight: normal;text-align: center;white-space: nowrap;vertical-align: middle;">邮件订阅</a>
              </div>
            </div>
          </div>         
        </div>
        <div id="footer" style="text-align:center">
          Copyright © 2015  <a href="http://weibo.com/zhendezhendong">真的振东</a>  All Rights Reserved </br>
        </div>
      </div>   
    </div>
  </div>
</div>
</body>
</html>