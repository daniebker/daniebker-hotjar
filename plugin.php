<?php

class HotjarPlugin extends KokenPlugin {

 function __construct()
  {	  
    $this->require_setup = true;
    $this->register_hook('before_closing_head', 'render');
  }

  function render()
  {
	  
    echo <<<OUT
			<!-- Hotjar Tracking Code -->
			<script>
				(function(h,o,t,j,a,r){
					h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
					h._hjSettings={hjid:{$this->data->hotjar_tracking_id},hjsv:5};
					a=o.getElementsByTagName('head')[0];
					r=o.createElement('script');r.async=1;
					r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
					a.appendChild(r);
				})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
			</script>
OUT;
  }
  
}