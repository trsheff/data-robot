<?php
/* Template Name: Data Robot Test Task */
?>
<?php wp_head();?>
<body>
<heder>
    <div class="container">
        <div class="header">
            <div class="header__logo">
                <a href="https://www.datarobot.com/">
                    <img src="img/Logo.png" alt="logo">
                </a>
            </div>
            <div class="header__slogan">
                <p>Real-Life Machine Learning. As Real as it Gets.</p>
            </div>
        </div>
    </div>
</heder>
<div class="container">
    <div class="main-content">
        <div class="main-content__txt">
            <h1>Practical Machine Learning and AI with World-Class Data Scientists</h1>
            <p class="main-content__txt-p1">A development program for Ukrainian Software Engineers, Data Engineers, Data
                Scientists of all skill
                levels.</p>
            <p class="main-content__txt-p2">We need people like you to help us grow further. We offer a training program
                where you will be involved
                in customer-oriented
                Data Science activities, development of the DataRobot platform, or creating public-facing DS
                content.</p>
        </div>
        <div class="main-content__form">
            <div class="main-content__form-cn">
                <form action="http://httpbin.org/post" id="info-form" method="post">
                    <input type="text" name="user" placeholder="Full name">
                    <input name="email" data-validation="email required" placeholder="Email">

                    <input name="position" data-validation="required" placeholder="Current position">
                    <input name="current-expertise" data-validation="required" placeholder="What is your current expertise in Data Science?">

                    <textarea name="interest" id="interest" data-validation="required"
                              placeholder="Why are you interested in this program and what would you like to achieve?"></textarea>
                    <input type="submit" value="Sign up for the program for free">
                </form>
            </div>
        </div>
    </div>
    <div class="middle-content">
        <p>At DataRobot, having machine learning in production is what our product is about. Hundreds of high-profile organizations across the world use our models every day and base their business operations on them.</p>
    </div>
    <div class="bottom-content">
        <div class="b__title">
            <h3>Why you will benefit from the program</h3>
        </div>
        <div class="bottom-content__wrap">
            <div class="bottom-content__wrap-item">
                <img src="img/004-industry.png" alt="">
                <p>We know how to operationalize Machine Learning in the real world and ready to share this knowledge with you</p>
            </div>
            <div class="bottom-content__wrap-item">
                <img src="img/004-industry.png" alt="">
                <p>We know how to operationalize Machine Learning in the real world and ready to share this knowledge with you</p>
            </div>
            <div class="bottom-content__wrap-item">
                <img src="img/004-industry.png" alt="">
                <p>We know how to operationalize Machine Learning in the real world and ready to share this knowledge with you</p>
            </div>
            <div class="bottom-content__wrap-item">
                <img src="img/004-industry.png" alt="">
                <p>We know how to operationalize Machine Learning in the real world and ready to share this knowledge with you</p>
            </div>
        </div>
    </div>
</div>
<footer>THE BEST FOOTER! Just believe me)))</footer>
</body>

<?php wp_footer(); ?>
