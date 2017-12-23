<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"E:\phpStudy\WWW\tplay\public/../app/admin\view\main\index.html";i:1513993331;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="__PUBLIC__/echarts/echarts.min.js"></script>
    <link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="__PUBLIC__/font-awesome/css/font-awesome.min.css" media="all">
    <style>
        .info-box {
            height: 85px;
            background-color: white;
            background-color: #ecf0f5;
        }
        
        .info-box .info-box-icon {
            border-top-left-radius: 2px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 2px;
            display: block;
            float: left;
            height: 85px;
            width: 85px;
            text-align: center;
            font-size: 45px;
            line-height: 85px;
            background: rgba(0, 0, 0, 0.2);
        }
        
        .info-box .info-box-content {
            padding: 10px;
            margin-left: 85px;
        }
        
        .info-box .info-box-content .info-box-text {
            display: block;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-transform: uppercase;
        }

        .info-box .info-box-content .info-box-a {
            display: block;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            margin:0 auto;
            width:60px;
        }
        
        .info-box .info-box-content .info-box-number {
            display: block;
            font-weight: bold;
            font-size: 18px;
        }
        
        .major {
            font-weight: 10px;
            color: #01AAED;
        }
        
        .main {
            margin-top: 25px;
        }
        
        .main .layui-row {
            margin: 10px 0;
        }

body .demo-class textarea {background:#23262E;width:200px;color:#fff;}
#LAY_layuipro {position: relative;}
body .demo-class .layui-layer-btn{
    position: absolute;
    bottom:10px;
    right:0;
    padding:0;
}

    </style>
</head>

<body>
    <div class="layui-fluid main">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md3">
                <div class="info-box">
                    <span class="info-box-icon" style="background-color:#00c0ef !important;color:white;"><i class="fa fa-users" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">会员总数</span>
                        <span class="info-box-number"><?php echo $web['user_num']; ?></span>
                        <span class="info-box-text">管理员角色：<?php echo $web['admin_cate']; ?></span>
                    </div>
                </div>
            </div>
            <div class="layui-col-md3">
                <div class="info-box">
                    <span class="info-box-icon" style="background-color:#f39c12 !important;color:white;"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">文章总数</span>
                        <span class="info-box-number"><?php echo $web['article_num']; ?></span>
                        <span class="info-box-text">待审核：<?php echo $web['status_article']; ?></span>
                    </div>
                </div>
            </div>
            <div class="layui-col-md3">
                <div class="info-box">
                    <span class="info-box-icon" style="background-color:#00a65a !important;color:white;"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">文件总数</span>
                        <span class="info-box-number"><?php echo $web['file_num']; ?></span>
                        <span class="info-box-text">待审核：<?php echo $web['status_file']; ?></span>
                    </div>
                </div>
            </div>
            <div class="layui-col-md3">
                <div class="info-box">
                    <span class="info-box-icon" style="background-color:#dd4b39 !important;color:white;"><i class="fa fa-heart" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">留言总数</span>
                        <span class="info-box-number"><?php echo $web['message_num']; ?></span>
                        <span class="info-box-text">待查看：<?php echo $web['look_message']; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <br>

        
          <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
              <ul class="layui-timeline">
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis"></i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">置顶的说明文档</h3>
                            <ul>
                                <li>交流群：
                                    <a target="_blank" href="https://jq.qq.com/?_wv=1027&k=5wZeNTd"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="Tplay" title="Tplay"></a>
                                </li>
                                <li>点击加群，如果实在加不了还有群号啊[221470096]
                                </li>
                                <li>下载地址：
                                    <a href="https://github.com/tingyuu/tplay" target="_blank">记得给个Star哦 </a>(如果有问题可以在qq群问.)
                                </li>
                                <li>目前也只是做了适配性较强的一些功能模块，后续会不断增加新功能模块(⊙o⊙)…</li>
                            </ul>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">开发基于</h3>
                                <ul>
                                    <li>Tplay是一款基于ThinkPHP<?php echo $info['tp']; ?> + layui2.2.45 + Mysql开发的后台管理框架，集成了一般应用所必须的基础性功能，为开发者节省大量的时间。</li>
                                    <li>ThinkPHP版本：<?php echo $info['tp']; ?> <a href="https://www.kancloud.cn/manual/thinkphp5/118003" target="_blank">查看开发文档</a></li>
                                    <li>Layui版本：2.2.45 <a href="http://www.layui.com/doc/" target="_blank">查看开发文档</a></li>
                                </ul>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop layui-timeline-axis"></i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title">系统信息</h3>
                            <p>
                                <ul>
                                    <li>操作系统：<?php echo $info['win']; ?></li>
                                    <li>PHP版本：<?php echo $info['php']; ?></li>
                                    <li>运行环境：<?php echo $info['environment']; ?></li>
                                    <li>上传最大限制：<?php echo $info['upload_size']; ?></li>
                                    <li>执行时间限制：<?php echo $info['execution_time']; ?></li>
                                    <li>剩余空间大小：<?php if(!(empty($info['disk']) || (($info['disk'] instanceof \think\Collection || $info['disk'] instanceof \think\Paginator ) && $info['disk']->isEmpty()))): ?><?php echo $info['disk']; else: ?>未知<?php endif; ?></li>
                                </ul>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

    <script src="__PUBLIC__/layui/layui.js"></script>
    <script src="__PUBLIC__/jquery/jquery.min.js"></script>
    <script>
    layui.use('element', function(){
      var $ = layui.jquery
      ,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
      
      //触发事件
      var active = {
        tabAdd: function(){
          //新增一个Tab项
          element.tabAdd('demo', {
            title: '新选项'+ (Math.random()*1000|0) //用于演示
            ,content: '内容'+ (Math.random()*1000|0)
            ,id: new Date().getTime() //实际使用一般是规定好的id，这里以时间戳模拟下
          })
        }
        ,tabDelete: function(othis){
          //删除指定Tab项
          element.tabDelete('demo', '44'); //删除：“商品管理”
          
          
          othis.addClass('layui-btn-disabled');
        }
        ,tabChange: function(){
          //切换到指定Tab项
          element.tabChange('demo', '22'); //切换到：用户管理
        }
      };
      
      $('.site-demo-active').on('click', function(){
        var othis = $(this), type = othis.data('type');
        active[type] ? active[type].call(this, othis) : '';
      });
      
      //Hash地址的定位
      var layid = location.hash.replace(/^#test=/, '');
      element.tabChange('test', layid);
      
      element.on('tab(test)', function(elem){
        location.hash = 'test='+ $(this).attr('lay-id');
      });
      
    });
    </script>

<!-- <script type="text/javascript">
  layui.use('layer', function(){
    var layer = layui.layer;
    $(document).ready(function(){
      layer.prompt({
        formType: 2,
        offset: 'b',
        value: '开源优先通知群：221470096',
        title: '意见和建议收集(限100字)',
        skin: 'demo-class',
        area: ['280px', '120px'],
        id: 'LAY_layuipro' ,//设定一个id，防止重复弹出
        btn: ['朕写好了', '无fuck说'],
        shade: 0,
        moveType: 1 //拖拽模式，0或者1
      }, function(value, index, elem){
        if(value = '开源优先通知群：221470096') {
            layer.msg('如果你有建议，请修改默认内容');
        } else {
            $.ajax({
                url:"<?php echo url('admin/tomessages/publish'); ?>"
                ,type:"post"
                ,data:{message:value}
                ,success:function(res) {
                    layer.msg(res.msg);
                    if(res.code == 1) {
                      layer.close(index);
                    }
                }
            })
        }
      })
    });
  });              
</script> -->
</body>
</html>