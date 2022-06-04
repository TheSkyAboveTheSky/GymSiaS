<style>
  *{
font-family: 'Nunito', sans-serif;
margin:0;
padding:0;
box-sizing: border-box;
text-decoration: none;
outline:none;
border:none;
transition: all .1s linear;
}
html {
scroll-behavior:smooth;
scroll-padding-top: 5rem;
overflow-x: hidden;
}
.header a {
text-decoration: none;
}
.header {
   position:fixed;
   top:0;
   left:0;
   right:0;
   display:flex;
   align-items:center;
   justify-content:space-between;
   padding:0%;
   background:black;
   width:100%;
   font-size: 80%;
}
.header .logo{
   font-weight:bolder;
   color:azure;
   font-size: 3rem;
}
.header .logo span {
color:red;
}

.topnav a {
float:center;
display: inline-block;
color: azure;
padding: 1.5rem 2rem;

}

.topnav a:hover {
background-color: crimson;
}

.topnav a.active {
background-color: crimson;
color: black;
}

.topnav .icon {
display: none;
}

@media screen and (max-width: 991px) {
.topnav a:not(:first-child) {display: none;}
.topnav a.icon {
 float: right;
 display: block;
}
}

@media screen and (max-width: 991px) {
.topnav.responsive {position: relative;}
.topnav.responsive .icon {
 position: absolute;
 right: 0;
 top: 0;
}
.topnav.responsive a {
 float:none;
 display: block;
 text-align: left;
}
}
</style>
{{-- <style>
   *{
font-family: 'Nunito', sans-serif;
margin:0;
padding:0;
box-sizing: border-box;
text-decoration: none;
outline:none;
border:none;
transition: all .1s linear;
 }
 
 header{
 height: 90px;
 background: #2f3640;
 }
 
 .inner-width{
 max-width: 1000px;
 padding: 0 10px;
 margin: auto;
 }
 
 .logo{
 float: left;
 padding: 20px 0;
 }
 
 .logo img{
 height: 50px;
 }
 
 .navigation-menu{
 float: right;
 display: flex;
 align-items: center;
 min-height: 90px;
 }
 
 .navigation-menu a{
 margin-left: 10px;
 color: #ddd;
 text-transform: uppercase;
 font-size: 14px;
 padding: 12px 20px;
 border-radius: 4px;
 transition: .3s linear;
 }
 
 .navigation-menu a:hover{
 background: #fff;
 color: #2f3640;
 transform: scale(1.1);
 }
 
 .navigation-menu i{
 margin-right: 8px;
 font-size: 16px;
 }
 
 .home{
 color: #ff6b6b;
 }
 
 .about{
 color: #0abde3;
 }
 
 .works{
 color: #feca57;
 }
 
 .team{
 color: #5f27cd;
 }
 
 .contact{
 color: #1dd1a1;
 }
 
 .menu-toggle-btn{
 float: right;
 height: 90px;
 line-height: 90px !important;
 color: #fff;
 font-size: 26px;
 display: none !important;
 cursor: pointer;
 }
 
 
 @media screen and (max-width:991px) {
 .menu-toggle-btn{
 display: block !important;
 }
 
 .navigation-menu{
 position: fixed;
 width: 100%;
 max-width: 400px;
 background: #172b4d;
 top: 90px;
 right: 0;
 display: none;
 padding: 20px 40px;
 box-sizing: border-box;
 }
 
 .navigation-menu::before{
 content: "";
 border-left: 10px solid transparent;
 border-right: 10px solid transparent;
 border-bottom: 10px solid #172b4d;
 position: absolute;
 top: -10px;
 right: 10px;
 }
 
 .navigation-menu a{
 display: block;
 margin: 10px 0;
 }
 
 .navigation-menu.active{
 display: block;
 }
 }
 
 </style> --}}