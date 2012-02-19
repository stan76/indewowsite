<?php exit; ?>
1282007917
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM forum_styles s, forum_styles_template t, forum_styles_theme c, forum_styles_imageset i WHERE s.style_id = 4 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
164588
a:1:{i:0;a:11:{s:8:"style_id";s:1:"4";s:8:"theme_id";s:1:"4";s:10:"theme_data";s:164189:"/*  phpBB 3.0 Style Sheet
    --------------------------------------------------------------
	Style name:		PBWoW WotLK
	Based on style:	proSilver (this is the default phpBB 3 style)
	Original author:	PayBas ( http://pbwow.com/ )
	Modified by:		
	
	Copyright 2009 PayBas ( http://pbwow.com/ )
    --------------------------------------------------------------
*/

/* General proSilver Markup Styles
---------------------------------------- */

/** {
	 Reset browsers default margin, padding and font sizes 
	margin: 0;
	padding: 0;
}

html {
	font-size: 100%;
	 Always show a scrollbar for short pages - stops the jump when the scrollbar appears. non-IE browsers 
	height: 100%;
	margin-bottom: 1px;
}

body {
	 Text-Sizing with ems: http://www.clagnut.com/blog/348/ 
	font-family: Verdana, Helvetica, Arial, sans-serif;
	color: #828282;
	background-color: #FFFFFF;
	font-size: 62.5%;			 This sets the default font size to be equivalent to 10px 
	font-size: 10px;
	margin: 0;
	padding: 12px 0;
}

h1 {
	 Forum name 
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	margin-right: 200px;
	color: #FFFFFF;
	margin-top: 15px;
	font-weight: bold;
	font-size: 2em;
}

h2 {
	 Forum header titles 
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: normal;
	color: #3f3f3f;
	font-size: 2em;
	margin: 0.8em 0 0.2em 0;
}

h2.solo {
	margin-bottom: 1em;
}

h3 {
	 Sub-headers (also used as post headers, but defined later) 
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-transform: uppercase;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 3px;
	padding-bottom: 2px;
	font-size: 1.05em;
	color: #989898;
	margin-top: 20px;
}

h4 {
	 Forum and topic list titles 
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, Sans-serif;
	font-size: 1.3em;
}

p {
	line-height: 1.3em;
	font-size: 1.1em;
	margin-bottom: 1.5em;
}*/

img {
	border-width: 0;
}

/*hr {
	 Also see tweaks.css 
	border: 0 none #FFFFFF;
	border-top: 1px solid #CCCCCC;
	height: 1px;
	margin: 5px 0;
	display: block;
	clear: both;
}*/

hr.dashed {
	border-top: 1px dashed #CCCCCC;
	margin: 10px 0;
}

hr.divider {
	display: none;
}

p.right {
	text-align: right;
}

/* Main blocks
---------------------------------------- */
#wrap {
	padding: 0 20px;
	min-width: 650px;
}

#simple-wrap {
	padding: 6px 10px;
}

#page-body {
	margin: 4px 0;
	clear: both;
}

#page-footer {
	clear: both;
}

#page-footer h3 {
	margin-top: 20px;
}

#logo {
	float: left;
	/*width: auto;*/
	padding: 10px 13px 0 10px;
}

a#logo:hover {
	text-decoration: none;
}

/* Search box
--------------------------------------------- */
#search-box {
	color: #FFFFFF;
	position: relative;
	margin-top: 30px;
	margin-right: 5px;
	display: block;
	float: right;
	text-align: right;
	white-space: nowrap; /* For Opera */
}

#search-box #keywords {
	width: 95px;
	background-color: #FFF;
}

#search-box input {
	border: 1px solid #b0b0b0;
}

/* .button1 style defined later, just a few tweaks for the search button version */
#search-box input.button1 {
	padding: 1px 5px;
}

#search-box li {
	text-align: right;
	margin-top: 4px;
}

#search-box img {
	vertical-align: middle;
	margin-right: 3px;
}

/* Site description and logo */
#site-description {
	float: left;
	width: 70%;
}

#site-description h1 {
	margin-right: 0;
}

/* Round cornered boxes and backgrounds
---------------------------------------- */
.headerbar {
	background: #ebebeb none repeat-x 0 0;
	color: #FFFFFF;
	margin-bottom: 4px;
	padding: 0 5px;
}

.navbar {
	background-color: #ebebeb;
	padding: 0 10px;
}

.forabg {
	background: #b1b1b1 none repeat-x 0 0;
	margin-bottom: 4px;
	padding: 0 5px;
	clear: both;
}

.forumbg {
	background: #ebebeb none repeat-x 0 0;
	margin-bottom: 4px;
	padding: 0 5px;
	clear: both;
}

.panel {
	margin-bottom: 4px;
	padding: 7px;
	background-color: black;
	border: 1px solid #424242;
	color: #ccc;
}

.post {
	padding: 0 10px;
	margin-bottom: 4px;
	background-repeat: no-repeat;
	background-position: 100% 0;
}

.post:target .content {
	color: #000000;
}

.post:target h3 a {
	color: #000000;
}

.bg1	{ background-color: #161616;}
.bg2	{ background-color: #1C1C1C; }
.bg3	{ background-color: black; }

.rowbg {
	margin: 5px 5px 2px 5px;
}

.ucprowbg {
	background-color: #e2e2e2;
}

.fieldsbg {
	/*border: 1px #DBDEE2 solid;*/
	background-color: #eaeaea;
}

span.corners-top, span.corners-bottom, span.corners-top span, span.corners-bottom span {
	font-size: 1px;
	line-height: 1px;
	display: block;
	background-repeat: no-repeat;
}

/*span.corners-top {
	background-image: none;
	background-position: 0 0;
	margin: 0 -5px;
}*/

span.corners-top span {
	background-image: none;
	background-position: 100% 0;
}

span.corners-bottom {
	background-image: none;
	background-position: 0 100%;
	margin: 0 -5px;
	clear: both;
}

/*span.corners-bottom span {
	background-image: none;
	background-position: 100% 100%;
}*/

.headbg span.corners-bottom {
	margin-bottom: -1px;
}

.post span.corners-top, .post span.corners-bottom, .panel span.corners-top, .panel span.corners-bottom, .navbar span.corners-top, .navbar span.corners-bottom {
	margin: 0 -10px;
}

.rules span.corners-top {
	margin: 0 -10px 5px -10px;
}

.rules span.corners-bottom {
	margin: 5px -10px 0 -10px;
}

/* Horizontal lists
----------------------------------------*/
ul.linklist {
	display: block;
	margin: 0;
}

ul.linklist li {
	display: block;
	list-style-type: none;
	float: left;
	width: auto;
	margin-right: 5px;
	font-size: 1.1em;
	line-height: 2.2em;
}

ul.linklist li.rightside, p.rightside {
	float: right;
	margin-right: 0;
	margin-left: 5px;
	text-align: right;
}

ul.navlinks {
	padding-bottom: 1px;
	margin-bottom: 1px;
	border-bottom: 1px solid #FFFFFF;
	font-weight: bold;
}

ul.leftside {
	float: left;
	margin-left: 0;
	margin-right: 5px;
	text-align: left;
}

ul.rightside {
	float: right;
	margin-left: 5px;
	margin-right: -5px;
	text-align: right;
}

/* Table styles
----------------------------------------*/
table.table1 {
	/* See tweaks.css */
}

#ucp-main table.table1 {
	padding: 2px;
}

table.table1 thead th {
	font-weight: normal;
	text-transform: uppercase;
	color: #FFFFFF;
	line-height: 1.3em;
	font-size: 1em;
	padding: 0 0 4px 3px;
}

table.table1 thead th span {
	padding-left: 7px;
}

table.table1 tbody tr {
	border: 1px solid #cfcfcf;
}

table.table1 tbody tr:hover, table.table1 tbody tr.hover {
	background-color: #f6f6f6;
	color: #000;
}

table.table1 td {
	color: #6a6a6a;
	font-size: 1.1em;
}

table.table1 tbody td {
	padding: 5px;
	border-top: 1px solid #AAAAAA;
}

table.table1 tbody th {
	padding: 5px;
	border-bottom: 1px solid #000000;
	text-align: left;
	color: #333333;
	background-color: #FFFFFF;
}

/* Specific column styles */
table.table1 .name		{ text-align: left; }
table.table1 .posts		{ text-align: center !important; width: 7%; }
table.table1 .joined	{ text-align: left; width: 15%; }
table.table1 .active	{ text-align: left; width: 15%; }
table.table1 .mark		{ text-align: center; width: 7%; }
table.table1 .info		{ text-align: left; width: 30%; }
table.table1 .info div	{ width: 100%; white-space: normal; overflow: hidden; }
table.table1 .autocol	{ line-height: 2em; white-space: nowrap; }
table.table1 thead .autocol { padding-left: 1em; }

table.table1 span.rank-img {
	float: right;
	width: auto;
}

table.info td {
	padding: 3px;
}

table.info tbody th {
	padding: 3px;
	text-align: right;
	vertical-align: top;
	color: #000000;
	font-weight: normal;
}

.forumbg table.table1 {
	margin: 0 -2px -1px -1px;
}

/* Misc layout styles
---------------------------------------- */
/* column[1-2] styles are containers for two column layouts 
   Also see tweaks.css */
.column1 {
	float: left;
	clear: left;
	width: 49%;
}

.column2 {
	float: right;
	clear: right;
	width: 49%;
}

/* General classes for placing floating blocks */
.left-box {
	float: left;
	width: auto;
	text-align: left;
}

.right-box {
	float: right;
	width: auto;
	text-align: right;
}

dl.details {
	/*font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;*/
	font-size: 1.1em;
}

dl.details dt {
	float: left;
	clear: left;
	width: 30%;
	text-align: right;
	color: #000000;
	display: block;
}

dl.details dd {
	margin-left: 0;
	padding-left: 5px;
	margin-bottom: 5px;
	color: #828282;
	float: left;
	width: 65%;
}

/* Pagination
---------------------------------------- */
.pagination {
	height: 1%; /* IE tweak (holly hack) */
	width: auto;
	text-align: right;
	margin-top: 5px;
	float: right;
}

.pagination span.page-sep {
	display: none;
}

li.pagination {
	margin-top: 0;
}

.pagination strong, .pagination b {
	font-weight: normal;
}

.pagination span strong {
	padding: 0 2px;
	margin: 0 2px;
	font-weight: normal;
	color: #FFFFFF;
	background-color: #bfbfbf;
	border: 1px solid #bfbfbf;
	font-size: 0.9em;
}

.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {
	font-weight: normal;
	text-decoration: none;
	color: #747474;
	margin: 0 2px;
	padding: 0 2px;
	background-color: #eeeeee;
	border: 1px solid #bababa;
	font-size: 0.9em;
	line-height: 1.5em;
}

.pagination span a:hover {
	border-color: #d2d2d2;
	background-color: #d2d2d2;
	color: #FFF;
	text-decoration: none;
}

.pagination img {
	vertical-align: middle;
}

/* Pagination in viewforum for multipage topics */
.row .pagination {
	display: block;
	float: right;
	width: auto;
	margin-top: 0;
	padding: 1px 0 1px 15px;
	font-size: 0.9em;
	background: none 0 50% no-repeat;
}

.row .pagination span a, li.pagination span a {
	background-color: #FFFFFF;
}

.row .pagination span a:hover, li.pagination span a:hover {
	background-color: #d2d2d2;
}

/* Miscellaneous styles
---------------------------------------- */
#forum-permissions {
	float: right;
	width: auto;
	padding-left: 5px;
	margin-left: 5px;
	margin-top: 10px;
	text-align: right;
}

.copyright {
	padding: 5px;
	text-align: center;
	color: #555555;
}

.small {
	font-size: 0.9em !important;
}

.titlespace {
	margin-bottom: 15px;
}

.headerspace {
	margin-top: 20px;
}

.error {
	color: #bcbcbc;
	font-weight: bold;
	font-size: 1em;
}

.reported {
	background-color: #f7f7f7;
}

li.reported:hover {
	background-color: #ececec;
}

div.rules {
	background-color: #ececec;
	color: #bcbcbc;
	padding: 0 10px;
	margin: 10px 0;
	font-size: 1.1em;
}

div.rules ul, div.rules ol {
	margin-left: 20px;
}

p.rules {
	background-color: #ececec;
	background-image: none;
	padding: 5px;
}

p.rules img {
	vertical-align: middle;
	padding-top: 5px;
}

p.rules a {
	vertical-align: middle;
	clear: both;
}

#top {
	position: absolute;
	top: -20px;
}

.clear {
	display: block;
	clear: both;
	font-size: 1px;
	line-height: 1px;
	background: transparent;
}


/* PBWoW stuff
---------------------------------------- */

.pberrorcolor 	{ color:#DD0000; }
#acpost			{ width: 100%; background: url('{T_IMAGESET_PATH}/forum-bg-tile-top.jpg') repeat-x 0 0; }
#acpost blockquote { margin: 0; padding: 0; background: #1b1b1b url('{T_IMAGESET_PATH}/post-tile-bottom.gif') repeat-x 0 100%; border: 1px solid black; }
/* proSilver Link Styles
---------------------------------------- */

/*a:link	{ color: #898989; text-decoration: none; }
a:visited	{ color: #898989; text-decoration: none; }
a:hover	{ color: #d3d3d3; text-decoration: underline; }
a:active	{ color: #d2d2d2; text-decoration: none; }*/

/* Coloured usernames */
.username-coloured {
	font-weight: bold;
	display: inline !important;
	padding: 0 !important;
}

/* Links on gradient backgrounds */
#search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {
	color: #FFFFFF;
	text-decoration: none;
}

#search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {
	color: #FFFFFF;
	text-decoration: none;
}

#search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {
	color: #ffffff;
	text-decoration: underline;
}

#search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {
	color: #ffffff;
	text-decoration: none;
}

/* Links for forum/topic lists */
a.forumtitle {
	font-family: "Trebuchet MS", Helvetica, Arial, Sans-serif;
	font-size: 1.2em;
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}

/* a.forumtitle:visited { color: #898989; } */

a.forumtitle:hover {
	color: #bcbcbc;
	text-decoration: underline;
}

a.forumtitle:active {
	color: #898989;
}

a.topictitle {
	font-family: "Trebuchet MS", Helvetica, Arial, Sans-serif;
	font-size: 1.2em;
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}

/* a.topictitle:visited { color: #d2d2d2; } */

a.topictitle:hover {
	color: #bcbcbc;
	text-decoration: underline;
}

a.topictitle:active {
	color: #898989;
}

/* Post body links */
/*.postlink {
	text-decoration: none;
	color: #d2d2d2;
	border-bottom: 1px solid #d2d2d2;
	padding-bottom: 0;
}

.postlink:visited {
	color: #bdbdbd;
	border-bottom-style: dotted;
	border-bottom-color: #666666;
}

.postlink:active {
	color: #d2d2d2;
}

.postlink:hover {
	background-color: #f6f6f6;
	text-decoration: none;
	color: #404040;
}*/

.signature a, .signature a:visited, .signature a:active, .signature a:hover {
	border: none;
	text-decoration: underline;
	background-color: transparent;
}

/* Profile links */
.postprofile a:link, .postprofile a:active, .postprofile a:visited, .postprofile dt.author a {
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}

.postprofile a:hover, .postprofile dt.author a:hover {
	text-decoration: underline;
	color: #d3d3d3;
}


/* Profile searchresults */	
.search .postprofile a {
	color: #898989;
	text-decoration: none; 
	font-weight: normal;
}

.search .postprofile a:hover {
	color: #d3d3d3;
	text-decoration: underline; 
}

/* Back to top of page */
.back2top {
	clear: both;
	height: 11px;
	text-align: right;
}

a.top {
	background: none no-repeat top left;
	text-decoration: none;
	width: {IMG_ICON_BACK_TOP_WIDTH}px;
	height: {IMG_ICON_BACK_TOP_HEIGHT}px;
	display: block;
	float: right;
	overflow: hidden;
	letter-spacing: 1000px;
	text-indent: 11px;
}

a.top2 {
	background: none no-repeat 0 50%;
	text-decoration: none;
	padding-left: 15px;
}

/* Arrow links  */
a.up		{ background: none no-repeat left center; }
a.down		{ background: none no-repeat right center; }
a.left		{ background: none no-repeat 3px 60%; }
a.right		{ background: none no-repeat 95% 60%; }

a.up, a.up:link, a.up:active, a.up:visited {
	padding-left: 10px;
	text-decoration: none;
	border-bottom-width: 0;
}

a.up:hover {
	background-position: left top;
	background-color: transparent;
}

a.down, a.down:link, a.down:active, a.down:visited {
	padding-right: 10px;
}

a.down:hover {
	background-position: right bottom;
	text-decoration: none;
}

a.left, a.left:active, a.left:visited {
	padding-left: 12px;
}

a.left:hover {
	color: #d2d2d2;
	text-decoration: none;
	background-position: 0 60%;
}

a.right, a.right:active, a.right:visited {
	padding-right: 12px;
}

a.right:hover {
	color: #d2d2d2;
	text-decoration: none;
	background-position: 100% 60%;
}

/* invisible skip link, used for accessibility  */
.skiplink {
	position: absolute;
	left: -999px;
	width: 990px;
}

/* Feed icon in forumlist_body.html */
a.feed-icon-forum {
	float: right;
	margin: 3px;
}
/* proSilver Content Styles
---------------------------------------- */

ul.topiclist {
	display: block;
	list-style-type: none;
	margin: 0;
	padding-left:0px;
}

ul.forums {
	background: #f9f9f9 none repeat-x 0 0;
}

ul.topiclist li {
	display: block;
	list-style-type: none;
	color: #777777;
	margin: 0;
}

ul.topiclist dl {
	position: relative;
}

ul.topiclist li.row dl {
	padding: 2px 0;
}

ul.topiclist dt {
	display: block;
	float: left;
	width: 50%;
	font-size: 1.0em;
	padding-left: 5px;
	padding-right: 5px;
}

ul.topiclist dd {
	display: block;
	float: left;
	border-left: 1px solid #FFFFFF;
	/*padding: 4px 0;*/
	padding: 0;
}

ul.topiclist dfn {
	/* Labels for post/view counts */
	position: absolute;
	left: -999px;
	width: 990px;
}

ul.topiclist li.row dt a.subforum {
	background-image: none;
	background-position: 0 50%;
	background-repeat: no-repeat;
	position: relative;
	white-space: nowrap;
	padding: 0 0 0 12px;
}

.forum-image {
	float: left;
	padding-top: 5px;
	margin-right: 5px;
}

li.row {
	border-top: 1px solid #FFFFFF;
	border-bottom: 1px solid #8f8f8f;
}

li.row strong {
	font-weight: normal;
	color: #000000;
}

li.row:hover {
	background-color: #f6f6f6;
}

li.row:hover dd {
	border-left-color: #CCCCCC;
}

li.header dt, li.header dd {
	line-height: 1em;
	border-left-width: 0;
	margin: 2px 0 4px 0;
	color: #FFFFFF;
	padding-top: 2px;
	padding-bottom: 2px;
	font-size: 1em;
	font-family: Arial, Helvetica, sans-serif;
	text-transform: uppercase;
}

li.header dt {
	font-weight: bold;
}

li.header dd {
	margin-left: 1px;
}

li.header dl.icon {
	min-height: 0;
}

li.header dl.icon dt {
	/* Tweak for headers alignment when folder icon used */
	padding-left: 0;
	padding-right: 50px;
}

/* Forum list column styles */
dl.icon {
	min-height: 35px;
	background-position: 10px 50%;		/* Position of folder icon */
	background-repeat: no-repeat;
}

dl.icon dt {
	padding-left: 45px;					/* Space for folder icon */
	background-repeat: no-repeat;
	background-position: 5px 95%;		/* Position of topic icon */
}

dd.posts, dd.topics, dd.views {
	width: 8%;
	text-align: center;
	line-height: 2.2em;
	font-size: 1.2em;
}

/* List in forum description */
dl.icon dt ol,
dl.icon dt ul {
	list-style-position: inside;
	margin-left: 1em;
}

dl.icon dt li {
	display: list-item;
	list-style-type: inherit;
}

dd.lastpost {
	width: 25%;
	font-size: 1.1em;
}

dd.redirect {
	font-size: 1.1em;
	line-height: 2.5em;
}

dd.moderation {
	font-size: 1.1em;
}

dd.lastpost span, ul.topiclist dd.searchby span, ul.topiclist dd.info span, ul.topiclist dd.time span, dd.redirect span, dd.moderation span {
	display: block;
	padding-left: 5px;
}

dd.time {
	width: auto;
	line-height: 200%;
	font-size: 1.1em;
}

dd.extra {
	width: 12%;
	line-height: 200%;
	text-align: center;
	font-size: 1.1em;
}

dd.mark {
	float: right !important;
	width: 9%;
	text-align: center;
	line-height: 200%;
	font-size: 1.2em;
}

dd.info {
	width: 30%;
}

dd.option {
	width: 15%;
	line-height: 200%;
	text-align: center;
	font-size: 1.1em;
}

dd.searchby {
	width: 47%;
	font-size: 1.1em;
	line-height: 1em;
}

ul.topiclist dd.searchextra {
	margin-left: 5px;
	padding: 0.2em 0;
	font-size: 1.1em;
	color: #333333;
	border-left: none;
	clear: both;
	width: 98%;
	overflow: hidden;
}

/* Container for post/reply buttons and pagination */
.topic-actions {
	margin-bottom: 3px;
	font-size: 1.1em;
	height: 28px;
	min-height: 28px;
}
div[class].topic-actions {
	height: auto;
}

/* Post body styles
----------------------------------------*/
.postbody {
	padding: 0;
	line-height: 1.48em;
	color: #CCCCCC;
	width: 76%;
	float: left;
	clear: both;
}

.postbody .ignore {
	font-size: 1.1em;
}

.postbody h3.first {
	/* The first post on the page uses this */
	font-size: 1.5em;
}

.postbody h3 {
	/* Postbody requires a different h3 format - so change it here */
	font-size: 1.2em;
	padding: 2px 0 0 0;
	margin: 0 0 0.3em 0 !important;
	text-transform: none;
	border: none;
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	line-height: 125%;
}

.postbody h3 img {
	/* Also see tweaks.css */
	vertical-align: bottom;
}

/*.postbody .content {
	font-size: 1.3em;
}*/

/*.search .postbody {
	width: 68%
}*/

/* Topic review panel
----------------------------------------*/
#review {
	margin-top: 2em;
}

#topicreview {
	padding-right: 5px;
	overflow: auto;
	height: 300px;
}

#topicreview .postbody {
	width: auto;
	float: none;
	margin: 0;
	height: auto;
}

/* Post author fix*/
#topicreview  p.author {
	margin: 0 0 0 0;
}

#topicreview  h3 {
	font-size: 1.1em;
}

#topicreview .post {
	height: auto;
}

#topicreview h2 {
	border-bottom-width: 0;
}

.post-ignore .postbody {
	display: none;
}

/* Content container styles
----------------------------------------*/
.content {
	min-height: 3em;
	overflow: hidden;
	line-height: 1.4em;
	font-family: "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	font-size: 1em;
	/*color: #333333;*/
	padding-bottom: 1px;
}

.content h2, .panel h2 {
	border-bottom: 1px solid #CCCCCC;
	margin-top: 0.5em;
	margin-bottom: 0.5em;
	padding-bottom: 0.5em;
	font-family:"Arial Black",Arial,sans-serif;
	font-size:18px;
	font-size-adjust:none;
	font-style:normal;
	font-variant:normal;
	font-weight:normal;
	letter-spacing:-1px;
	text-transform:uppercase;
	color:white;
}

.panel h3 {
	margin: 0.5em 0;
}

.panel p {
	font-size: 1.2em;
	margin-bottom: 1em;
	line-height: 1.4em;
}

.content p {
	font-family: "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	font-size: 1.2em;
	margin-bottom: 1em;
	line-height: 1.4em;
}

dl.faq {
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	/*font-size: 1.1em;*/
	margin-top: 1em;
	margin-bottom: 2em;
	line-height: 1.4em;
}

dl.faq dt {
	font-weight: bold;
	/*color: #333333;*/
}

.content dl.faq {
	/*font-size: 1.2em;*/
	margin-bottom: 0.5em;
}

.content li {
	list-style-type: inherit;
}

.content ul, .content ol {
	margin-bottom: 1em;
	margin-left: 3em;
}

.posthilit {
	background-color: #f3f3f3;
	color: #BCBCBC;
	padding: 0 2px 1px 2px;
}

.announce, .unreadpost {
	/* Highlight the announcements & unread posts box */
	border-left-color: #BCBCBC;
	border-right-color: #BCBCBC;
}

/* Post author */
p.author {
	margin: 0 15em 0.6em 0;
	padding: 0 0 5px 0;
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-size: 1em;
	line-height: 1.2em;
}

/* Post signature */
.signature {
	margin-top: 1.5em;
	padding-top: 0.2em;
	font-size: 1.1em;
	border-top: 1px solid #CCCCCC;
	clear: left;
	line-height: 140%;
	overflow: hidden;
	width: 100%;
}

dd .signature {
	margin: 0;
	padding: 0;
	clear: none;
	border: none;
}

.signature li {
	list-style-type: inherit;
}

.signature ul, .signature ol {
	margin-bottom: 1em;
	margin-left: 3em;
}

/* Post noticies */
.notice {
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	width: auto;
	margin-top: 1.5em;
	padding-top: 0.2em;
	font-size: 1em;
	border-top: 1px dashed #CCCCCC;
	clear: left;
	line-height: 130%;
}

/* Jump to post link for now */
ul.searchresults {
	list-style: none;
	text-align: right;
	clear: both;
}

/* BB Code styles
----------------------------------------*/
/* Quote block */
/*blockquote {
	background: #ebebeb none 6px 8px no-repeat;
	border: 1px solid #dbdbdb;
	font-size: 0.95em;
	margin: 0.5em 1px 0 25px;
	overflow: hidden;
	padding: 5px;
}

blockquote blockquote {
	 Nested quotes 
	background-color: #bababa;
	font-size: 1em;
	margin: 0.5em 1px 0 15px;	
}

blockquote blockquote blockquote {
	 Nested quotes 
	background-color: #e4e4e4;
}

blockquote cite {
	 Username/source of quoter 
	font-style: normal;
	font-weight: bold;
	margin-left: 20px;
	display: block;
	font-size: 0.9em;
}

blockquote cite cite {
	font-size: 1em;
}

blockquote.uncited {
	padding-top: 25px;
}*/

/* Code block */
dl.codebox {
	padding: 3px;
	background-color: #FFFFFF;
	border: 1px solid #d8d8d8;
	font-size: 1em;
}

dl.codebox dt {
	text-transform: uppercase;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 3px;
	font-size: 0.8em;
	font-weight: bold;
	display: block;
}

blockquote dl.codebox {
	margin-left: 0;
}

dl.codebox code {
	/* Also see tweaks.css */
	overflow: auto;
	display: block;
	height: auto;
	max-height: 200px;
	white-space: normal;
	padding-top: 5px;
	font: 0.9em Monaco, "Andale Mono","Courier New", Courier, mono;
	line-height: 1.3em;
	color: #8b8b8b;
	margin: 2px 0;
}

.syntaxbg		{ color: #FFFFFF; }
.syntaxcomment	{ color: #000000; }
.syntaxdefault	{ color: #bcbcbc; }
.syntaxhtml		{ color: #000000; }
.syntaxkeyword	{ color: #585858; }
.syntaxstring	{ color: #a7a7a7; }

/* Attachments
----------------------------------------*/
.attachbox {
	float: left;
	width: auto; 
	margin: 5px 5px 5px 0;
	padding: 6px;
	background-color: #FFFFFF;
	border: 1px dashed #d8d8d8;
	clear: left;
}

.pm-message .attachbox {
	background-color: #f3f3f3;
}

.attachbox dt {
	font-family: Arial, Helvetica, sans-serif;
	text-transform: uppercase;
}

.attachbox dd {
	margin-top: 4px;
	padding-top: 4px;
	clear: left;
	border-top: 1px solid #d8d8d8;
}

.attachbox dd dd {
	border: none;
}

.attachbox p {
	line-height: 110%;
	color: #666666;
	font-weight: normal;
	clear: left;
}

.attachbox p.stats
{
	line-height: 110%;
	color: #666666;
	font-weight: normal;
	clear: left;
}

.attach-image {
	margin: 3px 0;
	width: 100%;
	max-height: 350px;
	overflow: auto;
}

.attach-image img {
	border: 1px solid #999999;
/*	cursor: move; */
	cursor: default;
}

/* Inline image thumbnails */
div.inline-attachment dl.thumbnail, div.inline-attachment dl.file {
	display: block;
	margin-bottom: 4px;
}

div.inline-attachment p {
	font-size: 100%;
}

dl.file {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	display: block;
}

dl.file dt {
	text-transform: none;
	margin: 0;
	padding: 0;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

dl.file dd {
	color: #666666;
	margin: 0;
	padding: 0;	
}

dl.thumbnail img {
	padding: 3px;
	border: 1px solid #666666;
	background-color: #FFF;
}

dl.thumbnail dd {
	color: #666666;
	font-style: italic;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

.attachbox dl.thumbnail dd {
	font-size: 100%;
}

dl.thumbnail dt a:hover {
	background-color: #EEEEEE;
}

dl.thumbnail dt a:hover img {
	border: 1px solid #d2d2d2;
}

/* Post poll styles
----------------------------------------*/
fieldset.polls {
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
}

fieldset.polls dl {
	margin-top: 5px;
	border-top: 1px solid #e2e2e2;
	padding: 5px 0 0 0;
	line-height: 120%;
	color: #666666;
}

fieldset.polls dl.voted {
	font-weight: bold;
	color: #000000;
}

fieldset.polls dt {
	text-align: left;
	float: left;
	display: block;
	width: 30%;
	border-right: none;
	padding: 0;
	margin: 0;
	font-size: 1.1em;
}

fieldset.polls dd {
	float: left;
	width: 10%;
	border-left: none;
	padding: 0 5px;
	margin-left: 0;
	font-size: 1.1em;
}

fieldset.polls dd.resultbar {
	width: 50%;
}

fieldset.polls dd input {
	margin: 2px 0;
}

fieldset.polls dd div {
	text-align: right;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
	padding: 0 2px;
	overflow: visible;
	min-width: 2%;
}

.pollbar1 {
	background-color: #aaaaaa;
	border-bottom: 1px solid #747474;
	border-right: 1px solid #747474;
}

.pollbar2 {
	background-color: #bebebe;
	border-bottom: 1px solid #8c8c8c;
	border-right: 1px solid #8c8c8c;
}

.pollbar3 {
	background-color: #D1D1D1;
	border-bottom: 1px solid #aaaaaa;
	border-right: 1px solid #aaaaaa;
}

.pollbar4 {
	background-color: #e4e4e4;
	border-bottom: 1px solid #bebebe;
	border-right: 1px solid #bebebe;
}

.pollbar5 {
	background-color: #f8f8f8;
	border-bottom: 1px solid #D1D1D1;
	border-right: 1px solid #D1D1D1;
}

/* Poster profile block
----------------------------------------*/
.postprofile {
	/* Also see tweaks.css */
	margin: 5px 0 10px 0;
	min-height: 80px;
	color: #666666;
	border-left: 1px solid #FFFFFF;
	width: 22%;
	float: right;
	display: inline;
}
.pm .postprofile {
	border-left: 1px solid #DDDDDD;
}

.postprofile dd, .postprofile dt {
	line-height: 1.2em;
	margin-left: 8px;
}

.postprofile strong {
	font-weight: normal;
	color: #000000;
}

.avatar {
	border: none;
	margin-bottom: 3px;
}

.online {
	background-image: none;
	background-position: 100% 0;
	background-repeat: no-repeat;
}

/* Poster profile used by search*/
/*.search .postprofile {
	width: 30%;
}*/

/* pm list in compose message if mass pm is enabled */
dl.pmlist dt {
	width: 60% !important;
}

dl.pmlist dt textarea {
	width: 95%;
}

dl.pmlist dd {
	margin-left: 61% !important;
	margin-bottom: 2px;
}
/* proSilver Button Styles
---------------------------------------- */

/* Rollover buttons
   Based on: http://wellstyled.com/css-nopreload-rollovers.html
----------------------------------------*/
.buttons {
	float: left;
	width: auto;
	height: auto;
}

/* Rollover state */
.buttons div {
	float: left;
	margin: 0 5px 0 0;
	background-position: 0 100%;
}

/* Rolloff state */
.buttons div a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
	position: relative;
	overflow: hidden;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
/*.buttons div span		{ display: none; }*/
/*.buttons div a:hover	{ background-image: none; }*/
.buttons div span			{ position: absolute; width: 100%; height: 100%; cursor: pointer;}
.buttons div a:hover span	{ background-position: 0 100%; }

/* Big button images */
.reply-icon span	{ background: transparent none 0 0 no-repeat; }
.post-icon span		{ background: transparent none 0 0 no-repeat; }
.locked-icon span	{ background: transparent none 0 0 no-repeat; }
.pmreply-icon span	{ background: none 0 0 no-repeat; }
.newpm-icon span 	{ background: none 0 0 no-repeat; }
.forwardpm-icon span 	{ background: none 0 0 no-repeat; }

/* Set big button dimensions */
.buttons div.reply-icon		{ width: {IMG_BUTTON_TOPIC_REPLY_WIDTH}px; height: {IMG_BUTTON_TOPIC_REPLY_HEIGHT}px; }
.buttons div.post-icon		{ width: {IMG_BUTTON_TOPIC_NEW_WIDTH}px; height: {IMG_BUTTON_TOPIC_NEW_HEIGHT}px; }
.buttons div.locked-icon	{ width: {IMG_BUTTON_TOPIC_LOCKED_WIDTH}px; height: {IMG_BUTTON_TOPIC_LOCKED_HEIGHT}px; }
.buttons div.pmreply-icon	{ width: {IMG_BUTTON_PM_REPLY_WIDTH}px; height: {IMG_BUTTON_PM_REPLY_HEIGHT}px; }
.buttons div.newpm-icon		{ width: {IMG_BUTTON_PM_NEW_WIDTH}px; height: {IMG_BUTTON_PM_NEW_HEIGHT}px; }
.buttons div.forwardpm-icon	{ width: {IMG_BUTTON_PM_FORWARD_WIDTH}px; height: {IMG_BUTTON_PM_FORWARD_HEIGHT}px; }

/* Sub-header (navigation bar)
--------------------------------------------- */
a.print, a.sendemail, a.fontsize {
	display: block;
	overflow: hidden;
	height: 18px;
	text-indent: -5000px;
	text-align: left;
	background-repeat: no-repeat;
}

a.print {
	background-image: none;
	width: 22px;
}

a.sendemail {
	background-image: none;
	width: 22px;
}

a.fontsize {
	background-image: none;
	background-position: 0 -1px;
	width: 29px;
}

a.fontsize:hover {
	background-position: 0 -20px;
	text-decoration: none;
}

/* Icon images
---------------------------------------- */
.sitehome, .icon-faq, .icon-members, .icon-home, .icon-ucp, .icon-register, .icon-logout,
.icon-bookmark, .icon-bump, .icon-subscribe, .icon-unsubscribe, .icon-pages, .icon-search {
	background-position: 0 50%;
	background-repeat: no-repeat;
	background-image: none;
/*	padding: 1px 0 0 17px;*/
}

/* Poster profile icons
----------------------------------------*/
ul.profile-icons {
	padding-top: 10px;
	list-style: none;
}

/* Rollover state */
ul.profile-icons li {
	float: left;
	margin: 0 6px 3px 0;
	background-position: 0 100%;
}

/* Rolloff state */
ul.profile-icons li a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
ul.profile-icons li span { display:none; }
ul.profile-icons li a:hover { background: none; }

/* Positioning of moderator icons */
.postbody ul.profile-icons {
	float: right;
	width: auto;
	padding: 0;
}

.postbody ul.profile-icons li {
	margin: 0 3px;
}

/* Profile & navigation icons */
.email-icon, .email-icon a		{ background: none top left no-repeat; }
.aim-icon, .aim-icon a			{ background: none top left no-repeat; }
.yahoo-icon, .yahoo-icon a		{ background: none top left no-repeat; }
.web-icon, .web-icon a			{ background: none top left no-repeat; }
.msnm-icon, .msnm-icon a			{ background: none top left no-repeat; }
.icq-icon, .icq-icon a			{ background: none top left no-repeat; }
.jabber-icon, .jabber-icon a		{ background: none top left no-repeat; }
.pm-icon, .pm-icon a				{ background: none top left no-repeat; }
.quote-icon, .quote-icon a		{ background: none top left no-repeat; }

/* Moderator icons */
.report-icon, .report-icon a		{ background: none top left no-repeat; }
.warn-icon, .warn-icon a			{ background: none top left no-repeat; }
.edit-icon, .edit-icon a			{ background: none top left no-repeat; }
.delete-icon, .delete-icon a		{ background: none top left no-repeat; }
.info-icon, .info-icon a			{ background: none top left no-repeat; }

/* Set profile icon dimensions */
ul.profile-icons li.email-icon		{ width: {IMG_ICON_CONTACT_EMAIL_WIDTH}px; height: {IMG_ICON_CONTACT_EMAIL_HEIGHT}px; }
ul.profile-icons li.aim-icon	{ width: {IMG_ICON_CONTACT_AIM_WIDTH}px; height: {IMG_ICON_CONTACT_AIM_HEIGHT}px; }
ul.profile-icons li.yahoo-icon	{ width: {IMG_ICON_CONTACT_YAHOO_WIDTH}px; height: {IMG_ICON_CONTACT_YAHOO_HEIGHT}px; }
ul.profile-icons li.web-icon	{ width: {IMG_ICON_CONTACT_WWW_WIDTH}px; height: {IMG_ICON_CONTACT_WWW_HEIGHT}px; }
ul.profile-icons li.msnm-icon	{ width: {IMG_ICON_CONTACT_MSNM_WIDTH}px; height: {IMG_ICON_CONTACT_MSNM_HEIGHT}px; }
ul.profile-icons li.icq-icon	{ width: {IMG_ICON_CONTACT_ICQ_WIDTH}px; height: {IMG_ICON_CONTACT_ICQ_HEIGHT}px; }
ul.profile-icons li.jabber-icon	{ width: {IMG_ICON_CONTACT_JABBER_WIDTH}px; height: {IMG_ICON_CONTACT_JABBER_HEIGHT}px; }
ul.profile-icons li.pm-icon		{ width: {IMG_ICON_CONTACT_PM_WIDTH}px; height: {IMG_ICON_CONTACT_PM_HEIGHT}px; }
ul.profile-icons li.quote-icon	{ width: {IMG_ICON_POST_QUOTE_WIDTH}px; height: {IMG_ICON_POST_QUOTE_HEIGHT}px; }
ul.profile-icons li.report-icon	{ width: {IMG_ICON_POST_REPORT_WIDTH}px; height: {IMG_ICON_POST_REPORT_HEIGHT}px; }
ul.profile-icons li.edit-icon	{ width: {IMG_ICON_POST_EDIT_WIDTH}px; height: {IMG_ICON_POST_EDIT_HEIGHT}px; }
ul.profile-icons li.delete-icon	{ width: {IMG_ICON_POST_DELETE_WIDTH}px; height: {IMG_ICON_POST_DELETE_HEIGHT}px; }
ul.profile-icons li.info-icon	{ width: {IMG_ICON_POST_INFO_WIDTH}px; height: {IMG_ICON_POST_INFO_HEIGHT}px; }
ul.profile-icons li.warn-icon	{ width: {IMG_ICON_USER_WARN_WIDTH}px; height: {IMG_ICON_USER_WARN_HEIGHT}px; }

/* Fix profile icon default margins */
ul.profile-icons li.edit-icon	{ margin: 0 0 0 3px; }
ul.profile-icons li.quote-icon	{ margin: 0 0 0 10px; }
ul.profile-icons li.info-icon, ul.profile-icons li.report-icon	{ margin: 0 3px 0 0; }
/* proSilver Control Panel Styles
---------------------------------------- */


/* Main CP box
----------------------------------------*/
#cp-menu {
	float:left;
	width: 22%;
	margin-top: 1em;
	margin-bottom: 5px;
}

#cp-main {
	float: left;
	width: 78%;
}

#cp-main .content {
	padding: 0;
}

#cp-main h3, #cp-main hr, #cp-menu hr {
	border-color: #bfbfbf;
}

#cp-main .panel p {
	font-size: 1.1em;
}

#cp-main .panel ol {
	margin-left: 2em;
	font-size: 1.1em;
}

#cp-main .panel li.row {
	/*border-bottom: 1px solid #cbcbcb;*/
	border-top: 1px solid #424242;
	border-bottom: none;
}

ul.cplist {
	margin-bottom: 5px;
	border: 1px solid #424242;
	border-top: none;
}

#cp-main .panel li.header dd, #cp-main .panel li.header dt {
	color: #000000;
	margin-bottom: 2px;
}

#cp-main table.table1 {
	margin-bottom: 1em;
}

#cp-main table.table1 thead th {
	color: #333333;
	font-weight: bold;
	border-bottom: 1px solid #333333;
	padding: 5px;
}

#cp-main table.table1 tbody th {
	font-style: italic;
	background-color: transparent !important;
	border-bottom: none;
}

#cp-main .pagination {
	float: right;
	width: auto;
	padding-top: 1px;
}

#cp-main .postbody p {
	font-size: 1.1em;
}

#cp-main .pm-message {
	border: 1px solid #e2e2e2;
	margin: 10px 0;
	background-color: #FFFFFF;
	width: auto;
	float: none;
}

.pm-message h2 {
	padding-bottom: 5px;
}

#cp-main .postbody h3, #cp-main .box2 h3 {
	margin-top: 0;
}

#cp-main .buttons {
	margin-left: 0;
}

#cp-main ul.linklist {
	margin: 0;
}

/* MCP Specific tweaks */
.mcp-main .postbody {
	width: 100%;
}

/* CP tabbed menu
----------------------------------------*/
#tabs {
	line-height: normal;
	margin: 25px 10px -1px 7px;
	height: 27px;
	min-width: 570px;
}

#tabs ul {
	margin:0;
	padding: 0;
	list-style: none;
}

#tabs li {
	display: inline;
	margin: 0;
	height: 21px;
	padding: 5px 0 0 0;
	text-align: center;
}

#tabs a {
	float: left;
	background: none no-repeat 0% -28px;
	margin: 0 -3px 0 0;
	padding: 0 0 0 5px;
	text-decoration: none;
	position: relative;
	cursor: pointer;
	height: 28px;
	background-image: url("{T_IMAGESET_PATH}/x_custom/tab-bg1.gif");
}

#tabs a span {
	float: left;
	display: block;
	background: none no-repeat 100% -28px;
	padding: 6px 13px 6px 8px;
	font-size: 11px;
	color:#ffb019;
	white-space: nowrap;
	background-image: url("{T_IMAGESET_PATH}/x_custom/tab-bg2.gif");
}

#tabs a:hover span {
	color: white;
	text-decoration: none;
}

#tabs .activetab a {
	background-position: 0 0;
	height: 28px;
	z-index: 90;
/*	border-bottom: 1px solid #ebebeb;*/
}

#tabs .activetab a span {
	background-position: 100% 0;
	padding-bottom: 7px;
	height: 15px;
	color: white;
}

#tabs a:hover {
	/*background-position: 0 -70px;*/
}

#tabs a:hover span {
	/*background-position:100% -70px;*/
}

#tabs .activetab a:hover {
	background-position: 0 0;
}

#tabs .activetab a:hover span {
	background-position: 100% 0;
}

/* Mini tabbed menu used in MCP
----------------------------------------*/
#minitabs {
	line-height: normal;
	margin: -20px 7px 0 0;
}

#minitabs ul {
	margin:0;
	padding: 0;
	list-style: none;
}

#minitabs li {
	display: block;
	float: right;
	padding: 3px 10px 4px 10px;
	font-size: 1em;
	font-weight: bold;
	background-color: #303030;
	margin-left: 2px;
}

#minitabs a {
}

#minitabs a:hover {
	text-decoration: none;
}

#minitabs li.activetab {
	background-color: #454545;
}

#minitabs li.activetab a, #minitabs li.activetab a:hover {
	color: #FFF;
}

/* UCP navigation menu
----------------------------------------*/
/* Container for sub-navigation list */
#navigation {
	width: 100%;
	padding-top: 40px;
}

#navigation ul {
	list-style: none;
	padding: 0;
	margin: 0;
	background: #424242;
	border-bottom: 1px solid #424242;
}

/* Default list state */
#navigation li {
	margin: 1px 0;
	padding: 0;
	display: inline;
}

/* Link styles for the sub-section links */
#navigation a {
	display: block;
	padding: 5px;
	margin: 0;
	text-decoration: none;
	font-weight: bold;
	color: #CCC;
	font-size: 11px;
	background: #000 none repeat-y 100% 0;
	border: 1px solid #424242;
	border-bottom:none;
	border-right:none;
}

#navigation a:hover {
	text-decoration: none;
	background-color: #353535;
	color: white;
	background-image: none;
}

#navigation #active-subsection a {
	display: block;
	color: white;
	background-color: #252525;
}

#navigation #active-subsection a:hover {
	color: white;
}

/* Preferences pane layout
----------------------------------------*/
#cp-main h2 {
	border-bottom: none;
	padding: 0;
	margin-left: 10px;
	/*color: #CCC;*/
	font-family:"Arial Black",Arial,sans-serif;
	font-size:18px;
	font-size-adjust:none;
	font-style:normal;
	font-variant:normal;
	font-weight:normal;
	letter-spacing:-1px;
	/*line-height:34px;*/
	text-transform:uppercase;
	color:white;
}

#cp-main h2 a {
	text-decoration:none;
}

#cp-main .panel {
	background-color: #252525;
	color: #CCC;
}

#cp-main .pm {
	background-color: #252525;
}

#cp-main span.corners-top, #cp-menu span.corners-top {
	background-image: none;
}

#cp-main span.corners-top span, #cp-menu span.corners-top span {
	background-image: none;
}

#cp-main span.corners-bottom, #cp-menu span.corners-bottom {
	background-image: none;
}

#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {
	background-image: none;
}

/* Topicreview */
#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {
	background-image: none;
}

/* Friends list */
.cp-mini {
	/*background-color: #f9f9f9;*/
	padding: 0 5px;
	margin: 10px 15px 10px 5px;
}

.cp-mini span.corners-top, .cp-mini span.corners-bottom {
	margin: 0 -5px;
}

dl.mini dt {
	font-weight: bold;
	color: #676767;
}

dl.mini dd {
	padding-top: 4px;
}

.friend-online {
	font-weight: bold;
}

.friend-offline {
	font-style: italic;
}

/* PM Styles
----------------------------------------*/
#pm-menu {
	line-height: 2.5em;
}

/* PM panel adjustments */
.pm-panel-header {
	margin: 0; 
	padding-bottom: 10px; 
	border-bottom: 1px dashed #A4B3BF;
}

.reply-all {
	display: block; 
	padding-top: 4px; 
	clear: both;
	float: left;
}

.pm-panel-message {
	padding-top: 10px;
}

.pm-return-to {
	padding-top: 23px;
}

#cp-main .pm-message-nav {
	margin: 0; 
	padding: 2px 10px 5px 10px; 
	border-bottom: 1px dashed #A4B3BF;
}

/* PM Message history */
.current {
	color: #999999;
}

/* Defined rules list for PM options */
ol.def-rules {
	padding-left: 0;
}

ol.def-rules li {
	line-height: 180%;
	padding: 1px;
}

/* PM marking colours */
.pmlist li.bg1 {
/*	border: solid 3px transparent;
	border-width: 0 3px;*/
}

.pmlist li.bg2 {
/*	border: solid 3px transparent;
	border-width: 0 3px;*/
}

.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
	border-left-color: #bcbcbc;
	border-right-color: #bcbcbc;
}

.pmlist li.pm_marked_colour, .pm_marked_colour {
	border-left: solid 5px #ffffff;
}

.pmlist li.pm_replied_colour, .pm_replied_colour {
	border-left: solid 5px #c2c2c2;	
}

.pmlist li.pm_friend_colour, .pm_friend_colour {
	border-left: solid 5px #bdbdbd;
}

.pmlist li.pm_foe_colour, .pm_foe_colour {
	border-left: solid 5px #000000;
}

.pm-legend {
	border-left-width: 10px;
	border-left-style: solid;
	border-right-width: 0;
	margin-bottom: 3px;
	padding-left: 3px;
}

/* Avatar gallery */
#gallery label {
	position: relative;
	float: left;
	margin: 10px;
	padding: 5px;
	width: auto;
	background: #FFFFFF;
	border: 1px solid #CCC;
	text-align: center;
}

#gallery label:hover {
	background-color: #EEE;
}
/* proSilver Form Styles
---------------------------------------- */

/* General form styles
----------------------------------------*/
fieldset {
	border-width: 0;
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-size: 11px;
}

/*input {
	font-weight: normal;
	cursor: pointer;
	vertical-align: middle;
	padding: 0 3px;
	font-size: 1em;
	font-family: Verdana, Helvetica, Arial, sans-serif;
}

select {
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-weight: normal;
	cursor: pointer;
	vertical-align: middle;
	border: 1px solid #666666;
	padding: 1px;
	background-color: #FAFAFA;
}*/

option {
	padding-right: 1em;
}

option.disabled-option {
	color: graytext;
}

textarea {
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	width: 60%;
	padding: 2px;
	font-size: 1em;
	line-height: 1.4em;
}

label {
	cursor: default;
	padding-right: 5px;
	color: #CCC;
}

label input {
	vertical-align: middle;
}

label img {
	vertical-align: middle;
}

/* Definition list layout for forms
---------------------------------------- */
fieldset dl {
	padding: 4px 0;
}

fieldset dt {
	float: left;	
	width: 40%;
	text-align: left;
	display: block;
}

fieldset dd {
	margin-left: 41%;
	vertical-align: top;
	margin-bottom: 3px;
}

/* Specific layout 1 */
fieldset.fields1 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields1 dd {
	margin-left: 15em;
	border-left-width: 0;
}

fieldset.fields1 {
	background-color: transparent;
}

fieldset.fields1 div {
	margin-bottom: 3px;
}

/* Specific layout 2 */
fieldset.fields2 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields2 dd {
	margin-left: 16em;
	border-left-width: 0;
}

/* Form elements */
dt label {
	font-weight: bold;
	text-align: left;
}

dd label {
	white-space: nowrap;
	color: #757575;
}

dd input, dd textarea {
	margin-right: 3px;
}

dd select {
	width: auto;
}

dd textarea {
	width: 85%;
}

/* Hover effects */
/*fieldset dl:hover dt label {
	color: #000000;
}

fieldset.fields2 dl:hover dt label {
	color: inherit;
}*/

#timezone {
	width: 95%;
}

* html #timezone {
	width: 50%;
}

/* Quick-login on index page */
fieldset.quick-login {
	margin-top: 5px;
}

fieldset.quick-login input {
	width: auto;
}

/*fieldset.quick-login input.inputbox {
	width: 15%;
	vertical-align: middle;
	margin-right: 5px;
	background-color: #f3f3f3;
}*/

fieldset.quick-login label {
	white-space: nowrap;
	padding-right: 2px;
}

/* Display options on viewtopic/viewforum pages  */
fieldset.display-options {
	text-align: center;
	margin: 3px 0 5px 0;
}

fieldset.display-options label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.display-options a {
	margin-top: 3px;
}

/* Display actions for ucp and mcp pages */
fieldset.display-actions {
	text-align: right;
	line-height: 2em;
	white-space: nowrap;
	padding-right: 1em;
}

fieldset.display-actions label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.sort-options {
	line-height: 2em;
}

/* MCP forum selection*/
fieldset.forum-selection {
	margin: 5px 0 3px 0;
	float: right;
}

fieldset.forum-selection2 {
	margin: 13px 0 3px 0;
	float: right;
}

/* Jumpbox */
fieldset.jumpbox {
	text-align: right;
	margin-top: 15px;
	height: 2.5em;
}

fieldset.quickmod {
	width: 50%;
	float: right;
	text-align: right;
	height: 2.5em;
}

/* Submit button fieldset */
fieldset.submit-buttons {
	text-align: center;
	vertical-align: middle;
	margin: 5px 0;
}

fieldset.submit-buttons input {
	vertical-align: middle;
	padding-top: 3px;
	padding-bottom: 3px;
}

/* Posting page styles
----------------------------------------*/

/* Buttons used in the editor */
#format-buttons {
	margin: 15px 0 2px 0;
}

#format-buttons input, #format-buttons select {
	vertical-align: middle;
}

/* Main message box */
#message-box {
	width: 80%;
}

#message-box textarea {
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	width: 100%;
	/*font-size: 1.2em;*/
	/*color: #333333;*/
}

/* Emoticons panel */
#smiley-box {
	width: 18%;
	float: right;
}

#smiley-box img {
	margin: 3px;
}

/* Input field styles
---------------------------------------- */
/*.inputbox {
	background-color: #FFFFFF;
	border: 1px solid #c0c0c0;
	color: #333333;
	padding: 2px;
	cursor: text;
}

.inputbox:hover {
	border: 1px solid #eaeaea;
}

.inputbox:focus {
	border: 1px solid #eaeaea;
	color: #4b4b4b;
}

input.inputbox	{ width: 85%; }
input.medium	{ width: 50%; }
input.narrow	{ width: 25%; }
input.tiny		{ width: 125px; }

textarea.inputbox {
	width: 85%;
}

.autowidth {
	width: auto !important;
}*/

/* Form button styles
---------------------------------------- */
input.button1, input.button2 {
	font-size: 1em;
}

a.button1, input.button1, input.button3, a.button2, input.button2 {
	width: auto !important;
	padding-top: 1px;
	padding-bottom: 1px;
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	color: #000;
	background: #FAFAFA none repeat-x top;
}

a.button1, input.button1 {
	font-weight: bold;
	border: 1px solid #666666;
}

input.button3 {
	padding: 0;
	margin: 0;
	line-height: 5px;
	height: 12px;
	background-image: none;
	font-variant: small-caps;
}

/* Alternative button */
a.button2, input.button2, input.button3 {
	border: 1px solid #666666;
}

/* <a> button in the style of the form buttons */
a.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {
	text-decoration: none;
	color: #000000;
	padding: 2px 8px;
	line-height: 250%;
	vertical-align: text-bottom;
	background-position: 0 1px;
}

/* Hover states */
a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover {
	border: 1px solid #BCBCBC;
	background-position: 0 100%;
	color: #BCBCBC;
}

input.disabled {
	font-weight: normal;
	color: #666666;
}

/* Topic and forum Search */
.search-box {
	margin-top: 3px;
	margin-left: 5px;
	float: left;
}

.search-box input {
}

/*input.search {
	background-image: none;
	background-repeat: no-repeat;
	background-position: left 1px;
	padding-left: 17px;
}*/

.full { width: 95%; }
.medium { width: 50%;}
.narrow { width: 25%;}
/*.tiny { width: 10%;}*/
/* proSilver Style Sheet Tweaks

These style definitions are mainly IE specific 
tweaks required due to its poor CSS support.
-------------------------------------------------*/

* html table, * html select, * html input { font-size: 100%; }
* html hr { margin: 0; }
/** html span.corners-top, * html span.corners-bottom { background-image: url("{T_THEME_PATH}/images/corners_left.gif"); }
* html span.corners-top span, * html span.corners-bottom span { background-image: url("{T_THEME_PATH}/images/corners_right.gif"); }*/

table.table1 {
	width: 99%;		/* IE < 6 browsers */
	/* Tantek hack */
	voice-family: "\"}\"";
	voice-family: inherit;
	width: 100%;
}
html>body table.table1 { width: 100%; }	/* Reset 100% for opera */

* html ul.topiclist li { position: relative; }
* html .postbody h3 img { vertical-align: middle; }

/* Form styles */
html>body dd label input { vertical-align: text-bottom; }	/* Align checkboxes/radio buttons nicely */

* html input.button1, * html input.button2 {
	padding-bottom: 0;
	margin-bottom: 1px;
}

/* Misc layout styles */
* html .column1, * html .column2 { width: 45%; }

/* Nice method for clearing floated blocks without having to insert any extra markup (like spacer above)
   From http://www.positioniseverything.net/easyclearing.html 
#tabs:after, #minitabs:after, .post:after, .navbar:after, fieldset dl:after, ul.topiclist dl:after, ul.linklist:after, dl.polls:after {
	content: "."; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden;
}*/

.clearfix, #tabs, #minitabs, fieldset dl, ul.topiclist dl, dl.polls {
	height: 1%;
	overflow: hidden;
}

/* viewtopic fix */
* html .post {
	height: 25%;
	overflow: hidden;
}

/* navbar fix */
* html .clearfix, * html .navbar, ul.linklist {
	height: 4%;
	overflow: hidden;
}

/* Simple fix so forum and topic lists always have a min-height set, even in IE6
	From http://www.dustindiaz.com/min-height-fast-hack */
dl.icon {
	min-height: 35px;
	height: auto !important;
	height: 35px;
}

* html li.row dl.icon dt {
	height: 35px;
	overflow: visible;
}

* html #search-box {
	width: 25%;
}

/* Correctly clear floating for details on profile view */
*:first-child+html dl.details dd {
	margin-left: 30%;
	float: none;
}

* html dl.details dd {
	margin-left: 30%;
	float: none;
}

* html .forumbg table.table1 {
	margin: 0 -2px 0px -1px;
}
/*  	
--------------------------------------------------------------
Colours and backgrounds for common.css
-------------------------------------------------------------- */

/*html, body {
	color: #536482;
	background-color: #FFFFFF;
}

h1 {
	color: #FFFFFF;
}

h2 {
	color: #28313F;
}

h3 {
	border-bottom-color: #CCCCCC;
	color: #115098;
}

hr {
	border-color: #FFFFFF;
	border-top-color: #CCCCCC;
}

hr.dashed {
	border-top-color: #CCCCCC;
}*/

/* Search box
--------------------------------------------- */

#search-box {
	color: #FFFFFF;
}

#search-box #keywords {
	background-color: #FFF;
}

#search-box input {
	border-color: #0075B0;
}

/* Round cornered boxes and backgrounds
---------------------------------------- */
.headerbar {
	background-color: #12A3EB;
	background-image: url("{T_IMAGESET_PATH}/prosilver/bg_header.gif");
	color: #FFFFFF;
}

.navbar {
	background-color: #cadceb;
}

.forabg {
	background-color: #0076b1;
	background-image: url("{T_IMAGESET_PATH}/prosilver/bg_list.gif");
}

.forumbg {
	background-color: #12A3EB;
	background-image: url("{T_IMAGESET_PATH}/prosilver/bg_header.gif");
}

/*.panel {
	background-color: #353535;
	color: #ccc;
}*/

.post:target .content {
	color: #000000;
}

.post:target h3 a {
	color: #000000;
}

/*.bg1	{ background-color: #ECF3F7; }
.bg2	{ background-color: #e1ebf2;  }
.bg3	{ background-color: #252525; }*/

.ucprowbg {
	background-color: #DCDEE2;
}

.fieldsbg {
	background-color: #E7E8EA;
}

/*span.corners-top {
	background-image: url("{T_IMAGESET_PATH}/prosilver/corners_left.png");
}

span.corners-top span {
	background-image: url("{T_IMAGESET_PATH}/prosilver/corners_right.png");
}

span.corners-bottom {
	background-image: url("{T_IMAGESET_PATH}/prosilver/corners_left.png");
}

span.corners-bottom span {
	background-image: url("{T_IMAGESET_PATH}/prosilver/corners_right.png");
}*/

/* Horizontal lists
----------------------------------------*/

ul.navlinks {
	border-bottom-color: #FFFFFF;
}

/* Table styles
----------------------------------------*/
table.table1 thead th {
	color: #FFFFFF;
}

table.table1 tbody tr {
	border-color: #BFC1CF;
}

/*table.table1 tbody tr:hover, table.table1 tbody tr.hover {
	background-color: #CFE1F6;
	color: #000;
}*/

table.table1 td {
	color: #cccccc;
}

/*table.table1 tbody td {
	border-top-color: #FAFAFA;
}*/

table.table1 tbody th {
	border-bottom-color: #000000;
	color: #333333;
	background-color: #FFFFFF;
}

table.info tbody th {
	color: #000000;
}

/* Misc layout styles
---------------------------------------- */
dl.details dt {
	color: #FFF;
}

dl.details dd {
	color: #7384A2;
}

.sep {
	color: #1198D9;
}

/* Pagination
---------------------------------------- */

.pagination span strong {
	color: #FFFFFF;
	background-color: #4692BF;
	border-color: #4692BF;
}

.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {
	color: #5C758C;
	background-color: #ECEDEE;
	border-color: #B4BAC0;
}

.pagination span a:hover {
	border-color: #368AD2;
	background-color: #368AD2;
	color: #FFF;
}

/* Pagination in viewforum for multipage topics */
.row .pagination {
	background-image: url("{T_IMAGESET_PATH}/prosilver/icon_pages.gif");
}

.row .pagination span a, li.pagination span a {
	background-color: #FFFFFF;
}

.row .pagination span a:hover, li.pagination span a:hover {
	background-color: #368AD2;
}

/* Miscellaneous styles
---------------------------------------- */

.copyright {
	color: #555555;
}

.error {
	color: #BC2A4D;
}

.reported {
	background-color: #F7ECEF;
}

li.reported:hover {
	background-color: #ECD5D8 !important;
}
.sticky, .announce {
	/* you can add a background for stickies and announcements*/
}

div.rules {
	background-color: #ECD5D8;
	color: #BC2A4D;
}

p.rules {
	background-color: #ECD5D8;
	background-image: none;
}

/*  	
--------------------------------------------------------------
Colours and backgrounds for links.css
-------------------------------------------------------------- */

/*a:link	{ color: #105289; }
a:visited	{ color: #105289; }
a:hover	{ color: #D31141; }
a:active	{ color: #368AD2; }
*/
/* Links on gradient backgrounds */
#search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {
	color: #FFFFFF;
}

#search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {
	color: #FFFFFF;
}

#search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {
	color: #A8D8FF;
}

#search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {
	color: #C8E6FF;
}

/* Links for forum/topic lists */
a.forumtitle {
	color: #105289;
}

/* a.forumtitle:visited { color: #105289; } */

a.forumtitle:hover {
	color: #BC2A4D;
}

a.forumtitle:active {
	color: #105289;
}

a.topictitle {
	color: #105289;
}

/* a.topictitle:visited { color: #368AD2; } */

a.topictitle:hover {
	color: #BC2A4D;
}

a.topictitle:active {
	color: #105289;
}

/* Post body links */
/*.postlink {
	color: #368AD2;
	border-bottom-color: #368AD2;
}

.postlink:visited {
	color: #5D8FBD;
	border-bottom-color: #666666;
}

.postlink:active {
	color: #368AD2;
}

.postlink:hover {
	background-color: #D0E4F6;
	color: #0D4473;
}*/

.signature a, .signature a:visited, .signature a:active, .signature a:hover {
	background-color: transparent;
}

/* Profile links */
.postprofile a:link, .postprofile a:active, .postprofile a:visited, .postprofile dt.author a {
	color: #105289;
}

.postprofile a:hover, .postprofile dt.author a:hover {
	color: #D31141;
}

/* Profile searchresults */	
.search .postprofile a {
	color: #105289;
}

.search .postprofile a:hover {
	color: #D31141;
}

/* Back to top of page */
a.top {
	background-image: url("{IMG_ICON_BACK_TOP_SRC}");
}

a.top2 {
	background-image: url("{IMG_ICON_BACK_TOP_SRC}");
}

/* Arrow links  */
a.up		{ background-image: url("{T_IMAGESET_PATH}/prosilver/arrow_up.gif") }
a.down		{ background-image: url("{T_IMAGESET_PATH}/prosilver/arrow_down.gif") }
a.left		{ background-image: url("{T_IMAGESET_PATH}/prosilver/arrow_left.gif") }
a.right		{ background-image: url("{T_IMAGESET_PATH}/prosilver/arrow_right.gif") }

a.up:hover {
	background-color: transparent;
}

a.left:hover {
	color: #368AD2;
}

a.right:hover {
	color: #368AD2;
}


/*  	
--------------------------------------------------------------
Colours and backgrounds for content.css
-------------------------------------------------------------- */

ul.forums {
	background-color: #eef5f9;
	background-image: url("{T_IMAGESET_PATH}/prosilver/gradient.gif");
}

/*ul.topiclist li {
	color: #4C5D77;
}*/

ul.topiclist dd {
	border-left-color: #FFFFFF;
}

.rtl ul.topiclist dd {
	border-right-color: #fff;
	border-left-color: transparent;
}

ul.topiclist li.row dt a.subforum.read {
	background-image: url("{IMG_SUBFORUM_READ_SRC}");
}

ul.topiclist li.row dt a.subforum.unread {
	background-image: url("{IMG_SUBFORUM_UNREAD_SRC}");
}

li.row {
	border-top-color:  #FFFFFF;
	border-bottom-color: #00608F;
}

li.row strong {
	color: #000000;
}

li.row:hover {
	background-color: #454545;
}

li.row:hover dd {
	border-left-color: #CCCCCC;
}

.rtl li.row:hover dd {
	border-right-color: #CCCCCC;
	border-left-color: transparent;
}

li.header dt, li.header dd {
	color: #FFFFFF;
}

/* Forum list column styles */
ul.topiclist dd.searchextra {
	color: #333333;
}

/* Post body styles
----------------------------------------*/
.postbody {
	color: #CCCCCC;
}

/* Content container styles
----------------------------------------*/
/*.content {
	color: #333333;
}*/

/*.content h2, .panel h2 {
	color: #115098;
	border-bottom-color:  #CCCCCC;
}*/

/*dl.faq dt {
	color: #333333;
}*/

.posthilit {
	background-color: #F3BFCC;
	color: #BC2A4D;
}

/* Post signature */
.signature {
	border-top-color: #CCCCCC;
}

/* Post noticies */
.notice {
	border-top-color:  #CCCCCC;
}

/* BB Code styles
----------------------------------------*/
/* Quote block */
/*blockquote {
	background-color: #EBEADD;
	background-image: url("{T_IMAGESET_PATH}/prosilver/quote.gif");
	border-color:#DBDBCE;
}*/

.rtl blockquote {
	background-image: url("{T_THEME_PATH}/images/quote_rtl.gif");
}

/*blockquote blockquote {
	 Nested quotes 
	background-color:#EFEED9;
}

blockquote blockquote blockquote {
	 Nested quotes 
	background-color: #EBEADD;
}*/    

/* Code block */
dl.codebox {
	background-color: #FFFFFF;
	border-color: #C9D2D8;
}

dl.codebox dt {
	border-bottom-color:  #CCCCCC;
}

dl.codebox code {
	color: #2E8B57;
}

.syntaxbg		{ color: #FFFFFF; }
.syntaxcomment	{ color: #FF8000; }
.syntaxdefault	{ color: #0000BB; }
.syntaxhtml		{ color: #000000; }
.syntaxkeyword	{ color: #007700; }
.syntaxstring	{ color: #DD0000; }

/* Attachments
----------------------------------------*/
.attachbox {
	background-color: #FFFFFF;
	border-color:  #C9D2D8;
}

.pm-message .attachbox {
	background-color: #F2F3F3;
}

.attachbox dd {
	border-top-color: #C9D2D8;
}

.attachbox p {
	color: #666666;
}

.attachbox p.stats {
	color: #666666;
}

.attach-image img {
	border-color: #999999;
}

/* Inline image thumbnails */

dl.file dd {
	color: #666666;
}

dl.thumbnail img {
	border-color: #666666;
	background-color: #FFFFFF;
}

dl.thumbnail dd {
	color: #666666;
}

dl.thumbnail dt a:hover {
	background-color: #EEEEEE;
}

dl.thumbnail dt a:hover img {
	border-color: #368AD2;
}

/* Post poll styles
----------------------------------------*/

fieldset.polls dl {
	border-top-color: #DCDEE2;
	color: #666666;
}

fieldset.polls dl.voted {
	color: #000000;
}

fieldset.polls dd div {
	color: #FFFFFF;
}

.rtl .pollbar1, .rtl .pollbar2, .rtl .pollbar3, .rtl .pollbar4, .rtl .pollbar5 {
	border-right-color: transparent;
}

.pollbar1 {
	background-color: #AA2346;
	border-bottom-color: #74162C;
	border-right-color: #74162C;
}

.rtl .pollbar1 {
	border-left-color: #74162C;
}

.pollbar2 {
	background-color: #BE1E4A;
	border-bottom-color: #8C1C38;
	border-right-color: #8C1C38;
}

.rtl .pollbar2 {
	border-left-color: #8C1C38;
}

.pollbar3 {
	background-color: #D11A4E;
	border-bottom-color: #AA2346;
	border-right-color: #AA2346;
}

.rtl .pollbar3 {
	border-left-color: #AA2346;
}

.pollbar4 {
	background-color: #E41653;
	border-bottom-color: #BE1E4A;
	border-right-color: #BE1E4A;
}

.rtl .pollbar4 {
	border-left-color: #BE1E4A;
}

.pollbar5 {
	background-color: #F81157;
	border-bottom-color: #D11A4E;
	border-right-color: #D11A4E;
}

.rtl .pollbar5 {
	border-left-color: #D11A4E;
}

/* Poster profile block
----------------------------------------*/
.postprofile {
	color: #666666;
	border-left-color: #FFFFFF;
}

.rtl .postprofile {
	border-right-color: #FFFFFF;
	border-left-color: transparent;
}

.pm .postprofile {
	border-left-color: #DDDDDD;
}

.rtl .pm .postprofile {
	border-right-color: #DDDDDD;
	border-left-color: transparent;
}

.postprofile strong {
	color: #000000;
}

.online {
	background-image: url("{T_IMAGESET_LANG_PATH}/icon_user_online.gif");
}

/*  	
--------------------------------------------------------------
Colours and backgrounds for buttons.css
-------------------------------------------------------------- */

/* Big button images */
.reply-icon span	{ background-image: url("{IMG_BUTTON_TOPIC_REPLY_SRC}"); }
.post-icon span		{ background-image: url("{IMG_BUTTON_TOPIC_NEW_SRC}"); }
.locked-icon span	{ background-image: url("{IMG_BUTTON_TOPIC_LOCKED_SRC}"); }
.pmreply-icon span	{ background-image: url("{IMG_BUTTON_PM_REPLY_SRC}") ;}
.newpm-icon span 	{ background-image: url("{IMG_BUTTON_PM_NEW_SRC}") ;}
.forwardpm-icon span	{ background-image: url("{IMG_BUTTON_PM_FORWARD_SRC}") ;}

a.print {
	background-image: url("{T_IMAGESET_PATH}/prosilver/icon_print.gif");
}

a.sendemail {
	background-image: url("{T_IMAGESET_PATH}/prosilver/icon_sendemail.gif");
}

a.fontsize {
	background-image: url("{T_IMAGESET_PATH}/prosilver/icon_fontsize.gif");
}

/* Icon images
---------------------------------------- */
.sitehome						{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_home.gif"); }
.icon-faq						{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_faq.gif"); }
.icon-members					{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_members.gif"); }
.icon-home						{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_home.gif"); }
.icon-ucp						{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_ucp.gif"); }
.icon-register					{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_register.gif"); }
.icon-logout					{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_logout.gif"); }
.icon-bookmark					{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_bookmark.gif"); }
.icon-bump						{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_bump.gif"); }
.icon-subscribe					{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_subscribe.gif"); }
.icon-unsubscribe				{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_unsubscribe.gif"); }
.icon-pages						{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_pages.gif"); }
/*.icon-search					{ background-image: url("{T_IMAGESET_PATH}/prosilver/icon_search.gif"); }*/

/* Profile & navigation icons */
.email-icon, .email-icon a		{ background-image: url("{IMG_ICON_CONTACT_EMAIL_SRC}"); }
.aim-icon, .aim-icon a			{ background-image: url("{IMG_ICON_CONTACT_AIM_SRC}"); }
.yahoo-icon, .yahoo-icon a		{ background-image: url("{IMG_ICON_CONTACT_YAHOO_SRC}"); }
.web-icon, .web-icon a			{ background-image: url("{IMG_ICON_CONTACT_WWW_SRC}"); }
.msnm-icon, .msnm-icon a			{ background-image: url("{IMG_ICON_CONTACT_MSNM_SRC}"); }
.icq-icon, .icq-icon a			{ background-image: url("{IMG_ICON_CONTACT_ICQ_SRC}"); }
.jabber-icon, .jabber-icon a		{ background-image: url("{IMG_ICON_CONTACT_JABBER_SRC}"); }
.pm-icon, .pm-icon a				{ background-image: url("{IMG_ICON_CONTACT_PM_SRC}"); }
.quote-icon, .quote-icon a		{ background-image: url("{IMG_ICON_POST_QUOTE_SRC}"); }

/* Moderator icons */
.report-icon, .report-icon a		{ background-image: url("{IMG_ICON_POST_REPORT_SRC}"); }
.edit-icon, .edit-icon a			{ background-image: url("{IMG_ICON_POST_EDIT_SRC}"); }
.delete-icon, .delete-icon a		{ background-image: url("{IMG_ICON_POST_DELETE_SRC}"); }
.info-icon, .info-icon a			{ background-image: url("{IMG_ICON_POST_INFO_SRC}"); }
.warn-icon, .warn-icon a			{ background-image: url("{IMG_ICON_USER_WARN_SRC}"); } /* Need updated warn icon */

/*  	
--------------------------------------------------------------
Colours and backgrounds for cp.css
-------------------------------------------------------------- */

/* Main CP box
----------------------------------------*/

#cp-main h3, #cp-main hr, #cp-menu hr {
	border-color: #A4B3BF;
}

/*#cp-main .panel li.row {
	border-bottom-color: #B5C1CB;
	border-top-color: #F9F9F9;
}*/

/*ul.cplist {
	border-top-color: #B5C1CB;
}*/

#cp-main .panel li.header dd, #cp-main .panel li.header dt {
	color: #FFFFFF;
}

#cp-main table.table1 thead th {
	color: #883333;
	border-bottom-color: #333333;
}

#cp-main .pm-message {
	border-color: #DBDEE2;
	background-color: #252525;
}



/* Friends list */
.cp-mini {
	background-color: #252525;
}

dl.mini dt {
	color: #425067;
}

/* PM Styles
----------------------------------------*/
/* PM Message history */
.current {
	color: #999999 !important;
}

/* PM panel adjustments */
.pm-panel-header,
#cp-main .pm-message-nav {
	border-bottom-color: #A4B3BF;
}

/* PM marking colours */
.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
	border-left-color: #BC2A4D;
	border-right-color: #BC2A4D;
}

.pmlist li.pm_marked_colour, .pm_marked_colour {
	border-color: #FF6600;
}

/*.pmlist li.pm_replied_colour, .pm_replied_colour {
	border-color: #A9B8C2;
}*/

.pmlist li.pm_friend_colour, .pm_friend_colour {
	border-color: #5D8FBD;
}

.pmlist li.pm_foe_colour, .pm_foe_colour {
	border-color: #000000;
}

/* Avatar gallery */
#gallery label {
	background-color: #161616;
	border-color: #333333;
}

#gallery label:hover {
	background-color: #EEE;
}

/*  	
--------------------------------------------------------------
Colours and backgrounds for forms.css
-------------------------------------------------------------- */

/* General form styles
----------------------------------------*/
/*select {
	border-color: #666666;
	background-color: #FAFAFA;
	color: #000;
}

label {
	color: #425067;
}*/

option.disabled-option {
	color: graytext;
}


/* Form button styles
---------------------------------------- */

a.button1, input.button1, input.button3, a.button2, input.button2 {
	color: #000;
	background-color: #FAFAFA;
	background-image: url("{T_IMAGESET_PATH}/prosilver/bg_button.gif");
}

a.button1, input.button1 {
	border-color: #666666;
}

input.button3 {
	background-image: none;
}

/* Alternative button */
a.button2, input.button2, input.button3 {
	border-color: #666666;
}

/* <a> button in the style of the form buttons */
a.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {
	color: #000000;
}

/* Hover states */
a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover {
	border-color: #BC2A4D;
	color: #BC2A4D;
}

/*input.search {
	background-image: url("{T_IMAGESET_PATH}/prosilver/icon_textbox_search.gif");
}*/

input.disabled {
	color: #666666;
}

/* 
Copyright 2006 Blizzard Entertainment, Inc.
forums.worldofwarcraft.com Master CSS 
*/


/*\ Basic Tags \*/
/*_________________________________________________________________________*/

body { font: 12px Arial, Helvetica, sans-serif; margin: 0px; padding: 0; color: #ccc; }
/*span { color: #ccc; }
.message-format span { color: #00c0ff; }*/
.message-format { color: #ccc; }
q:before, q:after {content: "";}
span.grey { color: #a0a1a3; }
span.lite { color: #f0e7be; }
small { color: #d7Cea4; font-size: 11px; }
small.gold { color: #c4c4c4; }
b { font-weight: bold; }
b.white { color: white; }
span.red { color: red; }	
span.blue { color: #00c0ff;/*color: #ccc;*/ }
span.blue b { color: white; }
span.mvp { color:#5df644;/*color: #00c0ff;*/ }
h1, h2, h3, h4, h5 { font-family: Arial, Helvetica, sans-serif; font-weight: bold; margin:0; padding:0; }
h1 { text-align: left; font-size: 12px; margin: 0; padding: 0; color: #ccc; }
h2 { font-size: 18px; color: white; font-weight: normal; }
h1.races { color: #ff9900; padding: 10px; font: normal 18px Georgia, 'Times New Roman', Times, serif; }
img.cap { margin: 0 5px 3px 0; }
p.warning { margin-left: 5px; padding-top: 5px; }
ul.thread { margin-left: 22px; }
.clear { clear: both; height: 15px; }
.filter { text-decoration: none; font-size: 11px; }
.button { text-decoration: none; }
small.white	{ color: #fff; font-size: 8pt; }
span.white { color: #fff; font-size: 12px; }
span.highlight { color:#000; background-color: #ffd214; font-weight: bold; font-style: italic;  }
small { color: #fff; font-size: 8pt; }
small.smallBold { color: #fff; font-size: 8pt; font-weight: bold; }


/*\ Hyperlinks \*/
/*_________________________________________________________________________*/

a:link, a:active { color: #ffb019; font-weight: bold; } 
a:visited { color: #d38d01; font-weight: bold; }
a:hover { color: white; }
a.active:link { color: #ffb019; font-weight: bold; }
a.active:active	{ color: #ff0000; font-weight: bold; }
a.active:visited { color: #ffb019; font-weight: bold; }
a.active:hover { color: #fff; }
a.visited:link { color: #b1b1b1; font-weight: bold; }
a.visited:active { color: #ff0000; font-weight: bold; }
a.visited:visited { color: #b1b1b1; font-weight: bold; }
a.visited:hover	{ color: #fff; }
a.index:link, a.index:active, a.index:visited { color: #ccc; text-decoration: none; }
a.index:hover { color: white; }
a.current { font-size: 12px; color: white; text-decoration: none;}
.character-select a, .character-select a:active, .character-select a:visited { font-weight: normal; }
a.nav:link, a.nav:visited, a.nav:active { font: normal 11px arial,verdana, sans-serif; color: #cba300; }
a.nav:hover { color: #fff; }	
a.subMenuLink, a.subMenuLink:link, a.subMenuLink:visited { color: white; font-weight:normal; text-decoration: none; font-family:arial,comic sans ms,technical; font-size: 11px; display:block;}
a.subMenuLink img {border-style:none;}

/*\ Form Elements \*/
/*_________________________________________________________________________*/

form { margin: 0; padding: 0; }
input, textarea { background: #0d1a2d; border: 1px solid #7f7f7f; color: #ffac04; }
input { background: #0d1a2d url('{T_IMAGESET_PATH}/forum-menu-search-tile.gif') repeat-x; }
select { background: #0d1a2d; color: #ffac04; font-size: 11px; }
input.button { background: transparent; border-style: none; }
select.gray { background-color: #040d1a; color: #ffac04; }
select.forum-dropdown { display:inline; width: 185px; margin-left: 10px; }
input.post-subject-field, textarea.post-message-text, textarea.options-signature-text { font: 12px Arial, Helvetica, sans-serif; color: white; }
input.post-subject-field, input.login-account-field, input.login-password-field, input.options-email-field, input.options-talent-field { background: #0d1a2d url('{T_IMAGESET_PATH}/forum-menu-search-tile.gif') repeat-x; padding: 2px 0 2px 4px; }
textarea.post-message-text, textarea.options-signature-text { background: #0d1a2d url('{T_IMAGESET_PATH}/post-textarea-bg.gif') repeat-x 0 0; }
input.quick-search-field { width: 138px; margin-right: 2px; padding: 1px 0 1px 4px; }
input.post-subject-field { width: 245px; margin: 58px 0 0 44px; }
input.post-login-field { width: 245px; margin: 35px 0 0 44px; }
textarea.post-message-text { width: 584px; margin: 19px 0 0 19px; height: 238px;  padding: 10px; }
input.login-account-field, input.login-password-field  { width: 170px; margin: 28px 0 0 35px; }
input.login-password-field { margin: 31px 0 0 35px; }
input.options-email-field { width: 170px; margin: 14px 0 0 62px; }
input.options-talent-field { width: 290px; margin: 14px 0 0 32px; }
select.options-timezone { width: 314px; margin: 15px 0 0 35px; background: #0d1a2d; }
textarea.options-signature-text { width: 584px; margin: 19px 0 0 19px; height: 90px; padding: 10px; }
optgroup { text-align:center; }


/*\ Header Styles \*/
/*_________________________________________________________________________*/

#header, .logo-container, .logo-right, .gryph-container, .gryph-z, #main-nav { display: block; }
#header { width: auto; min-width: 775px; height: 92px; }
.logo-container, .logo-right { width: 732px; height: 92px; }
.logo-container { margin: 0 auto; }
.logo-right { position: relative; z-index: 20; }
h1.wow-logo { position: absolute; top: 1px; left: 235px; margin: 0; padding: 0; width: 262px; height: 142px; }
a.ielink { display:block;z-index:99999;width:262px;height:142px;top:0; left: 235px;position:absolute; }
.gryph-container { position: relative; width: 100%; min-width: 775px; z-index: 4020; }
.gryph-z { position: relative; z-index: 5020; }
span.left-gryphon, span.right-gryphon { position: absolute; top: -92px; width: 115px; height: 92px; }
span.left-gryphon { left: 0px; }
span.right-gryphon { right: 0px;background-position:100% 0 !important }
#main-nav { position: relative; width: 100%; height: 48px; min-width: 775px; background: none; margin-top: -1px; margin-bottom: 11px; display:none;}
#main-nav div.left { position: relative; width: 100%; height: 65px; min-width: 775px; background: url('{T_IMAGESET_PATH}/subnav/navbar-left.gif') no-repeat 0 0; }
#main-nav div.left div.right { position: relative; width: 100%; height: 65px; min-width: 775px; background: url('{T_IMAGESET_PATH}/subnav/navbar-right.gif') no-repeat right; }				
#main-nav div.left div.right div.nav { width: 100%; text-align: center; margin: 0 auto; padding: 16px 0 0 0; }			
#main-nav div.left div.right div.nav div.minwidth { width: 775px; min-width: 775px; text-align: center; margin: 0 auto; }
#main-nav div.left div.right div.nav div.minwidth-search { width: 900px; min-width: 900px; text-align: center; margin: 0 auto; }
#style-switcher { position: relative;margin:0 auto; width: 100%; min-width: 775px;width:775px; z-index: 2020; }
.switcher-container { position: absolute; top: -50px; right: 70px; }
.language-switcher-container { position: absolute; top: -50px !important; right:0px !important; }
.language-selector {padding:0 0 0 15px;}
h1.theme-title { height: 25px; width: 111px; margin: 0; padding: 0; }
h1.language-title { height: 25px; width: 111px; margin: 0; padding: 0;}
#style-switcher ul { display: block; list-style: none; margin: 0; padding: 0 0 0 20px; height: 25px; width: 108px; }
li.alliance { display: block; float: left; background: url('{T_IMAGESET_PATH}/toggle-alliance0.gif') no-repeat; height: 25px; width: 32px; }
li.horde { display: block; float: left; background: url('{T_IMAGESET_PATH}/toggle-horde0.gif') no-repeat; height: 25px; width: 31px; }
li.bc { display: block; float: left; background: url('{T_IMAGESET_PATH}/toggle-bc0.gif') no-repeat 0 -1px; height: 25px; width: 28px; }
/*li.xmas { display: block; float: left; background: url('{T_IMAGESET_PATH}/toggle-xmas1.gif') no-repeat 0 -1px; height: 25px; width: 28px; }*/
.bg-theme { height: 170px; }
#postbackground { width: 100%; display: table; clear: left; }
#postbackground .right { padding: 5px; }


/*\ Navigation \*/
/*_________________________________________________________________________*/

.subnav-container { text-align: center; background: url('{T_IMAGESET_PATH}/back2.png'); }
.top-shadow { background: url('{T_IMAGESET_PATH}/subnav/bg-shadow-tile-top.png'); height: 8px; width: 100%; margin-top: -1px;margin-bottom: -8px; }
.drop-shadow { background: url('{T_IMAGESET_PATH}/subnav/bg-shadow-tile.png'); height: 8px; width: 100%; margin-bottom: -9px;}
.navigation { position: absolute; top:91px;	z-index:2; }
.button	{ color:#FFFFFF; font-size:9px;	letter-spacing:-1px; }		

/*\ Gold Border Container \*/
/*_________________________________________________________________________*/

.border, .border .im3, .border .im6, .border .im8, .border ul { text-align:left; width: 100%; margin: 0px; padding: 0; }
.border ul { list-style: none; }
.border { background: url('{T_IMAGESET_PATH}/back.png') repeat 0 0; }
/*.gborder ul { background: url('{T_IMAGESET_PATH}/border-left.gif') repeat-y left; }
.gborder ul li.bg { background: url('{T_IMAGESET_PATH}/border-right.gif') repeat-y right; }
.gborder ul li div.a { background: url('{T_IMAGESET_PATH}/border-top.gif') repeat-x top; }
.gborder ul li div.a ul { background: url('{T_IMAGESET_PATH}/border-bot.gif') repeat-x bottom; }
.gborder ul li div.a ul li.bg { background: url('{T_IMAGESET_PATH}/border-top-left.gif') no-repeat top left; }
.gborder ul li div.a ul li div.b { background: url('{T_IMAGESET_PATH}/border-top-right.gif') no-repeat top right; }
.gborder ul li div.a ul li div.b ul { background: url('{T_IMAGESET_PATH}/border-bot-left.gif') no-repeat bottom left; }
.gborder ul li div.a ul li div.b ul li.bg { background: url('{T_IMAGESET_PATH}/border-bot-right.gif') no-repeat bottom right; }
.gborder ul li div.a ul li div.b ul li div.c { padding: 20px 0 45px 0; text-align: left; }
.gborder ul li div.a ul li div.b ul li div.c ul { margin: 0; background: none; }
.gborder ul li div.a ul li div.b ul li div.c ul li { padding: 9px 0 0 15px; background: url('{T_IMAGESET_PATH}/square.gif') no-repeat 0 8px; }*/
  
  
/*\ Forum Lists \*/
/*_________________________________________________________________________*/

.message-format ul { list-style: disc; }
.message-format ul li { list-style: disc; display: list-item; }
.message-format li { /*list-style: disc;*/ margin: 0; padding: 0; display: list-item; }
#forumHead .list {  background-position:0 16px !important }
#forumlistcontainer { width: 98%; }
#forumlistcontainer .left { float: left; width: 50%; border: 1px solid transparent;}
#forumlistcontainer .right { float: right; width: 49%; border: 1px solid transparent;}
#forumlistcontainer ol { list-style: none; margin: 0; padding: 0; text-align: left; clear: both; }
#forumlistcontainer ol li.a { display: block; padding: 5px 10px 10px 10px; height: 60px; background: none !important;  }
#forumlistcontainer ol li.a img { margin: 0 5px 20px 0; }
#forumlistcontainer ol li.b { display: block; padding: 5px 10px 0 10px; background: none; }
#forumlistcontainer ol li.c, #forumlistcontainer ol li.c2 { float: left; padding: 10px 0; margin: 0; height: 40px; }
#forumlistcontainer ol li.c { width: 45px; text-align: center;background:none !important }
#forumlistcontainer ol li.c2 { width: 440px; background-image: none; }
#forumlistcontainer ol li.classes { background: url('{T_IMAGESET_PATH}/forumbullets/bullet.gif') no-repeat 0 10px; }
#forumlistcontainer ol:after { clear: left; height: 1px; content: " "; display: block; }

div.display-margin {  }
.avatar-nav { width: 500px; height: 27px; position: relative; display: block; margin-top: 20px; }
.avatar-nav span { font-size: 11px; }
.avatar-nav ol { list-style: none; margin: 0; padding: 0; }
.avatar-nav ol li { position: absolute; top: 0px; width: 104px; height: 21px; background: url('{T_IMAGESET_PATH}/tab-nf.gif') no-repeat top right !important; padding: 5px 0 0 0; text-align: center; }
.avatar-nav ol li.selected { background: url('{T_IMAGESET_PATH}/tab-f.gif') no-repeat top right !important; z-index: 90; height: 28px; }
.avatar-nav ol li.selected a, #avatar-nav ol li.selected a:active, #avatar-nav ol li.selected a:visited { color: white; } 
.avatar-nav ol li.tab-one { right: -10px; }
.avatar-nav ol li.tab-two { right: 90px; }
.avatar-nav ol li.tab-three { right: 190px; }
.avatar-nav ol li.tab-four { right: 290px; }
.avatar-nav ol li.tab-four span strong {color:grey}
.avatar-nav span.grey { color: #666666; }
.avatar-nav a, #avatar-nav a:visited, #avatar-nav a:active { text-decoration: none; }
.avatar-nav a:hover { color: white; text-decoration: none; }
.list-avatars { width: 500px; border: 1px solid #424242; background: black; padding: 7px; }
.list-avatars h1 { color: #FF9900; padding: 10px; font-size: 18px; font-family: Georgia, 'Times New Roman', Times, serif; font-weight: normal; }
.list-avatars ol { margin: 0; padding: 0; list-style: none; clear: both; }
.list-avatars ol li { float: left; display: block; width: 80px; height: 81px; background: url('{T_IMAGESET_PATH}/framebg2.gif') no-repeat !important; text-align: center; padding: 8px 0 0 0 !important; margin: 20px }
.list-avatars p { margin: 5px 0 0 0; font-size: 11px; }
#classforumlist { position: relative; clear: both; margin-left: 30px; background: transparent; }
#classforumlist table { width: 90%; margin: 10px 0 10px 0; background: transparent; }
#classforumlist td { padding: 4px; background: transparent; }
#fcontainer { background: none; padding: 5px 0; }
#fcontainer ol { background: none; }
#fcontainer ol li { background: none; }
ol.rlist { list-style: disc; color: #ccc; }
.subtext { font: 11px/14px "Trebuchet MS", Arial, Helvetics, sans-serif; color: #b3904c; line-height: 20px;}


/*\ Tooltips \*/
/*_________________________________________________________________________*/

#contents { visibility: hidden; position: absolute; z-index: 9999999; width: 5px; background: url('{T_IMAGESET_PATH}/blue-bg.png'); }
#dynamicTooltip { visibility: hidden; position: absolute; z-index: 999999; }
#tooltipText { visibility: hidden; color: #fff; font-family: verdana, arial, sans-serif; font-size:8pt; font-weight:normal; padding: 4px; white-space:nowrap; }
.trans_div { /* This is an IE filter command. Other browsers will ignore it */
/* It goes into the trans_div class */ }
/* Square bracketed class styles are usable non-IE type browsers */
/* This is a seperate css entry, not part of the original trans_div class */
.trans_div[class] { background-image:url({T_IMAGESET_PATH}/blue-bg.png); }
.miniText {font-size: 12px; font-style: italic;}

.email { top: 105px; left: 430px; width: 265px; }
.timezones { top: 165px; left: 430px; width: 265px; }
.talents { top: 225px; left: 430px; width: 265px; }
.signatures { top: 375px; left: 50px; width: 418px; }

.tooltips { position: relative; z-index: 100099900; }
.tt-header{ position: relative; z-index: 100099999; }
.tt-header em { position: absolute; top: 0; left: -7px; height: 25px; width: 95px; background: url('{T_IMAGESET_PATH}/tooltip-alert.png') no-repeat 0 0; }
.tt-header em span { display: none; }
.tt-header em img { margin: 0 0 0 20px; }
.tooltips-container { position: absolute; }
.tooltips-container span {white-space:nowrap}
.tooltips-container table { padding: 0; border: 0; border-collapse: collapse; }
.tooltips-container td { padding: 0; }
td.tt1 { width: 12px; height: 11px; background: url('{T_IMAGESET_PATH}/tooltip-top-left.png') no-repeat; }
td.tt2 { height: 11px; background: url('{T_IMAGESET_PATH}/tooltip-top.png') repeat-x 0 0; }
td.tt3 { width: 12px; height: 11px; background: url('{T_IMAGESET_PATH}/tooltip-top-right.png') no-repeat; }
td.tt4 { width: 12px; background: url('{T_IMAGESET_PATH}/tooltip-left.png') repeat-y; }
td.tt5 { background: url('{T_IMAGESET_PATH}/tooltip-back.png') repeat; }
td.tt6 { width: 12px; background: url('{T_IMAGESET_PATH}/tooltip-right.png') repeat-y; }
td.tt7 { width: 12px; height: 11px; background: url('{T_IMAGESET_PATH}/tooltip-bot-left.png') no-repeat; }
td.tt8 { height: 11px; background: url('{T_IMAGESET_PATH}/tooltip-bot.png') repeat-x 0 0; }
td.tt9 { width: 12px; height: 11px; background: url('{T_IMAGESET_PATH}/tooltip-bot-right.png') no-repeat; }
.tt-content { display: block; padding: 2px; color: #878787; font: 11px/12px "Trebuchet MS", Verdana, sans-serif; }
.tt-content strong { color: white; }
.tt-content a, .tt-content a:active, .tt-content a:visited { font-weight: normal; }


/*\ Error Handling \*/
/*_________________________________________________________________________*/

#topic-notice { position: relative; display: block; clear: both; width: 2px; height: 1px; background: red; font-size: 1px; }
.topic-notice-container { position: absolute; top: -40px; left: -50px; width: 38px; height: 26px; background: url('{T_IMAGESET_PATH}/icons/topic-limit-bg.gif') no-repeat; }
.topic-notice-container h3 { margin: 6px 7px 0 0px; padding: 0; color: white; font-weight: bold; font-size: 11px; }
.topic-tooltip { position: absolute; top: -40px; left: -50px; width: 38px; height: 26px; }
.error-message { position: absolute; display: block; z-index: 200; display: block; }
#error-container { display: block; white-space: nowrap; width: 100%; }
#error-container div.arrow { display: block; position: absolute; height: 13px; width: 13px; top: 2px; left: -10px; background: url('{T_IMAGESET_PATH}/icons/arrow-left.gif') no-repeat top left; }
#error-container div.red-container { display: block; background: red; padding: 0px 20px 0px 5px; border: 1px solid black; }
#error-container span { font-weight: bold; color: white; font-size: 11px; background: url('{T_IMAGESET_PATH}/icons/error-tiny2.gif') no-repeat 0 0; padding-left: 15px; }
.error-mini[class] { position: relative; width: inherit;  }
.error-mini { position: relative; width: inherit; width: 1px; z-index: 999; }
.c h2 { margin-top: 15px; font-family: Georgia, "Times New Roman", Times, serif; }
.c { line-height: 140%; }
span.emph { font-weight: bold; color: #00c0ff; border-bottom: 1px dotted white; }
p.inset { display: block; width: 87%; padding: 20px; margin: 0 auto; text-align: center; }
.redirect b { display: none; }
img.poll-alert { position: relative; top: 10px; left: -5px; margin: -15px 5px 0 0;  }
.er { position: absolute !important; z-index: 9089; right: 7%; top:0px; width:30%; }
.er .poll-content { color: red !important; }


/*\ Footer Styles \*/
/*_________________________________________________________________________*/

#ftrText { margin: 20px auto; text-align: center; min-width: 775px; width: 100%; clear: both; }
#ftrText .width, #footerShell, #footerShell .logo { text-align: center; margin: 0 auto; }
#ftrText .width { width: 775px; }
#footerShell { width: 100%; height: 46px; }					
#footerShell .logo { min-width: 775px; width: 775px; }
.forum-footer {clear:both}

/*\ Misc \*/
/*_________________________________________________________________________*/
wbr:after { content: "\00200B" }
.pleaselogin {text-align:center; font:bold 11px Arial, Helvetica, sans-serif; padding:0 14px 0 10px; text-transform:uppercase; color:#ff0000;}
.pleaselogin a {color:#ff0000;}
/*
Copyright 2006 Blizzard Entertainment, Inc.
forums.worldofwarcraft.com Forums CSS 
*/

/*\ Forum Index \*/
/*_________________________________________________________________________*/

.indexing { clear:both;color:#e5e5e5;font:11px/14px Arial, Helvatica, sans-serif;padding:0 3px }
.indexing table {border:0;padding:0;margin:0;border-collapse:collapse}
.indexing td,.parent-forum {width:50%;background:black url('{T_IMAGESET_PATH}/forum-list-sep.gif') no-repeat 50% 100%}
.haschild { background:#1b1f23 url('{T_IMAGESET_PATH}/forum-list.gif') repeat-x 0 100%}
.indexing td {vertical-align:top;border:6px solid black;cursor:pointer}
.indexing td:hover,.parent-forum:hover {background:#14171b}
.indexing span {font-size:11px;color:#909090;}
.parent-forum div,.indexing td div {margin:0;padding:10px 10px 10px 55px;min-height:35px; }
.indexing h3 {margin:0;padding:0;font:12px/18px Arial, Helvatica, sans-serif}
.indexing h3 a {font-weight:bold;text-decoration:none}
.indexing p {margin:0;padding:4px 0}
.parent-forum{width:100%;margin:1px 0;cursor:pointer}
.parent-forum h3 {text-transform:uppercase}
.child-listing{background:#0e1827 url('{T_IMAGESET_PATH}/class-list.jpg') no-repeat 0 0;padding:5px 15px;height:100%}
.icon h3{padding:0 0 0 35px;line-height:28px;}
em.child-view {display:block;width:23px;height:16px;background:url('{T_IMAGESET_PATH}/child-arrow.gif') no-repeat 0 -16px;float:right;margin:11px 0 0 0}
em.child-view-expand {display:block;width:23px;height:16px;background:url('{T_IMAGESET_PATH}/child-arrow.gif') no-repeat 0 0;float:right;margin:11px 0 0 0}
.child {cursor:pointer;float:left;min-width:117px;padding:5px;border-bottom:1px solid #112849;margin:2px;background-repeat:no-repeat !important;background-position:0 3px !important;background-color:transparent !important}
.child:hover {background-color:#0a2158 !important;border-bottom:1px solid #0342cb}
.child h3 {font-size:12px}
.child a,.child a:active,.child a:visited {color:white;}

.smallbox {position: relative;float:right;width:280px;}
.small-content {padding:30px 40px 45px 40px;text-align:left;}
.index-header{float: left; position: relative; width: 365px; color:white; padding:30px 3px;}



/*\ Forum Layout Styles \*/
/*_________________________________________________________________________*/

table.threadtopic, td.tableheader  { border-width: 1px; border-style: solid; }
table.threadtopic { background: #0c0c0c; border-color: #8c8e89 #8c8e89 #0c0c0c #0c0c0c; }
td.tableheader 	{ background: #393731 url('{T_IMAGESET_PATH}/thread-topic-bg2.gif') repeat-x;	border-color: #8f8f8f #8f8f8f #171511 #171511;  font-weight: bold; color: #fff; }
#paging, .theader { font-size: 11px; font-weight: bold; color: #fff; height: 22px; margin: 0; padding: 3px 0 0 0; width: 100%; min-width: 775px; }
#paging { background: #000 url('{T_IMAGESET_PATH}/paging-bg.gif') repeat-x; }
.theader { display: table; background: #393731 url('{T_IMAGESET_PATH}/thread-topic-bg2.gif') repeat-x;  }
.theader div.lpage-thread, .theader div.lpage { float: left; width: auto; text-align: left; }
.theader div.rpage-thread, #topicfooter div.rpage { display: table; float: right; width: auto; text-align: right; padding: 0 10px 0 0; }
.theader div.rpage-thread ul, .theader div.rpage ul, #topicfooter div.rpage ul { list-style: none; margin: 0; padding: 0; }
.theader div.rpage-thread ul li, .theader div.rpage ul li, #topicfooter div.rpage ul li { float: right; }
.theader div.rpage { display: block; float: right; width: 300px; text-align: right; padding: 0 10px 0 0; }
.theader .lsort { float: right; width: 400px; text-align: right; }
#pagecount { width:auto; display:block;}
#pagecount ul { float: right; list-style:none; margin: 0; padding: 4px 0 0 0; height: 21px; }
#pagecount ul li { display:block; float: left; }
div.rpage a:hover, div.rpage-thread a:hover { text-decoration: none;}
.tbottom { width: 100%; height: 17px; }
#topicfooter { background: url('{T_IMAGESET_PATH}/thread-topic-bg2.gif') repeat-x; width: 100%; height: 20px; min-width: 775px; clear: both; }
#topicfooter div.rpage { margin-top: 2px; }
#topicfooter div.lpage { float: left; margin-top: 2px; padding-left: 15px; background: url('{T_IMAGESET_PATH}/footer-forumindex-bg.gif') no-repeat; height: 46px; width: 200px; }
.forum-index { width: 100%; position: relative; height: 39px; text-align: right; }
.findex { float: right; padding-right: 14px; height: 46px; width: 270px; background-position:100% 1px !important }
.findex a img { position:relative;top:-3px }
#topicheader { width: 100%; height: 41px; min-width: 775px; clear: both; }
#topicview { float: left; background: #0C0C0C; border-top: 1px solid #8C8E89; border-right: 1px solid #333; border-bottom: 1px solid #333; height: 18px; margin: 0; }
#topicview ul { list-style: none; margin: 0; padding: 0; }
#topicview ul li { float: left; padding: 1px; }
table.tableoutline { border: 1px solid #575757; }
table.blueoutline  { border: 1px solid #1481CA; }
td.tableoutline { border: 1px solid #343434; }
.post-container {max-width:500px;overflow:hidden;white-space:nowrap}
table.threadtable { background: #000000; }
#postcontainer { background: black; margin: 0; width: 100%; min-width: 775px; }
#postcontainer table { width: 100%; }
#postcontainer .p { padding: 1px 5px; }
#searchbackground { width: 100%; display: table; background: url('{T_IMAGESET_PATH}/search-bg-tile-left.jpg') repeat-y 0 0; }
#searchbackground .right { display: table-cell; background: url('{T_IMAGESET_PATH}/search-bg-tile-right.jpg') repeat-y 100% 0; padding: 20px 5px 5px 5px; min-height: 240px; height: 100%; }
.post-success { display: table; height: 200px; width: 300px; margin: 0 auto; padding: 40px 10px; text-align: left; clear: left; }
  
  
/*\ Post Topic / Reply \*/
/*_________________________________________________________________________*/


.captcha {margin:20px auto;padding:6px 0 0 0;text-align:center;position:relative;background:url('/images/bnet/captcha-bg.jpg') no-repeat 50% 0}
.captcha img {padding:0;margin:0}
.captcha p {padding:16px 0;background:url('/images/bnet/post-topic-box.gif') no-repeat 50% 0}
.captcha input {width:250px}
.captcha h2 {width:100% !important;position:relative !important;top:0 !important;left:0}
#post { width: 100%; background: url('{T_IMAGESET_PATH}/forum-bg-tile-top.jpg') repeat-x 0 0; }
.post-box, .post-box-bottom, .post-box-top { width: 773px; }
.post-box { margin: 0 auto; background: url('{T_IMAGESET_PATH}/post-out-sides.gif') repeat-y; }
.post-box-bottom { background: url('{T_IMAGESET_PATH}/post-out-footer.gif') no-repeat 0 100%; }
.post-box-top { background: url('{T_IMAGESET_PATH}/post-outer-bg-top.gif') no-repeat 0 0; display: table; }
.post-top { background: url('{T_IMAGESET_PATH}/post-main-bg.jpg') repeat-x 0 0; height: auto;  }
#post blockquote { margin: 0; padding: 0; background: #1b1b1b url('{T_IMAGESET_PATH}/post-tile-bottom.gif') repeat-x 0 100%; border: 1px solid black; }
#post-topic-shell { width: 723px; border-top: 1px solid #000; border-bottom: 1px solid #000; background: #1b1b1b; margin: 7px 25px 25px; }
.subject-container, .message-container, #login-page { width: 700px; margin: 0 auto; }
.post-title { width: 92px; height: 35px; position: absolute; top: -25px; left: -35px; background: url('{T_IMAGESET_PATH}/post-title.gif') no-repeat; }
.post-title2 { width: 92px; height: 35px; position: absolute; top: -125px; left: -35px; background: url('{T_IMAGESET_PATH}/post-title.gif') no-repeat; }
#post h1, #post h2 { margin: 0; padding: 0; position: absolute; }
#post h1 { top: 35px; left: 16px; height: 19px; width: 80px; }
#post h2 { top: -7px; left: -10px; height: 22px; width: 90px; }
#post h1 span, #post h2 span, #post h3 span, #post h4 span, #post h5 span { display: none; }
.login-box, .subject-box, .subject-message { float: left; position: relative; }
.subject-box { width: 330px; height: 118px; background: url('{T_IMAGESET_PATH}/post-topic-box.gif') no-repeat 6px 43px; }
.login-box { width: 330px; height: 75px; background: url('{T_IMAGESET_PATH}/post-topic-box.gif') no-repeat 6px 20px; }
.subject-message { margin: 34px 0 0 26px; width: 314px; height: 61px; background: url('{T_IMAGESET_PATH}/subject-message-bg.gif') no-repeat; }
.subject-message ul, .sig-options ul, .post-button-right ul, post-ui-right ul, .admin-box ul, .login-message ul { margin: 0; padding: 0; list-style: none; clear: left; }
.subject-message ul li { float: left; display: block; width: auto; height: 61px; font: 12px/110% Arial, Helvetica, sans-serif; color: #878787; }
.subject-message ul li.help-tip { width: 240px; padding: 10px 0 0 0; margin: 0 0 0 10px; }
.subject-message ul li.help-tip p { margin: 3px 0 0 0; padding: 0; font: 10px/100% "Trebuchet MS", Arial, Helvetica, sans-serif; }
.subject-message h3 { padding: 10px 0 0 0; font: small-caps 250%/110% Georgia, "Times New Roman", Times, serif; color: #00c417; width: 60px; text-align: center; }
.subject-message h4 { padding: 10px 0 0 0; margin: 17px 10px 0 15px; background: url('{T_IMAGESET_PATH}/icons/alert.gif') no-repeat; width: 30px; height:28px; text-align: center; }
.options-container { margin: 0 20px 11px 34px; position: relative; width: 647px; background: url('{T_IMAGESET_PATH}/post-back.png') repeat; }
.options-left { width: 647px; background: url('{T_IMAGESET_PATH}/post-util-left.gif') repeat-y 0 0; }
.options-right { width: 647px; background: url('{T_IMAGESET_PATH}/post-util-right.gif') repeat-y 100% 0; }
.options-bot { width: 647px; background: url('{T_IMAGESET_PATH}/post-util-bot.gif') no-repeat 0 100%; }
.options-top { width: 647px; display: table; height: 97px; background: url('{T_IMAGESET_PATH}/post-util-top.gif') no-repeat 0 0; }
.nobg { background: url('{T_IMAGESET_PATH}/post-util-top-clear.gif') no-repeat 0 0; }
.sig-options, .login-options { width: 250px; float: left; height: 60px; margin: 20px 0 0 20px; }
.sig-options ul { margin-top: 22px; }
.sig-options ul li, .admin-box ul li { float: left; display: table; width: auto; font: 12px/110% Arial, Helvetica, sans-serif; color: #878787; }
li.check-box { background: url('{T_IMAGESET_PATH}/checkbox-bg.gif') no-repeat 1px 0px; width: 25px; }
li.sig-desc { padding: 5px 0 0 0; }
.post-button { width: 284px; float: right; margin: 9px 11px 0 0px; background: url('{T_IMAGESET_PATH}/post-button-bg.gif') repeat-x 20px 0; }
.post-button-left { width: 284px; background: url('{T_IMAGESET_PATH}/post-button-left.gif') no-repeat 0 0; }
.post-button-right { width: 284px; background: url('{T_IMAGESET_PATH}/post-button-right.gif') no-repeat 100% 0; display: table; height: 79px; }
.post-button-right ul { margin: 27px 0 0 36px; }
.post-button-right ul li { float: left; }
.post-ui-container { font-size: 1px; position: relative; z-index: 1010; }
#post-ui { position: absolute; top: -14px; right: 90px; height: 31px; width: 210px; background: url('{T_IMAGESET_PATH}/post-ui-bg.gif') repeat-x 0 0; }
.post-ui-left { width: 210px; background: url('{T_IMAGESET_PATH}/post-ui-left.gif') no-repeat 0 0; }
.post-ui-right { width: 210px; background: url('{T_IMAGESET_PATH}/post-ui-right.gif') no-repeat 100% 0; display: table; height: 35px; }
.post-ui-right ul { margin: 0 0 0 7px !important; padding: 0 !important; }
.post-ui-right ul li { float: left; position: relative; top: 8px; display: block; height: 35px; width: 28px; }
.post-ui-right ul li img { border: 0; width: 28px; height: 35px; }
.post-ui-right ul li a:hover { display: block; width: 28px; height: 35px; background: url('{T_IMAGESET_PATH}/button-hover.gif') no-repeat 0 0; }
#post li.bold { background: url('{T_IMAGESET_PATH}/button-bold.gif') no-repeat; }
#post li.italic { background: url('{T_IMAGESET_PATH}/button-italic.gif') no-repeat; }
#post li.underline { background: url('{T_IMAGESET_PATH}/button-underline.gif') no-repeat; }
#post li.list { background: url('{T_IMAGESET_PATH}/button-list.gif') no-repeat; }
#post li.tabbed-list { background: url('{T_IMAGESET_PATH}/button-tabbed-list.gif') no-repeat; }
#post li.hr { background: url('{T_IMAGESET_PATH}/button-hr.gif') no-repeat; }
#post li.pre { background: url('{T_IMAGESET_PATH}/button-pre.gif') no-repeat; }
#post li.quote { background: url('{T_IMAGESET_PATH}/button-quote.gif') no-repeat; }
#admin-container { position: relative; font-size: 1px; z-index: 2100; }
.admin-box { position: absolute; top:10px; left: 200px; background: url('{T_IMAGESET_PATH}/back.png') repeat; width: 150px; height: 50px; display: block; border-width: 1px; border-style: solid; border-color: #999 #999 #484848 #484848; padding: 16px 0 10px 10px; }
#admin-container h1 { margin: 0; padding: 0; width: 90px; height: 16px; position: absolute; top:0; left: 230px; z-index: 2200; }
.message-container, .options-container { clear: both; }
.message-body-main, .message-bottom, .message-top { width: 643px; }
.message-body-main { position: relative; background: black url('{T_IMAGESET_PATH}/post-message-box-sides.gif') repeat-y; margin: 0 0 0 25px; }
.message-bottom { background: url('{T_IMAGESET_PATH}/post-message-box-bot.gif') no-repeat 0 100%; }
.message-top { background: url('{T_IMAGESET_PATH}/post-message-box-top.gif') no-repeat 0 0; display: table; height: 310px; }
.plain { background: url('{T_IMAGESET_PATH}/options-message-box-top.gif') no-repeat 0 0; height: 160px; }
.legal-message-post {color:#999}
.legal-message-post strong {color:red}
.legal-message-post h4 {color:white;font-size:12px}
.legal-message-post .bottom {padding:8px;}

  
/*\ Account Options Page \*/
/*_________________________________________________________________________*/

.options-title { width: 340px; height: 48px; position: absolute; top: -25px; left: -35px; }
.options-box { position: relative; width: 330px; height: 109px; background: url('{T_IMAGESET_PATH}/options-account-bg.gif') no-repeat 30px 43px; }
.options-email { position: relative; width: 330px; height: 65px; background: url('{T_IMAGESET_PATH}/options-email-bg.gif') no-repeat 30px 0px; }
.options-basic { position: relative; width: 425px; height: 65px; }
#post .options-box h1, #post .options-email h2, #post .options-basic h3, #post .options-basic h4, #post .message-top h5 { margin: 0; padding: 0; position: absolute; }
#post .options-box h1 { top: 35px; left: 31px; height: 18px; width: 85px; }
#post .options-email h2 { top: -7px; left: 31px; height: 16px; width: 69px; }
#post .options-basic h1 { top: -7px; left: 28px; height: 16px; width: 89px; }
#post .message-top h1 { top: -7px; left: 2px; height: 22px; width: 75px; }
.options-box strong { width: 175px; height: 20px; position: absolute; top: 61px; left: 70px; font: bold 12px Arial, Helvetica, sans-serif; color:#696969 }
.options-basic-container, .options-basic-right, .options-basic-left, .options-talent-container, .options-talent-right, .options-talent-left { height: 49px; }
.options-basic-container, .options-talent-container { margin: 0 0 0 30px; background: url('{T_IMAGESET_PATH}/options-basic-tile.gif') repeat-x 0 0; }
.options-basic-right, .options-talent-right { background: url('{T_IMAGESET_PATH}/options-basic-right.gif') no-repeat 100% 0; }
.options-basic-left, .options-talent-left { background: url('{T_IMAGESET_PATH}/options-basic-left.gif') no-repeat 0 0; }
.options-basic-container {  width: 386px; }
.options-basic-right { width: 386px; }
.options-basic-left { width: 386px; }
.options-talent-container { width: 364px; }
.options-talent-right { width: 364px; }
.options-talent-left { width: 364px; }
.name-plate { position: relative; height: 1px; z-index: 90; }
.user-nameplate { position: absolute; top: -17px; left: 150px; height: 31px; }
.user-nameplate-wrapper { float: left; background: url('{T_IMAGESET_PATH}/name-plate-tile.gif') repeat-x 0 0; height: 31px; }
.user-nameplate-right { float: left; height: 31px; width: 7px; background: url('{T_IMAGESET_PATH}/name-plate-right.gif') no-repeat 100% 0; }
.user-nameplate-left { float: left; height: 31px; width: 7px; background: url('{T_IMAGESET_PATH}/name-plate-left.gif') no-repeat 0 0; }
.user-nameplate-wrapper ul { margin: 0; padding: 0; list-style: none; }
.user-nameplate-wrapper ul li { float: left; height: 28px; padding: 5px 0 0 5px; }
.user-nameplate-wrapper ul li span { font: 150% Georgia, "Times New Roman", Times, serif; color: white; padding: 0 10px 0 0; }
.user-nameplate-wrapper ul li img { margin: 3px 2px 0 -4px; position: relative; }
.character-select { float: left; color: white; font: 11px/12px "Trebuchet MS", Verdana, sans-serif; padding: 3px 0 0 0; }
.talent-icon { position: absolute; top: 7px; left: 375px; width: 35px; height: 40px; background: url('{T_IMAGESET_PATH}/icons/talents0.gif') no-repeat; }
.talent-icon a:hover { background: url('{T_IMAGESET_PATH}/icons/talents1.gif') no-repeat 0 0; display: block; height: 40px; width: 35px; }
.error-box-position{position:absolute; margin:0 0 0 320px;}


/*\ Login Page \*/
/*_________________________________________________________________________*/

#login-page {position:relative;}
#login-page h4, #login-page h5 { margin: 0; padding: 0; position: absolute; left: 0px; }
#login-page h4 { top: 7px; height: 18px; width: 90px; }
#login-page h5 { top: 10px; height: 19px; width: 78px; }
#login-page h4 span, #login-page h5 span { display: none; }
.login-message { position: relative; margin: 34px auto 10px; width: 314px; height: 61px; background: url('{T_IMAGESET_PATH}/login-message-bg.gif') no-repeat; }
.login-message ul li { float: left; display: block; width: auto; height: 61px; font: 12px/110% Arial, Helvetica, sans-serif; color: #878787; }
.login-message ul li.help-tip { width: 240px; padding: 10px 0 0 0; margin: 0 0 0 10px; }
.login-message ul li.help-tip em { font: 10px/100% "Trebuchet MS", Arial, Helvetica, sans-serif; }
.login-message h3 { position: relative; background: url('{T_IMAGESET_PATH}/icons/alert-big.gif') no-repeat; width: 50px; height: 54px; left: 20px; top: -5px; }
.login-account, .login-password { position: relative; margin: 0 auto; width: 247px; height: 79px; }
.login-account { background: url('{T_IMAGESET_PATH}/account-login-bg.gif') no-repeat 0 0; }
.login-password { background: url('{T_IMAGESET_PATH}/password-login-bg.gif') no-repeat 0 0; margin-bottom: 10px; }
.login-title { width: 285px; height: 42px; position: absolute; top: -130px; left: -265px; }
.login-options { width: 300px; margin: 21px 0 0 0; padding-left: 25px; color: #878787; }
.forgot-password { width: 150px; float: right; position: relative; top: -52px; right: 70px; color: #878787; }
.forum-locale {color:#9c9c9c;width:100%;position:absolute;top:-100px;height:50px;padding:8px;margin:0 0 20px 0;border:1px solid #4f4f4f;background:black}
.forum-locale h3 {color:white;font-size:14px;text-transform:uppercase;letter-spacing:-1px}
.forum-locale p {padding:0;margin:4px 0}

  
/*\ Login Area \*/
/*_________________________________________________________________________*/

.login-header-container { min-width: 775px; margin: 0; padding: 0;min-height:150px}
#login { float: right; width: 225px; margin: 0; padding: 0; }	
#login div.top { position: relative; width: 225px; height: 18px; }
#login div.textfields { padding: 10px 3px 0 0; margin: 0 0 0 17px; height: 59px; }
#login div.textfields ul.hdr { list-style: none; margin: 0; padding: 0; }
#login div.textfields ul li.title { float: left; margin: 3px 0 0 0; width: 75px; }
#login div.textfields ul li.title img { position: relative; right: 5px; }
#login div.textfields ul { list-style: none; margin: 0; padding: 0; }
#login div.textfields ul li { float: left; }
#loginbuttons  { clear: right; float: right; width: 225px; height: 42px; margin: 0; padding: 0; }
#loginbuttons ul { list-style: none; margin: 0; padding: 0; }
#loginbuttons ul li.left { float: left; margin: 0; width: 13px; height: 42px; }					
#loginbuttons ul li.login { float: left; margin: 0; width: 97px; }
#loginbuttons ul li.mid { float: left; margin: 0; width: 8px; height: 42px; }						
#loginbuttons ul li.help { float: left; margin: 0; width: 98px; } 
#loginbuttons ul li.right { float: left; margin: 0; width: 8px; }


/*\ Login Area - User Logged In \*/
/*_________________________________________________________________________*/

#user { float: right; width: 225px; min-height: 101px; position: relative; }
#user div.top { position: relative; width: 225px; height: 18px; }
#user div.body { float: right; width: 124px; }
.account-compat {background:url('{T_IMAGESET_PATH}/account-compat.gif') no-repeat 15px 0;min-height:60px;color:#af4511;padding:5px 20px;font-size:11px;}
.account-compat strong {color:white}
#user ul { list-style: none; margin: 3px 0 0 0; padding: 0; }  
#user ul li { float:none; }
#user ul li.gateway { float: left; padding-right:5px; }
#user ul li.account { line-height: 1.8em; }
#portrait { float: left; }
#portrait .shell { position: relative; margin: 7px 0 0 19px; width: 64px; height: 64px; }
#portrait .frame { position: absolute; background: url('{T_IMAGESET_PATH}/portrait-frame.gif') no-repeat; width: 82px; height: 83px; top: -8px; left: -8px; z-index: 200; }
#portrait .frame-no-char { position: absolute; background: url('{T_IMAGESET_PATH}/no-character-icon.gif') no-repeat; width: 82px; height: 83px; top: -8px; left: -8px; z-index: 200; }
#avatar { margin: 0 auto; width: 200px; text-align: center; }
#avatar .shell { position: relative; margin: 10px auto; width: 64px; height: 64px; }
#avatar .frame { position: absolute; background: url('{T_IMAGESET_PATH}/portrait-frame.gif') no-repeat; width: 82px; height: 83px; top: -8px; left: -8px; z-index: 200; }
#avatar .iconPosition { position: absolute; top: -22px; right: 61px; width: 24px; text-align: center; color: #FFD823; z-index: 300; }
.avatarselect { margin: 0; width: 82px; }
.avatarselect .shell { position: relative; margin: 10px auto; width: 64px; height: 64px; }
.avatarselect .frame  { position: absolute; background: url('{T_IMAGESET_PATH}/portrait-frame.gif') no-repeat; width: 82px; height: 83px; top: -8px; left: -8px; z-index: 200; }
.avatarselect .iconPosition { position: absolute; top: -22px; right: 2px; width: 24px; text-align: center; color: #FFD823; z-index: 300; }
#logoutbuttons { clear: right; float: right; background: url('{T_IMAGESET_PATH}/login-bot-tile.gif') repeat-x; width: 225px; height: 42px;	margin: 0; padding: 0; }
#logoutbuttons div.iconPosition { position: absolute; top: -25px; left: 64px; width: 28px; text-align: center; color: #FFD823; z-index: 300; }
#logoutbuttons ul { list-style: none; margin: 0; padding: 0; }
#logoutbuttons ul li { float: left; margin: 0; width: 98px; }
#logoutbuttons ul li.left { float: left; margin: 0; width: 13px; height: 42px; background: url('{T_IMAGESET_PATH}/login-bot-left.gif') no-repeat; }
#logoutbuttons ul li.mid { float: left; margin: 0; width: 8px; height: 42px; background: url('{T_IMAGESET_PATH}/login-bot-mid.gif') no-repeat; }
#logoutbuttons ul li.right { float: left; margin: 0; width: 8px; background: url('{T_IMAGESET_PATH}/login-bot-right.gif') no-repeat; }
.admin-shortcuts { color: white; position: absolute; left: 95px; bottom:5px; }
a.quickadmin { display: block; float: left; height:23px; width:31px; }
a.view-sub { display: block; float: left; height:23px; width:26px; background: url('{T_IMAGESET_PATH}/icons/icon-subscription.gif') no-repeat 0 0; }
a.quickadmin:hover, a.view-sub:hover { background-position: 0 -23px; }


#container {color:#fff; position: relative; }
.charselect-info {color:#ccc; margin:0 auto 50px !important; padding:20px !important; text-align:center;}
.charselect-info h4 {font:22px Arial, Helvetica, sans-serif; letter-spacing:-1px;}
.charselect-info .fiddycent {overflow:hidden;}
.charselect-info .fiddycent q {float:right; position:relative; left:-50%;}
.charselect-info .fiddycent q q {float:none; position:static;}
.charselect-info .fiddycent q q q {float:left; position:relative; left:50%;}
.charselect-info .fiddycent q q q q {float:none; position:static;}

#selectedCharacter {background-color: #333; border:1px solid #555; margin:20px auto; text-align:left; padding:5px; width:250px; position:static;}
#selectedCharacter ul {margin:10px 10px 0 97px; padding:0; display:block; list-style:none; font:11px/1.6 Arial, Helvetica, sans-serif;}
#selectedCharacter ul li {margin:0; padding:0;}
#selectedCharacter ul li.charselect-realm {margin-top:5px;}
#selectedCharacter ul span {font-size:12px;}
.charselect-portrait { position:relative; float:left; overflow:hidden;}
.charselect-portrait .shell { position: relative; margin:0 0 0 0px; background-repeat:no-repeat; background-position:50% 50%;}
.charselect-portrait .frame { background: url('{T_IMAGESET_PATH}/portrait-frame.gif') no-repeat; z-index: 200; }
.charselect-portrait .frame-no-char { position: absolute; background: url('{T_IMAGESET_PATH}/no-character-icon.gif') no-repeat; width: 82px; height: 83px; top: -8px; left: -8px; z-index: 200; }
.charselect-portrait .iconPosition { position: absolute !important; top:60px; right:4px; width: 24px; text-align: center; color: #FFD823; z-index: 300; }
.charselect-invalid {font:11px Arial, Helvetica, sans-serif; color:#666; margin:10px 100px;}

.bnet-title { padding-top:15px; }

#tabHolder { margin:0; clear:both;}
#tabHolder table th { background:url('{T_IMAGESET_PATH}/post-tile-bottom2.gif') #666 0 0 repeat;}
#tabHolder table tr:hover { background:url(/images/post-tile-top.gif) 0 0 repeat-x #222; }
#tabHolder table td { border-top: 1px solid #333; }
#tabHolder table { border: 1px solid #666; }

.ui-tabs-hide { display:none; }
.ui-tabs-nav { padding:0; position:relative; left:-1px;}
.ui-tabs-nav li { float:left; border-bottom:0 !important; margin:0 .2em -2px 1px; padding: 0; }
.ui-tabs-nav li a { float:left;display:block; text-decoration:none; padding:.5em 1em; text-decoration:none; background-color:#444; border-width:1px;
border-style:solid;
border-color:#444;
-moz-border-radius-topleft:2px;  
-moz-border-radius-topright:2px;  
-moz-border-radius-bottomleft:0px;  
-moz-border-radius-bottomright:0px;  
-webkit-border-top-right-radius:2px; 
-webkit-border-top-left-radius:2px;  
-webkit-border-bottom-left-radius:0px;  
-webkit-border-bottom-right-radius:0px; }
.ui-tabs-nav li.ui-tabs-selected { padding-bottom:.1em; border-bottom:0; }
.ui-tabs-nav li.ui-tabs-selected a { background-color:#666; height:27px; line-height:27px; padding-top:0;border-color:#666;}

.ui-helper-reset { margin:0; padding:0; border:0; outline:0; line-height:1.3; text-decoration:none; font-size:100%; list-style: none; }
.ui-helper-clearfix:after { content:"."; display:block; height:0; clear:both; visibility:hidden; }
.ui-helper-clearfix { display: inline-block; }
/* required comment for clearfix to work in Opera \*/
* html .ui-helper-clearfix { height:1%; }
.ui-helper-clearfix { display:block; }
/* end clearfix */
.ui-helper-zfix { width: 100%; height: 100%; top: 0; left: 0; position: absolute; opacity: 0; filter:Alpha(Opacity=0); }

.charListTable {width:100%;}
.charListTable th { cursor: pointer; }
.charListTable tbody td { background:url(/images/post-bg2.gif) #161616 0 0 repeat-x; color:#999;}
.charListTable .player-icons-race, .charListTable .player-icons-class {float:left; margin-right:1px;}
.charListTable tr.charselect-inactive td {color:#666; font-style:italic;}
.charListTable .charname {text-align:left;}
.charListTable .charlevel {width:200px; text-align:center;}
.charListTable .charrealm {width:200px; text-align:left;}
	
/*\ Forum Selector \*/
/*_________________________________________________________________________*/

#forumHead { float: left; width: 440px; margin: 20px 0 0 0; position:relative; }
#forumHead .icon { float: left; width: 81px; background: none; }
#forumHead .list { float: right; width: 355px; height: 89px; }
#forumHead .text { float: left; width: 60px; text-align: right; margin: 4px 2px 0 0; }
#forumHead small.nav { color: #D3D3D3; }
#forumHead ul { list-style: none; margin: 15px 0 0 0; padding: 0; }
#forumHead li.title { height: 18px; padding: 8px 0 0 5px; }
#forumHead li.sel { margin: 0; padding: 0; }
#forumHead li.sel span { visibility: hidden; }
.bt_link_box { position:relative; z-index:1 }
.bt_linkbar { background:url('{T_IMAGESET_PATH}/bt_linkbar.gif') no-repeat; height:34px; width:218px;
			  position:absolute; margin:65px 0 0 89px;  }
.bt_linkbar a { display:block; text-decoration:none; margin-top:6px; padding:4px 0 4px 51px; font-size:11px; color:#00C0FF  }
.bt_linkbar a:hover { color:white; text-decoration:underline; }

/*\ Forum Quick Search \*/
/*_________________________________________________________________________*/

table.board-clear { clear: both; margin: -11px 0 0 0; }
#search { position: relative; width: 100%; height: 39px; min-width: 775px; }
#search ul { list-style: none; margin: 0; padding: 0; }
#search ul li { float: left; }
#search li.a { float: left; width: 55px; height: 39px; }
#search li.b { float: left; height: 39px;  padding: 11px 0 0 0; }
#search li.c { float: left; width:150px;height: 39px;  }
#search div.advanced-search { position: absolute; padding: 0; margin: 0; top: -6px; left: 288px; }
#search div.advanced-search a:link, #search div.advanced-search a:active, #search div.advanced-search a:visited { display: block; }
#search div.forum-index { float: right; text-align: right; padding-right: 14px; height: 42px; width: 270px; }
#search div.forum-index { float: right; text-align: right; padding-right: 14px; height: 42px; width: 270px; }
#search img.quicksearch-newtopic {  position: absolute; top: -7px; left: 49px; }
.login-search {height:15px !important;background-position:0 -22px !important}


/*\ Forum Search Results \*/
/*_________________________________________________________________________*/

#searchcontainer { display: block; width: 100%; min-width: 775px; margin: 0; padding: 0; background: black; }
#floatingContainer { position: relative; }
#floatingContainer2 { position: absolute; width:100%;}
#resultsContainer {float:left; width: 100%;}
.resultbox { display: block;}
.post1 { display: block; background: #313131 url('{T_IMAGESET_PATH}/search-top-tile1.gif') repeat-x top; border: 1px solid #000; }
.postf1 { display: block; background: url('{T_IMAGESET_PATH}/search-bot-tile.png') repeat-x bottom; }
.post2 { display: block; background: #1b1b1b url('{T_IMAGESET_PATH}/search-top-tile2.gif') repeat-x top; border: 1px solid #000; }
.postf2 { display: block; background: url('{T_IMAGESET_PATH}/search-bot-tile.png') repeat-x bottom; }
.excerptPadd {padding: 10px;}
.floatRight { position: relative; float:right; }
.searchArrow { background: url('{T_IMAGESET_PATH}/search-arrow.gif'); width: 42px; height: 40px; position: absolute; top: 10px; left: 17px; visibility: hidden;}
.miniText{ margin-top:2px; margin-right:2px; position: absolute; top: 0px; left: -80px; }
#searchcontainer ul { display: table; list-style: none; margin: 0; padding:0; width: 100%; }
#searchcontainer ul li { width: 100%; padding: 0; }
#searchcontainer ul li.postavatar { float: left; width: 85px; height: 85px; }
#searchcontainer ul li.userdata { float: left; width: 250px; height: 85px; padding-left: 40px; }
#searchcontainer ul li.summary { padding: 10px 0 0 0; }
#searchcontainer ul li.padding { padding: 3px 0 0 0; }
#searchcontainer div.iconPosition { position: absolute; top: -22px; right: 2px; width: 24px; text-align: center; color: #FFD823; z-index: 300; }
#searchcontainer div.searchbanner { position: absolute; top: -8px; height: 41px; width: 420px; background: url('{T_IMAGESET_PATH}/search-banner-bg.png') no-repeat; }
#searchcontainer div.postpreview { position: absolute; top: -28px; height: 41px; width: 420px; background: url('{T_IMAGESET_PATH}/search-banner-bg.png') no-repeat; }
#searchcontainer hr { height: 2px; border-bottom: 1px solid #3f3f3f; color: #292929; background-color: #292929; }
#resultinfopane { position: relative; background: #0e323e; border: 1px dashed #5d5d5d; padding: 6px; font-size: 11px; text-align: center; }
#messagepanel { position: relative; background: #092840; border: 1px solid #000; padding: 10px; margin-top: 10px; }
#messagepanel div.message-body { background: #464646; border: 1px solid #000; padding: 15px; text-align: left; min-width: 370px; }
.postdisplay {  display: block; background: #1b1b1b; border: 1px solid #000; padding: 2px; }
.postdisplay div.innerborder { display: block; background: #313131; border: 1px solid #000; padding: 2px; }
.postdisplay div.innercontainer { display: block; background: #313131 url('{T_IMAGESET_PATH}/search-avatar-bg.gif') no-repeat top left; border: 1px solid #000;  }
.postdisplay div.secondcontainer { display: table; background: url('{T_IMAGESET_PATH}/search-postjump-bg.gif') no-repeat top right; padding: 10px; width: 100%;  }
.postdisplay div.insert { display: table; width: 100%; padding: 0; margin: 0;  }
td.displaybox { padding: 20px 5px 0 0; background: url('{T_IMAGESET_PATH}/dark-portal.jpg') no-repeat bottom right; }
.search-overflow { position:absolute; z-index:999999; top:0px; right:10px; width:300px; height:3000px; display:none; background-color:red; }


/*\ Character Select \*/
/*_________________________________________________________________________*/

#character-post-info { display: table; padding: 10px; border: 1px dashed #252525; text-align: center; background: url('{T_IMAGESET_PATH}/back.png') repeat 0 0; margin: 0 auto; width:647px; }
#talent-input { display: table; width: 400px; padding: 0; margin: 0; text-align: left; }
table#dlcharacters { border: 1px solid black; border-collapse: collapse; }


/*\ Character Search \*/
/*_________________________________________________________________________*/

#searchborder { width: 752px; background: url('{T_IMAGESET_PATH}/search-border-top.gif') repeat-x top; margin: 20px 0 0 20px; }
#searchborder div { background: url('{T_IMAGESET_PATH}/search-border-left.gif') repeat-y left; }
#searchborder div div { background: url('{T_IMAGESET_PATH}/search-border-right.gif') repeat-y right; }
#searchborder div div div { background: url('{T_IMAGESET_PATH}/search-border-top-right.gif') no-repeat top right; }
#searchborder div div div div { background: url('{T_IMAGESET_PATH}/search-border-top-left.gif') no-repeat top left; }
#searchborder div div div div div.padding { padding: 16px 16px 0 16px; }
#searchshell { position: relative; display: block; }
#searchshell div.searchbox { display: table; width: 720px; height: 100px; padding: 0; background: url('{T_IMAGESET_PATH}/back.png') repeat 0 0; }
#searchshell div.listbox { background: none; display: block; padding: 5px 0 0 25px; }
#searchshell ul { clear: both; list-style: none; margin: 0; padding: 0; }
#searchshell ul li { display: block; float: left; padding: 0; }
#searchshell ul li.icon { width: 25px; }
#searchshell ul li.text { width: 200px; }
#searchshell input.checkbox { border: none; }
.search-dialogue { height: 70px; width: 100%; text-align: center; padding-top: 30px; }


/*\ Forum Legend \*/
/*_________________________________________________________________________*/

#iconLegend { border: 1px solid #4C4C4C; padding: 1px; margin: 1px; }
#iconLegend .tb2 { border-top: 1px solid black; border-left: 1px solid black; }
#iconLegend .tb2 td { background: #252525; padding: 1px 3px 3px 2px; border-right: 1px solid black; border-bottom: 1px solid black; text-align: left; }
#iconLegend img { vertical-align: middle; padding: 2px; }


/*\ Welcome Page \*/
/*_________________________________________________________________________*/

.welcome-page {padding:20px;color:white}
.welcome-page h1 {font-size:18px;letter-spacing:-1px;color:#00bafd}
.welcome-page li {padding-left:20px !important;line-height:30px;background-position:0 20px !important}
.welcome-page ul {padding:10px 20px}

/*\ Shared Row Colors \*/
/*_________________________________________________________________________*/

#postshell11, #postshell21 { width: 100%; border-top: 1px solid #000; border-bottom: 1px solid #000;margin: 0 auto;}
#posttable11 td, #posttable21 td { padding: 5px; vertical-align: top; }
td.id11, td.id21, td.idbliz11, td.idbliz21 { width: 210px; border-right: 1px solid #000; text-align: center; }
td.tools11, td.tools21 { background: url('{T_IMAGESET_PATH}/post-msg-bot-left.png') no-repeat top left; }
#iconpanelhide11, #iconpanelhide21 { margin: 0; }
td.tools11, td.tools21 { width: 100%; height: 35px; border-bottom: 1px solid #000; }
#postid11, #postid21 { float: left; }
#postid11 ul, #postid21 ul { list-style: none; margin: 5px 0 0 0; padding: 0; white-space: nowrap; }
#postid11 ul li, #postid21 ul li { display: inline; padding: 0 0 0 5px; }
#avatar11, #avatar21 { margin: 0 auto; width: 200px; text-align: center; }
#avatar11 .shell, #avatar21 .shell { position: relative; margin: 10px auto; width: 64px; height: 64px; }
#avatar11 .frame, #avatar21 .frame { position: absolute; background: url('{T_IMAGESET_PATH}/portrait-frame.gif') no-repeat; width: 82px; height: 83px; top: -8px; left: -8px; z-index: 200; }
#avatar11 .iconPosition, #avatar21 .iconPosition { position: absolute; top: -22px; right: 61px; width: 24px; text-align: center; color: #ffd823; z-index: 300; }
#postbody11, #postbody21 { padding: 0; height: 130px; margin: 0;  width: 90%; }
.postdisplay div.postingcontainer11, .postdisplay div.postingcontainer21 { display: block; border: 1px solid #000;}

.propass #avatar11 .frame, .propass #avatar21 .frame {background: url('{T_IMAGESET_PATH}/portrait-frame-propass.gif') no-repeat;}

/*\ Post Message Row Color 1 \*/
/*_________________________________________________________________________*/

#postshell11 { background: #1b1b1b; }
#posttable11 { background: url('{T_IMAGESET_PATH}/post-tile-bottom.gif') repeat-x bottom; }
.postdiv11 { background: url('{T_IMAGESET_PATH}/post-tile-bottom.gif') repeat-x bottom; }
td.id11 { background: url('{T_IMAGESET_PATH}/avatar-shadow-bg.gif') no-repeat center top; }
.propass td.id11 { background: url('{T_IMAGESET_PATH}/avatar-shadow-bg-propass.gif') no-repeat center top; }
td.idbliz11 { background: url('{T_IMAGESET_PATH}/avatar-shadow-blizz-bg.gif') no-repeat center top; }
td.message11 { background: url('{T_IMAGESET_PATH}/post-msg-top-left.gif') no-repeat top left; }
.postdisplay div.postingcontainer11 { background: #1b1b1b url('{T_IMAGESET_PATH}/post-tile-top.gif') repeat-x top;  }
/*#hideinfo11 { display: none; visibility: hidden; }*/
  
/*\ Post Message Row Color 2 \*/
/*_________________________________________________________________________*/

#postshell21 { background: #313131; }
#posttable21 { background: url('{T_IMAGESET_PATH}/post-tile-bottom2.gif') repeat-x bottom; }
td.id21 { background: url('{T_IMAGESET_PATH}/avatar-shadow-bg2.gif') no-repeat center top; }
.propass td.id21 { background: url('{T_IMAGESET_PATH}/avatar-shadow-bg2-propass.gif') no-repeat center top; }
td.idbliz21 { background: url('{T_IMAGESET_PATH}/avatar-shadow-blizz-bg2.gif') no-repeat center top; }
td.message21 { background: url('{T_IMAGESET_PATH}/post-msg-top-left2.gif') no-repeat top left; }
.postdisplay div.postingcontainer21 { background: #313131 url('{T_IMAGESET_PATH}/post-tile-top2.gif') repeat-x top; }

  
/*\ Icon Page \*/
/*_________________________________________________________________________*/

.sides { position: relative; display: block; height: 50px; width: 100%; }
.Alliance { background: url('{T_IMAGESET_PATH}/alliance-bg.jpg') no-repeat center; }
.Horde { background: url('{T_IMAGESET_PATH}/horde-bg.jpg') no-repeat center; }
div.icon { display: block; float: left; background: black; }
div.end { float: right; padding: 1px 0 0 0; background: black; }
.rows td { font-family: Arial, Helvetica, sans-serif; padding: 2px; font-size: 9pt; vertical-align: middle; }	
.pinfo { display: table; background: transparent url('{T_IMAGESET_PATH}/pinfo-tile.gif') repeat-y 3px 0; width: 191px; margin: 0 auto; padding: 8px 0 0 0; }
.pinfo a, .pinfo a:active, .pinfo a:visited { text-decoration:none; }
.pinfobackground { display: table; width: 167px; height: auto; margin: 0 auto; background: url('{T_IMAGESET_PATH}/back.png') repeat 0 0; }
.pinfobottom { display: table; position: relative; margin: 0 auto; background: url('{T_IMAGESET_PATH}/pinfo-bot.gif') no-repeat bottom; height: 15px; width: 191px; }
.pifooter { display: block; width: 167px; height: 14px; margin: 0 auto; background: url('{T_IMAGESET_PATH}/back.png') repeat 0 0; }


/*\ Forum Component Assets \*/
/*_________________________________________________________________________*/

#iconpanel, #search-iconpanel { position: absolute; top: -83px; height: 83px; width: 35px; }
#iconpanel { right: 140px; background: url('{T_IMAGESET_PATH}/rc-bg.gif') no-repeat; }
.propass #iconpanel { right: 140px; background: url('{T_IMAGESET_PATH}/rc-bg-propass.gif') no-repeat; }
#search-iconpanel { right: -35px; background: url('{T_IMAGESET_PATH}/search-avatar-panel.gif') no-repeat; }
#default-icon-panel div.player-icons-race, #default-icon-panel div.player-icons-class, #default-icon-panel div.player-icons-pvprank  { display: block; height: 18px; width: 18px; position: absolute; z-index: 1010; }
#default-icon-panel div.player-icons-race { top: -72px; right: 146px; }
#default-icon-panel div.player-icons-class { top: -52px; right: 146px; }
#default-icon-panel div.player-icons-pvprank { top: -32px; right: 146px; }
#search-icon-panel div.player-icons-race, #search-icon-panel div.player-icons-class, #search-icon-panel div.player-icons-pvprank  { display: block; height: 18px; width: 18px; position: absolute; z-index: 1010; }
#search-icon-panel div.player-icons-race { top: -72px; right: -20px; }
#search-icon-panel div.player-icons-class { top: -52px; right: -20px; }
#search-icon-panel div.player-icons-pvprank { top: -32px; right: -20px; }
.userpanel { position: absolute; top: -77px; right: 2px; width: 47px; height: 30px; background: url('{T_IMAGESET_PATH}/icon-user-bg.gif') no-repeat; z-index: 200; }
.char-admin-tools { height:47px; width:177px; margin:0 auto; }
.admin-buttons { padding: 17px 20px 0 30px; text-align: center; }
.admin-buttons img { float: left; margin: 0 2px; }
.listinfo { list-style: none; margin: 0 auto; padding: 3px; }
.listinfo li { display: block; float: left; width: 160px; text-align: center; }
.miniadmin { float: right; }
.miniadmin ul { list-style: none; margin: 0; padding: 0; white-space: nowrap; }
.miniadmin ul li { display: block; float: left; padding: 0px 4px 0 0; }
.tool-icons {float:right;padding:5px 10px 0 0}
.tool-icons span {text-transform:uppercase;font-size:10px;color:red;position:relative;top:-3px}
.tool-icons span.seperator { font-size:16px;text-transform:none;color:#4a5861 }
li.delete-posts { border: 1px solid #555; background: #212121; margin: 0 2px; }
li.delete-posts input { border: none; float: left; background: transparent; margin:2px 2px; padding:0; }
li.delete-posts span { padding: 0 0 0 4px; display: block; height: 18px; }
#postbody { padding: 0; height: 130px; margin: 0; }
/*.content { position: relative; padding: 10px; word-wrap: break-word; width:100px; overflow:hidden;}*/
.content { position: relative; padding: 10px; word-wrap: break-word; overflow:hidden;}
#preview { width: 100%; height: 25px; background: url('{T_IMAGESET_PATH}/thread-topic-bg2.gif') repeat-x; border-top: 1px solid #666666; border-bottom: 1px solid #666666; text-align: center; margin: 0 auto; }
#preview ul { list-style: none; overflow: auto; margin: 0 auto; padding: 0; width: 320px; }
#preview ul li { float: left; display: block; }
#postLogin { position: relative; background: url('{T_IMAGESET_PATH}/postform.gif') no-repeat center top; width: 100%; margin: 0 auto; text-align: center; }
#errorcontainer { position: relative; margin: 0 auto; display: block; width: 10px; height: 1px; }
#errorcontainer div.messages { position: absolute; display: table; top: 20px; left: 40px; width: 220px; height: 60px; text-align: left; background-image:url('{T_IMAGESET_PATH}/back.png'); border-width: 1px; border-style: solid; border-color: #D5D5D7 #A5A5A5 #4F4F4F #4F4F4F; }
#errorcontainer div.messages ul { margin: 0; padding: 10px;; list-style: none; }
#errorcontainer div.messages ul li { float: left; display: block; width: 35px; padding-right: 5px; }
#errorcontainer div.buttons { position: absolute; display: table; top: 35px; left: 40px; width: 220px; height: 60px; text-align: left; }
#postLogin .topnav { position: absolute; top: 30px; right: 30px; }
#postLogin .shell { padding: 35px 0 0 0; margin: 0; }
#postLogin .shell2 { padding: 30px 0 0 0; margin: 0; }
#postLogin ul { margin: 0; padding: 0; list-style: none; }
#postLogin ul li { float: left; display: block; }
#postLogin ul li.right { text-align: right; width: 116px; margin: 0 20px 0 0; }
#postLogin ul li.left { text-align: left; }
#typemsg { padding: 0; text-align: center; margin: 0 auto; width: 623px; }
#typemsg ul { margin: 0; padding: 0; list-style: none; width: 623px; }
#typemsg ul li { float: left; display: block; }
#typemsg ul li.right { text-align: right; width: 145px; margin: 0 20px 0 0; }
#typemsg ul li.left { text-align: left; }
.icon-search, .icon-ignore { vertical-align: middle; margin: 4px 0 2px 4px; width:17px; height:21px; border:0px;  }
table.bml { width: 100%; background: #1b1b1b url('{T_IMAGESET_PATH}/post-tile-top.gif') repeat-x top; }
table.bml tr td { border-width: 1px; border-style: solid; border-color: #1b1b1b #000000 #000000 #1b1b1b; }
table.bml tr td.header { background: #000 url('{T_IMAGESET_PATH}/thread-topic-bg2.gif') repeat-x; font-size: 10pt; font-weight: bold; color: #ffffff; }
table.bml li {background:none !important;padding:0 !important;}
table.charselectborder { border: 1px solid #4C4C4C; }
td.t1, td.t2, td.t3, td.t4, td.t5, td.t6 { background: #161616 url('{T_IMAGESET_PATH}/post-bg2.gif') repeat-x top; border-width: 1px; border-style: solid; border-color: #000000 #000000 #161616 #161616; color: #D7CEA4; }
td.t1 { text-align: center; }
td.t3 { text-align: left; font-weight: bold; }
td.t4 { text-align: center; font-weight: bold; }
td.t5 { text-align: center; font-weight: bold; }
td.t6 { text-align: left; vertical-align: bottom; }
td.t6 b { color: #e2d9b0; }
td.ta1, td.ta2, td.ta3, td.ta4, td.ta5, td.ta6 { background: #252525 url('{T_IMAGESET_PATH}/post-bg1.gif') repeat-x top; border-width: 1px; border-style: solid; border-color: #000000 #000000 #252525 #252525; color: #D7CEA4; }
td.ta1 { text-align: center; }
td.ta3 { text-align: left; font-weight: bold; }
td.ta4 { text-align: center; font-weight: bold;}
td.ta5 { text-align: center; font-weight: bold;}
td.ta6 { text-align: left; vertical-align: bottom; }
td.ta6 b { color: #e2d9b0; }
td.n1, td.n4, td.n5, td.n6 { background: #161616 url('{T_IMAGESET_PATH}/post-bg2.gif') repeat-x top;; border-width: 1px; border-style: solid; border-color: #000000 #000000 #161616 #161616; color: #161616; }
td.n1 { text-align: center; }
td.n4 { text-align: center; font-weight: bold; }
td.n5 { text-align: center; font-weight: bold; }
td.n6 { color: #161616; text-align: left; vertical-align: bottom; }
td.na1, td.na4, td.na5, td.na6 { background: #252525 url('{T_IMAGESET_PATH}/post-bg1.gif') repeat-x top;; border-width: 1px; border-style: solid; border-color: #000000 #000000 #252525 #252525; color: #252525; }
td.na1 { text-align: center; }
td.na4 { text-align: center; font-weight: bold;}
td.na5 { text-align: center; font-weight: bold;}
td.na6 { text-align: left; vertical-align: bottom;}
.red { color: red; }



/*  Polls */
/*_________________________________________________________________________*/

.polls { width: 85%; margin:0 auto; display: table; position: relative; }
.polls h1 { font-size: 18px; color: white; display: block; padding: 10px 0 10px 25px; background: url('{T_IMAGESET_PATH}/icons/blizz.gif') no-repeat 0 12px; }
.polls h1 span { color: #00c0ff; font: italic 18px Georgia, "Times New Roman", Times, serif; }
.deco-frame { background: url('{T_IMAGESET_PATH}/poll-bg.jpg') repeat-x 0 0; }
.deco-frame-right { background: url('{T_IMAGESET_PATH}/poll-right.gif') no-repeat 100% 0; }
.deco-frame-left { background: url('{T_IMAGESET_PATH}/poll-left.gif') no-repeat 0 0; position: relative; height:1%;}
.deco-frame h2 { margin:0; padding:0; position: absolute; top:-11px; left:-13px; height: 38px; width: 100px; }
.deco-frame h2 span{display:none}
.poll-date { display: block; width: auto; float: left; white-space: nowrap; position: relative; color:#999; font-size: 10px; text-transform: uppercase; height: 30px; background: url('{T_IMAGESET_PATH}/poll-date-tile.gif') repeat-x; }
.poll-date span { color: white; }
.poll-date1 { height: 30px; padding: 0 10px 0 0; background: url('{T_IMAGESET_PATH}/poll-date-right.gif') no-repeat 100% 0; }
.poll-date2 { padding: 5px 15px 0 25px; height: 25px; background: url('{T_IMAGESET_PATH}/poll-date-left.gif') no-repeat 0 0; }
.poll-content { padding: 20px 20px 40px 20px; color: white; font-weight: bold; position: relative; }
.poll-content span { margin: 0 0 0 10px; color:#CCCCCC; }
.poll-content p { background: #090d22; padding: 3px; width: auto; margin: 10px auto; }
.poll-content p:hover { background: #101636; }
.poll-content b { font-weight: normal; color: #00c0ff; }
.pfp { width: 1px; height: 30px; position: relative; margin:0 auto; }
.poll-footer { width: 506px; height: 74px; position: absolute; left:-253px; top: -47px; background: url('{T_IMAGESET_PATH}/poll-bot.gif') no-repeat; }
.poll-footer input { float: right; margin: 5px 130px 0 0; width: 119px; height: 36px; border: none; cursor: pointer; }
.vote-inactive { float: right; margin: 5px 130px 0 0; width: 119px; height: 36px; border: none; }
.vote-link-inactive span,.result-inactive span {display:none}
.poll-footer a { display: block; height: 36px; width: 119px; float: left; position: relative; left: 135px; top: 5px; }
a.vote-link, a.result, a.vote-link-inactive, a.result-inactive { display: block; height: 36px; width: 119px; float: left; position: relative; left: 135px; top: 5px; }
.poll-edit a { text-decoration: none; position: absolute; bottom: 10px; left:10px; padding: 5px 15px; background: #090d22; border: 1px solid #363636; }
.poll-edit a:hover { background: black; border: 1px solid #5c5c5c; }
.poll-box { display: table; width: 100%; position:relative; height:24px; }
.poll-option { width: 46%; float: left; text-align: right; margin:0 4px 0 0;}
.poll-option span {line-height:16px;}
.poll-count { width: 47%; float: left; background: transparent; line-height:16px;}
.poll-count-total { width: 100%; }
.poll-count span { float: left; }
span.poll-bar { display: block; position: relative; width: 1px; height: 16px; background: url('{T_IMAGESET_PATH}/bar-energy.gif') repeat-x; }
span.pollpercent { position: absolute; right:-110px; width: 100px; text-align: left; }
span.totalvotes { width: 100%; display: block; text-align: center; }
.df h3 { position:absolute; margin:0; padding:0; height:31px; width: 89px; top: -4px; left: 5px; }
.df h3 span {display:none}
.df input { border: 0; background: transparent; }
img.poll-result-icon { position: absolute; top: -8px; left: -33px; }

/*df*/
.df table, .df table td { border: 0; border-collapse: collapse; padding: 0; margin: 0; }
.df table { width: 100%; }
.df { position: relative; zoom:1; }
.df td.tl, .df td.t, .dftr, .df td.bl, .df td.b, .df td.br { height: 21px !important }
.df td.tl, .df td.tr, .df td.bl, .df td.br, .df td.l, tr.r	{ width: 21px !important;}
.df td.tl, .df td.t, .df td.tr { padding:0 !important; margin:0 !important; }
.df td.l q, .df td.r q { width: 21px !important; display: block; height: 1px; }
.df td.tl 	{ background: url('{T_IMAGESET_PATH}/df-tl.png') no-repeat; }
.df td.tr 	{ background: url('{T_IMAGESET_PATH}/df-tr.png') no-repeat; }
.df td.t 	{ background: url('{T_IMAGESET_PATH}/df-t.png') repeat-x; }
.df td.l 	{ background: url('{T_IMAGESET_PATH}/df-l.png') repeat-y; }
.df td.r 	{ background: url('{T_IMAGESET_PATH}/df-r.png') repeat-y; }
.df td.bg	{ background: url('{T_IMAGESET_PATH}/df-bg.png') repeat; width: 100%; }
.df td.bl 	{ background: url('{T_IMAGESET_PATH}/df-bl.png') no-repeat; }
.df td.br 	{ background: url('{T_IMAGESET_PATH}/df-br.png') no-repeat; }
.df td.b 	{ background: url('{T_IMAGESET_PATH}/df-b.png') repeat-x; }


/*  Admin Frontend */
/*_________________________________________________________________________*/

.admin-viewport { width: 900px; margin: 80px auto; padding: 20px 0 0 0; background: url('{T_IMAGESET_PATH}/df-bg.png') repeat; border: 1px solid black; }
.vp-content { padding: 10px 10px 30px 10px; color: #999; }
.vp-content h1 { font: 24px Georgia, "Times New Roman", Times, serif; color:#ffb019; padding: 8px; }
.vp-content table { width: 90%; margin: 0 auto; background: black; padding:0; border-left: 1px solid black; }
.vp-content td { padding: 6px; border: 1px solid black; }
.vp-content thead td { color: white; font-weight: bold; background: #340505 url('{T_IMAGESET_PATH}/thead-tile.gif') repeat-x 0 1px; border-left: 1px solid #460c0c; border-right: 1px solid black;}
.vp-content tbody .r0 td { background: #161616 url('{T_IMAGESET_PATH}/post-bg2.gif') repeat-x top; border-width: 1px; border-style: solid; border-color: #000000 #000000 #1e1e1e #1e1e1e; }
.vp-content tbody .r1 td { background: #252525 url('{T_IMAGESET_PATH}/post-bg1.gif') repeat-x top; border-width: 1px; border-style: solid; border-color: #000000 #000000 #303030 #303030; }
.vp-tablefooter table { border: 1px solid black; border-collapse: collapse; background: #414141 url('{T_IMAGESET_PATH}/vp-footer-tile.gif') repeat-x 0 0; }
.vp-tablefooter td { border: 0; padding:10px; }
.vp-content a.link { width: 1%; display: table; text-decoration: none; white-space: nowrap; border: 1px solid black;  }
.vp-content a.link span { border-left: 1px solid #c00014; border-right: 1px solid #8e050e; color: #e0c004; display: block; height: 18px; padding: 2px 10px 0 10px; background: url('{T_IMAGESET_PATH}/link-tile.gif') repeat-x 0 0; }
.vp-content a.link:hover span { color: white; background-position: 0 -20px; }
.vp-content input.input5 {width:35px;}
.vp-content input.blueButton { height: 21px; padding: 2px 12px 4px; color: #e0c004; font: bold 12px Arial, Helvetica, sans-serif; border-left: 1px solid #005ec0; border-right: 1px solid #05438e; border-top: 0; border-bottom: 0; cursor: pointer; background: url('{T_IMAGESET_PATH}/input-tile.gif') repeat-x 0 0; }
.vp-content input.blueButton:hover { color: white; background-position: 0 -21px; }


/*  Opera hax0r */
/*_________________________________________________________________________*/

@media all and (min-width: 0px) {
#typemsg { padding: 0; text-align: center; margin: 0 auto; margin-top: 10px; margin-bottom: 23px; width: 623px; }
.post-button-right ul li { display: inline-table; }
} /* endif */



.advertise-horz { background: #1E1E1E ; background-position:center bottom }
.advertise-vert { background: #1E1E1E ; background-position:right }

/* PBWoW Custom Fixes */
.shell div.frame-no-char { position: absolute; background: url('{T_IMAGESET_PATH}/no-character-icon.gif') no-repeat; width: 82px; height: 83px; top: -8px; left: -8px; z-index: 200; }
.pbwow-admin-fix span.pbwow-bold-fix { color:#FFF }
.bnetbold {color:#FFF; font-size:18px; letter-spacing:-1px; margin:0; padding-bottom:8px; font-family:Arial,Helvetica,sans-serif; font-weight:bold; text-transform:uppercase;}
html,body {min-height:100%;}
/* Top Banner */
#shared_topnav { background: #072540 url('{T_IMAGESET_PATH}/bg.gif') 50% 0; border-bottom:1px solid black; }
.topnav { width:100%; text-align:center; position:absolute; z-index:12; font: bold 11px Tahoma;	background: url('{T_IMAGESET_PATH}/topbg2.gif') no-repeat 50% 0; border-bottom: 1px solid #143352; padding: 6px 0; }
.tn_interior { width:916px; margin:0px auto; text-align:right; padding-right:40px; }
.topnav a:link, .topnav a:visited { color:#D0A803; text-decoration:none; padding:2px; margin:0 15px; }
.topnav a:hover { color: white; }
.tn_push { height:26px;}

/* Forums Specific Styles */
.tn_forums .tn_interior { width:auto; }

/* Armory Specific Styles */
.tn_armory .tn_interior {  width:1024px; padding:0;}

/* Community Site Specific Styles */
.tn_wow { }
/*
Copyright 2006 Blizzard Entertainment, Inc.
forums.worldofwarcraft.com Localization CSS 
*/

/*\ Index Page \*/
/*_________________________________________________________________________*/

.index-spacer { height: 55px; }
.tcg { height: 134px; width: 595px; background: url('{T_IMAGESET_LANG_PATH}/udtcg.gif') no-repeat; margin: -20px auto; }
.tcg p { padding: 48px 0 0 155px; }
/*.index-intro img {background:url('{T_IMAGESET_PATH}/B.gif') no-repeat 0 0}*/

/*\ Account Options \*/
/*_________________________________________________________________________*/

#post .options-box h1 { background: url('{T_IMAGESET_LANG_PATH}/login-account.gif') no-repeat; }
#post .options-email h2 { background: url('{T_IMAGESET_LANG_PATH}/options-email.gif') no-repeat; }
#post .options-basic h1 { background: url('{T_IMAGESET_LANG_PATH}/options-timezone.gif') no-repeat; }
#post .options-basic h4 { background: url('{T_IMAGESET_LANG_PATH}/options-talents.gif') no-repeat; }
#post .message-top h5 { background: url('{T_IMAGESET_LANG_PATH}/options-signature.gif') no-repeat; }
.options-title { background: url('{T_IMAGESET_LANG_PATH}/options-title.gif') no-repeat; }


/*\ Login Page \*/
/*_________________________________________________________________________*/

.login-title { background: url('{T_IMAGESET_LANG_PATH}/login-title.gif') no-repeat; }
#login-page h4 { background: url('{T_IMAGESET_LANG_PATH}/login-account.gif') no-repeat; }
#login-page h5 { background: url('{T_IMAGESET_LANG_PATH}/login-password.gif') no-repeat; }
a.quickadmin { background: url('{T_IMAGESET_LANG_PATH}/icon-admin.gif') no-repeat 0 0; }

/*\ Forum Selector \*/
/*_________________________________________________________________________*/
/*#forumHead .list { background: url('{T_IMAGESET_LANG_PATH}/header-blank.gif') no-repeat 0 16px;  }*/


/*\ Post Topic / Reply \*/
/*_________________________________________________________________________*/

.post-title { background: url('{T_IMAGESET_LANG_PATH}/post-title.gif') no-repeat; width:200px; }
.post-title2 { background: url('{T_IMAGESET_LANG_PATH}/post-title.gif') no-repeat; }
#post h1 { background: url('{T_IMAGESET_LANG_PATH}/post-subject.gif') no-repeat; }
#post h2 { background: url('{T_IMAGESET_LANG_PATH}/post-message.gif') no-repeat; }
#admin-container h1 { background: url('{T_IMAGESET_LANG_PATH}/title-admin.gif') no-repeat; }
#post li.bold { background: url('{T_IMAGESET_LANG_PATH}/button-bold.gif') no-repeat; }
#post li.italic { background: url('{T_IMAGESET_LANG_PATH}/button-italic.gif') no-repeat; }
#post li.underline { background: url('{T_IMAGESET_LANG_PATH}/button-underline.gif') no-repeat; }
#post li.list { background: url('{T_IMAGESET_LANG_PATH}/button-list.gif') no-repeat; }
#post li.tabbed-list { background: url('{T_IMAGESET_LANG_PATH}/button-tabbed-list.gif') no-repeat; }
#post li.hr { background: url('{T_IMAGESET_LANG_PATH}/button-hr.gif') no-repeat; }
#post li.pre { background: url('{T_IMAGESET_LANG_PATH}/button-pre.gif') no-repeat; }
#post li.quote { background: url('{T_IMAGESET_LANG_PATH}/button-quote.gif') no-repeat; }
.char-admin-tools { background: url('{T_IMAGESET_LANG_PATH}/account-tools.gif') no-repeat; }

/*\ Theme Switcher \*/
/*_________________________________________________________________________*/

h1.theme-title { background: url('{T_IMAGESET_LANG_PATH}/theme-select-banner.gif') no-repeat; }


/*\ Language Switcher \*/
/*_________________________________________________________________________*/
h1.language-title { background: url('{T_IMAGESET_LANG_PATH}/language-select-banner.gif') no-repeat; }


/*\ Quick Search \*/
/*_________________________________________________________________________*/

/*img#forum-menu-quicksearch { left: 203px; }
#search div.advanced-search { left: 288px;background-position:0 0;background-repeat:no-repeat }*/
img#forum-menu-quicksearch { left: 226px; }
#search div.advanced-search { left: 314px; background-position:0 0;background-repeat:no-repeat }
#search div.advanced-search a:link, #search div.advanced-search a:active, #search div.advanced-search a:visited { background-position:0 0;width: 107px; height: 17px; display:block; }
#search div.advanced-search a:hover { background-position:0 -17px; }


/*  Polls */
/*_________________________________________________________________________*/

.poll-date { top:0; left:5px; }
.deco-frame h2 { background: url('{T_IMAGESET_LANG_PATH}/poll.gif') no-repeat; }
.poll-footer input, a.vote-link { background: url('{T_IMAGESET_LANG_PATH}/button-vote.gif') no-repeat !important; }
a.result { background: url('{T_IMAGESET_LANG_PATH}/button-results.gif') no-repeat; }
a.result-inactive { background: url('{T_IMAGESET_LANG_PATH}/button-results-inactive.gif') no-repeat; }
a.vote-link-inactive, .vote-inactive { background: url('{T_IMAGESET_LANG_PATH}/button-vote-inactive.gif') no-repeat; }
.df h3 { background: url('{T_IMAGESET_LANG_PATH}/poll-results.gif') no-repeat; }


/*\ Error Handling \*/
/*_________________________________________________________________________*/

a.redirect, a.redirect:active, a.redirect:visited { display: block; background: url('{T_IMAGESET_LANG_PATH}/button-clickhere.gif') no-repeat; height: 36px; width: 200px; margin: 10px auto; }
a.redirect:hover { background-position: 0 -36px; }





/*\ DE \
img#forum-menu-quicksearch { left: 222px; }
#search div.advanced-search { background: url('{T_IMAGESET_PATH}/de_DE/forum-menu-advanced-search.gif') no-repeat 0 0; left: 307px; }

\ GB \
img#forum-menu-quicksearch { left: 203px; }
#search div.advanced-search { background: url('{T_IMAGESET_PATH}/en_GB/forum-menu-advanced-search.gif') no-repeat 0 0; left: 288px; }

\ ES \
img#forum-menu-quicksearch { left: 226px; }
#search div.advanced-search { background: url('{T_IMAGESET_PATH}/es_ES/forum-menu-advanced-search.gif') no-repeat 0 0; left: 314px; }

\ FR \
img#forum-menu-quicksearch { left: 223px; }
#search div.advanced-search { background: url('{T_IMAGESET_PATH}/fr_FR/forum-menu-advanced-search.gif') no-repeat 0 0; left: 309px; }

\ RU \
img#forum-menu-quicksearch { left: 226px; }
#search div.advanced-search { background: url('{T_IMAGESET_PATH}/ru_RU/forum-menu-advanced-search.gif') no-repeat 0 0; left: 314px; }

#search img.quicksearch-newtopic {  top: -7px; left: 42px; }

\ RU Forum Selector \
#forumHead .list { background: url('{T_IMAGESET_PATH}/ru_RU/header-blank-long.gif') no-repeat 0 16px; position: relative; left: -15px; }
select.forum-dropdown { margin-left: 0; width: auto; }*/


/* 
PBWoW.com
*/

body { background: #000000 url('{T_IMAGESET_PATH}/themes/wrath/theme-bg.jpg') repeat-x 100% 26px; }
h1.wow-logo { background: url('{T_IMAGESET_PATH}/themes/wrath/wowlogo.png') no-repeat 0 0; }
.logo-container { background: url('{T_IMAGESET_PATH}/themes/wrath/decor-left.gif') no-repeat left top !important; }
.logo-right { background: url('{T_IMAGESET_PATH}/themes/wrath/decor-right.gif') no-repeat right top !important;  }
#postbackground { background: #000 url('{T_IMAGESET_PATH}/themes/wrath/forum-tile-left.jpg') repeat-y left top; }
#postbackground .right { background: url('{T_IMAGESET_PATH}/themes/wrath/forum-tile-right.jpg') repeat-y right top; }
.bg-theme { background: url('{T_IMAGESET_PATH}/themes/wrath/single-bg.jpg') no-repeat 100% 1px; }
#header { background: url('{T_IMAGESET_PATH}/themes/wrath/top-tile.gif') repeat-x top center; }
.left-gryphon { background: url('{T_IMAGESET_PATH}/themes/wrath/gryphon-left.gif') no-repeat; }
.right-gryphon { background: url('{T_IMAGESET_PATH}/themes/wrath/gryphon-right.gif') no-repeat; }
#footerShell { background: url('{T_IMAGESET_PATH}/themes/wrath/bottom-bg.gif') repeat-x; }
.pbfooterlogo { background:url('{T_IMAGESET_PATH}/themes/wrath/bottom-blizzlogo.gif') no-repeat; width:400px; height:46px; margin:auto; }

#search {background:url('{T_IMAGESET_PATH}/themes/wrath/forumliner-bg.gif') repeat-x; }
#search div.forum-index { background:url('{T_IMAGESET_PATH}/themes/wrath/footer-forumindex-right-top.gif') no-repeat right; }
#search li.a { background:url('{T_IMAGESET_PATH}/themes/wrath/forum-menu-left.gif') no-repeat; }
#search li.b { background:url('{T_IMAGESET_PATH}/themes/wrath/forum-menu-search-bg.gif') repeat-x; }
#search li.c { background:url('{T_IMAGESET_PATH}/themes/wrath/forum-menu-search-right.gif') no-repeat; }
#search .pbsearch-left { background:url('{T_IMAGESET_PATH}/themes/wrath/forum-menu-search-left.gif'); width:12px; height:39px; border:none; }
#search .pbsearch-adv { background-image: url('{T_IMAGESET_LANG_PATH}/wrath/forum-menu-advanced-search.gif'); }
#search .pbsearch-menumid { background:url('{T_IMAGESET_PATH}/themes/wrath/forum-menu-mid.gif'); width:19px; height:39px; border:none; }

#search #pbsearch-search { background:url('{T_IMAGESET_LANG_PATH}/wrath/forum-menu-search.gif'); width:74px; height:39px; border:none; cursor:pointer; }
.tbottom,.forum-index {background:url('{T_IMAGESET_PATH}/themes/wrath/forumliner-bg2.gif') repeat-x; }
#topicheader { background: url('{T_IMAGESET_PATH}/themes/wrath/topic-bg.gif') repeat-x; }
.findex {background: url('{T_IMAGESET_PATH}/themes/wrath/footer-forumindex-right-bot.gif') no-repeat;}
.border .im1{ background: url('{T_IMAGESET_PATH}/themes/wrath/border-left.gif') repeat-y 0 0; }
.border .im2{ background: url('{T_IMAGESET_PATH}/themes/wrath/border-right.gif') repeat-y 100% 0;}
.border .im3{ background: url('{T_IMAGESET_PATH}/themes/wrath/border-top.gif') repeat-x 0 0; }
.border .im4{ background: url('{T_IMAGESET_PATH}/themes/wrath/border-bot.gif') repeat-x 0 100%; }
.border .im5{ background: url('{T_IMAGESET_PATH}/themes/wrath/border-top-left.gif') no-repeat 0 0; }
.border .im6{ background: url('{T_IMAGESET_PATH}/themes/wrath/border-top-right.gif') no-repeat 100% 0; }
.border .im7{ background: url('{T_IMAGESET_PATH}/themes/wrath/border-bot-left.gif') no-repeat 0 100%; }
.border .im8{ background: url('{T_IMAGESET_PATH}/themes/wrath/border-bot-right.gif') no-repeat 100% 100%;position:relative;z-index:9 }
.border .im8 li{ padding: 9px 0 0 15px; background: url('{T_IMAGESET_PATH}/square.gif') no-repeat 0 8px; }

#user { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bg.gif') repeat-y; }
#user div.top { background: url('{T_IMAGESET_PATH}/themes/wrath/login-top.gif') no-repeat; }
#login { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bg.gif') repeat-y; }
#login div.top { background: url('{T_IMAGESET_PATH}/themes/wrath/login-top.gif') no-repeat; }
#logoutbuttons { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bot-tile.gif') repeat-x; }
#logoutbuttons ul li.left { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bot-left.gif') no-repeat; }
#logoutbuttons ul li.mid { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bot-mid.gif') no-repeat; }
#logoutbuttons ul li.right { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bot-right.gif') no-repeat; }
#logoutbuttons ul li .pblogout { background:url('{T_IMAGESET_LANG_PATH}/wrath/login-bot-logout.gif'); width:97px; height:42px; border:none; cursor:pointer; }
#logoutbuttons ul li .pboptions { background:url('{T_IMAGESET_LANG_PATH}/wrath/login-bot-options.gif'); width:98px; height:42px; border:none; cursor:pointer; }
#loginbuttons { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bot-tile.gif') repeat-x; }
#loginbuttons ul li.left { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bot-left.gif') no-repeat; }
#loginbuttons ul li.mid { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bot-mid.gif') no-repeat; }
#loginbuttons ul li.right { background: url('{T_IMAGESET_PATH}/themes/wrath/login-bot-right.gif') no-repeat; }
#loginbuttons ul li .pblogin { background:url('{T_IMAGESET_LANG_PATH}/wrath/login-bot-login.gif') no-repeat; width:97px; height:42px; border:none; cursor:pointer; }
#loginbuttons ul li .pbfaq { background:url('{T_IMAGESET_LANG_PATH}/wrath/login-bot-help.gif'); width:98px; height:42px; cursor:pointer; }
#forumHead .list { background: url('{T_IMAGESET_LANG_PATH}/wrath/header-blank.gif') no-repeat; }





/*#forumHead li.title a.index:active,#forumHead li.title a.index:visited,#forumHead li.title a.index { font:12px/18px Georgia, "Times New Roman", serif;color:#ffb019 }
#forumHead li.title a.index:hover {color:white}*/
#login,#login div.top,#loginbuttons{ width: 235px; }
#login,#user {background-repeat:no-repeat !important;background-position:0 15px !important;}	
#user {height:100px}
#login div.textfields { margin: 0 0 0 25px;}
#login span { font:14px/20px Georgia, "Times New Roman", Times, serif;color:#c3e0f9}
#portrait div.shell {margin: 7px 0 0 25px;}
#user div.body { width: 120px; }
#logoutbuttons div.iconPosition {top: -23px; left: 69px;  }

.indexbg { background: #000000 url('{T_IMAGESET_PATH}/themes/wrath/custom-index/index-bg0.jpg') no-repeat 50% 119px; }
.indexbg-bg1 { background:transparent url('{T_IMAGESET_PATH}/themes/wrath/custom-index/index-bg1.jpg') no-repeat scroll 0 0; width:713px; height:550px; position:absolute; left:-713px; top:0px; }
.indexbg-bg2 { background:transparent url('{T_IMAGESET_PATH}/themes/wrath/custom-index/index-bg2.jpg') no-repeat scroll 0 0; width:712px; height:550px; position:absolute; left:775px; top:0px; }
.indexbg-extra1 { background: url('{T_IMAGESET_PATH}/themes/wrath/custom-index/extra.gif') no-repeat scroll 0 0; width:150px; height:76px; position:absolute; left:-175px; top:-76px; z-index:6010; }

.adbg {background:url('{T_IMAGESET_PATH}/themes/wrath/ad-bg.jpg') repeat-x 0 0}

/* Top Nav Styling */
#shared_topnav { background: #072540 url('{T_IMAGESET_PATH}/themes/wrath/topnav-bg.gif') 50% 0;  }
.topnav { background: url('{T_IMAGESET_PATH}/themes/wrath/topnav-bg2.gif') no-repeat 50% 0; }

/* inner corners */

span.portal-corners-top-inner {
	margin: 0 -5px;
}

span.portal-corners-bottom-inner {
	margin: 0 -5px;
	clear: both;
}

span.portal-corners-top-inner, span.portal-corners-bottom-inner{
	font-size: 1px;
	line-height: 1px;
	display: block;
	height: 5px;
	background-repeat: no-repeat;
}

/* main menu, user menu and the links */

.portal-navigation{
width: auto;
}

.portal-navigation ul{
list-style-type: none;
margin: 0;
padding: 0;
margin-bottom: 8px; /*bottom spacing between each UL and rest of content*/
}

.portal-navigation ul li{
padding-bottom: 2px; /*bottom spacing between menu items*/
}

.portal-navigation ul li a{
/*background-image: url("{T_THEME_PATH}/images/portal/arrowbullet.gif");*/
background-repeat: no-repeat;
background-position: center left; /*custom bullet list image*/
display: block;
padding: 2px 0;
padding-left: 19px; /*link text is indented 19px*/
font-weight: bold;
/*font-size: 90%;*/
}

.portal-navigation div.menutitle{
padding: 1px 0;
font: bold 90% 'Trebuchet MS', 'Lucida Grande', Arial, sans-serif;
font-size: 12px;
}



/* For PBWoW Portal */
.indexingportal { clear:both;color:#e5e5e5;font:11px/14px Arial, Helvatica, sans-serif;padding:0 }
.indexingportal table {border:0;padding:0;margin:0;border-collapse:collapse}
.indexingportal td {background:black url('{T_IMAGESET_PATH}/forum-list-sep.gif') no-repeat 50% 100%}
.indexingportal td {vertical-align:top;border:6px solid black;/*cursor:pointer*/}
.indexingportal ul.forums td:hover {background:#14171b}
.indexingportal span {font-size:11px;color:#909090;}
/*.indexingportal h3 {margin:0;padding:0;font:12px/18px Arial, Helvatica, sans-serif}*/
.indexingportal h3 a {font-weight:bold;text-decoration:none}
.indexingportal p {margin:0;padding:4px 0}

.indexingportal h3, .indexingportal li.header dl dt {color:#FFF; font-size:18px; letter-spacing:-1px; margin:0; padding-bottom:8px; text-align:left; font-family:Arial,Helvetica,sans-serif; font-weight:bold; text-transform:uppercase;}
.indexingportal h3, .indexingportal li.header dl dt a {color:#FFF; font-weight:bold;text-decoration:none}

.indexingportal .portal-navigation ul li{ padding: 0 0 3px 0; background: url('{T_IMAGESET_PATH}/square.gif') no-repeat 0 3px; font-size:12px;}
.border .im8 .indexingportal ul.topiclist li{ padding: 0; background: none; }
.indexingportal dd { margin-left: 0; }
.indexingportal ul.forums { background:none; background-image:none; }";s:10:"theme_path";s:11:"pbwow_wotlk";s:10:"theme_name";s:11:"pbwow_wotlk";s:11:"theme_mtime";s:10:"1258932377";s:11:"imageset_id";s:1:"3";s:13:"imageset_name";s:5:"pbwow";s:18:"imageset_copyright";s:28:"&copy; PayBas 2010 PBWoW.com";s:13:"imageset_path";s:5:"pbwow";s:13:"template_path";s:11:"pbwow_wotlk";}}