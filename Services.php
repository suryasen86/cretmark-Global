<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/service.css">
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body onload="myFunction()"> 
<div id="loading"></div>
<?php require './Navbar.php'; ?>
    <section>
        <div class="service-page-frist-section"> 
          <div>
            <h1>
                Services
            </h1>
          </div>
        </div>
    </section>
    <section class="service-page-second-section">
        <div class="check">
            
            <div class="left">
                <div class="s1">
                    <img  class="img-responsive"   src="./assets/images/branding.png" alt="branding">
                    <div id="service-header">
                        <h2>Branding</h2>
                        <div>
                            <a href="/Branding&Pr.php">Learn more <img class="arrow" src="./assets/images/arrow.png" alt=""></a>
                        </div>
                    </div>
                    <p>Branding is the process of creating a unique name and image for your product or service in the minds of potential customers. We make sure that when people see your brand, they think of you first and you stand out from competitors and make sales an effortless task.</p>
                </div>
                
                <div class="s1">
                    <img  class="img-responsive"  src="./assets/images/ppc.png" alt="branding">
                    <div id="service-header">
                        <h2>PPC</h2>
                        <div>
                            <a href="./PayPerClick.php">Learn more <img class="arrow" src="./assets/images/arrow.png" alt=""></a>
                        </div>
                    </div>
                    <p>PPC, one of the most underutilized marketing strategies, vests in itself a colossal power to fetch you leads and high ROI. Our effective PPC campaign targets people who are looking for what you offer and drive them straight to your website so that they can engage with you instead of someone else. </p>
                </div>
                <div class="s1">
                    <img  class="img-responsive"  src="./assets/images/seo.png" alt="branding">
                    <div id="service-header">
                        <h2>SEO</h2>
                        <div>
                            <a href="/SearchEngineOptimization.php">Learn more <img class="arrow" src="./assets/images/arrow.png" alt=""></a>
                        </div>
                    </div>
                    <p>By hiring our SEO services, you can obtain a high-ranking placement in organic search results. We implement specific successful strategies to improve your website's content quality and relevance and build links from other websites back to yours. 
                    </p>
                </div>
            </div>
            <div class="right">
                <div class="s1">
                    <img class="img-responsive"   src="./assets/images/webdev.png" alt="branding">
                    <div id="service-header">
                        <h2>Web Design & Development</h2>
                        <div>
                            <a href="./WebDevelopment.php">Learn more <img class="arrow" src="./assets/images/arrow.png" alt=""></a>
                        </div>
                    </div>
                    <p>Web design and development is an art that makes your website spectacular through the means of creativity, technical knowledge and attention to detail. Our created website is a complete package ranging from an idea to its final form, including the look and feel, user interface (UI), usability, and accessibility.

                    </p>
                </div>
                <div class="s1">
                    <img class="img-responsive"  src="./assets/images/smm.png" alt="branding">
                    <div id="service-header">
                        <h2>Social Media Management</h2>
                        <div>
                            <a href="./SocialMediaManagement.php">Learn more <img class="arrow" src="./assets/images/arrow.png" alt=""></a>
                        </div>
                    </div>
                    <p>Our team of SMM experts has in-depth years of experience working with some of the biggest social media brands like Facebook, Twitter, Linked In, Pinterest, Instagram, etc. We understand why each platform unique and how they all work together, so we create a cohesive strategy across all channels.
                        </p>
                </div>
                <div class="s1 extra-margin-bottom">
                    <img class="img-responsive" src="./assets/images/ui.png" alt="branding">
                    <div id="service-header">
                        <h2>UI/UX Design </h2>
                        <div>
                            <a href="./UIUX.php">Learn more <img class="arrow" src="./assets/images/arrow.png" alt=""></a>
                        </div>
                    </div>
                    <p>UI/UX is a very crucial aspect of your Mobile & Web applications. If you want to increase conversions on your website or application, you need to invest in User Interface and User Experience design services. By improving the usability and accessibility of your product, we enhance user satisfaction. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php require './Footer.php'; ?>
</body>
</html>