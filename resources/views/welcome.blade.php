<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الدرس - بصمة</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: #f3f4f6; /* خلفية رمادية فاتحة لإبراز الورقة */
            padding: 20px;
        }

        .word-page {
            background: white;
            width: 210mm; /* عرض ورقة A4 */
            min-height: 297mm; /* طول ورقة A4 */
            padding: 20mm; /* حواف داخلية تشبه هوامش الوورد */
            margin: 0 auto 30px auto; /* توسيط الصفحة */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* ظل خفيف للورقة */
            border-radius: 2px;
            position: relative;
        }

        /* تحسين العرض على الشاشات الصغيرة */
        @media (max-width: 210mm) {
            .word-page {
                width: 100%;
                padding: 10mm;
            }
        }

        /* تنسيقات الطباعة (لتحويلها لـ PDF لاحقاً) */
        @media print {
            body { background: none; padding: 0; }
            .word-page {
                box-shadow: none;
                margin: 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>

    @foreach ($data as $lesson)
    <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">
                {{ $lesson->title }}
            </h1>
        <div class="word-page">




            <article class="prose prose-slate prose-lg max-w-none prose-img:rounded-lg prose-headings:text-blue-700" dir="rtl">
                {!! $lesson->content !!}
            </article>


        </div>
    @endforeach

</body>
</html>
