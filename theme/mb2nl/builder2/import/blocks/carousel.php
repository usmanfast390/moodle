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
	'id' => 'carousel',
	'title' => get_string( 'carousel', 'local_mb2builder' ),
	'items' => array(
		array(
			'name' => 'carousel-1',
			'thumb' => 'carousel-1',
			'tags' => 'carousel',
			'data' => '[{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgb(244, 244, 244)","bgfixed":"0","colgutter":"s","prbg":"strip2","scheme":"light","rowhidden":"0","pt":"70","pb":"10","fw":"0","rowaccess":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"title","tag":"h4","align":"left","issubtext":"0","subtext":"Subtext here","size":"s","sizerem":"2","fweight":"400","lspacing":"0","wspacing":"0","upper":"0","style":"1","mt":"0","mb":"30","content":"Proin viverra ligula sit amet","elname":"Title"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"carousel","mt":"0","mb":"30","prestyle":"nlearning","columns":"4","gutter":"normal","linkbtn":"0","title":"1","imgwidth":"700","mobcolumns":"0","desc":"1","sloop":"1","snav":"1","sdots":"0","autoplay":"1","pausetime":"5000","animtime":"450","elname":"Carousel"},"attr":[{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210403","image":"https://dummyimage.com/450x339/9a9458/333.jpg","title":"Title text","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210399","image":"https://dummyimage.com/450x339/979da9/333.jpg","title":"Curabitur suscipit","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(17, 157, 101, 0.6)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210400","image":"https://dummyimage.com/450x339/b48765/333.jpg","title":"Praesent egestas neque","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(3, 56, 96, 0.6)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210401","image":"https://dummyimage.com/450x339/c7b6a8/333.jpg","title":"Sed cursus turpis","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(251, 139, 36, 0.6)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210402","image":"https://dummyimage.com/450x339/9a9458/333.jpg","title":"Sed mollis eros","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(3, 56, 96, 0.6)","elname":"Carousel item"},"attr":[]}]}]}]}]'
		),
		array(
			'name' => 'carousel-2',
			'thumb' => 'carousel-2',
			'tags' => 'carousel',
			'data' => '[{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgb(236, 236, 234)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"light","rowhidden":"0","pt":"70","pb":"10","fw":"0","rowaccess":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"none","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"title","tag":"h4","align":"center","issubtext":"0","subtext":"Subtext here","size":"s","sizerem":"2.4","fweight":"600","lspacing":"0","wspacing":"0","upper":"1","style":"1","mt":"0","mb":"30","content":"Proin viverra ligula sit amet","elname":"Title"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"center","size":"n","sizerem":"1","showtitle":"0","fweight":"400","lspacing":"0","wspacing":"0","upper":"0","title":"Title text","mt":"0","mb":"30","template":"1","content":"<p>Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Praesent nonummy mi in odio. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Aliquam eu nunc.</p>","elname":"Text"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"carousel","mt":"0","mb":"30","prestyle":"nlearning","columns":"4","gutter":"normal","linkbtn":"0","title":"1","imgwidth":"700","mobcolumns":"0","desc":"1","sloop":"1","snav":"1","sdots":"0","autoplay":"1","pausetime":"5000","animtime":"450","elname":"Carousel"},"attr":[{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210403","image":"https://dummyimage.com/450x339/9a9458/333.jpg","title":"Title text","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210399","image":"https://dummyimage.com/450x339/979da9/333.jpg","title":"Curabitur suscipit","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(17, 157, 101, 0.6)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210400","image":"https://dummyimage.com/450x339/b48765/333.jpg","title":"Praesent egestas neque","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(3, 56, 96, 0.6)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210401","image":"https://dummyimage.com/450x339/c7b6a8/333.jpg","title":"Sed cursus turpis","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(251, 139, 36, 0.6)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210402","image":"https://dummyimage.com/450x339/9a9458/333.jpg","title":"Sed mollis eros","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(3, 56, 96, 0.6)","elname":"Carousel item"},"attr":[]}]}]}]}]'
		),
		array(
			'name' => 'carousel-3',
			'thumb' => 'carousel-3',
			'tags' => 'carousel',
			'data' => '[{"type":"mb2pb_row","settings":{"id":"row","bgcolor":"rgb(19, 41, 61)","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"dark","rowhidden":"0","pt":"70","pb":"10","fw":"0","rowaccess":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"12","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"center","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"title","tag":"h4","align":"none","issubtext":"0","subtext":"Subtext here","size":"s","sizerem":"2.4","fweight":"600","lspacing":"0","wspacing":"0","upper":"1","style":"1","mt":"0","mb":"30","content":"Proin viverra ligula sit amet","elname":"Title"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"none","size":"n","sizerem":"1","showtitle":"0","fweight":"400","lspacing":"0","wspacing":"0","upper":"0","title":"Title text","mt":"0","mb":"30","template":"1","content":"<p>Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Praesent nonummy mi in odio. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Aliquam eu nunc.</p>","elname":"Text"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"carousel","mt":"0","mb":"30","prestyle":"none","columns":"4","gutter":"normal","linkbtn":"0","title":"1","imgwidth":"700","mobcolumns":"0","desc":"1","sloop":"1","snav":"1","sdots":"0","autoplay":"1","pausetime":"5000","animtime":"450","elname":"Carousel"},"attr":[{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210403","image":"https://dummyimage.com/450x339/9a9458/333.jpg","title":"Title text","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgb(230, 57, 70)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210399","image":"https://dummyimage.com/450x339/979da9/333.jpg","title":"Curabitur suscipit","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgb(17, 157, 101)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210400","image":"https://dummyimage.com/450x339/b48765/333.jpg","title":"Praesent egestas neque","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgb(3, 56, 96)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210401","image":"https://dummyimage.com/450x339/c7b6a8/333.jpg","title":"Sed cursus turpis","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgb(251, 139, 36)","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1597593210402","image":"https://dummyimage.com/450x339/9a9458/333.jpg","title":"Sed mollis eros","desc":"Sed cursus turpis vitae tortor. Maecenas ullamcorper dui etpla.","color":"rgba(3, 56, 96, 0.6)","elname":"Carousel item"},"attr":[]}]}]}]}]'
		),
		array(
			'name' => 'carousel-4',
			'thumb' => 'carousel-4',
			'tags' => 'carousel',
			'data' => '[{"type":"mb2pb_row","settings":{"id":"row","bgfixed":"0","colgutter":"s","prbg":"0","scheme":"light","rowhidden":"0","pt":"70","pb":"10","fw":"0","rowaccess":"0","elname":"Row"},"attr":[{"type":"mb2pb_col","settings":{"id":"column","col":"5","pt":"0","pb":"30","mobcenter":"1","moborder":"0","align":"left","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"heading","tag":"h2","size":"2.4","align":"left","fweight":"600","lspacing":"0","wspacing":"0","upper":"0","mt":"0","mb":"23","content":"Mauris sollicitudin fermentum","elname":"Heading"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"text","align":"none","size":"n","sizerem":"1","showtitle":"0","fweight":"400","lspacing":"0","wspacing":"0","upper":"0","title":"Title text","mt":"0","mb":"30","content":"<p>Praesent ac sem eget est egestas volutpat. Pellentesque auctor neque nec urna. Suspendisse non nisl sit amet velit hendrerit rutrum. Nunc interdum lacus sit amet orci. Cras non dolor. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Phasellus consectetuer vestibulum elit. Nullam cursus lacinia erat. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci.</p>","elname":"Text"},"attr":[]},{"type":"mb2pb_el","settings":{"id":"button","type":"primary","size":"lg","link":"#","target":"0","fw":"0","fweight":"400","lspacing":"0","wspacing":"0","rounded":"0","upper":"0","ml":"0","mr":"0","mt":"0","mb":"20","border":"0","center":"0","text":"Learn more","elname":"Button"},"attr":[]}]},{"type":"mb2pb_col","settings":{"id":"column","col":"7","pt":"0","pb":"30","mobcenter":"0","moborder":"0","align":"center","height":"0","scheme":"light","elname":"Column"},"attr":[{"type":"mb2pb_el","settings":{"id":"carousel","mt":"0","mb":"20","prestyle":"none","columns":"2","gutter":"normal","linkbtn":"0","title":"1","imgwidth":"800","mobcolumns":"0","desc":"1","sloop":"1","snav":"1","sdots":"1","autoplay":"1","pausetime":"5000","animtime":"450","elname":"Carousel"},"attr":[{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1598105901687","image":"https://dummyimage.com/700x413/ccb593/333.jpg","title":"Vestibulum facilisis purus","desc":"Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Praesent venenatis metus at tortor pulvinar varius.","link":"#","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1598105901688","image":"https://dummyimage.com/700x413/737c86/333.jpg","title":"Nullam vel sem","desc":"Curabitur at lacus ac velit ornare lobortis. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. ","link":"#","elname":"Carousel item"},"attr":[]},{"type":"mb2pb_subel","settings":{"id":"carousel_item","pbid":"1598105901689","image":"https://dummyimage.com/700x413/299d99/333.jpg","title":"Pellentesque habitant morbi","desc":"Nunc nec neque. Aenean vulputate eleifend tellus. Praesent ac sem eget est egestas volutpat. Vestibulum purus quam.","link":"#","elname":"Carousel item"},"attr":[]}]}]}]}]'
		)

	)
);

define( 'LOCAL_MB2BUILDER_IMPORT_BLOCKS_CAROUSEL', base64_encode( serialize( $mb2_settings ) ) );
