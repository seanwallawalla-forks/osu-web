<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'admin' => [
        'warehouse' => 'المستودع',
    ],

    'cart' => [
        'checkout' => 'إتمام الشراء',
        'info' => ':count_delimited عنصر في السلة ($:subtotal)|:count_delimited عناصر في السلة ($:subtotal)',
        'more_goodies' => 'أريد أن تحقق من المزيد من الأشياء قبل إتمام الأمر',
        'shipping_fees' => 'رسوم الشحن',
        'title' => 'عربة التسوق',
        'total' => 'المجموع',

        'errors_no_checkout' => [
            'line_1' => 'آه أوه، هناك مشاكل مع سلة التسوق الخاصة بك تمنع الدفع!',
            'line_2' => 'إزال أو حدث العناصر المذكورة أعلاه للاِستمرار.',
        ],

        'empty' => [
            'text' => 'سلة التسوق الخاصة بك فارغة.',
            'return_link' => [
                '_' => 'عُد الى :link لأيجاد بعض الأغراض الجيدة!',
                'link_text' => 'قائمة المتجر',
            ],
        ],
    ],

    'checkout' => [
        'cart_problems' => 'آه أوه، هناك مشاكل مع سلة التسوق الخاصة بك!',
        'cart_problems_edit' => 'اضغط هنا لتعديلها.',
        'declined' => 'تم إلغاء الدفع.',
        'delayed_shipping' => 'نحن حالياََ غارقون في الطلبات! انت مرحب بوضع طلبك, ولكن ارجوك انتظر **1-2 اسابيع اضافية اخرى** حتى ننتهي من الطلبات الحالية.',
        'old_cart' => 'سلة التسوق الخاصة بك تبدو منتهية الصلاحية وتم اعادة شحنها, الرجاء المحاولة مجدداََ.',
        'pay' => 'الدفع بـ باي بال',

        'has_pending' => [
            '_' => 'لديك طلبات غير مكتملة, اضغط :link لعرضهم.',
            'link_text' => 'هتا',
        ],

        'pending_checkout' => [
            'line_1' => 'دفعة سابقة بدأت ولكن لم تنتهي.',
            'line_2' => 'استكمل طلبك بأختيار طريقة دفع.',
        ],
    ],

    'discount' => 'حفظ :percent%',

    'invoice' => [
        'echeck_delay' => 'بما ان دفعتك كانت الكترونية، يرجى السماح لنا حتى 10 أيام إضافية لدفع للمرور عن طريق باي بال!',
        'status' => [
            'processing' => [
                'title' => 'لم يتم تأكيد الدفع الخاص بك بعد!',
                'line_1' => 'إذا كنت قد دفعت فعلا، قد لا نزال تنتظر الحصول على تأكيد للدفع الخاص بك. الرجاء تحديث هذه الصفحة خلال دقيقة أو دقيقتين!',
                'line_2' => [
                    '_' => 'إذا واجهت مشكلة أثناء الدفع, :link',
                    'link_text' => 'انقر هنا لاِستئناف الدفع',
                ],
            ],
        ],
    ],

    'order' => [
        'paid_on' => 'تم تعيين الطلب :date',

        'invoice' => 'عرض الفاتورة',
        'no_orders' => 'لا طلبات للعرض.',
        'resume' => 'استئناف الدفع',

        'item' => [
            'display_name' => [
                'supporter_tag' => ':name لـ :username (:duration)',
            ],
            'quantity' => 'الكمية',
        ],

        'not_modifiable_exception' => [
            'cancelled' => 'لا يمكنك تعديل طلبك لأنه مُلغى.',
            'checkout' => 'لا يمكنك تعديل طلبك بينما يتم معالجته.', // checkout and processing should have the same message.
            'default' => 'الطلب غير قابل للتعديل',
            'delivered' => 'لا يمكنك تعديل طلبك لأنه تم توصيلة بالفعل.',
            'paid' => 'لا يمكنك تعديل طلبك لأنه تم الدفع له مسبقاََ.',
            'processing' => 'لا يمكنك تعديل طلبك بينما يتم معالجته.',
            'shipped' => 'لا يمكنك تعديل طلبك لأنه تم توصيلة بالفعل.',
        ],

        'status' => [
            'cancelled' => 'ملغي',
            'checkout' => 'جاري الإعداد',
            'delivered' => 'وصلت',
            'paid' => 'دُفِعَت',
            'processing' => 'بانتظار التأكيد',
            'shipped' => 'في التحويل',
        ],
    ],

    'product' => [
        'name' => 'الإسم',

        'stock' => [
            'out' => 'هذا المنتج غير متوفر حالياََ. تحقق منه لاحقاََ!',
            'out_with_alternative' => 'للأسف نفذ المنتج. استعمل القائمة المنسدلة لأختيار نوع اخر او تحقق من هذا النوع لاحقاََ!',
        ],

        'add_to_cart' => 'أضف للسلة',
        'notify' => 'أرسل إشعاراً عند توفر هذا المنتج!',

        'notification_success' => 'سيتم إعلامك عندما يكون لدينا مخزون جديد. انقر فوق :link للإلغاء',
        'notification_remove_text' => 'هتا',

        'notification_in_stock' => 'هذا المنتج لم يعد متوفراََ!',
    ],

    'supporter_tag' => [
        'gift' => 'اهدِه الى لاعب',
        'require_login' => [
            '_' => 'يجب ان تكون :link لتحصل على شارة مؤيد!osu!',
            'link_text' => 'مُسَجَل',
        ],
    ],

    'username_change' => [
        'check' => 'أدخل اسم مستخدم للتحقق من توَفُرِه!',
        'checking' => 'التحقق من توافر :username...',
        'require_login' => [
            '_' => 'تحتاج إلى أن تكون :link لتغيير اسمك!',
            'link_text' => 'مُسَجَل',
        ],
    ],

    'xsolla' => [
        'distributor' => '',
    ],
];
