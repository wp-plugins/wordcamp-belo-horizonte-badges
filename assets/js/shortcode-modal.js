
jQuery(function($){
	var selection = false;
	var wordcamp_belohorizonte_badgesShortcodePanel = $('#wordcamp-belohorizonte-badges-shortcode-panel-tmpl').html();

	$('body').append(wordcamp_belohorizonte_badgesShortcodePanel);
	$('.media-modal-backdrop, .media-modal-close').on('click', function(){
		wordcamp_belohorizonte_badges_hideModal();
	})
	$(document).keyup(function(e) {
		if (e.keyCode == 27) {
			wordcamp_belohorizonte_badges_hideModal();
		}
	});

	// show modal
	$('#wordcamp-belohorizonte-badges-shortcodeinsert').click(function(){

		if($(this).data('shortcode')){
			window.send_to_editor('['+$(this).data('shortcode')+']');
			return;
		}
				
		// autoload item
		var autoload = $('.wordcamp-belohorizonte-badges-autoload');
		if(autoload.length){
			wordcamp_belohorizonte_badges_loadtemplate(autoload.data('shortcode'));
		}
		$('#wordcamp-belohorizonte-badges-category-selector').on('change', function(){
			wordcamp_belohorizonte_badges_loadtemplate('');
			$('.wordcamp-belohorizonte-badges-elements-selector').hide();
			$('#wordcamp-belohorizonte-badges-elements-selector-'+this.value).show().val('');
		});

		$('.wordcamp-belohorizonte-badges-elements-selector').on('change', function(){
			wordcamp_belohorizonte_badges_loadtemplate(this.value);
		});

		if(typeof tinyMCE !== 'undefined'){
			if(tinyMCE.activeEditor !== null){
				selection = tinyMCE.activeEditor.selection.getContent();
			}else{
				selection = false;
			}
		}else{
			selection = false;
		}
		if(selection.length > 0){
			$('#wordcamp-belohorizonte-badges-content').html(selection);
		}
		$('#wordcamp-belohorizonte-badges-shortcode-panel').show();
	});
	$('#wordcamp-belohorizonte-badges-insert-shortcode').on('click', function(){
		wordcamp_belohorizonte_badges_sendCode();
	})
	// modal tabs
	$('#wordcamp-belohorizonte-badges-shortcode-config').on('click', '.wordcamp-belohorizonte-badges-shortcode-config-nav li a', function(){
		$('.wordcamp-belohorizonte-badges-shortcode-config-nav li').removeClass('current');
		$('.group').hide();
		$(''+$(this).attr('href')+'').show();
		$(this).parent().addClass('current');
		return false;
	});


});

function wordcamp_belohorizonte_badges_loadtemplate(shortcode){
	var target = jQuery('#wordcamp-belohorizonte-badges-shortcode-config');
	if(shortcode.length <= 0){
		target.html('');
	}
	target.html(jQuery('#wordcamp-belohorizonte-badges-'+shortcode+'-config-tmpl').html());
}

function wordcamp_belohorizonte_badges_sendCode(){

	var shortcode = jQuery('#wordcamp-belohorizonte-badges-shortcodekey').val(),
		output = '['+shortcode,
		ctype = '',
		fields = {};
	
	if(shortcode.length <= 0){return; }

	if(jQuery('#wordcamp-belohorizonte-badges-shortcodetype').val() === '2'){
		ctype = jQuery('#wordcamp-belohorizonte-badges-default-content').val()+'[/'+shortcode+']';
	}
	jQuery('#wordcamp-belohorizonte-badges-shortcode-config input,#wordcamp-belohorizonte-badges-shortcode-config select,#wordcamp-belohorizonte-badges-shortcode-config textarea').not('.configexclude').each(function(){
		if(this.value){
			// see if its a checkbox
			var thisinput = jQuery(this),
				attname = this.name;

			if(thisinput.prop('type') == 'checkbox'){
				if(!thisinput.prop('checked')){
					return;
				}
			}
			if(thisinput.prop('type') == 'radio'){
				if(!thisinput.prop('checked')){
					return;
				}
			}

			if(attname.indexOf('[') > -1){
				attname = attname.split('[')[0];
				var newloop = {};
				newloop[attname] = this.value;
				if(!fields[attname]){
					fields[attname] = [];
				}
				fields[attname].push(newloop);
			}else{
				var newfield = {};
				fields[attname] = this.value;
			}
		}
	});
	for( var field in fields){
		if(typeof fields[field] == 'object'){
			for(i=0;i<fields[field].length; i++){
				output += ' '+field+'_'+(i+1)+'="'+fields[field][i][field]+'"';
			}
		}else{
			output += ' '+field+'="'+fields[field]+'"';
		}
	}
	wordcamp_belohorizonte_badges_hideModal();
	window.send_to_editor(output+']'+ctype);

}
function wordcamp_belohorizonte_badges_hideModal(){
	jQuery('#wordcamp-belohorizonte-badges-shortcode-panel').hide();
	wordcamp_belohorizonte_badges_loadtemplate('');
	jQuery('#wordcamp-belohorizonte-badges-elements-selector').show();
	jQuery('.wordcamp-belohorizonte-badges-elements-selector').val('');	
	jQuery('#wordcamp-belohorizonte-badges-category-selector').val('');
}
