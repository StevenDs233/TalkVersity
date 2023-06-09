<?php
session_start();
include('database_connection.php');

if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
$id=$_SESSION['user_id'];
$statement = $connect->prepare("SELECT * FROM tbl_user WHERE id=?");
$statement->execute(array($id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TALKVERSITY</title>  
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="typeahead.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
	<style>
		
		body{margin-top:0px;}
		
		.align-center, .center {
			text-align: center!important;
		}
		
		.profile-user-info {
			display: table;
			width: 98%;
			width: calc(100% - 24px);
			margin: 0 auto
		}
		
		.profile-info-row {
			display: table-row
		}
		
		.profile-info-name,
		.profile-info-value {
			display: table-cell;
			border-top: 1px dotted #D5E4F1
		}
		
		.profile-info-name {
			text-align: right;
			padding: 6px 10px 6px 4px;
			font-weight: 400;
			color: #667E99;
			background-color: transparent;
			width: 110px;
			vertical-align: middle
		}
		
		.profile-info-value {
			padding: 6px 4px 6px 6px
		}
		
		.profile-info-value>span+span:before {
			display: inline;
			content: ",";
			margin-left: 1px;
			margin-right: 3px;
			color: #666;
			border-bottom: 1px solid #FFF
		}
		
		.profile-info-value>span+span.editable-container:before {
			display: none
		}
		
		.profile-info-row:first-child .profile-info-name,
		.profile-info-row:first-child .profile-info-value {
			border-top: none
		}
		
		.profile-user-info-striped {
			border: 1px solid #DCEBF7
		}
		
		.profile-user-info-striped .profile-info-name {
			color: #336199;
			background-color: #EDF3F4;
			border-top: 1px solid #F7FBFF
		}
		
		.profile-user-info-striped .profile-info-value {
			border-top: 1px dotted #DCEBF7;
			padding-left: 12px
		}
		
		.profile-picture {
			border: 1px solid #CCC;
			background-color: #FFF;
			padding: 4px;
			display: inline-block;
			max-width: 100%;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			box-shadow: 1px 1px 1px rgba(0, 0, 0, .15)
		}
		
		.dd-empty,
		.dd-handle,
		.dd-placeholder,
		.dd2-content {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box
		}
		
		.profile-activity {
			padding: 10px 4px;
			border-bottom: 1px dotted #D0D8E0;
			position: relative;
			border-left: 1px dotted #FFF;
			border-right: 1px dotted #FFF
		}
		
		.profile-activity:first-child {
			border-top: 1px dotted transparent
		}
		
		.profile-activity:first-child:hover {
			border-top-color: #D0D8E0
		}
		
		.profile-activity:hover {
			background-color: #F4F9FD;
			border-left: 1px dotted #D0D8E0;
			border-right: 1px dotted #D0D8E0
		}
		
		.profile-activity img {
			border: 2px solid #C9D6E5;
			border-radius: 100%;
			max-width: 40px;
			margin-right: 10px;
			margin-left: 0;
			box-shadow: none
		}
		
		.profile-activity .thumbicon {
			background-color: #74ABD7;
			display: inline-block;
			border-radius: 100%;
			width: 38px;
			height: 38px;
			color: #FFF;
			font-size: 18px;
			text-align: center;
			line-height: 38px;
			margin-right: 10px;
			margin-left: 0;
			text-shadow: none!important
		}
		
		.profile-activity .time {
			display: block;
			margin-top: 4px;
			color: #777
		}
		
		.profile-activity a.user {
			font-weight: 700;
			color: #9585BF
		}
		
		.profile-activity .tools {
			position: absolute;
			right: 12px;
			bottom: 8px;
			display: none
		}
		
		.profile-activity:hover .tools {
			display: block
		}
		
		.user-profile .ace-thumbnails li {
			border: 1px solid #CCC;
			padding: 3px;
			margin: 6px
		}
		
		.user-profile .ace-thumbnails li .tools {
			left: 3px;
			right: 3px
		}
		
		.user-profile .ace-thumbnails li:hover .tools {
			bottom: 3px
		}
		
		.user-title-label:hover {
			text-decoration: none
		}
		
		.user-title-label+.dropdown-menu {
			margin-left: -12px
		}
		
		.profile-contact-links {
			padding: 4px 2px 5px;
			border: 1px solid #E0E2E5;
			background-color: #F8FAFC
		}
		
		.btn-link:hover .ace-icon {
			text-decoration: none!important
		}
		
		.profile-social-links>a:hover>.ace-icon,
		.profile-users .memberdiv .name a:hover .ace-icon,
		.profile-users .memberdiv .tools>a:hover {
			text-decoration: none
		}
		
		.profile-social-links>a {
			text-decoration: none;
			margin: 0 1px
		}
		
		.profile-skills .progress {
			height: 26px;
			margin-bottom: 2px;
			background-color: transparent
		}
		
		.profile-skills .progress .progress-bar {
			line-height: 26px;
			font-size: 13px;
			font-weight: 700;
			font-family: "Open Sans";
			padding: 0 8px
		}
		
		.profile-users .user {
			display: block;
			position: static;
			text-align: center;
			width: auto
		}
		
		.profile-users .user img {
			padding: 2px;
			border-radius: 100%;
			border: 1px solid #AAA;
			max-width: none;
			width: 64px;
			-webkit-transition: all .1s;
			-o-transition: all .1s;
			transition: all .1s
		}
		
		.profile-users .user img:hover {
			-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33);
			box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33)
		}
		
		.profile-users .memberdiv {
			background-color: #FFF;
			width: 100px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			border: none;
			text-align: center;
			margin: 0 8px 24px
		}
		
		.profile-users .memberdiv .body {
			display: inline-block;
			margin: 8px 0 0
		}
		
		.profile-users .memberdiv .popover {
			visibility: hidden;
			min-width: 0;
			max-height: 0;
			max-width: 0;
			margin-left: 0;
			margin-right: 0;
			top: -5%;
			left: auto;
			right: auto;
			opacity: 0;
			display: none;
			position: absolute;
			-webkit-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
			-o-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
			transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s
		}
		
		.profile-users .memberdiv .popover.right {
			left: 100%;
			right: auto;
			display: block
		}
		
		.profile-users .memberdiv .popover.left {
			left: auto;
			right: 100%;
			display: block
		}
		
		.profile-users .memberdiv>:first-child:hover .popover {
			visibility: visible;
			opacity: 1;
			z-index: 1060;
			max-height: 250px;
			max-width: 250px;
			min-width: 150px;
			-webkit-transition-delay: 0s;
			-moz-transition-delay: 0s;
			-o-transition-delay: 0s;
			transition-delay: 0s
		}
		
		.profile-users .memberdiv .tools {
			position: static;
			display: block;
			width: 100%;
			margin-top: 2px
		}
		
		.profile-users .memberdiv .tools>a {
			margin: 0 2px
		}
		
		.user-status {
			display: inline-block;
			width: 11px;
			height: 11px;
			background-color: #FFF;
			border: 3px solid #AAA;
			border-radius: 100%;
			vertical-align: middle;
			margin-right: 1px
		}
		
		.user-status.status-online {
			border-color: #8AC16C
		}
		
		.user-status.status-busy {
			border-color: #E07F69
		}
		
		.user-status.status-idle {
			border-color: #FFB752
		}
		
		.tab-content.profile-edit-tab-content {
			border: 1px solid #DDD;
			padding: 8px 32px 32px;
			-webkit-box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .2);
			box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .2);
			background-color: #FFF
		}
		
		@media only screen and (max-width:480px) {
			.profile-info-name {
				width: 80px
			}
			.profile-user-info-striped .profile-info-name {
				float: none;
				width: auto;
				text-align: left;
				padding: 6px 4px 6px 10px;
				display: block
			}
			.profile-user-info-striped .profile-info-value {
				margin-left: 10px;
				display: block
			}
			.user-profile .memberdiv {
				width: 50%;
				margin-left: 0;
				margin-right: 0
			}
		}
		
		
		
		.itemdiv {
			padding-right: 3px;
			min-height: 66px
		}
		
		.itemdiv>.user {
			display: inline-block;
			width: 42px;
			position: absolute;
			left: 0
		}
		
		.itemdiv>.user>.img,
		.itemdiv>.user>img {
			border-radius: 100%;
			border: 2px solid #5293C4;
			max-width: 40px;
			position: relative
		}
		
		.itemdiv>.user>.img {
			padding: 2px
		}
		
		.itemdiv>.body {
			width: auto;
			margin-left: 50px;
			margin-right: 12px;
			position: relative
		}
		
		.itemdiv>.body>.time {
			display: block;
			font-size: 11px;
			font-weight: 700;
			color: #666;
			position: absolute;
			right: 9px;
			top: 0
		}
		
		.itemdiv>.body>.time .ace-icon {
			font-size: 14px;
			font-weight: 400
		}
		
		.itemdiv>.body>.name {
			display: block;
			color: #999
		}
		
		.itemdiv>.body>.name>b {
			color: #777
		}
		
		.itemdiv>.body>.text {
			display: block;
			position: relative;
			margin-top: 2px;
			padding-bottom: 19px;
			padding-left: 7px;
			font-size: 13px
		}
		
		.itemdiv.dialogdiv:before,
		.itemdiv.dialogdiv>.body:before,
		.itemdiv>.body>.text:after {
			content: "";
			position: absolute
		}
		
		.itemdiv>.body>.text:after {
			display: block;
			height: 1px;
			font-size: 0;
			overflow: hidden;
			left: 16px;
			right: -12px;
			margin-top: 9px;
			border-top: 1px solid #E4ECF3
		}
		
		.itemdiv>.body>.text>.ace-icon:first-child {
			color: #DCE3ED;
			margin-right: 4px
		}
		
		.itemdiv:last-child>.body>.text {
			border-bottom-width: 0
		}
		
		.itemdiv:last-child>.body>.text:after {
			display: none
		}
		
		.itemdiv.dialogdiv {
			padding-bottom: 14px
		}
		
		.itemdiv.dialogdiv:before {
			display: block;
			top: 0;
			bottom: 0;
			left: 19px;
			width: 3px;
			max-width: 3px;
			background-color: #E1E6ED;
			border: 1px solid #D7DBDD;
			border-width: 0 1px
		}
		
		.itemdiv.dialogdiv:last-child {
			padding-bottom: 0
		}
		
		.itemdiv.dialogdiv:last-child:before {
			display: none
		}
		
		.itemdiv.dialogdiv>.user>img {
			border-color: #C9D6E5
		}
		
		.itemdiv.dialogdiv>.body {
			border: 1px solid #DDE4ED;
			padding: 5px 8px 8px;
			border-left-width: 2px;
			margin-right: 1px
		}
		
		.itemdiv.dialogdiv>.body:before {
			display: block;
			left: -7px;
			top: 11px;
			width: 8px;
			height: 8px;
			border: 2px solid #DDE4ED;
			border-width: 2px 0 0 2px;
			background-color: #FFF;
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			-webkit-transform: rotate(-45deg);
			-ms-transform: rotate(-45deg);
			-o-transform: rotate(-45deg);
			transform: rotate(-45deg)
		}
		
		.itemdiv.dialogdiv>.body>.time {
			position: static;
			float: right
		}
		
		.itemdiv.dialogdiv>.body>.text {
			padding-left: 0;
			padding-bottom: 0
		}
		
		.itemdiv.dialogdiv>.body>.text:after {
			display: none
		}
		
		.itemdiv.dialogdiv .tooltip-inner {
			word-break: break-all
		}
		
		.itemdiv.memberdiv {
			width: 175px;
			padding: 2px;
			margin: 3px 0;
			float: left;
			border-bottom: 1px solid #E8E8E8
		}
		
		@media (min-width:992px) {
			.itemdiv.memberdiv {
				max-width: 50%
			}
		}
		
		@media (max-width:991px) {
			.itemdiv.memberdiv {
				min-width: 33.333%
			}
		}
		
		.itemdiv.memberdiv>.user>img {
			border-color: #DCE3ED
		}
		
		.itemdiv.memberdiv>.body>.time {
			position: static
		}
		
		.itemdiv.memberdiv>.body>.name {
			line-height: 18px;
			height: 18px;
			margin-bottom: 0
		}
		
		.itemdiv.memberdiv>.body>.name>a {
			display: inline-block;
			max-width: 100px;
			max-height: 18px;
			overflow: hidden;
			text-overflow: ellipsis;
			word-break: break-all
		}
		
		.itemdiv .tools {
			position: absolute;
			right: 5px;
			bottom: 10px;
			display: none
		}
		
		.item-list>li>.checkbox,
		.item-list>li>label.inline,
		.itemdiv:hover .tools {
			display: inline-block
		}
		
		.itemdiv .tools .btn {
			border-radius: 36px;
			margin: 1px 0
		}
		
		.itemdiv .body .tools {
			bottom: 4px
		}
		
		.itemdiv.commentdiv .tools {
			right: 9px
		}
		
		.item-list {
			margin: 0;
			padding: 0;
			list-style: none
		}
		
		.item-list>li {
			padding: 9px;
			background-color: #FFF;
			margin-top: -1px;
			position: relative
		}
		
		.item-list>li.selected {
			color: #8090A0;
			background-color: #F4F9FC
		}
		
		.item-list>li.selected .lbl,
		.item-list>li.selected label {
			text-decoration: line-through;
			color: #8090A0
		}
		
		.item-list>li label {
			font-size: 13px
		}
		
		.item-list>li .percentage {
			font-size: 11px;
			font-weight: 700;
			color: #777
		}
		
		
		.ace-thumbnails>li,
		.ace-thumbnails>li>:first-child {
			display: block;
			position: relative
		}
		
		.ace-thumbnails {
			list-style: none;
			margin: 0;
			padding: 0
		}
		
		.ace-thumbnails>li {
			float: left;
			overflow: hidden;
			margin: 2px;
			border: 2px solid #333
		}
		
		.ace-thumbnails>li>:first-child:focus {
			outline: 0
		}
		
		.ace-thumbnails>li .tags {
			display: inline-block;
			position: absolute;
			bottom: 0;
			right: 0;
			overflow: visible;
			direction: rtl;
			padding: 0;
			margin: 0;
			height: auto;
			width: auto;
			background-color: transparent;
			border-width: 0;
			vertical-align: inherit
		}
		
		.ace-thumbnails>li .tags>.label-holder {
			opacity: .92;
			filter: alpha(opacity=92);
			display: table;
			margin: 1px 0 0;
			direction: ltr;
			text-align: left
		}
		
		.ace-thumbnails>li>.tools,
		.ace-thumbnails>li>:first-child>.text {
			position: absolute;
			text-align: center;
			background-color: rgba(0, 0, 0, .55)
		}
		
		.ace-thumbnails>li .tags>.label-holder:hover {
			opacity: 1;
			filter: alpha(opacity=100)
		}
		
		.ace-thumbnails>li>.tools {
			top: 0;
			bottom: 0;
			left: -30px;
			width: 24px;
			vertical-align: middle;
			-webkit-transition: all .2s ease;
			-o-transition: all .2s ease;
			transition: all .2s ease
		}
		
		.ace-thumbnails>li>.tools.tools-right {
			left: auto;
			right: -30px
		}
		
		.ace-thumbnails>li>.tools.tools-bottom {
			width: auto;
			height: 28px;
			left: 0;
			right: 0;
			top: auto;
			bottom: -30px
		}
		
		.ace-thumbnails>li>.tools.tools-top {
			width: auto;
			height: 28px;
			left: 0;
			right: 0;
			top: -30px;
			bottom: auto
		}
		
		.ace-thumbnails>li:hover>.tools {
			left: 0;
			right: 0
		}
		
		.ace-thumbnails>li:hover>.tools.tools-bottom {
			top: auto;
			bottom: 0
		}
		
		.ace-thumbnails>li:hover>.tools.tools-top {
			bottom: auto;
			top: 0
		}
		
		.ace-thumbnails>li:hover>.tools.tools-right {
			left: auto;
			right: 0
		}
		
		.ace-thumbnails>li>.in.tools {
			left: 0;
			right: 0
		}
		
		.ace-thumbnails>li>.in.tools.tools-bottom {
			top: auto;
			bottom: 0
		}
		
		.ace-thumbnails>li>.in.tools.tools-top {
			bottom: auto;
			top: 0
		}
		
		.ace-thumbnails>li>.in.tools.tools-right {
			left: auto;
			right: 0
		}
		
		.ace-thumbnails>li>.tools>a,
		.ace-thumbnails>li>:first-child .inner a {
			display: inline-block;
			color: #FFF;
			font-size: 18px;
			font-weight: 400;
			padding: 0 4px
		}
		
		.ace-thumbnails>li>.tools>a:hover,
		.ace-thumbnails>li>:first-child .inner a:hover {
			text-decoration: none;
			color: #C9E2EA
		}
		
		.ace-thumbnails>li .tools.tools-bottom>a,
		.ace-thumbnails>li .tools.tools-top>a {
			display: inline-block
		}
		
		.ace-thumbnails>li>:first-child>.text {
			right: 0;
			left: 0;
			bottom: 0;
			top: 0;
			color: #FFF;
			opacity: 0;
			filter: alpha(opacity=0);
			-webkit-transition: all .2s ease;
			-o-transition: all .2s ease;
			transition: all .2s ease
		}
		
		.dialogs,
		.itemdiv {
			position: relative
		}
		
		.ace-thumbnails>li>:first-child>.text:before {
			content: '';
			display: inline-block;
			height: 100%;
			vertical-align: middle;
			margin-right: 0
		}
		
		.ace-thumbnails>li>:first-child>.text>.inner {
			padding: 4px 0;
			margin: 0;
			display: inline-block;
			vertical-align: middle;
			max-width: 90%
		}
		
		.ace-thumbnails>li:hover>:first-child>.text {
			opacity: 1;
			filter: alpha(opacity=100)
		}
		
		@media only screen and (max-width:480px) {
			.ace-thumbnails {
				text-align: center
			}
			.ace-thumbnails>li {
				float: none;
				display: inline-block
			}
		}
		
		
		.tab-content {
			border: 1px solid #C5D0DC;
			padding: 16px 12px;
			position: relative
		}
		
		.tab-content.no-padding {
			padding: 0
		}
		
		.tab-content.no-border {
			border: none;
			padding: 12px
		}
		
		.tab-content.padding-32 {
			padding: 32px 24px
		}
		
		.tab-content.no-border.padding-32 {
			padding: 32px
		}
		
		.tab-content.padding-30 {
			padding: 30px 23px
		}
		
		.tab-content.no-border.padding-30 {
			padding: 30px
		}
		
		.tab-content.padding-28 {
			padding: 28px 21px
		}
		
		.tab-content.no-border.padding-28 {
			padding: 28px
		}
		
		.tab-content.padding-26 {
			padding: 26px 20px
		}
		
		.tab-content.no-border.padding-26 {
			padding: 26px
		}
		
		.tab-content.padding-24 {
			padding: 24px 18px
		}
		
		.tab-content.no-border.padding-24 {
			padding: 24px
		}
		
		.tab-content.padding-22 {
			padding: 22px 17px
		}
		
		.tab-content.no-border.padding-22 {
			padding: 22px
		}
		
		.tab-content.padding-20 {
			padding: 20px 15px
		}
		
		.tab-content.no-border.padding-20 {
			padding: 20px
		}
		
		.tab-content.padding-18 {
			padding: 18px 14px
		}
		
		.tab-content.no-border.padding-18 {
			padding: 18px
		}
		
		.tab-content.padding-16 {
			padding: 16px 12px
		}
		
		.tab-content.no-border.padding-16 {
			padding: 16px
		}
		
		.tab-content.padding-14 {
			padding: 14px 11px
		}
		
		.tab-content.no-border.padding-14 {
			padding: 14px
		}
		
		.tab-content.padding-12 {
			padding: 12px 9px
		}
		
		.tab-content.no-border.padding-12 {
			padding: 12px
		}
		
		.tab-content.padding-10 {
			padding: 10px 8px
		}
		
		.tab-content.no-border.padding-10 {
			padding: 10px
		}
		
		.tab-content.padding-8 {
			padding: 8px 6px
		}
		
		.tab-content.no-border.padding-8 {
			padding: 8px
		}
		
		.tab-content.padding-6 {
			padding: 6px 5px
		}
		
		.tab-content.no-border.padding-6 {
			padding: 6px
		}
		
		.tab-content.padding-4 {
			padding: 4px 3px
		}
		
		.tab-content.no-border.padding-4 {
			padding: 4px
		}
		
		.tab-content.no-border.padding-2,
		.tab-content.padding-2 {
			padding: 2px
		}
		
		.tab-content.no-border.padding-0,
		.tab-content.padding-0 {
			padding: 0
		}
		
		.tabs-left .tab-content,
		.tabs-right .tab-content {
			overflow: auto
		}
		
		.upload-btn-wrapper {
          position: relative;
          overflow: hidden;
          display: inline-block;
        }
        
        .btnn {
          border: 2px solid gray;
          color: gray;
          background-color: white;
          padding: 8px 20px;
          border-radius: 8px;
          font-size: 20px;
          font-weight: bold;
        }
        
        .upload-btn-wrapper input[type=file] {
          font-size: 100px;
          padding: 14px 20px;
          border-radius: 8px;
          position: absolute;
          left: 0;
          top: 0;
          opacity: 0;
        }
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 0px; /* Location of the box */
          margin-left: auto;
  margin-right: auto;
          width: 60%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          allign: 
        }
        
        /* Modal Content */
        #blah {
          width: 100%;
          height: 80%;
        }
        #do {
          /*left: 100px;*/
          margin-left: auto;
          margin-right: auto;
          width: 12%;
          height: 7%;
        }
        
        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
		
		</style>
	</head>
	<body>
        <nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
				   <img alt="Brand" src="logo.jpg" style="max-width:50px; margin-top: -14px;">
			    </a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			        <form action="result.php" method="POST" class="navbar-form navbar-left">
                        <div class="form-group">
                          <input type="text" class="form-control"  name="name" id="name" size="50" autocomplete="off" placeholder="Search Your Friends">
                        </div>
                        <!--<button type="submit" name="result"  class="btn btn-default">Submit</button>-->
                        <input type="submit" name="result" style="background-color: #4CAF50; border: none; color: white; padding: 8px 11px; cursor: pointer;" value="GO">
                    </form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">PUBLIC CHAT&nbsp;&nbsp;</a></li>
						<li><a href="create_chat.php">OPEN PRIVATE CHAT&nbsp;&nbsp;</a></li>
						<li><a href="#">CONTACT US&nbsp;&nbsp;</a></li>
						<li class="dropdown">
						<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="profile.php">View Profile</a></li>
							<li><a href="edit_profile.php">Edit Profile</a></li>
							<li><a href="private_chat_list.php">My Private Chats</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div id="user-profile-2" class="user-profile">
			<div class="tabbable">
				<div class="tab-content no-border padding-24">
					<div id="home" class="tab-pane in active">
				    <?php 
					    if(isset($_REQUEST['id']) || $_GET)
                        {
                            $id=$_REQUEST['id'];
                            $id1=$_GET['id'];
                            $statement = $connect->prepare("SELECT * FROM tbl_user WHERE id=?");
                            $statement->execute(array($id));
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);  
                    ?>
						<div class="row">
							<div class="col-xs-12 col-sm-3 center">
						    <?php 
	                            foreach($result as $row) {
                            ?>
								<span class="profile-picture">
									<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="<?php echo $row['image']; ?>">
								</span>
							<?php
								}
							?>
	
								<div class="space space-4"></div>
								<br><br>
	                            <?php 
	                            $uid=$_SESSION['user_id'];
	                            $statement1 = $connect->prepare("SELECT * FROM friend_request WHERE (request_from=? AND request_to=?) OR (request_from=? AND request_to=?)");
                                $statement1->execute(array($uid,$id,$id,$uid));
                                $result1 = $statement1->rowCount();
                                $statement2 = $connect->prepare("SELECT * FROM friendlist WHERE (friend1=? AND friend2=?) OR (friend1=? AND friend2=?)");
                                $statement2->execute(array($uid,$id,$id,$uid));
                                $result2 = $statement2->rowCount();
                                $statement3 = $connect->prepare("SELECT * FROM friendlist WHERE (friend1=? AND friend2=?) OR (friend1=? AND friend2=?)");
                                $statement3->execute(array($uid,$id1,$id1,$uid));
                                $result3 = $statement3->rowCount();
	                            if($result1 >0){
                                ?>
									<i class="ace-icon fa fa-pencil bigger-120"></i>
									<span class="bigger-110">Friend Request Pending</span>
								<?php
	                            }
	                            else if($result2 >0 || $result3 >0){
                                ?>
                                <i class="ace-icon fa fa-pencil bigger-120"></i>
								<span class="bigger-110">You Are Friends</span>
								<?php
	                            }
	                            else{
	                            ?>
								<a href="add_friend.php?id=<?php echo $id; ?>" class="btn btn-sm btn-block btn-success">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
									<span class="bigger-110">Add Friend</span>
								</a>
								<?php
	                            }
	                            ?>
							</div><!-- /.col -->
							<?php 
	                        foreach($result as $row) {
                            ?>
							<div class="col-xs-12 col-sm-9">
								<h3 class="blue">
									<span class="middle"><?php echo $row['full_name']; ?></span>
								</h3>
								<br><br>
	
								<div class="profile-user-info">
	
									<div class="profile-info-row">
										<div class="profile-info-name"> Email: </div>
	
										<div class="profile-info-value">
											<span><?php echo $row['email']; ?></span>
										</div>
									</div>
	
									<div class="profile-info-row">
										<div class="profile-info-name"> Phone:  </div>
	
										<div class="profile-info-value">
											<span><?php echo  $row['phone']; ?></span>
										</div>
									</div>
	
									<div class="profile-info-row">
										<div class="profile-info-name"> Curriculum: </div>
	
										<div class="profile-info-value">
											<span><?php echo  $row['curriculum']; ?></span>
										</div>
									</div>
								</div>
								<?php
	                        }
                        }
                        else{
                            $id=$_SESSION['user_id'];
                            $statement = $connect->prepare("SELECT * FROM tbl_user WHERE id=?");
                            $statement->execute(array($id));
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                        ?>
							<?php 
	                        foreach($result as $row) {
                            ?>
                            <div class="row">
    							<div class="col-xs-12 col-sm-3 center">
    								<span class="profile-picture">
    									<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="<?php echo $row['image']; ?>">
    									<br>
    									<div class="upload-btn-wrapper">
									    <form id="uploadImage1" method="post" action="upload1.php">
                                          <button class="btnn">Change Profile Picture</button>
                                          <input type="file" name="myfile" id="myfile" accept=".jpg, .png"/>
                                        </form>
                                        </div>
    								</span>
    	
    								<div class="space space-4"></div>
    								<br><br>
    								<h3 class="blue">
    									<span class="middle"><?php echo $row['full_name']; ?></span>
    								</h3>
    								<br><br>
                                        	
    								
    							</div><!-- /.col -->
    							<div class="col-xs-12 col-sm-6">
    	
    								<div class="profile-user-info">
    	                                <br><br><br><br>
    									<div class="profile-info-row">
    										<div class="profile-info-name"> Email: </div>
    	
    										<div class="profile-info-value">
    											<span><?php echo $row['email']; ?></span>
    										</div>
    									</div>
    	
    									<div class="profile-info-row">
    										<div class="profile-info-name"> Phone:  </div>
    	
    										<div class="profile-info-value">
    											<span><?php echo  $row['phone']; ?></span>
    										</div>
    									</div>
    	
    									<div class="profile-info-row">
    										<div class="profile-info-name"> Curriculum: </div>
    	
    										<div class="profile-info-value">
    											<span><?php echo  $row['curriculum']; ?></span>
    										</div>
    									</div>
    									<br><br><br><br>
    								</div>
                        
	
							    <div class="hr hr-8 dotted"></div>
							</div><!-- /.col -->
							<div class="col-xs-12 col-sm-3">
							    <a href="edit_profile.php" class="btn btn-lg btn-block btn-success">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
									<span class="bigger-110">Edit Profile</span>
								</a>
	                            <br><br>
								<a href="private_chat_list.php" class="btn btn-lg btn-block btn-primary">
									<i class="ace-icon fa fa-user bigger-110"></i>
									<span class="bigger-110">Private Chat List</span>
								</a>
								<br><br>
								<a href="friendlist.php" class="btn btn-lg btn-block btn-info">
									<i class="ace-icon fa fa-user bigger-110"></i>
									<span class="bigger-110">Friend List</span>
								</a>
								<br><br>
								<a href="friend_request.php" class="btn btn-lg btn-block btn-warning">
									<i class="ace-icon fa fa-user bigger-110"></i>
									<span class="bigger-110">Friend Requests</span>
								</a>
								<br><br>
						    </div>
						</div><!-- /.row -->
	<?php
	                        }
                        }
                                ?>
						<div class="space-20"></div>
					</div><!-- /#home -->
				</div>
			</div>
		</div>
        <script>
            $(document).ready(function () {
                $('#name').typeahead({
                    source: function (query, result) {
                        $.ajax({
                            url: "server.php",
        					data: 'query=' + query,            
                            dataType: "json",
                            type: "POST",
                            success: function (data) {
        						result($.map(data, function (item) {
        							return item;
                                }));
                            }
                        });
                    }
                });
            });
        </script>
    <script>
        $('#myfile').on('change', function(){
    		$('#uploadImage1').ajaxSubmit({
    		    target: "profile.php",
    			resetForm: true
    		});
            window.location.assign("http://muktadiranzan.com/chat/new-chat/success.php")
    		
    	});
    	
    </script>
	</body>