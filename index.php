<?php
# Simple Visitor External Internet Protocol Address Return.
# Returns the visitor's IP address in simple text format.
#
#  Copyright ©2016 Ryan Brownell
#  ryan@ryanbrownell.com
#
#  This program is free software: you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  You should have received a copy of the GNU General Public License
#  along with this program.  If not, see <http://www.gnu.org/licenses/>.
#
## USAGE
# Create directory called 'ip' in your website's root directory.
# Add this file to the 'ip' directory.
# Visit http{s}://{your website domain name here}/ip/ and see your External Internet Protocol Address displayed as plain text.

$ipAddress = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
	echo $ipAddress;
}

?>