<?php /*a:14:{s:70:"D:\PHPTutorial\WWW\shop\application\admin\view\auth\authgrouplist.html";i:1542008228;s:61:"D:\PHPTutorial\WWW\shop\application\admin\view\base\body.html";i:1542012909;s:61:"D:\PHPTutorial\WWW\shop\application\admin\view\base\head.html";i:1542014107;s:80:"D:\PHPTutorial\WWW\shop\application\admin\view\auth\authgrouplist\alone_css.html";i:1542008502;s:63:"D:\PHPTutorial\WWW\shop\application\admin\view\base\header.html";i:1541833621;s:61:"D:\PHPTutorial\WWW\shop\application\admin\view\base\left.html";i:1541834580;s:66:"D:\PHPTutorial\WWW\shop\application\admin\view\base\ncsc_path.html";i:1539702082;s:81:"D:\PHPTutorial\WWW\shop\application\admin\view\auth\authgrouplist\right_mian.html";i:1540368170;s:95:"D:\PHPTutorial\WWW\shop\application\admin\view\auth\authgrouplist\right_mian\gray_add_role.html";i:1542015478;s:96:"D:\PHPTutorial\WWW\shop\application\admin\view\auth\authgrouplist\right_mian\gray-edit-role.html";i:1540367954;s:61:"D:\PHPTutorial\WWW\shop\application\admin\view\base\page.html";i:1541655430;s:65:"D:\PHPTutorial\WWW\shop\application\admin\view\base\password.html";i:1541655439;s:79:"D:\PHPTutorial\WWW\shop\application\admin\view\auth\authgrouplist\alone_js.html";i:1542015465;s:68:"D:\PHPTutorial\WWW\shop\application\admin\view\base\common_base.html";i:1542012759;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
      <!-- 公共头部 -->
      <!-- 模板是 html
        file="base/head" 是不带 .html后缀
        !!!!  注意空格
     -->
      <!-- 头部加载基础静态文件 -->
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1" />
<meta charset="UTF-8">
<title>官方直营店 - 商家管理</title>
<link rel="stylesheet" type="text/css" href="/shop/public//static/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/shop/public//static/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="/shop/public//static/css/common.css" />
<link rel="stylesheet" type="text/css" href="/shop/public//static/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/shop/public//static/css/seller_center.css" />
<link rel="stylesheet" type="text/css" href="/shop/public//static/css/simple.switch.three.css" />
<style>
	.wrapper{width:1268px;}
	.help-block{color:red;}
	.ncsc-admin-info{cursor: pointer;}
	.ncsc-path a{text-decoration:none;}
	.is-upgrade{width: 7px;height: 7px;background: red;border-radius: 50%;position: absolute;z-index: 5;bottom: 9px;display: none;}
	.modal-header:hover{cursor: move;}
	</style>
<script src="/shop/public/static/js/jquery.js"></script>
<script src="/shop/public/static/js/bootstrap.js"></script>
<script src="/shop/public/static/js/bootstrapswitch.js"></script>
<script src="/shop/public/static/js/simple.switch.js"></script>
<script src="/shop/public/static/js/jquery.unobtrusive-ajax.min.js"></script>
<script src="/shop/public/static/js/common.js"></script>
<script src="/shop/public/static/js/seller.js"></script>
<script src="/shop/public/static/js/load_task.js"></script>
<!--<script src="/shop/public/static/js/load_bottom.js"></script>-->
<script src="/shop/public/static/js/jquery-ui.min.js"></script>
<script src="/shop/public/static/js/ns_tool.js"></script>
<script>
		/**
	 * 六星开源商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 湖南六星教育网络科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.sixstaredu.com 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 *
	 * @author : 小学生Pack老师
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
	var PLATFORM_NAME = "官方直营店";
	var ADMINIMG = "/public/admin/images";//后台图片请求路径
	var ADMINMAIN = "http://tp.23673.com/admin";//后台请求路径
	var UPLOAD = "";//上传文件根目录
	var PAGESIZE = "20";//分页显示页数
	var ROOT = "";//跟目录

	//上传文件路径
	var UPLOADGOODS = 'upload/goods/';//存放商品图片
	var UPLOADGOODSSKU = 'upload/goods_sku/';//存放商品SKU
	var UPLOADGOODSBRAND = 'upload/goods_brand/';//存放商品品牌图
	var UPLOADGOODSGROUP = 'upload/goods_group/';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'upload/goods_category/';////存放商品分类图片
	var UPLOADCOMMON = 'upload/common/';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'upload/avator/';//存放用户头像
	var UPLOADPAY = 'upload/pay/';//存放支付生成的二维码图片
	var UPLOADADV = 'upload/advertising/';//存放广告位图片
	var UPLOADEXPRESS = 'upload/express/';//存放物流图片
</script>

      <!-- 单独样式 -->
      
<script src="/shop/public//static/js/allselect.js" type="text/javascript"></script>
<script src="/shop/public//static/js/rolejs.js" type="text/javascript"></script>
<script src="/shop/public//static/js/art_dialog.source.js" type="text/javascript"></script>
<link href="/shop/public//static/css/default1.css" rel="stylesheet" type="text/css">
<link href="/shop/public//static/css/system.css" rel="stylesheet" type="text/css">
<style type="text/css">
  .mod-table-main .style0line td input {
    margin: 3px 0 5px 5px;
  }

  .overflow table td {
    border-bottom: 1px solid #ccc;
  }

  table {
    width: 100%;
  }

  .tr-Current ul {
    clear: both;
  }

  .tr-Current ul li {
    float: left;
  }

  .star {
    color: red;
    margin-right: 10px;
  }
</style>


  </head>

  <body onbeforeunload="return browserClose()">
      <!-- 导航栏 -->
      <!-- 导航栏 -->
<header class="ncsc-head-layout">
  <div class="wrapper">
    <div class="ncsc-admin">
      <div class="ncsc-admin-headimg">
        <img src="/shop/public//static/picture/default_user_portrait.gif" />
      </div>
      <span class="user-name ncsc-admin-info" data-toggle="dropdown"></span>
      <a class="ncsc-admin-a ncsc-admin-info" data-toggle="dropdown"><i class="ncsc-admin-i ncsc-admin-down"></i></a>
      <a class="ncsc-admin-a h40"><i class="ncsc-admin-line"></i></a>
      <a class="ncsc-admin-a" href="http://tp.23673.com" target="_blank"><i class="ncsc-admin-i ncsc-admin-home"></i></a>
      <a class="ncsc-admin-a" href="http://tp.23673.com/admin/login/logout" title="安全退出管理中心"><i class="ncsc-admin-i ncsc-admin-off"></i></a>
      <div class="user-operation dropdown-menu">
        <a href="javascript:;" title="修改密码" onclick="editpassword()"><i class="fa fa-wrench"></i>修改密码</a>
        <a href="javascript:;" title="更新缓存" onclick="delcache()"><i class="fa fa-send"></i>更新缓存</a>
      </div>
    </div>
    <div class="center-logo">
      <a href="http://tp.23673.com/admin"><img style="height:62px"
        src="/shop/public//static/picture/kaka.png" /></a>
    </div>
    <div class="index-search-container" style="position: relative;">
      <div class="index-sitemap" onclick="nav_open()">
        <a href="javascript:void(0);">导航管理<i class="icon-angle-down"></i></a>
        <div class="sitemap-menu" style="display: none; z-index: 1000;">
          <div class="title-bar" onclick="nav_close()">
            <h2>
              <i class="icon-sitemap"></i>管理导航<em></em>
            </h2>
            <span id="closeSitemap" class="close">X</span>
          </div>
          <div id="quicklink_list" class="content">
            <dl>
              <dt>用户</dt>
              <dd>
                <a href="http://tp.23673.com/admin/auth/userlist"> 用户列表</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/auth/authgrouplist"> 用户组列表</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/auth/userdetail"> 个人资料</a>
              </dd>
            </dl>
            <dl>
              <dt>首页</dt>
              <dd>
                <a href="http://tp.23673.com/admin/index/index"> 欢迎页</a>
              </dd>
            </dl>
            <dl>
              <dt>商品</dt>
              <dd>
                <a href="http://tp.23673.com/admin/goods/goodslist"> 商品列表</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/goods/addgoods"> 商品发布</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/goods/goodsgrouplist"> 商品标签</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/saleservice/consultlist"> 咨询管理</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/goods/goodscomment"> 商品评价</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/system/albumlist"> 相册管理</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/goods/recyclelist"> 商品回收站</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/goods/supplierlist"> 供货商</a>
              </dd>
            </dl>
            <dl>
              <dt>订单</dt>
              <dd>
                <a href="http://tp.23673.com/admin/order/orderlist"> 订单列表</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/express/expresscompany"> 物流公司</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/order/returnsetting"> 商家地址</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/shop/pickuppointlist"> 自提点管理</a>
              </dd>
            </dl>
            <dl>
              <dt>营销</dt>
              <dd>
                <a href="http://tp.23673.com/admin/promotion/coupontypelist"> 优惠券</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/promotion/mansonglist"> 满减送</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/promotion/getdiscountlist"> 限时折扣</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/promotion/fullshipping"> 满额包邮</a>
              </dd>
            </dl>
            <dl>
              <dt>店铺</dt>
              <dd>
                <a href="http://tp.23673.com/admin/shop/shopconfig"> 店铺设置</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/System/goodsRecommendClass"> 促销版块</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/config/shopadlist"> 广告管理</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/Config/shopNavigationList"> 导航管理</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/Shop/offlineStore"> 线下店铺</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/config/updatenotice"> 首页公告</a>
              </dd>
            </dl>
            <dl>
              <dt>用户</dt>
              <dd>
                <a href="http://tp.23673.com/admin/auth/userlist"> 用户列表</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/auth/authgrouplist"> 用户组列表</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/auth/userdetail"> 个人资料</a>
              </dd>
            </dl>
            <dl>
              <dt>资产</dt>
              <dd>
                <a href="http://tp.23673.com/admin/account/shopaccount"> 店铺收入</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/account/shopsalesaccount"> 销售概况</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/account/shopgoodssaleslist"> 商品分析</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/account/shopreport"> 运营报告</a>
              </dd>
              <dd>
                <a href="http://tp.23673.com/admin/account/shopgoodssalesrank"> 销售排行</a>
              </dd>
            </dl>
            <dl>
              <dt>系统</dt>
              <dd>
                <a href="http://tp.23673.com/admin/system/modulelist"> 模块列表</a>
              </dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="search-bar">
        <input type="hidden" name="act" value="search" />
        <input type="text" id="search_goods" name="keyword" placeholder="商品搜索" class="search-input-text" />
        <input type="submit" class="search-input-btn pngFix" onclick="search()" value="" />
      </div>
    </div>
    <nav class="ncsc-nav">

      <?php if(is_array($module_root) || $module_root instanceof \think\Collection || $module_root instanceof \think\Paginator): $i = 0; $__LIST__ = $module_root;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$root): $mod = ($i % 2 );++$i;?>
      <dl <?php if(($root['module_id'] == $pid)): ?>class="current_nav" <?php endif; ?>
      onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
      <dt>
        <a href=<?php echo url($root['module']."/".$root['controller']."/".$root['method']); ?>><?php echo htmlentities($root['module_name']); ?></a>
      </dt>
      <dd class="arrow"></dd>
      </dl>
      <?php endforeach; endif; else: echo "" ;endif; ?>

    </nav>
  </div>
</header>

      <!-- 主体-->
      <div class="MAIN" style="min-height: 94vh;">
          <!-- 左边导航栏 -->
          <!-- 左边菜单的加载 -->
<!-- <div class="LEFT">
  <div id="accordion2" class="accordion leftmenu">
    <div class="accordion-group">
      <div class="sidebarX">
        <img src="__PUBLIC__/static/picture/admin_left_logo.png" />
        <h2>首页</h2>
      </div>
      <div class="accordion-body collapse in" id="collapseOne">
        <ul class="nav nav-pills nav-stacked" id="left_menu-small">
          <li class="active">
            <h1></h1><a href="http://tp.23673.com/admin/index/index">欢迎页</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div> -->

<!-- 左边菜单的加载 -->
<div class="LEFT">
  <div id="accordion2" class="accordion leftmenu">
    <div class="accordion-group">
      <div class="sidebarX">
        <img src="/shop/public//static/picture/admin_left_logo.png" />
        <h2>商品</h2>
      </div>
      <div class="accordion-body collapse in" id="collapseOne">
        <ul class="nav nav-pills nav-stacked" id="left_menu-small">
          <?php if(is_array($module_root_secode) || $module_root_secode instanceof \think\Collection || $module_root_secode instanceof \think\Paginator): $i = 0; $__LIST__ = $module_root_secode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$root_array): $mod = ($i % 2 );++$i;?>
          <li
                  <?php if(($root_array['module_id'] == $module_id)): ?>
          class="active"
          <?php endif; ?>
          >
          <a href=<?php echo url($root_array['module']."/".$root_array['url']); ?>><?php echo htmlentities($root_array['module_name']); ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

          <!-- 导航栏右边 -->
          <div class="RIGHT">
            <div class="ncsc-path">
  <a href="http://tp.23673.com/admin"><i class="icon-desktop"></i>官方直营店</a>
  <i class="icon-angle-right"></i>
  <a href="http://tp.23673.com/admin/index/index">首页</a>
  <i class="icon-angle-right"></i>
  <!-- 需要加跳转链接用这个：http://tp.23673.com/admin/index/index -->
  <a href="javascript:;">欢迎页</a>
</div>

            
<div class="tabmenu">
	<ul class="tab pngFix">
		<li class="active"><a href="http://tp.23673.com/admin/auth/authgrouplist">用户组列表</a></li>
	</ul>
	<div class="right_side_operation">
		<ul>
			<li>
				<a class="nscs-table-handle_green" href="javascript:;" id="addrole">
					<i class="fa fa-plus-circle"></i>&nbsp;添加用户组
				</a>
			</li>
		</ul>
	</div>
</div>


            
<div class="main">
  <div class="mod-table">
    <div class="mod-table-head">
      <div class="con style0list">
        <table>
          <colgroup>
            <col style="width: 5%;">
            <col style="width: 50%;">
            <col style="width: 15%;">
            <col style="width: 15%;">
            <col style="width: auto;">
          </colgroup>
          <thead>
            <tr align="center">
              <th>
                <label style="margin-left: 5px;">
                  <input id="ckall" type="checkbox" onclick="CheckAll(event)">
                </label>
              </th>
              <th style="text-align: left;">用户组</th>
              <th>是否是管理员组</th>
              <th>操作</th>
            </tr>
          </thead>
          <colgroup>
            <col style="width: 5%;">
            <col style="width: 80%;">
            <col style="width: 15%;">
            <col style="width: auto;">
          </colgroup>
          <tbody id="grouplis" style="font-size: 12px;"></tbody>
        </table>
      </div>
    </div>
  </div>
  <input type="hidden" id="hidden_rolename" />
  <input type="hidden" name="sendCheckDatas" id="sendCheckDatas">
  
  <!-- 添加权限 -->
  <div id="gray-add-role" style="display: none;">
  <div style="width: 850px; height: 350px;" class="content scroll">
    <div>
      <!--content begin-->
      <div class="mod-form">
        <div class="con style0alert b10">
          <ul class="list-ul">
            <li class="list-li"><span class="star">*</span>用户组名称 <input type="text" value="" name="RoleName" id="RoleName" style="margin-left: 10px;"> <span class="prompt"></span>
            </li>
            <li class="list-li">
              <div class="float-l w100"><span class="star">*</span>权限 </div>
              <div class="overflow">
                <ul id="AllMenuConetnt">
                  <li id="contentPaltForm">
                    <input id="Add01" name="import" style="margin: -1px 0 0;" dir="title" type="checkbox" onclick="AllCheckBoxClick(event);"><span>平台</span> <!-- 列表 begin -->
                    <div class="mod-table l30">
                      <div class="mod-table-main">
                        <div class="con style0line" style="padding-left: 9px;">
                          <table class="table table-hover">
                            <colgroup>
                              <col style="width: 10%;">
                              <col style="width: 90%;">
                            </colgroup>
                            <tbody id="platFormContent">
                              <?php if(is_array($module_list) || $module_list instanceof \think\Collection || $module_list instanceof \think\Paginator): $i = 0; $__LIST__ = $module_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$module_root): $mod = ($i % 2 );++$i;?>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="add_per" dir="parent" id="<?php echo htmlentities($module_root['module_id']); ?>" value="<?php echo htmlentities($module_root['module_id']); ?>" onclick="AllCheckBoxClick(event);" />&nbsp;<?php echo htmlentities($module_root['module_name']); ?> </label>
                                  </div>
                                </td>
                                <td>
                                  <?php if(is_array($module_root['_child']) || $module_root['_child'] instanceof \think\Collection || $module_root['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $module_root['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$module_root_second): $mod = ($i % 2 );++$i;?>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="<?php echo htmlentities($module_root_second['module_id']); ?>" value="<?php echo htmlentities($module_root_second['module_id']); ?>" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;"><?php echo htmlentities($module_root_second['module_name']); ?></span></label>
                                      </div>
                                    </li>
                                      <?php if((!empty($module_root_second['_child']))): if(is_array($module_root_second['_child']) || $module_root_second['_child'] instanceof \think\Collection || $module_root_second['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $module_root_second['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$module_root_second__child): $mod = ($i % 2 );++$i;?>
                                        <li>
                                          <div class="cell">
                                            <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="<?php echo htmlentities($module_root_second__child['module_id']); ?>" value="<?php echo htmlentities($module_root_second__child['module_id']); ?>" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;"><?php echo htmlentities($module_root_second__child['module_name']); ?></span></label>
                                          </div>
                                        </li>
                                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                  </ul>
                                  <?php endforeach; endif; else: echo "" ;endif; ?>
                                </td>
                              </tr>
                              <?php endforeach; endif; else: echo "" ;endif; ?>
                          <!-- <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="add_per" dir="parent" id="120" value="120" onclick="AllCheckBoxClick(event);" />&nbsp;系统 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="121" value="121" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">模块列表</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="122" value="122" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加模块</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="123" value="123" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改模块</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="129" value="129" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">删除模块</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="add_per" dir="parent" id="126" value="126" onclick="AllCheckBoxClick(event);" />&nbsp;用户 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="127" value="127" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">用户列表</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="144" value="144" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">编辑用户</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="360" value="360" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加用户</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="128" value="128" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">用户组列表</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="133" value="133" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加用户组</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="add_per" dir="parent" id="149" value="149" onclick="AllCheckBoxClick(event);" />&nbsp;商品 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="139" value="139" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">相册管理</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="169" value="169" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">图片管理</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="151" value="151" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品发布</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="171" value="171" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品标签</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="172" value="172" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加商品标签</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="210" value="210" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改商品标签</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="334" value="334" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">咨询管理</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="478" value="478" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品评价</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="516" value="516" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品回收站</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="517" value="517" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">回收站列表</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="10007" value="10007" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">供货商</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="10008" value="10008" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加供货商</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="10009" value="10009" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改供货商</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="add_per" dir="parent" id="179" value="179" onclick="AllCheckBoxClick(event);" />&nbsp;营销 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="180" value="180" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">优惠券</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="186" value="186" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加优惠券</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="187" value="187" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改优惠券</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="195" value="195" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">赠品</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="196" value="196" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加赠品</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="197" value="197" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改赠品</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="198" value="198" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">满减送</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="199" value="199" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加满减满送</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="200" value="200" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">编辑满减送</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="201" value="201" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">限时折扣</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="202" value="202" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加限时折扣</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="203" value="203" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改限时折扣</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="446" value="446" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">积分管理</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="469" value="469" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">满额包邮</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="add_per" dir="parent" id="184" value="184" onclick="AllCheckBoxClick(event);" />&nbsp;订单 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="185" value="185" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">订单列表</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="190" value="190" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">订单详情</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="194" value="194" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">退款详情</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="189" value="189" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">物流公司</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="191" value="191" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加物流公司</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="192" value="192" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">物流公司修改</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="487" value="487" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">模板编辑</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="533" value="533" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">运费模板列表</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="534" value="534" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">编辑运费模板</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="471" value="471" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商家地址</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="472" value="472" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加或修改</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="528" value="528" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">自提点管理</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="529" value="529" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加自提点</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="530" value="530" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改自提点</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="add_per" dir="parent" id="218" value="218" onclick="AllCheckBoxClick(event);" />&nbsp;店铺 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="418" value="418" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">店铺设置</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="474" value="474" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">首页公告</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="678" value="678" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">广告管理</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="679" value="679" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加广告</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="680" value="680" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改广告</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="10006" value="10006" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">促销版块</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="10022" value="10022" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">导航管理</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="10023" value="10023" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加导航</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="10024" value="10024" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改导航</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="10025" value="10025" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">线下店铺</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="add_per" dir="parent" id="409" value="409" onclick="AllCheckBoxClick(event);" />&nbsp;资产 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="403" value="403" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">销售排行</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="405" value="405" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">商品销售统计</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="454" value="454" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">销售统计</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="457" value="457" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">销售明细</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="459" value="459" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">销售概况</span></label>
                                      </div>
                                    </li>

                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="462" value="462" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">运营报告</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="463" value="463" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品分析</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="460" value="460" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">热卖商品</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="684" value="684" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">店铺收入</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="726" value="726" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">提现</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="727" value="727" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加账户</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="729" value="729" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">账户列表</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="730" value="730" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改账户</span></label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="sonson" id="732" value="732" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">提现列表</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="add_per" dir="parent" id="467" value="467" onclick="AllCheckBoxClick(event);" />&nbsp;首页 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="add_per" dir="son" id="515" value="515" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">欢迎页</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>
                                </tr> -->
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div> <!-- 列表 end -->
                  </li>
                </ul>
              </div>
              <div class="float-l">
                <span class="prompt"></span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <button class="submit01-alert r10" style="display: none" id="addSubmit" type="submit">保存</button>
    </div>
  </div>
  <div class="btn">
    <div class="indiv" style="text-align:right;">
      <button class="submit01-alert r10" onclick="btn()" type="button" id="btn">保存</button>
      <button class="reset01-alert" onclick="roleClose()">关闭</button>
    </div>
  </div>
</div>





  <!-- 修改权限 -->
  <div id="gray-edit-role" style="display: none;">
  <div style="width: 850px; height: 350px;" class="content scroll">
    <div>
      <!--content begin-->
      <div class="mod-form ">
        <div class="con style0alert b10">
          <ul class="list-ul">
            <li class="list-li"><span class="star">*</span>用户组名称 <input type="text" name="EditRoleName" id="EditRoleName" class="w230">
              <span class="prompt"></span></li>
            <li class="list-li">
              <div class="float-l w100">
                <span class="star">*</span>权限
              </div>
              <div class="overflow">
                <ul id="EditAllMenuConetnt">
                  <li id="EditcontentPaltForm"><input id="Edit01" name="import" dir="top" type="checkbox" style="margin: -1px 0 0;" onclick="EditAllCheckBoxClick(event);"> <span for="Edit01"> 平台</span> <!-- 列表 begin -->
                    <div class="mod-table l30">
                      <div class="mod-table-main" style="padding-left: 9px;">
                        <div class="con style0line">
                          <table class="table table-hover">
                            <colgroup>
                              <col style="width: 10%;">
                              <col style="width: 90%;">
                            </colgroup>
                            <tbody id="EditplatFormContent">
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="permiss" dir="parent" id="120" value="120" onclick="AllCheckBoxClick(event);" />&nbsp;系统 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="121" value="121" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">模块列表</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="122" value="122" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加模块</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="123" value="123" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改模块</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="129" value="129" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">删除模块</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>

                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="permiss" dir="parent" id="126" value="126" onclick="AllCheckBoxClick(event);" />&nbsp;用户 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="127" value="127" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">用户列表</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="144" value="144" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">编辑用户</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="360" value="360" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加用户</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="128" value="128" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">用户组列表</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="133" value="133" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加用户组</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>

                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="permiss" dir="parent" id="149" value="149" onclick="AllCheckBoxClick(event);" />&nbsp;商品 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="139" value="139" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">相册管理</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="169" value="169" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">图片管理</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="151" value="151" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品发布</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="171" value="171" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品标签</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="172" value="172" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加商品标签</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="210" value="210" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改商品标签</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="334" value="334" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">咨询管理</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="478" value="478" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品评价</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="516" value="516" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品回收站</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="517" value="517" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">回收站列表</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="10007" value="10007" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">供货商</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="10008" value="10008" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加供货商</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="10009" value="10009" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改供货商</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>

                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="permiss" dir="parent" id="179" value="179" onclick="AllCheckBoxClick(event);" />&nbsp;营销 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="180" value="180" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">优惠券</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="186" value="186" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加优惠券</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="187" value="187" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改优惠券</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="195" value="195" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">赠品</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="196" value="196" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加赠品</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="197" value="197" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改赠品</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="198" value="198" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">满减送</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="199" value="199" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加满减满送</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="200" value="200" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">编辑满减送</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="201" value="201" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">限时折扣</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="202" value="202" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加限时折扣</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="203" value="203" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改限时折扣</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="446" value="446" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">积分管理</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="469" value="469" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">满额包邮</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>

                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="permiss" dir="parent" id="184" value="184" onclick="AllCheckBoxClick(event);" />&nbsp;订单 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="185" value="185" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">订单列表</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="190" value="190" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">订单详情</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="194" value="194" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">退款详情</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="189" value="189" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">物流公司</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="191" value="191" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加物流公司</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="192" value="192" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">物流公司修改</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="487" value="487" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">模板编辑</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="533" value="533" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">运费模板列表</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="534" value="534" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">编辑运费模板</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="471" value="471" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商家地址</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="472" value="472" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加或修改</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="528" value="528" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">自提点管理</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="529" value="529" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加自提点</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="530" value="530" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改自提点</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>

                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="permiss" dir="parent" id="218" value="218" onclick="AllCheckBoxClick(event);" />&nbsp;店铺 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="418" value="418" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">店铺设置</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="474" value="474" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">首页公告</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="678" value="678" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">广告管理</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="679" value="679" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加广告</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="680" value="680" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改广告</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="10006" value="10006" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">促销版块</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="10022" value="10022" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">导航管理</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="10023" value="10023" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加导航</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="10024" value="10024" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改导航</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="10025" value="10025" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">线下店铺</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>

                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="permiss" dir="parent" id="409" value="409" onclick="AllCheckBoxClick(event);" />&nbsp;资产 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="403" value="403" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">销售排行</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="405" value="405" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">商品销售统计</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="454" value="454" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">销售统计</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="457" value="457" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">销售明细</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="459" value="459" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">销售概况</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="462" value="462" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">运营报告</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="463" value="463" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">商品分析</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="460" value="460" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">热卖商品</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="684" value="684" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">店铺收入</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="726" value="726" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">提现</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="727" value="727" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">添加账户</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="729" value="729" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">账户列表</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="730" value="730" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">修改账户</span></label>
                                      </div>
                                    </li>

                                    <li>
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="sonson" id="732" value="732" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#666;">提现列表</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>

                              </tr>
                              <tr class="tr-Current">
                                <td>
                                  <div>
                                    <label> <input type="checkbox" name="permiss" dir="parent" id="467" value="467" onclick="AllCheckBoxClick(event);" />&nbsp;首页 </label>
                                  </div>
                                </td>
                                <td>
                                  <ul class="second">
                                    <li style="margin-right:10px;">
                                      <div class="cell">
                                        <label class="w120"><input type="checkbox" name="permiss" dir="son" id="515" value="515" onclick="AllCheckBoxClick(event);" />&nbsp;<span style="font-weight:normal;color:#000;">欢迎页</span></label>
                                      </div>
                                    </li>
                                  </ul>
                                </td>

                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div> <!-- 列表 end -->
                  </li>
                </ul>
              </div>
              <div class="float-l">
                <span class="prompt"></span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!--content end-->
      <button type="submit" id="EditSubmit" style="display: none" class="submit01 r10">保存</button>
    </div>
  </div>
  <input type="hidden" id="currentRoleID" name="EditRoleID"> <input type="hidden" name="EditsendCheckDatas" id="EditsendCheckDatas">
  <div class="btn">
    <div class="indiv" style="text-align:right;">
      <button class="submit01-alert r10" onclick="Editbtn()">保存</button>
      <button class="reset01-alert" onclick="btnCancel()">关闭</button>
    </div>
  </div>
</div>

</div>



            <script src="/shop/public//static/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
  <div class="pagination pagination-right">
    <ul>
      <li class="total-data">共0有条数据</li>
      <li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="20" data-default="20" />条</li>
      <li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
      <li><a id="prevPage" class="page-disable">上一页</a></li>
      <li id="pageNumber"></li>
      <li><a id="nextPage">下一页</a></li>
      <li><a id="lastPage">末页</a></li>
      <li class="page-count">共0页</li>
    </ul>
  </div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
  $(function() {
      try{
        $("#turn-ul").show();//显示分页
        LoadingInfo(1);//通过此方法调用分页类
      }catch(e){
        $("#turn-ul").hide();
      }

      //首页
      $("#beginPage").click(function() {
        if(jumpNumber!=1){
          jumpNumber = 1;
          LoadingInfo(1);
          changeClass("begin");
        }
        return false;
      });

      //上一页
      $("#prevPage").click(function() {
        var obj = $(".currentPage");
        var index = parseInt(obj.text()) - 1;
        if (index > 0) {
          obj.removeClass("currentPage");
          obj.prev().addClass("currentPage");
          jumpNumber = index;
          LoadingInfo(index);
          //判断是否是第一页
          if (index == 1) {
            changeClass("prev");
          } else {
            changeClass();
          }
        }
        return false;
      });

      //下一页
      $("#nextPage").click(function() {
        var obj = $(".currentPage");
        //当前页加一（下一页）
        var index = parseInt(obj.text()) + 1;
        if (index <= $("#page_count").val()) {
          jumpNumber = index;
          LoadingInfo(index);
          obj.removeClass("currentPage");
          obj.next().addClass("currentPage");
          //判断是否是最后一页
          if (index == $("#page_count").val()) {
            changeClass("next");
          } else {
            changeClass();
          }
        }
        return false;
      });

      //末页
      $("#lastPage").click(function() {
        jumpNumber = $("#page_count").val();
        if(jumpNumber>1){
          LoadingInfo(jumpNumber);
          $("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
          changeClass("next");
        }
        return false;
      });

      //每页显示页数
      $("#showNumber").blur(function(){
        if(isNaN($(this).val())){
          $("#showNumber").val(20);
          jumpNumber = 1;
          LoadingInfo(jumpNumber);
          return;
        }
        //页数没有变化的话，就不要再执行查询
        if(parseInt($(this).val()) != $(this).attr("data-default")){
          // 	jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
          $(this).attr("data-default",$(this).val());
          LoadingInfo(jumpNumber);
        }
        return false;
      }).keyup(function(event){
        if(event.keyCode == 13){
          if(isNaN($(this).val())){
            $("#showNumber").val(20);
            jumpNumber = 1;
            LoadingInfo(jumpNumber);
          }
          //页数没有变化的话，就不要再执行查询
          if(parseInt($(this).val()) != $(this).attr("data-default")){
            // 	jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
            $(this).attr("data-default",$(this).val());
            //总数据数量
            var total_count = parseInt($(".total-data").attr("data-total-count"));
            //计算用户输入的页数是否超过当前页数
            var curr_count = Math.ceil(total_count/parseInt($(this).val()));
            if( curr_count !=0 && curr_count < jumpNumber){
              jumpNumber = curr_count;//输入的页数超过了，没有那么多
            }
            LoadingInfo(jumpNumber);
          }
        }
        return false;
      });
  });
  //跳转页面
  function JumpForPage(obj) {
      jumpNumber = $(obj).text();
      LoadingInfo($(obj).text());
      $(".currentPage").removeClass("currentPage");
      $(obj).addClass("currentPage");
      if (jumpNumber == 1) {
        changeClass("prev");
      } else if (jumpNumber < parseInt($("#page_count").val())) {
        changeClass();
      } else if (jumpNumber == parseInt($("#page_count").val())) {
        changeClass("next");
      }
  }
	</script>

            <!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
    				<div class="common-tip-message js-common-tip">
    					<div class="inner"></div>
    				</div>
          </div>
      </div>
      <!--修改密码弹出框 -->
<div id="edit-password" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">修改密码</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="inputPassword"><span class="color-red">*</span>原密码</label>
        <div class="controls">
          <input type="password" id="pwd0" placeholder="请输入原密码" />
          <span class="help-block"></span>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword"><span class="color-red">*</span>新密码</label>
        <div class="controls">
          <input type="password" id="pwd1" placeholder="请输入新密码" />
          <span class="help-block"></span>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword"><span class="color-red">*</span>再次输入密码</label>
        <div class="controls">
          <input type="password" id="pwd2" placeholder="请输入确认密码" />
          <span class="help-block"></span>
        </div>
      </div>
      <div style="text-align: center; height: 20px;" id="show"></div>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn btn-info" onclick="submitPassword()" style="display:inline-block;">保存</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
  </div>
</div>

<!--修改密码弹框结束  -->
<div class="footer">
  <div id="faq" style="background: #eee; padding-top: 10px;">
    <div class="faq-wrapper"></div>
  </div>
  <div id="footer" class="wrapper">
    <p>
    </p>
    <p style="color:#333333; display: none;" id="bottom_copyright">Copyright © 2015-2025 六星开源商城&nbsp;版权所有 保留一切权利<br><a href="http://www.sixstaredu.com" target="_blank" style="text-decoration: none;color:#333333;">湖南六星教育网络科技有限公司&nbsp;</a>
      <span>提供技术支持&nbsp;0731-8557-3019</span>
    </p>
  </div>
</div>

<link rel="stylesheet" type="text/css" href="/shop/public//static/css/jquery-ui-private.css">
<script>
  var platform_shopname = '六星开源商城';
</script>

      <!-- 单独js -->
      
<script type="text/javascript">
  function showMessage(type, message, url, time) {
    if (url == undefined) {
      url = '';
    }
    if (time == undefined) {
      time = 2;
    }
    //成功之后的跳转
    if (type == 'success') {
      $("#dialog").dialog({
        buttons: {
          "确定,#51A351": function() {
            $(this).dialog('close');
          }
        },
        contentText: message,
        time: time,
        timeHref: url,
      });
    }
    //失败之后的跳转
    if (type == 'error') {
      $("#dialog").dialog({
        buttons: {
          "确定,#e57373": function() {
            $(this).dialog('close');
          }
        },
        time: time,
        contentText: message,
        timeHref: url,
      });
    }
  }
  function open_UpdateRoleManage(module_id_array, roleId, name) {
    popupOperate("gray-edit-role", "用户组设置", "gray-edit-role");
    $("#currentRoleID").val(roleId);
    $("#EditRoleName").val(name);
    if (roleId == 1) {
      $("[name = permiss]").attr("checked", true);
    } else {
      $("[name = permiss]").attr("checked", false);
      $('input[name = permiss]').each(function() {
        //alert($(this).attr('id'));
        if (module_id_array.indexOf($(this).attr('id')) >= 0) {
          //alert($(this).attr('id'));
          $(this).attr('checked', 'checked');
        }
      });
    }
  }

  //修改
  function update_RoleManage() {
    var roleId = $("#currentRoleID").val();
    var $roleName = $("#EditRoleName").val();
    var $array = $("#EditsendCheckDatas").val();
    if ($roleName == '') {
      showMessage("error", "请填写用户组名称");
      $("#btn").removeAttr("disabled");
      return;
    }
    if ($array == '') {
      showMessage("error", "请选择权限");
      return false;
    }
    $.ajax({
      url: "<?php echo url('admin/auth/updateusergroup'); ?>",
      type: "post",
      data: {
        "roleId"  : roleId,
        "array"   : $array,
        "roleName": $roleName
      },
      success: function(res) {
        //alert(JSON.stringify(res));
        if (res['code'] > 0) {
          window.location.reload();
        } else {
          showMessage("error", res['message']);
        }
      }
    })
  }

  //删除
  function deleteRole(group_id) {
    $("#dialog").dialog({
      buttons: {
        "确定": function() {
          $(this).dialog('close');
          $.ajax({
            url: "http://tp.23673.com/admin/auth/deletesystemusergroup",
            data: {
              "group_id": group_id
            },
            type: "post",
            dataType: "json",
            success: function(data) {
              //alert(group_id);
              if (data['code'] > 0) {
                $("#dialog").dialog({
                  buttons: {
                    "确定": function() {
                      $(this).dialog('close');
                    }
                  },
                  time: 2,
                  contentText: data['message']
                })
                window.location.reload();
              } else {
                $("#dialog").dialog({
                  buttons: {
                    "确定,#e57373": function() {
                      $(this).dialog('close');
                    }
                  },
                  contentText: data['message']
                })
              }
            }
          });
        },
        "取消,#e57373": function() {
          $(this).dialog('close');
        }
      },
      contentText: "确定删除吗"
    });
  }

  //添加
  function add_RoleManage() {
    var $roleName = $("#RoleName").val();
    var array = $("#sendCheckDatas").val();
    if ($roleName == '') {
      showMessage("error", "请填写用户组名称");
      $("#btn").removeAttr("disabled");
      return;
    }
    if (array == '') {
      showMessage("error", "请选择权限");
      $("#btn").removeAttr("disabled");
      return;
    }
    $.ajax({
      url: "<?php echo url('admin/auth/addusergroup'); ?>",
      type: "post",
      data: {
        "array": array,
        "roleName": $roleName
      },
      success: function(res) {
        if (res['code'] > 0) {
          window.location.reload();
        } else {
        //  showMessage("error", res['msg']);
          $("#btn").removeAttr("disabled");
        }
      }
    })
  }

  //查询 pageNum：显示那一页   where：条件
  function LoadingInfo(page_index, page_size) {
    $.ajax({
      url: "<?php echo url('admin/auth/authgrouplist'); ?>",
      type: "post",
      data: {
        "page_index": page_index,
        "page_size": $("#showNumber").val()
      },
      dataType: "json",
      success: function(res) {
        //console.log(res);
        $("#grouplis").children("tr").remove();
        for (var i = 0; i < res['data'].length; i++) {
          var array = res['data'][i];
          var name = array["group_name"];
          var roleId = array["group_id"];
          var is_system = array["is_system"];
          var module_id_array = array['module_id_array'];
          if (is_system == 0) {
            var is_system_name = '否';
          } else {
            var is_system_name = '是';
          }
          $("#hidden_rolename").val($("#hidden_rolename").val() + "," + name);
          var strBeg = "<tr class='tr-Current' align='center'><td><div class='cell'><label ><input name='sub' type='checkbox' value=" +
            roleId +
            " is_system=" +
            is_system +
            " onclick='CheckThis()'></label>";
          strBeg = strBeg +
            "</div></td><td align='left'><div class='cell'>" +
            name +
            "</div></td><td>" +
            is_system_name +
            "</td>";
          if (is_system == 0) {
            strBeg = strBeg +
              "<td><div class='cell'><div class='mod-operate'><div class='con style0editel'><a class='edit' href='javascript:void(0)' onclick='open_UpdateRoleManage(&#39;" +
              module_id_array +
              "&#39;," +
              roleId +
              ",&#39;" +
              name +
              "&#39;)'>编辑</a>  <a class='del' href='javascript:void(0)' onclick='javascript:deleteRole(" +
              roleId + ")'>删除</a>";
          } else {
            strBeg = strBeg +
              "<td>";
          }
          strBeg = strBeg + "</div></div></div></td></tr>";
          $('#grouplis').append(strBeg);
        }
        initPageData(res["page_count"], res['data'].length, res['total_count']);
        $("#pageNumber").html(pagenumShow(jumpNumber, $("#page_count").val(), 5));
      }
    })
  }
  // enter 键模糊查询 bug 2013-11-16 14:10:06
  document.onkeypress = function() {
    var iKeyCode = -1;
    if (arguments[0]) {
      iKeyCode = arguments[0].which;
    } else {
      iKeyCode = event.keyCode;
    }
    if (iKeyCode == 13) {
      if ($("#txtSearch").val() == null || $("#txtSearch").val() == "请输入用户组名称..." || $("#txtSearch").val().trim() == '') {
        roleManageList(1);
      } else {
        roleManageList(1, $("#txtSearch").val());
      }
    }
  }
  // 查询
  function txtSearch() {
    if ($("#txtSearch").val() == null || $("#txtSearch").val() == "请输入用户组名称..." || $("#txtSearch").val().trim() == '') {
      roleManageList(1);
    } else {
      roleManageList(1, $("#txtSearch").val());
    }
  }
</script>


      <!-- 尾部js -->
      <script src="/shop/public//static/js/ns_common_base.js"></script>
<script>
  $(function() {
    $('.index-sitemap > a').bind("click", function() {
      $(".sitemap-menu-arrow").slideDown("slow");
      $(".sitemap-menu").slideDown("slow");
    });
    $('.add-quickmenu > a').bind("click", function() {
      $(".sitemap-menu-arrow").slideDown("slow");
      $(".sitemap-menu").slideDown("slow");
    });
    $('#closeSitemap').bind("click", function() {
      $(".sitemap-menu-arrow").slideUp("fast");
      $(".sitemap-menu").slideUp("fast");
    });
  });

  function add_nav_class(doc) {
    $(doc).addClass("hover");
  }

  function remove_nav_class(doc) {
    $(doc).removeClass("hover");
  }

  // 显示导航管理
  function nav_open() {
    var one = new Array();
    var two = new Array();
    var three = new Array();
    $(".ncsc-head-layout .sitemap-menu dl").each(function(c, e) {
      if (c < 5) {
        one.push($(e).height());
      } else if (c > 4 && c < 10) {
        two.push($(e).height());
      } else if (c > 9 && c < 15) {
        three.push($(e).height());
      }
    })
    $(".ncsc-head-layout .sitemap-menu dl").each(function(c, e) {
      if (c < 5) {
        var one_max_height = Math.max.apply(Math, one);
        $(e).height(one_max_height);
      } else if (c > 4 && c < 10) {
        var two_max_height = Math.max.apply(Math, two);
        $(e).height(two_max_height);
      } else if (c > 9 && c < 15) {
        var three_max_height = Math.max.apply(Math, three);
        $(e).height(three_max_height);
      }
    })
    $(".sitemap-menu-arrow").show();
    $(".sitemap-menu").show();
  }
  // 隐藏导航管理
  function nav_close() {
    $(".sitemap-menu-arrow").hide();
    $(".sitemap-menu").hide();
  }
  // 系统注销菜单的控制
  var closetimer = 0;

  function exitSystemOver() {
    cancelColseMenu();
    $("#exit_System").css("display", "block");
  };

  function exitSystemOut() {
    closetimer = window.setTimeout(mclose, 600);
  };

  function cancelColseMenu() {
    window.clearTimeout(closetimer);
    closetimer = null;
  };

  function mclose() {
    $("#exit_System").css("display", "none");
  }

  function browserClose() {
      
  }
  // onbeforeunload或者onunload
</script>

  </body>
</html>
