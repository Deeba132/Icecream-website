
<html>
  <head>
     <title>About</title>
    <link rel="stylesheet" href="trucky.scss">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:900" rel="stylesheet">
    <style>
        .button{
          align-items:left;
          justify-content:left;
          margin-right:1250px;
          font-family:consolas;
          font-weight:bold;
          height:50px;
          margin-top:0px;
          padding-top:0px;
          width:100px;
          border:2px solid black;
          border-radius:10px;
        }
        h1{
        font-family: consolas;
        }
        p{
        font-family: Consolas;
        }
      .wrapper{
        margin:375px;
        margin-top:950px;
        margin-bottom:550px;
        position:absolute;
        justify-content: center;
        align-items: center;
        padding:10px;
        padding-bottom:50px;
        border: 2px solid black;
        border-radius: 25px;
        background-color:white;
        width:50%;
        }
    </style>
  </head>    
    <body style="background:url(./images/waffle.jpg);background-size:contain;margin:0px;"> 
      <script>
        function func()
        {
          window.location.href="home.php";
        }
        </script>
      <button onclick="func()" class="button">go back</button>
      <div class="container" style="margin-top:50px;margin-bottom:350px;">
          
         <div class="scene">
            <div class="van">
              <div class="cab">
                <div class="cube" id="cab-base">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cube" id="cab-body">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cube" id="cab-back">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cube" id="cab-roof">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cab-frame _face">
                  
                  <div class="cube" id="cab-frame-left">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="cab-frame-right">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="_face" id="cab-window-front"></div>
                </div>
                <div class="_face" id="cab-window-left"></div>
                <div class="_face" id="cab-window-right"></div>
                <div class="cylinder" id="cab-light">
                  <div class="container"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                  </div>
                </div>
                <div class="wedge" id="cab-top-left">
                  <div class="container">
                    <div class="side"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="wedge" id="cab-top-right">
                  <div class="container">
                    <div class="side"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cube" id="cab-handle-left">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cube" id="cab-handle-right">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="wheel-front _face">
                  <div class="cylinder" id="wheel-front">
                    <div class="container"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="body _face">
                <div class="cube" id="body-base">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cube" id="body-left">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cube" id="body-right">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cube" id="body-front">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="cube" id="body-back">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="wheels-back _face">
                  <div class="wheel-back-left _face">
                    <div class="cylinder" id="wheel-back-left">
                      <div class="container"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                      </div>
                    </div>
                  </div>
                  <div class="wheel-back-right _face">
                    <div class="cylinder" id="wheel-back-right">
                      <div class="container"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="body-roof _face">
                  <div class="cube" id="body-roof-front">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="body-roof-back">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="body-roof-left">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="body-roof-right">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cylinder" id="body-roof-chimney">
                    <div class="container"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                  </div>
                  <div id="body-roof-window"></div>
                </div>
                <div class="cube" id="body-shelf">
                  <div class="container">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                  </div>
                </div>
                <div class="bookshelf _face">
                  <div class="cube" id="bookshelf-back">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="bookshelf-bottom">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="bookshelf-top">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="bookshelf-left">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="bookshelf-right">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="bookshelf-vertical-left">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="bookshelf-vertical-right">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="bookshelf-horizontal-top">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="bookshelf-horizontal-bottom">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                </div>
                <div class="cartons _face">
                  <div class="cube" id="carton-1">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="carton-2">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                  <div class="cube" id="carton-3">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                </div>
                <div class="glasses-bookshelf _face">
                  <div class="cylinder" id="glass-bookshelf-1">
                    <div class="container"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                  </div>
                  <div class="cylinder" id="glass-bookshelf-2">
                    <div class="container"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                  </div>
                  <div class="cylinder" id="glass-bookshelf-3">
                    <div class="container"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                  </div>
                </div>
                <div class="canopy-edge _face">
                  <div class="cube" id="body-canopy-edge">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                </div>
                <div class="canopy _face">
                  <div class="cube" id="body-canopy-main">
                    <div class="container">
                      <div class="left"></div>
                      <div class="right"></div>
                      <div class="top"></div>
                      <div class="bottom"></div>
                      <div class="front"></div>
                      <div class="back"></div>
                    </div>
                  </div>
                </div>
                <div class="poles _face">
                  <div class="pole-left _face">
                    <div class="cube" id="pole-left">
                      <div class="container">
                        <div class="left"></div>
                        <div class="right"></div>
                        <div class="top"></div>
                        <div class="bottom"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                      </div>
                    </div>
                  </div>
                  <div class="pole-right _face">
                    <div class="cube" id="pole-right">
                      <div class="container">
                        <div class="left"></div>
                        <div class="right"></div>
                        <div class="top"></div>
                        <div class="bottom"></div>
                        <div class="front"></div>
                        <div class="back"></div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>    
      </div> 
      <div align="center" class="wrapper">
                    <center><h1 class="h1class">About Us</h1></center>
                    <center><p class="ptag"><b>Welcome to cream destiny.You are an original when you stay true to what you know.<br> This is the philosophy that Cream destiny Ice cream has lived by since 2024.<br> We started off in the fruit business even before we ventured into the dairy business.<br>This helped us gain an in-depth understanding of dairy which proved to <br>be an advantage when we started making fruit ice creams.<br><br></b></p></center>
                    
                  </div>     
                    
  </body>
</html>

