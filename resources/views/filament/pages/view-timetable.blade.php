<x-filament-panels::page>
    <div class=" fi-ta-ctn border border-gray-200 dark:border--white/10 shadow-sm rounded-xl overflow-hidden bg-white dark:bg-gray-900">
        {{-- إضافة dir="rtl" لضمان ترتيب الأعمدة من اليمين لليسار بشكل صحيح --}}
        <table dir="rtl" class="fi-ta-table w-full table-fixed border-collapse text-center">
            <thead>
                <tr class="bg-gray-50/50
                 dark:bg-white/5 border-b
                  border-gray-200
                    dark:border-white/10">
                    {{-- خلية الوقت --}}
                    <th class="px-4 py-4 font-black text-sm text-gray-900 dark:text-gray-100 border-l border-gray-200 dark:border-gray-700 w-32">
                        الوقت
                    </th>
                    {{-- خلايا أيام الأسبوع --}}
                    @foreach($days as $day)
                        <th class="px-4 py-4 font-black text-sm text-gray-900 dark:text-gray-100 border-l border-gray-200 dark:border-gray-700">
                            {{ __($day) }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($timeSlots as $startTime => $displayTime)
                    <tr class="hover:bg-gray-50/50 dark:hover:bg-white/5 transition">
                        {{-- عمود الوقت بخلفية مميزة --}}
                        <td class="px-4 py-6 text-xs font-bold bg-gray-50/80 dark:bg-white/5 text-gray-600 dark:text-gray-400 border-l border-gray-200 dark:border-gray-700 whitespace-nowrap">
                            <span class="inline-block" dir="ltr">{{ $displayTime }}</span>
                        </span>
                        </td>

                        @foreach($days as $day)
                            <td class="p-3 border-l border-gray-200 dark:border-gray-700 h-32 align-middle">
                                @php
                                    $session = $schedules->where('day', $day)->where('start_time', $startTime)->first();
                                @endphp

                                @if($session)
                                    <div class="flex flex-col justify-center h-full bg-primary-50 dark:bg-primary-500/10 border-2 border-primary-200 dark:border-primary-500/40 rounded-xl p-3 shadow-sm transition hover:scale-105 cursor-default">
                                        <div class="text-primary-800 dark:text-primary-300 font-black text-sm leading-tight">
                                            {{ $session->subject->name }}
                                        </div>
                                        <div class="text-primary-600 dark:text-primary-400/80 text-[11px] mt-2 font-medium border-t border-primary-200/50 dark:border-primary-500/20 pt-1">
                                            {{ $session->teacher->name }}
                                        </div>
                                    </div>
                                @else
                                    {{-- خلية فارغة --}}
                                    <div class="w-full h-full opacity-10">
                                        <div class="border-2 border-dashed border-gray-200 dark:border-gray-700 h-full rounded-xl"></div>
                                    </div>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-filament-panels::page>
