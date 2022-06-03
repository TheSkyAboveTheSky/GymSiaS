<style>
  *{
font-family: 'Nunito', sans-serif;
margin:0;
padding:0;
box-sizing: border-box;
text-decoration: none;
outline: none;
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
float:left;
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
 float: none;
 display: block;
 text-align: left;
}
}
</style>