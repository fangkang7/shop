<?php /*a:1:{s:62:"D:\PHPTutorial\WWW\shop\application\test\view\index\index.html";i:1541666429;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="/shop/public/static/js/jquery.js"></script>
    <title>Document</title>
    <style>
      *{
        margin: 0;
        border: 0;
        padding:0;
        box-sizing: border-box;
      }
      body{
        width: 100vw;
        height: 100vh;
        margin: 0 auto;
        background: url(/shop/public/static/picture/1.jpg) no-repeat center center;
        background-size: auto 100%;
      }
      .box{
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 20px;
        right: 0;
        width: 600px;
        height: 400px;
        margin: auto;
        background-color: rgba(0,0,0,0.25);
        box-shadow: 5px 5px 5px rgba(0,0,0,0.55);
        border-radius: 10px;
      }
      .part{
        position: relative;
      }
      .title{
        font-size: 22px;
        position: relative;
        top: 27px;
        transition: all 1s ease;
        color: #4dc4ff;
      }
      .info{
        width: 0;
        height: 0;
        font-size: 18px;
        height: 30px;
        font-size: 18px;
        color: #fff;
        background-color: transparent;
        outline: none;
        transition: all 1s ease;
      }
      .info::placeholder{
        color: #fff;
      }
      .title:hover,.title.active{
        top: 0px;
      }
      .title:hover + .info,.title.active + .info,.info:hover{
        width: 100%;
        height: 30px;
      }
      .help{
        font-size: 12px;
        color: #aaa;
      }
      button{
        width: 50px;
        height: 30px
      }
    </style>
  </head>
  <body>
    <div class="box">
      <h1 style="margin:10px;color: #4dc4ff;">不区分大小写</h1>
      <div class="part">
        <p class="title" onmousemove="addclass(this)">命名空间:</p>
        <input class="info" type="text" value='' id='namespace' placeholder="如:app\index\controller 或app\index\controller\Index">
        <p class="help">可以写全，然后下面类名不用些</p>
      </div>
      <div class="part">
        <p class="title" onmousemove="addclass(this)">类名:</p>
        <input class="info" type="text" id='className' placeholder="如:index ">
        <p class="help">命名空间全可以不用写</p>
      </div>
      <div class="part">
        <p class="title" onmousemove="addclass(this)">测试方法名:</p>
        <input class="info" type="text" id='action' placeholder="index">
        <p class="help">&nbsp;</p>
      </div>
      <div class="part">
        <p class="title" onmousemove="addclass(this)">传递参数以 | 分割:</p>
        <input class="info" type="text" placeholder="如: 1|2|3" id='param'>
        <p class="help">&nbsp;</p>
      </div>
      <button type="submit" name="" value="测试" onclick="test()">测试</button>
    </div>
  </body>
  <script type="text/javascript">
    console.log(`<?php echo URL('test/index/execute'); ?>`);
      function test() {
          var namespace = $("#namespace").val();
          var className = $("#className").val();
          var action  = $("#action").val();
          var param   = $("#param").val();
          window.location.href = `<?php echo url('test/index/execute'); ?>?namespace=${namespace}&className=${className}&action=${action}&param=${param}`;
      }


    var title = document.getElementsByClassName("title");
    var move = document.getElementsByClassName("info");
    function addclass(e){
      e.classList.add("active");
    }
  </script>
</html>
