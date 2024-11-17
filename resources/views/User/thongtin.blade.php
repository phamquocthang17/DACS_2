<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Thông Tin Về Tê Tê</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="/template/User/dist/css/thongtin.css" />
    <link rel="stylesheet" href="/template/User/dist/css/header.css" />
    <link rel="stylesheet" href="/template/User/dist/css/footer.css" />
  </head>
  <body>
    <!-- header  -->
    <header class="head">
      <input type="checkbox" name="" id="toggler" />

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
          <button type="submit" class="btn btn-link logout-btn">
    <i class="fas fa-sign-out-alt"></i> Logout
</button>

        </form>
    </ul>
  </div>
</div>

    </header>
    <!-- header_va_menu -->
    <div class="header-va-menu">
      <div class="home">
        <div class="background-image">
          <img src="/template/User/dist/images/thong_tin_tete_1.jpg" alt="" />
        </div>
        <div class="title">
          <h1 class="header__title">TÊ TÊ</h1>
        </div>
      </div>

      <div class="menu">
        <a href="#thongtin" class="menu__item">THÔNG TIN</a>
        <a href="#dedoa" class="menu__item">MỐI ĐE DỌA</a>
        <a href="#solieu" class="menu__item">SỐ LIỆU</a>
        <!-- <a href="#giupdo" class="menu__item">BẠN GIÚP ĐƯỢC GÌ?</a> -->
      </div>
    </div>

    <!-- thongtin  -->
    <div class="thongtin_va_dedoa">
      <!-- <hr /> -->
      <div class="thong-tin" id="thongtin">
        <h1 class="heading_thongtin">
          <hr />
          <span>Thông Tin Về Tê Tê</span>
        </h1>
        <div class="row">
          <div class="content">
            <p>
              TÊ TÊ LÀ NHỮNG SINH VẬT KỲ DIỆU <br />
              Tê tê là loài thú có vú duy nhất trên thế giới có cơ thể được bao
              phủ lớp vảy cứng Tê tê hoạt động và kiếm ăn vào ban đêm Tê tê có
              khả năng cuộn tròn để bảo vệ bản thân khỏi kẻ thù. Loài động vật
              này không có răng, chúng sử dụng chiếc lưỡi dài và dính để ăn kiến
              mà mối – thức ăn ưa thích của chúng ngoài tự nhiên. Tê tê có thể
              ăn 200.000 con kiến 1 ngày Tê tê đẻ con và nuôi con bằng sữa. Tê
              tê con luôn bám trên đuôi mẹ khi di chuyển và kiếm ăn vào ban đêm.
            </p>
          </div>
          <div class="img_thong_tin">
            <img src="/template/User/dist/images/thong_tin_tete_1.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="de-doa" id="dedoa">
        <h1 class="heading_dedoa">
          <hr />
          <span>Sự Đe Dọa Đến Loài Tê Tê</span>
        </h1>
        <div class="row">
          <div class="img_de_doa">
            <img src="/template/User/dist/images/thong_tin_tete_2.jpg" alt="" />
          </div>
          <div class="content">
            <p>
              Cả hai loài tê tê ở Việt Nam đều nằm trong danh sách loài Cực kỳ
              nguy cấp trong Danh lục đỏ của IUCN. 6 loài tê tê khác đều đang bị
              đe dọa. <br />
              Mối đe dọa lớn nhất đối với loài tê tê chính là con người. Tê tê
              là loài thú có vú bị săn bắt và buôn bán trái phép nhiều nhất trên
              thế giới. Hàng năm có hơn 100.000 cá thể bị săn bắn từ tự nhiên để
              phục vụ cho hoạt động buôn bán bất hợp pháp, với hai mục đích
              chính là sử dụng vảy trong y học cổ truyền và ăn thịt.
            </p>
          </div>
        </div>
      </div>
      <div class="so_lieu" id="solieu">
        <hr />
        <div class="title">Một Vài Số Liệu</div>
        <div class="counter-container">
          <div class="counter">
            <h3 data-target="8156">0</h3>
            <p>cá thể được cứu</p>
          </div>
          <div class="counter">
            <h3 data-target="11500">0</h3>
            <p>cá thể được sinh ra</p>
          </div>
          <div class="counter">
            <h3 data-target="12">0</h3>
            <p>% tăng trưởng so với năm ngoái</p>
          </div>
        </div>
      </div>
    </div>

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
    <script src="/template/User/dist/js/so_lieu.js"></script>
  </body>
</html>
