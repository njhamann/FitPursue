var baseURL = 'http://localhost:8888/';
//var baseURL = 'http://localhost/';

var base9Core = {
	updateResults:function(html){
		$('.postResults').empty().append(html);	
	}
}

/* //////////////////////////////////////////////////////////////////////////
// Generic Ajax
////////////////////////////////////////////////////////////////////////// */
var ajax = {
    go: function(type, url, data, returnData, callback) {
		$.ajax({
			type: type,
			url: url,
			data: data,
			success: function(msg){
				if(returnData)
					callback(msg);
				else
					callback();
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				alert('There has been an error with your request, please try again.');
			}
		});
    }
};
 
/* //////////////////////////////////////////////////////////////////////////
// Returns url hash
////////////////////////////////////////////////////////////////////////// */

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        //vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

/* //////////////////////////////////////////////////////////////////////////
// Wysiwyg editor
////////////////////////////////////////////////////////////////////////// */

function wysiwygInit(){
	
	$('#wysiwyg, #wysiwyg2').wysiwyg({
		controls: {
			strikeThrough : { visible : false },
			underline     : { visible : true },
			justifyLeft   : { visible : false },
			justifyCenter : { visible : false },
			justifyRight  : { visible : false },
			justifyFull   : { visible : false },
			indent  : { visible : false },
			outdent : { visible : false },
			subscript   : { visible : false },
			superscript : { visible : false },
			insertImage : { visible : false },
			insertTable : { visible : false },
			h1:{ visible : false },
			h2:{ visible : false },
			h3:{ visible : false },
			italic:{ visible : true },
			bold:{ visible : true },
			createLink:{ visible : false },
			undo : { visible : false },
			redo : { visible : false },
			removeFormat : { visible : false },
			insertOrderedList    : { visible : false },
			insertUnorderedList  : { visible : true },
			insertHorizontalRule : { visible : false },
			h4: { visible : false },
			h5: { visible : false },
			h6: { visible : false },
			cut   : { visible : false },
			copy  : { visible : false },
			paste : { visible : false },
			html  : { visible : false },
			exam_html : {visible : false}
		}
	});

	//$('#wysiwyg').wysiwyg('insertHtml', $('#wysiwyg').val());
	//$('#wysiwyg2').wysiwyg('insertHtml', $('#wysiwyg2').val());

}