<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom-blog-page.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata|Space+Mono:700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <script src="js/blog-page.js"></script>
    <title>Blogpage</title>
    <style>
      body {
        position: relative;
        /* overflow: hidden;
        max-height: 100vh; */
      }
      .overlay-first {
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
        top: 0%;
        z-index: 9;
        background-color: black;
      }
      .overlay-second {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0%;
        z-index: 8;
        background-color: red;
      }
    </style>
</head>
<body>
  <div class="overlay-first"></div>
  <div class="overlay-second"></div>
  
<main>
  <div class="logo-container"><a href="index.php" class="homepage-redirector"><img src="res/new-logo.png" alt="Home logo" class="home-logo"></a></div>
  <section class="previews">
    <div>
      <figure class="absolute-bg preview__img" style="background-image: url('res/zyro.png');"></figure>
      <figure class="absolute-bg preview__img" style="background-image: url('https://unsplash.it/2000/1200?image=433'); width: 60%;"></figure>
      <figure class="absolute-bg preview__img" style="background-image: url('https://unsplash.it/2000/1200?image=40');"></figure>
      <figure class="absolute-bg preview__img" style="background-image: url('res/special-images/1.jpg');"></figure>    
      <div class="previews__container">
        <span>Welcome to</span>
        <h1>Web</h1>
      </div>
      <div class="tab tech-tab">
      <?php include 'partials/technologies-bloc.php' ?>
    </div>
    </div>

    <div class="tab-container">
      <div class="tab">
        <ul itemscope itemtype="http://schema.org/Blog">    
          <li class="preview" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
            <a class="preview__link" href="#" itemprop="url">
              <!-- <span class="preview__date" itemprop="datePublished" datetime="2016-09-08T00:00:00-07:00">Sep 8, 2016</span> -->
              <h2 class="preview__header" itemprop="name">Description</h2>
              <p class="preview__excerpt" itemprop="description">Banh mi pug you probably haven’t heard of them occupy, drinking vinegar humblebrag vinyl locavore master cleanse sartorial bicycle rights 90’s kickstarter hashtag. 3 wolf moon XOXO man braid chartreuse....</p>
              <!-- <span class="preview__more">Read More</span> -->
            </a>
          </li>
      </ul>
    </div>
  </section>
  <section class="previews">
    <div>
      <figure class="absolute-bg preview__img" style="background-image: url('res/zyro.png');"></figure>
      <figure class="absolute-bg preview__img" style="background-image: url('https://unsplash.it/2000/1200?image=433'); width: 60%;"></figure>
      <figure class="absolute-bg preview__img" style="background-image: url('https://unsplash.it/2000/1200?image=40');"></figure>
      <figure class="absolute-bg preview__img" style="background-image: url('res/special-images/2.jpg');"></figure>    
      <div class="previews__container">
        <span>Welcome to</span>
        <h1>Web</h1>
      </div>
      
    </div>

    <div class="tab-container">
      <div class="tab">
        <ul itemscope itemtype="http://schema.org/Blog">    
          <li class="preview" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
            <a class="preview__link" href="#" itemprop="url">
              <!-- <span class="preview__date" itemprop="datePublished" datetime="2016-09-08T00:00:00-07:00">Sep 8, 2016</span> -->
              <h2 class="preview__header" itemprop="name">Description</h2>
              <p class="preview__excerpt" itemprop="description">Banh mi pug you probably haven’t heard of them occupy, drinking vinegar humblebrag vinyl locavore master cleanse sartorial bicycle rights 90’s kickstarter hashtag. 3 wolf moon XOXO man braid chartreuse....</p>
              <!-- <span class="preview__more">Read More</span> -->
            </a>
          </li>
      </ul>
    </div>
  </section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
  <script>
    var t1 = new TimelineMax();
    t1.to(".overlay-first",1,{
      left: "-100%",
      ease: Expo.easeInOut
    })
    t1.to(".overlay-second",1,{
      left: "-100%",
      delay: -0.8,
      ease: Expo.easeInOut
    }) 
</script> 
</body>
</html>

