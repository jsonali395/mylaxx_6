

<div class="Rectangle-10 clearfix">
	
	<br clear="both"/>
	
	<div class="modal-main">
		<div class="modal-close-button" onclick="window.history.back();"><img src="<?=asset_url()?>img/ios7-close-empty.png"/></div>
	</div>

	
	<div id="Purchasing-Modal" class="Purchasing-Modal">
		
		<div class="" style="text-align: center">
			<span class="Modal-Header">Following isn't supported on the web yet</span>
			<p style="width:520px;margin:0 auto;margin-top: 16px; margin-bottom: 16px;font-size:15px;">Follow this user from within the OpenBazaar app. It's available for: Windows, Mac and Linux. Mobile coming soon.</p>
			
			<button class="download-button" onclick="ga('send','event','Download Button', '', '', 1);window.open('https://openbazaar.org/download')">Download OpenBazaar</button>
		</div>
		
		<div style="margin-top:20px;height:1px; background-color:#d2d3d9;"></div>
			
		<div style="margin-top:30px">
			<div style="font-size:14px;margin-bottom:13px">Already have OpenBazaar installed?</div>
			<div style="display: table-row; vertical-align: middle;">
				<div class="modal-button button" onclick="location.href='ob://<?=$peerID?>/store';">Open user profile in OpenBazaar</div>
				<span class="" style="font-size:13px;display: table-cell;vertical-align: middle;padding-left: 10px;color:#797979">View this profile in OpenBazaar</span>
			</div>
			<div style="margin-top:12px;">
			<div style="display: table-row; vertical-align: middle;">
				<div class="modal-button button copy-btn" data-type="attribute" data-attr-name="data-clipboard-text" data-model="obLink" style="width:62px;height:38px;">Copy URL</div>
				<div class="" style="font-size:13px;max-width:50%;display: table-cell;overflow: hidden; text-overflow: ellipsis;vertical-align: middle;padding-left: 10px;color:#797979">Profile URL: <a id="obLink" style="text-decoration: none" href="ob://<?=$peerID?>/store">ob://<?=$peerID?>/store</a></div>
			</div>
			</div>
			
			
			
		</div>
			

					
			
	</div>
	
</div>