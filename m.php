<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bing美图移动版</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body translate="no" >
	
	
			

    <div class="cont s--inactive">
  <!-- cont inner start -->
  <div class="cont__inner">
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">今日</h2>
          </div>
          <div class="el__content">
            <div class="el__text"><script src="bing/bingc.php"></script></div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">1</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="1">1</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">昨日</h2>
          </div>
          <div class="el__content">
            <div class="el__text"><script src="bing/2c.php"></script></div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">2</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="2">2</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">前日</h2>
          </div>
          <div class="el__content">
            <div class="el__text"><script src="bing/3c.php"></script></div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">3</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="3">3</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">四日前</h2>
          </div>
          <div class="el__content">
            <div class="el__text"><script src="bing/4c.php"></script></div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">4</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="4">4</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">五日前</h2>
          </div>
          <div class="el__content">
            <div class="el__text"><script src="bing/5c.php"></script></div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">5</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="5">5</div>
        </div>
      </div>
    </div>
    <!-- el end -->
  </div>
  <!-- cont inner end -->
</div>

	
	<script src="js/stopExecutionOnTimeout.js"></script>
	<script type="text/javascript">
		 var $cont = document.querySelector('.cont');
		var $elsArr = [].slice.call(document.querySelectorAll('.el'));
		var $closeBtnsArr = [].slice.call(document.querySelectorAll('.el__close-btn'));
		setTimeout(function () {
		    $cont.classList.remove('s--inactive');
		}, 200);
		$elsArr.forEach(function ($el) {
		    $el.addEventListener('click', function () {
		        if (this.classList.contains('s--active'))
		            return;
		        $cont.classList.add('s--el-active');
		        this.classList.add('s--active');
		    });
		    $el.addEventListener('keypress', function (e) {
		        if (this.classList.contains('s--active'))
		            return;
		        if (e.which !== 13)
		            return;
		        $cont.classList.add('s--el-active');
		        this.classList.add('s--active');
		    });
		});
		$closeBtnsArr.forEach(function ($btn) {
		    $btn.addEventListener('click', function (e) {
		        e.stopPropagation();
		        $cont.classList.remove('s--el-active');
		        document.querySelector('.el.s--active').classList.remove('s--active');
		    });
		    $btn.addEventListener('keypress', function (e) {
		        if (e.which !== 13)
		            return;
		        e.stopPropagation();
		        $cont.classList.remove('s--el-active');
		        document.querySelector('.el.s--active').classList.remove('s--active');
		    });
		});
	</script>
</body>
</html>