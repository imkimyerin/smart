<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartFarm Form</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<style>
    *{
        box-sizing : border-box;
    }
    body{
        padding : 10px;
    }
    .header{
        padding : 10px;
        text-align : center;
        background-color: #D8D8D8
    }
    .header h1{
        font-size : 40px;
    }
    .nav{
        overflow : hidden;
    }
    .nav a{
        float : left;
        text-align : center;
        padding : 12px 12px;
        text-decoration : none;
    }
    .left{
        float : left;
        width : 75%;
    }
    #container {
			width:960px;
			margin:0 auto;
			text-align:center;
    }
    .tab {
        list-style: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    .tab li {
        float: left;
    }
    .tab li a {
        display: inline-block;
        color: #000;
        text-align: center;
        text-decoration: none;
        padding: 14px 16px;
        font-size: 17px;
        transition:0.3s;
    }
    .tabcontent {
        display: none;
        background-color:rgb(0,154,200);
        padding: 6px 12px;
        color:#fff;
    }
    ul.tab li.current{
        background-color: rgb(0,154,200);
        color: #222;
    }
    .tabcontent.current {
        display: block;
    }
</style>
<body>
    <div class = "header">
        <h1> smart </h1>
    </div>
    <div id = "container">
        <ul class = "tab">
            <li class = "current" data-tab="tab1"><a href="#">1번메뉴</a></li>
            <li data-tab="tab2"><a href="#">2번메뉴</a></li>
            <li data-tab="tab3"><a href="#">3번메뉴</a></li>
            <li data-tab="tab4"><a href="#">4번메뉴</a></li>
            <li data-tab="tab5"><a href="#">5번메뉴</a></li>
        </ul>
        <div id="tab1" tabcontent current>여기에 그래프1(강수량)</div>
        <div id="tab2" tabcontent>여기에 그래프2 (풍량)</div>
        <div id="tab3" tabcontent>여기에 그래프3(일조량)</div>
        <div id="tab4" tabcontent>여기에 그래프4(기온)</div>
        <div id="tab5" tabcontent>여기에 그래프 5(체감온도)</div>
    </div>
<script>
    var requestURL = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';
    $(function() {
			$('ul.tab li').click(function() {
				var activeTab = $(this).attr('data-tab');
				$('ul.tab li').removeClass('current');
				$('.tabcontent').removeClass('current');
				$(this).addClass('current');
				$('#' + activeTab).addClass('current');
			})
		});
</script>
</body>
</html>
