<?php
        // 헤드불러오기!
        require('layout/head.php'); 
      ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">마스크 재고 확인
            </a>
          </li>
          <li class="nav-item active">
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

    <!-- 국내 확진자 정보 -->
    <section class="h-100" id="infected">
      <header class="container h-100">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div class="d-flex flex-column">
            <h1 class="text align-self-center">「국내 확진자 정보」</h1>
              <h4 class="text align-self-center p-3">  <div class="card-body">
                <p class="card-text">
<?php
$string = file_get_contents("https://ncov.zeroday0619.dev/v1/global/status/");
$json_a = json_decode($string, true);
echo "사망자 : ";
echo $json_a['krstatus'][death];
echo "<br> <hr>";
echo "감염자 : ";
echo $json_a['krstatus'][patient];
echo "<br> <hr>";
echo "완치 : ";
echo $json_a['krstatus'][inisolation];
?>
            </div></div>
          </div>
        </div>
      </header>
    </section>

<?php
// 풋터불러오기!
require('layout/footer.php'); 
?>