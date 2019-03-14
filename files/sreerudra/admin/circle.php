<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
body {
    background-color: DarkSeaGreen;
    background-image: 
    -webkit-linear-gradient(
    90deg, rgba(0,0,0,.1) 50%,
    transparent 25%, transparent 50%,  
    rgba(0,0,0,.1) 50%, rgba(0,0,0,.1) 90%, 
    transparent 75%, transparent);
    background-image: 
    -moz-linear-gradient(
    90deg, rgba(0,0,0,.1) 50%,
    transparent 25%, transparent 50%,  
    rgba(0,0,0,.1) 50%, rgba(0,0,0,.1) 90%, 
    transparent 75%, transparent);
    background-image:
    linear-gradient(
    90deg, rgba(0,0,0,.1) 50%,
    transparent 25%, transparent 50%,  
    rgba(0,0,0,.1) 50%, rgba(0,0,0,.1) 90%, 
    transparent 75%, transparent);
    background-size: 50px 50px;
}

.top {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: -250px;
}

.bottom {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 250px;
}

.icon1{
    position: absolute; 
    width: 180px;
    height: 180px;
    background: url(http://www.cssauthor.com/wp-content/uploads/2013/07/Email-iOS7-Icon-cssauthor.com_.png) no-repeat;
    background-size: 180px 180px;
    margin: auto; 
    top: 0; left: 0; bottom: 0; right: 0;
    z-index: 3;
  
    -webkit-box-shadow: 
      0 0 0 10px   rgba(255,255,255,.2),
      0 0 25px 2px rgba(0,0,0,.3),
inset 0 0 0 15px   rgba(255,255,155,.4);
    -moz-box-shadow: 
      0 0 0 10px   rgba(255,255,255,.2),
      0 0 25px 2px rgba(0,0,0,.3),
inset 0 0 0 15px   rgba(255,255,155,.4);
    box-shadow: 
      0 0 0 10px   rgba(255,255,255,.2),
      0 0 25px 2px rgba(0,0,0,.3),
inset 0 0 0 15px   rgba(255,255,155,.4);
  
    -webkit-border-radius: 999px; 
    -moz-border-radius: 999px;
    border-radius: 999px;
    /* border-radius: 50% has issues on some mobile browsers */
}

.icon2{
    position: absolute; 
    width: 180px;
    height: 180px;
    background: url(http://s3-us-west-2.amazonaws.com/s.cdpn.io/6083/profile/profile-512_1.jpg) no-repeat;
    background-size: 180px 180px;
    margin: auto; 
    top: 0; left: 0; bottom: 0; right: 0;
    z-index: 3;
  
    -webkit-box-shadow: 
      0 0 0 10px   rgba(255,255,255,.2),
      0 0 25px 2px rgba(0,0,0,.3),
inset 0 0 0 15px   rgba(255,255,155,.4);
    -moz-box-shadow: 
      0 0 0 10px   rgba(255,255,255,.2),
      0 0 25px 2px rgba(0,0,0,.3),
inset 0 0 0 15px   rgba(255,255,155,.4);
    box-shadow: 
      0 0 0 10px   rgba(255,255,255,.2),
      0 0 25px 2px rgba(0,0,0,.3),
inset 0 0 0 15px   rgba(255,255,155,.4);
  
    -webkit-border-radius: 999px; 
    -moz-border-radius: 999px;
    border-radius: 999px;
}

.pulse1 {
    position: absolute;  
    width: 200px;
    height: 200px;
    margin: auto; 
    top: 0; left: 0; bottom: 0; right: 0;
    z-index: 1;
    opacity: 0;
    border: 3px solid rgba(255,255,255,.1);
  
    -webkit-animation: pulsejg1 4s linear infinite;
    -moz-animation: pulsejg1 4s linear infinite;
    animation: pulsejg1 4s linear infinite;
    -webkit-border-radius: 999px;
    -moz-border-radius: 999px;
    border-radius: 999px;
    -webkit-box-shadow: inset 0px 0px 15px 10px rgba(0, 0, 0, .6);
    -moz-box-shadow: inset 0px 0px 15px 10px rgba(0, 0, 0, .6);
    box-shadow: inset 0px 0px 15px 10px rgba(0, 0, 0, .6);
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.pulse2 {
    position: absolute;
    width: 200px;
    height: 200px;
    margin: auto; 
    top: 0; left: 0; bottom: 0; right: 0;
    z-index: 2;
    opacity: 0;
    border: 1px solid rgba(255,255,255,0);
  
    -webkit-animation: pulsejg2 4s linear infinite;
    -moz-animation: pulsejg2 4s linear infinite;
    animation: pulsejg2 4s linear infinite;
    -webkit-border-radius: 999px;
    -moz-border-radius: 999px;
    border-radius: 999px;
    -webkit-box-shadow: inset 0px 0px 12px 5px rgba(255, 255, 255, .8);
    -moz-box-shadow: inset 0px 0px 12px 5px rgba(255, 255, 255, .8);
    box-shadow: inset 0px 0px 12px 5px rgba(255, 255, 255, .8);
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

@-webkit-keyframes pulsejg1 {
    0% {
        -webkit-transform: scale(.6);
        opacity: 0;
    }

    50% {
        -webkit-transform: scale(.6);
        opacity: 0;
    }

    60% {
        -webkit-transform: scale(.9);
        opacity: .2;
    }

    70% {
        -webkit-transform: scale(1.1);
        opacity: .35;
    }

    80% {
        -webkit-transform: scale(1.25);
        opacity: .2;
    }

    100% {
        -webkit-transform: scale(1.4);
        opacity: 0;
    }
}

@-moz-keyframes pulsejg1 {
    0% {
        -moz-transform: scale(.6);
        opacity: 0;
    }

    50% {
        -moz-transform: scale(.6);
        opacity: 0;
    }

    60% {
        -moz-transform: scale(.9);
        opacity: .2;
    }

    70% {
        -moz-transform: scale(1.1);
        opacity: .35;
    }

    80% {
        -moz-transform: scale(1.25);
        opacity: .2;
    }

    100% {
        -moz-transform: scale(1.4);
        opacity: 0;
    }
}

@keyframes pulsejg1 {
    0% {
        transform: scale(.6);
        opacity: 0;
    }

    50% {
        transform: scale(.6);
        opacity: 0;
    }

    60% {
        transform: scale(.9);
        opacity: .1;
    }

    70% {
        transform: scale(1.1);
        opacity: .25;
    }

    80% {
        transform: scale(1.25);
        opacity: .1;
    }

    100% {
        transform: scale(1.4);
        opacity: 0;
    }
}

@-webkit-keyframes pulsejg2 {
    0% {
        -webkit-transform: scale(.6);
        opacity: 0;
    }

    40% {
        -webkit-transform: scale(.8);
        opacity: .05;
    }

    50% {
        -webkit-transform: scale(1);
        opacity: .1;
    }

    60% {
        -webkit-transform: scale(1.1);
        opacity: .3;
    }

    80% {
        -webkit-transform: scale(1.2);
        opacity: .1;
    }

    100% {
        -webkit-transform: scale(1.3);
        opacity: 0;
    }
}

@-moz-keyframes pulsejg2 {
    0% {
        -moz-transform: scale(.6);
        opacity: 0;
    }

    40% {
        -moz-transform: scale(.8);
        opacity: .05;
    }

    50% {
        -moz-transform: scale(1);
        opacity: .1;
    }

    60% {
        -moz-transform: scale(1.1);
        opacity: .3;
    }

    80% {
        -moz-transform: scale(1.2);
        opacity: .1;
    }

    100% {
        -moz-transform: scale(1.3);
        opacity: 0;
    }
}

@keyframes pulsejg2 {
    0% {
        transform: scale(.6);
        opacity: 0;
    }

    40% {
        transform: scale(.8);
        opacity: .05;
    }

    50% {
        transform: scale(1);
        opacity: .1;
    }

    60% {
        transform: scale(1.1);
        opacity: .3;
    }

    80% {
        transform: scale(1.2);
        opacity: .1;
    }

    100% {
        transform: scale(1.3);
        opacity: 0;
    }
}
</style>
</head>

<body>

<center><p>Use any Image. Does not have to be round.</p></center>
<div class="top">
  <div class="pulse1"></div>
  <div class="pulse2"></div>
  <div class="icon1"></div>
</div>
<div class="bottom">
  <div class="pulse1"></div>
  <div class="pulse2"></div>
  <div class="icon2"></div>
</div>


</body>
</html>