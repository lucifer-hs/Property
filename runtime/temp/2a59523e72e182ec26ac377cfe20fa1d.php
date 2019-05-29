<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\wamp64\www\property\public/../application/admin\view\information\add.html";i:1528188742;s:61:"D:\wamp64\www\property\application\admin\view\public\top.html";i:1527944631;s:62:"D:\wamp64\www\property\application\admin\view\public\left.html";i:1528281665;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TW简物业管理系统</title>
    <meta name="description" content="这是一个 add 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/property/public/static/admin//assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/property/public/static/admin//assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/property/public/static/admin//assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/property/public/static/admin//assets/css/admin.css">
    <link rel="stylesheet" href="/property/public/static/admin//assets/css/app.css">
    <style type="text/css">
        .am-selected{
            width: 140px;

        }
    </style>
</head>

<body data-type="generalComponents">
<header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <img src="/property/public/static/admin//assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

        </div>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-bell-o"></span> 提醒 <span class="am-badge tpl-badge-success am-round">5</span></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-content-external">
                            <h3>你有 <span class="tpl-color-success">5</span> 条提醒</h3><a href="###">查看全部</a></li>
                        <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-plus tpl-dropdown-ico-btn-size tpl-badge-success"></span> 小区整洁较上周提高2%</a>
                            <span class="tpl-dropdown-list-fr">3小时前</span>
                        </li>
                        <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-check tpl-dropdown-ico-btn-size tpl-badge-danger"></span> 维修工作已完成，请查验</a>
                            <span class="tpl-dropdown-list-fr">15分钟前</span>
                        </li>
                        <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-bell-o tpl-dropdown-ico-btn-size tpl-badge-warning"></span>有部分用户余额不足</a>
                            <span class="tpl-dropdown-list-fr">2天前</span>
                        </li>
                    </ul>
                </li>
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-comment-o"></span> 消息 <span class="am-badge tpl-badge-danger am-round">9</span></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-content-external">
                            <h3>你有 <span class="tpl-color-danger">9</span> 条新消息</h3><a href="###">全部</a></li>
                        <li>
                            <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="/property/public/static/admin//assets/img/user02.png" alt=""> </span>
                                <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> 禁言小张 </span>
                                <span class="tpl-dropdown-content-time">10分钟前 </span>
                                </span>
                                <span class="tpl-dropdown-content-font"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </span>
                            </a>
                            <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="/property/public/static/admin//assets/img/user03.png" alt=""> </span>
                                <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> Steam </span>
                                <span class="tpl-dropdown-content-time">18分钟前</span>
                                </span>
                                <span class="tpl-dropdown-content-font"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-calendar"></span> 进度 <span class="am-badge tpl-badge-primary am-round">4</span></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        <li class="tpl-dropdown-content-external">
                            <h3>你有 <span class="tpl-color-primary">4</span> 个任务进度</h3><a href="###">全部</a></li>
                        <li>
                            <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc"> 用户中心 </span>
                                <span class="percent">45%</span>
                                </span>
                                <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-success" style="width:45%"></div></div>
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">新闻内容页 </span>
                                <span class="percent">30%</span>
                                </span>
                                <span class="progress">
                       <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-secondary" style="width:30%"></div></div>
                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">管理中心 </span>
                                <span class="percent">60%</span>
                                </span>
                                <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-warning" style="width:60%"></div></div>
                    </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick"><?php echo session('username'); ?></span><span class="tpl-header-list-user-ico"> <img src="/property/public/static/admin//assets/img/user01.png"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                        <li><a href="<?php echo url('Login/logout'); ?>"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo url('Login/logout'); ?>" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
            </ul>
        </div>
    </header>
    <div class="tpl-page-container tpl-page-header-fixed">

 <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                Two-Way简物业 列表
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="index.html" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="chart.html" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-bar-chart"></i>
                            <span>数据分析</span>
                            <i class="tpl-left-nav-content tpl-badge-danger">
               12
             </i>
                        </a>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>基础服务</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
								<a href="table-font-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>商家管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                                <a href="table-images-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>访客管理</span>
                                    <i class="tpl-left-nav-content tpl-badge-success">
               							18
             						</i>
								</a>
                                    <a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>资讯管理</span>
                                        <i class="tpl-left-nav-content tpl-badge-primary">
            						    	5
             							</i>
             						</a>
									<a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>投诉管理</span>
                                        <i class="tpl-left-nav-content tpl-badge-primary">
            							   3
             							</i>
									</a>
									<a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>缴费管理</span>
                                        <i class="tpl-left-nav-content tpl-badge-primary">
            							   39
             							</i>
									</a>
                                    <a href="form-news-list.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>客服管理</span>

                                    </a>
                                    <a href="form-news-list.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>医疗管理</span>

                                    </a>
                            </li>
                        </ul>
                    </li>
					
					<li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-coff"></i>
                            <span>特色服务</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
								<a href="table-font-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>失物招领管理</span>
                                </a>
                                <a href="table-images-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>闲置托管管理</span>
                                    <i class="tpl-left-nav-content tpl-badge-success">
               							8
             						</i>
								</a>
                                    <a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>租赁管理</span>
             						</a>
									<a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>门禁管理</span>
									</a>
                            </li>
                        </ul>
                    </li>
					
					<li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>信息管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <a href="<?php echo url('information/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>员工信息管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="<?php echo url('information/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>业主信息管理</span>
                                </a>
                            </li>
                        </ul>
                    </li>
					<li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-money"></i>
                            <span>缴费管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <a href="<?php echo url('information/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>缴费类型管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="<?php echo url('information/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>缴费信息管理</span>
                                </a>
                            </li>
                        </ul>
                    </li>
					 <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-sett"></i>
                            <span>系统管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
								<a href="table-font-list.html">
                                    <i class="am-icon-banshou"></i>
                                    <span>系统设置</span>
                                </a>
                                <a href="table-images-list.html">
                                    <i class="am-icon-huancun"></i>
                                    <span>清理缓存</span>
								</a>
                                    <a href="form-news.html">
                                        <i class="am-icon-beifen"></i>
                                        <span>数据备份</span>
             						</a>
									<a href="form-news.html">
                                        <i class="am-icon-huanyuan"></i>
                                        <span>数据还原</span>
									</a>
                            </li>
                        </ul>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="login.html" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-key"></i>
                            <span>登录</span>

                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
               TW简物业管理系统
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">业主信息管理</a></li>
                <li class="am-active">业主信息添加表单</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 表单
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                        </div>
                    </div>
 

                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">
                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="" method="post" enctype="multipart/form-data">
                                 <div class="am-form-group">
                                    <label for="user-number" class="am-u-sm-3 am-form-label">房号 <span class="tpl-form-line-small-title">Number</span></label>
                                    <div class="am-u-sm-9">

                                        <select  data-am-selected="{searchBox: 1,maxHeight:250}" name="home_number_1">
                                           
                                            <?php for ($i=1;$i<31;$i++){ ?>
                                                <option  value="<?php echo $i;?>" ><?php echo $i;?></option>
                                            <?php   } ?>
                                                           
                                        </select>
                                      <select  data-am-selected="{searchBox: 1,maxHeight:250}" name="home_number_2">
                                           
                                            <?php for ($i=65;$i<75;$i++){ ?>
                                                <option  value="<?php echo strtoupper(chr($i)).' ';?>" ><?php echo strtoupper(chr($i)).' ';?></option>
                                            <?php   } ?>
                                            
                                        </select>
                                         <select  data-am-selected="{searchBox: 1,maxHeight:250}" name="home_number_3">
                                           
                                            <?php for ($i=101;$i<2000;$i++){ ?>
                                                <option  value="<?php echo $i;?>" ><?php echo $i;?></option>
                                                <?php
                                            if($i%100==30)//一楼层户数
                                            {
                                                $i=$i+70;
                                            }   } ?>
                                            </select>
                                    </div>
                                </div>
                                     <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">房屋类型 / Style</label>
                                    <div class="am-u-sm-9">
                                        <select data-am-selected="{searchBox: 1}"name="home_style">
                                      <option value="住宅">住宅</option>
                                      <option value="商用">商用</option>
                                      <option value="其它">其它</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">业主 / Name</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name"name="home_name" placeholder="业主 / Name">
                                        <small>输入你的名字，让我们记住你。</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">合同资料编号 / Data</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-email" name="home_data" placeholder="合同资料编号 / Data">
                                        <small>它是你的合同和详细资料（纸质版）存储编号哦</small>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">购房日期 <span class="tpl-form-line-small-title">/ Data</span></label>
                                    <div class="am-u-sm-9">
                                        <select data-am-selected="{searchBox: 1,maxHeight:250} " name="home_date_y" >
                                            <?php for ($i=date("Y");$i>=2000;$i--) { ?>
                                                <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                            <?php   } ?>
                                            </select>年
                                           <select data-am-selected="{searchBox: 1,maxHeight:250} " name="home_date_m" >
                                            <?php  for ($j=1;$j<12;$j++) {if($j==date("m")){?>
                                                <option  selected="selected"  value="<?php echo $j;?>" ><?php echo $j;?></option>
                                          <?php   } else{?>
                                            <option  value="<?php echo $j;?>" ><?php echo $j;?></option>
                                          <?php   }   } ?>
                                            </select>月
                                          <select data-am-selected="{searchBox: 1,maxHeight:250}" name="home_date_d" >
                                            <?php 
                                             
                                             for ($k=1;$k<=31;$k++) {if($k==date("d")){?>
                                                <option  selected="selected"  value="<?php echo $k;?>" ><?php echo $k;?></option>
                                          <?php   } else{?>
                                            <option  value="<?php echo $k;?>" ><?php echo $k;?></option>
                                          <?php   }   } ?>
                                            </select>日
                                </div>
                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">电话 / Telephone</label>
                                    <div class="am-u-sm-9">
                                        <input type="tel"  name="home_phone"  placeholder="输入你的电话号码 / Telephone">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">房屋状态/State</label>
                                    <div class="am-u-sm-9">
                                        <select data-am-selected="{searchBox: 1}" name="home_state"  >
                                      <option value="入住">入住</option>
                                      <option value="空房">空房</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                   <label for="user-weibo" class="am-u-sm-3 am-form-label">备注 / Note</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="5" id="user-intro" name="home_note"  placeholder="输入你的备注 /  Note"></textarea>
                                        <small>可以备注很多事情哦！！！</small>
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">附件 / attachment</label>
                                    <div class="am-u-sm-9">
                                        <input type="file" name="file" placeholder="添加附件 / Telephone">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>










        </div>

    </div>


    <script src="/property/public/static/admin//assets/js/jquery-2.1.1.js"></script>
    <script src="/property/public/static/admin//assets/js/amazeui.min.js"></script>
    <script src="/property/public/static/admin//assets/js/app.js"></script>
</body>

</html>