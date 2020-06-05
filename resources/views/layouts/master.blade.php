<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/media.css') }}">
    @stack('css')
    <script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/top.js') }}"></script>

</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" xmlns:xml="http://www.w3.org/XML/1998/namespace" class="svg-defs">
    <defs>
        <g id="shape-moth">
            <path id="main" style="fill:#1cb1f2;" d="M2.457,32.759c6.752,15.757,12.862,9.004,19.615,31.513
                 c4.96,16.533,12.703,21.434,25.763,19.562c-8.291,5.666-11.245,14.512-2.29,30.097c10.611,18.467,29.262,32.338,38.587,34.268
                 s19.615-6.431,21.866-18.328c2.251-11.898,3.216-13.185,11.255-50.485V66.202v-8.039c0,0-44.054-38.266-73.637-42.767
                 C14.033,10.894-4.296,17.003,2.457,32.759z"/>
            <g id="gray">
                <path style="opacity:0.25;fill:#231F20;" d="M117.253,66.202v-8.039c0,0-18.092-15.715-38.874-28.188
                  c-0.713,0.005-1.426,0.019-2.138,0.05c-0.845,0.037-1.785,0.136-2.336,0.776c-1.082,1.255,0.241,3.104,1.484,4.2
                  c-4.664-1.523-9.341-3.008-14.03-4.454c-1.262-0.389-2.927-0.643-3.646,0.465c-0.371,0.571-0.322,1.319-0.153,1.979
                  c0.788,3.075,3.667,5.073,6.336,6.792c-5.27-1.066-10.64-1.636-16.017-1.699c1.343,2.093,3.594,3.397,5.774,4.592
                  c4.539,2.487,9.149,4.844,13.822,7.068c-1.256,0.657-2.719,0.767-4.077,1.175c-1.358,0.408-2.751,1.292-3.027,2.682
                  c-0.142,0.715,0.038,1.456,0.289,2.141c1.25,3.41,4.231,5.957,7.526,7.483s6.92,2.161,10.498,2.781
                  c-4.233,0.646-8.466,1.291-12.698,1.936c-1.283,0.195-2.896,0.742-2.924,2.04c-0.013,0.59,0.345,1.123,0.742,1.56
                  c3.252,3.581,8.933,3.011,13.693,2.153c6.792-1.224,13.584-2.448,20.377-3.672C109.057,67.539,117.253,66.202,117.253,66.202z"/>
                <path style="opacity:0.25;fill:#231F20;" d="M112.228,67.787c-2.598-0.367-5.221,0.297-7.739,1.031
                  c-7.427,2.165-14.659,4.994-21.583,8.444c-1.494,0.744-3.216,1.968-2.936,3.613c-1.226,3.942,15.291-3.223,22.495-6.209
                  c-7.234,3.414-14.403,7.708-18.865,14.346c-0.658,0.979-1.243,2.321-0.531,3.262c0.523,0.691,1.508,0.802,2.375,0.781
                  c6.148-0.141,11.579-3.836,16.54-7.471c-3.057,2.861-5.321,6.561-6.478,10.584c-0.418,1.455-0.608,3.244,0.496,4.279
                  c1.373,1.287,3.636,0.439,5.126-0.711c2.406-1.856,4.297-4.375,5.408-7.204c-0.626,2.171-2.066,6.066-0.944,6.688
                  c1.771,1.537,3.293-1.535,4.463-2.938c4.365-5.225,6.148-12.076,7.745-18.695c0.418-1.735,0.831-3.565,0.336-5.28
                  C117.41,69.788,114.825,68.153,112.228,67.787z"/>
            </g>
            <g id="white">
                <path style="opacity:0.25;fill:#FFFFFF;" d="M22.137,40.268c-0.849,0-1.726,0.543-1.769,1.475
                  c-0.037,0.815,0.565,1.768,1.475,1.768c0.849,0,1.727-0.542,1.769-1.475C23.648,41.22,23.047,40.268,22.137,40.268z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M24.262,24.568c-1.179,0-1.399,1.843-0.204,1.843
                  C25.237,26.411,25.458,24.568,24.262,24.568z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M14.231,25.278c0.04-0.037,0.072-0.081,0.107-0.123
                  c0.309-0.319,0.476-0.754,0.291-1.183c-0.003,0.003-0.005,0.005-0.008,0.008c-0.141-0.572-0.65-1.052-1.262-1.052
                  c-0.448,0.315-0.896,0.631-1.344,0.947c-0.293,0.838,0.385,1.732,1.244,1.765c0.055,0.002,0.111-0.01,0.168-0.017
                  c0.058,0.023,0.177-0.003,0.358-0.081C13.955,25.494,14.104,25.406,14.231,25.278z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M20.52,21.826c0.084-0.715-0.407-1.361-1.148-1.382
                  c-0.707-0.021-1.308,0.59-1.226,1.314c0.005,0.047,0.01,0.095,0.016,0.142c0.146,1.277,2.176,1.467,2.337,0.1
                  C20.506,21.942,20.513,21.884,20.52,21.826z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M15.237,34.119c-0.91,0-1.784,0.802-1.741,1.741c0.042,0.943,0.767,1.742,1.741,1.742
                  c0.91,0,1.784-0.802,1.741-1.741C16.936,34.917,16.212,34.119,15.237,34.119z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M42.191,72.243c-2.578,0-2.182,3.992,0.384,3.992
                  C45.153,76.234,44.757,72.243,42.191,72.243z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M44.656,29.401c-0.554,0-0.545,0.859,0.009,0.859S45.209,29.401,44.656,29.401z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M25.514,36.061c-1.595,0-1.91,2.492-0.295,2.492
                  C26.814,38.553,27.129,36.061,25.514,36.061z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M33.376,61.474c-1.237,0-2.44,1.016-2.413,2.311c0.027,1.257,0.991,2.413,2.312,2.413
                  c1.237,0,2.44-1.016,2.413-2.311C35.661,62.629,34.696,61.474,33.376,61.474z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M35.116,16.812c-1.552,0-1.267,2.404,0.277,2.404
                  C36.945,19.215,36.66,16.812,35.116,16.812z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M77.376,51.331c2.442,0,1.936-3.77-0.477-3.77
                  C74.458,47.561,74.963,51.331,77.376,51.331z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M48.942,50.548c-0.15-0.651-0.902-1.142-1.562-0.848
                  c-0.025,0.011-0.051,0.022-0.076,0.034c-0.979,0.437-0.932,1.75-0.107,2.144c-0.044-0.004-0.017,0.01,0.078,0.042
                  c0.036,0.013,0.071,0.025,0.11,0.035c0.031,0.009,0.058,0.018,0.095,0.03c0.07,0.009,0.139,0.002,0.208,0.004
                  c0.037,0,0.066,0.014,0.105,0.012c-0.018-0.004-0.03-0.007-0.047-0.01c0.054,0,0.108,0.008,0.163,0.003
                  C48.624,51.952,49.095,51.211,48.942,50.548z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M101.91,58.289c0.253-0.486,0.505-0.972,0.758-1.458
                  c0.034-0.763-0.689-1.408-1.424-1.402c-0.741,0.006-1.44,0.658-1.402,1.424c0.03,0.596,0.211,0.955,0.646,1.349
                  C100.833,58.516,101.529,58.617,101.91,58.289z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M72.562,61.389c1.71,0,1.868-2.664,0.146-2.664
                  C70.999,58.726,70.841,61.389,72.562,61.389z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M53.266,34.617c0.824,0,1.694-0.446,1.77-1.371c0.062-0.766-0.486-1.77-1.372-1.77
                  c-0.824,0-1.694,0.446-1.77,1.371C51.832,33.613,52.38,34.617,53.266,34.617z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M71.696,72.52c0.085-0.071,0.17-0.143,0.255-0.214
                  c0.561-0.472,0.552-1.399,0.071-1.917c-0.443-0.478-1.453-0.644-1.917-0.071c-0.132,0.157-0.265,0.314-0.397,0.471
                  c-0.421,0.5-0.216,1.346,0.241,1.731C70.459,72.952,71.178,72.955,71.696,72.52z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M32.988,54.343c0.024-0.008,0.048-0.017,0.072-0.024
                  c0.581-0.197,1.025-0.667,1.039-1.307c0.013-0.607-0.404-1.171-0.983-1.349c-0.05-0.015-0.1-0.03-0.149-0.045
                  c-0.885-0.271-1.785,0.486-1.778,1.376C31.195,53.875,32.11,54.64,32.988,54.343z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M55.757,99.48c-0.062,0-0.069,0.097-0.007,0.097S55.82,99.48,55.757,99.48z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M68.578,103.393c1.381,0,2.629-1.404,2.498-2.771
                  c-0.143-1.484-1.292-2.498-2.772-2.498c-1.381,0-2.629,1.404-2.498,2.771C65.948,102.377,67.097,103.393,68.578,103.393z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M97.476,104.439c-0.519,0-0.992,0.33-1.038,0.878
                  c-0.041,0.485,0.356,1.038,0.878,1.038c0.519,0,0.992-0.33,1.038-0.879C98.395,104.992,97.997,104.439,97.476,104.439z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M77.346,122.857c-1.629,0-1.901,2.542-0.255,2.542
                  C78.719,125.399,78.991,122.857,77.346,122.857z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M84.572,96.312c-1.757,0-1.841,2.734-0.077,2.734
                  C86.252,99.047,86.336,96.312,84.572,96.312z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M83.437,132.299c0,0.205,0.011,0.285,0.164,0.428c0.06,0.056,0.183,0.063,0.247,0.009
                  c0.139-0.12,0.175-0.196,0.175-0.379C84.022,131.981,83.437,131.921,83.437,132.299z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M80.15,134.337c-0.739,0-1.384,0.575-1.406,1.329
                  c-0.021,0.725,0.587,1.406,1.329,1.406c0.739,0,1.384-0.576,1.406-1.33C81.5,135.018,80.893,134.337,80.15,134.337z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M82.279,94.513c0.062,0,0.069-0.097,0.007-0.097S82.217,94.513,82.279,94.513z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M89.774,137.776c-1.996,0-2.44,3.115-0.423,3.115
                  C91.346,140.892,91.791,137.776,89.774,137.776z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M50.268,102.34c-2.577,0-2.182,3.991,0.384,3.991
                  C53.23,106.331,52.834,102.34,50.268,102.34z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M102.567,87.297c-1.773,0-1.832,2.758-0.053,2.758
                  C104.288,90.055,104.346,87.297,102.567,87.297z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M91.979,86.034c-1.742,0-1.851,2.712-0.101,2.712
                  C93.621,88.746,93.73,86.034,91.979,86.034z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M100.904,128.99c-1.151,0-2.121,1.31-1.964,2.402c0.184,1.274,1.173,1.963,2.401,1.963
                  c1.151,0,2.121-1.309,1.964-2.4C103.122,129.68,102.132,128.99,100.904,128.99z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M60.562,25.956c0.293-0.054,0.386-0.217,0.573-0.419
                  c-0.012-1.532-0.375-2.137-1.09-1.813c-0.129,0.038-0.243,0.106-0.34,0.204c-0.197,0.185-0.324,0.468-0.329,0.738
                  c-0.002,0.112,0.027,0.219,0.061,0.324c-0.02,0.045,0.003,0.146,0.081,0.317c0.102,0.165,0.219,0.317,0.353,0.458
                  C60.031,25.953,60.335,25.998,60.562,25.956z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M56.924,108.887c-2.75,0-3.264,4.301-0.475,4.301
                  C59.199,113.188,59.713,108.887,56.924,108.887z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M53.242,59.583c-0.476,0-0.826,0.542-0.776,0.977c0.06,0.517,0.499,0.776,0.977,0.776
                  c0.476,0,0.826-0.542,0.776-0.977C54.159,59.842,53.72,59.583,53.242,59.583z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M54.099,91.461c-0.221-0.949-1.727-1.088-1.975-0.074
                  c-0.011,0.045-0.022,0.09-0.033,0.135c-0.162,0.658,0.298,1.334,0.999,1.342c0.683,0.008,1.185-0.65,1.031-1.311
                  C54.113,91.521,54.106,91.491,54.099,91.461z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M64.819,117.838c-3.99,0-4.358,6.216-0.343,6.216
                  C68.466,124.054,68.834,117.838,64.819,117.838z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M69.296,111.33c-2.578,0-2.182,3.992,0.384,3.992
                  C72.257,115.322,71.861,111.33,69.296,111.33z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M60.58,105.219c-1.366,0-1.376,2.126-0.004,2.126
                  C61.941,107.345,61.952,105.219,60.58,105.219z"/>
                <path style="opacity:0.25;fill:#FFFFFF;" d="M76.1,126.199c-0.632-0.469-1.275-0.611-2.06-0.611c-0.675,0-1.48,0.521-1.889,1.024
                  c-0.434,0.535-0.715,1.368-0.611,2.061c0.108,0.719,0.423,1.442,1.024,1.889c0.632,0.47,1.275,0.612,2.06,0.612
                  c0.675,0,1.48-0.521,1.889-1.025c0.434-0.534,0.715-1.367,0.611-2.06C77.017,127.37,76.701,126.646,76.1,126.199z"/>
            </g>
            <path id="black" style="fill:#2A0E07;" d="M119.744,44.906c-0.432,0-0.834,0.038-1.212,0.105
                  C111.203,25.333,94.966,3.371,94.218,2.517c-0.767-0.877-1.425-3.234-2.521-2.302c-1.096,0.932,1.37,2.138,1.37,2.138
                  S92.929,3.372,94,3.503c0,0,5.938,7.827,10.25,14.964c6.474,10.715,11.965,22.628,13.779,26.68
                  c-3.596,0.985-4.503,5.059-3.919,8.202l-2.333-1.103C98.575,41.592,67.056,17.901,43.774,14.358
                  c-6.339-0.964-12.222-1.454-17.484-1.454c-12.627,0-21.129,2.773-24.588,8.019c-2.196,3.33-2.266,7.452-0.209,12.25
                  c3.013,7.032,5.939,9.746,8.77,12.371c0.7,0.648,1.392,1.292,2.08,1.995c0.094,0.257,0.285,0.479,0.555,0.6
                  c0.009,0.004,0.019,0.007,0.027,0.011c1.989,2.152,3.956,4.984,5.989,10.133c0.001,0.003,0.002,0.005,0.003,0.008
                  c0.708,1.792,1.423,3.858,2.15,6.283c4.352,14.506,10.892,20.695,21.869,20.696c0,0,0.001,0,0.001,0c0.481,0,0.975-0.017,1.477-0.04
                  c-2.246,2.095-3.779,4.438-4.62,7.069c-1.897,5.936-0.312,13.184,4.842,22.155c1.815,3.158,3.898,6.22,6.15,9.136
                  c0.008,0.014,0.021,0.024,0.029,0.037c10.451,13.517,24.587,23.839,33.105,25.601c0.958,0.198,1.948,0.299,2.94,0.299
                  c9.246,0,18.105-8.548,20.169-19.461c1.029-5.438,1.804-8.716,3.087-14.144c1.128-4.771,2.685-11.36,5.195-22.707
                  c0.665,10.199,2.016,24.19,4.432,24.19V44.906z M35.848,16.16c2.901-0.106,5.809,0.058,8.682,0.469
                  c5.109,0.908,10.638,2.792,16.295,5.3c2.278,1.205,4.466,2.579,6.525,4.13c3.193,2.406,6.108,5.209,9.566,7.216
                  c3.327,1.93,7.053,3.062,10.5,4.767c5.238,2.591,9.825,6.489,14.729,9.652l-8.689-4.105C74.52,34.644,53.71,24.818,31.831,19.668
                  c-0.585-0.471-1.17-0.941-1.755-1.412C31.372,16.582,33.732,16.238,35.848,16.16z M7.962,22.743c0.506-1.92,2.278-3.303,4.18-3.875
                  c0.289-0.087,0.581-0.153,0.875-0.211c28.333,2.646,55.462,15.455,79.543,26.832l17.997,8.502c1.438,1.156,2.657,2.153,3.607,2.941
                  C92.849,46.826,70.211,40.173,46.782,37.124c-0.111-0.131-0.243-0.245-0.414-0.311c-9.86-3.759-21.037-8.019-32.449-8.131
                  c-1.068-0.01-2.144,0.017-3.218,0.043C8.729,27.372,7.361,25.018,7.962,22.743z M114.475,59.41
                  c-0.161,0.835-0.293,1.815-0.348,2.904c-22.391-2.471-29.897-5.986-34.008-7.915l-0.104-0.049
                  C66.1,47.824,55.373,42.562,50.079,39.689C72.464,42.968,94.086,49.593,114.475,59.41z M19.93,47.952
                  c-4.349-2.468-7.875-6.399-9.753-11.04c-0.639-1.58-0.967-3.685,0.375-4.736c0.571-0.448,1.321-0.58,2.037-0.699
                  c1.227-0.203,2.454-0.406,3.681-0.609c9.823,0.581,19.239,4.056,28.373,7.534c0.216,0.518,1.243,1.429,6.299,4.121
                  c-5.771-0.006-13.403,0.936-16.787,2.813C29.875,47.713,24.792,48.597,19.93,47.952z M21.549,51.725
                  c-0.064-0.533,0.15-1.08,0.495-1.495c0.327,0.013,0.653,0.025,0.98,0.025c4.229,0,8.463-1.036,12.15-3.083
                  c3.792-2.104,15.472-3.124,20.442-2.236c2.401,1.21,5.336,2.655,8.898,4.376c-11.647,4.124-24.023,6.564-36.906,7.283
                  c-1.359-0.519-2.661-1.187-3.862-2.009C22.722,53.885,21.697,52.957,21.549,51.725z M29.097,67.986
                  c-2.48-1.302-4.213-4.392-2.97-6.876c0.626-1.252,1.781-2.007,3.108-2.504c13.216-0.876,25.899-3.546,37.814-7.973
                  c0.035-0.013,0.059-0.041,0.092-0.057c3.445,1.651,7.401,3.526,11.981,5.674l0.104,0.049c3.789,1.778,10.391,4.869,28.149,7.299
                  c-12.303,0.856-25.29,1.494-37.933,2.11C55.979,66.364,42.113,67.041,29.097,67.986z M34.109,77.414
                  c-1.649-0.75-3.422-1.818-3.808-3.588c-0.327-1.499,0.528-3.003,1.773-3.943c12.166-0.841,24.986-1.47,37.472-2.078
                  c12.259-0.597,24.84-1.215,36.82-2.033C90.1,68.265,61.841,75.749,52.503,80.04c-0.798,0.367-1.556,0.746-2.281,1.135
                  C44.674,80.967,39.165,79.712,34.109,77.414z M64.548,80.374c8.236-2.934,17.275-5.436,25.518-7.447
                  c-12.694,5.347-25.45,10.878-38.037,16.489c-1.942-0.222-2.836-2.7-1.326-4.068c0.495-0.448,1.016-0.864,1.55-1.265
                  C55.78,83.282,59.811,82.062,64.548,80.374z M56.848,80.527c3.792-1.427,8.941-3.056,14.663-4.678
                  c-2.6,0.809-5.17,1.658-7.667,2.547c-2.188,0.779-4.215,1.454-6.109,2.034L56.848,80.527z M45.697,95.204
                  c0.23-0.316,0.478-0.62,0.731-0.918c0.986-0.51,1.978-0.96,2.894-1.37C63.976,86.35,78.913,79.871,93.72,73.661
                  c3.257-1.366,6.775-2.831,10.436-3.905c2.466-0.511,4.681-0.948,6.563-1.307C99.836,74.044,89.121,80.017,78.74,85.826
                  c-3.084,1.725-6.175,3.454-9.282,5.181c-7.016,1.443-13.792,4.04-19.988,7.634c-0.431,0.154-0.86,0.314-1.293,0.463
                  c-1.027,0.35-2.221,0.098-2.899-0.749C44.431,97.295,45.031,96.119,45.697,95.204z M49.318,109.789
                  c-0.971,0.438-1.994,0.631-2.883,0.115c-0.782-0.453-1.205-1.358-1.338-2.252c-0.238-1.594,0.32-3.201,1.253-4.536
                  c6.237-4.29,13.226-7.491,20.56-9.369C60.84,100.435,53.764,106.32,49.318,109.789z M57.649,115.376
                  c-0.745,0.335-1.52,0.589-2.332,0.608c-1.274,0.029-2.647-0.633-3.069-1.836c-0.299-0.854-0.081-1.797,0.215-2.65
                  c0.29-0.835,0.662-1.641,1.095-2.411c4.966-4.053,11.554-9.89,16.951-16.264c3.098-1.721,6.18-3.444,9.255-5.165
                  c9.997-5.595,20.305-11.337,30.758-16.745L93.576,93.461c-2.318,3.085-4.943,6.547-8.361,8.708c-0.291-0.178-0.6-0.284-0.88-0.36
                  c-5.963-1.614-11.762,1.988-17.141,6.117c-0.869,0.666-1.737,1.321-2.601,1.973C62.191,111.71,59.857,113.478,57.649,115.376z
                  M61.09,126.312c-1.117-0.712-1.74-2.008-1.749-3.332c-0.019-2.774,0.722-5.521,2.035-7.957c1.456-1.159,2.952-2.295,4.48-3.448
                  c0.868-0.654,1.741-1.313,2.614-1.983c4.613-3.541,9.982-7.196,15.316-5.756c0.247,0.066,0.321,0.106,0.333,0.111
                  c0.026,0.057,0.043,0.349-0.204,0.931c-2.182,5.168-6.292,9.436-10.267,13.564c-1.296,1.346-2.603,2.707-3.859,4.109
                  c-1.375,1.052-2.781,2.064-4.22,3.027C64.254,126.459,62.72,127.351,61.09,126.312z M71.552,134.313
                  c-1.399,0.11-2.929-0.459-3.607-1.688c-0.667-1.209-0.377-2.71,0.047-4.024c0.111-0.344,0.234-0.683,0.361-1.021
                  c1.971-2.655,4.352-5.133,6.808-7.684c4.107-4.266,8.355-8.676,10.688-14.203c0.282-0.668,0.386-1.222,0.379-1.682
                  c3.448-2.145,6.055-5.364,8.341-8.385c-0.961,2.862-1.778,5.873-2.573,8.851c-1.159,4.337-2.254,8.435-3.748,11.866
                  c-2.532,5.816-6.853,10.396-11.428,15.244c-0.215,0.229-0.434,0.462-0.65,0.691c-0.249,0.167-0.487,0.349-0.74,0.508
                  C74.242,133.533,72.951,134.203,71.552,134.313z M82.993,137.979c-0.45,0.44-0.907,0.872-1.376,1.292
                  c-1.084,0.971-2.655,1.328-3.959,0.683c-2.012-0.996-1.775-3.246-0.991-5.137c0.561-0.601,1.123-1.197,1.681-1.788
                  c4.497-4.767,9.148-9.694,11.826-15.848c1.557-3.576,2.671-7.747,3.851-12.162c1.766-6.606,3.591-13.438,6.976-17.941l12.134-16.143
                  C105.305,94.079,96.936,117.654,82.993,137.979z M109.489,107.959c-0.035,0.629-0.068,1.26-0.1,1.89
                  c-0.501,2.148-0.933,3.975-1.315,5.591c-1.29,5.457-2.068,8.75-3.106,14.236c-0.224,1.182-0.539,2.331-0.924,3.442
                  c-0.42,0.758-0.856,1.507-1.328,2.233c-0.839,1.293-1.949,2.662-3.672,2.398c-1.159-0.178-2.065-1.103-2.415-2.223
                  c-0.117-0.374-0.172-0.742-0.198-1.108c4.904-11.366,9.504-22.899,13.757-34.546C109.845,102.563,109.636,105.278,109.489,107.959z
                  M114.246,81.893C107.2,103.03,99,123.926,89.818,144.188c-0.26,0.211-0.542,0.398-0.858,0.546c-0.733,0.344-1.603,0.416-2.335,0.07
                  c-1.352-0.639-1.526-2.199-1.474-3.557c0.042-1.106,0.165-2.175,0.368-3.22c13.18-19.612,21.321-42.033,28.834-64.154
                  c0.141,0.504,0.364,1.033,0.713,1.581C115.066,75.455,112.771,78.854,114.246,81.893z"/>
        </g>

    </defs>
</svg>
    <div align="center">
        <div class="butterfly_container">
            <var class="rotate3d">
                <figure class="butterfly">
                    <svg class="wing left" viewBox="0 0 119.744 148.477">
                        <use class="left" xlink:href="#shape-moth"></use>
                    </svg>
                    <svg class="wing right" viewBox="0 0 119.744 148.477">
                        <use class="left" xlink:href="#shape-moth"></use>
                    </svg>
                </figure>
            </var>
        </div>
    </div>
</button>

<nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-md-block" id="top-nav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle ">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav job-bar">
            @if(!Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Sign Up</a>
            </li>

            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome {{ App\User::find(Auth::id())->username }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                    </div>
                </li>
            @endif
            <!-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;Wishlist</a>
                  </li> -->

        </ul>
        <ul class="navbar-nav social ml-auto mr-4">
            <li class="nav-item p-r-30">
                <input class="form-control my-2" id="search" type="search" placeholder="Search" aria-label="Search">
                <a href="" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/cart/view') }}" class="nav-link" id="cart-icon">
                    <img src="{{ asset('icon/cart.png') }}">
                    <span class="cart-round"></span>
                    <span class="cart-item">
                        {{--@if(Auth::check())--}}
                            {{--{{ \App\Cart::where('user_id',Auth::id())->count() }}--}}
                        {{--@else--}}
                            {{--0--}}
                        {{--@endif--}}
                        @if(session()->get('cartList') != null)
                        {{  count(session()->get('cartList')) }}
                        @else
                            0
                        @endif
                    </span>
                </a>
            </li>

            {{--@if(!Auth::check())--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="{{ url('/logout') }}" class="nav-link">logout</a>--}}
                {{--</li>--}}
            {{--@endif--}}

        </ul>
    </div>
</nav>

<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--   <a class="navbar-brand" href="#">
            <img src="icon/logo.png" alt="logo" class="logo">
          </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavsecond" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle ">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavsecond">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <img src="{{ asset('icon/flowers.png') }}" class="img">
                    <a class="nav-link dropdown-toggle cl-red" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Flowers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/categorySearch/productCat/Callia Lillies') }}">CALLA LILLIES</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/productCat/Cymbidium Orchid') }}">CYMBIDIUM ORCHID</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/productCat/Daises') }}">Daises</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/productCat/Hydrandgeas') }}">Hydrandgeas</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/productCat/Lilies') }}">Lilies</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/productCat/Plants') }}">Plants</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/productCat/Others') }}">Others</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <img src="{{ asset('icon/occassion.png') }}" class="img icon-occ">
                    <a class="nav-link dropdown-toggle cl-red" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Occassions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/categorySearch/occasionCat/Love & Rommance') }}">Love & Romance</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/occasionCat/Birthday') }}">Birthday</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/occasionCat/Anniversary') }}">Anniversary</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/occasionCat/Get Well Soon') }}">Get Well</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/occasionCat/Thank You') }}">Thank You</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/occasionCat/Congrats') }}">Congrats</a>
                        <a class="dropdown-item" href="{{ url('/categorySearch/occasionCat/Wedding') }}">Wedding</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('support') }}" class="nav-link">
                        <img src="{{ asset('icon/support.png') }}" alt="" class="img">
                        <span>Support</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('blog') }}" class="nav-link">
                        <img src="{{ asset('icon/blog.png') }}" alt="" class="img">
                        <span>Blog</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <img src="{{ asset('icon/logo.png') }}" alt="" id="logo" class="img">
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ls">
                <li class="nav-item">
                    <a href="{{ url('event') }}" class="nav-link">
                        <img src="{{ asset('icon/events.png') }}" alt="" class="img">
                        <span>Events</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('about') }}" class="nav-link">
                        <img src="{{ asset('icon/about-us.png') }}" alt="" class="img">
                        <span>About Us</span>
                    </a>
                </li>
                <li class="nav-item   ">
                    <a href="{{ url('contact') }}" class="nav-link">
                        <img src="{{ asset('icon/contact-us.png') }}" alt="" class="img">
                        <span>Contact Us</span>
                    </a>
                </li>
                <li class="nav-item faq ">
                    <a href="{{ url('/faq') }}" class="nav-link">
                        <img src="{{ asset('icon/faq.png') }}" alt="" class="img">
                        <span>Faq</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</div>




@yield('content')



<div class="insta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="decor-title">Instagram</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('image/insta1.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('image/insta2.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('image/insta3.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('image/insta4.jpg') }}" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="here">
    <div class="container-fluid">
        <div class="col-md-12">
            <h3>Here We Are</h3>
            <a href="contact.html" class="btn btn-warning">Contact Us</a>
        </div>
    </div>
</div>
<div class="map">
    <div class="container">
        <div class="col-md-12">
            <div class="map_section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.5872639163554!2d90.38581001498356!3d23.868785684531126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41a1356bebb%3A0xd230134f87092b1a!2sRd+No+19%2C+Dhaka+1230%2C+Bangladesh!5e0!3m2!1sen!2s!4v1501949968773" style="border:0" allowfullscreen="" frameborder="0" height="300" width="100%"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="news">
    <div class="container-fluid">
        <div class="row ">

            <div class="col-md-6 offset-md-3">
                <input class="form-control" type="text" placeholder="Enter Your Email">
            </div>
            <div class="col-md-2">
                <a href="" class="btn btn-outline-warning">Subscribe</a>
            </div>
        </div>
    </div>
</div>

<!-- =======================footer====================== -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer_dot"></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="footer-title">
                    <h3>About</h3>
                </div>
                <div class="footer-item">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('about') }}" target="_blank" class="nav-link" id="link">About us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" target="_blank" class="nav-link" id="link">Shopping Guide</a>
                        </li>
                        <li class="nav-item">
                            <a href="" target="_blank" class="nav-link" id="link">Delivery Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="" target="_blank" class="nav-link" id="link">Return Policy</a>
                        </li>
                        <li class="nav-item">
                            <a href="" target="_blank" class="nav-link" id="link">Privacy Policy</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-title">
                    <h3>My Account</h3>
                </div>
                <div class="footer-item">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/login') }}" class="nav-link" id="link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/register') }}" class="nav-link" id="link">Create Account</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" id="link">Newsletter</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-title">
                    <h3>Catalog</h3>
                </div>
                <div class="footer-item">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link" id="link">New Arrival</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" id="link">Popular</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" id="link">Sale Off</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-title">
                    <h3>Payment</h3>
                </div>
                <img src="{{ asset('image/paypal.png') }}" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="footer-social">
                <a href="https://twitter.com/minimalmonkey" class="icon-button twitter">
                    <i class="fa fa-twitter"></i><span></span>
                </a>
                <a href="https://facebook.com" class="icon-button facebook">
                    <i class="fa fa-facebook"></i><span></span>
                </a>
                <a href="https://plus.google.com" class="icon-button google-plus">
                    <i class="fa fa-google-plus"></i><span></span>
                </a>
            </div>
            <div class="footer_dot"></div>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2018 <a href="http://bdsoftech.com" target="_blank" class="nav-link" id="link">BDSOFTECH</a>All Rights Reserved </p>
        </div>
    </div>
</div>
<!-- ==================================End Footer======================== -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="jquery.counterup.min.js"></script>
@stack('js')
<script>


</script>
<script>
    $(document).ready(function(){

        $('.nav-tabs li').click(function(){

            $(' li').removeClass("bro");

            $(this).addClass("bro");

        });


    });
</script>
<script>
    $(window).scroll(function(){
        if ($(this).scrollTop()>200){
            if($(window).width() >= 768){
                $('.menu').addClass('nava');
            }
        }
        else{
            $('.menu').removeClass('nava');

        }

    });

</script>
</body>
</html>