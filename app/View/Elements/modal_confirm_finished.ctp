<div id="modalConfirmFinished" aria-hidden="false"
	aria-labelledby="finished-confirmation" tabindex="-1" role="dialog"
	class="modal fade in">
	<form id="formFinishedRecord" accept-charset="utf-8" method="post"
		action="">
		<div class="modal-dialog modal-sm">
			<div class="modal-content border-text">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button btn-sm">
						<span tabindex="8" aria-hidden="true">×</span> <span
							class="sr-only"><?php echo __("Close") ?></span>
					</button>
					<strong class="modal-title"><?php echo __("Finished Confirmation") ?></strong>
				</div>
				<div class="modal-body">
					<p><?php echo __("Are you sure to finished this record") ?>?</p>
				</div>
				<div class="modal-footer t-center">
					<button type="submit"
						class="btn btn-success btn-same-width btn-round"><?php echo __("Agree") ?></button>
					<button data-dismiss="modal"
						class="btn btn-default btn-same-width btn-round" type="button"><?php echo __("Cancel") ?></button>
				</div>
			</div>
		</div>
	</form>
</div>
