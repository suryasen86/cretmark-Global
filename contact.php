<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/SingleService.css">
</head>
<style>
    .right{
        margin-top: -137px;
    }
    .service-page-frist-section div h1 {
    align-items: flex-start;
    font-style: normal;
    font-weight: 600;
    font-size: 84px;
    line-height: 120.5%;
    color: #F1EEE9;
}
.inner-left-div {
    margin-top: 120px;
    margin-right: 55px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.inner-left-div >h2{
    font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 48px;
line-height: 154.5%;
/* or 74px */

display: flex;
align-items: center;

color: #1E2E34;
}
.inner-left-div>p{
    font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 154.5%;
/* or 28px */

display: flex;
align-items: center;

color: #3F5964;
}
.inner-right-div>img{
    width: 505px;
height: 593px;
;
}
.contact-form{
    display: flex;
    margin-top: 20px;
    flex-direction: column;
}
.contact-form>input,.contact-form>textarea{
    padding: 10px 30px;
    width: 400px;
    margin: 5px 0px;
    background:#d3d3d3;
    border: 1px solid #C4C4C4;
    box-sizing: border-box;
    resize: none;

;
}
.any-dox{
    color: #41447B;
    border: 1px solid #41447B;
    box-sizing: border-box;
    width: 49%;
    background-color: #d3d3d3;
    padding: 6px 0px ;
    height: 45px;

}
.send-button{
    margin-top: 6px;
    height: 45px;
 text-align: center;
background: #B72851;
color: #FFFFFF;
}
.sectionoffieces{
    margin-top: 110px;
}
.sectionoffieces>h2{
    margin-left: 164px;
    font-weight: 600;
font-size: 48px;
line-height: 154.5%;
/* or 74px */

display: flex;
align-items: center;

/* m */

color: #1E2E34;

}
.officesdiv{
    margin-top: 100px;
    padding: 0px 104px;
    display: flex;
    justify-content: center;
    /* align-content: center; */
}
.officesdiv div{
    width: 33%;
    margin: 0px 35px;
}
 
.officeinnersection >h3{
    text-align: center;
    font-weight: 600;
}
.officeinnersection >h4{
    font-weight: 200;
    text-align: center;
}
.officeinnersection>img {
    width: 350px;
height: 235px;
border: 1px solid #41447B;
box-sizing: border-box;
margin-top: 60px;
}
@media screen and (max-width: 580px) {
.service-page-frist-section div h1 {
    
    text-align: center;
    font-style: normal;
    font-weight: 600;
    font-size: 26px;
    line-height: 120.5%;
    color: #F1EEE9;
}
.inner-left-div {
    margin-top: 20px;
    margin-right:0px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.inner-left-div > h2 {
    font-family: Poppins;
    font-style: normal;
    font-weight: 600;
    font-size: 34px;
    line-height: 154.5%;
    display: flex;
    align-items: center;
    color: #1E2E34;
}

.inner-left-div > p {
    font-family: Poppins;
    font-style: normal;
    font-weight: 600;
    font-size: 10px;
    line-height: 154.5%;
    display: flex;
    align-items: center;
    color: #3F5964;
}
.contact-form {
    justify-content: center;
    align-items: center;
}
.contact-form > input, .contact-form > textarea {
    padding: 10px 30px;
    width: 400px;
    margin: 5px 0px;
    background: #d3d3d3;
    border: 1px solid #C4C4C4;
    box-sizing: border-box;
    resize: none;
    width: 80%;
}
.right {
    margin-top: 0px;
}

 
.send-button {

    margin-top: 6px;
    height: 45px;
    text-align: center;
    background: #B72851;
    color: #FFFFFF;
    width: 82%;
}
.inner-right-div img {
    margin-top: 52px;
}
.inner-right-div img {
    width: 70%;
    height: 76%;
}
.sectionoffieces{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.sectionoffieces > h2 {
    display: flex;
    justify-content: center;
    text-align: center;
    font-weight: 600;
    font-size: 48px;
    margin-left: 0px;
    line-height: 154.5%;
    
    align-items: center;
    color: #1E2E34;
}
.officesdiv{
    flex-direction: column;
    padding: 0px;
}
.officesdiv div {
    width: 100vw;
    margin:30px  0px ;
}
.officeinnersection {
    /* margin-top: 130px; */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.officeinnersection > img {
   
    width: 350px;
    height: 235px;
    border: 1px solid #41447B;
    box-sizing: border-box;
    margin-top: 10px;
}
.officesdiv {
    margin-top: 0px;
    
   
}
}
</style>
<body onload="myFunction()"> 
    <div id="loading"></div>
    <?php require './Navbar.php'; ?>
    <section>
        <div class="service-page-frist-section"> 
          <div>
            <h1>
                Let’s create something awesome together.
            </h1>
          </div>
        </div>
    </section>

    <section>
        <div class="check">
            <div class="left">
                <div class="inner-left-div">
                    <h2>Let’s work Together.  </h2>
                    <p>Tell us about your goals, and we'll get back to you right away!
                    </p>

                    <form class="contact-form">
                            <input type="text" name="" placeholder="Name" id="" required>
                            <input type="email" name="" placeholder="E-mail" id="" required>
                            <input type="text" name="" placeholder="Phone" id="" required>
                            <label for="" > Please tell us a bit about your project</label>
                             <textarea name=""   id="" cols="30" rows="5" >
                            
                             </textarea>

                             <button class="any-dox">Any Doc to attach?</button>
                             <button type="submit" class="send-button"> SEND</button>
                        
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="inner-right-div">
                    <img src="./assets/images/contact.png" alt="">
                    
                </div>
            </div>
        </div>
    </section>


<!-- offices -->
    <section  class="sectionoffieces">
        <h2> Offices</h2>
        <div class="officesdiv">
                <div class="officeinnersection">
                    <h3>Canada</h3>
                    <h4>3891 Ranchview Dr. Richardson, California 62639</h4>
                    <img src="./assets/images/office/canada.png" alt="">
                </div>
                <div class="officeinnersection ">
                    <h3>India</h3>
                    <h4>3891 Ranchview Dr. Richardson, California 62639</h4>
                    <img  src="./assets/images/office/india.png" alt="">
                </div>
                <div class="officeinnersection">
                    <h3>Singapore</h3>
                    <h4>3891 Ranchview Dr. Richardson, California 62639</h4>
                    <img src="./assets/images/office/singapore.png" alt="">
                </div>
        </div>
    </section>
    <?php require './Footer.php'; ?>
</body>
</html>