<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-19 13:38:30
         compiled from ".\templates\employ\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28331555ac95f4e68b4-91977155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a107acf822784ac466a814816fafe3626f19084' => 
    array (
      0 => '.\\templates\\employ\\index.tpl',
      1 => 1432013906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28331555ac95f4e68b4-91977155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555ac95f869088_88043088',
  'variables' => 
  array (
    'table' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ac95f869088_88043088')) {function content_555ac95f869088_88043088($_smarty_tpl) {?><!DOCTYPE html>
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
          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <section class = "post_feed">
              <section class = "post_feed_detail">
                <section class = "post_title">
                  <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                </section> 
                <section class = "post_time">
                  时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>

                </section> 
                <section class = "post_place">
                  地点：<?php echo $_smarty_tpl->tpl_vars['i']->value['place'];?>

                </section> 
                <section class = "post_detail">
                  相关专业：<?php echo $_smarty_tpl->tpl_vars['i']->value['speciaty'];?>

                </section> 
                <section class = "post_summary">
                  
                </section> 
              </section>
              <section class = "post_more">
                <section class = "post_tag">
                  
                </section> 
                <section class = "post_from">
                  <a href = "<?php echo $_smarty_tpl->tpl_vars['i']->value['link'];?>
 ">详细信息</a>
                </section> 
              </section>               
            </section>
          <?php } ?>
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
</html><?php }} ?>
