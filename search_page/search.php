<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search page</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./search.css">
</head>
<body>
    <!-- headerここから -->
    <header class="header">
            <a href="../index.html"><p class="left">Roo Share</p></a>
                <div class="header-right">
                    <a href="../sign_in/sign_in.html"><div class="icons">
                        <i class="far fa-user-circle"></i>
                        <p>Account</p>
                </div></a>
                <a href="../new_post/new_post.html"><div class="icons">
                    <i class="far fa-smile-beam"></i>
                    <p>New post</p>
                </div></a>
                <div class="icons">
                    <i class="fas fa-map-marked-alt"></i>
                    <p>Map</p>
                </div>
            </div>
        </header>
        <!-- headerここまで -->

        <!-- mainここから -->
        <main>
            <div class="search">
                <h1><span>Room Mate</span>Search<i class="fas fa-users"></i></h1>
                <div class="data-box">
                    <div>
                      Check-In：<input class="date" type="date" name="date">
                    </div>
                    <div>
                      Check-Out：<input class="date" type="date" name="date">
                    </div>
                </div>
                <div class="top">
                <div>
                  <input type="radio" name="gender" value="1">Male
                  <i class="fas fa-male"></i>
                  </div>
                  <div>
                  <input type="radio" name="gender" value="2">Female
                  <i class="fas fa-female"></i>
                </div>
                </div> 
                <select class="age" name="age">
                    <option value="">Please select your age</option>
                    <option value="20歳未満">Less than 20 year old</option>
                    <option value="20-29歳">20-29 year old</option>
                    <option value="30-39歳">30-39 year old</option>
                    <option value="40-49歳">40-49 year old</option>
                    <option value="50-59歳">50-59 year old</option>
                </select>
                
                <button class="searchbtn" type="submit">Search</button>
            </div>
        </main>
        <!-- mainここまで  -->

        <!-- sectionここから -->
        <section>
            <h2>THE EVENT OF <span>OKINAWA</span></h2>
            <div class="content">

                <div class="card" style="width: 18rem;">
                    <img src="../img/rantanevent.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">琉球ランタンフェスティバル</h5>
                      <p class="card-text">琉球王朝時代の街並みが再現された会場で3千個以上のランタンや灯籠をともして幻想的な夜を彩ります。会場内では手作りのランタンオブジェコンテスト作品や夜のランタンステージ（音楽ライブや大道芸、ダンスなど）、プロジェクションマッピングも楽しめます。</p>
                      <a href="#" class="btn btn-primary">続きを読む</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="../img/harievent.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">那覇ハーリー</h5>
                      <p class="card-text">那覇ハーリー（毎年GW期間中開催）を皮切りに、9月初旬頃まで各地でハーリーイベントが開催されます。 その土地その土地によってハーリーの中身や編成も異なります。</p>
                      <a href="#" class="btn btn-primary">続きを読む</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="../img/nahaevent.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">那覇大綱挽まつり</h5>
                      <p class="card-text">毎年10月の体育の日を含む土・日・月の3日間で“那覇大綱挽まつり”が開催されます。</p>
                      <a href="#" class="btn btn-primary">続きを読む</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- sectionここまで -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script src="../app.js"></script>
</body>
</html>