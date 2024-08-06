<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>News</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/headerandfooter.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="navbar">
            <div class="brand">
                <a href="{{ url('home') }}">travelaja</a>
            </div>
            <div class="menus" style="margin-bottom: 14px;">
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('detail') }}">Discover</a></li>
                    <li><a href="{{ url('services') }}">Services</a></li>
                    <li><a href="{{ url('index') }}">News</a></li>
                    <li><a href="{{ url('aboutus') }}">About Us</a></li>
                    <li><a href="{{ url('contact') }}"><b style="color: #43B97F;">Contact</b></a></li>
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
            <div class="banner_mask"></div>
            <div class="banner_text">
                <h2>Our News</h2>
            </div>
        </div>

        <div class="content">
            <div class="content_tittle">
                <div style="font-size: 27.65px">
                    <p>Travelaja Articles</p>
                </div>
                <div style="font-size: 16px">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                </div>
            </div>
            <div class="container">
                <div class="category-menu">
                    @foreach($categories as $id => $name)
                        <a href="{{ route('templates.index', ['category_id' => $id]) }}" class="{{ $id == $categoryId ? 'active' : '' }}">
                            {{ $name }}
                        </a>
                    @endforeach
                </div>
                <div class="row">
                    @foreach($articles as $article)
                        @php
                            $versions = json_decode($article->versions, true);
                            $currentVersion = $versions['current'];
                        @endphp
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset($currentVersion['image']) }}" class="card-img-top">
                                <div class="card-body">
                                    <a href="{{ route('templates.showdetail', ['slug' => $currentVersion['slug']]) }}" class="card-title">{{ $currentVersion['title'] }}</a>
                                    <p class="card-text">{{ \Carbon\Carbon::parse($currentVersion['time'])->format('F j, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="footer">
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
</body>

</html>
