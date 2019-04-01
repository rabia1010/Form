



<html>
<head>
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
            font-size:29px;

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
            height: 40px;
            padding-left:10px;
            margin-top:13px;
            font-size:15px;
        }

        button {
            background-color: #08335E;
            color: #fff;
            width: 27%;
            margin-top:5px;
            font-size: 17px;
            height: 50px; ;
            margin: 1px;
            position: absolute;
            left: 325px;
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
<img src="isbank.png" width="300" height="100%">
<h1> Türkiye İş Bankası Bireysel <br>İnternet Şubenize Hoş Geldiniz! </h1>
<form action="" method="post" >
    <title>Türkiye İş Bankası İnternet Şubesine Hoş Geldiniz!</title>
    <input type="text" id="kimlik" placeholder="Müşteri Numaranız / TCKN / YKN"><br>
    <input type="password" id="password" placeholder="Şifre / Geçici Şifre" onfocus="KlavyeAc();"><br>

    <div id="klavye">
        <table>
            <tr>
                <td><input type="button" onclick="SayiYaz(1);" value="1" />
                <td><input type="button" onclick="SayiYaz(2);" value="2" />
                <td><input type="button" onclick="SayiYaz(3);" value="3 " />
            </tr>
            <tr>

                <td><input type="button" onclick="SayiYaz(4);" value="4" />
                <td><input type="button" onclick="SayiYaz(5);" value="5" />
                <td><input type="button" onclick="SayiYaz(6);" value="6" />
            </tr>
            <tr>

                <td><input type="button" onclick="SayiYaz(7);" value="7" />
                <td><input type="button" onclick="SayiYaz(8);" value="8" />
                <td><input type="button" onclick="SayiYaz(9);" value="9" />
            </tr>
            <tr>
                <td> <input type="button" onclick="SayiYaz($yenile);" value="*" />
                <td> <input type="button" onclick="SayiYaz(0);" value="0" />
                <td> <input type="button" onclick="SayiYaz(sil);" value="<" />

            </tr>
        </table>
    </div>
    <button onclick="submitForm()">Giriş</button>


</form>
<script>
    function submitForm() {
        console.log("submitted")
        document.getElementById("form_id").submit();

    }
</script>
</body>



</html>


