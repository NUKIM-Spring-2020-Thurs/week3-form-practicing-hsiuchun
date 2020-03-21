<!DOCTYPE html>
<html lang="en">
<style>
    div{
        margin:0px auto;
    }
    .wrapped{
        width:700px;
        height:1200px;
        border:1px solid #dadada;
        text-align:center;
        margin:0px auto;
    }
    .a1{
        width: 650px;
        height: 100px;
        line-height:100px;
        background-color: #385F71;
    }
    .a2{
        width: 650px;
        height: 950px;
        background-color: #F5F0F6;
    }
    .content{
        width:650px;
        height:700px;
        padding-top:20px;
    }
    .a3{
        width: 650px;
        height: 100px;
        line-height:100px;
        background-color: #629460;
    }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IM Sign Up Form</title>
</head>
<body>

    <div class=wrapped> 
        <div class=a1><h1><font color="white">IM Sign Up Form</font></h1></div>
        <div class=a2>
            <div class=content>
                <form action="submit.php" enctype="multipart/form-data" method="POST">
                    <p>姓名 &nbsp; <input type="text"  name="username" required></p>
                    <p>身分證字號 &nbsp; <input type="password" name="id" required></p>
                    <p>連絡電話 &nbsp; <input type="tel"" name="phone" placeholder="手機號碼" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required></p>
                    <p>性別 &nbsp; <input type="radio" name="gender" value="M" required>Male<input type="radio" name="gender" value="F">female</p>
                    <p><img src="https://static.wixstatic.com/media/06dfca_3235894057024b54b8833007b65a8edc~mv2_d_2480_1433_s_2.jpg" alt="" width="300px" height="auto"></p>
                    <p>填寫你的衣服版型及件數 &nbsp; <input type="picture" name="cloth"></p>
                    <p>營服顏色偏好 &nbsp; <input type="color" name="color"></p>
                     &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;0 &nbsp;&nbsp;50 &nbsp;&nbsp;100 &nbsp;&nbsp;150 &nbsp;&nbsp;200<br/>
                    <p>一餐費用 &nbsp; <input type="range" name="money" min="0" max="200" step="50"></p>
                    <p>生日 &nbsp; <input type="date" name="birth" required></p>
                    <p>電子信箱 &nbsp; <input type="email" name="mail" required></p>
                    <p>個性特質 &nbsp; 
                    <input type="checkbox" name="self[]" value="optimism" checked>樂觀
                    <input type="checkbox" name="self[]" value="Introvert">內向
                    <input type="checkbox" name="self[]" value="positive">積極
                    <input type="checkbox" name="self[]" value="Outgoing">外向
                    <input type="checkbox" name="self[]" value="snegative">消極
                    </p>

                    <p>居住城市 &nbsp; <select name="city[]" id="" multiple required>
                    <option value="Taipei">台北市</option>
                    <option value="New_Taipei">新北市</option>
                    <option value="Keelung">基隆市</option>
                    <option value="Taoyuan">桃園市</option>
                    <option value="Hsinchu">新竹市</option>
                    <option value="Hsinchu">新竹縣</option>
                    <option value="Yilan">宜蘭縣</option>
                    <option value="Miaoli">苗栗縣</option>
                    <option value="Taichung">台中市</option>
                    <option value="Changhua">彰化縣</option>
                    <option value="Yunlin">雲林縣</option>
                    <option value="Nantou">南投縣</option>
                    <option value="Chiayi">嘉義市</option>
                    <option value="Chiayi">嘉義縣</option>
                    <option value="Tainan">台南市</option>
                    <option value="Kaohsiung" selected>高雄市</option>
                    <option value="Pingtung">屏東縣</option>
                    <option value="Taitung">台東縣</option>
                    <option value="Hualien">花蓮縣</option>
                    <option value="Kinmen">金門縣</option>
                    <option value="Lienchiang">連江縣</option>
                    <option value="Penghu">澎湖縣</option>
                    </select></p>

                    <p>建議</p>
                    <p><textarea name="suggest" id="" cols="50" rows="7"></textarea></p>

                    <input type="submit"><input type="reset" value="Clear"><br/>
                </form>
            </div>
        </div>
        <div class=a3>
            <p>連絡電話:XXXX-XXX-XXX</p>
        </div>
    </div>
</body>
</html>