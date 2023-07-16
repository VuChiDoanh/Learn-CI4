<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href=" <?php base_url() ?>">
    <link rel="icon" href="assets/images/logo-golden.png">
    <title>DAIETSU - Trang chủ</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="assets/libs/angular.min.js"></script>
    <script src="assets/libs/angular-route.min.js"></script>
    <script src="assets/controllers/HomeController.js"></script>
    <script src="assets/controllers/SanPhamController.js"></script>
    <script src="assets/controllers/TinTucController.js"></script>
    <script src="assets/controllers/ContactController.js"></script>
    <script src="assets/controllers/PartnersController.js"></script>
    <script src="assets/controllers/ChiTietController.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div ng-app="app-route">
        <div class=" mx-auto px-5 bg-[#F1F1F1] sticky top-[-1px] z-[60] shadow-lg">
            <div class="container mx-auto md:flex md:justify-between md:items-center py-2 border-b border-[#E3E3E3]  relative">


                <div class="flex items-baseline">
                    <a href="#!/home" class=""><img class="h-[65px] my-3 mr-8" src="assets/images/logo-golden.png" alt="đây là logo">
                    </a>
                    <div class="flex items-baseline my-auto my-3">
                        <p class="hidden xl:flex text-lg font-semibold  items-baseline mr-3">
                            Liên hệ - (+81) 0489-762-3375</p>
                        <!-- <form action="" method="" id="search-box" class=" hidden xl:flex">
                            <input type="hidden" name="">
                            <input type="text" name="" id="search-text" placeholder="Tìm kiếm...">
                            <button type="submit" onclick="" id="search-btn"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form> -->
                    </div>
                </div>
                <div class="md:hidden absolute top-7 right-4" id="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 p3">
                        <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                    </svg>

                </div>
                <ul class=" md:flex mt-10  md:m-0 md:p-0 2xl:space-x-10 md:justify-between hidden text-left pb-10" id="menu">
                    <li>
                        <a href="#!/home" class="font-medium md:block py-6 px-2 md:px-6 hover:text-amber-500 text-lg">Trang
                            Chủ</a>
                    </li>


                    <li>
                        <a href="#!/tin-tuc" class="font-medium md:block py-6 px-2 md:px-6 hover:text-amber-500 text-lg">Bài Viết</a>
                    </li>
                    <div class="  inline-block group group1 hover:text-amber-500 w-[100%] md:w-auto">
                        <li class="">
                            <a class="md:block py-6 px-2 md:px-6  font-medium text-lg" href="#!/osg-water">Máy Lọc
                                Nước</a>
                        </li>
                        <div class="w-full top-[82px] left-[0px] fixed hidden bg-[#F1F1F1] text-gray-700 pt-2 py-20  rounded-b-xl lg:group-hover:block  grid grid-cols-2">
                            <div class="">
                                <p href="#" class="font-semibold text-2xl ml-36 w-[250px] border-black block px-4 py-6 ">Máy Lọc
                                </p>
                                <a href="#!/may-loc-nuoc/may-loc-nuoc-kiem-HU-150" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Máy
                                    lọc nước kiềm HU-150</a>
                                <a href="#!/may-loc-nuoc/may-loc-nuoc-kiem-NDX-360PLW" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Máy
                                    lọc nước kiềm NDX-360PLW</a>
                                <a href="#!/may-loc-nuoc/may-loc-nuoc-kiem-NDX-501LM" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Máy
                                    lọc nước kiềm NDX-501LM</a>
                                <a href="#!/may-loc-nuoc/may-loc-nuoc-kiem-NDX-501LM" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Máy
                                    lọc nước kiềm NDX-501LM</a>
                                <a href="#!/may-loc-nuoc/may-loc-nuoc-kiem-GW665" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Máy
                                    lọc nước kiềm GW665</a>
                                <a href="#!/may-loc-nuoc/may-loc-nuoc-kiem-NDX-3000LMW" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">
                                    Máy lọc nước kiềm NDX-3000LMW
                                </a>
                                <a href="#!/may-loc-nuoc/bo-tien-loc-OC-1000" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Bộ
                                    tiền lọc OC-1000</a>
                            </div>
                            <div class="fixed top-[82px] left-1/4">
                                <p href="#!/may-loc-nuoc" class="font-semibold text-2xl ml-36 w-[250px] border-black block px-4 py-6 ">Lõi Lọc
                                </p>
                                <a href="#!/may-loc-nuoc/loi-loc-OC-1000" class="font-medium ml-40 w-[250px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Lõi
                                    lọc thay thế OC-1000</a>
                                <a href="#!/may-loc-nuoc/loi-loc-HUR-K" class="font-medium ml-40 w-[250px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Lõi
                                    lọc thay thế HUR-K</a>
                                <a href="#!/may-loc-nuoc/loi-loc-P3C3" class="font-medium ml-40 w-[250px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Lõi
                                    lọc thay thế P3C3</a>
                                <a href="#!/may-loc-nuoc/loi-loc-LF-CIA" class="font-medium ml-40 w-[250px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Lõi
                                    lọc thay thế LF-CIA</a>
                                <a href="#!/may-loc-nuoc/loi-loc-P3M2" class="font-medium ml-40 w-[250px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Lõi
                                    lọc thay thế P3M2</a>
                            </div>

                            <img src="assets/images/may-loc-nuoc-menu.png" alt="ảnh ở đây" class="h-[150px]  fixed top-36   right-[300px]">
                            <img src="assets/images/OC-1000-1.jpg" alt="ảnh ở đây" class="h-[150px]  fixed top-[400px]   right-[300px]">

                        </div>
                    </div>
                    <div class="hidden top-[83px] md:fixed w-full h-full black-background"></div>
                    <div class="  inline-block group hover:text-amber-500 ">
                        <li class="">
                            <p class="md:block py-6 px-2 md:px-6  font-medium text-lg" id="btnDichVu">Dịch Vụ</p>
                        </li>
                        <div class="w-full top-[82px] left-[0px] fixed hidden bg-[#F1F1F1] text-gray-700 pt-2 py-20   rounded-b-xl lg:group-hover:block  grid grid-cols-2">
                            <div class="">
                                <p href="#" class="font-semibold text-2xl ml-36 w-[250px] border-black block px-4 py-6 ">Du lịch
                                </p>
                                <a href="#!/may-loc-nuoc/may-loc-nuoc-kiem-HU-150" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Du
                                    lịch khám bệnh</a>
                                <a href="#!/may-loc-nuoc/may-loc-nuoc-kiem-NDX-360PLW" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Du
                                    lịch VIP</a>
                                <a href="#!/may-loc-nuoc/may-loc-nuoc-kiem-NDX-360PLW" class="font-medium ml-40 w-[300px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Tour
                                    Nhật Bản</a>

                            </div>
                            <div class="fixed top-[82px] left-1/4">
                                <p href="#!/may-loc-nuoc" class="font-semibold text-2xl ml-36 w-[250px] border-black block px-4 py-6 ">Dịch vụ
                                    khác
                                </p>
                                <a href="#!/may-loc-nuoc/loi-loc-OC-1000" class="font-medium ml-40 w-[250px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Đặt
                                    hàng xách tay</a>
                                <a href="#!/may-loc-nuoc/loi-loc-HUR-K" class="font-medium ml-40 w-[250px] border-black block px-4 py-6 hover:text-sky-500  hover:border-b-2">Hỗ
                                    trợ visa</a>
                            </div>

                        </div>
                    </div>
                    <div class="hidden top-[83px] md:fixed w-full h-full black-background"></div>



                </ul>
            </div>
        </div>



        <div ng-view class="bg-gray-100">

        </div>



        <button class="" id="myBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 20.25a.75.75 0 01-.75-.75V6.31l-5.47 5.47a.75.75 0 01-1.06-1.06l6.75-6.75a.75.75 0 011.06 0l6.75 6.75a.75.75 0 11-1.06 1.06l-5.47-5.47V19.5a.75.75 0 01-.75.75z" clip-rule="evenodd" />
            </svg>
        </button>
        <button class="" id="zaloBtn" title="Go to top">
            <a href="https://zalo.me/818081678790"><img src="assets/images/zalo.png" alt="" class="h-[70px] shadow-xl rounded-[100%]"></a>
        </button>


        <!-- <button id="myContact" title="Go to top" class="w-[100%] font-medium">
            Gọi ngay: <a href="tel:(+81) 0489-762-3375" class="ml-2 md:text-lg font-medium">
                (+81) 0489-762-3375</a>
        </button> -->
        <section class="bg-gradient-to-b from-gray-700 via-gray-800  to-gray-950 text-white pb-8">
            <div class="mx-auto px-5 pt-10 relative">
                <div class="grid md:grid-cols-2 gap-3">
                    <div class="w-[100%]">
                        <div class="flex items-center">
                            <img src="assets/images/logo-white.png" class="w-[150px] md:w-[200px]" alt="logo" />
                            <img src="assets/images/logoOSG.png" class=" mx-8 w-[150px] md:w-[180px]" alt="logo" />
                        </div>

                        <span class="">

                        </span>

                        <div class="mt-4 md:flex items-baseline md:text-lg font-medium">Addresss: <a href="https://goo.gl/maps/yr6xw9rsZiHHC4bN9" class="ml-2">Japan,
                                〒338-0002 Saitama, Chuo Ward, Shimoochiai, 6 Chome−14−7 ３０１ ３F </a></div>
                        <div class="mt-4 md:flex items-baseline md:text-lg font-medium">住所: <a href="https://goo.gl/maps/yr6xw9rsZiHHC4bN9" class="ml-2">
                                338-0002
                                埼玉県さいたま市中央区上落合4丁目14ー7 301号</a></div>

                    </div>

                    <div class=" grid grid-cols-2">
                        <div>
                            <h2 class="uppercase md:text-[20px] font-medium pb-3">Về Chúng Tôi</h2>

                            <a href="#!/tin-tuc/chinh-sach-bao-mat" ng-click="scrollUp()" class="mt-4 flex items-baseline md:text-lg font-medium">Chính Sách Bảo Mật</a>

                        </div>
                        <div class="">
                            <h2 class="uppercase md:text-[20px] font-medium pb-3">
                                Chăm Sóc Khách Hàng
                            </h2>
                            <div class="mt-4 flex items-baseline md:text-lg font-medium">Tel: <a href="tel:(+81) 0489-762-3375" class="ml-2 md:text-lg font-medium">
                                    (+81) 0489-762-3375</a>
                            </div>
                            <div class="mt-4 flex items-baseline md:text-lg font-medium">Fax: <a href="tel:(+81) 0489-762-3375" class="ml-2 md:text-lg font-medium">
                                    (+81) 0489-762-3375</a>
                            </div>

                            <div class="mt-4 flex items-baseline md:text-lg font-medium">Email: <a href="mailto:info@dest.co.jp" class="ml-2 ">info@dest.co.jp</a></div>

                        </div>
                        <!-- <div class="flex space-x-5  mt-8">
                            <img src="assets/images/pay-1.webp" class=" bg-gray-100 px-3 py-1 rounded-md h-[40px]"
                                alt="Phương thức thanh toán" />
                            <img src="assets/images/pay-2.webp" class=" bg-gray-100 px-3 py-1 rounded-md h-[40px]"
                                alt="Phương thức thanh toán" />
                            <img src="assets/images/pay-3.webp" class=" bg-gray-100 px-3 py-1 rounded-md h-[40px]"
                                alt="Phương thức thanh toán" />
                            <img src="assets/images/pay-4.webp" class=" bg-gray-100 px-3 py-1 rounded-md h-[40px]"
                                alt="Phương thức thanh toán" />
                        </div> -->
                    </div>
                </div>
        </section>




    </div>
</body>
<script>
    angular.module('app-route', ['ngRoute']).config(function($routeProvider) {
        $routeProvider.when('/home', {
                templateUrl: 'assets/views/home.html',
                controller: HomeController,
            }).when('/', {
                templateUrl: 'assets/views/home.html',
                controller: HomeController,
            }).when('/osg-water', {
                templateUrl: 'assets/views/OSG.html',
                controller: SanPhamController,
            }).when('/may-loc-nuoc', {
                templateUrl: 'assets/views/may-loc.html',
                controller: SanPhamController,
            }).when('/may-loc-nuoc/:sanpham', {
                templateUrl: 'assets/views/detail.html',
                controller: ChiTietController,
            }).when('/tin-tuc', {
                templateUrl: 'assets/views/tin-tuc.html',
                controller: TinTucController,
            }).when('/tin-tuc/tai-sao-nen-su-dung-nuoc-kiem', {
                templateUrl: 'assets/views/tai-sao-nen-su-dung-nuoc-kiem.html',
                controller: TinTucController,
            }).when('/tin-tuc/tap-doan-OSG', {
                templateUrl: 'assets/views/tap-doan-OSG.html',
                controller: TinTucController,
            }).when('/tin-tuc/hop-dong', {
                templateUrl: 'assets/views/hop-dong.html',
                controller: TinTucController,
            }).when('/tin-tuc/dasani', {
                templateUrl: 'assets/views/dasani.html',
                controller: TinTucController,
            }).when('/tin-tuc/OSG-nghe-an', {
                templateUrl: 'assets/views/OSG-nghe-an.html',
                controller: TinTucController,
            }).when('/tin-tuc/chinh-sach-bao-mat', {
                templateUrl: 'assets/views/chinh-sach-bao-mat.html',
                controller: TinTucController,
            })
            .when('/tin-tuc/du-lich-kham-benh', {
                templateUrl: 'assets/views/du-lich-kham-benh.html',
                controller: TinTucController,
            })
            .when('/tin-tuc/du-lich-vip', {
                templateUrl: 'assets/views/du-lich-vip.html',
                controller: TinTucController,
            })
            .when('/tin-tuc/dich-vu-visa', {
                templateUrl: 'assets/views/dich-vu-visa.html',
                controller: TinTucController,
            }).when('/404', {
                templateUrl: 'assets/views/404.html',
            }).otherwise({
                redirectTo: '/404'
            });

    });



    const menuIcon = document.querySelector("#menu-icon");
    const menu = document.querySelector("#menu");
    const links = document.querySelectorAll("a");


    // Event
    let isMenuOpen = false;
    menuIcon.addEventListener("click", function(e) {
        if (isMenuOpen == false) {
            menu.classList.remove("hidden");
            menu.classList.add("space-y-8")


            isMenuOpen = true;
        } else {
            menu.classList.add("hidden");
            isMenuOpen = false;
            menu.classList.remove("space-y-8")

        }
    });

    // chuyển trang
    links.forEach(function(link) {
        link.addEventListener("click", function() {
            if (isMenuOpen) {
                menu.classList.add("hidden");
                menu.classList.remove("space-y-8")
            }
            window.requestAnimationFrame(scrollUp);

        });
    });

    let btnDichVu = document.getElementById("btnDichVu")
    btnDichVu.addEventListener("click", function() {
        var dichVu = document.getElementById("dichVu");
        if (dichVu) {
            dichVu.scrollIntoView({
                behavior: "smooth"
            });
        }
    });

    var zaloBtn = document.getElementById("zaloBtn");

    function shake() {
        var x = Math.random() * 10 - 5; // Tạo một giá trị ngẫu nhiên từ -5 đến 5 cho vị trí x
        var y = Math.random() * 10 - 5; // Tạo một giá trị ngẫu nhiên từ -5 đến 5 cho vị trí y
        var angle = Math.random() * 10 - 5; // Tạo một giá trị ngẫu nhiên từ -5 đến 5 cho góc xoay

        zaloBtn.style.transform = "translate(" + x + "px, " + y + "px) rotate(" + angle + "deg)";

        setTimeout(shake, 50); // Gọi lại hàm shake sau 50ms để tạo hiệu ứng liên tục
    }

    shake();








    window.onscroll = function() {
        scrollFunction()
    };
    // khai báo hàm scrollFunction
    function scrollFunction() {
        // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            //nếu lớn hơn 20px thì hiện button
            var myBtn = document.getElementById("myBtn");
            if (myBtn) {
                myBtn.style.display = "block";
                myBtn.style.bottom = "80px";
            }

            var zaloBtn = document.getElementById("zaloBtn");
            if (zaloBtn) {
                zaloBtn.style.display = "block";
                zaloBtn.style.bottom = "150px";
            }

            var myContact = document.getElementById("myContact");
            if (myContact) {
                myContact.style.display = "block";
            }
        } else {
            //nếu nhỏ hơn 20px thì ẩn button
            var myBtn = document.getElementById("myBtn");
            if (myBtn) {
                myBtn.style.display = "none";
                myBtn.style.bottom = "80px";
            }

            var zaloBtn = document.getElementById("zaloBtn");
            if (zaloBtn) {
                zaloBtn.style.display = "block";
                zaloBtn.style.bottom = "50px";
            }

            var myContact = document.getElementById("myContact");
            if (myContact) {
                myContact.style.display = "none";
            }
        }

        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            var myBtn = document.getElementById("myBtn");
            var zaloBtn = document.getElementById("zaloBtn");

            if (myBtn) {
                myBtn.style.bottom = "70%";
                if (window.innerWidth > 575) {
                    myBtn.style.bottom = "45%";
                }
            }

            if (zaloBtn) {
                zaloBtn.style.bottom = "80%";
                if (window.innerWidth > 575) {
                    zaloBtn.style.bottom = "55%";
                }
            }
        } else {
            var myBtn = document.getElementById("myBtn");
            if (myBtn) {
                myBtn.style.bottom = "80px";
            }
        }
    }
    window.addEventListener("scroll", function() {
        var scrollPosition = window.innerHeight + window.pageYOffset;
        var pageHeight = document.documentElement.scrollHeight;

        if (scrollPosition >= (pageHeight - 100)) {
            document.getElementById("myContact").style.display = "none";
        }
    });
    //gán sự kiện click cho button
    document.getElementById('myBtn').addEventListener("click", function() {
        //Nếu button được click thì nhảy về đầu trang
        window.requestAnimationFrame(scrollUp);
    });

    function scrollUp() {
        // Lấy vị trí hiện tại của scroll
        var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

        // Nếu vị trí scroll lớn hơn 0
        if (currentScroll > 0) {
            // Thực hiện việc trượt mượt hơn
            window.requestAnimationFrame(scrollUp);

            // Lấy khoảng cách để trượt và chia cho một số lượng frame nhất định
            // để tạo ra hiệu ứng trượt mượt hơn
            var distanceToScroll = currentScroll - (currentScroll / 8); // tốc độ scroll được quyết định bởi tỉ lệ current / int
            document.documentElement.scrollTop = distanceToScroll;
            document.body.scrollTop = distanceToScroll;
        }
    }


    $scope.scrollUp = function() {
        var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

        // Nếu vị trí scroll lớn hơn 0
        if (currentScroll > 0) {
            // Thực hiện việc trượt mượt hơn
            window.requestAnimationFrame(scrollUp);

            // Lấy khoảng cách để trượt và chia cho một số lượng frame nhất định
            // để tạo ra hiệu ứng trượt mượt hơn
            var distanceToScroll = currentScroll - (currentScroll / 10);
            document.documentElement.scrollTop = distanceToScroll;
            document.body.scrollTop = distanceToScroll;
        }
    }
</script>


</html>