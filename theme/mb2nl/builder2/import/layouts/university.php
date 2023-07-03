<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package    local_mb2builder
 * @copyright  2018 - 2020 Mariusz Boloz (mb2moodle.com/)
 * @license   Commercial https://themeforest.net/licenses
 */

defined( 'MOODLE_INTERNAL' ) || die();

$mb2_settings = array(
	'id' => 'university',
	'title' => get_string( 'university', 'local_mb2builder' ),
	'items' => array(
		array(
			'name' => 'university-1',
			'thumb' => 'university-1',
			'tags' => 'university',
			'data' => '[{"type":"mb2pb_page","settings":{},"attr":[{"type":"mb2pb_section","settings":{"id":"section","size":"4","prbg":"0","scheme":"light","pt":"0","sectionhidden":"0","pb":"0","sectionaccess":"0","elname":"Section"},"attr":[{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgba(10, 9, 8, 0.65)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"dark","bgimage":"https://dummyimage.com/1900x800/616f86/333.jpg","rowhidden":"0","pt":"120","pb":"60","fw":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","mt":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"center","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h4","size":"3.1","align":"none","fweight":"600","lspacing":"0","wspacing":"0","upper":"0","mt":"0","mb":"16","width":"2000","lh":"1","content":"Suspendisse pulvinar augue ac venenatis","elname":"Heading"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"none","size":"n","sizerem":"1.4","showtitle":"0","fweight":"400","lspacing":"0","wspacing":"0","upper":"0","title":"Title text","mt":"0","mb":"30","width":"2000","content":"<p>Donec rutrum congue leo eget malesuada nulla quis lorem ut libero</p>","elname":"Text"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"button","type":"primary","size":"xlg","link":"#","target":"0","fw":"0","fweight":"400","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"0","mt":"0","mb":"15","border":"0","center":"0","text":"Start study now","elname":"Button"},"attr":[]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"light","rowhidden":"0","pt":"60","pb":"0","fw":"0","rowaccess":"0","wave":"0","wavecolor":"#000","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","mt":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"6","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"none","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"title","tag":"h4","align":"none","issubtext":"0","subtext":"Subtext here","size":"n","sizerem":"2.2","fweight":"600","lspacing":"0","wspacing":"0","upper":"0","style":"1","mt":"0","mb":"30","content":"Vestibulum turpis sem","elname":"Title"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"none","size":"n","sizerem":"1","showtitle":"0","fweight":"400","lspacing":"0","wspacing":"0","upper":"0","title":"Title text","mt":"0","mb":"30","width":"2000","content":"<p>Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt. Donec velit neque, auctor.</p>","elname":"Text"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"button","type":"primary","size":"lg","link":"#","target":"0","fw":"0","fweight":"400","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"0","mt":"0","mb":"30","border":"0","center":"0","text":"Read more","elname":"Button"},"attr":[]}]},{"type":"mb2pb_col","settings":{"id":"column","col":"6","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"boxesimg","columns":"2","type":"1","mt":"0","mb":"0","gutter":"normal","elname":"Boxes - image"},"attr":[{"type":"mb2pb_subel","settings":{"id":"boxesimg_item","image":"https://dummyimage.com/480x284/717492/333.jpg","link_target":"0","color":"rgba(230, 57, 70, 0.6)","text":"Sed augue ipsum","elname":"Box image"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"boxesimg_item","image":"https://dummyimage.com/480x284/4b4c51/333.jpg","link_target":"0","color":"rgba(17, 157, 101, 0.6)","text":"Vestibulum eu odio","elname":"Box image"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"boxesimg_item","image":"https://dummyimage.com/480x284/2ac4d2/333.jpg","link_target":"0","color":"rgba(251, 139, 36, 0.6)","text":"Donec vitae sapien","elname":"Box image"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"boxesimg_item","image":"https://dummyimage.com/480x284/bf9c7b/333.jpg","link_target":"0","color":"rgba(3, 56, 96, 0.6)","text":"Curabitur a felis","elname":"Box image"},"attr":[]}]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgb(244, 244, 244)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"light","rowhidden":"0","pt":"60","pb":"0","fw":"0","rowaccess":"0","wave":"0","wavecolor":"#000","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","mt":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"boxesicon","columns":"4","gutter":"normal","type":"1","color":"primary","mt":"0","mb":"0","linkbtn":"0","desc":"1","elname":"Boxes - icon"},"attr":[{"type":"mb2pb_subel","settings":{"id":"boxesicon_item","icon":"pe-7s-help2","title":"Nullam tincidunt","link_target":"0","content":"Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.","elname":"Box icon"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"boxesicon_item","icon":"pe-7s-coffee","title":"Vivamus laoreet","link_target":"0","content":"Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.","elname":"Box icon"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"boxesicon_item","icon":"pe-7s-rocket","title":"Pellentesque habitant","link_target":"0","content":"Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.","elname":"Box icon"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"boxesicon_item","icon":"pe-7s-plugin","title":"Etiam rhoncus","link_target":"0","content":"Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.","elname":"Box icon"},"attr":[]}]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"light","rowhidden":"0","pt":"60","pb":"0","fw":"0","rowaccess":"0","wave":"0","wavecolor":"#000","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","mt":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"6","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"videoweb","width":"770","videourl":"https://youtu.be/3ORsUGVNxGs","ratio":"16:9","mt":"0","mb":"30","bgimage":"1","bgimageurl":"https://dummyimage.com/950x534/a69e9c/333.jpg","elname":"Video - web"},"attr":[]}]},{"type":"mb2pb_col","settings":{"id":"column","col":"6","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"none","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"tabs","tabpos":"top","height":"100","isicon":"1","icon":"fa fa-trophy","mt":"0","mb":"21","elname":"Tabs"},"attr":[{"type":"mb2pb_subel","settings":{"id":"tabs_item","title":"Lorem ipsum","icon":"fa fa-graduation-cap","text":"<h4>Suspendisse pulvinar augue</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum. Ergo, inquit, tibi Q. Summus dolor plures dies manere non potest? Rationis enim perfectio est virtus; Quamquam tu hanc copiosiorem etiam soles dicere. Ostendit pedes et pectus. </p>","elname":"Tabs item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"tabs_item","title":"Vestibulum ante","icon":"fa fa-university","text":"<h4>Pellentesque commodo eros</h4><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet et, porttitor.</p>","elname":"Tabs item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"tabs_item","title":"Quisque libero","icon":"fa fa-book","text":"<h4>Aenean leo ligula porttitor</h4><p>Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor.</p>","elname":"Tabs item"},"attr":[]}]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgb(236, 236, 234)","bgfixed":"0","colgutter":"s","prbg":"strip2","scheme":"light","rowhidden":"0","pt":"60","pb":"0","fw":"0","rowaccess":"0","wave":"0","wavecolor":"#000","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","mt":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"none","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"title","tag":"h4","align":"none","issubtext":"0","subtext":"Subtext here","size":"n","sizerem":"1.6","fweight":"400","lspacing":"0","wspacing":"0","upper":"0","style":"1","mt":"0","mb":"30","content":"Fusce egestas elit eget lorem","elname":"Title"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"carousel","mt":"0","mb":"30","prestyle":"nlearning","columns":"4","gutter":"normal","linkbtn":"0","title":"1","imgwidth":"700","mobcolumns":"0","desc":"1","sloop":"1","snav":"1","sdots":"0","autoplay":"1","pausetime":"5000","animtime":"450","elname":"Carousel"},"attr":[{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210403","image":"https://dummyimage.com/450x339/9a9458/333.jpg","title":"Title text","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210399","image":"https://dummyimage.com/450x339/99a3b4/333.jpg","title":"Curabitur suscipit","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(17, 157, 101, 0.6)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210400","image":"https://dummyimage.com/450x339/979da9/333.jpg","title":"Praesent egestas neque","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(3, 56, 96, 0.6)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210401","image":"https://dummyimage.com/450x339/b48765/333.jpg","title":"Sed cursus turpis","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(251, 139, 36, 0.6)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210402","image":"https://dummyimage.com/450x339/c7b6a8/333.jpg","title":"Sed mollis eros","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(3, 56, 96, 0.6)","elname":"Carousel item"},"attr":[]}]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgb(45, 58, 67)","bgfixed":"0","colgutter":"s","prbg":"strip1","scheme":"dark","rowhidden":"0","pt":"30","pb":"0","fw":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","mt":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"8","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"none","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h4","size":"1.44","align":"none","fweight":"600","lspacing":"0","wspacing":"0","upper":"0","mt":"16","mb":"0","width":"2000","lh":"1","content":"Ita graviter et severe voluptatem","elname":"Heading"},"attr":[]}]},{"type":"mb2pb_col","settings":{"id":"column","col":"4","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"right","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"button","type":"success","size":"lg","link":"#","target":"0","fw":"0","fweight":"400","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"0","mt":"0","mb":"0","border":"0","center":"0","text":"Read more","elname":"Button"},"attr":[]}]}]}]}]}]'
		),
		array(
			'name' => 'university-2',
			'thumb' => 'university-2',
			'tags' => 'university',
			'data' => '[{"type":"mb2pb_page","settings":{},"attr":[{"type":"mb2pb_section","settings":{"id":"section","size":"4","prbg":"0","scheme":"light","bgel1s":"500","bgel2s":"500","bgel1top":"200","bgel2top":"200","bgel1left":"0","bgel2left":"0","pt":"0","sectionhidden":"0","pb":"0","sectionaccess":"0","elname":"Section"},"attr":[{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgba(0, 0, 0, 0.7)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"dark","bgimage":"https://dummyimage.com/1900x800/8b8681/333.jpg","heroimg":"0","herov":"center","herow":"1200","herohpos":"left","heroml":"0","heromt":"0","heroonsmall":"1","herogradl":"0","herogradr":"0","bgtext":"0","bgtextmob":"0","bgtexttext":"Sample text","btsize":"290","btfweight":"600","btlh":"1","btlspacing":"0","btwspacing":"0","btupper":"0","bth":"left","btv":"center","btcolor":"rgba(0,0,0,.05)","rowhidden":"0","pt":"170","pb":"120","fw":"0","va":"0","parallax":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"299","waveheight":"176","waveover":"0","mt":"0","gradient":"0","graddeg":"90","gradcolor1":"#3A0CA3","gradcolor2":"#4361EE","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"center","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h2","size":"6.18","align":"none","fwcls":"bold","lhcls":"global","lspacing":"0","wspacing":"0","upper":"0","mt":"0","mb":"10","width":"2000","typed":"0","typespeed":"50","backspeed":"50","backdelay":"1500","typedtext":"first word|second word|third word","content":"Get ready","elname":"Heading"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"none","size":"n","sizerem":"2.4","showtitle":"0","fwcls":"medium","lhcls":"medium","lspacing":"0","wspacing":"0","tupper":"0","tfwcls":"global","tlhcls":"global","tlspacing":"0","twspacing":"0","tsizerem":"1.4","upper":"0","title":"Title text","mt":"0","mb":"30","pv":"0","ph":"0","tmb":"30","width":"2000","rounded":"0","gradient":"0","button":"0","btype":"primary","bsize":"normal","link":"#","target":"0","brounded":"0","bmt":"0","bborder":"0","btext":"Read more","bfwcls":"global","scheme":"light","content":"<p>To discover New Learning University</p>","elname":"Text"},"attr":[]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgb(178, 0, 38)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"dark","heroimg":"0","herov":"center","herow":"1200","herohpos":"left","heroml":"0","heromt":"0","heroonsmall":"1","herogradl":"0","herogradr":"0","bgtext":"0","bgtextmob":"0","bgtexttext":"Sample text","btsize":"290","btfweight":"600","btlh":"1","btlspacing":"0","btwspacing":"0","btupper":"0","bth":"left","btv":"center","btcolor":"rgba(0,0,0,.05)","rowhidden":"0","pt":"100","pb":"40","fw":"0","va":"0","parallax":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","waveover":"1","mt":"0","gradient":"0","graddeg":"90","gradcolor1":"#3A0CA3","gradcolor2":"#4361EE","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"6","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h3","size":"2.4","align":"none","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","upper":"0","mt":"0","mb":"30","width":"2000","typed":"0","typespeed":"50","backspeed":"50","backdelay":"1500","typedtext":"first word|second word|third word","content":"We\'re New Learning and we\'re different","elname":"Heading"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"none","size":"n","sizerem":"1","showtitle":"0","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","tupper":"0","tfwcls":"global","tlhcls":"global","tlspacing":"0","twspacing":"0","tsizerem":"1.4","upper":"0","title":"Title text","mt":"0","mb":"40","pv":"0","ph":"0","tmb":"30","width":"2000","rounded":"0","gradient":"0","button":"0","btype":"primary","bsize":"normal","link":"#","target":"0","brounded":"0","bmt":"0","bborder":"0","btext":"Read more","bfwcls":"global","scheme":"light","content":"<p>Erat enim res aperta. Duo Reges: constructio interrete. Ita ne hoc quidem modo paria peccata sunt. Non igitur bene. Cave putes quicquam esse verius. Efficiens dici potest. Venit ad extremum; Quid, quod res alia tota est? Quod quidem iam fit etiam in Academia. Egone quaeris, inquit, quid sentiam? Haeret in salebra. </p>","elname":"Text"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"button","type":"inverse","size":"lg","link":"#","target":"0","fw":"0","fwcls":"medium","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"0","mt":"0","mb":"15","border":"0","center":"0","text":"Discover more","elname":"Button"},"attr":[]}]},{"type":"mb2pb_col","settings":{"id":"column","col":"6","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"videoweb","width":"800","videourl":"https://youtu.be/3ORsUGVNxGs","ratio":"16:9","mt":"0","mb":"30","bgimage":"1","bgimageurl":"https://dummyimage.com/950x534/ded4a9/333.jpg","bgcolor":"rgba(0, 0, 0, 0.6)","elname":"Video - web"},"attr":[]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgba(0, 0, 0, 0.5)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"dark","bgimage":"https://dummyimage.com/1900x800/6d7892/333333.jpg","heroimg":"0","herov":"center","herow":"1200","herohpos":"left","heroml":"0","heromt":"0","heroonsmall":"1","herogradl":"0","herogradr":"0","bgtext":"0","bgtextmob":"0","bgtexttext":"Sample text","btsize":"290","btfweight":"600","btlh":"1","btlspacing":"0","btwspacing":"0","btupper":"0","bth":"left","btv":"center","btcolor":"rgba(0,0,0,.05)","rowhidden":"0","pt":"100","pb":"55","fw":"0","va":"0","parallax":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","waveover":"1","mt":"0","gradient":"0","graddeg":"90","gradcolor1":"#3A0CA3","gradcolor2":"#4361EE","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"6","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[]},{"type":"mb2pb_col","settings":{"id":"column","col":"6","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"none","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h3","size":"2.4","align":"none","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","upper":"0","mt":"0","mb":"30","width":"2000","typed":"0","typespeed":"50","backspeed":"50","backdelay":"1500","typedtext":"first word|second word|third word","content":"Start your journey","elname":"Heading"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"none","size":"n","sizerem":"1","showtitle":"0","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","tupper":"0","tfwcls":"global","tlhcls":"global","tlspacing":"0","twspacing":"0","tsizerem":"1.4","upper":"0","title":"Title text","mt":"0","mb":"40","pv":"0","ph":"0","tmb":"30","width":"2000","rounded":"0","gradient":"0","button":"0","btype":"primary","bsize":"normal","link":"#","target":"0","brounded":"0","bmt":"0","bborder":"0","btext":"Read more","bfwcls":"global","scheme":"light","content":"<p>Erat enim res aperta. Duo Reges: constructio interrete. Ita ne hoc quidem modo paria peccata sunt. Non igitur bene. Cave putes quicquam esse verius. Efficiens dici potest. Venit ad extremum; Quid, quod res alia tota est? Quod quidem iam fit etiam in Academia. Egone quaeris, inquit, quid sentiam? Haeret in salebra. </p>","elname":"Text"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"button","type":"primary","size":"lg","link":"#","target":"0","fw":"0","fwcls":"medium","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"20","mt":"0","mb":"15","border":"0","center":"0","text":"Browse courses ","elname":"Button"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"button","type":"primary","size":"lg","link":"#","target":"0","fw":"0","fwcls":"medium","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"0","mt":"0","mb":"15","border":"1","center":"0","text":"Apply now","elname":"Button"},"attr":[]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgb(244, 244, 244)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"light","bgimage":"","heroimg":"0","herov":"center","herow":"1200","herohpos":"left","heroml":"0","heromt":"0","heroonsmall":"1","herogradl":"0","herogradr":"0","bgtext":"0","bgtextmob":"0","bgtexttext":"Sample text","btsize":"290","btfweight":"600","btlh":"1","btlspacing":"0","btwspacing":"0","btupper":"0","bth":"left","btv":"center","btcolor":"rgba(0,0,0,.05)","rowhidden":"0","pt":"100","pb":"40","fw":"0","va":"0","parallax":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","waveover":"1","mt":"0","gradient":"0","graddeg":"90","gradcolor1":"#3A0CA3","gradcolor2":"#4361EE","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"center","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h3","size":"2.4","align":"none","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","upper":"0","mt":"0","mb":"30","width":"2000","typed":"0","typespeed":"50","backspeed":"50","backdelay":"1500","typedtext":"first word|second word|third word","content":"The University in numbers","elname":"Heading"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"animnum","columns":"4","mt":"0","mb":"0","pv":"30","gutter":"normal","icon":"1","center":"1","size_number":"4","size_icon":"4","size_title":"1","color_icon":"rgb(51, 51, 51)","color_number":"rgb(178, 0, 38)","nfwcls":"medium","tfwcls":"global","tlhcls":"global","color_title":"rgb(51, 51, 51)","color_bg":"rgba(255, 255, 255, 0)","subtitle":"0","nopadding":"0","aspeed":"10000","height":"0","elname":"Animated number"},"attr":[{"type":"mb2pb_subel","settings":{"id":"animnum_item","number":"8500","icon":"lni-school-bench-alt","title":"erolled students","subtitle":"Subtitle here","elname":"Animated number item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"animnum_item","number":"1200","icon":"lni-book","title":"courses","subtitle":"Subtitle here","elname":"Animated number item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"animnum_item","number":"7","icon":"lni-world","title":"course languages","subtitle":"Subtitle here","elname":"Animated number item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"animnum_item","number":"65","icon":"lni-network","title":"% of female students","subtitle":"Subtitle here","elname":"Animated number item"},"attr":[]}]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"light","heroimg":"0","herov":"center","herow":"1200","herohpos":"left","heroml":"0","heromt":"0","heroonsmall":"1","herogradl":"0","herogradr":"0","bgtext":"0","bgtextmob":"0","bgtexttext":"Sample text","btsize":"290","btfweight":"600","btlh":"1","btlspacing":"0","btwspacing":"0","btupper":"0","bth":"left","btv":"center","btcolor":"rgba(0,0,0,.05)","rowhidden":"0","pt":"100","pb":"40","fw":"0","va":"0","parallax":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","waveover":"1","mt":"0","gradient":"0","graddeg":"90","gradcolor1":"#3A0CA3","gradcolor2":"#4361EE","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"none","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h3","size":"2.4","align":"center","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","upper":"0","mt":"0","mb":"30","width":"2000","typed":"0","typespeed":"50","backspeed":"50","backdelay":"1500","typedtext":"first word|second word|third word","content":"What does the future hold for you?","elname":"Heading"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"center","size":"n","sizerem":"1","showtitle":"0","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","tupper":"0","tfwcls":"global","tlhcls":"global","tlspacing":"0","twspacing":"0","tsizerem":"1.4","upper":"0","title":"Title text","mt":"0","mb":"40","pv":"0","ph":"0","tmb":"30","width":"732","rounded":"0","gradient":"0","button":"0","btype":"primary","bsize":"normal","link":"#","target":"0","brounded":"0","bmt":"0","bborder":"0","btext":"Read more","bfwcls":"global","scheme":"light","content":"<p>New Learning has over 1 200 courses available. All of courses have been designed by subject matter experts to give you an interactive and enjoyable learning experience.</p>","elname":"Text"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"boxesimg","columns":"2","type":"1","mt":"0","mb":"20","desc":"0","rounded":"1","tfs":"1.4","linkbtn":"0","btntype":"primary","btnsize":"normal","btnfwcls":"global","btnrounded":"0","btnborder":"0","btntext":"0","imgwidth":"800","gutter":"normal","elname":"Boxes - image"},"attr":[{"type":"mb2pb_subel","settings":{"id":"boxesimg_item","image":"https://dummyimage.com/1000x280/76402b/333.jpg","link":"#","description":"Box description here...","link_target":"0","scheme":"dark","color":"rgba(0, 0, 0, 0.6)","text":"Architecture adn dssign","elname":"Box image"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"boxesimg_item","image":"https://dummyimage.com/1000x280/7492a5/333.jpg","link":"#","description":"Box description here...","link_target":"0","scheme":"dark","color":"rgba(0, 0, 0, 0.6)","text":"Business and economy","elname":"Box image"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"boxesimg_item","image":"https://dummyimage.com/1000x280/2e95d2/333.jpg","link":"#","description":"Box description here...","link_target":"0","scheme":"dark","color":"rgba(0, 0, 0, 0.6)","text":"Data and mathematics","elname":"Box image"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"boxesimg_item","image":"https://dummyimage.com/1000x280/767d84/333.jpg","link":"#","description":"Box description here...","link_target":"0","scheme":"dark","color":"rgba(0, 0, 0, 0.6)","text":"Social sciences","elname":"Box image"},"attr":[]}]},{"type":"mb2pb_el","settings":{"id":"button","type":"primary","size":"lg","link":"#","target":"0","fw":"0","fwcls":"medium","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"0","mt":"0","mb":"30","border":"0","center":"1","text":"Browse all courses ","elname":"Button"},"attr":[]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgba(0, 0, 0, 0.7)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"dark","bgimage":"https://dummyimage.com/1900x800/54a4dc/333.jpg","heroimg":"0","herov":"center","herow":"1200","herohpos":"left","heroml":"0","heromt":"0","heroonsmall":"1","herogradl":"0","herogradr":"0","bgtext":"0","bgtextmob":"0","bgtexttext":"Sample text","btsize":"290","btfweight":"600","btlh":"1","btlspacing":"0","btwspacing":"0","btupper":"0","bth":"left","btv":"center","btcolor":"rgba(0,0,0,.05)","rowhidden":"0","pt":"100","pb":"40","fw":"0","va":"0","parallax":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","waveover":"1","mt":"0","gradient":"0","graddeg":"90","gradcolor1":"#3A0CA3","gradcolor2":"#4361EE","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"center","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h3","size":"2.4","align":"none","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","upper":"0","mt":"0","mb":"30","width":"2000","typed":"0","typespeed":"50","backspeed":"50","backdelay":"1500","typedtext":"first word|second word|third word","content":"Online learning recommendations","elname":"Heading"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"none","size":"n","sizerem":"1","showtitle":"0","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","tupper":"0","tfwcls":"global","tlhcls":"global","tlspacing":"0","twspacing":"0","tsizerem":"1.4","upper":"0","title":"Title text","mt":"0","mb":"40","pv":"0","ph":"0","tmb":"30","width":"2000","rounded":"0","gradient":"0","button":"0","btype":"primary","bsize":"normal","link":"#","target":"0","brounded":"0","bmt":"0","bborder":"0","btext":"Read more","bfwcls":"global","scheme":"light","content":"<p>Summus dolor plures dies manere non potest? Aliud igitur esse censet gaudere, aliud non dolere.</p>","elname":"Text"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"button","type":"primary","size":"lg","link":"#","target":"0","fw":"0","fwcls":"medium","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"20","mt":"0","mb":"15","border":"0","center":"0","text":"Get started today","elname":"Button"},"attr":[]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"light","heroimg":"0","herov":"center","herow":"1200","herohpos":"left","heroml":"0","heromt":"0","heroonsmall":"1","herogradl":"0","herogradr":"0","bgtext":"0","bgtextmob":"0","bgtexttext":"Sample text","btsize":"290","btfweight":"600","btlh":"1","btlspacing":"0","btwspacing":"0","btupper":"0","bth":"left","btv":"center","btcolor":"rgba(0,0,0,.05)","rowhidden":"0","pt":"100","pb":"40","fw":"0","va":"0","parallax":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","waveover":"1","mt":"0","gradient":"0","graddeg":"90","gradcolor1":"#3A0CA3","gradcolor2":"#4361EE","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h3","size":"2.4","align":"center","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","upper":"0","mt":"0","mb":"30","width":"2000","typed":"0","typespeed":"50","backspeed":"50","backdelay":"1500","typedtext":"first word|second word|third word","content":"Latest news","elname":"Heading"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"blog","limit":"8","sortcreated":"0","postexternal":"1","exposts":"0","extags":"0","author":"0","date":"1","columns":"3","sloop":"0","snav":"1","sdots":"0","autoplay":"0","pausetime":"5000","animtime":"450","layout":"3","superpost":"0","gutter":"normal","linkbtn":"0","prestyle":"none","mt":"0","mb":"30","elname":"Blog"},"attr":[]}]}]},{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgba(178, 0, 38, 0.95)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"dark","bgimage":"https://dummyimage.com/1900x800/b0ccd9/333.jpg","heroimg":"0","herov":"center","herow":"1200","herohpos":"left","heroml":"0","heromt":"0","heroonsmall":"1","herogradl":"0","herogradr":"0","bgtext":"0","bgtextmob":"0","bgtexttext":"Sample text","btsize":"290","btfweight":"600","btlh":"1","btlspacing":"0","btwspacing":"0","btupper":"0","bth":"left","btv":"center","btcolor":"rgba(0,0,0,.05)","rowhidden":"0","pt":"70","pb":"20","fw":"0","va":"0","parallax":"0","rowaccess":"0","wave":"none","wavecolor":"#ffffff","wavepos":"0","wavefliph":"0","wavetop":"0","wavewidth":"100","waveheight":"150","waveover":"1","mt":"0","gradient":"0","graddeg":"90","gradcolor1":"#3A0CA3","gradcolor2":"#4361EE","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"8","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h3","size":"1.4","align":"none","fwcls":"global","lhcls":"global","lspacing":"0","wspacing":"0","upper":"0","mt":"16","mb":"30","width":"2000","typed":"0","typespeed":"50","backspeed":"50","backdelay":"1500","typedtext":"first word|second word|third word","content":"Ready to take the next step? Buy the theme now!","elname":"Heading"},"attr":[]}]},{"type":"mb2pb_col","settings":{"id":"column","col":"4","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"right","alignc":"none","height":"0","width":"2000","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"button","type":"inverse","size":"lg","link":"#","target":"0","fw":"0","fwcls":"medium","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"20","mt":"0","mb":"30","border":"0","center":"0","text":"Buy theme now","elname":"Button"},"attr":[]}]}]}]}]}]'
		)
	)
);

define( 'LOCAL_MB2BUILDER_IMPORT_LAYOUTS_UNIVERSITY', base64_encode( serialize( $mb2_settings ) ) );
