<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- 要送資料一定要放在form裡面 -->
    <form action="" name="form_1" onsubmit="return mySubmit()">
        <!-- onsubmit="return mySubmit() 回傳 mySubmit() 這個function-->
        <!-- onsubmit="return false"表單不要送出 -->
        <input type="number" id="a" name="a">+
        <input type="number" id="b" name="b">
        <button>=</button>
        <input type="text" disabled id="c" name="c">
        <!-- disabled 沒有作用的 -->
        <!-- ID 預設是WINDOW的屬性EX:window.c.valu<----會取道ID為C的值 -->
        <!-- buttom放在Form裡面，預設的type是submit(送出資料) -->

    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        function mySubmit() {
            //$(document.form_1)拿到form_1包成JQ
            //$(document.form_1)   =   $("form[name='form_1']")
            //.serialize()送出表單內所有input(沒有name抓不到，disabled抓不到)
            $.post('Forms_ajax_api.php', $(document.form_1).serialize(), function(data) {
                $('#c').val(data.c)
            },'json');



            //要post去哪*/
            //JQ的POST會把物件轉換成表單的欄位
            //送給誰
            //送啥
            //回傳啥,用function包起來(等待被呼叫，來回要時間)，一般習慣用data(data:PlanObject=一般的Object或字串)
            //如果確定回傳的東西是，下'json'他會幫你json字串轉回物件(json_decode())
            //console.log($a, $b)

            /*
            $.post('Forms_ajax_api.php', {
                a: document.querySelector('#a').value,
                b: $('#b').val(),
            }, function(data) {
                document.querySelector('#c').value=data.c
                //$('#c').val(data.c)
                //console.log(data);
            }, 'json');
            */


            // return false表單不要送出
            return false;

        }
    </script>

</body>

</html>