<main id="main">
    <section class="about">
        <div class="container">
            <div class="row">
                <h1>Welcome</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis corporis ipsa distinctio quis ipsam iure perferendis error, ducimus, natus illo. Aliquam ab quae laboriosam nihil eum in accusantium! Sapiente.</p>  
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="content">
                    <?php foreach($data['categories'] as $value): ?>
                        <div class="item">
                            <a href=""><?= $value['title'] ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <div class="news-items">
                    <div class="item">
                        <div class="img" style="background-image: url('https://www.gettyimages.com/gi-resources/images/500px/983794168.jpg')"></div>
                        <div class="content">
                            <h2>News 1</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="">View</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img" style="background-image: url('https://www.onceuponapicture.co.uk/wp-content/uploads/2019/02/46456227_2504829799542273_7554593422053474304_o-700x525.jpg')"></div>
                        <div class="content">
                            <h2>News 1</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="">View</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img" style="background-image: url('https://www.onceuponapicture.co.uk/wp-content/uploads/2019/01/Daniele-Bianchin-above-the-sky-700x394.png')"></div>
                        <div class="content">
                            <h2>News 1</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</main>