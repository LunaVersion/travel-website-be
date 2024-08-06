<!DOCTYPE html>
<html>

<head>
    <title>News Detail</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/newsdetails.css">
    <link rel="stylesheet" href="../css/headerandfooter.css">
</head>

<body>
    <div class="wrapper">
        <div class="navbar">
            <div class="brand">
                <a href="home.html">travelaja</a>
            </div>
            <div class="menus" style="margin-bottom: 14px;">
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('detail') }}">Discover</a></li>
                    <li><a href="{{ url('services') }}">Services</a></li>
                    <li><a href="{{ url('index') }}">News</a></li>
                    <li><a href="{{ url('aboutus') }}">About Us</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="language">
                <div class="dropdown">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton">
                        ID <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" onclick="change_text('ID')">ID</a></li>
                        <li><a class="dropdown-item" href="#" onclick="change_text('VN')">VN</a></li>
                        <li><a class="dropdown-item" href="#" onclick="change_text('AU')">AU</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="banner">
            <div class="banner_title">
                <h3>Travel Booking Before Missing The Discount</h3>
                <p>September 19, 2022</p>
            </div>
        </div>
        <div class="main">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            @if(isset($content['paragraphs']))
                                @foreach($content['paragraphs'] as $index => $paragraph)
                                    <p>{{ $paragraph }}</p>
                                    @if($index == 0)  <!-- Hiển thị hình ảnh tại chỉ mục 1 -->
                                        <img src="{{ asset($currentVersion['image']) }}" alt="Article Image">
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="col-4">
                            <div class="head">
                                <p>Other Destinations</p>
                                <a href="">See all</a>
                            </div>
                            <div class="card">
                                <div class="overlay"></div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Wakatobi beach is a paradise for coral reets in indonesia
                                    </h5>
                                    <p class="card-text">Yogyakarta, Indonesia</p>
                                    <a href="#" class="btn btn-primary">View more</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="overlay"></div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Wakatobi beach is a paradise for coral reets in indonesia
                                    </h5>
                                    <p class="card-text">Yogyakarta, Indonesia</p>
                                    <a href="#" class="btn btn-primary">View more</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="overlay"></div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Wakatobi beach is a paradise for coral reets in indonesia
                                    </h5>
                                    <p class="card-text">Yogyakarta, Indonesia</p>
                                    <a href="#" class="btn btn-primary">View more</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="overlay"></div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Wakatobi beach is a paradise for coral reets in indonesia
                                    </h5>
                                    <p class="card-text">Yogyakarta, Indonesia</p>
                                    <a href="#" class="btn btn-primary">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="travelaja">travelaja</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus
                            sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus
                            dolor purus non enim praesent elementum facilisis leo, vel</p>
                        <div class="end">
                            <div><b>Ikuti Kami</b></div>
                            <div class="icon">
                                <ul><i class='bx bxl-instagram'></i></ul>
                                <ul><i class='bx bxl-facebook-circle'></i></ul>
                                <ul><i class='bx bxl-twitter'></i></ul>
                                <ul><i class='bx bx-basketball'></i></ul>
                                <ul><i class='bx bxl-github'></i></ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
                        <div class="textcontent"><b>Links</b></div>
                        <div class="list">
                            <ul>
                                <li><a href="">Discover</a></li>
                                <li><a href="">Special Deals</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Community</a></li>
                                <li><a href="">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="textcontent"><b>Services</b></div>
                        <div class="list">
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Blog & Articles</a></lil>
                                <li><a href="">Term and Condition</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="textcontent"><b>Contact</b></div>
                        <p>Address: Jl.Codelaras No.205A</p>
                        <p>Kediri, Pare AG17</p>
                        <p>Phone: 123 456 7890</p>
                        <p>Email: myagungperdana@gmail.com</p>
                        <p>Maps: Kediri, East java</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="../js/header.js"></script>
</body>

</html>