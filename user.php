<html>
<head>
    <title>User</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <style>
        #heading{position:relative;
               top:15%;
               left:10%;
            font-size:40px;
            font-family: 'Josefin Sans', sans-serif;
            color:slateblue;
        }
    button{position:relative;
        top:30%;
        left:20%;
        float:left;
        height:40px;
        width:180px;
        background-color: #f07474;
        color:white;
        font-size:30px;
        margin:20px;
    }
   button:hover{
       transform:scale(1.10);
       cursor:pointer;
   }

    </style>

</head>
<body>
    <div id="heading">Hi User,<br/>Click on below links for desired purpose..</div>
<button onclick= 'location.href="checkin.php"'>Check In</button>
<button onclick= 'location.href="checkout.php"'>Check Out</button>

</body>
</html>