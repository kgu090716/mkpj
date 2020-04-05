
      <?php
        // 헤드불러오기!
        require('layout/head.php'); 
      ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">마스크 재고 확인</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="infected.php">확진자</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">뉴스</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <section class="h-100">
    <header class="container h-100">
      <div class="d-flex align-items-center justify-content-center h-100">
        <div class="d-flex flex-column">
          <h1 class="text align-self-center">「마스크 재고확인」</h1>
            <h4 class="text align-self-center p-0.5">찾고자 하는 주소또는 이름을 입력해 주세요!</h4>
            <h7 class="text align-self-center p-2">*자동완성 기능을 이용하여 검색을 해 주세요!*</h7>
          <div class="box text align-self-center">
            <div class="container-4">
              <input type="text" id="search" placeholder="위치를 입력해 주세요" />
              <button class="icon" onclick="asearch()"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </header>
  </section>
<br><br><br><br><br><br>

<?php
// 풋터불러오기!
require('layout/footer.php'); 
?>

  <!-- My script Search -->
      <script type="text/javascript" src="js/iscript.js"></script>