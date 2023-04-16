<?php include 'feedback_processform.php';?>

<!DOCTYPE html>
<html  lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
Feedback
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stoc2022.css">
<link rel="shortcut icon" type="image/jpg" href="icon.jpg" />
<script src="jquery.js"></script>
<style>li{list-style: none}</style>

<link rel="stylesheet" type="text/css" href="mystyle.css">

<style type="text/css">

.cyxy-target-popup {
  padding: 1.3rem 12px;
  position: absolute;
  display: -webkit-flex;
  display: inline-flex;
  flex-direction: row;
  overflow: scroll;
  vertical-align: middle;
  z-index: 199099;
  top: 1px;
  left: 1px;
  background: #fff;
  opacity: 0.98;
  /*margin: 0px 5%;*/
  height: auto;
  width: auto;
  border: 1px solid #e6e6e6;
  box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.13);
  border-radius: 5px;
  /*height: 7rem;*/
}

@media (max-width: 468px) {
  .cyxy-target-popup {
    /*width: 90%;*/
    /*margin: 0px 5%;*/
    left: 10%;
    /*right: 5%;*/
    /*width: 30rem;*/
    /*height: 14.58rem;*/
  }
}

#cyxy-popup-left-slide {
  height: 22px;
  display: inline;
  vertical-align: middle;
  margin-right: 14px;
  cursor: pointer;
}

#cyxy-popup-right-slide {
  height: 22px;
  display: inline;
  vertical-align: middle;
  margin-left: 0px;
  cursor: pointer;
}

#cyxy-popup-userinfo {
  display: inline;
}

.cyxy-target-count {
  display: inline;
  vertical-align: middle;
  font-size: 10px;
}

#cyxy-popup-avatar {
  /*margin-right: 30px;*/
  /*font-size: 14px;*/
  display: inline;
  height: 32px;
  vertical-align: middle;
  border-radius: 16px;
}

#cyxy-popup-name-time {
  display: -webkit-flex;
  display: inline-flex;
  flex-direction: column;
  /*align-items: center;*/
  /*position: relative;*/
  vertical-align: middle;
  text-align: left;
  margin-left: 6px;
}

#cyxy-popup-name {
  /*vertical-align: middle;*/
  /*display: flex;*/
  font-size: 14px;
  color: #333;
  height: 18px;
  overflow: hidden;
  max-width: 84px;
}

#cyxy-popup-time {
  /*margin-right: 30px;*/
  /*font-size: 14px;*/
  /*display: flex;*/
  font-size: 12px;
  margin-top: 4px;
  color: #999;
}


#cyxy-popup-favour {
  text-align: center;
  display: inline;
  margin-right: 20px;
  margin-left: 46px;
  cursor: pointer;
}

#cyxy-popup-favour.commit {
  /*padding: 2px 6px;*/
  /*border: 1px solid #00B977;*/
  /*border-radius: 4px;*/
}

#cyxy-popup-oppose {
  text-align: center;
  display: inline;
  cursor: pointer;
}

#cyxy-popup-favour-img {
  display: inline;
  height: 20px;
  /*width: 22px;*/
  vertical-align: middle;
}

#cyxy-popup-favour-img.commit {
  /*height: 22px;*/
  /*vertical-align: middle;*/
}

#cyxy-popup-oppose-img {
  display: inline;
  height: 18px;
  vertical-align: middle;
}

#cyxy-popup-favour-num {
  font-size: 14px;
  margin-left: 4px;
  /*margin-left: 0.47rem;*/
  color: #999999;
}

#cyxy-popup-oppose-num {
  font-size: 14px;
  margin-left: 4px;
  /*margin-left: 0.47rem;*/
  color: #999;
}

.caption-window.ytp-caption-window-bottom {
  width: 800px;
  /* height: 100px; */
  /* margin-left: -400px; */
}

@media (max-width: 320px) {
  #cyxy-popup-favour {
    margin-right: 0.8rem;
    margin-left: 1.5rem;
  }

  #cyxy-popup-left-slide {
    margin-right: 0.8rem;
  }

  #cyxy-popup-right-slide {
    margin-left: 1rem;
  }
}

.login-hint-a {
  display: block;
  color: #999;
  font-size: 10px;
}

.login-hint-a:visited {
  color: #999;
}

.layui-m-layer {
  color: #333;
  position: relative;
  z-index: 2147483647;
}

.layui-m-layer * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

.layui-m-layermain,
.layui-m-layershade {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}

.layui-m-layershade {
  background-color: rgba(0, 0, 0, 0.7);
  pointer-events: auto;
}

.layui-m-layermain {
  display: table;
  font-family: Helvetica, arial, sans-serif;
  pointer-events: none;
}

.layui-m-layermain .layui-m-layersection {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

.layui-m-layerchild {
  position: relative;
  display: inline-block;
  text-align: left;
  background-color: #fff;
  font-size: 14px;
  border-radius: 5px;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
  pointer-events: auto;
  -webkit-overflow-scrolling: touch;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-duration: 0.2s;
  animation-duration: 0.2s;
}

@-webkit-keyframes layui-m-anim-scale {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes layui-m-anim-scale {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

.layui-m-anim-scale {
  animation-name: layui-m-anim-scale;
  -webkit-animation-name: layui-m-anim-scale;
}

@-webkit-keyframes layui-m-anim-up {
  0% {
    opacity: 0;
    -webkit-transform: translateY(800px);
    transform: translateY(800px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes layui-m-anim-up {
  0% {
    opacity: 0;
    -webkit-transform: translateY(800px);
    transform: translateY(800px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

.layui-m-anim-up {
  -webkit-animation-name: layui-m-anim-up;
  animation-name: layui-m-anim-up;
}

.layui-m-layer0 .layui-m-layerchild {
  width: 90%;
  max-width: 640px;
}

.layui-m-layer1 .layui-m-layerchild {
  border: none;
  border-radius: 0;
}

.layui-m-layer2 .layui-m-layerchild {
  width: auto;
  max-width: 260px;
  min-width: 40px;
  border: none;
  background: 0 0;
  box-shadow: none;
  color: #fff;
}

.layui-m-layerchild h3 {
  padding: 0 10px;
  height: 60px;
  line-height: 60px;
  font-size: 16px;
  font-weight: 400;
  border-radius: 5px 5px 0 0;
  text-align: center;
}

.layui-m-layerbtn span,
.layui-m-layerchild h3 {
  margin: 0;
  padding: 0;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}

.layui-m-layercont {
  padding: 50px 30px;
  line-height: 22px;
  text-align: center;
}

.layui-m-layer1 .layui-m-layercont {
  padding: 0;
  text-align: left;
}

.layui-m-layer2 .layui-m-layercont {
  text-align: center;
  padding: 0;
  line-height: 0;
}

.layui-m-layer2 .layui-m-layercont i {
  width: 25px;
  height: 25px;
  margin-left: 8px;
  display: inline-block;
  background-color: #fff;
  border-radius: 100%;
  -webkit-animation: layui-m-anim-loading 1.4s infinite ease-in-out;
  animation: layui-m-anim-loading 1.4s infinite ease-in-out;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.layui-m-layerbtn,
.layui-m-layerbtn span {
  position: relative;
  text-align: center;
  border-radius: 0 0 5px 5px;
}

.layui-m-layer2 .layui-m-layercont p {
  margin-top: 20px;
}

@-webkit-keyframes layui-m-anim-loading {
  0%,
  100%,
  80% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  40% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}

@keyframes layui-m-anim-loading {
  0%,
  100%,
  80% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  40% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}

.layui-m-layer2 .layui-m-layercont i:first-child {
  margin-left: 0;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.layui-m-layer2 .layui-m-layercont i.layui-m-layerload {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

.layui-m-layer2 .layui-m-layercont > div {
  line-height: 22px;
  padding-top: 7px;
  margin-bottom: 20px;
  font-size: 14px;
}

.layui-m-layerbtn {
  display: box;
  display: -moz-box;
  display: -webkit-box;
  width: 100%;
  height: 50px;
  line-height: 50px;
  font-size: 0;
  border-top: 1px solid #d0d0d0;
  background-color: #f2f2f2;
}

.layui-m-layerbtn span {
  display: block;
  -moz-box-flex: 1;
  box-flex: 1;
  -webkit-box-flex: 1;
  font-size: 14px;
  cursor: pointer;
}

.layui-m-layerbtn span[yes] {
  color: #40affe;
}

.layui-m-layerbtn span[no] {
  border-right: 1px solid #d0d0d0;
  border-radius: 0 0 0 5px;
}

.layui-m-layerbtn span:active {
  background-color: #f6f6f6;
}

.layui-m-layerend {
  position: absolute;
  right: 7px;
  top: 10px;
  width: 30px;
  height: 30px;
  border: 0;
  font-weight: 400;
  background: 0 0;
  cursor: pointer;
  -webkit-appearance: none;
  font-size: 30px;
}

.layui-m-layerend::after,
.layui-m-layerend::before {
  position: absolute;
  left: 5px;
  top: 15px;
  content: "";
  width: 18px;
  height: 1px;
  background-color: #999;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  border-radius: 3px;
}

.layui-m-layerend::after {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.layui-m-layer .layui-m-layer-footer {
  position: fixed;
  width: 95%;
  max-width: 100%;
  margin: 0 auto;
  left: 0;
  right: 0;
  bottom: 10px;
  background: 0 0;
}

.layui-m-layer-footer .layui-m-layercont {
  padding: 20px;
  border-radius: 5px 5px 0 0;
  background-color: rgba(255, 255, 255, 0.8);
}

.layui-m-layer-footer .layui-m-layerbtn {
  display: block;
  height: auto;
  background: 0 0;
  border-top: none;
}

.layui-m-layer-footer .layui-m-layerbtn span {
  background-color: rgba(255, 255, 255, 0.8);
}

.layui-m-layer-footer .layui-m-layerbtn span[no] {
  color: #fd482c;
  border-top: 1px solid #c2c2c2;
  border-radius: 0 0 5px 5px;
}

.layui-m-layer-footer .layui-m-layerbtn span[yes] {
  margin-top: 10px;
  border-radius: 5px;
}

.layui-m-layer .layui-m-layer-msg {
  width: auto;
  max-width: 90%;
  margin: 0 auto;
  bottom: -150px;
  background-color: rgba(0, 0, 0, 0.7);
  color: #fff;
}

.layui-m-layer-msg .layui-m-layercont {
  padding: 10px 20px;
}

.collection-success {
  /*opacity: 0.6;*/
  /*background: #EAEAEA;*/
  color: #ffffff;
}
.collection-success:hover {
  /*opacity: 0.45;*/
  /*background: #000000;*/
  color: #ffffff;
}
.layui-m-layercont .cyxy-trs-target {
  display: none;
}
.collection-icon {
  width: 12px;
  height: 13px;
  background: url("//staging.caiyunapp.com/imgs/layar-target.png") no-repeat;
  display: inline-block;
  background-size: cover;
  background-position: center;
}
.collection-success > a {
  margin-left: 12px;
  vertical-align: middle;
}
.cy_free_box {
  position: relative;
}
.cy_free_box img {
  width: 100%;
  cursor: pointer;
  -moz-user-select: none; /*火狐*/
  -webkit-user-select: none; /*webkit浏览器*/
  -ms-user-select: none; /*IE10*/
  -khtml-user-select: none; /*早期浏览器*/
  user-select: none;
}
.layui-m-layer-cy_free_content {
  background: inherit !important;
}
</style><style type="text/css">.cyxy-trs-target.colored {
  background-color: rgba(0, 185, 119, 0.05);
}

.cyxy-target-popup {
  padding: 1.3rem 12px;
  position: absolute;
  display: -webkit-flex;
  display: inline-flex;
  flex-direction: row;
  overflow: scroll;
  vertical-align: middle;
  z-index: 199099;
  top: 1px;
  left: 1px;
  background: #fff;
  opacity: 0.98;
  /*margin: 0px 5%;*/
  height: auto;
  width: auto;
  border: 1px solid #e6e6e6;
  box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.13);
  border-radius: 5px;
  /*height: 7rem;*/
}

@media (max-width: 468px) {
  .cyxy-target-popup {
    /*width: 90%;*/
    /*margin: 0px 5%;*/
    left: 10%;
    /*right: 5%;*/
    /*width: 30rem;*/
    /*height: 14.58rem;*/
  }
}

#cyxy-popup-left-slide {
  height: 22px;
  display: inline;
  vertical-align: middle;
  margin-right: 14px;
  cursor: pointer;
}

#cyxy-popup-right-slide {
  height: 22px;
  display: inline;
  vertical-align: middle;
  margin-left: 0px;
  cursor: pointer;
}

#cyxy-popup-userinfo {
  display: inline;
}

.cyxy-target-count {
  display: inline;
  vertical-align: middle;
  font-size: 10px;
}

#cyxy-popup-avatar {
  /*margin-right: 30px;*/
  /*font-size: 14px;*/
  display: inline;
  height: 32px;
  vertical-align: middle;
  border-radius: 16px;
}

#cyxy-popup-name-time {
  display: -webkit-flex;
  display: inline-flex;
  flex-direction: column;
  /*align-items: center;*/
  /*position: relative;*/
  vertical-align: middle;
  text-align: left;
  margin-left: 6px;
}

#cyxy-popup-name {
  /*vertical-align: middle;*/
  /*display: flex;*/
  font-size: 14px;
  color: #333;
  height: 18px;
  overflow: hidden;
  max-width: 84px;
}

#cyxy-popup-time {
  /*margin-right: 30px;*/
  /*font-size: 14px;*/
  /*display: flex;*/
  font-size: 12px;
  margin-top: 4px;
  color: #999;
}

.cyxy-footer {
  display: none;
  position: fixed;
  bottom: 0px;
  padding: 0px 0px;
  left: 0;
  right: 0;
  margin: auto;
  opacity: 0.9;
  border: 1px solid #e6e6e6;
  box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.13);
  border-radius: 2px;
  z-index: 201712;
  text-align: center;
}

.cyxy-footer-p {
  padding: 12px 0px;
  margin: 0px;
  font-size: 12px;
  color: #333;
  background: #fff;
  text-align: center;
  line-height: 1.6;
  font-weight: 200;
}

#cyxy-popup-favour {
  text-align: center;
  display: inline;
  margin-right: 20px;
  margin-left: 46px;
  cursor: pointer;
}

#cyxy-popup-favour.commit {
  /*padding: 2px 6px;*/
  /*border: 1px solid #00B977;*/
  /*border-radius: 4px;*/
}

#cyxy-popup-oppose {
  text-align: center;
  display: inline;
  cursor: pointer;
}

#cyxy-popup-favour-img {
  display: inline;
  height: 20px;
  /*width: 22px;*/
  vertical-align: middle;
}

#cyxy-popup-favour-img.commit {
  /*height: 22px;*/
  /*vertical-align: middle;*/
}

#cyxy-popup-oppose-img {
  display: inline;
  height: 18px;
  vertical-align: middle;
}

#cyxy-popup-favour-num {
  font-size: 14px;
  margin-left: 4px;
  /*margin-left: 0.47rem;*/
  color: #999999;
}

#cyxy-popup-oppose-num {
  font-size: 14px;
  margin-left: 4px;
  /*margin-left: 0.47rem;*/
  color: #999;
}

.caption-window.ytp-caption-window-bottom {
  width: 800px;
  /* height: 100px; */
  /* margin-left: -400px; */
}

@media (max-width: 320px) {
  #cyxy-popup-favour {
    margin-right: 0.8rem;
    margin-left: 1.5rem;
  }

  #cyxy-popup-left-slide {
    margin-right: 0.8rem;
  }

  #cyxy-popup-right-slide {
    margin-left: 1rem;
  }
}

.login-hint-a {
  display: block;
  color: #999;
  font-size: 10px;
}

.login-hint-a:visited {
  color: #999;
}

.layui-m-layer {
  color: #333;
  position: relative;
  z-index: 2147483647;
}

.layui-m-layer * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

.layui-m-layermain,
.layui-m-layershade {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}

.layui-m-layershade {
  background-color: rgba(0, 0, 0, 0.7);
  pointer-events: auto;
}

.layui-m-layermain {
  display: table;
  font-family: Helvetica, arial, sans-serif;
  pointer-events: none;
}

.layui-m-layermain .layui-m-layersection {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

.layui-m-layerchild {
  position: relative;
  display: inline-block;
  text-align: left;
  background-color: #fff;
  font-size: 14px;
  border-radius: 5px;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
  pointer-events: auto;
  -webkit-overflow-scrolling: touch;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-duration: 0.2s;
  animation-duration: 0.2s;
}

@-webkit-keyframes layui-m-anim-scale {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes layui-m-anim-scale {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

.layui-m-anim-scale {
  animation-name: layui-m-anim-scale;
  -webkit-animation-name: layui-m-anim-scale;
}

@-webkit-keyframes layui-m-anim-up {
  0% {
    opacity: 0;
    -webkit-transform: translateY(800px);
    transform: translateY(800px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes layui-m-anim-up {
  0% {
    opacity: 0;
    -webkit-transform: translateY(800px);
    transform: translateY(800px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

.layui-m-anim-up {
  -webkit-animation-name: layui-m-anim-up;
  animation-name: layui-m-anim-up;
}

.layui-m-layer0 .layui-m-layerchild {
  width: 90%;
  max-width: 640px;
}

.layui-m-layer1 .layui-m-layerchild {
  border: none;
  border-radius: 0;
}

.layui-m-layer2 .layui-m-layerchild {
  width: auto;
  max-width: 260px;
  min-width: 40px;
  border: none;
  background: 0 0;
  box-shadow: none;
  color: #fff;
}

.layui-m-layerchild h3 {
  padding: 0 10px;
  height: 60px;
  line-height: 60px;
  font-size: 16px;
  font-weight: 400;
  border-radius: 5px 5px 0 0;
  text-align: center;
}

.layui-m-layerbtn span,
.layui-m-layerchild h3 {
  margin: 0;
  padding: 0;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}

.layui-m-layercont {
  padding: 50px 30px;
  line-height: 22px;
  text-align: center;
}

.layui-m-layer1 .layui-m-layercont {
  padding: 0;
  text-align: left;
}

.layui-m-layer2 .layui-m-layercont {
  text-align: center;
  padding: 0;
  line-height: 0;
}

.layui-m-layer2 .layui-m-layercont i {
  width: 25px;
  height: 25px;
  margin-left: 8px;
  display: inline-block;
  background-color: #fff;
  border-radius: 100%;
  -webkit-animation: layui-m-anim-loading 1.4s infinite ease-in-out;
  animation: layui-m-anim-loading 1.4s infinite ease-in-out;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.layui-m-layerbtn,
.layui-m-layerbtn span {
  position: relative;
  text-align: center;
  border-radius: 0 0 5px 5px;
}

.layui-m-layer2 .layui-m-layercont p {
  margin-top: 20px;
}

@-webkit-keyframes layui-m-anim-loading {
  0%,
  100%,
  80% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  40% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}

@keyframes layui-m-anim-loading {
  0%,
  100%,
  80% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  40% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}

.layui-m-layer2 .layui-m-layercont i:first-child {
  margin-left: 0;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.layui-m-layer2 .layui-m-layercont i.layui-m-layerload {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

.layui-m-layer2 .layui-m-layercont > div {
  line-height: 22px;
  padding-top: 7px;
  margin-bottom: 20px;
  font-size: 14px;
}

.layui-m-layerbtn {
  display: box;
  display: -moz-box;
  display: -webkit-box;
  width: 100%;
  height: 50px;
  line-height: 50px;
  font-size: 0;
  border-top: 1px solid #d0d0d0;
  background-color: #f2f2f2;
}

.layui-m-layerbtn span {
  display: block;
  -moz-box-flex: 1;
  box-flex: 1;
  -webkit-box-flex: 1;
  font-size: 14px;
  cursor: pointer;
}

.layui-m-layerbtn span[yes] {
  color: #40affe;
}

.layui-m-layerbtn span[no] {
  border-right: 1px solid #d0d0d0;
  border-radius: 0 0 0 5px;
}

.layui-m-layerbtn span:active {
  background-color: #f6f6f6;
}

.layui-m-layerend {
  position: absolute;
  right: 7px;
  top: 10px;
  width: 30px;
  height: 30px;
  border: 0;
  font-weight: 400;
  background: 0 0;
  cursor: pointer;
  -webkit-appearance: none;
  font-size: 30px;
}

.layui-m-layerend::after,
.layui-m-layerend::before {
  position: absolute;
  left: 5px;
  top: 15px;
  content: "";
  width: 18px;
  height: 1px;
  background-color: #999;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  border-radius: 3px;
}

.layui-m-layerend::after {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.layui-m-layer .layui-m-layer-footer {
  position: fixed;
  width: 95%;
  max-width: 100%;
  margin: 0 auto;
  left: 0;
  right: 0;
  bottom: 10px;
  background: 0 0;
}

.layui-m-layer-footer .layui-m-layercont {
  padding: 20px;
  border-radius: 5px 5px 0 0;
  background-color: rgba(255, 255, 255, 0.8);
}

.layui-m-layer-footer .layui-m-layerbtn {
  display: block;
  height: auto;
  background: 0 0;
  border-top: none;
}

.layui-m-layer-footer .layui-m-layerbtn span {
  background-color: rgba(255, 255, 255, 0.8);
}

.layui-m-layer-footer .layui-m-layerbtn span[no] {
  color: #fd482c;
  border-top: 1px solid #c2c2c2;
  border-radius: 0 0 5px 5px;
}

.layui-m-layer-footer .layui-m-layerbtn span[yes] {
  margin-top: 10px;
  border-radius: 5px;
}

.layui-m-layer .layui-m-layer-msg {
  width: auto;
  max-width: 90%;
  margin: 0 auto;
  bottom: -150px;
  background-color: rgba(0, 0, 0, 0.7);
  color: #fff;
}

.layui-m-layer-msg .layui-m-layercont {
  padding: 10px 20px;
}

.collection-success {
  /*opacity: 0.6;*/
  /*background: #EAEAEA;*/
  color: #ffffff;
}
.collection-success:hover {
  /*opacity: 0.45;*/
  /*background: #000000;*/
  color: #ffffff;
}
.layui-m-layercont .cyxy-trs-target {
  display: none;
}
.collection-icon {
  width: 12px;
  height: 13px;
  background: url("//staging.caiyunapp.com/imgs/layar-target.png") no-repeat;
  display: inline-block;
  background-size: cover;
  background-position: center;
}
.collection-success > a {
  margin-left: 12px;
  vertical-align: middle;
}
.cy_free_box {
  position: relative;
}
.cy_free_box img {
  width: 100%;
  cursor: pointer;
  -moz-user-select: none; /*火狐*/
  -webkit-user-select: none; /*webkit浏览器*/
  -ms-user-select: none; /*IE10*/
  -khtml-user-select: none; /*早期浏览器*/
  user-select: none;
}
.layui-m-layer-cy_free_content {
  background: inherit !important;
}
</style>

<style>
a:link {color: #686868;} 
a:visited {color: #686868 ;}  
a:hover {color:#000000;}  /* 鼠标移动到链接上 */
</style>
</head>



<body>
<div id="header">
			
				<div class="content">
                                                                          
                                                                                             
                                                                              

					
					<div id="navWrapper">

						<div class="contentL">
							<ul class="nav movedx" data-movedx-mid="1">
								<li class="navitem"  list-style="none">
									<a href="index.html#title_home"> <span data-title="Home">Home</span> </a>
								</li>
								<li class="navitem">
									<a href="Speakers.html#title_speakers"> <span data-title="Speakers">Speakers</span> </a>
                                                                                                                                
								</li>
								<li class="navitem">
									<a href="Registration.php#title_registration" > <span data-title="Registration">Registration</span> </a>

								  </li>
						
                        <li class="navitem">
									<a class="active" href="javascript:;" target=""> <span data-title="More Information">More Information</span> </a>
                                                                                                                                    <ul class="subnav">
                                                                                                                                     <li>
											<a href="Schedule.html#title_schedule" >Schedule</a>
										</li>
                                        <li>
											<a href="Venue.html#title_venue" >Venue</a>
										</li>
										<li>
											<a href="index.html#title_sponsors">Sponsors</a>
										</li>
										<li>
											<a class="active" href="Feedback.php#title_feedback" target="_self">Feedback</a>
										</li>
									</ul>
								  </li>
								
							      </ul>
						</div>
                                                                                           
                                                                                             <div class="contentS">
                                                                                            <ul class="nav movedx" data-movedx-mid="1">
                                                                                            <li class="navitem"  list-style="none">
									<a  href="index.html#title_home" > <span data-title="Home">Home</span> </a>
								</li>
                                                                                            <li class="navitem">
									<a class="active" href="javascript:;" target=""> <span data-title="More">More</span> </a>
                                                                                                                                    <ul class="subnav">
										<li>
											<a href="Schedule.html#title_schedule">Schedule</a>
										</li>
                                                                                                                                                                <li>
											<a href="Speakers.html#title_speakers" >Speakers</a>
										</li>
                                                                                                                                                                 <li>
											<a  href="Venue.html#title_venue" target="_self">Venue</a>
										</li>
                                                                                                                                                                 <li>
											<a href="Registration.php#title_registration" target="_self">Registration</a>
										</li>
                                                                                                                                                                 <li>
											<a href="index.html#title_sponsors" target="_self">Sponsors</a>
										</li>
										<li>
											<a class="active" href="Feedback.php#title_feedback" target="_self">Feedback</a>
										</li>
										
									</ul>
								  </li>
                                                                                             </ul>
                                                                                            </div>
					</div>
					<div class="clear"></div>
				</div>
			
		</div>
		

<div class="page">

<div style="text-align:center;">
<img "Beijing" longdesc="Beijing Logic Meeting 2023" src="beijing.jpg"
     style="float:left;max-width:900px;width:100%; margin-right:15px" />
</div>



<table id="title_feedback">
<tr>
    <td ><h1 align="left">
   Beijing Logic Meeting<br>
   July 24-28, 2023 <br>
   Beijing, China 
   </h1></td>

   <td style="text-align:left;vertical-align:bottom;padding:7px"><table>
        <tr><td style="text-align:left;vertical-align:bottom"><a href="https://english.cas.cn/" target="_blank"><img src="CAS.jpeg" class="logo"  height=110/><a></td>
        <td style="text-align:left;vertical-align:bottom"><img src="AMSS.jpg" class="logo" height=100/></td></tr>
   </table></td>
</tr></table>


<div class="main">


<div class="menu" id="navigationbar">
</div>

<div class="maincontent">
<a id="title_registration"></a>

<h1>Feedback</h1>


<div class="contact-form-wrapper" style="">
			
		<?php if (isset($msg)) {echo '<div id="formmessage"><p>', $msg , '</p></div>';} ?>	
		<!-- $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, 
		instead of jumping to a different page. This way, 
		the user will get error messages on the same page as the form.
		Also htmlspecialchars is used to prevents attackers from exploiting 
		the code by injecting HTML or JavaScript code (Cross-site Scripting attacks) in forms    --> 			
		<form id="contact-form" name="myform" action="Feedback.php#title_feedback"  method="post">
<div style="float: left;">
<b>If you have some questions or suggestions about the <strong>Beijing logic meeting 2023</strong> , please leave your email and leave a message.</b>
<p>
<label>Name(optional)</label><br/>
			<input type="text" name="name" value="<?php if (isset($clientName)) {echo $clientName;} ?>"/>
			<?php if(isset($err_name)) {echo $err_name;}?>
			<br/>

 <div> <label>E-mail*</label></div><br/>
<div><input type="text" name="email" placeholder="Please enter email addess" value="<?php if (isset($clientEmail)) {echo $clientEmail;} ?>"/></div>
<?php if(isset($err_email)) {echo $err_email;}?>
<br/>





  


			<br/>
			
			<label>feedback message </label><br/>
			<textarea name="remark" ><?php if (isset($clientMessage)) {echo $clientMessage;} ?></textarea><?php if(isset($err_message)) {echo $err_message;}?>
			<br/>
			
			<input type="submit" name="action" class="send-mail-button" value="Radio">





		</form>
	</div> <!-- end contact-form-wrapper -->

<pre>

</pre>

<pre>

</pre>



</div>
<center><p>© Beijing Logic Meeting 2023.</p></center>
</div>
</body>
</html>