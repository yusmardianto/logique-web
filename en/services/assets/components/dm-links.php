<style>
.dm__links .links__item {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    background-size: cover;
    height: 425px;
    overflow: hidden;
    border-radius: 8px;
    padding: 25px;
    color: #000;
}

.dm__links .links__item::before {
    content: "";
    position: absolute;
    bottom: -65px;
    left: 50%;
    background-color: rgba(255, 202, 0, .6);
    width: calc(100% + 50px);
    height: 240px;
    z-index: 0;
    transform: rotate(8deg) translateX(-50%);
}

.dm__links .links__item::after {
    content: "";
    position: absolute;
    bottom: 13px;
    right: -20px;
    background-color: #000;
    width: 58px;
    height: 58px;
    border-radius: 100%;
}

.dm__links .links__item > div {
    z-index: 0;
}

.dm__links .links__item h3 {
    position: relative;
    width: max-content;
}

.dm__links .links__item h3:after {
    position: absolute;
    content: "";
    height: 100%;
    width: 22px;
    top: 50%;
    left: calc(100% + 20px);
    transform: translateY(-45%);
    background: url('/en/services/digital-marketing/img/img-digital-marketing/arrow-right.svg') center/contain no-repeat;
}

.dm__links .links__item  p {
    font-size: 16px;
}
</style>

<section class="dm__links">
    <div class="container__">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="links__item" style="background-image: url('/en/services/assets/img/img-digital-marketing/material-bg.png')">
                    <div>
                        <h3>About</h3>
                        <p>A streamlined web app that helps you create and collaborate in real-time on wireframes, mockups, diagrams and prototypes. </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="links__item" style="background-image: url('/en/services/assets/img/img-digital-marketing/material-bg.png')">
                    <div>
                        <h3>Our Work</h3>
                        <p>A streamlined web app that helps you create and collaborate in real-time on wireframes, mockups, diagrams and prototypes.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="links__item" style="background-image: url('/en/services/assets/img/img-digital-marketing/material-bg.png')">
                    <div>
                        <h3>FAQ</h3>
                        <p>A streamlined web app that helps you create and collaborate in real-time on wireframes, mockups, diagrams and prototypes.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>