<?php
/*Sinx for Association - Gestionale per Associazioni no-profit
    Copyright (C) 2011 by Sergio Capretta

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

  session_start();

$user = $_SESSION['utente'];
$langlicenza = $_SESSION['lingua'];
$paginalicenza = "gnu_gpl.html";
$lingualicenza = ($langlicenza.$paginalicenza);
//include($lingualicenza);

if ($user) {
include('./top.inc');
include('./menu.inc');
include('./'.$langlicenza.'/'.$paginalicenza);
include('./menusx.inc');
include('./botton.inc');
} else {
header('Location: ./index2.php');
}
?>
