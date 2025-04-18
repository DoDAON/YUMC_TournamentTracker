<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game League Tournament</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-rose-500 via-orange-400 to-amber-400">
    <!-- 네비게이션 바 -->
    <nav class="bg-white/10 backdrop-blur-md w-full">
        <div class="container mx-auto px-4 sm:px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-white text-xl sm:text-2xl font-bold">GAME LEAGUE</div>
                <!-- 모바일 메뉴 버튼 -->
                <div class="sm:hidden">
                    <button id="mobile-menu-button" class="text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <!-- 데스크톱 메뉴 -->
                <div class="hidden sm:flex space-x-4 sm:space-x-6">
                    <a href="#" class="text-white hover:text-amber-200 transition">진행중인 토너먼트</a>
                    <a href="#" class="text-white hover:text-amber-200 transition">종료된 토너먼트</a>
                    <a href="#" class="bg-white text-rose-500 px-4 py-2 rounded-full hover:bg-amber-200 transition">참가하기</a>
                </div>
            </div>
            <!-- 모바일 메뉴 -->
            <div id="mobile-menu" class="hidden sm:hidden mt-4">
                <div class="flex flex-col space-y-4">
                    <a href="#" class="text-white hover:text-amber-200 transition">진행중인 토너먼트</a>
                    <a href="#" class="text-white hover:text-amber-200 transition">종료된 토너먼트</a>
                    <a href="#" class="bg-white text-rose-500 px-4 py-2 rounded-full hover:bg-amber-200 transition text-center">참가하기</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- 히어로 섹션 -->
    <section class="min-h-screen flex items-center relative overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 pt-20 sm:pt-32">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-12 items-center">
                <div class="animate__animated animate__fadeInLeft text-center sm:text-left">
                    <h1 class="text-3xl sm:text-5xl font-bold text-white mb-4 sm:mb-6">최고의 게이머를 가리는<br>ultimate 토너먼트</h1>
                    <p class="text-white/80 text-base sm:text-lg mb-6 sm:mb-8">
                        전략, 실력, 그리고 열정이 만나는 곳.<br>
                        당신의 게임 실력을 증명하고 최고의 자리에 도전하세요.
                    </p>
                    <button class="bg-white text-rose-500 px-6 sm:px-8 py-3 sm:py-4 rounded-full text-base sm:text-lg font-bold hover:bg-amber-200 transition transform hover:scale-105">
                        토너먼트 참가하기
                    </button>
                </div>
                <div class="animate__animated animate__fadeInRight">
                    <img src="https://placehold.co/600x400" alt="Tournament illustration" class="w-full rounded-lg shadow-2xl">
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <!-- 진행중인 토너먼트 섹션 -->
    <section class="bg-white py-12 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 sm:mb-12 text-center">진행중인 토너먼트</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- 토너먼트 카드 1 -->
                <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 hover:transform hover:scale-105 transition duration-300">
                    <div class="bg-rose-500 text-white px-3 py-1 rounded-full text-sm inline-block mb-4">진행중</div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">2024 봄 시즌 챔피언십</h3>
                    <p class="text-gray-600 mb-4">2024.03.01 - 2024.04.30</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">참가자 32/64</span>
                        <button class="bg-rose-500 text-white px-4 py-2 rounded-full text-sm hover:bg-rose-600">상세보기</button>
                    </div>
                </div>
                <!-- 추가 토너먼트 카드들... -->
            </div>
        </div>
    </section>

    <!-- 종료된 토너먼트 섹션 -->
    <section class="bg-gray-50 py-12 sm:py-20">
        <div class="container mx-auto px-4 sm:px-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 sm:mb-12 text-center">종료된 토너먼트</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <!-- 종료된 토너먼트 카드 -->
                <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 opacity-75">
                    <div class="bg-gray-500 text-white px-3 py-1 rounded-full text-sm inline-block mb-4">종료</div>
                    <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-2">2023 겨울 챔피언십</h3>
                    <p class="text-gray-600 mb-4">2023.12.01 - 2024.01.31</p>
                    <button class="w-full bg-gray-500 text-white px-4 py-2 rounded-full text-sm hover:bg-gray-600">결과보기</button>
                </div>
                <!-- 추가 종료된 토너먼트 카드들... -->
            </div>
        </div>
    </section>

    <!-- 푸터 -->
    <footer class="bg-gray-900 text-white py-8 sm:py-12">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <div>
                    <h3 class="text-lg sm:text-xl font-bold mb-4">GAME LEAGUE</h3>
                    <p class="text-gray-400">최고의 게이머들이 모이는 곳</p>
                </div>
                <div>
                    <h4 class="text-base sm:text-lg font-semibold mb-4">빠른 링크</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">토너먼트 일정</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">규칙 안내</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">자주 묻는 질문</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-base sm:text-lg font-semibold mb-4">문의하기</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-400">이메일: support@gameleague.com</li>
                        <li class="text-gray-400">전화: 1588-1234</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-base sm:text-lg font-semibold mb-4">소셜 미디어</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">Twitter</a>
                        <a href="#" class="text-gray-400 hover:text-white">Discord</a>
                        <a href="#" class="text-gray-400 hover:text-white">YouTube</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Game League. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // 모바일 메뉴 토글
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>


