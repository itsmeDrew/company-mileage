// ==== ROI CALCULATOR ==== //

;(function($){
  $(function(){
    var minimumMonthlyCost = 50.00;
    var roiEl = $('.js-roi');
    var roiBtnEl = roiEl.find('.js-btn');

    function calculateSavings() {
      var _employees = $.trim(roiEl.find('#employee').val());
      var _milesPerWeek = $.trim(roiEl.find('#miles').val());
      var _reimbursementRate = $.trim(roiEl.find('#rate').val());
      var _total = parseFloat(_employees) * parseFloat(_milesPerWeek) * 52 * parseFloat(_reimbursementRate);
      var _estimatedSavings = _total * 0.25;

    	if (_employees === '' || _milesPerWeek === '' || _reimbursementRate === '') {
    	  alert("Please fill in all fields!");
    		return false;
    	}

      $('#mileage-reimbursement').val("$" + $.currency(_total, {c: 0}));
      $('#estimated-savings').val("$" + $.currency(_estimatedSavings, {c: 0}));

    	return true;
    }

    $(function() {
      roiBtnEl.click(function(e) {
        e.preventDefault();

        if (calculateSavings()) {
    			roiEl.find('#calculator').hide();
    			roiBtnEl.hide();
    			roiEl.find('.roi__results').slideDown("slow",function(){$('#roi-reset').show();});
    		}
      });
    });

  });
}(jQuery));
