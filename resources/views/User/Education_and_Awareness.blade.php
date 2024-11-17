!DOCTYPE html>
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
    <!-- <link rel="stylesheet" href="../css/main.css" /> -->
    <link rel="stylesheet" href="/template/User/dist/css/swiper-bundle.min.css" />
     <link rel="stylesheet" href="/template/User/dist/css/header.css">
     <link rel="stylesheet" href="/template/User/dist/css/footer.css">
    <link rel="stylesheet" href="/template/User/dist/css/Edu.css">
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
          <button type="submit" class="btn btn-link logout-btn">
    <i class="fas fa-sign-out-alt"></i> Logout
</button>

        </form>
    </ul>
  </div>
</div>

    </header>

    <section class="home" id="home">
      <div class="slider-container">
      <div class="slider-background">
        <div class="slide" style="background-image: url('/template/User/dist/images/img1.jpg');"></div>
        <div class="slide" style="background-image: url('/template/User/dist/images/img2.jpg');"></div>
        <div class="slide" style="background-image: url('/template/User/dist/images/img3.jpg');"></div>
        <div class="slide" style="background-image: url('/template/User/dist/images/img4.jpg');"></div>
        <div class="slide" style="background-image: url('/template/User/dist/images/img1.jpg');"></div>
      </div>
    </div>
      <div class="content">
        <h1>GIÁO DỤC & NÂNG CAO NHẬN THỨC</h1>
        <p>MANG BẢO TỒN ĐẾN VỚI CỘNG ĐỒNG</p>
      </div>
    </section>

    <section class="content">
      <div>
        <p>Tất cả các loài động vật hoang dã ở Việt Nam đều đang bị đe doạ bởi tác động của con người. Để đạt được hiệu quả bảo tồn, cần phải giải quyết nguyên nhân gốc rễ của vấn đề, thường xuất phát từ sự thiếu hiểu biết hoặc thái độ tiêu cực về các loài động vật hoang dã. Thông qua những chiến dịch nâng cao nhận thức, truyền tải các thông điệp, chúng tôi mong muốn nâng cao nhận thức, thay đổi thái độ của mọi người, để từ đó đóng góp tích cực cho bảo tồn động vật hoang dã và tác động đến hành vi của những người có ảnh hưởng tiêu cực đến quần thể động vật hoang dã.</p>
        <p>Để đạt các mục tiêu trên, chúng tôi sẽ khai thác tối đa các công cụ tiếp cận với những đối tượng mục tiêu khác nhau:</p>
      </div>
    </section>
    <section class="projects">
      <div class="project-item">
        <img src="/template/User/dist/images/edu_character.jpg" alt="Project 1">
        <p>©SVW - Ho Thi Kim Lan</p>
        <h3>Social Research/ Community-based Project</h3>
        <p>Our teams will carry out social surveys to help understand the characteristics of our target groups, identify local needs and establish the conservation requirements of our targeted species. This is key to ensuring our awareness campaigns and education program work effectively.</p>
      </div>
      
      <div class="project-item">
        <img src="/template/User/dist/images/edu_character2.jpg" alt="Project 2">
        <p>©SVW - Ho Thi Kim Lan</p>
        <h3>Awareness – Education programs</h3>
        <p>We develop and design well-evaluated programs for each of our target group:
          School programs for primary students
          Workshops about law enforcement for government officials and rangers
          Community-based projects, ie. finding alternative economic solutions for local people
          Behaviour change intervention design</p>
      </div>
      
      <div class="project-item">
        <img src="/template/User/dist/images/edu_character3.jpg" alt="Project 3">
        <p>©SVW - Nguyen Trong Minh Huy</p>
        <h3>Outreach – Media</h3>
        <p>We are using various communication medium such as educational publications, video production, and our education centre to gain public support for Vietnam’s wildlife.</p>
      </div>
    </section>

    <div class="so_lieu">
      <div class="title">MỘT SỐ KẾT QUẢ</div>
      <div class="counter-container">
          <div class="counter">
              <h3 data-target="8156">0</h3>
              <p>trẻ em được truyền cảm hứng</p>
          </div>
          <div class="counter">
              <h3 data-target="11500">0</h3>
              <p>người tham gia phỏng vấn xã hội</p>
          </div>
          <div class="counter">
              <h3 data-target="2500">0</h3>
              <p>kiểm lâm và chính quyền được tập huấn bảo tồn</p>
          </div>
      </div>
  </div>

    <section class="edu" id="edu">
      <h1 class="heading_edu">
        <span>Thông tin về chương trình giáo dục</span>
      </h1>
      <div class="row">
        <div class="content">
          <h3 class="title">CHƯƠNG TRÌNH GIÁO DỤC <br>
            BẢO TỒN DÀNH CHO TRƯỜNG HỌC</h3>
          <p>
            Tại trung tâm của chúng tôi, trẻ được khuyến khích chủ động đặt câu hỏi về các đặc điểm của động vật hoang dã, hay những câu chuyện cảm động trước và sau khi được cứu hộ thành công về Trung tâm. Những câu chuyện thật và cảm động “tại sao những động vật hoang dã bị nuôi nhốt tại đây?” và “liệu chúng có được thả lại tự nhiên không?” đã lay động trái tim và khối óc của các em học sinh, truyền cảm hứng cho các em để các em thêm yêu thương và có những hành động thiết thực để bảo vệ động vật hoang dã, bảo vệ những loài mà các em yêu quý. Chương trình cũng cung cấp cho các em thông tin cơ bản nhất về quy trình cứu hộ, phục hồi, sinh sản bảo tồn và tái thả.
          </p>
          <p>
            SVW lên kế hoạch phát triển nhiều chương trình giáo dục hơn, mang cơ hội tham quan và trải nghiệm đến với nhiều học sinh, sinh viên hơn, để các em hiểu và chung tay bảo vệ động vật hoang dã.
          </p>
        </div>
        <div class="anh-container">
          <img src="/template/User/dist/images/edu1.jpg"></img>
        </div>
      </div>
      <div class="row">
        <div class="anh-container">
          <img src="/template/User/dist/images/edu2.jpg" alt="">
        </div>
        <div class="content">
          <h3 class="title">TRUNG TÂM GIÁO DỤC BẢO TỒN <br>THÚ ĂN THỊT VÀ TÊ TÊ</h3>
          <p>Trung tâm Giáo dục Bảo tồn Thú ăn thịt và Tê tê được khai trương vào tháng 2 năm 2016. Đến thăm trung tâm, du khách có cơ hội tìm hiểu về 37 loài thú ăn thịt và 2 loài tê tê quý hiếm, không thể thay thế ở Việt Nam. Chúng tôi đã tập huấn cho các cán bộ hướng dẫn viên du lịch của Vườn Quốc gia Cúc Phương để hướng dẫn du khách về các mối đe dọa đối với động vật hoang dã và công tác bảo tồn của Save Vietnam’s Wildlife. </p>
          <p>Khách tham quan còn được ghé thăm những cá thể động vật cứu hộ dài hạn tại khu trung tâm giáo dục, lắng nghe câu chuyện cứu hộ của chúng và tìm hiểu lý do tại sao chúng không thể trở về tự nhiên. Hiện tại, các loài động vật đang được cứu hộ tại trung tâm, không thể trở về thiên nhiên, bao gồm: Cầy mực, Cầy vòi mốc, Cầy tai trắng, Mèo rừng và Cầy vằn. </p>
        </div>
      </div>
      <div class="row">
        <div class="content">
          <h3 class="title">THAY ĐỔI HÀNH VI</h3>
          <p>
            SVW tiến hành các nghiên cứu xã hội trên phạm vi toàn quốc nhằm đưa ra những hiểu biết cơ bản về lý do con người buôn bán và tiêu thụ tê tê. Những thông tin này rất cần thiết để tạo ra các chiến dịch thay đổi hành vi hiệu quả. Một nghiên cứu gần nhất đã phỏng vấn hơn 9.000 người dân, người buôn bán tê tê, thợ săn, bác sĩ y học cổ truyền trên khắp Việt Nam. Kết quả nghiên cứu sẽ sớm được công bố trên trang thông tin của chúng tôi.
          </p>
          <p>
            Chúng tôi hiện đang tập trung vào các chiến dịch thay đổi hành vi, nhắm đến các cơ quan chính phủ để tăng cường công tác ngăn chặn nạn săn bắt và buôn bán động vật hoang dã bất hợp pháp. SVW đã tổ chức 4 cuộc hội thảo cho 158 kiểm lâm viên, cảnh sát, hải quan vào năm 2016 và 2017 để xây dựng niềm tin, truyền cảm hứng cho họ về bảo tồn động vật hoang dã và cung cấp kiến thức, kỹ năng, cũng như thúc đẩy họ hành động để cứu động vật hoang dã.
          </p>
        </div>
        <div class="anh-container">
          <img src="/template/User/dist/images/edu3.jpg"></img>
        </div>
      </div>
      <div class="row">
        <div class="anh-container">
          <img src="/template/User/dist/images/edu4.jpg" alt="">
        </div>
        <div class="content">
          <h3 class="title">NÂNG CAO NHẬN THỨC & tập huấn</h3>
          <p>SVW, tiền thân là Chương trình Bảo tồn Thú ăn thịt và Tê tê, đã tổ chức tập huấn cho hơn 1.000 cán bộ kiểm lâm, cảnh sát môi trường, cán bộ hải quan tại các điểm nóng về bảo tồn thú ăn thịt nhỏ và tê tê trong hơn 10 năm qua. Dựa vào những thành tựu đó, SVW sẽ tiếp tục xây dựng mục tiêu nâng cao kỹ năng phân loại thú ăn thịt và tê tê, giải pháp xử lý động vật hoang dã bị tịch thu và nâng cao hơn nữa tinh thần trách nhiệm cũng như các giải pháp bảo tồn đối với động vật hoang dã bị tịch thu.</p>
          <p>Chúng tôi cũng đã tổ chức nhiều cuộc hội thảo và khóa tập huấn cho sinh viên Việt Nam, Cam-pu-chia, và Thái Lan nhằm nâng cao nhận thức bảo tồn, cũng như đưa ra các kết quả từ nghiên cứu thực địa và sự cần thiết bảo tồn Tê tê và Thú ăn thịt. Chúng tôi sẽ tiếp tục chia sẻ những kỹ năng thực tế với các nhà hoạt động bảo tồn cũng như thúc đẩy hơn nữa công tác bảo tồn, đảm bảo tương lai cho động vật hoang dã tại Việt Nam. </p>
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
    <script src="/template/User/dist/js/so_lieu.js"></script>
    <script src="/template/User/dist/js/slider_edu.js"></script>

  </body>
</html>
