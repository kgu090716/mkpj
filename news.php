<?php
// 헤드불러오기!
require('layout/head.php');
?>

<?php
$jsondata = file_get_contents("http://pvc19.kro.kr:8000/v1/kr/news");
$json = json_decode($jsondata, true);
?>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">마스크 재고 확인
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="infected.php">확진자</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="news.php">뉴스</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
    </div>
    </div>
    </nav>

    <!-- 뉴스 -->

    <header class="container h-100">

        <div class="d-flex flex-column">
            <h1 class="text align-self-center">「코로나 관련뉴스」</h1><br><br>


            <div class="container">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[0]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[0]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[0]['summary']; ?>  <a href="<?php echo $json[0]['link']; ?>"><?php echo $json[0]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[1]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[1]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[1]['summary']; ?>  <a href="<?php echo $json[1]['link']; ?>"><?php echo $json[1]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[2]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[2]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[2]['summary']; ?>  <a href="<?php echo $json[2]['link']; ?>"><?php echo $json[2]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[3]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[3]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[3]['summary']; ?>  <a href="<?php echo $json[3]['link']; ?>"><?php echo $json[3]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[4]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[4]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[4]['summary']; ?>  <a href="<?php echo $json[4]['link']; ?>"><?php echo $json[4]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[5]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[5]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[5]['summary']; ?>  <a href="<?php echo $json[5]['link']; ?>"><?php echo $json[5]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[6]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[6]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[6]['summary']; ?>  <a href="<?php echo $json[6]['link']; ?>"><?php echo $json[6]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[7]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[7]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[7]['summary']; ?>  <a href="<?php echo $json[7]['link']; ?>"><?php echo $json[7]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[8]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[8]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[8]['summary']; ?>  <a href="<?php echo $json[8]['link']; ?>"><?php echo $json[8]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $json[9]['press']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $json[9]['title']; ?></h5>
                            <p class="card-text"><?php echo $json[9]['summary']; ?>  <a href="<?php echo $json[9]['link']; ?>"><?php echo $json[9]['press']; ?>에서 보기</a></p>
                        </div></div><br><br>
                </div></div></header>


    <script>
        var url = "http://pvc19.kro.kr:8000/v1/kr/news";
        xhr.open("get", url, true);
        var parseData = JSON.parse(data);
        var str = "";
        for (var i = 0; i < parseData.title; i++){
            str += parseData.title[i].code + " " +
                parseData.title[i] + "<br>";
        }
        document.getElementById("disp").innerHTML = str;
    </script>


<?php
// 풋터불러오기!
require('layout/footer.php');
?>