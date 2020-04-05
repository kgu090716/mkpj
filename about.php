
      <?php
        // 헤드불러오기!
        require('layout/head.php'); 
      ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">마스크 재고 확인</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="infected.php">확진자</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="news.php">뉴스</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->

          <header class="container">

              <div class="d-flex flex-column">
                  <h1 class="text align-self-center">「About」</h1><br><br>

                  <session class="news">
                      <div class="container">
                          <div class="col-lg-8 mx-auto">
                              <div class="card">
                                  <div class="card-header">
                                      사용한 소스
                                  </div>
                                  <div class="card-body">
                                      <h5 class="card-title">#Bootstrap</h5>
                                      <p class="card-text">→홈페이지 디자인</p>
                                      <p><a href="https://getbootstrap.com/" class="btn btn-primary">홈페이지</a></p>

                                      <h5 class="card-title">#Datatable</h5>
                                      <p class="card-text">→마스크 조회 데이터 표</p>
                                      <p><a href="https://datatables.net/" class="btn btn-primary">홈페이지</a></p>

                                      <h5 class="card-title">#Font Awesome</h5>
                                      <p class="card-text">→아이콘 사용</p>
                                      <p><a href="https://fontawesome.com/" class="btn btn-primary">홈페이지</a></p>

                                      <h5 class="card-title">#Jquery</h5>
                                      <p class="card-text">→ajax로 api 불러오기</p>
                                      <p><a href="https://code.jquery.com/" class="btn btn-primary">홈페이지</a></p>

                                      <h5 class="card-title">#jQuery UI</h5>
                                      <p class="card-text">→자동입력 기능 사용</p>
                                      <p><a href="https://jqueryui.com/" class="btn btn-primary">홈페이지</a></p>

                                      <h5 class="card-title">#버튼 디자인 참고</h5>
                                      <p class="card-text">→버튼 디자인</p>
                                      <p><a href="https://webdesign.tutsplus.com/ko/tutorials/css-experiments-with-a-search-form-input-and-button--cms-22069" class="btn btn-primary">홈페이지</a></p>

                                      <h5 class="card-title">#공공데이터포털</h5>
                                      <p class="card-text">→마스크 api정보</p>
                                      <p><a href="https://www.data.go.kr/dataset/15043025/openapi.do" class="btn btn-primary">홈페이지</a></p>

                                      <h5 class="card-title">#코로나 api</h5>
                                      <p class="card-text">→확진자, 뉴스 정보</p>
                                      <p><a href="https://github.com/zeroday0619/COVID-19API" class="btn btn-primary">홈페이지</a></p>

                                      <h5 class="card-title">#고도체</h5>
                                      <p class="card-text">→폰트 사용</p>
                                      <p><a href="https://noonnu.cc/font_page/1" class="btn btn-primary">홈페이지</a></p>

                                  </div></div><br><br>

                              <div class="card">
                                  <div class="card-header">
                                      서버 사양
                                  </div>
                                  <div class="card-body">
                                      <h5 class="card-title">라즈베리파이 3b+</h5>
                                      <p class="card-text">→Nginx + PHP7.3 + Python3.8</p>
                                  </div></div><br><br>

                              <div class="card">
                                  <div class="card-header">
                                      제작자
                                  </div>
                                  <div class="card-body">
                                      <h5 class="card-title">KCPIT [김지운]</h5>
                                      <p><a href="https://github.com/kgu090716/" class="btn btn-primary">GitHub</a></p>

                                          <h5 class="card-title">윈도우</h5>
                                          <a href="https://github.com/ChangMun00" class="btn btn-primary">GitHub</a>
                                              <a href="https://winsub.kr/" class="btn btn-primary">사이트</a>
                          </div></div><br><br>
              </session>

<?php
// 풋터불러오기!
require('layout/footer.php'); 
?>


  <!-- My script Search -->
      <script type="text/javascript" src="js/iscript.js"></script>