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

function getYear()
{
    $today = getdate();
    $year = $today['year'];
    return $year;
}
