<script>
    $(document).ready(function(){
        $('#ReportAddDate').click(function(){
//            alert('hello');
            var monthText = $('#ReportDateMonth option:selected').text();
            var month = $('#ReportDateMonth').val();
            var day = $('#ReportDateDay').val();
            var year = $('#ReportDateYear').val();
            var date = monthText + ' ' + day + ", " + year;
            var dateValue = year + '-' +month + '-' + day;
            $('#LiquidationDates').append('<option value="'+ dateValue+'">'+ date +'</option>');
        });
        $('#ReportRemoveDate').click(function(){
            $('#LiquidationDates option:selected').remove();
        });
        $('#LiquidationDateForm').submit(function(){
            $('#LiquidationDates').find('option').each(function(){
                $(this).attr('selected', 'selected');
            });
        });
    });
</script>

<div class="liquidations">
<?php echo $this->Form->create('Liquidation');?>
	<fieldset>
		<legend><?php __('Select Dates'); ?></legend>
	<?php
		echo $this->Form->input('Report.date');
		echo $this->Form->button('Add', array('type'=>'button', 'class'=>'actions date', 'id'=>'ReportAddDate'));
		echo $this->Form->button('Remove', array('type'=>'button', 'class'=>'actions date', 'id'=>'ReportRemoveDate'));
		echo $this->Form->input('dates', array('type'=>'select', 'multiple'=>'multiple'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Next', true));?>
</div>
