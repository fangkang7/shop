<?php /*a:10:{s:65:"D:\PHPTutorial\WWW\shop\application\admin\view\auth\userlist.html";i:1540382998;s:61:"D:\PHPTutorial\WWW\shop\application\admin\view\base\body.html";i:1542012909;s:61:"D:\PHPTutorial\WWW\shop\application\admin\view\base\head.html";i:1542014107;s:63:"D:\PHPTutorial\WWW\shop\application\admin\view\base\header.html";i:1541833621;s:61:"D:\PHPTutorial\WWW\shop\application\admin\view\base\left.html";i:1541834580;s:66:"D:\PHPTutorial\WWW\shop\application\admin\view\base\ncsc_path.html";i:1539702082;s:61:"D:\PHPTutorial\WWW\shop\application\admin\view\base\page.html";i:1541655430;s:65:"D:\PHPTutorial\WWW\shop\application\admin\view\base\password.html";i:1541655439;s:74:"D:\PHPTutorial\WWW\shop\application\admin\view\auth\userlist\alone_js.html";i:1541999984;s:68:"D:\PHPTutorial\WWW\shop\application\admin\view\base\common_base.html";i:1542012759;}*/ ?>
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
      
	<style>.style0list tbody td{border:0;vertical-align: middle;}</style>

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
		<li class="active"><a href="http://tp.23673.com/admin/auth/userlist">用户列表</a></li>
	</ul>
	<div class="right_side_operation">
		<ul>
			<li><a class="nscs-table-handle_green" href="http://tp.23673.com/admin/auth/adduser"><i class="fa fa-plus-circle"></i>&nbsp;添加用户</a></li>
		</ul>
	</div>
</div>
<hr class="tabmenu_hr" style="border:1px solid #00C0FF;margin:0 0px 10px 20px;" />


            
		<div class="main">
				<div class="mod-table">
					<div class="mod-table-head">
						<table class="mytable">
							<tr>
								<th width="10%"><input type="text" id='search_text' placeholder="请输入用户名" /><input type="button" onclick="searchData()" value="搜索" /></th>
							</tr>
						</table>
						<div class="style0list">
							<table>
								<colgroup>
									<col style="width: 5%;">
									<col style="width: 15%;">
									<col style="width: 10%;">
									<col style="width: 10%;">
									<col style="width: 10%;">
									<col style="width: 10%;">
									<col style="width: 10%;">
									<col style="width: 20%;">
								</colgroup>
								<thead>
									<tr align="center">
										<th><label><input type="checkbox" onclick="CheckAll(this)"></label></th>
										<th>用户头像</th>
										<th class="tal">登录账号</th>
										<th class="tal">手机号</th>
										<th class="tal">邮箱</th>
										<th class="tal">所属用户组</th>
										<th>状态</th>
										<th>操作</th>
									</tr>
								</thead>
								<colgroup>
									<col style="width: 5%;">
									<col style="width: 10%;">
									<col style="width: 10%;">
									<col style="width: 10%;">
									<col style="width: 10%;">
									<col style="width: 10%;">
									<col style="width: 10%;">
									<col style="width: 20%;">
								</colgroup>
								<tbody></tbody>
							</table>
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
  //查询用户列表
  //在页面加载的时候会执行这个方法
  function LoadingInfo(page_index, page_size) {
    var search_text = $("#search_text").val();
    // 就是保护数据
    $.ajax({
      type: "post",
      url: "<?php echo url('admin/auth/userlist'); ?>",
      data: {
        "page_index": page_index,
        "page_size": $("#showNumber").val(),
        "search_text": search_text
      },
      success: function(data) {
        var html = '';
        console.log(data);
        if (data["data"].length > 0) {
          for (var i = 0; i < data["data"].length; i++) {
            // es6 写法 ``
            html += `<tr align="center">
                        <td>
                          <div class="cell">
                            <label><input name="sub" type="checkbox" value="${data['data'][i]['uid']}" ></label>
                          </div>
                        </td>
                        <td>
            `;
            if (data["data"][i]["user_headimg"] == "") {
                html += `<img src="/shop/public//static/picture/default_user_portrait.gif" class="head-portrait"/>`;
            } else {
                html += `<img src="${data["data"][i]["user_headimg"]}" class="head-portrait"/>`;
            }
            html += `
                  </td>
                  <td class="tal">${data["data"][i]["user_name"]}</td>
                  <td class="tal">${data["data"][i]["user_tel"]}</td>
                  <td class="tal">${data["data"][i]["user_email"]}</td>
                  <td class="tal">${data["data"][i]['user_role']['user_group']["group_name"]}</td>
            `;
            html += data["data"][i]["user_status"] == 0 ? '<td style="color:red;">锁定</td>' : '<td style="color:green;">正常</td>';
            if (data['data'][i]['user_role']['is_role'] == 1) {
              html += '<td>-</td>';
            } else {
              html += `
                  <td><a href="http://tp.23673.com/admin/auth/edituser?uid=${data["data"][i]["uid"]}">修改</a>&nbsp;&nbsp;
              `;
              html += data["data"][i]["user_status"] == 0 ? '<a href="javascript:void(0);" onclick="unlock(' + data["data"][i]["uid"] + ', 1)">解锁</a>&nbsp;&nbsp; ' : '<a href="javascript:void(0);" onclick="lock(' + data["data"][i]["uid"] +
                ', 0)">锁定</a>&nbsp;&nbsp; ';
              html += '<a href="javascript:void(0);" onclick="resetPassword(' + data["data"][i]["uid"] + ')">重置密码</a>';
              html += '&nbsp;&nbsp;<a href="javascript:;" onclick="delectAdminUser(' + data["data"][i]["uid"] + ')">删除</a></td>';
            }
            html += '</tr>';

            // 传统方式js 字符串拼接
            // html += '<tr align="center">';
            // html += '<td><div class="cell"><label><input name="sub" type="checkbox" value="' + data['data'][i]['uid'] + '" ></label></div></td>';
            // html += '<td>';
            // if (data["data"][i]["user_headimg"] == "") {
            //   html += '<img src="../../static/picture/default_user_portrait.gif" class="head-portrait" />';
            // } else {
            //   html += '<img src="../../static/picture/2d604321d826415eb3cb495b5e793f6c.gif' + data["data"][i]["user_headimg"] + '" class="head-portrait" />';
            // }
            // html += '</td>';
            // html += '<td class="tal">' + data["data"][i]["admin_name"] + '</td>';
            // html += '<td class="tal">' + data["data"][i]["user_tel"] + '</td>';
            // html += '<td class="tal">' + data["data"][i]["user_email"] + '</td>';
            // html += '<td class="tal">' + data["data"][i]["group_name"] + '</td>';
            // html += data["data"][i]["user_status"] == 0 ? '<td style="color:red;">锁定</td>' : '<td style="color:green;">正常</td>';
            // if (data['data'][i]['is_admin'] == 1) {
            //   html += '<td>-</td>';
            // } else {
            //   html += '<td><a href="http://tp.23673.com/admin/auth/edituser?uid=' + data["data"][i]["uid"] + '">修改</a>&nbsp;&nbsp; ';
            //   html += data["data"][i]["user_status"] == 0 ? '<a href="javascript:void(0);" onclick="unlock(' + data["data"][i]["uid"] + ', 1)">解锁</a>&nbsp;&nbsp; ' : '<a href="javascript:void(0);" onclick="lock(' + data["data"][i]["uid"] +
            //     ', 0)">锁定</a>&nbsp;&nbsp; ';
            //   html += '<a href="javascript:void(0);" onclick="resetPassword(' + data["data"][i]["uid"] + ')">重置密码</a>';
            //   html += '&nbsp;&nbsp;<a href="javascript:;" onclick="delectAdminUser(' + data["data"][i]["uid"] + ')">删除</a></td>';
            // }
            // html += '</tr>';
          }
        } else {
          html += '<tr align="center"><th colspan="6">暂无符合条件的数据记录</th></tr>';
        }
        $(".style0list tbody").html(html);
        initPageData(data["page_count"], data['data'].length, data['total_count']);
        $("#pageNumber").html(pagenumShow(jumpNumber, $("#page_count").val(), 5));
      }
    });
  }

  function resetPassword(uid) {
    $("#dialog").dialog({
      buttons: {
        "确定,#e57373": function() {
          $(this).dialog('close');
          $.ajax({
            type: "post",
            url: "http://tp.23673.com/admin/auth/resetuserpassword",
            data: {
              "uid": uid
            },
            success: function(data) {
              if (data["code"] > 0) {
                showMessage('success', data["message"], 'http://tp.23673.com/admin/auth/userlist');
              } else {
                showMessage('error', data["message"]);
              }
            }
          })
        }
      },
      contentText: "你确定重置密码：123456？",
      title: "消息提醒"
    });
  }

  function lock(uid) {
    $.ajax({
      type: "post",
      url: "http://tp.23673.com/admin/auth/userlock",
      data: {
        "uid": uid
      },
      success: function(data) {
        if (data["code"] > 0) {
          showMessage('success', data["message"], 'http://tp.23673.com/admin/auth/userlist');
        } else {
          showMessage('error', data["message"]);
        }
      }
    });
  }

  function unlock(uid) {
    $.ajax({
      type: "post",
      url: "http://tp.23673.com/admin/Auth/userunlock",
      data: {
        "uid": uid
      },
      success: function(data) {
        if (data["code"] > 0) {
          showMessage('success', data["message"], 'http://tp.23673.com/admin/auth/userlist');
        } else {
          showMessage('error', data["message"]);
        }
      }
    });
  }

  function delectAdminUser(uid) {
    $("#dialog").dialog({
      buttons: {
        "确定": function() {
          $(this).dialog('close');
          $.ajax({
            url: "http://tp.23673.com/admin/auth/deleteadminuserajax",
            data: {
              "uid": uid
            },
            type: "post",
            dataType: "json",
            success: function(data) {
              //alert(JSON.stringify(data));
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
      contentText: "确定要删除该用户吗？"
    });
  }
  //全选
  function CheckAll(event) {
    var checked = event.checked;
    $(".style0list tbody input[type = 'checkbox']").prop("checked", checked);
  }

  function searchData() {
    LoadingInfo(1);
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
