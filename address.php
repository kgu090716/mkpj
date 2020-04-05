
      <?php
        // 헤드불러오기!
        require('layout/head.php');
      ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="/">마스크 재고 확인
                      <span class="sr-only">(current)</span>
                  </a>
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
<main role="main" class="container">
    <h1 class="mt-5">"<span id="hadress"></span>"에 대한 검색결과입니다.</h1>
    아래 검색을 통하여 더 정확한 정보를 얻을 수 있습니다.<br>
    <p>(표를 클릭하시면 네이버지도 검색결과로 이동합니다.)</p>

<table id="userTable" class="table-dark dark" >
        <thead class="info"">
        <tr>
            <th scope="col">주소</th>
            <th scope="col">건물이름</th>
            <th scope="col">재고 상태</th>
            <th scope="col">입고 시간</th>
        </tr>
        </thead>
    </table>

</main>


<?php
// 풋터불러오기!
require('layout/footer.php'); 
?>

<!-- My script Result-->
<script type="text/javascript" src="js/ascript.js"></script>