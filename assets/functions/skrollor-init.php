<div id="skrollr-body"></div>
<script type="text/javascript">
	jQuery(document).ready(function() {
	    var s = skrollr.init({
	    	beforerender: function(data) {
        		return data.direction == 'down';
    		}
    	});
	});
</script>