<!DOCTYPE html>

<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>查看作业</title>
    <link href="../../css/students/getinform/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/students/getinform/style.css" rel="stylesheet" type="text/css"/>

  </head>
  <body>
    <header class="aui-bar aui-bar-nav">
        <a href="#" onClick="javascript :window.location.href='./'" class="aui-pull-left aui-btn">
           <img src="../../css/students/getinform/back.png" width="20px">
        </a>
        <div class="aui-title">作业列表</div>
    </header>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <h4 class="text-center">
            点击学科名查看详情
          </h4>
          <table class="table table-bordered">
            <thead>
            <tr>
              <th>
                学科名
              </th>
              <th>
                教师
              </th>
              <th>
                布置时间
              </th>
            </tr>
            </thead>
            @foreach($messages as $message)
              <tbody>
              <tr>
                <td > <a  href="./getwork/postid/{{ $message->id }}">{{ $message->subject }}</a>
                </td>
                <td>{{ $message->teacher }}</td>
                <td>{{ $message->postdate }}</td>
              </tr>
              </tbody>
            @endforeach
          </table>

          <div>
            <div class="text-center">
              {{ $messages->render() }}
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
