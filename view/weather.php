<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://kit.fontawesome.com/55a9fa42b8.js" crossorigin="anonymous"></script>
</head>
<style>
*,
*:after,
*:before {
  box-sizing: border-box;
}

body {
  background: #CEF;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 98vh;
 padding-bottom: 150px;
}

.widget {
  background: linear-gradient(to bottom right, #3cc0fe 20%, #0066ff);
  width: 900px;
  height: 400px;
  border-radius: 6px;
  box-shadow: 0px 60px 80px -20px rgba(39, 165, 253, 0.4);
  position: relative;
  overflow: hidden;
}

.pictoBackdrop {
  position: absolute;
  height: 560px;
  width: 560px;
  border-radius: 50%;
  background: linear-gradient(160deg, rgba(60, 192, 254, 0.7) 40%, rgba(0, 102, 255, 0.6));
  right: -40px;
  top: -90px;
}

.pictoFrame {
  position: absolute;
  background: #34373e;
  border-radius: 50%;
  box-shadow: 0px 50px 60px -20px #0066ff;
  height: 336px;
  width: 336px;
  right: 80px;
  top: 25px;
}

.pictoCloudBig {
  position: absolute;
  border-radius: 50%;
  background: #aacbe6;
  box-shadow: 20px 20px 80px -20px #aacbe6;
  height: 218.4px;
  width: 218.4px;
  top: 80px;
  right: 160px;
}
.pictoCloudFill {
  position: absolute;
  background: #aacbe6;
  box-shadow: 0px 20px 80px -20px #aacbe6;
  height: 152.88px;
  width: 152.88px;
  top: 191px;
  right: 265px;
}
.pictoCloudSmall {
  position: absolute;
  border-radius: 50%;
  background: #d2e9fa;
  height: 106.816px;
  width: 106.816px;
  top: 146px;
  right: 282px;
}

.iconCloudBig {
  position: absolute;
  border-radius: 50%;
  background: #9cd0ff;
  height: 36px;
  width: 36px;
  top: 200px;
  left: 80px;
}
.iconCloudSmall {
  position: absolute;
  border-radius: 50%;
  height: 23.4px;
  width: 23.4px;
  background: #d2e9fa;
  top: 213px;
  left: 70px;
}
.iconCloudFill {
  position: absolute;
  height: 16.38px;
  width: 16.38px;
  background: #9cd0ff;
  top: 220px;
  left: 80px;
}

.details{
  font-family: Roboto, sans-serif;
  display: flex;
  flex-direction: column;
  margin-top: 30px;
  margin-left: 60px;
}
.temperature {
  color: white;
  font-weight: 300;
  font-size: 10em;
}
.summary {
  color: #d2e9fa;
  font-size: 2em;
  font-weight: 300;
  width: 260px;
  margin-top: -16px;
  padding-bottom: 16px;
  border-bottom: 2px solid #9cd0ff;
  margin-left: 8px;
}
.place{
  color: #d2e9fa;
  font-size: 1.6em;
  font-weight: 300;
  margin-left: 8px;
}
.cloud,  .feellike {
  font-size: 15px;
  margin: 0;
  margin-left: 56px;
}
.precipitation, .wind {
  color: #d2e9fa;
  font-size: 1.6em;
  font-weight: 300;
  margin-left: 8px;
}
.precipitation {
  margin-top: 16px;
}
.wind {
  margin-top: 4px;
}

/* Find */
.find {
display: flex;
justify-content: center;
align-items: center;
 margin-top: 50px;
 margin-bottom: 0;
}
#cityInput{
  position: relative;
 width: 400px;
 height: 40px;
 border-radius: 5px;
 border-color: #0066ff;

}
#cityInput:focus {
  outline: none;
  border-color: #0066ff;
  transition: 0.3s;
}
button{
  position: absolute;
 background: none;
 border: none;
margin-left:21.75rem;
}
button:hover{
  cursor: pointer;
}

/* Rain */
html {
  height: 100%;
}

body{
  background: #222222 !important;
  box-shadow: inset 0 0 400px #111111;
  height: 100vh;
  overflow: hidden;
  position: relative;
}

.rain {
  background: white;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #ffffff 100%);
  height: 50px;
  position: absolute;
  width: 1px;
}

.rain:nth-of-type(1) {
  animation-name: rain-1;
  animation-delay: 18s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 10%;
  opacity: 0.53;
  top: -75%;
}

@Keyframes rain-1 {
  from {
    left: 10%;
    opacity: 0.53;
    top: -75%;
  }

  to {
    opacity: 0;
    top: 115%;
  }
}
.rain:nth-of-type(2) {
  animation-name: rain-2;
  animation-delay: 8s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 76%;
  opacity: 0.45;
  top: -64%;
}

@Keyframes rain-2 {
  from {
    left: 76%;
    opacity: 0.45;
    top: -64%;
  }

  to {
    opacity: 0;
    top: 104%;
  }
}
.rain:nth-of-type(3) {
  animation-name: rain-3;
  animation-delay: 13s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 1%;
  opacity: 0.38;
  top: -62%;
}

@Keyframes rain-3 {
  from {
    left: 1%;
    opacity: 0.38;
    top: -62%;
  }

  to {
    opacity: 0;
    top: 102%;
  }
}
.rain:nth-of-type(4) {
  animation-name: rain-4;
  animation-delay: 0s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 73%;
  opacity: 0.53;
  top: -78%;
}

@Keyframes rain-4 {
  from {
    left: 73%;
    opacity: 0.53;
    top: -78%;
  }

  to {
    opacity: 0;
    top: 118%;
  }
}
.rain:nth-of-type(5) {
  animation-name: rain-5;
  animation-delay: 2s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 7%;
  opacity: 0.45;
  top: -53%;
}

@Keyframes rain-5 {
  from {
    left: 7%;
    opacity: 0.45;
    top: -53%;
  }

  to {
    opacity: 0;
    top: 93%;
  }
}
.rain:nth-of-type(6) {
  animation-name: rain-6;
  animation-delay: 1s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 33%;
  opacity: 0.31;
  top: -77%;
}

@Keyframes rain-6 {
  from {
    left: 33%;
    opacity: 0.31;
    top: -77%;
  }

  to {
    opacity: 0;
    top: 117%;
  }
}
.rain:nth-of-type(7) {
  animation-name: rain-7;
  animation-delay: 18s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 38%;
  opacity: 0.39;
  top: -51%;
}

@Keyframes rain-7 {
  from {
    left: 38%;
    opacity: 0.39;
    top: -51%;
  }

  to {
    opacity: 0;
    top: 91%;
  }
}
.rain:nth-of-type(8) {
  animation-name: rain-8;
  animation-delay: 16s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 37%;
  opacity: 0.45;
  top: -79%;
}

@Keyframes rain-8 {
  from {
    left: 37%;
    opacity: 0.45;
    top: -79%;
  }

  to {
    opacity: 0;
    top: 119%;
  }
}
.rain:nth-of-type(9) {
  animation-name: rain-9;
  animation-delay: 3s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 91%;
  opacity: 0.33;
  top: -94%;
}

@Keyframes rain-9 {
  from {
    left: 91%;
    opacity: 0.33;
    top: -94%;
  }

  to {
    opacity: 0;
    top: 134%;
  }
}
.rain:nth-of-type(10) {
  animation-name: rain-10;
  animation-delay: 10s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 31%;
  opacity: 0.57;
  top: -90%;
}

@Keyframes rain-10 {
  from {
    left: 31%;
    opacity: 0.57;
    top: -90%;
  }

  to {
    opacity: 0;
    top: 130%;
  }
}
.rain:nth-of-type(11) {
  animation-name: rain-11;
  animation-delay: 17s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 96%;
  opacity: 0.46;
  top: -91%;
}

@Keyframes rain-11 {
  from {
    left: 96%;
    opacity: 0.46;
    top: -91%;
  }

  to {
    opacity: 0;
    top: 131%;
  }
}
.rain:nth-of-type(12) {
  animation-name: rain-12;
  animation-delay: 14s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 80%;
  opacity: 0.59;
  top: -77%;
}

@Keyframes rain-12 {
  from {
    left: 80%;
    opacity: 0.59;
    top: -77%;
  }

  to {
    opacity: 0;
    top: 117%;
  }
}
.rain:nth-of-type(13) {
  animation-name: rain-13;
  animation-delay: 16s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 56%;
  opacity: 0.33;
  top: -60%;
}

@Keyframes rain-13 {
  from {
    left: 56%;
    opacity: 0.33;
    top: -60%;
  }

  to {
    opacity: 0;
    top: 100%;
  }
}
.rain:nth-of-type(14) {
  animation-name: rain-14;
  animation-delay: 8s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 28%;
  opacity: 0.45;
  top: -70%;
}

@Keyframes rain-14 {
  from {
    left: 28%;
    opacity: 0.45;
    top: -70%;
  }

  to {
    opacity: 0;
    top: 110%;
  }
}
.rain:nth-of-type(15) {
  animation-name: rain-15;
  animation-delay: 5s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 44%;
  opacity: 0.34;
  top: -75%;
}

@Keyframes rain-15 {
  from {
    left: 44%;
    opacity: 0.34;
    top: -75%;
  }

  to {
    opacity: 0;
    top: 115%;
  }
}
.rain:nth-of-type(16) {
  animation-name: rain-16;
  animation-delay: 7s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 24%;
  opacity: 0.44;
  top: -79%;
}

@Keyframes rain-16 {
  from {
    left: 24%;
    opacity: 0.44;
    top: -79%;
  }

  to {
    opacity: 0;
    top: 119%;
  }
}
.rain:nth-of-type(17) {
  animation-name: rain-17;
  animation-delay: 14s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 26%;
  opacity: 0.49;
  top: -62%;
}

@Keyframes rain-17 {
  from {
    left: 26%;
    opacity: 0.49;
    top: -62%;
  }

  to {
    opacity: 0;
    top: 102%;
  }
}
.rain:nth-of-type(18) {
  animation-name: rain-18;
  animation-delay: 15s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 98%;
  opacity: 0.46;
  top: -81%;
}

@Keyframes rain-18 {
  from {
    left: 98%;
    opacity: 0.46;
    top: -81%;
  }

  to {
    opacity: 0;
    top: 121%;
  }
}
.rain:nth-of-type(19) {
  animation-name: rain-19;
  animation-delay: 8s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 68%;
  opacity: 0.5;
  top: -73%;
}

@Keyframes rain-19 {
  from {
    left: 68%;
    opacity: 0.5;
    top: -73%;
  }

  to {
    opacity: 0;
    top: 113%;
  }
}
.rain:nth-of-type(20) {
  animation-name: rain-20;
  animation-delay: 1s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 44%;
  opacity: 0.47;
  top: -57%;
}

@Keyframes rain-20 {
  from {
    left: 44%;
    opacity: 0.47;
    top: -57%;
  }

  to {
    opacity: 0;
    top: 97%;
  }
}
.rain:nth-of-type(21) {
  animation-name: rain-21;
  animation-delay: 5s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 25%;
  opacity: 0.42;
  top: -100%;
}

@Keyframes rain-21 {
  from {
    left: 25%;
    opacity: 0.42;
    top: -100%;
  }

  to {
    opacity: 0;
    top: 140%;
  }
}
.rain:nth-of-type(22) {
  animation-name: rain-22;
  animation-delay: 11s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 91%;
  opacity: 0.37;
  top: -96%;
}

@Keyframes rain-22 {
  from {
    left: 91%;
    opacity: 0.37;
    top: -96%;
  }

  to {
    opacity: 0;
    top: 136%;
  }
}
.rain:nth-of-type(23) {
  animation-name: rain-23;
  animation-delay: 7s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 29%;
  opacity: 0.56;
  top: -98%;
}

@Keyframes rain-23 {
  from {
    left: 29%;
    opacity: 0.56;
    top: -98%;
  }

  to {
    opacity: 0;
    top: 138%;
  }
}
.rain:nth-of-type(24) {
  animation-name: rain-24;
  animation-delay: 8s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 65%;
  opacity: 0.42;
  top: -70%;
}

@Keyframes rain-24 {
  from {
    left: 65%;
    opacity: 0.42;
    top: -70%;
  }

  to {
    opacity: 0;
    top: 110%;
  }
}
.rain:nth-of-type(25) {
  animation-name: rain-25;
  animation-delay: 11s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 7%;
  opacity: 0.34;
  top: -82%;
}

@Keyframes rain-25 {
  from {
    left: 7%;
    opacity: 0.34;
    top: -82%;
  }

  to {
    opacity: 0;
    top: 122%;
  }
}
.rain:nth-of-type(26) {
  animation-name: rain-26;
  animation-delay: 12s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 48%;
  opacity: 0.45;
  top: -90%;
}

@Keyframes rain-26 {
  from {
    left: 48%;
    opacity: 0.45;
    top: -90%;
  }

  to {
    opacity: 0;
    top: 130%;
  }
}
.rain:nth-of-type(27) {
  animation-name: rain-27;
  animation-delay: 3s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 43%;
  opacity: 0.34;
  top: -81%;
}

@Keyframes rain-27 {
  from {
    left: 43%;
    opacity: 0.34;
    top: -81%;
  }

  to {
    opacity: 0;
    top: 121%;
  }
}
.rain:nth-of-type(28) {
  animation-name: rain-28;
  animation-delay: 15s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 96%;
  opacity: 0.54;
  top: -99%;
}

@Keyframes rain-28 {
  from {
    left: 96%;
    opacity: 0.54;
    top: -99%;
  }

  to {
    opacity: 0;
    top: 139%;
  }
}
.rain:nth-of-type(29) {
  animation-name: rain-29;
  animation-delay: 15s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 99%;
  opacity: 0.54;
  top: -95%;
}

@Keyframes rain-29 {
  from {
    left: 99%;
    opacity: 0.54;
    top: -95%;
  }

  to {
    opacity: 0;
    top: 135%;
  }
}
.rain:nth-of-type(30) {
  animation-name: rain-30;
  animation-delay: 0s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 1%;
  opacity: 0.33;
  top: -78%;
}

@Keyframes rain-30 {
  from {
    left: 1%;
    opacity: 0.33;
    top: -78%;
  }

  to {
    opacity: 0;
    top: 118%;
  }
}
.rain:nth-of-type(31) {
  animation-name: rain-31;
  animation-delay: 7s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 3%;
  opacity: 0.49;
  top: -68%;
}

@Keyframes rain-31 {
  from {
    left: 3%;
    opacity: 0.49;
    top: -68%;
  }

  to {
    opacity: 0;
    top: 108%;
  }
}
.rain:nth-of-type(32) {
  animation-name: rain-32;
  animation-delay: 15s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 9%;
  opacity: 0.35;
  top: -53%;
}

@Keyframes rain-32 {
  from {
    left: 9%;
    opacity: 0.35;
    top: -53%;
  }

  to {
    opacity: 0;
    top: 93%;
  }
}
.rain:nth-of-type(33) {
  animation-name: rain-33;
  animation-delay: 9s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 68%;
  opacity: 0.43;
  top: -58%;
}

@Keyframes rain-33 {
  from {
    left: 68%;
    opacity: 0.43;
    top: -58%;
  }

  to {
    opacity: 0;
    top: 98%;
  }
}
.rain:nth-of-type(34) {
  animation-name: rain-34;
  animation-delay: 13s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 1%;
  opacity: 0.6;
  top: -54%;
}

@Keyframes rain-34 {
  from {
    left: 1%;
    opacity: 0.6;
    top: -54%;
  }

  to {
    opacity: 0;
    top: 94%;
  }
}
.rain:nth-of-type(35) {
  animation-name: rain-35;
  animation-delay: 18s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 22%;
  opacity: 0.32;
  top: -63%;
}

@Keyframes rain-35 {
  from {
    left: 22%;
    opacity: 0.32;
    top: -63%;
  }

  to {
    opacity: 0;
    top: 103%;
  }
}
.rain:nth-of-type(36) {
  animation-name: rain-36;
  animation-delay: 11s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 55%;
  opacity: 0.42;
  top: -64%;
}

@Keyframes rain-36 {
  from {
    left: 55%;
    opacity: 0.42;
    top: -64%;
  }

  to {
    opacity: 0;
    top: 104%;
  }
}
.rain:nth-of-type(37) {
  animation-name: rain-37;
  animation-delay: 13s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 20%;
  opacity: 0.39;
  top: -78%;
}

@Keyframes rain-37 {
  from {
    left: 20%;
    opacity: 0.39;
    top: -78%;
  }

  to {
    opacity: 0;
    top: 118%;
  }
}
.rain:nth-of-type(38) {
  animation-name: rain-38;
  animation-delay: 18s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 70%;
  opacity: 0.38;
  top: -68%;
}

@Keyframes rain-38 {
  from {
    left: 70%;
    opacity: 0.38;
    top: -68%;
  }

  to {
    opacity: 0;
    top: 108%;
  }
}
.rain:nth-of-type(39) {
  animation-name: rain-39;
  animation-delay: 12s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 73%;
  opacity: 0.52;
  top: -64%;
}

@Keyframes rain-39 {
  from {
    left: 73%;
    opacity: 0.52;
    top: -64%;
  }

  to {
    opacity: 0;
    top: 104%;
  }
}
.rain:nth-of-type(40) {
  animation-name: rain-40;
  animation-delay: 9s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 60%;
  opacity: 0.49;
  top: -71%;
}

@Keyframes rain-40 {
  from {
    left: 60%;
    opacity: 0.49;
    top: -71%;
  }

  to {
    opacity: 0;
    top: 111%;
  }
}
.rain:nth-of-type(41) {
  animation-name: rain-41;
  animation-delay: 15s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 13%;
  opacity: 0.6;
  top: -71%;
}

@Keyframes rain-41 {
  from {
    left: 13%;
    opacity: 0.6;
    top: -71%;
  }

  to {
    opacity: 0;
    top: 111%;
  }
}
.rain:nth-of-type(42) {
  animation-name: rain-42;
  animation-delay: 6s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 60%;
  opacity: 0.55;
  top: -79%;
}

@Keyframes rain-42 {
  from {
    left: 60%;
    opacity: 0.55;
    top: -79%;
  }

  to {
    opacity: 0;
    top: 119%;
  }
}
.rain:nth-of-type(43) {
  animation-name: rain-43;
  animation-delay: 13s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 22%;
  opacity: 0.32;
  top: -66%;
}

@Keyframes rain-43 {
  from {
    left: 22%;
    opacity: 0.32;
    top: -66%;
  }

  to {
    opacity: 0;
    top: 106%;
  }
}
.rain:nth-of-type(44) {
  animation-name: rain-44;
  animation-delay: 10s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 59%;
  opacity: 0.58;
  top: -54%;
}

@Keyframes rain-44 {
  from {
    left: 59%;
    opacity: 0.58;
    top: -54%;
  }

  to {
    opacity: 0;
    top: 94%;
  }
}
.rain:nth-of-type(45) {
  animation-name: rain-45;
  animation-delay: 8s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 88%;
  opacity: 0.32;
  top: -60%;
}

@Keyframes rain-45 {
  from {
    left: 88%;
    opacity: 0.32;
    top: -60%;
  }

  to {
    opacity: 0;
    top: 100%;
  }
}
.rain:nth-of-type(46) {
  animation-name: rain-46;
  animation-delay: 4s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 42%;
  opacity: 0.47;
  top: -94%;
}

@Keyframes rain-46 {
  from {
    left: 42%;
    opacity: 0.47;
    top: -94%;
  }

  to {
    opacity: 0;
    top: 134%;
  }
}
.rain:nth-of-type(47) {
  animation-name: rain-47;
  animation-delay: 5s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 100%;
  opacity: 0.49;
  top: -95%;
}

@Keyframes rain-47 {
  from {
    left: 100%;
    opacity: 0.49;
    top: -95%;
  }

  to {
    opacity: 0;
    top: 135%;
  }
}
.rain:nth-of-type(48) {
  animation-name: rain-48;
  animation-delay: 17s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 8%;
  opacity: 0.31;
  top: -85%;
}

@Keyframes rain-48 {
  from {
    left: 8%;
    opacity: 0.31;
    top: -85%;
  }

  to {
    opacity: 0;
    top: 125%;
  }
}
.rain:nth-of-type(49) {
  animation-name: rain-49;
  animation-delay: 7s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 14%;
  opacity: 0.48;
  top: -87%;
}

@Keyframes rain-49 {
  from {
    left: 14%;
    opacity: 0.48;
    top: -87%;
  }

  to {
    opacity: 0;
    top: 127%;
  }
}
.rain:nth-of-type(50) {
  animation-name: rain-50;
  animation-delay: 9s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 84%;
  opacity: 0.47;
  top: -66%;
}

@Keyframes rain-50 {
  from {
    left: 84%;
    opacity: 0.47;
    top: -66%;
  }

  to {
    opacity: 0;
    top: 106%;
  }
}
.rain:nth-of-type(51) {
  animation-name: rain-51;
  animation-delay: 15s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 75%;
  opacity: 0.36;
  top: -66%;
}

@Keyframes rain-51 {
  from {
    left: 75%;
    opacity: 0.36;
    top: -66%;
  }

  to {
    opacity: 0;
    top: 106%;
  }
}
.rain:nth-of-type(52) {
  animation-name: rain-52;
  animation-delay: 0s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 59%;
  opacity: 0.32;
  top: -100%;
}

@Keyframes rain-52 {
  from {
    left: 59%;
    opacity: 0.32;
    top: -100%;
  }

  to {
    opacity: 0;
    top: 140%;
  }
}
.rain:nth-of-type(53) {
  animation-name: rain-53;
  animation-delay: 6s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 62%;
  opacity: 0.31;
  top: -59%;
}

@Keyframes rain-53 {
  from {
    left: 62%;
    opacity: 0.31;
    top: -59%;
  }

  to {
    opacity: 0;
    top: 99%;
  }
}
.rain:nth-of-type(54) {
  animation-name: rain-54;
  animation-delay: 4s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 46%;
  opacity: 0.6;
  top: -82%;
}

@Keyframes rain-54 {
  from {
    left: 46%;
    opacity: 0.6;
    top: -82%;
  }

  to {
    opacity: 0;
    top: 122%;
  }
}
.rain:nth-of-type(55) {
  animation-name: rain-55;
  animation-delay: 6s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 96%;
  opacity: 0.31;
  top: -84%;
}

@Keyframes rain-55 {
  from {
    left: 96%;
    opacity: 0.31;
    top: -84%;
  }

  to {
    opacity: 0;
    top: 124%;
  }
}
.rain:nth-of-type(56) {
  animation-name: rain-56;
  animation-delay: 6s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 82%;
  opacity: 0.34;
  top: -59%;
}

@Keyframes rain-56 {
  from {
    left: 82%;
    opacity: 0.34;
    top: -59%;
  }

  to {
    opacity: 0;
    top: 99%;
  }
}
.rain:nth-of-type(57) {
  animation-name: rain-57;
  animation-delay: 13s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 45%;
  opacity: 0.31;
  top: -63%;
}

@Keyframes rain-57 {
  from {
    left: 45%;
    opacity: 0.31;
    top: -63%;
  }

  to {
    opacity: 0;
    top: 103%;
  }
}
.rain:nth-of-type(58) {
  animation-name: rain-58;
  animation-delay: 15s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 1%;
  opacity: 0.55;
  top: -77%;
}

@Keyframes rain-58 {
  from {
    left: 1%;
    opacity: 0.55;
    top: -77%;
  }

  to {
    opacity: 0;
    top: 117%;
  }
}
.rain:nth-of-type(59) {
  animation-name: rain-59;
  animation-delay: 16s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 12%;
  opacity: 0.49;
  top: -84%;
}

@Keyframes rain-59 {
  from {
    left: 12%;
    opacity: 0.49;
    top: -84%;
  }

  to {
    opacity: 0;
    top: 124%;
  }
}
.rain:nth-of-type(60) {
  animation-name: rain-60;
  animation-delay: 13s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 98%;
  opacity: 0.37;
  top: -69%;
}

@Keyframes rain-60 {
  from {
    left: 98%;
    opacity: 0.37;
    top: -69%;
  }

  to {
    opacity: 0;
    top: 109%;
  }
}
.rain:nth-of-type(61) {
  animation-name: rain-61;
  animation-delay: 9s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 72%;
  opacity: 0.32;
  top: -83%;
}

@Keyframes rain-61 {
  from {
    left: 72%;
    opacity: 0.32;
    top: -83%;
  }

  to {
    opacity: 0;
    top: 123%;
  }
}
.rain:nth-of-type(62) {
  animation-name: rain-62;
  animation-delay: 4s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 14%;
  opacity: 0.46;
  top: -79%;
}

@Keyframes rain-62 {
  from {
    left: 14%;
    opacity: 0.46;
    top: -79%;
  }

  to {
    opacity: 0;
    top: 119%;
  }
}
.rain:nth-of-type(63) {
  animation-name: rain-63;
  animation-delay: 18s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 21%;
  opacity: 0.35;
  top: -53%;
}

@Keyframes rain-63 {
  from {
    left: 21%;
    opacity: 0.35;
    top: -53%;
  }

  to {
    opacity: 0;
    top: 93%;
  }
}
.rain:nth-of-type(64) {
  animation-name: rain-64;
  animation-delay: 17s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 68%;
  opacity: 0.37;
  top: -89%;
}

@Keyframes rain-64 {
  from {
    left: 68%;
    opacity: 0.37;
    top: -89%;
  }

  to {
    opacity: 0;
    top: 129%;
  }
}
.rain:nth-of-type(65) {
  animation-name: rain-65;
  animation-delay: 13s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 26%;
  opacity: 0.55;
  top: -88%;
}

@Keyframes rain-65 {
  from {
    left: 26%;
    opacity: 0.55;
    top: -88%;
  }

  to {
    opacity: 0;
    top: 128%;
  }
}
.rain:nth-of-type(66) {
  animation-name: rain-66;
  animation-delay: 4s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 99%;
  opacity: 0.34;
  top: -69%;
}

@Keyframes rain-66 {
  from {
    left: 99%;
    opacity: 0.34;
    top: -69%;
  }

  to {
    opacity: 0;
    top: 109%;
  }
}
.rain:nth-of-type(67) {
  animation-name: rain-67;
  animation-delay: 4s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 2%;
  opacity: 0.52;
  top: -61%;
}

@Keyframes rain-67 {
  from {
    left: 2%;
    opacity: 0.52;
    top: -61%;
  }

  to {
    opacity: 0;
    top: 101%;
  }
}
.rain:nth-of-type(68) {
  animation-name: rain-68;
  animation-delay: 1s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 87%;
  opacity: 0.53;
  top: -100%;
}

@Keyframes rain-68 {
  from {
    left: 87%;
    opacity: 0.53;
    top: -100%;
  }

  to {
    opacity: 0;
    top: 140%;
  }
}
.rain:nth-of-type(69) {
  animation-name: rain-69;
  animation-delay: 17s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 95%;
  opacity: 0.38;
  top: -52%;
}

@Keyframes rain-69 {
  from {
    left: 95%;
    opacity: 0.38;
    top: -52%;
  }

  to {
    opacity: 0;
    top: 92%;
  }
}
.rain:nth-of-type(70) {
  animation-name: rain-70;
  animation-delay: 10s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 96%;
  opacity: 0.37;
  top: -76%;
}

@Keyframes rain-70 {
  from {
    left: 96%;
    opacity: 0.37;
    top: -76%;
  }

  to {
    opacity: 0;
    top: 116%;
  }
}
.rain:nth-of-type(71) {
  animation-name: rain-71;
  animation-delay: 17s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 44%;
  opacity: 0.33;
  top: -100%;
}

@Keyframes rain-71 {
  from {
    left: 44%;
    opacity: 0.33;
    top: -100%;
  }

  to {
    opacity: 0;
    top: 140%;
  }
}
.rain:nth-of-type(72) {
  animation-name: rain-72;
  animation-delay: 5s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 7%;
  opacity: 0.55;
  top: -95%;
}

@Keyframes rain-72 {
  from {
    left: 7%;
    opacity: 0.55;
    top: -95%;
  }

  to {
    opacity: 0;
    top: 135%;
  }
}
.rain:nth-of-type(73) {
  animation-name: rain-73;
  animation-delay: 7s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 1%;
  opacity: 0.37;
  top: -82%;
}

@Keyframes rain-73 {
  from {
    left: 1%;
    opacity: 0.37;
    top: -82%;
  }

  to {
    opacity: 0;
    top: 122%;
  }
}
.rain:nth-of-type(74) {
  animation-name: rain-74;
  animation-delay: 12s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 99%;
  opacity: 0.37;
  top: -69%;
}

@Keyframes rain-74 {
  from {
    left: 99%;
    opacity: 0.37;
    top: -69%;
  }

  to {
    opacity: 0;
    top: 109%;
  }
}
.rain:nth-of-type(75) {
  animation-name: rain-75;
  animation-delay: 3s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 2%;
  opacity: 0.31;
  top: -93%;
}

@Keyframes rain-75 {
  from {
    left: 2%;
    opacity: 0.31;
    top: -93%;
  }

  to {
    opacity: 0;
    top: 133%;
  }
}
.rain:nth-of-type(76) {
  animation-name: rain-76;
  animation-delay: 5s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 93%;
  opacity: 0.33;
  top: -69%;
}

@Keyframes rain-76 {
  from {
    left: 93%;
    opacity: 0.33;
    top: -69%;
  }

  to {
    opacity: 0;
    top: 109%;
  }
}
.rain:nth-of-type(77) {
  animation-name: rain-77;
  animation-delay: 1s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 48%;
  opacity: 0.54;
  top: -87%;
}

@Keyframes rain-77 {
  from {
    left: 48%;
    opacity: 0.54;
    top: -87%;
  }

  to {
    opacity: 0;
    top: 127%;
  }
}
.rain:nth-of-type(78) {
  animation-name: rain-78;
  animation-delay: 3s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 45%;
  opacity: 0.48;
  top: -65%;
}

@Keyframes rain-78 {
  from {
    left: 45%;
    opacity: 0.48;
    top: -65%;
  }

  to {
    opacity: 0;
    top: 105%;
  }
}
.rain:nth-of-type(79) {
  animation-name: rain-79;
  animation-delay: 4s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 67%;
  opacity: 0.6;
  top: -74%;
}

@Keyframes rain-79 {
  from {
    left: 67%;
    opacity: 0.6;
    top: -74%;
  }

  to {
    opacity: 0;
    top: 114%;
  }
}
.rain:nth-of-type(80) {
  animation-name: rain-80;
  animation-delay: 12s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 8%;
  opacity: 0.42;
  top: -94%;
}

@Keyframes rain-80 {
  from {
    left: 8%;
    opacity: 0.42;
    top: -94%;
  }

  to {
    opacity: 0;
    top: 134%;
  }
}
.rain:nth-of-type(81) {
  animation-name: rain-81;
  animation-delay: 3s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 37%;
  opacity: 0.54;
  top: -77%;
}

@Keyframes rain-81 {
  from {
    left: 37%;
    opacity: 0.54;
    top: -77%;
  }

  to {
    opacity: 0;
    top: 117%;
  }
}
.rain:nth-of-type(82) {
  animation-name: rain-82;
  animation-delay: 8s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 61%;
  opacity: 0.59;
  top: -74%;
}

@Keyframes rain-82 {
  from {
    left: 61%;
    opacity: 0.59;
    top: -74%;
  }

  to {
    opacity: 0;
    top: 114%;
  }
}
.rain:nth-of-type(83) {
  animation-name: rain-83;
  animation-delay: 10s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 44%;
  opacity: 0.45;
  top: -77%;
}

@Keyframes rain-83 {
  from {
    left: 44%;
    opacity: 0.45;
    top: -77%;
  }

  to {
    opacity: 0;
    top: 117%;
  }
}
.rain:nth-of-type(84) {
  animation-name: rain-84;
  animation-delay: 17s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 97%;
  opacity: 0.56;
  top: -85%;
}

@Keyframes rain-84 {
  from {
    left: 97%;
    opacity: 0.56;
    top: -85%;
  }

  to {
    opacity: 0;
    top: 125%;
  }
}
.rain:nth-of-type(85) {
  animation-name: rain-85;
  animation-delay: 14s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 84%;
  opacity: 0.32;
  top: -82%;
}

@Keyframes rain-85 {
  from {
    left: 84%;
    opacity: 0.32;
    top: -82%;
  }

  to {
    opacity: 0;
    top: 122%;
  }
}
.rain:nth-of-type(86) {
  animation-name: rain-86;
  animation-delay: 17s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 57%;
  opacity: 0.42;
  top: -85%;
}

@Keyframes rain-86 {
  from {
    left: 57%;
    opacity: 0.42;
    top: -85%;
  }

  to {
    opacity: 0;
    top: 125%;
  }
}
.rain:nth-of-type(87) {
  animation-name: rain-87;
  animation-delay: 14s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 65%;
  opacity: 0.55;
  top: -73%;
}

@Keyframes rain-87 {
  from {
    left: 65%;
    opacity: 0.55;
    top: -73%;
  }

  to {
    opacity: 0;
    top: 113%;
  }
}
.rain:nth-of-type(88) {
  animation-name: rain-88;
  animation-delay: 19s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 18%;
  opacity: 0.45;
  top: -73%;
}

@Keyframes rain-88 {
  from {
    left: 18%;
    opacity: 0.45;
    top: -73%;
  }

  to {
    opacity: 0;
    top: 113%;
  }
}
.rain:nth-of-type(89) {
  animation-name: rain-89;
  animation-delay: 16s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 51%;
  opacity: 0.38;
  top: -77%;
}

@Keyframes rain-89 {
  from {
    left: 51%;
    opacity: 0.38;
    top: -77%;
  }

  to {
    opacity: 0;
    top: 117%;
  }
}
.rain:nth-of-type(90) {
  animation-name: rain-90;
  animation-delay: 8s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 91%;
  opacity: 0.41;
  top: -62%;
}

@Keyframes rain-90 {
  from {
    left: 91%;
    opacity: 0.41;
    top: -62%;
  }

  to {
    opacity: 0;
    top: 102%;
  }
}
.rain:nth-of-type(91) {
  animation-name: rain-91;
  animation-delay: 2s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 54%;
  opacity: 0.45;
  top: -51%;
}

@Keyframes rain-91 {
  from {
    left: 54%;
    opacity: 0.45;
    top: -51%;
  }

  to {
    opacity: 0;
    top: 91%;
  }
}
.rain:nth-of-type(92) {
  animation-name: rain-92;
  animation-delay: 16s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 67%;
  opacity: 0.52;
  top: -76%;
}

@Keyframes rain-92 {
  from {
    left: 67%;
    opacity: 0.52;
    top: -76%;
  }

  to {
    opacity: 0;
    top: 116%;
  }
}
.rain:nth-of-type(93) {
  animation-name: rain-93;
  animation-delay: 14s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 2%;
  opacity: 0.6;
  top: -65%;
}

@Keyframes rain-93 {
  from {
    left: 2%;
    opacity: 0.6;
    top: -65%;
  }

  to {
    opacity: 0;
    top: 105%;
  }
}
.rain:nth-of-type(94) {
  animation-name: rain-94;
  animation-delay: 5s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 88%;
  opacity: 0.43;
  top: -74%;
}

@Keyframes rain-94 {
  from {
    left: 88%;
    opacity: 0.43;
    top: -74%;
  }

  to {
    opacity: 0;
    top: 114%;
  }
}
.rain:nth-of-type(95) {
  animation-name: rain-95;
  animation-delay: 13s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 61%;
  opacity: 0.38;
  top: -74%;
}

@Keyframes rain-95 {
  from {
    left: 61%;
    opacity: 0.38;
    top: -74%;
  }

  to {
    opacity: 0;
    top: 114%;
  }
}
.rain:nth-of-type(96) {
  animation-name: rain-96;
  animation-delay: 5s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 40%;
  opacity: 0.36;
  top: -93%;
}

@Keyframes rain-96 {
  from {
    left: 40%;
    opacity: 0.36;
    top: -93%;
  }

  to {
    opacity: 0;
    top: 133%;
  }
}
.rain:nth-of-type(97) {
  animation-name: rain-97;
  animation-delay: 10s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 56%;
  opacity: 0.41;
  top: -73%;
}

@Keyframes rain-97 {
  from {
    left: 56%;
    opacity: 0.41;
    top: -73%;
  }

  to {
    opacity: 0;
    top: 113%;
  }
}
.rain:nth-of-type(98) {
  animation-name: rain-98;
  animation-delay: 14s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 85%;
  opacity: 0.45;
  top: -59%;
}

@Keyframes rain-98 {
  from {
    left: 85%;
    opacity: 0.45;
    top: -59%;
  }

  to {
    opacity: 0;
    top: 99%;
  }
}
.rain:nth-of-type(99) {
  animation-name: rain-99;
  animation-delay: 9s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 78%;
  opacity: 0.43;
  top: -63%;
}

@Keyframes rain-99 {
  from {
    left: 78%;
    opacity: 0.43;
    top: -63%;
  }

  to {
    opacity: 0;
    top: 103%;
  }
}
.rain:nth-of-type(100) {
  animation-name: rain-100;
  animation-delay: 14s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 100%;
  opacity: 0.46;
  top: -54%;
}

@Keyframes rain-100 {
  from {
    left: 100%;
    opacity: 0.46;
    top: -54%;
  }

  to {
    opacity: 0;
    top: 94%;
  }
}
.rain:nth-of-type(101) {
  animation-name: rain-101;
  animation-delay: 16s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 34%;
  opacity: 0.55;
  top: -97%;
}

@Keyframes rain-101 {
  from {
    left: 34%;
    opacity: 0.55;
    top: -97%;
  }

  to {
    opacity: 0;
    top: 137%;
  }
}
.rain:nth-of-type(102) {
  animation-name: rain-102;
  animation-delay: 4s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 59%;
  opacity: 0.35;
  top: -58%;
}

@Keyframes rain-102 {
  from {
    left: 59%;
    opacity: 0.35;
    top: -58%;
  }

  to {
    opacity: 0;
    top: 98%;
  }
}
.rain:nth-of-type(103) {
  animation-name: rain-103;
  animation-delay: 13s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 47%;
  opacity: 0.32;
  top: -95%;
}

@Keyframes rain-103 {
  from {
    left: 47%;
    opacity: 0.32;
    top: -95%;
  }

  to {
    opacity: 0;
    top: 135%;
  }
}
.rain:nth-of-type(104) {
  animation-name: rain-104;
  animation-delay: 3s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 5%;
  opacity: 0.45;
  top: -99%;
}

@Keyframes rain-104 {
  from {
    left: 5%;
    opacity: 0.45;
    top: -99%;
  }

  to {
    opacity: 0;
    top: 139%;
  }
}
.rain:nth-of-type(105) {
  animation-name: rain-105;
  animation-delay: 17s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 13%;
  opacity: 0.34;
  top: -100%;
}

@Keyframes rain-105 {
  from {
    left: 13%;
    opacity: 0.34;
    top: -100%;
  }

  to {
    opacity: 0;
    top: 140%;
  }
}
.rain:nth-of-type(106) {
  animation-name: rain-106;
  animation-delay: 19s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 61%;
  opacity: 0.48;
  top: -64%;
}

@Keyframes rain-106 {
  from {
    left: 61%;
    opacity: 0.48;
    top: -64%;
  }

  to {
    opacity: 0;
    top: 104%;
  }
}
.rain:nth-of-type(107) {
  animation-name: rain-107;
  animation-delay: 13s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 21%;
  opacity: 0.56;
  top: -86%;
}

@Keyframes rain-107 {
  from {
    left: 21%;
    opacity: 0.56;
    top: -86%;
  }

  to {
    opacity: 0;
    top: 126%;
  }
}
.rain:nth-of-type(108) {
  animation-name: rain-108;
  animation-delay: 18s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 84%;
  opacity: 0.39;
  top: -93%;
}

@Keyframes rain-108 {
  from {
    left: 84%;
    opacity: 0.39;
    top: -93%;
  }

  to {
    opacity: 0;
    top: 133%;
  }
}
.rain:nth-of-type(109) {
  animation-name: rain-109;
  animation-delay: 1s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 95%;
  opacity: 0.5;
  top: -55%;
}

@Keyframes rain-109 {
  from {
    left: 95%;
    opacity: 0.5;
    top: -55%;
  }

  to {
    opacity: 0;
    top: 95%;
  }
}
.rain:nth-of-type(110) {
  animation-name: rain-110;
  animation-delay: 3s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 19%;
  opacity: 0.38;
  top: -65%;
}

@Keyframes rain-110 {
  from {
    left: 19%;
    opacity: 0.38;
    top: -65%;
  }

  to {
    opacity: 0;
    top: 105%;
  }
}
.rain:nth-of-type(111) {
  animation-name: rain-111;
  animation-delay: 18s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 91%;
  opacity: 0.35;
  top: -60%;
}

@Keyframes rain-111 {
  from {
    left: 91%;
    opacity: 0.35;
    top: -60%;
  }

  to {
    opacity: 0;
    top: 100%;
  }
}
.rain:nth-of-type(112) {
  animation-name: rain-112;
  animation-delay: 19s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 36%;
  opacity: 0.54;
  top: -69%;
}

@Keyframes rain-112 {
  from {
    left: 36%;
    opacity: 0.54;
    top: -69%;
  }

  to {
    opacity: 0;
    top: 109%;
  }
}
.rain:nth-of-type(113) {
  animation-name: rain-113;
  animation-delay: 7s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 79%;
  opacity: 0.51;
  top: -53%;
}

@Keyframes rain-113 {
  from {
    left: 79%;
    opacity: 0.51;
    top: -53%;
  }

  to {
    opacity: 0;
    top: 93%;
  }
}
.rain:nth-of-type(114) {
  animation-name: rain-114;
  animation-delay: 15s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 62%;
  opacity: 0.43;
  top: -54%;
}

@Keyframes rain-114 {
  from {
    left: 62%;
    opacity: 0.43;
    top: -54%;
  }

  to {
    opacity: 0;
    top: 94%;
  }
}
.rain:nth-of-type(115) {
  animation-name: rain-115;
  animation-delay: 6s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 93%;
  opacity: 0.48;
  top: -63%;
}

@Keyframes rain-115 {
  from {
    left: 93%;
    opacity: 0.48;
    top: -63%;
  }

  to {
    opacity: 0;
    top: 103%;
  }
}
.rain:nth-of-type(116) {
  animation-name: rain-116;
  animation-delay: 10s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 52%;
  opacity: 0.32;
  top: -93%;
}

@Keyframes rain-116 {
  from {
    left: 52%;
    opacity: 0.32;
    top: -93%;
  }

  to {
    opacity: 0;
    top: 133%;
  }
}
.rain:nth-of-type(117) {
  animation-name: rain-117;
  animation-delay: 16s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 44%;
  opacity: 0.31;
  top: -94%;
}

@Keyframes rain-117 {
  from {
    left: 44%;
    opacity: 0.31;
    top: -94%;
  }

  to {
    opacity: 0;
    top: 134%;
  }
}
.rain:nth-of-type(118) {
  animation-name: rain-118;
  animation-delay: 3s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 63%;
  opacity: 0.58;
  top: -95%;
}

@Keyframes rain-118 {
  from {
    left: 63%;
    opacity: 0.58;
    top: -95%;
  }

  to {
    opacity: 0;
    top: 135%;
  }
}
.rain:nth-of-type(119) {
  animation-name: rain-119;
  animation-delay: 17s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 6%;
  opacity: 0.35;
  top: -95%;
}

@Keyframes rain-119 {
  from {
    left: 6%;
    opacity: 0.35;
    top: -95%;
  }

  to {
    opacity: 0;
    top: 135%;
  }
}
.rain:nth-of-type(120) {
  animation-name: rain-120;
  animation-delay: 19s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 3%;
  opacity: 0.55;
  top: -75%;
}

@Keyframes rain-120 {
  from {
    left: 3%;
    opacity: 0.55;
    top: -75%;
  }

  to {
    opacity: 0;
    top: 115%;
  }
}
.rain:nth-of-type(121) {
  animation-name: rain-121;
  animation-delay: 2s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 15%;
  opacity: 0.31;
  top: -55%;
}

@Keyframes rain-121 {
  from {
    left: 15%;
    opacity: 0.31;
    top: -55%;
  }

  to {
    opacity: 0;
    top: 95%;
  }
}
.rain:nth-of-type(122) {
  animation-name: rain-122;
  animation-delay: 6s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 39%;
  opacity: 0.6;
  top: -67%;
}

@Keyframes rain-122 {
  from {
    left: 39%;
    opacity: 0.6;
    top: -67%;
  }

  to {
    opacity: 0;
    top: 107%;
  }
}
.rain:nth-of-type(123) {
  animation-name: rain-123;
  animation-delay: 7s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 56%;
  opacity: 0.34;
  top: -85%;
}

@Keyframes rain-123 {
  from {
    left: 56%;
    opacity: 0.34;
    top: -85%;
  }

  to {
    opacity: 0;
    top: 125%;
  }
}
.rain:nth-of-type(124) {
  animation-name: rain-124;
  animation-delay: 13s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 4%;
  opacity: 0.52;
  top: -67%;
}

@Keyframes rain-124 {
  from {
    left: 4%;
    opacity: 0.52;
    top: -67%;
  }

  to {
    opacity: 0;
    top: 107%;
  }
}
.rain:nth-of-type(125) {
  animation-name: rain-125;
  animation-delay: 6s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 69%;
  opacity: 0.49;
  top: -63%;
}

@Keyframes rain-125 {
  from {
    left: 69%;
    opacity: 0.49;
    top: -63%;
  }

  to {
    opacity: 0;
    top: 103%;
  }
}
.rain:nth-of-type(126) {
  animation-name: rain-126;
  animation-delay: 3s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 8%;
  opacity: 0.47;
  top: -65%;
}

@Keyframes rain-126 {
  from {
    left: 8%;
    opacity: 0.47;
    top: -65%;
  }

  to {
    opacity: 0;
    top: 105%;
  }
}
.rain:nth-of-type(127) {
  animation-name: rain-127;
  animation-delay: 9s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 90%;
  opacity: 0.45;
  top: -82%;
}

@Keyframes rain-127 {
  from {
    left: 90%;
    opacity: 0.45;
    top: -82%;
  }

  to {
    opacity: 0;
    top: 122%;
  }
}
.rain:nth-of-type(128) {
  animation-name: rain-128;
  animation-delay: 16s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 61%;
  opacity: 0.31;
  top: -71%;
}

@Keyframes rain-128 {
  from {
    left: 61%;
    opacity: 0.31;
    top: -71%;
  }

  to {
    opacity: 0;
    top: 111%;
  }
}
.rain:nth-of-type(129) {
  animation-name: rain-129;
  animation-delay: 9s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 84%;
  opacity: 0.35;
  top: -76%;
}

@Keyframes rain-129 {
  from {
    left: 84%;
    opacity: 0.35;
    top: -76%;
  }

  to {
    opacity: 0;
    top: 116%;
  }
}
.rain:nth-of-type(130) {
  animation-name: rain-130;
  animation-delay: 18s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 35%;
  opacity: 0.5;
  top: -60%;
}

@Keyframes rain-130 {
  from {
    left: 35%;
    opacity: 0.5;
    top: -60%;
  }

  to {
    opacity: 0;
    top: 100%;
  }
}
.rain:nth-of-type(131) {
  animation-name: rain-131;
  animation-delay: 0s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 63%;
  opacity: 0.52;
  top: -77%;
}

@Keyframes rain-131 {
  from {
    left: 63%;
    opacity: 0.52;
    top: -77%;
  }

  to {
    opacity: 0;
    top: 117%;
  }
}
.rain:nth-of-type(132) {
  animation-name: rain-132;
  animation-delay: 1s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 33%;
  opacity: 0.56;
  top: -94%;
}

@Keyframes rain-132 {
  from {
    left: 33%;
    opacity: 0.56;
    top: -94%;
  }

  to {
    opacity: 0;
    top: 134%;
  }
}
.rain:nth-of-type(133) {
  animation-name: rain-133;
  animation-delay: 16s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 87%;
  opacity: 0.46;
  top: -58%;
}

@Keyframes rain-133 {
  from {
    left: 87%;
    opacity: 0.46;
    top: -58%;
  }

  to {
    opacity: 0;
    top: 98%;
  }
}
.rain:nth-of-type(134) {
  animation-name: rain-134;
  animation-delay: 1s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 31%;
  opacity: 0.35;
  top: -67%;
}

@Keyframes rain-134 {
  from {
    left: 31%;
    opacity: 0.35;
    top: -67%;
  }

  to {
    opacity: 0;
    top: 107%;
  }
}
.rain:nth-of-type(135) {
  animation-name: rain-135;
  animation-delay: 11s;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  left: 45%;
  opacity: 0.32;
  top: -68%;
}

@Keyframes rain-135 {
  from {
    left: 45%;
    opacity: 0.32;
    top: -68%;
  }

  to {
    opacity: 0;
    top: 108%;
  }
}
.rain:nth-of-type(136) {
  animation-name: rain-136;
  animation-delay: 14s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 26%;
  opacity: 0.43;
  top: -54%;
}

@Keyframes rain-136 {
  from {
    left: 26%;
    opacity: 0.43;
    top: -54%;
  }

  to {
    opacity: 0;
    top: 94%;
  }
}
.rain:nth-of-type(137) {
  animation-name: rain-137;
  animation-delay: 12s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 14%;
  opacity: 0.59;
  top: -98%;
}

@Keyframes rain-137 {
  from {
    left: 14%;
    opacity: 0.59;
    top: -98%;
  }

  to {
    opacity: 0;
    top: 138%;
  }
}
.rain:nth-of-type(138) {
  animation-name: rain-138;
  animation-delay: 1s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 99%;
  opacity: 0.55;
  top: -70%;
}

@Keyframes rain-138 {
  from {
    left: 99%;
    opacity: 0.55;
    top: -70%;
  }

  to {
    opacity: 0;
    top: 110%;
  }
}
.rain:nth-of-type(139) {
  animation-name: rain-139;
  animation-delay: 8s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 45%;
  opacity: 0.35;
  top: -93%;
}

@Keyframes rain-139 {
  from {
    left: 45%;
    opacity: 0.35;
    top: -93%;
  }

  to {
    opacity: 0;
    top: 133%;
  }
}
.rain:nth-of-type(140) {
  animation-name: rain-140;
  animation-delay: 13s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 69%;
  opacity: 0.33;
  top: -52%;
}

@Keyframes rain-140 {
  from {
    left: 69%;
    opacity: 0.33;
    top: -52%;
  }

  to {
    opacity: 0;
    top: 92%;
  }
}
.rain:nth-of-type(141) {
  animation-name: rain-141;
  animation-delay: 2s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 51%;
  opacity: 0.47;
  top: -91%;
}

@Keyframes rain-141 {
  from {
    left: 51%;
    opacity: 0.47;
    top: -91%;
  }

  to {
    opacity: 0;
    top: 131%;
  }
}
.rain:nth-of-type(142) {
  animation-name: rain-142;
  animation-delay: 0s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 86%;
  opacity: 0.51;
  top: -81%;
}

@Keyframes rain-142 {
  from {
    left: 86%;
    opacity: 0.51;
    top: -81%;
  }

  to {
    opacity: 0;
    top: 121%;
  }
}
.rain:nth-of-type(143) {
  animation-name: rain-143;
  animation-delay: 11s;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  left: 62%;
  opacity: 0.54;
  top: -73%;
}

@Keyframes rain-143 {
  from {
    left: 62%;
    opacity: 0.54;
    top: -73%;
  }

  to {
    opacity: 0;
    top: 113%;
  }
}
.rain:nth-of-type(144) {
  animation-name: rain-144;
  animation-delay: 7s;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  left: 84%;
  opacity: 0.39;
  top: -65%;
}

@Keyframes rain-144 {
  from {
    left: 84%;
    opacity: 0.39;
    top: -65%;
  }

  to {
    opacity: 0;
    top: 105%;
  }
}
.rain:nth-of-type(145) {
  animation-name: rain-145;
  animation-delay: 17s;
  animation-duration: 6s;
  animation-iteration-count: infinite;
  left: 4%;
  opacity: 0.33;
  top: -80%;
}

@Keyframes rain-145 {
  from {
    left: 4%;
    opacity: 0.33;
    top: -80%;
  }

  to {
    opacity: 0;
    top: 120%;
  }
}
.rain:nth-of-type(146) {
  animation-name: rain-146;
  animation-delay: 7s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 29%;
  opacity: 0.6;
  top: -73%;
}

@Keyframes rain-146 {
  from {
    left: 29%;
    opacity: 0.6;
    top: -73%;
  }

  to {
    opacity: 0;
    top: 113%;
  }
}
.rain:nth-of-type(147) {
  animation-name: rain-147;
  animation-delay: 5s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 54%;
  opacity: 0.4;
  top: -88%;
}

@Keyframes rain-147 {
  from {
    left: 54%;
    opacity: 0.4;
    top: -88%;
  }

  to {
    opacity: 0;
    top: 128%;
  }
}
.rain:nth-of-type(148) {
  animation-name: rain-148;
  animation-delay: 15s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 93%;
  opacity: 0.42;
  top: -99%;
}

@Keyframes rain-148 {
  from {
    left: 93%;
    opacity: 0.42;
    top: -99%;
  }

  to {
    opacity: 0;
    top: 139%;
  }
}
.rain:nth-of-type(149) {
  animation-name: rain-149;
  animation-delay: 17s;
  animation-duration: 9s;
  animation-iteration-count: infinite;
  left: 14%;
  opacity: 0.58;
  top: -62%;
}

@Keyframes rain-149 {
  from {
    left: 14%;
    opacity: 0.58;
    top: -62%;
  }

  to {
    opacity: 0;
    top: 102%;
  }
}
.rain:nth-of-type(150) {
  animation-name: rain-150;
  animation-delay: 1s;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  left: 32%;
  opacity: 0.6;
  top: -80%;
}

@Keyframes rain-150 {
  from {
    left: 32%;
    opacity: 0.6;
    top: -80%;
  }

  to {
    opacity: 0;
    top: 120%;
  }
}
</style>
<body>
    <i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i>
 <a href="../index.php?act=home" title="Trở lại"><i style="font-size: 30px;color: #3cc0fe; margin-left: 10px;" class="fa-solid fa-arrow-left"></i></a>
  <div class="find">
    <input type="text" id="cityInput" placeholder="Nhập thành phố">
    <button onclick="searchWeather()"><i style="font-size: 24px; color: #0066ff;" class="fa-solid fa-magnifying-glass"></i></button>
</div>
  <div class="container">
 
    <div class="widget">
      <div class="details">
        <div class="place "></div>
        <div class="temperature "></div>
        <div class="summary">
          <p class="cloud"></p>
          <p class="feellike"></p>
        </div>
        <div class="precipitation"> </div>
       
        <div class="wind"> </div>
      </div>
      <div class="pictoBackdrop"></div>
      <div class="pictoFrame"></div>
      <div class="pictoCloudBig"></div>
      <div class="pictoCloudFill"></div>
      <div class="pictoCloudSmall"></div>
      <div class="iconCloudBig"></div>
      <div class="iconCloudFill"></div>
      <div class="iconCloudSmall"></div>
    </div>
  </div>
    

    
    <script>
       async function getWeather(city = 'Hanoi') {
    try {
        const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=5947df254d70b95fd860ebb5761dbf8b&units=metric&lang=vi`);
        const data = await response.json();
        console.log(data);
        document.querySelector('.place').textContent = `${data.name}`;
        document.querySelector('.temperature').textContent = `${Math.round(data.main.temp)}°C`;
        document.querySelector('.precipitation').textContent = `Độ ẩm: ${data.main.humidity}%`;
        document.querySelector('.feellike').textContent = `Cảm giác như: ${data.main.feels_like}°C`;
        document.querySelector('.cloud').textContent = `${data.weather[0].description}`;
        document.querySelector('.wind').textContent = `Tốc độ gió: ${data.wind.speed} km/h`;

    } catch (error) {
        console.error('Error fetching weather data:', error);
    }
}


window.onload = function() {
    getWeather();
};

function searchWeather() {
    const city = document.getElementById('cityInput').value;
    getWeather(city);
}

    </script>
    
</body>
</html>