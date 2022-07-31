<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SOWA">
    <meta name="twitter:description" content="Tra cứu bảo hành sản phẩm SOWA">
    <meta name="twitter:image" content="http://themepixels.me/SOWA/img/SOWA-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/SOWA">
    <meta property="og:title" content="SOWA">
    <meta property="og:description" content="Tra cứu bảo hành sản phẩm SOWA">

    <meta property="og:image" content="http://themepixels.me/SOWA/img/SOWA-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/SOWA/img/SOWA-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Tra cứu bảo hành sản phẩm SOWA">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <title>Tra cứu bảo hành sản phẩm SOWA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
    /*
 * Globals
 */


    /* Custom default button */
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus {
        color: #333;
        text-shadow: none;
        /* Prevent inheritance from `body` */
    }


    /*
 * Base structure
 */

    .cover-container {
        max-width: 42em;
    }


    /*
 * Header
 */

    .nav-masthead .nav-link {
        color: rgba(255, 255, 255, .5);
        border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
        margin-left: 1rem;
    }

    .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
    }

    .accordion-collapse {
        padding: 20px;
        background: #e8f8ff;
    }
    </style>
</head>

<body class="d-flex h-100 text-center text-dark bg-white">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-3">
            <div>
                <h3 class="mb-0"><img style="height: auto;"
                        src="{{ asset('logo.png') }}"
                        alt="logo"></h3>
            </div>
        </header>

        <main class="px-2">
            <h1>Tra cứu thông tin bảo hành</h1>
            <p class="lead">Quý khách vui lòng nhập số điện thoại ở ô tìm kiếm để tra cứu lịch sử mua hàng và thông tin
                bảo hành sản phẩm</p>
            <p class="lead">
            <form method="get" action="{{ route('index') }}">
                <div class="input-group">
                    <input type="search" class="form-control rounded" name="phone"
                        value="{{ app('request')->input('phone') }}" placeholder="Nhập số điện thoại mua hàng"
                        aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">Tra cứu</button>
                </div>
            </form>
            </p>
            @if (isset($warranty))
            <div class="display-table text-start">
                @foreach ($warranty as $item)
                @if ($loop->index == 0)
                <div><strong>Khách hàng:</strong> <span> {{ $item->name}}</span></div>
                <div><strong>Số điện thoại:</strong> <span> {{ $item->phone}}</span></div>
                <div><strong>Địa chỉ:</strong> <span> {{ $item->address ?? $item->branch}}</span></div>
                @endif
                @endforeach
                <div class="accordion mt-3" id="accordionFlushExample">
                    @foreach ($warranty as $item)
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-item-{{$loop->index}}" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <strong>Sản phẩm:</strong> <span> {{ $item->product}}</span>
                            </button>
                        </h2>
                        <div id="flush-item-{{$loop->index}}"
                            class="accordion-collapse collapse @if ($loop->index == 0) show @endif"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div><strong>Ngày tạo đơn hàng:</strong> <span> {{ $item->start}}</span></div>
                            <div><strong>Ngày hết hạn bảo hành:</strong> <span> {{ $item->experied->format("d/m/Y") }}
                                    23:59:59</span></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            @if (isset($error))
            {!! $error !!}
            @endif
        </main>

        <footer class="mt-auto text-dark-50">
            <p>Trang website tra cứu thông tin bảo hành sản phẩm của <strong>SOWA</strong></p>

        </footer>
    </div>





</body>

</html>