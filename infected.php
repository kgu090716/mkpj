<?php
        // 헤드불러오기!
        require('layout/head.php'); 
      ?>

<?php
$string = file_get_contents("http://pvc19.kro.kr:8000/v1/kr/status");
$json_a = json_decode($string, true);
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


    <header class="container">

        <div class="d-flex flex-column">
            <h1 class="text align-self-center">「확진자」</h1><br><br>

            <div class="container">
                <div class="col-lg-8 mx-auto">

                    <div class="card">
                        <div class="card-header">
                            국내 확진자
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">확진자</h3>
                            <h4 class="card-text"><?php echo $json_a['cases']; ?>명</h4>
                            <h5 class="card-text">+<?php echo $json_a['todayCases']; ?>명</h5>
                            <hr>

                            <h3 class="card-title">사망자</h3>
                            <h4 class="card-text"><?php echo $json_a['death']; ?>명</h4>
                            <h5 class="card-text">+<?php echo $json_a['beforeDeath']; ?>명</h5>
                            <hr>

                            <h3 class="card-title">완치
                            <h4 class="card-text"><?php echo $json_a['recovered']; ?>명</h4>
                            <h5 class="card-text">+<?php echo $json_a['beforeRecovered']; ?>명</h5>
                        </div></div><br><br>

<?php
// 풋터불러오기!
require('layout/footer.php'); 
?>