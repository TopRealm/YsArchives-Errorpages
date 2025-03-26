<?php

/**
 * SPDX-License-Identifier: GPL-2.0-or-later
 * 
 * @source {@link https://phabricator.wikimedia.org/source/mediawiki-config/browse/master/errorpages/404.php}
 * @license {@link https://foundation.wikimedia.org/wiki/Policy:Terms_of_Use/Phabricator}
 * @license GPL-2.0-or-later {@link https://www.qiuwenbaike.cn/wiki/H:GPL-2.0}
 */

/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

/**
 * This is the 404-handler for Apache and PHP (see README).
 * It is typically served from wiki domains for urls outside
 * the scope of MediaWiki.
 */

function getTarget()
{
    ## URL Guess
    $url = $_SERVER['REQUEST_URI'];
    $encUrl = htmlspecialchars($url);
    // $decUrl = htmlspecialchars(urldecode($url));

    if (
        preg_match('/(%2f)/i', $url, $matches)
        || preg_match('/^\/(?:w|wiki|extensions|skins)\/(.*)/i', $url, $matches)
    ) {
        // "/w/Foo" -> "/wiki/Foo"
        $target = '/wiki/' . $matches[1];
    } elseif (preg_match('/^\/(lib|有兽档案馆|wp|help|h|special|file|image|media|template|t|module)(:|：)(.*)/i', $url, $matches)) {
        // "/qw:Foo" -> "/wiki/qw:Foo"
        $target = '/wiki/' . $matches[1] . ':' . $matches[3];
    } elseif (preg_match('/^\/(?:wiki)(.*)/i', $url, $matches)) {
        // "/wikiFoo" -> "/wiki/Foo"
        $target = '/wiki/' . $matches[1];
    } else {
        // "/Foo" -> "/wiki/Foo"
        $target = '/wiki' . $url;
    }

    return [
        'encTarget' => htmlspecialchars($target),
        'decTarget' => htmlspecialchars(urldecode($target))
    ];
}
