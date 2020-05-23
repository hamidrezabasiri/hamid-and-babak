<?php 

function generate_header(){
    echo    '
    <!-- header-->
    <header class="bala" >
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="btn-group iranSans">
                        <button class="currency btn border dropdown-toggle my-md-4 my-2 py-2 px-3" 
                        data-toggle="dropdown" 
                        aria-haspopup="true" 
                        aria-expanded="false"
                        >
                        ریال
                        </button>
                        <div class="dropdown-menu iranSans bangg">
                            <a href="#" class="dropdown-item">دلار</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h1 class="my-md-3 site-title">فروشگاه آنلاین نقاشی</h1>
                </div>
                <div class="col-md-4 col-12 text-right">
                    <p class="my-md-4 header-links">
                    <a href="singin.php" class="px-2 ccc bang text-b">ورود</a>
                    <a href="sabtnam.php" class="px-1 ccc bang">ثبت نام</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="topnav">
            <a href="index.php" class="ccc">خانه</a>
            <a href="about.php" class="ccc">درباره ی من</a>
            <a href="mypaintings.php" class="ccc">نقاشی های من</a>
            <a href="abrang.php" class="ccc">نقاشی ابرنگ</a>
            <a href="forosh.php" class="ccc">فروش</a>
            <div class="search-container">
              <form class="header-search-form d-flex flex-row-reverse" action="/action_page.php">
                <input class="text-right p-0 m-0" type="text" class="ggg" placeholder="...جستجو" name="search">
                <button class=" p-0 m-0" type="submit"><i class="fa fa-fw fa-search"></i></button>
              </form>
            </div>
        </div>
    </header>
            ';
}

?>