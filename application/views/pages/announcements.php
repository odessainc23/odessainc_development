<script>
	$.ajax({
		type: 'GET',
		url: 'https://www.odessainc.com/blog/wp-json/odc/v2/pr_by_year',
		error: function(res) {

		},
		success: function(response) {
			$.each( response, function( gkey, gvalue ) {
				var _cloneItem	= $('.pr-list-cgroup-clone').clone();

				_cloneItem.removeClass('pr-list-cgroup-clone');
				_cloneItem.attr('id', 'pr-list-cgroup-'+ gkey);
				_cloneItem.addClass('pr-list-cgroup-'+ gkey);
				_cloneItem.find('.pr-list-cgtitle').html(gkey);

				$.each( gvalue, function( ikey, ivalue ) {
					var _itemHtml	= '<a href="'+ ivalue.link +'" class="pr-list-cglitem"><div class="pr-list-cglidate">'+ ivalue.date +'</div><div class="pr-list-cglititle">'+ ivalue.title +'</div><div class="pr-list-cglitext">'+ ivalue.short_description +'</div></a>';
					_cloneItem.find('.pr-list-cglist').prepend(_itemHtml);
				});

				$('.pr-list-hbfselect').prepend('<option value="'+ gkey +'">'+ gkey +'</option>');
				$('.pr-list-content').prepend(_cloneItem);
			});
			
			$('.pr-list-hbfselect').prepend('<option value="*" selected="selected">All</option>');
		}
	});

	$(document).on('change', '.pr-list-hbfselect', function(){
		var _value	= $(this).val();

		if (_value == '*') {
			$('.pr-list-cgroup').show();
		} else {
			$('.pr-list-cgroup').hide();
			$('.pr-list-cgroup-'+ _value).show();
		}
	});
</script>

<div id="wrapper">
	<section class="newsroom">
		<div class="container">
			<div class="section_width">
				<div class="col-md-12">
					<h1 class="text-center">Newsroom</h1>
				</div>
			</div>
		</div>
	</section>
	<div class="pr-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="pr-header-widget">
						<div class="pr-header-wicon"><svg id="a0500dc3-cd0a-4c30-af16-9b0976a2ec05" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M473.56,144.69H489.1a10.44,10.44,0,0,0,0-20.88H473.56a10.44,10.44,0,0,0,0,20.88Z" style="fill:#0075a2;stroke:#0075a2;stroke-miterlimit:10;stroke-width:6.730651892436216px"/><path d="M489.1,186H473.56a10.44,10.44,0,0,0,0,20.88H489.1a10.44,10.44,0,0,0,0-20.88Z" style="fill:#0075a2;stroke:#0075a2;stroke-miterlimit:10;stroke-width:6.730651892436216px"/><path d="M489.1,248.13H473.56a10.44,10.44,0,0,0,0,20.88H489.1a10.44,10.44,0,1,0,0-20.88Z" style="fill:#0075a2;stroke:#0075a2;stroke-miterlimit:10;stroke-width:6.730651892436216px"/><path d="M489.1,310.29H473.56a10.44,10.44,0,0,0,0,20.88H489.1a10.44,10.44,0,0,0,0-20.88Z" style="fill:#0075a2;stroke:#0075a2;stroke-miterlimit:10;stroke-width:6.730651892436216px"/><path d="M424.24,403.5h-59V45.34h59Zm13.14-334v310.8a41.52,41.52,0,1,1-83,0v-4.44a5.09,5.09,0,0,0-3.45-4.82L239.62,332.91a5.06,5.06,0,0,0-4.07.33,5.1,5.1,0,0,0-2.52,3.2,71.71,71.71,0,0,1-84.79,52.69,5.1,5.1,0,0,0-6.12,5v40.58a49.29,49.29,0,1,1-98.58,0v-104a5.1,5.1,0,0,0-3.34-4.79,42.28,42.28,0,0,1-27.74-39.44v-123a42.22,42.22,0,0,1,42.17-42.17h91.94a41.62,41.62,0,0,1,31.15,14,5.11,5.11,0,0,0,6.19,1.08,6.91,6.91,0,0,0,.83-.53c.33-.15.67-.29,1-.41L350.89,78.78A5.1,5.1,0,0,0,354.34,74V69.52a41.52,41.52,0,1,1,83,0ZM121.24,333.7a5.1,5.1,0,0,0-5.1-5.1H69.52a5.1,5.1,0,0,0-5.1,5.1v101a28.41,28.41,0,0,0,56.82,0Zm25.33-26a21.31,21.31,0,0,0,21.29-21.29v-123a21.31,21.31,0,0,0-21.29-21.29H54.63a21.31,21.31,0,0,0-21.29,21.29v123a21.31,21.31,0,0,0,21.29,21.29Zm67,18a5.12,5.12,0,0,0-3-2.76l-24.84-8.51c-.32-.11-.65-.25-1-.4a6.12,6.12,0,0,0-.83-.53,5.08,5.08,0,0,0-6.19,1.07,41.56,41.56,0,0,1-30.58,14,5.12,5.12,0,0,0-5,5.11c0,.12,0,.25,0,.37v27.76a5.09,5.09,0,0,0,3.39,4.8,50.72,50.72,0,0,0,67.28-35.25l.11-.19c.25-.44.49-.88.7-1.35A5.08,5.08,0,0,0,213.57,325.7ZM354.34,106.82a5.11,5.11,0,0,0-5.1-5.1,4.93,4.93,0,0,0-1.65.28L193.84,154.7a5.1,5.1,0,0,0-1.33.69,9.11,9.11,0,0,0-3.77,7.37V287.08a9.12,9.12,0,0,0,3.77,7.37,5.07,5.07,0,0,0,1.33.68l153.75,52.71a4.93,4.93,0,0,0,1.65.28,5.11,5.11,0,0,0,5.1-5.1Zm62.16-37.3a20.64,20.64,0,1,0-41.28,0v310.8a20.64,20.64,0,1,0,41.28,0Zm-300.36,176H85.06a10.44,10.44,0,0,0,0,20.88h31.08a10.44,10.44,0,0,0,0-20.88Z" style="fill:#0075a2;stroke:#0075a2;stroke-miterlimit:10;stroke-width:13.461303784872413px"/><path d="M413.18,69.52c0-11.38-7.77-20.64-17.32-20.64s-17.32,9.26-17.32,20.64v310.8c0,11.38,7.77,20.64,17.32,20.64s17.32-9.26,17.32-20.64Z" style="fill:#fff"/></svg></div>
						<div class="pr-header-wcontent">
							<div class="pr-header-wtitle">For media enquiries</div>
							<div class="pr-header-wtext">Contact <a href="mailto:press@odessainc.com">press@odessainc.com</a></div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="pr-header-widget">
						<div class="pr-header-wicon"><svg id="f1b5c9d9-0627-4a84-a2e1-b66fe15bbdd7" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M72.81,495.24A10.26,10.26,0,0,1,62.56,485V271.31a5,5,0,0,0-5-5H27a10.26,10.26,0,0,1-10.25-10.25V164.47A10.27,10.27,0,0,1,27,154.21H42.28a5,5,0,0,0,5-5V110.26c0-1.13.05-2.18.09-3.24,0-.86.07-1.73.09-2.63,0-.15,0-.3,0-.45s0-.35-.06-.5a6.27,6.27,0,0,0,.11-.82c0-.09,0-.17,0-.26,1.16-46.18,12.06-73.09,33.32-82.25a41.78,41.78,0,0,1,16.64-3.35c30,0,66.57,29.47,95,55.15a5,5,0,0,0,3.35,1.28,5.12,5.12,0,0,0,1.29-.16,5,5,0,0,0,3.47-3.28,10,10,0,0,1,9.56-7.11h91.6a10.13,10.13,0,0,1,9.56,7.11A5,5,0,0,0,314.83,73a4.71,4.71,0,0,0,1.29.17,5,5,0,0,0,3.35-1.29c28.46-25.67,65-55.14,95-55.14a42,42,0,0,1,16.67,3.35c21.25,9.16,32.15,36.07,33.31,82.25,0,.09,0,.17,0,.26a5.83,5.83,0,0,0,.11.82c0,.15,0,.32-.06.5s0,.3,0,.45c0,.9.06,1.77.09,2.63,0,1.06.09,2.11.09,3.24V149.2a5,5,0,0,0,5,5H485a10.27,10.27,0,0,1,10.25,10.26v91.58A10.26,10.26,0,0,1,485,266.3H454.45a5,5,0,0,0-5,5V485a10.26,10.26,0,0,1-10.25,10.25ZM317.06,266.3a5,5,0,0,0-5,5V469.73a5,5,0,0,0,5,5H423.92a5,5,0,0,0,5-5V271.31a5,5,0,0,0-5-5h-38.7a5,5,0,0,0-4.83,6.36,218,218,0,0,1,8,59.7,10.26,10.26,0,0,1-20.51,0c0-22.69-3.22-43.77-9.58-62.65a5,5,0,0,0-4.75-3.41Zm-91.59,0a5,5,0,0,0-5,5V469.73a5,5,0,0,0,5,5h61.06a5,5,0,0,0,5-5V271.31a5,5,0,0,0-5-5Zm-137.39,0a5,5,0,0,0-5,5V469.73a5,5,0,0,0,5,5H194.94a5,5,0,0,0,5-5V271.31a5,5,0,0,0-5-5H158.46a5,5,0,0,0-4.75,3.41c-6.36,18.88-9.58,40-9.58,62.65a10.26,10.26,0,0,1-20.51,0,218,218,0,0,1,8-59.7,5,5,0,0,0-4.83-6.36ZM323,174.72a5,5,0,0,0-3,9A160.5,160.5,0,0,1,369.35,243a5,5,0,0,0,4.5,2.81h95.87a5,5,0,0,0,5-5V179.73a5,5,0,0,0-5-5Zm-67,.38a5.13,5.13,0,0,0-1.17.14c-13,3.13-57.59,16.9-86.29,62.89a5,5,0,0,0,4.24,7.66H339.22a5,5,0,0,0,4.24-7.66c-28.7-46-73.3-59.76-86.29-62.89A5.13,5.13,0,0,0,256,175.1Zm-213.72-.38a5,5,0,0,0-5,5v61.05a5,5,0,0,0,5,5h95.87a5,5,0,0,0,4.5-2.81A160.5,160.5,0,0,1,192,183.76a5,5,0,0,0-3-9ZM414.1,37.23c-28.5,0-76.57,45.43-99.67,67.27l-.81.76a5,5,0,0,0-1.57,3.64v40.3a5,5,0,0,0,5,5H439.19a5,5,0,0,0,5-5V118.68a5,5,0,0,0-5-5H408.66a10.26,10.26,0,1,1,0-20.51h29.63a5,5,0,0,0,5-5.44c-3-34.35-12.64-45.48-20.22-48.77A22.68,22.68,0,0,0,414.1,37.23ZM225.47,83.14a5,5,0,0,0-5,5v61a5,5,0,0,0,5,5h61.06a5,5,0,0,0,5-5v-61a5,5,0,0,0-5-5ZM72.81,113.67a5,5,0,0,0-5,5V149.2a5,5,0,0,0,5,5H194.94a5,5,0,0,0,5-5V108.9a5,5,0,0,0-1.58-3.65l-.82-.77C162.37,71.23,123,37.22,97.89,37.22A22.7,22.7,0,0,0,89,38.93c-7.61,3.31-17.28,14.44-20.25,48.79a5,5,0,0,0,5,5.44h29.63a10.26,10.26,0,1,1,0,20.51Z" style="fill:#0075a2;stroke:#0075a2;stroke-miterlimit:10;stroke-width:14.140018850171751px"/></svg></div>
						<div class="pr-header-wcontent">
							<div class="pr-header-wtitle">Need some assets?</div>
							<div class="pr-header-wtext"><a href="#">Download Press Kit</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pr-list">
		<div class="container">
			<div class="pr-list-head">
				<div class="pr-list-htop"><a href="<?php echo base_url(); ?>newsroom">< Back</a></div>
				<div class="pr-list-hbot">
					<h3>Announcements</h3>
					<div class="pr-list-hbfilter"><span>Browse by year</span><select class="pr-list-hbfselect"></select>
					</div>
				</div>
			</div>
			<div class="pr-list-content">

			</div>
			<div class="pr-list-cgroup pr-list-cgroup-clone">
				<div class="pr-list-cgtitle"></div>
				<div class="pr-list-cglist"></div>
			</div>
		</div>
	</div>
</div>