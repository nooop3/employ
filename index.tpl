<!DOCTYPE HTML>
<html>    
<head>
    <meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />
    <meta http-equiv = "Content-Language" content = "zh-cn" />
    <meta name = "author" content = "zhendezhendong" />
    <meta name = "keyewords" content = "厦门大学, 厦门大学就业指导中心, 厦门大学就业指导, 厦门大学毕业生, 找工作, 需求信息, 招聘信息, 校园招聘, 厦大学生, 毕业, 就业指导, 厦门大学就业指导中心" />
    <meta name = "description" content = "厦门大学, 厦门大学就业指导中心, 厦门大学就业指导, 厦门大学毕业生, 找工作, 需求信息, 招聘信息, 校园招聘, 厦大学生, 毕业, 就业指导, 厦门大学就业指导中心"/>
    <link rel = "stylesheet" type = "text/css" href = "templates/mystyle.css"/>
    <title>厦大校园招聘信息</title>    
</head>

<body id = "activity-detail" class = "zh_CN ">
<div class = "rich_media">
  <div class = "rich_media_inner"> 
    <div id = "page-content"> 
      <div class = "rich_media_area_primary"> 
        <h2 class = "rich_media_title">厦门大学校园招聘信息</h2>
        <a href="templates/class/index.php" target="_blank">查课表</a> 
        <div class = "rich_media_content"> 
          {foreach from = $table  item = i}
            <section class = "post_feed">
              <section class = "post_feed_detail">
                <section class = "post_title">
                  招聘单位：{$i.title}
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
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>