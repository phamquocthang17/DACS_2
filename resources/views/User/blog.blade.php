<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/template/User/dist/css/post.css" />
    <link rel="stylesheet" href="/template/User/dist/css/main.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />

    <title>Document</title>
  </head>

  <body>
    <!-- header -->
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
    <script src="/template/User/dist/js/post.js"></script>
    <!-- header section starts -->
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
    <i class="fas fa-user"></i>
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

    <div class="post-filter container">
      <span class="filter-item active-filter" data-filter="all">All</span>
      <span class="filter-item" data-filter="design">Design</span>
      <span class="filter-item" data-filter="tech">Tech</span>
      <span class="filter-item" data-filter="mobile">Mobile</span>
    </div>

    <!-- Post  -->
  
    <section class="post container">
        @foreach ($posts as $post )
        <div class="post-box design">
        <img  src="{{$post->images}}" alt="" class="post-img" />
        <h2 class="category">Mobile</h2>
        <a href="{{route('post_page',['id' => $post->id])}}" class="post-title">
        {{$post->title}}
        </a>
        <span class="post-day">{{ $post->created_at->format('d M Y') }}</span>
        <p class="post-decription">
        {!! \Illuminate\Support\Str::words($post->excerpt, 100, '...') !!}
        </p>
        <div class="profile">
          <img src="/template/User/dist/images/s1.webp" alt="" class="profile-img" />
          <span class="profile-name">{{$post->user->name}}</span>
        </div>
      </div>
        
        @endforeach
      


    </section>

 
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
    
    <script src="/template/User/dist/js/main.js"></script>


  </body>
</html>
