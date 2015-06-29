<?php
/*
 * HackerRank Profile Widget for WordPress
 *
 *     Copyright (C) 2015 Henrique Dias <hacdias@gmail.com>
 *     Copyright (C) 2015 Luís Soares <lsoares@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/** @todo: REPLACE NAME WITH SOMETHING */
?>
<aside class="widget">

	<?php if ( isset( $config["title"] ) ) : ?>
		<?php echo $before_title . $config["title"] . $after_title; ?>
	<?php endif; ?>

	<div class="name-widget" id="<?php echo $this->id; ?>">

		<?php if ( ! isset( $config["hideBuiltInHeader"] ) || ! $config["hideBuiltInHeader"] == "on" ) : ?>
			<header class="name-widget-header">
				<img class="name-widget-company-logo"
				     src="https://d3keuzeb2crhkn.cloudfront.net/hackerrank/assets/brand/h_mark_sm.png"/>

				<div class="name-widget-header-text">
					<a class="name-widget-header-link" target="_blank" href="https://someURL">Username</a>
					<span class="separator"> |</span>
					<span>Service</span>
				</div>
			</header>
		<?php endif; ?>

		<div class="name-widget-content">
			<div class="name-shadowed">
				This text is inside a shadowed box.
			</div>

			<h2>This is an H2 title</h2>

			<p>This is a paragraph. And this is <strong>bold</strong>. Oh... Gosh! This is <em>italic</em>!</p>
		</div>
	</div>
</aside>
