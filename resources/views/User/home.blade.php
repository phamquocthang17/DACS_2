<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>


    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />

    <!-- custom css file link -->
    <link rel="stylesheet" href="/template/User/dist/css/main.css" />
    <link rel="stylesheet" href="/template/User/dist/css/swiper-bundle.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>

  <body>
    <header>
      
      <input type="checkbox" name="" id="toggler" >
      <label for="toggler" class="fas fa-bars"></label>
      <div class="logo">
        <a href="{{ route('home') }}">GREEN GARDEN</a>
      </div>
      <nav class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{route('info')}}">Endangered Animals</a>
        <a href="{{route('blog')}}">Posts</a>
        <a href="{{route('EA')}}">Education & Awareness</a>
        <a href="#contact">Contact Us</a>
      </nav>

      <div class="login" id="loginLinks">
  <ul>
    <li>
      <a href="#" onclick="toggleLoginMenu()" class="user-link">
        <i class="fas fa-user" style="border-radius: 50%; background-color: #ddd; padding: 10px; font-size: 15px;"></i>
        <span>{{ Auth::user()->name }}</span>
      </a>
    </li>
  </ul>
  <div class="login-menu" id="loginMenu" style="display: none;">
    <ul>

      <form action="{{ route('logout') }}" method="POST" style="display: inline;">   
          @csrf
          <button type="submit" class="btn btn-link text-white p-0" style="font-size: 14px; text-decoration: none;">
            <i class="fas fa-sign-out-alt"></i> Logout
          </button>
        </form>
    </ul>
  </div>
</div>

    </header>

    <!-- header section end -->

    <!-- home section starts -->
    <section class="home" id="home">
      <div class="content">
        <h3>Protect Our Animals</h3>
        <span>Love Them, Save Them, Make a Difference!</span>
        <p>
          Animals are vital to our world. By protecting them, we are
          safeguarding our future. Learn how you can help preserve these amazing
          creatures and their habitats!
        </p>
        <a href="{{route('EA')}}" class="btn">Visit us to know more</a>
      </div>
    </section>

    <!-- home section end -->
    <!-- about secsion stars -->
    <section class="about" id="about">
      <h1 class="heading">
        <span>Everyone's Mission</span> to Protect Wildlife
      </h1>
      <div class="row">
        <div class="video-container">
          <video src="/template/User/dist/images/rename.mov" loop autoplay muted></video>
          <h3>Dedicated to Animal Protection</h3>
        </div>
        <div class="content">
          <h3>Why Protect Animals?</h3>
          <p>
            Protecting animals, especially endangered species, is crucial for
            maintaining the balance of ecosystems. Every species plays a vital
            role in the web of life, and their extinction can lead to
            irreversible consequences for both nature and humanity.
          </p>
          <p>
            By safeguarding animals, we are also preserving biodiversity,
            ensuring the survival of countless other species and the health of
            our planet. Protecting wildlife means protecting the future of our
            environment and the well-being of future generations.
          </p>

          <a href="{{route('EA')}} " class="btn">Learn More About Our Mission</a>
        </div>
      </div>
    </section>

    <!-- Post  -->
    <form form action="" method="POST" enctype="multipart/form-data">
    <div class="postt">
      <div class="post">
        <h2 class="head_blog">FOLLOW US ON INSTAGRAM</h2>
        <div class="blog">
          <div class="blog-carousel">

  
    @foreach ($post as $post)
        <div class="blog-card">
            <div class="blog-image-container">
                <img src="{{ $post->images }}" alt="Ảnh 1" />
            </div>
            <div class="blog-content">
                <h3>{{ $post->title }}</h3>
                <p class="blog-description">{!! \Illuminate\Support\Str::words($post->excerpt, 20, '...') !!}</p>
            </div>
            <p>{{ $post->created_at->format('d M Y') }}</p>
            <a href="{{route('post_page',['id' => $post->id])}}" class="blog-view-more">View More</a>
        </div>
    @endforeach

    






          </div>
          <span class="blog-arrow blog-arrow-left" onclick="prevSlide()"
            >&#10094;</span
          >
          <span class="blog-arrow blog-arrow-right" onclick="nextSlide()"
            >&#10095;</span
          >
        </div>
      </div>
    </div>



    </form>
    <!-- post end  -->

    <!-- about secsion end -->

    <section class="activity">
      <h1 class="heading"><span>activities</span></h1>
      <div class="row">
        <div class="activity-col">
          <img src="/template/User/dist/images/act1.jpeg" alt="" />
          <h1>Endangered Animals</h1>
          <div class="layer">
            <h3>
              Many species around the world are facing extinction due to habitat
              loss
            </h3>
          </div>
        </div>
        <div class="activity-col">
          <img src="/template/User/dist/images/act1.jpeg" alt="" />
          <h1>Endangered Animals</h1>
          <div class="layer">
            <h3>
              Many species around the world are facing extinction due to habitat
              loss
            </h3>
          </div>
        </div>
        <div class="activity-col">
          <img src="/template/User/dist/images/act1.jpeg" alt="" />
          <h1>Endangered Animals</h1>
          <div class="layer">
            <h3>
              Many species around the world are facing extinction due to habitat
              loss
            </h3>
          </div>
        </div>
        <div class="activity-col">
          <img src="/template/User/dist/images/act1.jpeg" alt="" />
          <h1>Endangered Animals</h1>
          <div class="layer">
            <h3>
              Many species around the world are facing extinction due to habitat
              loss
            </h3>
          </div>
        </div>
        <div class="activity-col">
          <img src="/template/User/dist/images/home.jpg" alt="" />
          <h1>Endangered Animals</h1>
          <div class="layer">
            <h3>
              Many species around the world are facing extinction due to habitat
              loss
            </h3>
          </div>
        </div>
        <div class="activity-col">
          <img src="/template/User/dist/images/act1.jpeg" alt="" />
          <h1>Endangered Animals</h1>
          <div class="layer">
            <h3>
              Many species around the world are facing extinction due to habitat
              loss
            </h3>
          </div>
        </div>
      </div>
    </section>

    <!-- active section  -->

    <!-- active section end -->

    <!-- icons section stars -->
    <section class="icon-container">
      <div class="icon">
        <img src="/template/User/dist/images/icon1.jpeg" alt="" />
        <div class="info">
          <h3>CONTRIBUTE</h3>
          <span
            >We are fully supported by generous sponsors. Please help us!
          </span>
        </div>
      </div>
      <div class="icon">
        <img src="/template/User/dist/images/icon2.jpeg" alt="" />
        <div class="info">
          <h3>ANIMAL SPONSORSHIP</h3>
          <span>Make a long-term commitment to endangered wildlife.</span>
        </div>
      </div>
      <div class="icon">
        <img src="/template/User/dist/images/icon3.jpeg" alt="" />
        <div class="info">
          <h3>VOLUNTEERING</h3>
          <span
            >Opportunity to have practical conservation experiences while caring
            for animals at the rescue center.</span
          >
        </div>
      </div>
      <div class="icon">
        <img src="/template/User/dist/images/icon4.png" alt="" />
        <div class="info">
          <h3>EDUCATIONAL PROGRAMS</h3>
          <span>Learn about wildlife conservation.</span>
        </div>
      </div>
    </section>

    <!-- icons section end -->

    <!-- contact starts -->
    <section class="contact" id="contact">
      <h1 class="heading"><span>contact</span> us</h1>
      <div class="row">
        <form action="">
          <input type="text" placeholder="name" class="box" />
          <input type="email" placeholder="email" class="box" />
          <input type="number" placeholder="number" class="box" />
          <textarea
            name=""
            class="box"
            placeholder="message"
            id=""
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" value="sent massage" class="btn" />
        </form>
        <div class="image">
          <img src="/template/User/dist/images/c1.jpeg" alt="" />
        </div>
      </div>
    </section>

    <!-- contact ends -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">about</a>
          <a href="#">products</a>
          <a href="#">review</a>
          <a href="#">contact</a>
        </div>
        <div class="box">
          <h3>extra link</h3>
          <a href="#">my account</a>
          <a href="#">my oder</a>
          <a href="#">mt favorite</a>
        </div>
        <div class="box">
          <h3>location</h3>
          <a href="#">Viet Nam</a>
          <a href="#">USA</a>
          <a href="#">japan</a>
          <a href="#">france</a>
        </div>
        <div class="box">
          <h3>contact info</h3>
          <a href="#">phone number: 0855510705</a>
          <a href="#">phone number: 0828783345</a>
          <a href="#">email: binbaby5003@gmail.com</a>
          <a href="#">address: da nang , viet nam</a>
          <img src="/template/User/dist/images/payment.jpg" alt="" />
        </div>
      </div>
    </section>
    <script src="/template/User/dist/js/swiper-bundle.js"></script>
    <script src="/template/User/dist/js/main.js"></script>
  </body>
</html>
