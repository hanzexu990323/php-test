<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset = utf-8"/>
    <title>测试1</title>
    <style type="text/css">
        body{  margin: 10px;
               padding: 0px;  }
        #top, #nav, #mid, #footer{
            width: auto;
            margin: 0 auto;
        }
        #mid{
            height: 100px;
            background-color: #95dea0;
                    }
    </style>
    </head>
<body>
<div id = "mid">
<form action="test_01.php" name="form1" method="get">
    请输入一段话：<input type="text" name="text1" title="输入一段话"/> <br/>
    <h5>请输入开始及结束的位置</h5>
    开始位置：<input type="text" name="input0" title="开始位置" >
    结束位置： <input type="text" name="input1" title="结束位置" />
    <br/>
    <input type="submit" value="执行" />
  </form>
</div>
 </body>
</html>
