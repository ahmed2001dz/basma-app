<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>معهد حسين الطولقي | التكوين المهني بطولقة</title>
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- Font Awesome 6 (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: Cairo (modern Arabic) -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
        <style>
            body {
            font-family: 'Cairo', sans-serif;
        }

        /* custom hover-lift */
        .hover-lift {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .hover-lift:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
        }

        /* border-gradient wrapper */
        .border-gradient-wrapper {
            background: linear-gradient(135deg, #1e3a8a, #10b981);
            padding: 2px;
            border-radius: 1rem;
            transition: all 0.2s;
        }

        /* glassmorphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 1.5rem;
        }

        /* glow effect for button */
        .glow-hover {
            transition: box-shadow 0.3s ease;
        }

        .glow-hover:hover {
            box-shadow: 0 0 20px #10b981, 0 0 40px #1e3a8a;
        }
        </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased" >

<nav>
    <div>
    <nav class="sticky top-0 z-50 bg-white/70 backdrop-blur-md border-b border-white/20 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- logo / brand (right side) -->
                <div class="flex items-center space-x-2 space-x-reverse">
                    <div
                        class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-800 to-emerald-500 flex items-center justify-center">
                        <img src="{{ asset('images/logo.jpg') }}" alt="">
                    </div>

                    <span
                        class="font-bold text-xl tracking-tight bg-gradient-to-r from-blue-900 to-emerald-600 bg-clip-text text-transparent">معهد
                        حسين الطولقي</span>
                </div>
                <!-- nav links (desktop) - RTL -->
                <div class="hidden md:flex items-center space-x-6 text-m font-medium">
                    <a  class="text-gray-700 hover:text-emerald-600 transition">الرئيسية</a>
                    <a  class="text-gray-700 hover:text-emerald-600 transition">التخصصات</a>
                    <a href="#" class="text-gray-700 hover:text-emerald-600 transition">الأخبار</a>
                    <a href="#" class="text-gray-700 hover:text-emerald-600 transition">اتصل بنا</a>
                </div>
                <!-- cta button (small) -->
                <a href="#"
                    class="bg-gradient-to-r from-blue-800 to-emerald-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-md hover:shadow-xl hover:scale-105 transition">تسجيل
                    الدخول</a>
            </div>
        </div>
    </nav>
</div>
</nav>

<section class="relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/infsp.png') }}" alt="ورشة تكوين مهني" class="w-full h-full object-cover">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="max-w-3xl text-white">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
                    <div class="flex flex-col gap-4">
                        <span class="font-bold"> المعهد الوطني المتخصص </span>
                        <span> في التكوين المهني </span>
                    </div>

                    <span class="text-yellow-300 block text-3xl md:text-4xl mt-6">حسين الطولقي - طولقة</span>
                </h1>
                <p class="text-lg md:text-xl text-emerald-50 mb-8 opacity-95">تكوين عملي وفق أحدث المعايير، هيئة تدريس
                    خبيرة، وشراكة مع كبرى المؤسسات الوطنية.</p>
                <div class="flex flex-wrap gap-4">
                    <a href=""
                        class="group bg-white text-blue-900 px-8 py-4 rounded-full font-bold text-lg shadow-2xl hover:shadow-xl transition flex items-center gap-2 glow-hover">
                        <i class="fas fa-calendar-alt"></i>
                        سجل الآن
                    </a>
                    <a href="#"
                        class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white/20 backdrop-blur-sm transition">
                        اكتشف التخصصات
                    </a>
                </div>
                <div class="flex gap-6 mt-12 text-sm font-medium text-white/80">
                    <div class="flex items-center gap-1"><i class="fas fa-check-circle text-emerald-300"></i> 25+ تخصص
                    </div>
                    <div class="flex items-center gap-1"><i class="fas fa-clock text-yellow-200"></i> جداول مرنة</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <span class="text-emerald-600 font-semibold tracking-wider text-sm">إحصائيات المعهد</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-2">كن جزءا من التغيرر<span class="text-blue-800">.</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="glass-card p-6 text-center hover-lift" style="background: rgba(255,255,255,0.2);">
                    <div
                        class="w-16 h-16 mx-auto bg-gradient-to-br from-blue-100 to-emerald-100 rounded-2xl flex items-center justify-center text-blue-800 text-3xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="text-4xl font-black text-blue-900 stat-number" data-target="1840">0</div>
                    <p class="text-gray-700 font-medium mt-2">عدد المتربصين</p>
                </div>
                <!-- الدفعات المتخرجة -->
                <div class="glass-card p-6 text-center hover-lift" style="background: rgba(255,255,255,0.2);">
                    <div
                        class="w-16 h-16 mx-auto bg-gradient-to-br from-blue-100 to-emerald-100 rounded-2xl flex items-center justify-center text-blue-800 text-3xl mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="text-4xl font-black text-blue-900 stat-number" data-target="127">0</div>
                    <p class="text-gray-700 font-medium mt-2">الدفعات المتخرجة</p>
                </div>
                <!-- المقاعد البيداغوجية -->
                <div class="glass-card p-6 text-center hover-lift" style="background: rgba(255,255,255,0.2);">
                    <div
                        class="w-16 h-16 mx-auto bg-gradient-to-br from-blue-100 to-emerald-100 rounded-2xl flex items-center justify-center text-blue-800 text-3xl mb-4">
                        <i class="fas fa-chair"></i>
                    </div>
                    <div class="text-4xl font-black text-blue-900 stat-number" data-target="520">0</div>
                    <p class="text-gray-700 font-medium mt-2">المقاعد البيداغوجية</p>
                </div>
                <!-- الأساتذة المكونين -->
                <div class="glass-card p-6 text-center hover-lift" style="background: rgba(255,255,255,0.2);">
                    <div
                        class="w-16 h-16 mx-auto bg-gradient-to-br from-blue-100 to-emerald-100 rounded-2xl flex items-center justify-center text-blue-800 text-3xl mb-4">
                        <i class="fas fa-chalkboard-user"></i>
                    </div>
                    <div class="text-4xl font-black text-blue-900 stat-number" data-target="48">0</div>
                    <p class="text-gray-700 font-medium mt-2">الأساتذة المكونين</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SPECIALIZATIONS GRID (6 cards) with border-gradient & hover-lift -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <span class="text-emerald-600 font-semibold tracking-wider text-sm">مسارات مهنية</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-2">التخصصات المتاحة</h2>
                <p class="text-gray-600 mt-3 max-w-2xl mx-auto">ستة تخصصات مطلوبة في سوق العمل، بتجهيزات حديثة ومكونين
                    خبراء</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">
                <!-- بطاقة 1: تطوير الويب -->
                <div class="border-gradient-wrapper">
                    <div class="bg-white rounded-xl p-6 hover-lift">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-700 text-2xl mb-4">
                            <i class="fas fa-laptop-code"></i></div>
                        <h3 class="text-xl font-bold mb-2">تطوير الويب</h3>
                        <p class="text-gray-600 text-sm mb-4">HTML, CSS, JavaScript, PHP, وأطر العمل الحديثة. مشاريع
                            عملية.</p>
                        <a href="#"
                            class="inline-flex items-center text-emerald-600 font-medium text-sm group">عرض التفاصيل <i
                                class="fas fa-arrow-left mr-1 group-hover:-translate-x-1 transition"></i></a>
                    </div>
                </div>
                <!-- بطاقة 2: الميكانيك الصناعي -->
                <div class="border-gradient-wrapper">
                    <div class="bg-white rounded-xl p-6 hover-lift">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-700 text-2xl mb-4">
                            <i class="fas fa-industry"></i></div>
                        <h3 class="text-xl font-bold mb-2">الميكانيك الصناعي</h3>
                        <p class="text-gray-600 text-sm mb-4">صيانة الآلات، كهرباء صناعية، تشخيص الأعطال، سلامة مهنية.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-emerald-600 font-medium text-sm group">عرض التفاصيل <i
                                class="fas fa-arrow-left mr-1 group-hover:-translate-x-1 transition"></i></a>
                    </div>
                </div>
                <!-- بطاقة 3: كهرباء المباني -->
                <div class="border-gradient-wrapper">
                    <div class="bg-white rounded-xl p-6 hover-lift">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-700 text-2xl mb-4">
                            <i class="fas fa-bolt"></i></div>
                        <h3 class="text-xl font-bold mb-2">كهرباء المباني</h3>
                        <p class="text-gray-600 text-sm mb-4">تمديدات، لوحات تحكم، أنظمة ذكية، معايير السلامة.</p>
                        <a href="#"
                            class="inline-flex items-center text-emerald-600 font-medium text-sm group">عرض التفاصيل <i
                                class="fas fa-arrow-left mr-1 group-hover:-translate-x-1 transition"></i></a>
                    </div>
                </div>
                <!-- بطاقة 4: اللحام والتفصيل -->
                <div class="border-gradient-wrapper">
                    <div class="bg-white rounded-xl p-6 hover-lift">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-700 text-2xl mb-4">
                            <i class="fas fa-tools"></i></div>
                        <h3 class="text-xl font-bold mb-2">اللحام والتفصيل</h3>
                        <p class="text-gray-600 text-sm mb-4">لحام قوسي، TIG، MIG، قراءة المخططات، أعمال حديدية.</p>
                        <a href="#"
                            class="inline-flex items-center text-emerald-600 font-medium text-sm group">عرض التفاصيل <i
                                class="fas fa-arrow-left mr-1 group-hover:-translate-x-1 transition"></i></a>
                    </div>
                </div>
                <!-- بطاقة 5: التبريد والتكييف -->
                <div class="border-gradient-wrapper">
                    <div class="bg-white rounded-xl p-6 hover-lift">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-700 text-2xl mb-4">
                            <i class="fas fa-wind"></i></div>
                        <h3 class="text-xl font-bold mb-2">تبريد وتكييف</h3>
                        <p class="text-gray-600 text-sm mb-4">صيانة أجهزة التكييف، غازات تبريد، مضخات حرارية.</p>
                        <a href="#"
                            class="inline-flex items-center text-emerald-600 font-medium text-sm group">عرض التفاصيل <i
                                class="fas fa-arrow-left mr-1 group-hover:-translate-x-1 transition"></i></a>
                    </div>
                </div>
                <!-- بطاقة 6: الخياطة والطرز -->
                <div class="border-gradient-wrapper">
                    <div class="bg-white rounded-xl p-6 hover-lift">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-700 text-2xl mb-4">
                            <i class="fas fa-tshirt"></i></div>
                        <h3 class="text-xl font-bold mb-2">خياطة وطرز</h3>
                        <p class="text-gray-600 text-sm mb-4">خياطة تقليدية وعصرية، طرز بالكمبيوتر، تصميم أزياء.</p>
                        <a href="#"
                            class="inline-flex items-center text-emerald-600 font-medium text-sm group">عرض التفاصيل <i
                                class="fas fa-arrow-left mr-1 group-hover:-translate-x-1 transition"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DIRECTOR'S NEWS FEED (آخر منشورات المدير) -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12">
                <div>
                    <span class="text-emerald-600 font-semibold tracking-wider text-sm">من مكتب المدير</span>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2">آخر منشورات المدير</h2>
                </div>
                <a href="#"
                    class="text-emerald-600 font-medium flex items-center gap-1 hover:underline mt-4 md:mt-0">جميع
                    المنشورات <i class="fas fa-arrow-left text-sm"></i></a>
            </div>
            <!-- grid of 3 cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- announcement 1 -->
                <div class="border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition bg-white">
                    <span
                        class="inline-block bg-emerald-100 text-emerald-800 text-xs font-semibold px-3 py-1 rounded-full mb-3">📢
                        جديد</span>
                    <h3 class="text-lg font-bold mb-2">افتتاح تسجيلات دورة مارس 2025</h3>
                    <p class="text-gray-600 text-sm mb-4">يسر إدارة المعهد الإعلان عن فتح باب التسجيلات للموسم الجديد.
                        المقاعد محدودة.</p>
                    <div class="flex items-center text-gray-400 text-xs">
                        <i class="far fa-calendar ml-1"></i> ٢٠ فبراير ٢٠٢٥
                    </div>
                </div>
                <!-- announcement 2 -->
                <div class="border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition bg-white">
                    <span
                        class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full mb-3">🎓
                        تخرج</span>
                    <h3 class="text-lg font-bold mb-2">حفل تخرج الدفعة ۱۲۷</h3>
                    <p class="text-gray-600 text-sm mb-4">تحت إشراف والي ولاية بسكرة، تم تكريم أوائل الخريجين بحضور
                        شركاء اجتماعيين.</p>
                    <div class="flex items-center text-gray-400 text-xs">
                        <i class="far fa-calendar ml-1"></i> ١٠ فبراير ٢٠٢٥
                    </div>
                </div>
                <!-- announcement 3 (director's message) -->
                <div
                    class="border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition bg-gradient-to-l from-blue-50 to-emerald-50">
                    <span
                        class="inline-block bg-blue-800 text-white text-xs font-semibold px-3 py-1 rounded-full mb-3">📝
                        كلمة المدير</span>
                    <h3 class="text-lg font-bold mb-2">اتفاقية شراكة مع مؤسسة وطنية</h3>
                    <p class="text-gray-700 text-sm mb-4">تم توقيع اتفاقية تعاون مع مجمع "سيم" لتشغيل خريجي شعبة
                        الكهرباء والتبريد.</p>
                    <div class="flex items-center text-gray-500 text-xs">
                        <i class="far fa-clock ml-1"></i> ٥ فبراير ٢٠٢٥
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- ANIMATED COUNTER SCRIPT (same as previous) -->
    <script>
        (function() {
            const statEls = document.querySelectorAll('.stat-number');
            statEls.forEach(el => {
                el.innerText = '0';
            });

            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseInt(el.dataset.target, 10);
                        if (isNaN(target)) return;

                        let current = 0;
                        const duration = 1800;
                        const startTime = performance.now();

                        const animate = (now) => {
                            const elapsed = now - startTime;
                            const progress = Math.min(elapsed / duration, 1);
                            const eased = 1 - (1 - progress) * (1 - progress);
                            const value = Math.floor(eased * target);
                            el.innerText = value;
                            if (progress < 1) {
                                requestAnimationFrame(animate);
                            } else {
                                el.innerText = target;
                            }
                        };
                        requestAnimationFrame(animate);
                        obs.unobserve(el);
                    }
                });
            }, {
                threshold: 0.5
            });

            statEls.forEach(el => observer.observe(el));
        })();
    </script>


</body>
</html>


