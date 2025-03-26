<?php

/**
 * SPDX-License-Identifier: LicenseRef-Qiuwen-PD
 * 
 * @license {@link https://www.qiuwenbaike.cn/wiki/QW:QWPD}
 * @license LicenseRef-Qiuwen-PD {@link https://www.qiuwenbaike.cn/wiki/QW:QWPD}
 */

/**
 * Copyright 2022-2025 Qiuwen Baike Contributors
 * The Work is available under the
 * "Qiuwen Public Domain Licence" (the "Licence");
 * You may obtain a copy of the Licence at
 * 
 * https://www.qiuwenbaike.cn/wiki/QW:QWPD
 * 
 * Read the Licence for details.
 */

function matomoJS()
{
    $qwUserName = $_COOKIE['group0_UserName'] ??  $_COOKIE['group1_UserName'] ?? '';
    $idsite = match ($_SERVER['HTTP_HOST']) {
        'bj.qiuwenbaike.cn' => '1',
        'licence.qiuwenbaike.cn' => '9',
        'license.qiuwenbaike.cn' => '9',
        'login.qiuwenbaike.cn' => '11',
        'mnc.qiuwenbaike.cn' => '12',
        'test.qiuwenbaike.cn' => '1',
        'www.qiuwenbaike.cn' => '5',
        'zh.qiuwenbaike.cn' => '5',
        default => '',
    };

    if ($idsite === '') {
        return '';
    } else {
        return <<<EOF
        <script>(function(b,c,a){var d='&action_name='+b.title;c='&url='+a(c.href);var e=a(b.referrer)?'&urlref='+a(b.referrer):'';b='&uid='+a('$qwUserName');a=new XMLHttpRequest;a.open('post','https://www.qiuwenbaike.cn/rest.php/audit?idsite=$idsite&rec=1&send_image=1'+c+d+e+b+'&rand=1');a.send()})(document,location,encodeURIComponent);</script>
        <noscript><img src='https://www.qiuwenbaike.cn/rest.php/audit?idsite=$idsite&rec=1&uid=$qwUserName' width='1' height='1' alt='' /></noscript>
        EOF;
    }
}
