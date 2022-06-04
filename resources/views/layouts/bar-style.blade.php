    <style>
  *{
font-family: 'Nunito', sans-serif;
margin:0;
left:0%;
padding:0;
box-sizing: border-box;
text-decoration: none;
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
   z-index:1;
}
html {
scroll-behavior:smooth;
scroll-padding-top: 5rem;
overflow-x: hidden;
}

.logo{
  float: left;
  padding: 20px 0;
}

.logo img{
  height: 50px;
}

.navigation-menu{
  display: flex;
  align-items: center;
  min-height: 90px;

}

.navigation-menu a{
  margin-left: 20px;
  color: white;
  text-transform: uppercase;
  font-size: 14px;
  padding: 0;
  border-radius: 6px;
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
  margin-left: 10px;
  float: right;
  height: 60px;
  line-height: 70px !important;
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

    </style>