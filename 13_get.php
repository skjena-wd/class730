<div class="cf-1" id="cf-1">
    <h2>Contact Form</h2>
    <form action="process.php" method="get">
        <p>
            <input type="text" name="cf_name" required id="" placeholder="Name *" >
        </p>
        <p><input type="email" name="cf_mail" required id="" placeholder="Email *" ></p>
        <p><input type="tel" name="cf_phone" required id="" placeholder="Phone *"></p>
        <input type="submit" value="Send">
    </form>
</div>


<style>
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
}

div#cf-1 {
    width: 700px;
    background: aqua;
    text-align: center;
}

input[type="text"], input[type="email"], input[type="tel"]  {
    width: 70%;
    height: 40px;
    border: 1px solid #CECECE;
    padding: 6px;
    font-size: 15px;
}


input[type="submit"] {
    display: inline-block;
    width: 150px;
    height: 40px;
    text-transform: uppercase;
    font-size: 18px;
    background: #f90000;
    color: #ECECEC;
    border: 1px solid #ECECEC;
    border-radius: 6px;
    cursor: pointer;
}
</style>