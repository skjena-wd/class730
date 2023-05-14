<header class="section-header">
   <div class="container">
      <div class="logo">LOGO</div>
      <div class="site-nav">
         <ul>
            <li><a href="#" target="_blank">Home</a></li>
            <li><a href="#" target="_blank">About</a></li>
            <li><a href="#" target="_blank">Services</a></li>
            <li><a href="#" target="_blank">Career</a></li>
            <li><a href="#" target="_blank">Contact</a></li>
         </ul>
      </div>
   </div>
</header>


<style>
* {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   list-style: none;
}   
header.section-header {
    width: 100%;
    height: auto;
    background: #ececec;
    min-height: 100px;
    display: flex;
    align-items: center;
}

.container {
    width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
}
.logo {
    font-size: 50px;
    color: #9f0000;
}
.site-nav {
    display: flex;
    align-items: center;
}
.site-nav ul {
    display: flex;
}

.site-nav a {
    font-size: 18px;
    text-decoration: none;
    padding: 0 15px;
    text-transform: uppercase;
}

footer.section-footer {
    display: flex;
    width: 100%;
    height: 50px;
    background: #000;
    color: #fff;
    text-align: center;
    align-items: center;
}
p.text-center {
    width: 100%;
    text-align: center;
}
</style>